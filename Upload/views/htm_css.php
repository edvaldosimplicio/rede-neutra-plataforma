<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<style type="text/css">

	.logo_border_line {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 5px;
		background: linear-gradient(90deg, #ff7b00 0%, #e01a89 33%, #6f00ff 66%, #26d213 100%);
		z-index: 10000;
	}
	
	body, h1, h2, h3, h4, h5, h6, p, a, span, button, input, select, textarea {
		font-family: 'Inter', sans-serif !important;
	}
	h1, h2, h3, h4, h5, h6, .botao_padrao, a.botao_padrao, .planos_titulo, .planos_valor, .planos_botao, .destaques_titulo, .titulo_padrao {
		font-family: 'Outfit', sans-serif !important;
	}
	
	body {
		background-color: #030712 !important;
		background-image: radial-gradient(circle at 50% 0%, #08112c 0%, #030712 100%) !important;
		color: #f1f5f9 !important;
	}
	
	.botao_padrao{
		display: inline-block;
		padding-left: 20px;
		padding-right: 20px;
		padding-top: 7px;
		padding-bottom: 7px; 
		background-color: <?=$pagina_cores[2]?> !important;
		color: <?=$pagina_cores[3]?> !important;
	}
	.botao_padrao:hover{
		background-color: <?=$pagina_cores[4]?> !important;
		color: <?=$pagina_cores[5]?> !important;
	}

	a.botao_padrao{
		display: inline-block;
		padding-left: 20px;
		padding-right: 20px;
		padding-top: 7px;
		padding-bottom: 7px; 
		background-color: <?=$pagina_cores[2]?> !important;
		color: <?=$pagina_cores[3]?> !important;
	}

	a.botao_padrao:hover{
		background-color: <?=$pagina_cores[4]?> !important;
		color: <?=$pagina_cores[5]?> !important;
	}

	a.botao_padrao_a{
		display: inline-block;
		padding-left: 20px;
		padding-right: 20px;
		padding-top: 7px;
		padding-bottom: 7px; 
		background-color: <?=$pagina_cores[2]?> !important;
		color: <?=$pagina_cores[3]?> !important;
	}
	a.botao_padrao_a:hover{
		background-color: <?=$pagina_cores[4]?> !important;
		color: <?=$pagina_cores[5]?> !important;
	}

	
	
	.margemtopo_interno{
		position: relative;
		width: 100%;
		height:0px;
	}
	
	.titulo_padrao {
		font-weight: normal;
		font-size:28px;
		text-align: left;
		padding-top:0px !important;
		padding-bottom:20px;
		margin-bottom: 0px;
		width:100%;
		max-width: 100%; 
		font-weight: bold;
		text-align: center;
		color: <?=$pagina_cores[7]?>;
	}
	.titulo_padrao_linha { 
		width: 100%;
		margin-bottom:10px;
		padding-top: 0px;
		margin-top:-20px;
		text-align: center;
		font-size:30px; 
		color: <?=$pagina_cores[7]?>;
	}
	
	.botao_padrao{ 
	}
	.botao_padrao:hover{
		background-color: #2e3092 !important;
		color:#fff !important;
	}

	a.botao_padrao_a{
		display: inline-block;
		padding-left: 20px;
		padding-right: 20px;
		padding-top: 7px;
		padding-bottom: 7px; 
	}
	a.botao_padrao_a:hover{
		background-color: #2e3092 !important;
		color:#fff !important;
	}

	.botao_upload{ 
		border:none;
		padding-top:4px;
		padding-bottom:4px;
		padding-left:15px;
		padding-right:15px;
		font-size: 13px;
		cursor: pointer;
	}

	.contactinfo ul li a {
		color:#ccc;
	}
	.social-icons ul li a {
		color:#333;
	}


	.shop-menu ul li a {
		background: none;
		color:#1a1a1a;
	}
	.shop-menu ul li a:hover {
		background: none;
	}


	.shop-menu ul li {
		padding-left: 0px;
	}
	.shop-menu ul li a:hover {
		color: #1a1a1a;
		margin-top:20px;
	}
	.shop-menu ul li a:hover {
		margin-top:20px;
		color:#1a1a1a;
	}
	
	.nomedousuario {
		text-align:right;
		padding-top: 20px;
		font-size: 14px;
		color: #000;
	}   

	.botao_busca_blog {
		padding: 10px 14px;
		font-size: 14px !important;
		border:0px;
		border-radius: 0px;
	}

	.texto_menu_resp {
		display:none;
		position: absolute;
		right: 80px;
		top: 15px;
		font-size: 14px;
		color:#000;
	}

	.category-products .panel-default .panel-heading .panel-title a{
		color:#1a1a1a;
	}

	.add-to-cart {
		width: 100%;
		border-radius:4px !important;
	}
	.add-to-cart:hover {
		border-radius:4px !important;
	}
	.indisponivel{
	}
	.indisponivel:hover {
	}

	.contactinfo ul li:first-child {
		margin-left: 0px;
	}

	.left-sidebar h2, .brands_products h2 {
		color: #000000;
		font-size:21px;
	}
	.category-products {
		border: 1px solid #ddd;
	}
	.banner_lateral{
		width:100%;
		text-align:center;
		margin-top:30px;
	}
	.banners_esquerda_responsivo1{
		display: block;
	}
	.banners_esquerda_responsivo2{
		display: none;	
	}

	.botao_upload{ 
		border:none;
		padding-top:4px;
		padding-bottom:4px;
		padding-left:15px;
		padding-right:15px;
		font-size: 13px;
		cursor: pointer;
	}

	.news_texto{
		text-align: left;
		font-size: 24px;
		font-weight: 700;
		padding-bottom: 15px;
		padding-top:40px;
		letter-spacing: -0.5px;
	}
	.form_news{
		border-radius: 50px;
		width: 100%;
		height: 46px;
		background-color: rgba(255, 255, 255, 0.95);
		border: 1px solid rgba(255, 255, 255, 0.15);
		color: #04102c;
		padding-left: 20px;
		padding-right: 20px;
		margin-top: 5px;
		font-size: 14px;
		font-weight: 500;
		transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
	}
	.form_news:focus {
		outline: none !important;
		border-color: #00e5ff !important;
		box-shadow: 0 0 12px rgba(0, 229, 255, 0.35) !important;
		background-color: #ffffff;
	}
	.news_botao {
		font-size: 13px; 
		border-radius: 50px; 
		border: 0;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 1px;
		text-align: center;
		width: 100%;
		height: 46px !important; 
		cursor: pointer;
		margin-top: 5px;
		transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
		display: flex;
		align-items: center;
		justify-content: center;
	} 
	.news_botao i {
		margin-right: 6px;
		font-size: 11px;
	}
	.news_botao:hover{
		transform: translateY(-2px);
		box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
		filter: brightness(1.1);
	}

	.pull-right a {
		font-weight: normal;
		font-style: normal;
		color:#FFF;
		text-decoration: none;
		font-size: 13px;
	}
	.pull-right a:hover{
		text-decoration: underline;
	}
	a#scrollUp{
		background: #549c13;
		color: #FFF;
	}

	.single-widget h2 {
		padding-top: 5px;
		margin-bottom: 10px;
		color: #FFF;
	}

	.single-widget ul li a:hover {
		color:#000;
	}


	.modal-content {
		border-radius: 0px;
	}
	.busca_input{
		border-radius: 0px;
	}

	#slider {
		padding-top: 0px;
		padding-bottom: 0px;
		margin-bottom:0px;
		margin-top: 0px;
	}

	.control-carousel {
		top:50%;
		margin-top:-40px;
		color: #FFF;
	}
	.control-carousel:hover {
		color:#FFF;
	}
	.carousel-indicators li.active {
		background: #FFF;
	}

	.banner_central {
		width: 100%;
		height: 500px;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
	}
	.item {
		padding-left: 0px;
	}

	.produto_detalhes_titulo {
		font-size: 24px;
		color: #000;
		padding-top: 3px;
		padding-bottom: 7px;
		margin-bottom: 25px;
		font-weight: bold;
		border-bottom:1px solid #ddd;
	}

	.produto_detalhes {
		font-size: 14px;
		color: #666;
		padding-bottom: 5px;
		padding-top: 5px;
		font-weight: normal;
	}

	.produto_detalhes_quant{
		font-size: 15px;
		color: #666;
		padding-top: 5px;
	}

	.produto_detalhes_valor {
		font-size: 25px;
		font-weight: bold;
		color: blue;
		padding-bottom: 5px;
		padding-top: 0px;
		margin-top: 0px;
	}

	#similar-product {
		margin-top:0px;
	}

	.produto_imagem_detalhes {
		display: inline-block;
		width: 100%;
		height: 300px;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		cursor: pointer;
	}

	.product-information {
		border: 1px solid #ddd;
		padding-left: 35px;
		padding-top: 20px;
		padding-bottom: 20px;
		padding-right: 35px;
		min-height: 300px;
	}
	.product-information span {
		margin-bottom: 0px;
		margin-top: 0px;
	}

	.cart {
		background: #5a981c;
		color: #FFF;
		margin:0px;
	}

	.cart:hover {
		background: #528b19;
		color: #FFF;
	}

	.item-control {
		top: 50%;
		margin-top:-10px;
	}
	.item-control i {
		background: #ccc;
		color: #000;
	}
	.item-control i:hover {
		background: #eee;
		color: #333;
	}


	.produtos_detalhes_valortotal{
		font-size: 14px;
		color: #666;
		font-weight:normal;
		margin-top: 15px;
	}

	.produtos_detalhes_margin{
		padding-left: 40px;
	}

	#produto_detalhes_parcelas{
		font-size:13px;
		color:#666;
		font-weight: normal;
	}

	.tabela_boa thead tr {
		background-color: #f2f2f2;
		border: 0px;
	}

	.carrinho_lista_imagem{
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		width: 15%;
		height: 75px;
		float: left;
		margin-top: 10px;
		margin-bottom: 10px;
	} 
	.carrinho_lista_texto{
		float: left;
		padding-top: 10px;
		padding-bottom: 10px;
		width: 85%;
	}
	.carrinho_lista_valor{
		padding-top: 38px;
	}
	.carrinho_lista_remover{
		padding-top: 31px;
		font-size: 20px;
		font-weight: bold;
	}

	.carrinho_quantidade_input{
		width: 50px;
		display: inline-block;
		height: 32px;
		text-align: center;
	}

	.botao_finalizar {
		background: #5a981c;
		color: #FFF;
		margin:0px;
	}
	.botao_finalizar:hover {
		background: #528b19;
		color: #FFF;
		margin:0px;
	}

	.botao_continuar_comprando {
		background: #0067a9;
		color: #FFF;
		margin:0px;
	}
	.botao_continuar_comprando:hover {
		background: #005388;
		color: #FFF;
		margin:0px;
	}


	#contact-page .form-control {
		border-radius: 0px;
	}



	.carrinho_erro{
		text-align: center;
		padding-top: 50px;
		padding-bottom: 50px;
		font-size: 16px;
		color:#333;
	}

	.ajuste_botoes_carrinho_d{
		padding-top:50px; text-align:right;
	}
	.ajuste_botoes_carrinho_e{
		padding-top:50px; text-align:left;
	}

	.meusdados {
		background: #0067a9;
		color: #FFF;
		margin:0px;
	}
	.meusdados:hover {
		background: #005388;
		color: #FFF;
		margin:0px;
	}
	.bt_alterar_dados{
		position: absolute;
		top: 120px;
		right: 15px;
		text-align: right;
		width: 170px;
		z-index: 99999;
	}
	.tabela_pedidos thead tr {
		background-color: #f2f2f2;
		border: 0px;
	}
	.tabela_pedidos a{
		color:#000;
	}
	.tabela_pedidos a:hover{
		color:#999;
	}    
	.pedidostabela{
		padding-bottom:60px;
		width:70%;
	}	

	.videos_div{
		width: 100%;
		margin-top:5px;
		margin-bottom: 25px;
	}
	.videos_conteudo{
		width: 100%;
		height: 315px;
		overflow: hidden;
	}
	.videos_titulo {
		padding-top: 0px;
		margin-top: 0px;
		text-align: center;
		font-weight: 16px;
		font-weight: bold;
	}
	.videos_descricao {
		padding-top:10px;
		font-size: 14px;
		text-align: center;
	}
	.videos_conteudo {
		text-align: center;
		margin-top:15px;
	}
	a.videos_categorias{
		display: block;
		margin-top: 15px;
		font-size: 16px;
		cursor: pointer;
		font-weight: 500;
	}
	a.videos_categorias_topo{
		display: inline-block;
		margin-top: 10px;
		font-size: 15px;
		cursor: pointer;
		font-weight: 500;
		padding-right: 10px;
		margin-right: 8px;
	}



	.redessociais{
		float: left;
		margin-top:10px;
		margin-right: 10px;
	}
	.redessociais img{
		width: 40px;
	}



	.social_titulo{
		font-size: 16px;
		margin-top: 20px;
		margin-bottom:10px;
		font-weight: bold;
	}
	.social {
		padding-bottom: 40px;
		float: left;
		width: 60%;
	}
	.social ul {
		margin-left: 0px;
		padding-left: 0px;
	}
	.social li {
		list-style: none;
		float: left;
	}
	.social li a {
		display: block;
		width: 40px;
		height: 40px;
		text-align: center;
		line-height: 40px;
		color: #fff;
		margin: 0 3px;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		-ms-border-radius: 2px;
		border-radius: 2px;
		font-size: 16px;
	}

	.social li a.facebook {
		background: #5370bb;
	}
	.social li a.twitter {
		background: #6bb8db;
	}
	.social li a.pinterest {
		background: #e95659;
	}
	.social li a.googleplus {
		background: #dd4b39;
	}
	.social li a.linkedin {
		background: #0077b5;
	}
	.social li a.whats {
		background: #44a24c;
	}
	.social li a.whatsapp {
		background: #009f00; 
	}
	.social li a:hover {
		opacity: 0.7;
		color:#FFF;
	}
	.pedido_msg{
		margin-top:15px;
		width: 100%;
		padding: 15px;
		text-align: left;
		font-size: 15px;
	}
	.pedido_usuario{
		text-align: left;
		font-size: 14px; 
		padding-bottom:10px;
		color:#666;
	}
	.pedido_anexo{
		text-align: left;
		font-size: 15px; 
		padding-top:10px;
		font-weight: bold;
	}
	.pedido_anexo a{
		color:blue;
	}




	.produto_imagem {
		display: inline-block;
		width: 90%;
		height: 170px;
		background-size: contain;
		background-repeat: no-repeat;
		background-position: center;
		margin:5%;
		cursor: pointer;
	}
	.produto_imagem:hover {
		opacity: 0.9;
	}

	.produto_titulo_lista{
		font-size:14px;
		cursor: pointer;
		height: 35px;
	}
	.produto_titulo_lista:hover{
		text-decoration: underline;
	}

	.product-image-wrapper {
		border: 1px solid #ddd;
	} 

	.lista_caminho {
		text-align:left;
		padding-left:15px;
		padding-bottom:25px;
		padding-top: 7px;
		color:#999;
		float:left;
		font-size: 16px;
	}
	.produtos_lista_ordem{
		text-align:center; 
		color:#999; 
		padding-bottom:20px;
		padding-top:0px;
	}
	.produtos_select_ordem{ 

	}

	.produtos_linha{
		width: 100%;
		margin-top:14px;
		margin-bottom: 4px;
		border-top: 1px solid #f2f2f2;
	}

	.login_div{
		text-align: right;
		padding-bottom: 70px;
	}
	.login_form{
		border-radius: 0px;
	}

	.cadastro_div{
		text-align: left;
		font-size: 19px;
		padding-bottom: 70px;
	}
	.cadastro_form{
		border-radius: 2px !important;
		height: 36px !important;
		width: 100% !important;
	}
	.cadastro_select{
		border-radius: 2px !important;
		height: 36px !important;
		width: 100% !important;
		text-align: left !important;
	}
	.select2-container .select2-selection--single{
		height: 36px !important;
		border-radius: 2px !important;
	}

	.select2-container .select2-selection--single .select2-selection__rendered{
		padding-top:3px;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow b{
		margin-top: 1px;
	}

	.login_div .cart{
		display: inline-block;
		margin:0px;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		padding-right: 20px;
	}



	.div_form{
		padding-top: 10px;
		width: 100%;
	}

	.form_erro{
		color:#c60202;
		font-size: 14px;
	}
	#cadastro_erro_fundo{
		position: fixed;
		left:0px;
		top:0px;
		width:100%;
		height:100%;
		z-index: 9999999;
		display: none;
		background-color: rgba(0,0,0,0.5);
	}
	#cadastro_erro{
		position: fixed;
		left:50%;
		top:50%;
		margin-top:-75px;
		margin-left:-200px;
		width:400px;
		height:auto;
		padding:30px;
		z-index: 99999999;
		display: none;
		background-color: #FFF;
		font-size: 14px;
		color: #000;
		text-align:center;
		border: 2px solid #666;
		border-radius: 5px;
	}
	.cadastro_msg_interna{
		font-size: 15px;
		color:#666;
		padding-bottom: 20px;
	}

	#login_erro_fundo{
		position: fixed;
		left:0px;
		top:0px;
		width:100%;
		height:100%;
		z-index: 9999999;
		display: none;
		background-color: rgba(0,0,0,0.5);
	}
	#login_erro{
		position: fixed;
		left:50%;
		top:50%;
		margin-top:-75px;
		margin-left:-200px;
		width:400px;
		height:auto;
		padding:30px;
		z-index: 99999999;
		display: none;
		background-color: #FFF;
		font-size: 14px;
		color: #000;
		text-align:center;
		border: 2px solid #666;
		border-radius: 5px;
	}

	.linha_entrar{
		border-left: 1px solid #ccc;
		height: 200px;
		display: inline-block;
	}

	.contactinfo ul li a {
		color:#ccc;
	}
	.social-icons ul li a {
		color:#333;
	}

	.botao_busca_blog {
		padding: 10px 14px;
		font-size: 14px !important;
		border:0px;
		border-radius: 0px;
	}

	.category-products .panel-default .panel-heading .panel-title a{

		color:#1a1a1a;


	}

	.contactinfo ul li:first-child {
		margin-left: 0px;
	}

	.left-sidebar h2, .brands_products h2 {
		color: #000000;
		font-size:21px;
	}
	.category-products {
		border: 1px solid #ddd;
	}

	
	
	

	.pull-right a {
		font-weight: normal;
		font-style: normal;
		color:#FFF;
		text-decoration: none;
		font-size: 13px;
	}
	.pull-right a:hover{
		text-decoration: underline;
	}
	a#scrollUp{
		background: #549c13;
		color: #FFF;
	}

	.single-widget h2 {
		padding-top: 5px;
		margin-bottom: 10px;
		color: #FFF;
	}

	.single-widget ul li a:hover {
		color:#000;
	}

	.modal-content {
		border-radius: 0px;
	}

	.control-carousel {
		top:50%;
		margin-top:-40px;
		color: #FFF;
	}
	.control-carousel:hover {
		color:#FFF;
	}
	.carousel-indicators li.active {
		background: #FFF;
	}

	.banner_central {
		width: 100%;
		height: 500px;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
	}
	.item {
		padding-left: 0px;
	}
	
	.produto_detalhes_titulo {
		font-size: 24px;
		color: #000;
		padding-top: 3px;
		padding-bottom: 7px;
		margin-bottom: 25px;
		font-weight: bold;
		border-bottom:1px solid #ddd;
	}

	.produto_detalhes {
		font-size: 14px;
		color: #666;
		padding-bottom: 5px;
		padding-top: 5px;
		font-weight: normal;
	}

	.produto_detalhes_quant{
		font-size: 15px;
		color: #666;
		padding-top: 5px;
	}

	.produto_detalhes_valor {
		font-size: 25px;
		font-weight: bold;
		color: blue;
		padding-bottom: 5px;
		padding-top: 0px;
		margin-top: 0px;
	}
	#valorartevisual{
		font-size: 15px;
		color:#333;
	}

	#similar-product {
		margin-top:0px;
	}

	.produto_imagem_detalhes {
		display: inline-block;
		width: 100%;
		height: 300px;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		cursor: pointer;
	}
	.product-information {
		border: 1px solid #ddd;
		padding-left: 35px;
		padding-top: 20px;
		padding-bottom: 20px;
		padding-right: 35px;
		min-height: 300px;
	}
	.product-information span {
		margin-bottom: 0px;
		margin-top: 0px;
	}
	.cart {
		background: #5a981c;
		color: #FFF;
		margin:0px;
	}

	.cart:hover {
		background: #528b19;
		color: #FFF;
	}


	.item-control {
		top: 50%;
		margin-top:-10px;
	}
	.item-control i {
		background: #ccc;
		color: #000;
	}
	.item-control i:hover {
		background: #eee;
		color: #333;
	}


	.produtos_detalhes_valortotal{
		font-size: 14px;
		color: #666;
		font-weight:normal;
		margin-top: 15px;
	}

	.produtos_detalhes_margin{
		padding-left: 40px;
	}


	#produto_detalhes_parcelas{
		font-size:13px;
		color:#666;
		font-weight: normal;
	}

	.tabela_boa thead tr {
		background-color: #f2f2f2;
		border: 0px;
	}

	.carrinho_lista_imagem{
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		width: 15%;
		height: 75px;
		float: left;
		margin-top: 10px;
		margin-bottom: 10px;
	} 
	.carrinho_lista_texto{
		float: left;
		padding-top: 10px;
		padding-bottom: 10px;
		width: 85%;
	}
	.carrinho_lista_valor{
		padding-top: 38px;
	}
	.carrinho_lista_remover{
		padding-top: 31px;
		font-size: 20px;
		font-weight: bold;
	}

	.carrinho_quantidade_input{
		width: 50px;
		display: inline-block;
		height: 32px;
		text-align: center;
	}
	.botao_quantidade {
		background: #5a981c;
		color: #FFF;
		margin:0px;
		width: 50%;
		display: inline-block;
	}
	.botao_quantidade:hover {
		background: #528b19;
		color: #FFF;
	}

	.botao_finalizar {
		background: #5a981c;
		color: #FFF;
		margin:0px;
	}
	.botao_finalizar:hover {
		background: #528b19;
		color: #FFF;
		margin:0px;
	}

	.botao_continuar_comprando {
		background: #0067a9;
		color: #FFF;
		margin:0px;
	}
	.botao_continuar_comprando:hover {
		background: #005388;
		color: #FFF;
		margin:0px;
	}


	#contact-page .form-control {
		border-radius: 0px;
	}

	.carrinho_erro{
		text-align: center;
		padding-top: 50px;
		padding-bottom: 50px;
		font-size: 16px;
		color:#333;
	}

	.ajuste_botoes_carrinho_d{
		padding-top:50px; text-align:right;
	}
	.ajuste_botoes_carrinho_e{
		padding-top:50px; text-align:left;
	}

	.meusdados {
		background: #0067a9;
		color: #FFF;
		margin:0px;
	}
	.meusdados:hover {
		background: #005388;
		color: #FFF;
		margin:0px;
	}
	.bt_alterar_dados{ 
		position: relative;
		top: 0px;
		right: 0px;
		text-align: right;
		margin:0px;
		padding-top:5px;
		padding-bottom: 20px;
		width: 100%;
	}
	.tabela_pedidos thead tr {
		background-color: #f2f2f2;
		border: 0px;
	}
	.tabela_pedidos a{
		color:#000;
	}
	.tabela_pedidos a:hover{
		color:#999;
	}    
	.pedidostabela{
		padding-bottom:60px;
		width:100%;
	}

	.div_videos{
		background-image: url('../img/verde1.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: center top;
		background-size: cover;
		padding-top: 50px;
		padding-bottom: 50px;
		width: 100%;
		margin-top: 40px;
		margin-bottom:40px;
	}
	.videos_inicial{
		width: 100%;
		margin-top:40px;
	}
	.video_conteudo{
		width: 100%;
		height: 315px;
		overflow: hidden;
	}
	.titulo_video {
		padding-top: 0px;
		margin-top: 0px;
	}
	.titulo_video a{
		color:#FFF;
		font-size:20px;
		font-weight: 500;
		line-height: 0.0;
	}
	.titulo_video a:hover{
		color:#FFF;
		text-decoration: underline;
	}
	.titulo_video_div{
		margin-top: 0px;
		padding-top: 0px;
	}



	.redessociais{
		float: left;
		margin-top:10px;
		margin-right: 10px;
	}
	.redessociais img{
		width: 40px;
	}

	

	.social {
		padding-bottom: 40px;
		float: left;
		width: 60%;
	}
	.social ul {
		margin-left: 0px;
		padding-left: 0px;
	}
	.social li {
		list-style: none;
		float: left;
	}
	.social li a {
		display: block;
		width: 40px;
		height: 40px;
		text-align: center;
		line-height: 40px;
		color: #fff;
		margin: 0 3px;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		-ms-border-radius: 2px;
		border-radius: 2px;
		font-size: 16px;
	}

	.social li a.facebook {
		background: #5370bb;
	}
	.social li a.twitter {
		background: #6bb8db;
	}
	.social li a.pinterest {
		background: #e95659;
	}
	.social li a.googleplus {
		background: #dd4b39;
	}
	.social li a.linkedin {
		background: #0077b5;
	}
	.social li a.whatsapp {
		background: #009f00; 
	}
	.social li a:hover {
		opacity: 0.7;
		color:#FFF;
	}

	.pedido_msg{
		margin-top:15px;
		width: 100%;
		padding: 15px;
		text-align: left;
		font-size: 15px;
	}
	.pedido_usuario{
		text-align: left;
		font-size: 14px; 
		padding-bottom:10px;
		color:#666;
	}
	.pedido_anexo{
		text-align: left;
		font-size: 15px; 
		padding-top:10px;
		font-weight: bold;
	}
	.pedido_anexo a{
		color:blue;
	}

	.facebookwidgets{
		z-index: 999999999999;
		position:fixed;
		right:-360px;
		top:50%;
		margin-top:20px;
	}
	.facebookwidgets .botao {
		background: url("<?=LAYOUT?>img/facebook.png") no-repeat scroll left center transparent !important;
		float: left;
		width: 30px;
		height: 110px;
		cursor: pointer;
	}
	.facebookwidgets .conteudo{
		float:right;
		background-color: #FFF;
		padding: 15px;
	}

	.produto_imagem_lupa{
		width: 100%;
		height: 100%; 
		background-repeat: no-repeat;
		background-position: center;
		opacity: 0;
	}


	.botao_leitura{
		border-radius: 0px;
		color:#000;
		font-weight: bold;
		border:1px solid #ddd;
	}

	#scrollUp {
	}
	#scrollUp:hover{
	}

	#depoimentos {
		position: relative;
		width: 100%;
		height: auto;
		min-height: 300px; 
		padding-bottom: 50px;
	}
	#slider-depoimentos{
		height: 370px;
	}
	.depoimentos_inicial_conteudo{
		font-size: 17px;
		text-align: center;
		padding-top: 80px;
		width: 100%;
	}
	.depoimentos_inicial_imagem{
		margin-top: 30px;
		text-align: center;
		height: 70px;
		overflow: hidden; 
		width:100%;
	}
	.depoimentos_inicial_imagem img{
		height: 70px;
	}
	.depoimentos_inicial_nome{
		font-size: 18px;
		font-weight: bold;
		margin-top:10px;
		text-align: center;
	}
	.depoimentos_inicial_cidade{
		font-size: 14px;
		text-align: center;
	}

	.depoimentos_lista{
		padding-top:50px;
		padding-bottom:50px;
	}
	.depoimentos_lista_conteudo{
		font-size: 16px;
		color:#666;
		text-align: center;
		width: 100%;
	}
	.depoimentos_lista_nome{
		font-size: 17px;
		color:#000;
		font-weight: bold;
		padding-top: 15px;
		text-align: center;
	}
	.depoimentos_lista_cidade{
		font-size: 14px;
		color:#000;
		text-align: center;     
	}

	.depoimentos_lista_imagem{
		padding-top: 30px;
		text-align: center;
	}
	.depoimentos_lista_imagem img{
		max-width: 250px;
	}


	.produto_titulo_lista{
		height: auto;
		font-weight: bold;
	}

	.carousel-indicators{
		bottom: 40px;
	}

	.nome_cliente{
		font-size: 16px;
		text-align: left;
		width: 100%;
		padding-top: 10px;
		padding-bottom: 20px;
	}

	.bt_alterar_dados .add-to-cart{
		margin-bottom: 0px;
	}

	.productinfo p {
		font-size: 13px;
	}
	.produto_imagem {
		display: inline-block;
		width: 90%;
		height: 170px;
		background-size: contain;
		background-repeat: no-repeat;
		background-position: center;
		margin:5%;
		cursor: pointer;
	}
	.produto_imagem:hover {
		opacity: 0.9;
	}
	.produto_titulo_lista{
		font-size:14px;
		cursor: pointer;
		height: 35px;
	}
	.produto_titulo_lista:hover{
		text-decoration: underline;
	}

	.product-image-wrapper {
		border: 1px solid #ddd;
	}
	.lista_caminho {
		text-align:left;
		padding-left:15px;
		padding-bottom:25px;
		padding-top: 7px;
		color:#999;
		float:left;
		font-size: 16px;
	}

	.produtos_linha{
		width: 100%;
		margin-top:14px;
		margin-bottom: 4px;
		border-top: 1px solid #f2f2f2;
	}
	.login_div{
		text-align: right;
		padding-bottom: 70px;
	}
	.login_form{
		border-radius: 0px;
	}
	.login_div .cart{
		display: inline-block;
		margin:0px;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		padding-right: 20px;
	}
	
	.form_erro{
		color:#c60202;
		font-size: 14px;
	}
	#cadastro_erro_fundo{
		position: fixed;
		left:0px;
		top:0px;
		width:100%;
		height:100%;
		z-index: 9999999;
		display: none;
		background-color: rgba(0,0,0,0.5);
	}
	#cadastro_erro{
		position: fixed;
		left:50%;
		top:50%;
		margin-top:-75px;
		margin-left:-200px;
		width:400px;
		height:auto;
		padding:30px;
		z-index: 99999999;
		display: none;
		background-color: #FFF;
		font-size: 14px;
		color: #000;
		text-align:center;
		border: 2px solid #666;
		border-radius: 5px;
	}
	.cadastro_msg_interna{
		font-size: 15px;
		color:#666;
		padding-bottom: 20px;
	}
	#login_erro_fundo{
		position: fixed;
		left:0px;
		top:0px;
		width:100%;
		height:100%;
		z-index: 9999999;
		display: none;
		background-color: rgba(0,0,0,0.5);
	}
	#login_erro{
		position: fixed;
		left:50%;
		top:50%;
		margin-top:-75px;
		margin-left:-200px;
		width:400px;
		height:auto;
		padding:30px;
		z-index: 99999999;
		display: none;
		background-color: #FFF;
		font-size: 14px;
		color: #000;
		text-align:center;
		border: 2px solid #666;
		border-radius: 5px;
	}

	.linha_entrar{
		border-left: 1px solid #ccc;
		height: 200px;
		display: inline-block;
	}

	.panel-default>.panel-heading .badge{
		background-color: transparent;
		color:#000;
	}

	.banner_frete{
		width: 100%;
		padding-top:0px;
		padding-bottom:0px;
		text-align: center;
		background-color:#fff;
	}
	.banner_frete img{
		width: 100%;
	}



	.pagination {
		font-family: 'Roboto', sans-serif;
	}
	.pagination>li:last-child>a, .pagination>li:last-child>span {
		border-radius: 0px;     
	}

	.pagination li a, .pagination li span {
	}
	.pagination li a:hover, .pagination li span :hover{
	}
	.pagination li a:hover, .pagination li span :hover{
	}

	.pi-pagenav li {
		background: transparent;
		border-radius: 0px;
		margin:1px;
	}
	.pi-pagenav li:hover {
		background: transparent; 
		border-radius: 0px;
	}
	.pi-pagenav li a{ 
	}
	.pi-pagenav li a:hover{ 
	}
	.pi-pagenav li a.active:hover{ 
	}
	.pi-pagenav li .active { 
		border-radius: 0px;
	}
	.pi-pagenav a:active, .pi-pagenav a.active { 
	}
	.pi-pagenav a:active:hover, .pi-pagenav a.active:hover { 
	}
	.pi-pagenav a {
		border-radius: 0px; 
	}

	.instagram{
		position: relative;
		background-image: url(<?=LAYOUT?>img/fundo_insta.png);
		width: 100%;
	}
	.instagram_titulo_conta{
		font-size: 30px;
		font-weight: 500;
		text-align: center;
		width: 100%;
		padding-top: 30px;
		color:#000;
	}
	.instagram_miniaturas{
		margin-top: 30px;
		width: 100%;
		height: auto;
		padding-bottom:50px;
		text-align: center;
	}
	.instagram_miniaturas a{
		display: inline-block;
		width:150px;
		margin-left:3px;
		margin-right:3px;
		margin-bottom: 10px;
	}
	.instagram_miniaturas a img{
		width: 100%;	
	}

	.carousel-pause{
		position: absolute;
		right: 20px;
		bottom:7px;
		z-index: 9999;
		background-color: #fff;
		border-radius: 0 0 0px 0px;
		padding-left: 10px;
		padding-right: 10px;
	}

	.botao_normal{
		cursor: pointer;
		padding:7px;
		display: inline-block;
		font-size:17px; 
	}
	.botao_preto{
		cursor: pointer;
		padding:7px;
		display: inline-block;
		font-size:17px;
		color:#000;
	}

	a.prev{
		position: absolute;
		left: 10px;
		top:230px;
		background-image: url(<?=LAYOUT?>img/setabanner2.png);
		background-size: contain;
		background-repeat: no-repeat;
		background-position: center;
		margin: 0px;
		width:20px;
		height:20px;
		z-index: 999999;
	}
	a.next{
		position: absolute;
		right: 10px;
		top:230px;
		background-image: url(<?=LAYOUT?>img/setabanner1.png);
		background-size: contain;
		background-repeat: no-repeat;
		background-position: center;
		margin: 0px;
		width:20px;
		height:20px;
		z-index: 999999;
	}

