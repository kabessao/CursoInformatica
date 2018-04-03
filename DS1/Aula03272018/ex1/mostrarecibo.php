<html>
	<head>
		<title>Mostrar Recibo</title>
	</head>
	<body>
	<style>
	.botao-vermelho{
	background-color:lightblue;
	}
	</style>
	<?php
		$nome = $_POST['Nome'];
		$idade = $_POST['Idade'];
		$cpf = $_POST['cpf'];
		$rg = $_POST['rg'];
		$devedor = $_POST['devedor'];
		$valor = $_POST['valor'];
		$dia = date("d");
		$mes = date("m");
		$ano = date("Y");
		
		if (($nome == "") || ($idade == "") || ($cpf == "") || ($rg == "") || ($devedor == "") || ($valor == "")){
			echo "<h1>Erro</h1>";
			echo "<br>preencha todos os campos";
			exit;
		}

		echo "<h1>Recibo</h1>";
		echo "Eu $nome, $idade anos, portador do CPF:$cpf RG:$rg, declaro que recebi de $devedor<br>o valor de R$$valor. Não tendo nada para contestar declaro encerrada a divida nesta data.<br><br>Leme $dia do $mes de $ano.<br><br>_______________________________.<br>Assinatura.";

		?>
		<br><br>
		<input class="botao-vermelho" type="button" name="print" value="imprimir" onClick="window.print();">
	</body>
</html>

