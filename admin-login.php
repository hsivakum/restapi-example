<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

$conn = mysqli_connect("localhost","root","","udaan");
$username = $_POST['username'];
$query = "select * from admin where username='$username'";
$mysql = mysqli_query($conn,$query);
if (mysqli_num_rows($mysql) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($mysql)) {
        if($row['password']==$_POST['pass'])
		{
			session_start();
			$_SESSION['username']= $_POST['username'];
			if( isset( $_SESSION['counter'] ) ) {
			  $_SESSION['counter'] += 1;
			}else {
			  $_SESSION['counter'] = 1;
			}
			$message = "Successfully Logged In";
			echo "<script type='text/javascript'>alert('$message');
			window.location = 'http://localhost/udan/admin-home.php';</script>";
		}else
		{
			$message = "Invalid Password";
			echo "<script type='text/javascript'>alert('$message');
			window.location = 'http://localhost/udan/admin-home.php';</script>";
		}
    }
} else if(mysqli_num_rows($mysql)==0){
    $message = "User Not Found";
	echo "<script type='text/javascript'>alert('$message');
	window.location = 'http://localhost/udan/admin-login.php';</script>";
}

mysqli_close($conn);
}

?>
<html>
<head>
<body>
<fieldset>
<legend>Admin Login</legend>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label>Username:</label>
<input type="text" name="username" />
<br/>
<br/>
<label>Password:</label>
<input type="password" name="pass" />
<br/>
<br/>
<input type="submit"  value="Add Assert"/>
</form>
</fieldset>
</body>
</head>
</html>