a.prev{
	position: absolute;
	left: 10px;
	top:230px;
	background-image: url(<?=LAYOUT?>img/setabanner2.png);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	margin: 0px;
	width:20px;
	height:20px;
	z-index: 999999;
}
a.next{
	position: absolute;
	right: 10px;
	top:230px;
	background-image: url(<?=LAYOUT?>img/setabanner1.png);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	margin: 0px;
	width:20px;
	height:20px;
	z-index: 999999;
}


	.callbacks_nav{
		opacity: 0.6;
		width: 50px;
		margin:15px;
	}
	.callbacks_nav.prev{
		display: none;
		margin-top:-50px;
		background-image: url(<?=LAYOUT?>img/setabanner2.png);
		background-size: contain;
		background-repeat: no-repeat;
		background-position: center;
		height: 100%;
	}
	.callbacks_nav.next{
		display: none;
		margin-top:-50px;
		background-image: url(<?=LAYOUT?>img/setabanner1.png);
		background-size: contain;
		background-repeat: no-repeat;
		background-position: center;
		height: 100%;
	}
	.callbacks_container{
		padding-top: 0px;
	}
	.callbacks_tabs{
		position: absolute;
		width: 100%;
		left: 0px;
		bottom:15px;
		text-align: center;
		z-index: 9999;
	}
	.callbacks_tabs li{
		width: 20px !important;
		height: 20px !important;
		display: inline-block;
	}
	.callbacks_tabs a {
		visibility: visible; 
		padding: 5px;
		width: 20px !important;
		height: 20px !important;	 
		border-radius:10px;
		font-weight: 600;
		font-size: 0px;
		border:1px solid #fff;
	}
	.callbacks_tabs a:hover {
		text-decoration: none; 
	}
	.callbacks_tabs a:after{
		display: none;
	}
	.callbacks_tabs li.callbacks_here a {
		text-decoration: none; 
	}

	.produtos_item_destaque{
		
	}
	.bx-viewport{
		border:0px !important;
		-webkit-box-shadow:none !important;
	}
	
	
	.botao_arte{
		background-color: blue;
		text-align: center
	}
	.botao_arte span{
		font-size: 15px !important;
		color:#fff !important;
		margin-right: 0px !important;
	}





	.destaques_inicial_imagem{
		width: 80%;
		height: 170px;
		background-size: cover;
		background-position:center;
		background-repeat: no-repeat;
	}
	a.quadros_inicial{
		display:block;
		width: 100%;
		height:300px;
		background-size: cover;
		background-position:center;
		background-repeat: no-repeat;
	}
	.quadros_inicial_titulo{
		display: block;
		font-size: 26px;
		color:#fff;
		font-weight: bold;
		text-align: center;
		padding-left:20px;
		padding-right:20px;
		padding-bottom:20px;
		padding-top:50px;
		width: 100%;
		text-shadow: 2px 2px 3px #000000;
	}
	
	a.duvidas_lista{
		display: block;
		margin-top: 15px;
		font-size: 16px;
		border-radius:22px;
		font-weight: bold;
		color: #000;
		cursor: pointer;
	}
	a.duvidas_lista_ativo{
		display: block;
		margin-top: 15px;
		font-size: 16px;
		font-weight: bold; 
		cursor: pointer;
	}

	a.duvidas_lista_topo{
		display: inline-block;
		margin-top: 10px;
		font-size: 15px;
		font-weight: 500;
		color: #000;
		cursor: pointer;		 
		padding-right:10px;
		margin-right:8px;
	}
	a.duvidas_lista_topo_ativo{
		display: inline-block;
		margin-top: 15px;
		font-size: 15px;
		font-weight: 500; 
		cursor: pointer;
		padding-right:10px;
		margin-right:8px;
	}

	.duvidas_pergunta{
		display: block;
		margin-top: 15px;
		border-radius: 22px;
		font-size:18px;
		font-weight: normal;

	}

	.duvidas_resposta{
		display: block;
		margin-top:15px;
		font-size:16px;
		
	}
	
	.duvidas_div{
		margin-top: 30px;
		margin-bottom: 80px;
	}


	a.servicos_item{
		display: block;
		margin-top:30px;
		width: 100%;
	}
	.servicos_img{
		width:100%;
		height:150px;
		overflow:hidden;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
	}
	.servicos_img img{
		width: 100%;
	}
	.servicos_titulo{
		margin-top:10px;
		font-size: 15px;
		text-align: center;
		font-weight: bold;
		color:#666;
	}


	a.filiais_item{
		display: block;
		margin-top:30px;
		width: 100%;
	}
	.filiais_img{
		width:100%;
		height:220px;
		overflow:hidden;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
	}
	.filiais_img img{
		width: 100%;
	}
	.filiais_titulo{
		margin-top:10px;
		font-size: 15px;
		text-align: center;
		font-weight: bold;
		color:#666;
	}

	.parceiros_item{
		width:100%;
		max-width: 100%;
		text-align: center;
	}
	.parceiros_img_div{
		text-align: center !important;
		width: 100%;
	}
	a.parceiros_img{
		height:150px;
		width:300px;
		text-align: center !important;
		display: table-cell;
		vertical-align: middle;
	}
    .parceiros_img {
    /*
      All of the base styles have
      moved to the “CSS” tab above.
    */
    transition: transform 250ms;
	}
	.parceiros_img:hover {
        transform: translateY(-10px);
	}	
	a.parceiros_img img{
		max-height: 100%;
		display: inline-block !important;
	}
	.parceiros_cidade{
		font-size: 12px;
		margin-top:7px;
	}
	.parceiros_fone{
		font-size: 12px;
		font-weight: 500;
		margin-top:1px;
	}


	.video_inicial{
		width: 100%;
	}
	.video_inicial iframe{
		width: 100% !important;
		height: 380px;
	}

	a.servicos_imagens_interno{
		display: inline-block;
		margin: 10px;
		width:auto;
		height:150px;
	}
	a.servicos_imagens_interno img{
		height:100%; 
	}


	.blocos_sess{
		position: relative;
		width: 100%;
		padding-top:40px;
		padding-bottom:70px;
	}
	.bloco_imagem{
		width: 100%;
		margin-top: 30px;
	}
	.bloco_imagem img{
		width: 100%;
	}
	.bloco_titulo{
		margin-top: 35px;
		text-align: left;
		font-size:24px;
		color:#666;
		font-weight: bold;
	}
	.bloco_descricao{
		margin-top:30px;
		color:#000;
		text-align: left;
		font-size: 16px;
		width: 100%;
	}
	.bloco_botao_div{
		display: block;
		text-align: center;
		margin-top:10%;
		vertical-align: bottom;
		height: 100%; 


	}

	a.blocos_botao{
		display: inline-block;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		padding-right: 20px;
		border-radius: 22px 0px 22px 0px;
		font-size: 17px;
		font-weight: bold;

	}

	a.ultimos_servicos_img{
		display: block;
		width: 100%;
		text-align: center;
		height: 180px;
		margin-top:30px;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
	}


	.caracteristicas_div{
		width: 100%;
		margin-top: 30px;
		text-align: center;
	}
	.caracteristicas_img{
		display: block;
		width: 100%;
		text-align: center;
	}
	.caracteristicas_img img{
		width:20%;
	}
	.caracteristicas_titulo{
		margin-top: 20px;
		font-size: 22px;
		font-weight: normal;
		color:#333;
	}
	.caracteristicas_descricao{
		font-size: 32px;
		color: #666;
		font-weight: 700;
	}


	/* Plans Section Dark Mode & Styling */
	section[id^="section-planos-"] {
		background-color: #030712 !important;
		background-image: radial-gradient(circle at 50% 50%, #0d1633 0%, #030712 100%) !important;
	}
	section[id^="section-planos-"] .titulo_padrao {
		color: #ffffff !important;
	}
	section[id^="section-planos-"] div {
		color: #94a3b8 !important;
	}

	.planos_div {
		background-image: linear-gradient(145deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.01) 100%) !important;
		background-color: rgba(8, 17, 44, 0.5) !important;
		backdrop-filter: blur(12px);
		-webkit-backdrop-filter: blur(12px);
		box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
		width: 100%;
		border-radius: 20px;
		height: auto;
		padding: 20px 15px;
		text-align: center;
		margin-top: 15px;
		border: 1px solid rgba(255, 255, 255, 0.08) !important;
		position: relative;
		transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
		overflow: hidden;
	}
	.planos_div::before {
		content: "";
		position: absolute;
		top: 0; left: 0; right: 0; bottom: 0;
		background: linear-gradient(180deg, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0) 100%);
		pointer-events: none;
	}
	.planos_div:hover {
		transform: translateY(-8px);
		box-shadow: 0 20px 40px rgba(0, 0, 0, 0.35);
	}
	
	/* Individual Card Accent Borders from Logo Palette */
	.container .row > div:nth-child(1) .planos_div {
		border-top: 4px solid #ff7b00 !important;
	}
	.container .row > div:nth-child(2) .planos_div {
		border-top: 4px solid #e01a89 !important;
	}
	.container .row > div:nth-child(3) .planos_div {
		border-top: 4px solid #6f00ff !important;
	}
	.container .row > div:nth-child(4) .planos_div {
		border-top: 4px solid #26d213 !important;
	}

	/* Recommended Card Custom Accent */
	.planos_div_recomendado {
		background-color: rgba(15, 23, 50, 0.65) !important;
		animation: breathingGlow 4s infinite ease-in-out;
	}
	@keyframes breathingGlow {
		0%, 100% {
			box-shadow: 0 12px 35px rgba(255, 123, 0, 0.2);
			border-color: rgba(255, 123, 0, 0.35) !important;
		}
		25% {
			box-shadow: 0 12px 35px rgba(224, 26, 137, 0.2);
			border-color: rgba(224, 26, 137, 0.35) !important;
		}
		50% {
			box-shadow: 0 12px 35px rgba(111, 0, 255, 0.2);
			border-color: rgba(111, 0, 255, 0.35) !important;
		}
		75% {
			box-shadow: 0 12px 35px rgba(38, 210, 19, 0.2);
			border-color: rgba(38, 210, 19, 0.35) !important;
		}
	}
	.planos_div_recomendado:hover {
		box-shadow: 0 20px 45px rgba(224, 26, 137, 0.3) !important;
	}
	
	.planos_tag_rec {
		display: inline-block;
		font-size: 11px;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 1.5px;
		color: #ffffff !important;
		background: linear-gradient(135deg, #ff7b00 0%, #e01a89 100%);
		padding: 5px 14px;
		border-radius: 50px;
		box-shadow: 0 4px 10px rgba(224, 26, 137, 0.3);
		margin-bottom: 10px;
	}

	.planos_titulo{
		text-align: center;
		font-size: 26px;
		font-weight: 800;
		text-transform: uppercase;
		margin-top: 10px;
		letter-spacing: 0.5px;
		color: #ffffff !important;
	}
	.planos_div_recomendado .planos_titulo {
		background: linear-gradient(90deg, #ff7b00, #e01a89);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		font-weight: 900;
	}
	.planos_descricao{
		text-align: center;
		font-size: 11px;
		font-weight: 600;
		text-transform: uppercase;
		letter-spacing: 1.5px;
		color: #94a3b8 !important;
		margin-top: 5px;
		margin-bottom: 8px;
	}
	.planos_icone{
		text-align: center;
		font-size: 16px;
		margin-bottom: 0px; 
	}
	.planos_imagem{
		text-align: center;
		margin-bottom: 10px;
		margin-top: 20px;
	}
	.planos_imagem img{
		width: auto;
		max-width: 60px; 
		opacity: 0.85;
	}
	
	.planos_valor{
		margin-top: 15px;
		margin-bottom: 15px;
		text-align: center;
		color: #ffffff !important;
		display: flex;
		justify-content: center;
		align-items: baseline;
		line-height: 1;
	}
	.planos_cifrao {
		font-size: 14px;
		font-weight: 600;
		margin-right: 2px;
		align-self: flex-start;
		padding-top: 5px;
	}
	.planos_reais {
		font-size: 42px;
		font-weight: 800;
		letter-spacing: -1px;
	}
	.planos_centavos {
		font-size: 15px;
		font-weight: 600;
		align-self: flex-start;
		padding-top: 5px;
	}
	.planos_periodo {
		font-size: 13px;
		font-weight: 500;
		color: #64748b !important;
		margin-left: 4px;
	}
	
	.planos_divisor {
		border: 0;
		border-top: 1px solid rgba(255, 255, 255, 0.08);
		margin: 12px 0;
		width: 100%;
	}
	
	a.planos_botao{
		display: block;
		font-size: 12.5px;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 1px;
		border-radius: 50px;
		padding: 9px 15px;
		transition: all 0.3s ease;
		background: linear-gradient(135deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0.03) 100%) !important;
		border: 1px solid rgba(255, 255, 255, 0.15) !important;
		color: #ffffff !important;
		width: 100%;
		text-align: center;
		box-shadow: none !important;
	}
	a.planos_botao:hover {
		background: linear-gradient(135deg, #ff7b00 0%, #e01a89 100%) !important;
		border-color: transparent !important;
		box-shadow: 0 4px 15px rgba(224, 26, 137, 0.3) !important;
		transform: translateY(-2px);
	}
	
	.planos_div_recomendado a.planos_botao {
		background: linear-gradient(135deg, #e01a89 0%, #6f00ff 100%) !important;
		border: 0 !important;
		color: #ffffff !important;
		box-shadow: 0 4px 15px rgba(111, 0, 255, 0.3) !important;
	}
	.planos_div_recomendado a.planos_botao:hover {
		box-shadow: 0 6px 20px rgba(111, 0, 255, 0.5) !important;
		filter: brightness(1.1);
	}

	.planos_itens{
		margin: 12px 0;
		padding: 0 !important;
		list-style: none;
		text-align: left;
	} 
	.planos_itens li{
		margin: 0;
		padding: 5px 0;
		font-size: 12.5px;
		font-weight: 500;
		display: flex;
		align-items: center;
		border-bottom: 1px solid rgba(255, 255, 255, 0.04) !important;
		color: #e2e8f0 !important;
	}
	.planos_itens li:last-child {
		border-bottom: 0 !important;
	}
	.planos_itens li span{
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 18px;
		height: 18px;
		border-radius: 50%;
		margin-right: 8px;
		font-size: 9px;
	}
	
	/* Colored checkmark circles according to card theme */
	.container .row > div:nth-child(1) .planos_itens li span i { color: #ff7b00 !important; }
	.container .row > div:nth-child(1) .planos_itens li span { background-color: rgba(255, 123, 0, 0.12) !important; }

	.container .row > div:nth-child(2) .planos_itens li span i { color: #e01a89 !important; }
	.container .row > div:nth-child(2) .planos_itens li span { background-color: rgba(224, 26, 137, 0.12) !important; }

	.container .row > div:nth-child(3) .planos_itens li span i { color: #6f00ff !important; }
	.container .row > div:nth-child(3) .planos_itens li span { background-color: rgba(111, 0, 255, 0.12) !important; }

	.container .row > div:nth-child(4) .planos_itens li span i { color: #26d213 !important; }
	.container .row > div:nth-child(4) .planos_itens li span { background-color: rgba(38, 210, 19, 0.12) !important; }


	.contador_div{
		width: 100%;
		text-align: center;
		margin-top:30px;
	}
	.contador_img{
		width: 100%; 
	}
	.contador_img img{
		width: auto !important;
		height: 50px;
	}
	.contador_valor{
		font-size: 36px;
		margin-top: 15px;
		font-weight: bold;
	}
	.contador_titulo{
		font-size:22px;
		font-weight: 500;
	}


	.acordeon_titulo{ 
		width: 100%;
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		border-radius:7px;
	}
	.acordeon_titulo:active, .acordeon_titulo:focus, .acordeon_titulo:hovers{ 
	}
	.acordeon_titulo i{
		margin-right:6px;
		font-size: 14px;
	}
	.acordeon_titulo:hover{ 
		width: 100%;
		text-align: left;
		text-decoration: none;
	}
	.acordeon_descricao{  
		width: 100%;
	}


	a.fotos1_div{
		display: block;
		width: 100%;
		height: 220px;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		cursor: pointer;
	}

	a.fotos2_div{
		display: block;
		width: 100%;
		height: 200px;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		cursor: pointer;
		margin-top:30px;
	}
	a.fotos2_titulo{
		display:block;
		text-align: center;
		margin-top: 10px;
		font-size: 15px;
		font-weight: 500;
		width: 100%;
	}

	a.fotos_imagens_interno{
		display: inline-block;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		width:200px;
		height:150px;
		margin: 15px;
	}
	
	a.fotos_categorias{
		display: block;
		margin-top: 15px;
		font-size: 16px;
		cursor: pointer;
		font-weight: 500;
	}
	a.fotos_categorias_topo{
		display: inline-block;
		margin-top: 10px;
		font-size: 15px;
		cursor: pointer;
		font-weight: 500;
		padding-right: 10px;
		margin-right: 8px;
	}
	
	
	.anim-section {
		position: relative;
		-webkit-transition: all 1s ease-in-out;
		-moz-transition: all 1s ease-in-out;
		-ms-transition: all 1s ease-in-out;
		-o-transition: all 1s ease-in-out;
		transition: all 1s ease-in-out;
		-moz-transform: translateY(20px);
		-webkit-transform: translateY(20px);
		-o-transform: translateY(20px);
		-ms-transform: translateY(20px);
		transform: translateY(20px);
		visibility: visible;
		opacity: 0
	}
	.anim-section.animate {
		-moz-transform: translateY(0px);
		-webkit-transform: translateY(0px);
		-o-transform: translateY(0px);
		-ms-transform: translateY(0px);
		transform: translateY(0px);
		visibility: visible;
		opacity: 1
	}
	.fadeIn-section{
		visibility: visible;
		opacity: 0;
		position: relative;
	}
	@-webkit-keyframes fadeIn {
		0% {opacity: 0;}
		100% {opacity: 1;}
	}
	@-moz-keyframes fadeIn {
		0% {opacity: 0;}
		100% {opacity: 1;}
	}
	@-o-keyframes fadeIn {
		0% {opacity: 0;}
		100% {opacity: 1;}
	}
	@-ms-keyframes fadeIn {
		0% {opacity: 0;}
		100% {opacity: 1;}
	}
	@keyframes fadeIn {
		0% {opacity: 0;}
		100% {opacity: 1;}
	}
	.fadeIn {
		-webkit-animation: fadeIn 1s linear;
		-moz-animation: fadeIn 1s linear;
		-o-animation: fadeIn 1s linear;
		-ms-animation: fadeIn 1s linear;
		animation: fadeIn 1s linear;
		visibility: visible;
		opacity:1;
		position: relative;
	}


	a.destaques_div{
		display: block;
		width: 100%;
		position: relative;
		margin-left: 0px;
		margin-right: 0px;
		border-radius: 16px;
		overflow: hidden;
		box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
		transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
		border: 1px solid rgba(255, 255, 255, 0.05);
	}
	a.destaques_div::after {
		content: "";
		position: absolute;
		top: 0; left: 0; right: 0; bottom: 0;
		background: linear-gradient(180deg, rgba(4, 10, 27, 0) 30%, rgba(4, 10, 27, 0.8) 100%);
		transition: all 0.3s ease;
		z-index: 1;
	}
	a.destaques_div:hover::after {
		background: linear-gradient(180deg, rgba(0, 229, 255, 0.08) 0%, rgba(4, 10, 27, 0.92) 100%);
	}
	a.destaques_div:hover {
		transform: translateY(-8px);
		box-shadow: 0 15px 35px rgba(0, 229, 255, 0.15);
		border-color: rgba(0, 229, 255, 0.2);
	}
	.destaques_img{
		width: 100%;
		height: 220px;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		transition: transform 0.5s ease;
	}
	a.destaques_div:hover .destaques_img {
		transform: scale(1.08);
	}
	.destaques_titulo{
		position: absolute;
		left: 15px;
		right: 15px;
		bottom: 15px;
		padding: 10px 15px;
		font-weight: 700;
		font-size: 13px;
		text-transform: uppercase;
		letter-spacing: 1px;
		text-align: center;
		border-radius: 10px;
		z-index: 2;
		transition: all 0.3s ease;
		box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
		background-color: rgba(4, 10, 27, 0.75) !important;
		color: #ffffff !important;
		border: 1px solid rgba(255, 255, 255, 0.1);
		backdrop-filter: blur(5px);
	}
	a.destaques_div:hover .destaques_titulo {
		transform: translateY(-3px);
	}
	
	/* Logo matching card glow hover styles */
	.destaques_card_orange:hover {
		border-color: #ff7b00 !important;
		box-shadow: 0 15px 35px rgba(255, 123, 0, 0.25) !important;
	}
	.destaques_card_orange:hover::after {
		background: linear-gradient(180deg, rgba(255, 123, 0, 0.08) 0%, rgba(4, 10, 27, 0.92) 100%) !important;
	}
	.destaques_card_orange:hover .destaques_titulo {
		box-shadow: 0 6px 20px rgba(255, 123, 0, 0.3) !important;
		background-color: #ff7b00 !important;
		color: #ffffff !important;
	}
	
	.destaques_card_pink:hover {
		border-color: #e01a89 !important;
		box-shadow: 0 15px 35px rgba(224, 26, 137, 0.25) !important;
	}
	.destaques_card_pink:hover::after {
		background: linear-gradient(180deg, rgba(224, 26, 137, 0.08) 0%, rgba(4, 10, 27, 0.92) 100%) !important;
	}
	.destaques_card_pink:hover .destaques_titulo {
		box-shadow: 0 6px 20px rgba(224, 26, 137, 0.3) !important;
		background-color: #e01a89 !important;
		color: #ffffff !important;
	}
	
	.destaques_card_purple:hover {
		border-color: #6f00ff !important;
		box-shadow: 0 15px 35px rgba(111, 0, 255, 0.25) !important;
	}
	.destaques_card_purple:hover::after {
		background: linear-gradient(180deg, rgba(111, 0, 255, 0.08) 0%, rgba(4, 10, 27, 0.92) 100%) !important;
	}
	.destaques_card_purple:hover .destaques_titulo {
		box-shadow: 0 6px 20px rgba(111, 0, 255, 0.3) !important;
		background-color: #6f00ff !important;
		color: #ffffff !important;
	}
	
	.destaques_card_green:hover {
		border-color: #26d213 !important;
		box-shadow: 0 15px 35px rgba(38, 210, 19, 0.25) !important;
	}
	.destaques_card_green:hover::after {
		background: linear-gradient(180deg, rgba(38, 210, 19, 0.08) 0%, rgba(4, 10, 27, 0.92) 100%) !important;
	}
	.destaques_card_green:hover .destaques_titulo {
		box-shadow: 0 6px 20px rgba(38, 210, 19, 0.3) !important;
		background-color: #26d213 !important;
		color: #ffffff !important;
	}
	
	.contato_form{
		border-radius:2px;
		width:100%;
		height:40px;
	} 
	.botao_contato{
		text-align:right;
		padding-top:18px;
		padding-bottom:40px;
	}



	.equipe_div{
		width: 100%;
		margin-top: 30px;
		text-align: center;
	}
	.equipe_img{
		display: inline-block;
		width: 100%;
		text-align: center;
		overflow: hidden;
	}
	.equipe_img img{
		display: inline-block;
		width:auto !important;
		height: 200px;
	}
	.equipe_titulo{
		margin-top: 20px;
		font-size: 16px;
		font-weight: bold;
		color:#333;
	}
	.equipe_descricao{
		font-size: 14px;
		color: #666;
		font-weight: 400;
	}


	.noticias_imagem_lateral_interna{
		width:40%;
		float:left;
		margin-right:20px;
		margin-bottom:10px;
	}


	.noticias_1_div{
		padding-top:0px;
		padding-left:0px;
		padding-right:0px;
		padding-bottom:10px;
		margin-top:0px;
		height: auto; 
	}
	.noticias_1_1_img{
		margin-bottom:20px;
		width: 100%;
		height:350px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		cursor: pointer;
	}
	.noticias_1_1_img:hover{
		opacity: 0.9;
	}
	.noticias_1_2_img{
		margin-bottom:20px;
		width: 100%;
		height:260px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		cursor: pointer;
	}
	.noticias_1_2_img:hover{
		opacity: 0.9;
	}
	.noticias_1_3_img{
		margin-bottom:20px;
		width: 100%;
		height:200px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		cursor: pointer;
	}
	.noticias_1_3_img:hover{
		opacity: 0.9;
	}
	.noticias_1_4_img{
		margin-bottom:20px;
		width: 100%;
		height:150px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		cursor: pointer;
	}
	.noticias_1_4_img:hover{
		opacity: 0.9;
	}
	a.noticias_1_item{
		width: 100%;
		margin-top: 20px;
		display: inline-block;
	}
	.noticias_1_titulo{
		font-size: 16px;
		font-weight: bold;
		margin-top: 10px;
		color:#000;
	}
	.noticias_1_previa{
		margin-top:5px;
		width: 100%;
		font-size: 14px;
		color:#666;
	}



	.noticias_2_div{
		padding-top:0px;
		padding-left:0px;
		padding-right:0px;
		padding-bottom:10px;
		margin-top:0px;
		height: auto; 
	}
	.noticias_2_1_img{
		margin-bottom:20px;
		width: 100%;
		height:350px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		cursor: pointer;
		border-radius:5px;
		position: relative;
	}
	.noticias_2_1_img:hover{
		opacity: 0.9;
	}
	.noticias_2_2_img{
		margin-bottom:20px;
		width: 100%;
		height:260px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		cursor: pointer;
		border-radius:5px;
		position: relative;
	}
	.noticias_2_2_img:hover{
		opacity: 0.9;
	}
	.noticias_2_3_img{
		margin-bottom:20px;
		width: 100%;
		height:200px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		cursor: pointer;
		border-radius:5px;
		position: relative;
	}
	.noticias_2_3_img:hover{
		opacity: 0.9;
	}
	.noticias_2_4_img{
		margin-bottom:20px;
		width: 100%;
		height:150px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		cursor: pointer;
		border-radius:5px;
		position: relative;
	}
	.noticias_2_4_img:hover{
		opacity: 0.9;
	}
	a.noticias_2_item{
		width: 100%;
		margin-top: 20px;
		display: inline-block;
	}
	.noticias_2_titulo{
		position: absolute;
		bottom: 0px;
		left: 0px;
		width: 100%;
		padding: 10px;
		font-size: 15px;
		font-weight: bold; 
		color:#fff;
		border-radius:0px 0px 5px 5px;
	}

	.banner_topo{
		width: 100%;
		overflow: hidden;
		text-align: center;
		max-height: 130px;
	}
	.banner_topo .rslides{
		text-align: center;
	}
	.banner_topo .rslides li{
		text-align: center !important;
	}
	.banner_topo .rslides img{
		width: auto !important;
		max-height: 130px;
		display: inline-block !important;
		float: none;
	}


	.noticias_3_div{
		padding-top:0px;
		padding-left:0px;
		padding-right:0px;
		padding-bottom:10px;
		margin-top:0px;
		height: auto; 
	}
	.noticias_3_1_img{
		margin-bottom:10px;
		width: 100%;
		height:350px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		cursor: pointer;
	}
	.noticias_3_1_img:hover{
		opacity: 0.9;
	}
	.noticias_3_2_img{
		margin-bottom:20px;
		width: 100%;
		height:260px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		cursor: pointer;
	}
	.noticias_3_2_img:hover{
		opacity: 0.9;
	}
	.noticias_3_3_img{
		margin-bottom:20px;
		width: 100%;
		height:200px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		cursor: pointer;
	}
	.noticias_3_3_img:hover{
		opacity: 0.9;
	}
	.noticias_3_4_img{
		margin-bottom:20px;
		width: 100%;
		height:150px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		cursor: pointer;
	}
	.noticias_3_4_img:hover{
		opacity: 0.9;
	}
	a.noticias_3_item{
		width: 100%;
		margin-top: 20px;
		display: inline-block;
	}
	.noticias_3_titulo{
		font-size: 18px;
		font-weight: bold;
		margin-top: 10px;
		color:#000;
	}
	.noticias_3_data{
		margin-top:5px;
		margin-bottom:10px;
		width: 100%;
		font-size: 12px;
		color:#666;
	}
	.noticias_3_previa{
		margin-top:5px;
		width: 100%;
		font-size: 13.5px;
		color:#666;
	}


	.link_busca{
		color: #333;
	}


	a.edicoes_div{
		display: block;
		margin-top:30px;
		text-align: center;
		width: 100%;
		cursor: pointer;
	}
	.edicoes_img{
		width: 100%;
		text-align: center;		
	}
	.edicoes_img img{
		max-width: 100%;		
	}
	.edicoes_titulo{
		margin-top: 15px;
		font-weight:500;
		font-size: 15px;		
	}


	.panel-body ul{
		padding-left: 10px;
	}


	#whats_janela{
		width: 340px;
		max-width: 100%;
		position: fixed;
		z-index: 99999;
		bottom: 90px;
		right: 20px;
		display: none;
		background-color: rgba(235,229,222,1);
		border-radius: 22px 22px 22px 22px;
		justify-content: center;
	}
	.whats_janela_top{
		font-family: Helvetica, Arial, sans-serif;
		background-color: #008C46;
		border-radius: 15px 15px 0px 0px;
		justify-content: center;
		padding-top:15px;
		padding-right:15px;
		padding-bottom:15px;
		padding-left:15px;
		color:#fff;
		font-size: 16px;
	}
	.whats_janela_bt{
		align-items: center;
		align-self: center;
		background-color: rgba(83,164,81,1);
		border-bottom-style: none;
		border-color: #000000;
		border-left-style: none;
		border-radius: 5px;
		border-right-style: none;
		border-top-style: none;
		border-width: 0px;
		color: #FFFFFF;
		cursor: pointer;
		display: -ms-flexbox;
		display: flex;
		flex-direction: column;
		font-family: Open Sans, sans-serif;
		font-size: 16px;
		font-style: normal;
		font-weight: normal;
		height: 48px;
		justify-content: center;
		line-height: 1.42857;
		margin-bottom: 0px;
		margin-top: 9px;
		max-width: 438px;
		text-align: center;
		text-decoration: none;
		width: 100%;
	}


	.form_rastr{
		border-radius: 2px;
		width: 350px;
		max-width: 100%;
		height: 40px; 
		color:#000;
		padding-left: 20px;
		padding-right: 20px;
		margin-top: 5px;
		display: inline-block;
		text-align: center;
	}


	#div_radio{

	}
	.faixa_radio{
		position:fixed;
		left: -10px;
		width: 55%;
		border-radius: 0px 15px 0px 15px;
		box-shadow:0 10px 25px 0 rgba(6, 12, 34, 0.1);
		bottom: 0px;
		z-index: 9999;
		background-color: <?=$radio_cores->cor_fundo?>; 
		padding-top:10px;
		padding-bottom:10px;
		height: 60px;
		overflow: hidden;
	}

	.play_radio{
		text-align: center;
		float: left;
		margin-top:-5px;
	}
	.icon_play_radio{
		font-size:38px;
	}

    .icon_play_radio:hover {
        opacity: 0.8;
	}
	.icon_play_radio i{
		color: <?=$radio_cores->cor_botao_ico?>;		 
	}
	.icon_pause_radio{
		font-size: 36px;
	}
	.icon_pause_radio i{	
		color: <?=$radio_cores->cor_botao_ico?>;
	}

	.radio_texto{
		font-size: 19px;
		color: <?=$radio_cores->cor_botao_ico?>;
		display: inline-block;
		padding-left: 10px;
		float: left;
		padding-top:9px;

	}

	.radio_titulo{		 
		font-size: 14px;
		text-align: center;
		padding-top:10px;
		height:40px;
		width: 80px;
		float: left;
		margin-right:10px;
	}
	.radio_atual{
		margin-left: 30px;
		color: <?=$radio_cores->cor_texto1?>;

	}

	.radio_proximo{
		margin-left: 30px;	
		color: <?=$radio_cores->cor_texto2?>;
	}

	.radio_programa{
		font-size: 15px;
		margin-top:2px;
	}
	.radio_apresentador{
		font-size: 12px; 
	}


	.fot-fixd {
		z-index: 99999999999;
		flex-direction: row;
		width: 100%;
		position: fixed;
		left: 0;
		right: 0;
		bottom: 0;
		background: #000;
		padding: 20px;
		display: flex; 
		color: #fff;
		vertical-align: middle;
	}
	.fot-fixd-box {
		display: flex;
		align-items: center;
		align-content: space-between;
	}
	.fot-cookie-show {
		cursor: pointer;
		margin-right: 20px;
		font-weight: 700;
	}
	.fot-fixd-close {
		cursor: pointer;
		display: inline-block;
		width: 125px;
		height: 40px;
		text-align: center;
		line-height: 40px;
		color: #333;
		background: #f1d600;
		font-weight: 700;
	}
	.fot-fixd-msg {
		line-height: 20px;
		padding: 10px 0;
		padding-right: 20px;
		font-size: 16px;
		flex: 1 1 auto;
		max-width: 100%;
	}
</style>