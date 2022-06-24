<?php
session_start();
include_once("connect.php");

$nome = filter_input(INPUT_get, "nome", FILTER_SANTIZE_STRING);
$email = filter_input(INPUT_get, "email", FILTER_SANTIZE_EMAIL);

$result_usuario = "INSERT INTO cliente (nome, email, created) VALUES ('$nome', '$email', NOW())";
$result_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "Usuario cadastrado com sucesso";
    header("Location: contato.php");

}else{

    $_SESSION['msg'] = "Usuario não foi cadastrado";
    header("Location: contato.php");

}

?>