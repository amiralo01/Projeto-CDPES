<?php

$server = "localhost";
$database = "cdpes";
$usuario = "root";
$senha = "";

$mysqli = mysqli_connect($server, $usuario, $senha, $database);
if ($mysqli->mysqli_error){
    die ("Falha ao conectar o banco de dados: " . $mysqli->error);
}

mysqli_set_charset($mysqli, "utf8");
?>