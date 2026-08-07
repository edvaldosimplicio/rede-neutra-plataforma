<?php

Class model_banners extends model{

	public function lista($grupo, $empresa_id = null){
    	
    	$lista = array();

		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM banners_ordem WHERE codigo='$grupo' ORDER BY id desc limit 1");
		$data_ordem = $exec->fetch_object();

		if(isset($data_ordem->data) && !empty($data_ordem->data)){

			$order = explode(',', $data_ordem->data);

			$n = 0;
			foreach($order as $key => $value){

				$conexao = new mysql();
				$sql = "SELECT * FROM banners WHERE id='$value' ";
				if (!empty($empresa_id)) {
					$sql .= " AND (empresa_id='$empresa_id' OR empresa_id IS NULL OR empresa_id='') ";
				}
				$coisas = $conexao->Executar($sql);
				$data = $coisas->fetch_object();
				
				if(isset($data->titulo)){
					
					$lista[$n]['id'] = $data->id;
					$lista[$n]['codigo'] = $data->codigo;
					$lista[$n]['titulo'] = $data->titulo;
					$lista[$n]['imagem'] = $data->imagem;
					$lista[$n]['empresa_id'] = isset($data->empresa_id) ? $data->empresa_id : '';
					
					$n++;
				}
			}
		} else {
			// Busca direta caso não haja registro de ordem
			$conexao = new mysql();
			$sql = "SELECT * FROM banners WHERE grupo='$grupo' ";
			if (!empty($empresa_id)) {
				$sql .= " AND (empresa_id='$empresa_id' OR empresa_id IS NULL OR empresa_id='') ";
			}
			$sql .= " ORDER BY id DESC";
			$exec = $conexao->Executar($sql);
			$n = 0;
			while($data = $exec->fetch_object()){
				$lista[$n]['id'] = $data->id;
				$lista[$n]['codigo'] = $data->codigo;
				$lista[$n]['titulo'] = $data->titulo;
				$lista[$n]['imagem'] = $data->imagem;
				$lista[$n]['empresa_id'] = isset($data->empresa_id) ? $data->empresa_id : '';
				$n++;
			}
		}
	  	
		return $lista;
	}

	///////////////////////////////////////////////////////////////////////////
	//

	public function carrega($codigo){
    	$db = new mysql();
		$exec = $db->executar("SELECT * FROM banners where codigo='$codigo' ");
		return $exec->fetch_object();
    }

	///////////////////////////////////////////////////////////////////////////
	//
	
	public function altera_imagem($imagem, $codigo){ 

		$db = new mysql();
		$db->alterar('banners', array(
			'imagem'=>$imagem
		), " codigo='$codigo' " );
		
	}

	///////////////////////////////////////////////////////////////////////////
	//	 
	
	public function apaga_banner($codigo){ 
		
		$db = new mysql();
		$db->apagar('banners', " codigo='$codigo' ");
		
	}

	///////////////////////////////////////////////////////////////////////////
	//

	public function ordem($grupo){ 
    	$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM banners_ordem WHERE codigo='$grupo' ORDER BY id desc limit 1");
		$data_ordem = $exec->fetch_object();
		if(isset($data_ordem->data)){
			return $data_ordem->data;
		} else {
			return "";
		}
	}

	///////////////////////////////////////////////////////////////////////////
	//

	public function altera_ordem($ordem, $codigo){
		
		$db = new mysql();
		$db->apagar("banners_ordem", " codigo='$codigo' ");
 		
 		$db = new mysql();
		$db->inserir("banners_ordem", array(
			"codigo"=>$codigo,
			"data"=>$ordem
		));

	}
	
	///////////////////////////////////////////////////////////////////////////
	// GRUPOS

	public function lista_grupos($empresa_id = null){
 		
 		$categorias = array();

		$db = new mysql();
		$sql = "SELECT * FROM banners_grupos ";
		if (!empty($empresa_id)) {
			$sql .= " WHERE (empresa_id='$empresa_id' OR empresa_id IS NULL OR empresa_id='') ";
		}
		$sql .= " ORDER BY titulo ASC";

		$exec = $db->executar($sql);
		$i = 0;
		while($data = $exec->fetch_object()) {
			
			$categorias[$i]['id'] = $data->id;
			$categorias[$i]['codigo'] = $data->codigo;
			$categorias[$i]['titulo'] = $data->titulo;
			$categorias[$i]['bloqueio'] = isset($data->bloqueio) ? $data->bloqueio : 0;
			$categorias[$i]['empresa_id'] = isset($data->empresa_id) ? $data->empresa_id : '';

			$i++;
		}
		return $categorias;
	}

	///////////////////////////////////////////////////////////////////////////
	// EMPRESAS (Lista de empresas cadastradas no sistema para filtro)

	public function lista_empresas(){
		$empresas = array();
		$db = new mysql();
		$exec = $db->executar("SELECT codigo, nome, usuario FROM adm_usuario ORDER BY nome ASC");
		if ($exec) {
			while($data = $exec->fetch_object()){
				$empresas[] = array(
					'codigo' => $data->codigo,
					'nome' => !empty($data->nome) ? $data->nome : $data->usuario,
					'usuario' => $data->usuario
				);
			}
		}
		return $empresas;
	}

	///////////////////////////////////////////////////////////////////////////
	//

	public function carrega_grupo($codigo){
    	$db = new mysql();
		$exec = $db->executar("SELECT * FROM banners_grupos where codigo='$codigo' ");
		return $exec->fetch_object();
    }
	
}