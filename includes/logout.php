<?php
session_start();
require_once "db.php";
if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['password'])) {
	session_destroy();
}
if (isset($_COOKIE['id']) && isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
	unset($_COOKIE['id']);
	unset($_COOKIE['password']);
	unset($_COOKIE['email']);
	setcookie('id', null, -1, '/');
	setcookie('password', null, -1, '/');
	setcookie('email', null, -1, '/');
}
header("Location: ../index.php");
?>
