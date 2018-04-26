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
		
