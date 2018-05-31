<?php

require "funcoes.php";
require "config.php";

cabecalho("Consulta Enquete");

$consulta= $pdo->prepare("select * from games order by codigo");
$consulta->execute();

$conta=0;
echo '<table width="100%" border>
<tr>
    <td><b>Código</b></td> 
    <td><b>Título Jogo</b></td>
    <td><b><center>Sugestão</center></b> </td>
</tr>';
while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
    <td>$row[codigo]</td>
    <td>$row[jogo]</td>
    <td>$row[sugestao]</td>
    </tr>";
    $conta++;
}
echo "</table> Total de respostas: $conta";
rodape();
?>
