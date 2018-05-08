<?php
	function cabecalho($titulo){
		echo "
			<!doctype html>
			<html>
				<head>
					<meta charset=\"utf-8\">

					<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
					<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
					<link type=\"text/css\" rel=\"stylesheet\" href=\"estilo.css\">
					<link href=\"bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
					<script type=\"text/javascript\" src=\"bootstrap/js/bootstrap.min.js\"></script>
					<title>$titulo</title>
				</head>
				<body>

					<div class=\"container\">
					<div class=\"jumbotron\">
					<div class=\"principal\">
					<div class=\"cabecalho\">
					<img src=\"img/logo.jpg\">
					</div>
					<div class=\"centro\">";
					menu();
	}


	function rodape(){
		echo "</div>
			<div class=\"rodape\">".date("d/m/Y")."</div>
			</div>
			</div>
			</div>
			</body>
		</html>";
	}

	function menu() {
		@session_start();
		if(isset($_SESSION['nome'])){
		echo '<div class="menu">
		<a href="liberado.php">Inicio</a>|
		<a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Sair</a>|
		<a href="for.php">For</a>|
		<a href="form_tabuada.php">For tabuada</a>|
		<a href="arquivo_leitura.php">ler arquivo</a>|
		<a href="form_arquivo.php">Adicionar nome no arquivo</a>|
		</div>';
		}
	}
			
