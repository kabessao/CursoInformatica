<?php

require "config.php";
require "funcoes.php";

$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];

if ($senha != $senha2) {
    cabecalho("Senhas incorretas");
    echo "<h1>As senhas estão diferentes</h1>";
    rodape();
    header("Refresh: 5; URL=cadusuario.php");
    exit ;
}


$nome = $_POST['nome'];
$email = $_POST['email'];

$cmd = $pdo->prepare("insert into usuarios (nome, email, senha) values (:nome, :email, :senha)");

$cmd->bindValue(':nome', $nome);
$cmd->bindValue(':email', $email);
$cmd->bindValue(':senha', $senha);

if($cmd->execute()){
    cabecalho("Sucesso!!!");
    echo '<h1>Cadastrado com sucesso!!</h1>';
        rodape();
        header("Refresh: 5; URL=cadusuario.php");
}else{
    echo "<h1>Deu pau</h1>";
}
?>

