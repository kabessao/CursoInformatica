<?php

require "funcoes.php";
require "config.php";

cabecalho("Login de usuário");

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email==""){
    header("Location: login.php?erro=vazio&campo=Email ");
    exit;
}

if($senha=="") {
    header("Location: login.php?erro=vazio&campo=Senha&email=$email");
    exit;
}

$senha=sha1($senha);

$consulta = $pdo->prepare("select * from usuarios where email=:email and senha=:senha");
$consulta->bindValue(':email', $email);
$consulta->bindValue(':senha', $senha);
$consulta->execute();

$row = $consulta->fetch(PDO::FETCH_ASSOC);

if ($row['email']){
    session_start();
    $_SESSION['codigo'] = $row['codigo'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['email'] = $row['email'];

    header("Location:cadusuario.php");
}else{
    header("Location: login.php?erro=invalido&campo=Senha");
    exit;
}
rodape();
?>