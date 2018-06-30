<?php

require "funcoes.php";
require "config.php";


cabecalho("Cadastro de usuários");

$codigo = $_GET['codigo'];

@$erro=$_GET['erro'];
@$campo=$_GET['campo'];

if($erro =="senha"){
echo "<div class=\"alert alert-danger\">
Atenção, campo <b>$campo</b> diferente!</div>";
}

$alterar = $pdo->prepare("select * from usuarios where codigo=:codigo");
$alterar->bindValue(':codigo', $codigo);
$alterar->execute();
$row = $alterar->fetch(PDO::FETCH_ASSOC);

echo "<form name=\"form1\" method=\"post\" action=\"gravaaltusuario.php\" class=\"form-inline\">
<input type=\"hidden\" name=\"codigo\" value=\"$row[codigo]\">
<p>Nome:
<input type=\"text\" size=\"50\" value=\"$row[nome]\" required autofocus name=\"nome\" id=\"nome\" class=\"form-control\" />
</p>
<p>Email:
<input type=\"email\" size=\"50\" value=\"$row[email]\" required name=\"email\" id=\"email\" class=\"form-control\" />
</p>
<p>Senha:
<input type=\"password\" size=\"50\" value=\"\" required name=\"senha\" id=\"senha\" class=\"form-control\" />
</p>
<p>Confirma Senha:
<input type=\"password\" size=\"50\" value=\"\" required name=\"senha2\" id=\"senha2\" class=\"form-control\" />
</p>
<p>
<input type=\"submit\" value=\"Gravar\" class=\"btn btn-primary\"/>
<input type=\"reset\" value=\"Limpar\" class=\"btn btn-primary\"/>
</p>
</form>";

rodape();
?>