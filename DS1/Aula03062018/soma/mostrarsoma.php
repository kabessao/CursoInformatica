<html>
	<head>
		<title>Soma</title>
	</head>
	<body>
		<?php
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];

			echo "<p>Valor 1 : $n1</p>";
			echo "<p>Valor 2 : $n2</p>";

			$soma = $n1 + $n2;

			echo "<p>A soma é: $soma.</p>";
?>
	</body>
</html>

