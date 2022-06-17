<?php

$hostname = "localhost";
$database = "cdpes";
$usuario = "root";
$senha = "134134";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->error){
    die("Falha ao conectar o banco de dados: " . $mysqli->error);
}

mysqli_set_charset($mysqli, "utf8");
?>