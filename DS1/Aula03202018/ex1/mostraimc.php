<html>
	<head>
		<title>Mostrar Imc</title>
	</head>
	<body>
		<?php
			if ((!is_numeric($_POST['Peso'])) || (!is_numeric($_POST['Altura']))){
				echo "<center>";
				echo "<h2>Atenção, o campo peso deve ser númerico</h2><p>";
				echo "<a href=\"javascript:window.history.back();\">
					<input type=\"button\" value=\"Voltar\"></a>";
				echo "</center>";
				exit;
			}
			
			$peso = $_POST['Peso'];
			$altura = $_POST['Altura'];
			
			if (($peso <= 0) || ( $altura <= 0)){
				echo "<center>";
				echo "<h1>se é burro cara</h1>";
				echo "<p>Coloque um numero positivo bicho burro do caramba</p>";
				echo "<a href=\"javascript:window.history.back();\">
					<input type=\"button\" value=\"Voltar\"></a>";
				echo "</center>";
				exit;
			}

			$imc = $peso / ($altura*$altura);
			$imc = number_format($imc, 2);
			echo "Seu IMC e de: $imc";
			if      ($imc < 18 ){
				$mensagem = "voce esta muito magro";
			}elseif ($imc < 25 ){
				$mensagem = "voce esta com o peso normal";
			}elseif ($imc < 30 ){
				$mensagem = "voce esta com sobrepeso";
			}elseif ($imc < 35 ){
				$mensagem = "voce esta obeso";
			}elseif ($imc < 40 ){
				$mensagem = "voce esta super obeso";
			}else{
				$mensagem = "voce esta ultra obeso";
			}

			echo "<br>$mensagem";

		?>
	</body>
</html>
