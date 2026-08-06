<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<style type="text/css">

	.header-middle .container .row {
		border-bottom: 0px;
	}
	.header-middle .container .row {
		border-bottom: 0px;
		margin-bottom: 0px;
		padding-bottom: 0px;
		margin-top: 0px;
		padding-top: 0px;
	}
	.header-bottom {
		padding:0px;
		margin: 0px;
		border-top:0px;
		padding-top:0px;
	}
	.logo{
		text-align: left;
		margin-top:20px;
	}
	.logo img{ 
		max-width:80%;
		margin-top: 0px;
	}
	.busca_div{
		margin-top:15px;
		margin-bottom:0px;
		text-align: center;
		width: 100%;
	}

	a.botao_carrinho{
		position: relative;
		display: inline-block;
		width: 160px; 
		margin-left:15px;
		overflow: hidden;  
	}
	a.botao_carrinho i{ 
	}
	.botao_carrinho_esq{
		width:30%; 
		margin-left:15%;
		margin-right:5%;
		float: left;
		margin-top:10px;
		text-align:center;
		font-size:38px;
	}
	.botao_carrinho_dir{
		width:50%; 
		float: left;
		text-align: center;
		padding-top:15px;
	}
	.botao_carrinho_dir span{
		font-weight: bold;
		font-size: 16px; 
	}
	.div_botoes_topo{
		text-align: right;
		width: 100%; 
	}
	.div_botoes_topo i{
		font-size:19px; 
	}
	a.botao_conta_topo{
		display: block;
		float: left;
		padding-left: 10px;
		padding-right: 10px;
		padding-top:9px;
		padding-bottom:10px;
		text-align: center;
	}
	a.botao_conta_topo span{
		display:block;
		font-size:10px;
		font-weight: 400;
		padding-top:8px; 
	}


	.topo_faixasuperior{
		width:70%;
		margin-left:30%;
	}
	.topo_redes{
		margin-top:0px; 
		text-align: right;
		float: left;
		width:85%;
		height:32px;
		text-align: right;
		background-color: <?=$cores[192]?>;
		float: left;
		color: <?=$cores[193]?>;
	}
	.topo_redes_triangulo1{
		width: 0;
		height: 0;
		border-top:32px solid <?=$cores[192]?>;
		border-left:30px solid transparent;
		float: left;
	}
	.topo_redes_triangulo2{
		width: 0;
		height: 0;
		border-top:32px solid <?=$cores[192]?>;
		border-right:30px solid transparent;
		float: left;
	}

	.fone_topo{
		float: left;
		margin-top:5px;
		font-size: 12px;
		font-weight:500;
		padding-top:4px;
		padding-left:5px; 
		text-align: left;
	}
	.fone_topo i{
		font-size: 13px;
		margin-right:5px;
	}
	.whats_topo{
		float: left;
		margin-top:5px;
		font-size: 12px;
		font-weight: 500;
		padding-top:4px;
		text-align: left;
		padding-left:20px;
		padding-right:20px;
	}
	.whats_topo i{
		font-size: 13px;
		margin-right:5px;
	}

	.redes_topo{
		float: right;
		text-align: center;
		padding-top: 5px;
		padding-left: 20px;
	}
	a.redes_topo_item{
		display: inline-block;
		padding-left:5px;
		padding-right: 5px;
		margin-top:0px;
	}
	a.redes_topo_item img{
		height:18px;
	}
	.mainmenu ul li a{ 
		font-weight: 400;
	}
	.mainmenu ul li a { 
		font-size: 20px;
	}
	.mainmenu ul li a:hover{
		font-weight: 400;
	}
	.mainmenu ul li a.active{ 
		font-weight: 500;
	}
	.navbar-collapse.collapse {
		padding-top: 7px;
	}
	.navbar-collapse.collapse {
		padding-top: 0px;
	}
	.navbar-header{
		width: 100%;
		text-align: center;
	}
	.mainmenu ul {
		width: 100%;
		height: 95px;
		text-align: center; 
	}
	.mainmenu ul li{
		float: none;
		display: inline-block;
		margin:0px;
		padding:0px;
		position:inherit;
		height:92px;
	}


	.mainmenu_txt{
		padding-top:0px;
		display: block;
		font-size: 12px;
		text-align: center;
		line-height: 15px;
		width: 100%;
		height:25px; 
	}
	.mainmenu_img{
		display: block;
		width:100%;
		height:42px;
		text-align: center;
	}
	.mainmenu ul li img{
		max-width: 42px;
		max-height: 42px;
	}
	.mainmenu ul li ul{
		position: absolute;
		top:87px;
		width:100%;
		min-width:100%;
		height: auto;
		min-height:200px; 
		margin-left:20px;
		margin-right:20px;
		margin-top: 0px;
	}
	.mainmenu ul li ul li{
		position: relative;
		width:50%;
		height: auto;
		padding: 0px;
		margin: 0px;
		text-align: left;
		max-width: 50%;
		display: block;
		float: left; 
	}
	.mainmenu ul li ul li a{
		position: relative; 
		width: auto;
		height: auto;		
		margin-left:15px;
		margin-right:15px;
		text-align: left;
		display: block;
		line-height: 20px;
		padding: 0px;
		text-decoration: none;
		background-color: transparent !important;
	}
	.mainmenu ul li ul li a:hover{
		position: relative; 
		width: auto;
		height: auto; 
		margin-left: 15px;
		margin-right: 15px;
		text-align: left;
		display: block;
		line-height: 20px;
		padding: 0px;
		text-decoration: none;		
		background-color: transparent !important;
	}
	.mainmenu ul li ul li .mainmenu_txt{
		padding-left:8px;
		padding-top:0px;
		padding-bottom:8px;
		padding-right: 8px;
		margin-left: 0px;
		text-align: left; 
		background-color:transparent;
		font-size: 14px;  
	}
	.mainmenu ul li ul li:hover{
		background-color: transparent;
	}
	.submenu_esq{
		float: left;
		width: 45%;
		padding-bottom: 20px;
	}
	.submenu_esq a{ 
	}

	.submenu_meio{
		float: left;
		width: 20%;
		padding-bottom: 20px;
	}
	.submenu_dir{
		float: right;
		width: 35%;
	}
	.mainmenu_titulo{
		padding-left:20px;
		padding-top:40px;
		padding-bottom:20px;
		text-align: left;
		font-size: 22px;
		font-weight: 700;
		width:100%;
	}
	.mainmenu_banner{
		width:100%;
		height:auto;
		max-width: none;
		max-height: none;   
	}
	.mainmenu ul li ul img{
		width: 100%;
		height:auto;
		max-width:none;
		max-height:none;
	}



	.topo8{
		background-color: rgba(4, 10, 27, 0.85) !important;
		backdrop-filter: blur(12px);
		-webkit-backdrop-filter: blur(12px);
		position: fixed;
		top: 0px;
		left: 0px;
		width: 100%;
		z-index: 999;
		box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
		border-bottom: 1px solid rgba(255, 255, 255, 0.05);
		transition: all 0.3s ease;
	}
	.main_header{
		position: relative;
		top: 0px;
		z-index: 999999;
		width: 100%;
	}	
	.main_header, header{
		background: transparent;
	}
	.logo_div{
		width: 100%;
	}
	a.logo{
		display: inline-block;
		width: 100%;
		margin: 0px;
	}
	a.logo img{
		height: 55px;
		width: auto;
		max-width: 100%;
		transition: all 0.3s ease;
	}
	a.logo img:hover {
		transform: scale(1.02);
	}
	.mainmenu ul{
		text-align: right !important;
	}
	.mainmenu ul li{
		height: auto;
	}
	.mainmenu ul li a{
		width: auto;
		padding: 8px 16px;
		display: inline-block;
		text-transform: uppercase;
		transition: all 0.3s ease;
		margin-top: 0px;
		border-radius: 20px;
		margin-left: 5px;
		border-top: 0 !important;
		background-color: transparent !important;
	}
	.mainmenu_txt{
		height: auto;
		font-size: 14px;
		font-weight: 600;
		color: #ffffff !important;
		letter-spacing: 0.5px;
	}
	.mainmenu ul li a:hover {
		background-color: rgba(0, 229, 255, 0.12) !important;
		transform: translateY(-2px);
	}
	.mainmenu ul li a:hover .mainmenu_txt{
		color: #00e5ff !important;
	}

	.mainmenu ul li ul{
		top:50px;
		left:-20px;
		width:400px;
		min-width:400px;
		background-color: transparent;
		border:0px;
	}
	.mainmenu ul li ul .setasub{
		position: absolute;
		top: 0px;
		left:10px;
	}
	.mainmenu ul li ul .setasub i{
		font-size:28px;
		color: <?=$cores[195]?>;
	}

	.submenu_esq{
		width: 100%;
		box-shadow: 0 6px 12px rgba(0,0,0,.175);		
		padding-top:15px;
		margin-top:10px;
		background-color: <?=$cores[195]?>;
	}
	.mainmenu ul li ul li a:hover, .mainmenu ul li ul li a{
		border-top: 0px !important; 
	}

	.mainmenu ul li ul li .mainmenu_txt{
		font-weight: 400;
		color: <?=$cores[196]?>;
	}

	.botao_carrinho2{
		display: none;
	}
	.topo_botao_user2{
		display: none;
	}

	.mainmenu ul li{
		position: relative;
	}

	.margemtopo{
		position: relative;
		width: 100%;
		height:90px;
	}

	@media only screen and (max-width:1200px) {

		.margemtopo{
			height:90px;
		}

		.mainmenu ul li a{
			width: auto;
			padding-left:10px;
			padding-right:10px;
		}

	}


	@media only screen and (max-width:990px) {

		.margemtopo{
			height:80px;
		}

		.mainmenu ul li a{
			width: auto;
			padding-left:7px;
			padding-top:10px;
			padding-bottom:10px;
			padding-right:7px; 
		}

		.mainmenu_txt{
			font-size: 11px;
		}

		.mainmenu ul li ul{
			top:50px;
			left:-20px;
			width:300px;
			min-width:300px;
			background-color: transparent;
			border:0px;
		}

		.mainmenu ul li ul li a{
			margin-top:5px;
		}
		.mainmenu ul li ul li .mainmenu_txt{
			font-size: 10px;
			padding-top: 0px;
			padding-bottom: 0px;
		}
		.topo_faixasuperior{
			width: 100%;
			margin: 0px;
		}
		.fone_topo{
			font-size: 11px;
		}
		.fone_topo i{
			font-size: 11px;
		}
		.whats_topo{
			font-size: 11px;
		}
		.whats_topo i{
			font-size: 11px;
		}

	}

	@media only screen and (max-width:770px) {

		.carousel-pause{
			display: none;
		}
		.navbar-toggle{
			background-color: transparent !important;
			color: <?=$cores[202]?>
		}
		.margemtopo{
			height:170px;
		}
		.topo7{
			position: relative;
		}
		a.botao_carrinho{
			display: none;
		}
		a.botao_carrinho2{
			display: block;
			position: absolute;
			left;: 0px;
			top:10px;
			position: absolute;
			width:auto;
			padding-left: 0px;
			font-size:22px; 
		}
		a.topo_botao_user2{			
			display: block;
			position: absolute;
			left:60px;
			top:10px;			
			font-size:22px; 
		}

		.topo_bordas2{
			display: none;
		}

		a.logo{
			width:100%;
			text-align: center;
		}
		a.logo img{
			width:60%;
			height: auto !important;
		}
		.busca_div{
			margin-top:0px;
		}
		.setasub{
			color: #fff
		}
		.mainmenu ul li ul{
			width: 100%;
			min-width: 100%;
			top:0px;
			background-color: transparent;
		}
		.submenu_esq{
			background-color: transparent;			
			border: 1px solid #fff;
			padding-top: 15px;
			margin-top: 11px;
		}
		.mainmenu ul li ul li a{
			padding-left: 20px;
		}
		.header-bottom {
			background-color: <?=$cores[201]?>;
			margin-top: 10px;
		}
		.mainmenu{
			text-align: left !important;
		}
		.mainmenu ul li ul .setasub i{
			display: none;
		}
		.menu{
			text-align: center;
		}
		header nav ul.menu > li > a{ 
			font-size: 12px;
			padding-left: 5px;
			padding-right: 5px;
			padding-top:10px;
			padding-bottom:10px;
		}
		a.redes_topo_item{
			margin-top:0px;
		}

		a.botao_conta_topo i{
			font-size:15px;
			padding-top:5px;
		}
		a.botao_conta_topo span{
			font-size:10px;
		}
		.topo2_superior_esq{
			display: none;
		}
		.topo2_superior_dir{
			text-align: center;
		}
		a.botao_conta_topo{
			padding-left:3px;
			padding-right:3px;
			padding-top:0px;
			text-align: center;
		}
		.topo_div1{
			text-align: center;
		}
		.logo_div{
			width: 100%;
			text-align: center;
		}
		.logo_div img{
			width: 60%;
			height: auto !important;
		}
		.logo{
			text-align: center;
			width:100%;
		}
		.mainmenu_txt{
			color:<?=$cores[202]?> !important;
		}		 
		.linha_menu{
			margin-top:10px !important;
		}
		.menu ul li ul{
			position: relative;
		}
		.mainmenu ul li ul li a .mainmenu_txt{
			color:<?=$cores[202]?> !important;
		}
		.menu ul li a .mainmenu_txt:hover{
			color:<?=$cores[202]?> !important;
		}
		.mainmenu ul li{
			width: 100% !important;
			max-width: 100% !important;
		}
		.menu ul li ul{
			position: relative;	 
		}
		.mainmenu{
			background-color: <?=$cores[201]?> !important;
			z-index: 999999;
		}
		.navbar-collapse.collapse{
			padding-top: 20px;
			box-shadow:none;
		}

		.mainmenu a{
			width: 100% !important;
			display: block !important;
			color: <?=$cores[202]?> !important;
			background-color: transparent !important;
			padding-top: 20px;
		}
		.navbar-collapse.collapse{
			margin-top: 0px;
		}
		.menu ul li a{
			width: 100%;
			margin-left: 0px;
			margin-right: 0px;
			padding-left: 0px;
			padding-right: 0px;
			padding-bottom:10px;
			padding-top:10px;
			text-align: left;
			color: <?=$cores[202]?> !important;
			background-color: transparent !important;
		}
		.menu ul li a:hover{
			width: 100%;
			margin-left: 0px;
			margin-right: 0px;
			padding-left: 0px;
			padding-right: 0px;
			padding-bottom:10px;
			padding-top:10px;
			text-align: left;
			color: <?=$cores[202]?> !important;
			background-color: transparent !important;
		}
		.menu ul li a .mainmenu_txt{
			text-align: left;
			margin-left: 20px;
			margin-right: 0px;
			padding-left: 0px;
			padding-right: 0px;
			color: <?=$cores[202]?> !important;
			font-weight: bold;
		}
		.mainmenu ul li ul{
			padding: 0px !important;
			margin: 0px !important;
			background-color: transparent !important;
		}
		.menu ul li ul{
			top: 0px;
			position: relative;
			width: 100% !important;
			min-width:100% !important;
			height: auto !important;
			min-height:10px;
			background-color: transparent !important;
		}
		.mainmenu ul li ul{
			position: relative;
		}
		.mainmenu ul li ul li{
			width: 100% !important;
			max-width:100% !important;
		}
		.mainmenu ul{
			height: auto !important;
		}
		.submenu_esq{
			background-color: transparent !important;
			border: none;
			box-shadow:none;
			padding: 0px;
			margin: 0px; 	
		}
		.mainmenu ul li{
			background-color: transparent !important;
		}
		.menu ul li ul li a:hover .mainmenu_txt{
			color: <?=$cores[202]?> !important;
			text-decoration: none;
		}
		.navbar-collapse.collapse{
			background-color: transparent !important;
		}
		.mainmenu_txt{
			text-align: left;
		}
		.navbar-collapse.collapse, .mainmenu{
			background-color: transparent !important;
		}
		.mainmenu ul li a{
			padding-left: 20px;
		}

		.mainmenu ul li ul{
			height: auto !important;
			min-height: 10px;
		}
		.mainmenu ul li ul li a i{
			display: none;
		}

		.navbar-collapse.collapse{
			padding-top: 0px;
		}

		.logo_div{
			padding-top:0px;
			text-align: center !important;
			width:100%;
		}
		.logo_div img{
			height: auto !important;
			width:100%;
		}
		a.logo{
			text-align: center !important;
			width: 100% !important;
		}
		.navbar-header{
			margin-top: -13%;
		}
		.fundomenuresponsivo{
			background-color: <?=$cores[201]?> !important;
		}
		.mainmenu ul li a{
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.topo_redes{
			width: 85%
		}
		.mainmenu ul li a{
			border-top: 0px !important;
			margin-top:5px !important;
			padding-top: 0px !important;
		}
		.mainmenu ul li a:hover{
			border-top: 0px !important;
			color: <?=$cores[202]?> !important;
		}
		.mainmenu ul li a:hover .mainmenu_txt{
			border-top: 0px !important;
			color: <?=$cores[202]?> !important;
		}
		.mainmenu ul li ul li a:hover .mainmenu_txt{
			color: <?=$cores[202]?> !important;
			padding-left: 30px !important;

		}

	}

	@media only screen and (max-width:480px) {
		.topo_redes{
			width: 80%
		}
		.redes_topo{
			display:none;
		}


	}

	@media only screen and (max-width:360px) {	
		.topo_faixasuperior{
			display:none;
		}
		.navbar-toggle{
			float: none;
			margin-top:40px;
		}
	}

	/* ============================================================ */
	/* Custom Overrides for Meganet Redesign                        */
	/* ============================================================ */
	.topo8 {
		background-color: #000000 !important;
		border-bottom: 2px solid #1E2C73 !important;
		box-shadow: 0 4px 20px rgba(0, 0, 0, 0.6) !important;
	}
	.logo_div {
		margin-top: 10px !important;
		margin-bottom: 10px !important;
	}
	.logo img {
		max-height: 60px !important;
		width: auto !important;
		margin-top: 0px !important;
		filter: drop-shadow(0px 2px 4px rgba(0,0,0,0.5)) !important;
	}
	.topo_redes {
		background-color: #0d111d !important;
		border-radius: 0 0 10px 10px !important;
		box-shadow: inset 0 -1px 0 rgba(255,255,255,0.05) !important;
	}
	.fone_topo, .whats_topo {
		color: #ffffff !important;
		font-weight: 500 !important;
	}
	.redes_topo_item img {
		filter: brightness(0) invert(1) !important;
		opacity: 0.8 !important;
		transition: all 0.3s ease !important;
	}
	.redes_topo_item:hover img {
		opacity: 1 !important;
		transform: scale(1.1) !important;
	}
	.mainmenu ul.navbar-nav li a {
		color: #ffffff !important;
		font-weight: 600 !important;
		letter-spacing: 0.5px !important;
		padding: 25px 15px !important;
		transition: all 0.3s ease !important;
	}
	.mainmenu ul.navbar-nav li a:hover .mainmenu_txt,
	.mainmenu ul.navbar-nav li a.active .mainmenu_txt {
		color: #00f0ff !important;
		text-shadow: 0 0 10px rgba(0, 240, 255, 0.4) !important;
	}
	.navbar-toggle {
		background-color: #1E2C73 !important;
		color: #ffffff !important;
		border: 1px solid rgba(255,255,255,0.1) !important;
	}

</style>