<?php
require "funcoes.php";
cabecalho("Informe o nome");
?>
<p>
<form action="arquivo_escrita.php" method="post" class="from-inline">
        <label for="n1">Informe o codigo:</label>
        <input type="text" name="codigo" id+"codigo" class="form-control">
    </p>
        <label for="n1">Informe o nome:</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </p>
        <label for="n1">Informe o sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" class="form-control">
    <p>
        <input type="submit" name="submit" id="submit" value="Enviar" class="btn btn-primary">
        <input type="reset" name="reset" id="reset" value="Limpar" class="btn btn-danger">
    </p>
</form>
<?php
rodape();
?>
        