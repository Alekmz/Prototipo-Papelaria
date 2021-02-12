<?php
include_once 'connect.php';
mysqli_select_db($sql, "cadastros");
$command = "DELETE FROM `section` WHERE 1";
mysqli_query($sql, $command);
include('myaccount.php');
