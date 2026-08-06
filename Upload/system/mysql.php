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

    protected function escape($value) {
        if (is_string($value)) {
            return "'" . $this->real_escape_string($value) . "'";
        }
        if (is_numeric($value)) {
            return $value;
        }
        if (is_null($value)) {
            return "NULL";
        }
        return "'" . $this->real_escape_string((string)$value) . "'";
    }

    public function executar($SQL){

        $resultado = $this->query($SQL);

        if (!$resultado) {
            error_log("MySQL Error: " . $this->error . " | SQL: " . $SQL);
        }

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


}