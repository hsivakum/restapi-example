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
<head>
<body>
<fieldset>
<legend>Add Asset:</legend>
<form method="post" action="add-asset-details.php">
<label>Asset Name:</label>
<br/>
<br/>
<input type="text" name="assetname" />
<input type="submit"  value="Add Assert"/>
</form>
</fieldset>
</body>
</head>
</html>