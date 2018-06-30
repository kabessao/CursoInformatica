<?php

require "funcoes.php";
cabecalho("Login de usuário");

@$erro=$_GET['erro'];
@$campo=$_GET['campo'];
@$email=$_GET['email'];

if ($erro=="invalido"){
    echo "<script>$(\"#myModal\").modal();</script>";
    echo "<div class=\"alert alert-danger\">
    Atenção, login ou senha inválidos!</div>";
}

if ($erro=="vazio"){
    echo "<div class=\"alert alert-danger\">
    Atenção, campo <b>$campo</b> em branco!</div>";
}

if ($erro=="semLogin"){
    echo "<div class=\"alert alert-danger\">
    Atenção, Você não esta logado</div>";
}

?>

<form action="autentica.php" method="post" name="f1" class="form-inline" >
<p>

<label for="login" >Login:</label>
<input name="email" type="text" value="<?php echo $email; ?>" id="email" size="50" maxlength="50" class="form-control" >
</p>
<p>

<label for="senha" >Senha:</label>
<input name="senha" type="password" id="senha" size="50" maxlength="50" class="form-control" >
</p>
<p>

<input type="submit" name="Acessar" id="Acessar" value="Enviar" class="btn btn-primary" >
</p>

</form>

<script type="text/javascript">
document.f1.email.focus();
</script>

<?php
rodape();
?>