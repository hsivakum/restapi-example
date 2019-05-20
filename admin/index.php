<?php
session_start();
if(!isset($_SESSION['username']))
{
	$message = "Please Login In";
	echo "<script type='text/javascript'>alert('$message');
	window.location = 'http://localhost/udan/admin-login.php';</script>";
}
?>
<html>
<body>
<fieldset>
<legend>Admin Features</legend>
<a href="http://localhost/udan/add-asset.php">Add Asset</a>
<a href="http://localhost/udan/add-task.php">Add Task</a>
<a href="http://localhost/udan/admin/add-worker.php">Add Worker</a>
<a href="http://localhost/udan/delete-worker.php">Delete Worker</a>
<a href="http://localhost/udan/admin/assign-work.php">Assign task</a>
<a href="http://localhost/udan/logout-admin.php">Logout</a>

</fieldset>
</body>
</html>