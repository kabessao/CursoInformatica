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
					<div class=\"titulo\">
					<img src=\"img/logo_etec.png\" class=\"img-rounded\" alt=\"Etecleme\" width=\"94\" height=\"60\">
					<br>Curso de Informática
					</div>
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
		echo '<a href="index.php">
		<span class="glyphicon glyphicon-home">
	</span> Inicio
		</a> | 
		<a href="cadusuario.php">
		<span class="glyphicon glyphicon-list-alt">
	</span> Cadastro de usuário
		</a> | 
		<a href="consultaenquete.php">
		<span class="glyphicon glyphicon-list-alt">
	</span> Consulta enquete
		</a> | 
		<a href="consultaenquete_detalhe.php">
		<span class="glyphicon glyphicon-list-alt">
	</span> Consulta totais
		</a> | 
		<a href="login.php">
		<span class="glyphicon glyphicon-user">
	</span> Login
		</a> | 
		<a href="logout">
		<span class="glyphicon glyphicon-off">
	</span> Sair
		</a>';
	}
			
