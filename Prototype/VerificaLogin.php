<?php

define("TITLE", "VerificaLogin");
include_once("Database.php");


echo $_POST["usuario"] . "<br>";
echo $_POST["senha"]. "<br>";
$username = $_POST["usuario"];

$res = $db->query('SELECT * FROM Usuarios where usuario=`'.$username.'`');

while ($row = $res->fetchArray()) {
    echo "{$row['nome']} {$row['email']} {$row['password']}" .  "<br>";
}

?>
