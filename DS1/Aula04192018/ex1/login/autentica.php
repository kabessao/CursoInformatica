<?php

require "funcoes.php";

$login=$_POST['login'];
$senha=$_POST['senha'];

if ($login==""){
	cabecalho("Campo em branco...");
	echo "<h1>O login é obrigatório!</h1>";
	echo "<a href=javascript:window.history.back()>Voltar</a>";
	rodape();
	exit;
}
if ($senha==""){
	cabecalho("Campo em branco...");
	echo "<h1>A senha é obrigatório!</h1>";
	echo "<a href=javascript:window.history.back()>Voltar</a>";
	rodape();
	exit;
}
if ($login=="admin" && $senha=="123"){
	session_start();
	$_SESSION['nome']="Administrador do Sistema";
	cabecalho("Aguarde...");
	echo "<h1>Acesso liberado. Aguarde!</h1>";
	rodape();
	header("Refresh: 3; URL=inicio.php");
} else {
	cabecalho("Aguarde...");
	echo "<h1>Login ou senha invalido. Aguarde...";
	rodape();
	header("Refresh: 2; URL=index.php");
}

?>
