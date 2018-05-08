<?php
	require "funcoes.php";
	cabecalho("Calcular Tabuada");
	
	echo '<p>
	<form action="mostra-tabuada.php" method="post">
		<label for="n1">Informe o número</label>
		<input type="text" class="form-container" name="n1" id="n1">
	</p>
	<p>
		<input type="submit" name="submit" class="btn btn-primary" id="submit" value="enviar">
	</p>
	</form>';
rodape();
?>
