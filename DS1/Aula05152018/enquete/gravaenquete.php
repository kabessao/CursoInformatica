<?php
require "config.php";

$jogo =$_POST['txtjogo'];
$sugestao = $_POST['txtsugestao'];

if ($jogo ==""){
    header("Location: index.php?erro=vazio&campo=Jogo");
    exit;
}

$insert = $pdo->prepare("insert into games values (:codigo, :jogo, :sugestao,now())");

$insert->bindValue(':codigo',0);
$insert->bindValue(':jogo',$jogo);
$insert->bindValue(':sugestao',$sugestao);

if($insert->execute()){
    echo '<div class="alert alert-danger">
    Obrigado pela resposta!</div>';
    header("Refresh: 5; URL=index.php");
}else{
    echo '<h1>Erro ao cadastrar.</h1>';
}
?>