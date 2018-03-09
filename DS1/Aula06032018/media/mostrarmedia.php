<html>
	<head>
		<title>Soma</title>
		<meta charset="utf-8">
		<style>
.texto{
text-align:center;
color:blue;
font-size:40px;
}
</style>
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
			echo "<p class=\"texto\">nota 1 : $n1</p>";
			echo "<p class=\"texto\">nota 2 : $n2</p>";
			echo "<p class=\"texto\">nota 3 : $n3</p>";
			echo "<p class=\"texto\">nota 4 : $n4</p>";

			$media = ($n1 +$n2 +$n3 +$n4) / 4; 

			echo "<p>Sua media é de : $media.</p>";
?>
	</body>
</html>

