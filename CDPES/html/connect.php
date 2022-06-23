<?php

$server = "localhost";
$port = "3006";
$database = "cdpes";
$usuario = "root";
$senha = "134134";

$mysqli = mysqli_connect($server, $usuario, $senha, $database, $port);
if ($mysqli->mysqli_error){
    echo "Falha ao conectar o banco de dados: " . $mysqli->error;
}

mysqli_set_charset($mysqli, "utf8");
?>