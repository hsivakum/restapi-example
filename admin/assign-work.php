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
<?php
$conn = mysqli_connect("localhost","root","","udaan");

$query = "SELECT * from user_requests where workerid=0";
$mysql = mysqli_query($conn,$query);
if (mysqli_num_rows($mysql) > 0) {
    while($row = mysqli_fetch_assoc($mysql)) {
		echo "<fieldset>";
		echo "<legend>Assign</legend>";
		echo "<form method='post' action='assign.php' >";
		$quer1 = "SELECT * FROM workers where skillset = '{$row['taskid']}'";
		echo "<select name='workderid' >";
		$mysql1 = mysqli_query($conn,$quer1);
		if (mysqli_num_rows($mysql1) > 0) {
			while($row1 = mysqli_fetch_assoc($mysql1)) 
			{
				echo "<option value='{$row1['id']}'>{$row1['name']}</option>";
			}
		}
		echo "</select><br/>";
        echo "<input   type='text' name='requestid' value='{$row['id']}'  /><br/>";
        echo "<input type='text' name='assetid' value={$row['assetid']} disabled /><br/>";
        echo "<input type='submit'  value='Assign Worker'  /><br/>";
		echo "</form>";
		echo "</fieldset>";
    }
}
?>
</body>
</html>

