<html>
<head>
<title>Mostrar Calculo</title>
</head>
<body>
<?php

$LarguraTijolo=number_format($_POST['txtLarguraTijolo']);
$AlturaTijolo=number_format($_POST['txtAlturaTijolo']);
$LarguraParede=number_format($_POST['txtLarguraParede']);
$AlturaParede=number_format($_POST['txtAlturaParede']);

if (($LarguraParede == "") || ($LarguraTijolo == "" ) || ($AlturaParede == "" ) || ($AlturaTijolo == "")){
	echo "Se é burro cara!";
	exit;
}
$AreaTijolo = $AlturaTijolo * $LarguraTijolo;
$AreaParede = $AlturaParede * $LarguraParede;
$QuantidadeTijolos = $AreaParede / $AreaTijolo ;

echo "Você precisa de $QuantidadeTijolos tijolos para fazer uma parede com area de $AreaParede, e um tijolo com area de $AreaTijolo.<br>";

for ($i = 1; $i<$QuantidadeTijolos+1;$i++){
echo "###TIJOLO $i";
}
?>
</body>
</html>
