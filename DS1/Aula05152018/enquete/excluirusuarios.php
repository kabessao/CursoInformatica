<?php

require "funcoes.php";
require "config.php";

cabecalho("Exclui usuários");

$codigo = $_GET['codigo'];

$delete = $pdo->prepare("delete from usuarios where codigo=:codigo");
$delete->bindValue(':codigo', $codigo);

if ($delete->execute()) {
    echo '<div class="alert alert-danger">
    Usuário deltedato</div>';
    header("Refresh: 3 URL=cadusuario.php");
}else{
    echo 'Erro ao apagaro usuário!';
    
}
rodape();
?>