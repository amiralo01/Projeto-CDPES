<?php

$server = 'localhost';
$database = 'cdpes';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($server, $usuario, $senha, $database);
if ($mysqli->connect_errno){
    die ("Falha ao conectar o banco de dados: " . $mysqli->error);
}

mysqli_set_charset($mysqli, "utf8");
?>