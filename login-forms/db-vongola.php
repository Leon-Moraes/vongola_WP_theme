<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "loginsystem";
$conexao = mysqli_connect($host, $user, $pass) or die (mysqli_error());
mysqli_select_db($banco) or die (mysqli_error());
?>