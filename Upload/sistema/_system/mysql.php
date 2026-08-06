<?php
/////////////////////////////////////////////////////////////////////////////////////////////////
// Classe de conexao com o banco de dados
Class mysql extends Mysqli{
    
    public function __construct(){
        try {
            
            @$this->connect( SERVIDOR, USUARIO, SENHA, BANCO );
            @$this->set_charset("utf8");
            if(mysqli_connect_errno() != 0) {
                throw new Exception(mysqli_connect_errno());
            }
        } catch(Exception $erro) {
            $mensagem = $erro->getMessage();
            $codigo   = $erro->getCode();
            $arquivo  = $erro->getFile();
            $trace  = $erro->getTraceAsString();            
            exit;
        }
    }
    
    public function __destruct(){
        if(mysqli_connect_errno() == 0) {
            $this->close();
        }
    }

    public function executar($SQL){
        
        $resultado = $this->query($SQL);
        
        if(preg_match("#(select)#is", $SQL)) {
            return $resultado;
        } else {
            return $this->affected_rows;
        }
    }
    
    public function inserir($tabela, Array $dados){
        
        $campos = implode(', ', array_keys($dados));
        $valores = "'".implode("','", array_values($dados))."'";

        $SQL = " INSERT INTO `{$tabela}` ({$campos}) VALUES ({$valores}) ";

        $resultado = $this->query($SQL);
        
        return $this->affected_rows;
    }
    
    public function alterar($tabela, Array $dados, $condicoes){
        
        foreach ($dados as $key => $value) {
           $campos[] = "{$key}='".$value."'";
        }
        $campos = implode(", ", $campos);
        
        $SQL = " UPDATE `{$tabela}` SET $campos WHERE $condicoes ";
        
        $resultado = $this->query($SQL);
        
        return $this->affected_rows;
    }

    public function apagar($tabela, $condicoes){
        
        $SQL = " DELETE FROM `{$tabela}` WHERE $condicoes ";
        
        $resultado = $this->query($SQL);
        
        return $this->affected_rows;
    }

    public function ultimo_id(){
        return $this->insert_id;
    }

    /**
     * SEGURANÇA: Executa query com prepared statements (previne SQL Injection)
     * 
     * Uso: $db->executar_seguro("SELECT * FROM tabela WHERE campo=?", "s", [$valor]);
     * Tipos: s=string, i=integer, d=double, b=blob
     *
     * Exemplo múltiplos params:
     *   $db->executar_seguro("SELECT * FROM t WHERE a=? AND b=?", "si", [$str, $int]);
     */
    public function executar_seguro($sql, $tipos = '', $params = []) {
        $stmt = $this->prepare($sql);
        if (!$stmt) {
            return false;
        }
        if (!empty($params) && !empty($tipos)) {
            $stmt->bind_param($tipos, ...$params);
        }
        $stmt->execute();
        if (preg_match("#^\\s*(select|show|describe)#is", $sql)) {
            return $stmt->get_result();
        }
        $afetados = $stmt->affected_rows;
        $stmt->close();
        return $afetados;
    }

    /**
     * SEGURANÇA: Escapa string para uso em queries legadas
     * Preferir executar_seguro() sempre que possível
     */
    public function escapar($valor) {
        return $this->real_escape_string($valor);
    }

}