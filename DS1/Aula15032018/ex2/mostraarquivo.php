<html>
	<head>
		<title>Mostrar Arquivo</title>
	</head>
	<body>
		<?php

			$nome_arquivo = $_FILES['arquivo']['name'];//nome do arquivo
			$tipo = $_FILES['arquivo']['type'];//tipo do arquivo
			$tamanho = $_FILES['arquivo']['size'];//tamanho do arquivo
			$tmp = $_FILES['arquivo']['tmp_name'];//arquivo temporario
			$erro = $_FILES['arquivo']['error'];

			$tamanho=number_format($tamanho/1024, 2);

			if (!move_uploaded_file($_FILES['arquivo']['tmp_name'], $nome_arquivo)){
				echo "Erro ao enviar o arquivo";
			}
			echo "<p>$nome_arquivo<vr><img src=\"$nome_arquivo\" width=\"200\" height=\"200\">";
		?>
	</body>
</html>
