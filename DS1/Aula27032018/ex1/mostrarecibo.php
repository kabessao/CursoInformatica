<html>
<head>
<title>Mostrar Recibo</title>
</head>
<body>
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


echo "Eu $nome, $idade anos, portador do CPF:$cpf RG:$rg, declaro que recebi de $devedor<br>o valor de R$$valor. Não tendo nada para contestar declaro encerrada a divida nesta data.<br><br>Leme $dia do $mes de $ano.<br><br>_______________________________.<br>Assinatura.";

?><br><br>
<input type="button" name="print" value="imprimir" onClick="window.print();">
</body>
</html>

