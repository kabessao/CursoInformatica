<html>
	<head>
		<title>Mostrar calculo</title>



	</head>
<body>
	<?php
	$tamanho=$_POST['tamanho'];
	$nome=$_POST['txtNome'];
	$idade=number_format($_POST['txtIdade']);

	if ($idade <=2){
		switch ($tamanho){
			case "pequeno":
				$calculo = $idade * 12.5;
				break;
			case "medio": 
				$calculo = $idade * 10.5;
				break;
			case "grande": 
				$calculo = $idade * 9.5;
				break;
		}	
	}
	else
	{
		switch ($tamanho){
			case "pequeno":
				$calculo = $idade * 6.5;
				break;
			case "medio": 
				$calculo = $idade * 5.5;
				break;
			case "grande": 
				$calculo = $idade * 8;
				break;
		}	
	}

	echo "O $nome, que nasceu a $idade anos atras, tem mais ou menos $calculo anos de idade.";
	exit;
