<html>
    <head>
        <title>Variaveis de Ambiente</title>
    </head>
    <body>
        <?php
        //variaveis de ambiente
        echo "<h2>Navegador utilizado: </h2> $_SERVER[HTTP_USER_AGENT]<br> resumo: \"Não sei!\"";
        echo "<h2>Endereço do servidor: </h2> $_SERVER[HTTP_HOST]";
        echo "<h2>Caminho e nome do script: </h2> $_SERVER[PHP_SELF]";
        echo "<h2>Servidor web e versão php: </h2> $_SERVER[SERVER_SOFTWARE]";
        echo "<h2>Caminho: </h2> $_SERVER[HTTP_REFERER]";
        echo "<h2>S.O.: </h2> $_SERVER[SystemRoot]";
        ?>
    </body>
</html>