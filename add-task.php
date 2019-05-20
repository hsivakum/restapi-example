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
<legend>Add Task</legend>
<form method="post" action="add-task-details.php">
<label>Asset Name:</label>
<br/>
<select name="assetid" >
<?php
$conn = mysqli_connect("localhost","root","","udaan");

$query = "select * from asset";
$mysql = mysqli_query($conn,$query);
if (mysqli_num_rows($mysql) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($mysql)) {
        echo "<option value={$row['id']}>{$row['assetname']}</option>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</select>
<br/>
<label>Task Name:</label>
<br/>
<input type="text" name="taskname" />
<br/>
<label>Task Description:</label>
<br/>
<textarea name="description" cols=40 rows=5 ></textarea>
<br/>
<input type="submit"  value="Add Assert"/>
</form>
</fieldset>
</body>
</head>
</html>