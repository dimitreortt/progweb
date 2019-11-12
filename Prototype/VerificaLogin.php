<?php

define("TITLE", "VerificaLogin");
include_once("Database.php");


echo $_POST["usuario"] . "<br>";
echo $_POST["senha"]. "<br>";

$res = $db->query('SELECT * FROM Usuarios');

while ($row = $res->fetchArray()) {
    echo "{$row['nome']} {$row['email']} {$row['password']}" .  "<br>";
}

?>