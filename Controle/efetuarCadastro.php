<?php
include_once '../Modelo/Login.php';
$user = new Login();
$user -> setNomeUsuario($_POST["name"]);
$user -> setSenha($_POST["password"]);
$user -> setEmail($_POST["email"]);
$user -> Cadastrar();
include_once '../Visual/conta.html';
