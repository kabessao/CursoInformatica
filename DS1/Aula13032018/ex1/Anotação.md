testar se a variavel existe:
============================

	if (isset($_POST['estadocivil']) ......

	$estadocivil = isset($_POST['estadocivil'])?$_POST['estadocivil']:"";

Redirecionar
============

	header("Location:filename");	
