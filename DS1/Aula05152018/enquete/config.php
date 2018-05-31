<?php
$pdo = new PDO('mysql:host=localhost;dbname=dbenquete','root', '',array(PDO::ATTR_PERSISTENT => true));

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>