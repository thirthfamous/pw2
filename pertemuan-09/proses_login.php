<?php
session_start();

// Contoh akun
$valid_user = "admin";
$valid_pass = "123456";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_user && $password === $valid_pass) {
  $_SESSION['login'] = true;
  $_SESSION['username'] = $username;
  header("Location: dashboard.php");
} else {
  echo "Login gagal. <a href='login.php'>Coba lagi</a>";
}
?>