<?php
require "config.php";
require "funcoes.php";


cabecalho("Enquete de Games");

@$erro=$_GET['erro'];
@$campo=$_GET['campo'];

  echo "
 <form action=\"gravaenquete.php\" method=\"post\" name=\"f1\" class=\"form-inline\">
  <label>
  Qual o jogo que voc� mais gosta no celular:<p><p>
  <select name=\"txtjogo\" class=\"form-control\">
  <option value=\"\">Selecione...</option>
  <option value=\"Modern Combat 5: Blackout\">Modern Combat 5: Blackout</option>
  <option value=\"Need for Speed: No Limits\">Need for Speed: No Limits</option>
  <option value=\"Strikers 1945-3\">Strikers 1945-3</option> 
  <option value=\"Heavenstrike Rivals\">Heavenstrike Rivals</option> 
  <option value=\"Moranguinho: Berry Rush\">Moranguinho: Berry Rush</option> 
  </select><p><p>
  Sugest�o de outro jogo:<br>  
    <input type=\"text\" autofocus name=\"txtsugestao\" size=\"40\" maxlength=\"100\" class=\"form-control\">
</label>

 <p style=\"text-align:center\">

	<input type=\"submit\" class=\"btn btn-primary\" value=\"Gravar\">	
	<input type=\"reset\" class=\"btn btn-primary\" value=\"Limpar\"></p>
</form>
";

rodape();
?>