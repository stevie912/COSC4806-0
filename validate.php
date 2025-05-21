<?php

session_start();

$valid_username = "steve";
$valid_password = "password";

$username = $_REQUEST['username'];
$_SESSION['username'] = $username;
$password = $_REQUEST['password'];

if ($valid_username == $username && $valid_password == $password) {
  $_SESSION['authenticated'] = true;
  header("Location: /");
} else {
  if (!isset($_SESSION['failed_attempts'])) {
    $_SESSION['failed_attempts'] = 1;
  } else {
    $_SESSION['failed_attempts'] += 1;
  }

  header("Location: /login.php");

}

?>