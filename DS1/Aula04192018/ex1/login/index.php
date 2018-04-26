<?php
require "funcoes.php";
cabecalho("Tela de Login");
?>
<form action="autentica.php" method="post" name="f1" class="form-inline">

<p>
<label>Login:

<input type="text" name="login" id="login" class="form-control">

</label>
</p>
<p>
<label>Senha:
<input type="password" name="senha" id="senha" class="form-control">
</label>
</p>
<input type="submit" value="Logar" class="btn btn-primary">
<input type="reset" value="limpar" class="btn btn-danger">



<?php
rodape();
?>
