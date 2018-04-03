<html>
<head>
<title>Mostra de dados</title>
</head>
<body>
<?php

$futebol = isset($_POST['futebol'])?$_POST['futebol']:"";
$volei = isset($_POST['volei'])?$_POST['volei']:"";
$basquete = isset($_POST['basquete'])?$_POST['basquete']:"";
$tenis = isset($_POST['tenis'])?$_POST['tenis']:"";
$mma = isset($_POST['mma'])?$_POST['mma']:"";

echo "Esportes: $futebol - $volei - $basquete - $tenis - $mma<p>";
?>

</body>
</html>
