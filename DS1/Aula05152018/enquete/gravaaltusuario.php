<?php

require "funcoes.php";
require "config.php";
cabecalho("Grava usuários");


$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha2 = $_POST["senha2"];


if ($nome == ""){
    header("Location: alterausuarios.php?erro=vazio&campo=Nome&codigo=$codigo");
    exit;
}

if ($senha == ""){
    header("Location: alterausuarios.php?erro=vazio&campo=Senha&codigo=$codigo");
    exit;
}

if ($email == ""){
    header("Location: alterausuarios.php?erro=vazio&campo=Email&codigo=$codigo");
    exit;
}

if ($senha2 == ""){
    header("Location: alterausuarios.php?erro=vazio&campo=Senha&codigo=$codigo");
    exit;
}

$senha=sha1($senha);

$update = $pdo->prepare("update usuarios set nome=:nome, email=:email, senha=:senha where codigo=:codigo");
$update->bindValue(':codigo', $codigo);
$update->bindValue(':nome', $nome);
$update->bindValue(':email', $email);
$update->bindValue(':senha', $senha);

if ($update->execute()){
    echo "<div class=\"alert alert-danger\">
    Usuário alterado!</div>";
    header("Refresh: 1; URL=cadusuario.php");
}else{
    echo "Erro ao gravarr o usuário!";
}
rodape();
?>