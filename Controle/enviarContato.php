<?php
include_once '../Modelo/Contato.php';
$contact = new Contato();
$contact -> setNome($_POST["name"]);
$contact -> setEmail($_POST["email"]);
$contact -> setTelefone($_POST["telefone"]);
$contact -> setMensagem($_POST["message"]);
$contact -> Cadastrar();
include_once '../Visual/contato.html'
?>