<?php
include "Functions.php";

global  $conn;
$user = $_SESSION['Username'];
 $conn -> query("UPDATE userinfo SET active='0' WHERE Username='$user'"); //Logging out onclick
 session_destroy();
 $_SESSION['active'] = '0';
  $conn -> query("UPDATE userinfo SET Online='0' WHERE Username='$user'");
 header('location: ../index.php');
