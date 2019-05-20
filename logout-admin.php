<?php
session_start();
unset($_SESSION["username"]); 
 session_destroy();
$message = "Successfully Logged Out";
echo "<script type='text/javascript'>alert('$message');
window.location = 'http://localhost/udan/admin-login.php';</script>";

?>