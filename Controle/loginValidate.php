<?php

include_once 'connect.php';


session_start();
$email = mysqli_real_escape_string($sql, $_POST['email']);
$password = mysqli_real_escape_string($sql, $_POST['senha']);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: ../Visual/conta.html');
}
$logado = $_SESSION['email'];
$query = "select senha, email from cadastro where senha = '{$password}' and email = '{$email}'";

$result = mysqli_query($sql, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['email'] = $email;
    mysqli_select_db($sql, "cadastros");
    $command = "insert into section (saved) values ('logado')";
    mysqli_query($sql, $command);
    $rota = header('Location: ../Controle/myaccount.php');
    return $rota;
    exit();
} else {
    header('location: ../Visual/conta.html');
}
