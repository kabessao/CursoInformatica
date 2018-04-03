<html>
	<head>
		<title>Soma</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo.css" type="text/css">
	</head>
	<body>
		<?php
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			$n3 = $_POST['n3'];
			$n4 = $_POST['n4'];

			if(($n1 == "" || $n2 == "") || ($n3 == "" || $n4 == "")) {
				echo "Campos em branco";	
			}
			echo "<p class=\"vermelho\">nota 1 : $n1</p>";
			echo "<p class=\"vermelho\">nota 2 : $n2</p>";
			echo "<p class=\"vermelho\">nota 3 : $n3</p>";
			echo "<p class=\"vermelho\">nota 4 : $n4</p>";

			$media = ($n1 +$n2 +$n3 +$n4) / 4; 
			$imagem = "";
			if ($media > 5) {
				$cor = "azul";
				$imagem = "facepalm.jfif";
			}else{
				$cor = "vermelho";
			}
				

			echo "<p class=\"$cor\">Sua media é de : $media.</p>";
			echo "\
			
?>
	</body>
</html>
