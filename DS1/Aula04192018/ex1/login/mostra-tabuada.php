<?php
require "funcoes.php";
cabecalho("Calcula Tabuada");

$n1=$_POST['n1'];
echo '<center><table border>';
for($i=0; $i<10; $i++){
	echo "<tr><td>$n1 x $i=</td><td>".$n1*$i."</td></tr>";
}
echo "</table><p>";
rodape();
?>

