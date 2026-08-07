<?php
Class model_banners extends model{

    public function lista($grupo, $empresa_id = null){
		
    	$lista = array();
    	$n = 0;

		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM banners_ordem WHERE codigo='$grupo' ORDER BY id desc limit 1");		
		$data_ordem = $exec->fetch_object();

		if(isset($data_ordem->data)){

			$order = explode(',', $data_ordem->data);
						 
			foreach($order as $key => $value){
				
				$conexao = new mysql();
				$sql = "SELECT * FROM banners WHERE id='$value' ";
				if(!empty($empresa_id)){
					$sql .= " AND (empresa_id='$empresa_id' OR empresa_id IS NULL OR empresa_id='') ";
				}
				$coisas = $conexao->Executar($sql);
				$data = $coisas->fetch_object();
				
				if(isset($data->imagem)){
					
					$lista[$n]['titulo'] = $data->titulo;
					$lista[$n]['imagem'] = PASTA_CLIENTE.'img_banners/'.$data->imagem;
					
					if($data->endereco){
						$lista[$n]['link'] = $data->endereco;
					} else {
						$lista[$n]['link'] = false;
					}

				$n++;
				}
				
			}
		} else {
			$conexao = new mysql();
			$sql = "SELECT * FROM banners WHERE grupo='$grupo' ";
			if(!empty($empresa_id)){
				$sql .= " AND (empresa_id='$empresa_id' OR empresa_id IS NULL OR empresa_id='') ";
			}
			$sql .= " ORDER BY id DESC";
			$exec = $conexao->Executar($sql);
			while($data = $exec->fetch_object()){
				if(isset($data->imagem)){
					$lista[$n]['titulo'] = $data->titulo;
					$lista[$n]['imagem'] = PASTA_CLIENTE.'img_banners/'.$data->imagem;
					$lista[$n]['link'] = $data->endereco ? $data->endereco : false;
					$n++;
				}
			}
		}
		$retorno['lista'] = $lista;
		
		// cores
		$layout = new model_layout();
		$retorno['cores'] = $layout->lista_cores($grupo);
  		
		return $retorno;
	}

	public function lista_simples($grupo, $empresa_id = null){
		
    	$lista = array();
    	$n = 0;

		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM banners_ordem WHERE codigo='$grupo' ORDER BY id desc limit 1");		
		$data_ordem = $exec->fetch_object();

		if(isset($data_ordem->data)){

			$order = explode(',', $data_ordem->data);
						 
			foreach($order as $key => $value){
				
				$conexao = new mysql();
				$sql = "SELECT * FROM banners WHERE id='$value' ";
				if(!empty($empresa_id)){
					$sql .= " AND (empresa_id='$empresa_id' OR empresa_id IS NULL OR empresa_id='') ";
				}
				$coisas = $conexao->Executar($sql);
				$data = $coisas->fetch_object();
				
				if(isset($data->imagem)){
					
					$lista[$n]['titulo'] = $data->titulo;
					$lista[$n]['imagem'] = PASTA_CLIENTE.'img_banners/'.$data->imagem;
					
					if($data->endereco){
						$lista[$n]['link'] = $data->endereco;
					} else {
						$lista[$n]['link'] = false;
					}

				$n++;
				}
				
			}
		}
		
		return $lista;
	}


}