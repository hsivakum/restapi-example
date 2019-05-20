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
<legend>Add Worker</legend>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label>Name</label>
<br/>
<input type="text" name="name" required />
<br/>
<label>Skillset</label>
<br/>
<select name="skillset">
<?php
$conn = mysqli_connect("localhost","root","","udaan");

$query = "SELECT * from tasks";
$mysql = mysqli_query($conn,$query);
if (mysqli_num_rows($mysql) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($mysql)) {
        echo "<option value={$row['id']}>{$row['tasknname']}</option>";
    }
}
?>
</select>
<br/>
<br/>
<input type="submit" value="Add Worker"/>
</form>
</fieldset>
<body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$addedby = $_SESSION['username'];
	$name = $_POST['name'];
	$skillset = $_POST['skillset'];
	
	$query = "INSERT INTO workers(id,addedby,name,skillset)values(NULL,'$addedby','$name','$skillset')";
	$mysql = mysqli_query($conn,$query);
	if($mysql)
	{
		$message = "Successfully Added";
		echo "<script type='text/javascript'>alert('$message');
		window.location = 'http://localhost/udan/admin/';</script>";
	}
}
?>