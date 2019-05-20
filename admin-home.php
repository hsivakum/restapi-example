<?php
session_start();

if($_SESSION['username'])
{
	$message = "Welcome Back ".$_SESSION['username']." Login Count ".$_SESSION['counter'];
	echo "<script type='text/javascript'>alert('$message');
	window.location = 'http://localhost/udan/admin/';</script>";
}
else 
{
	$message = "User Not Logged In";
	echo "<script type='text/javascript'>alert('$message');
	window.location = 'http://localhost/udan/admin-login.php';</script>";
}
?>