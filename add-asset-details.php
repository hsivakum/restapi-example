<?php
	$conn = mysqli_connect("localhost","root","","udaan");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	$assetname = $_POST['assetname'];
	$query = "insert into asset (id,assetname)values(NULL,'$assetname')";
	$mysql = mysqli_query($conn,$query);
	if($mysql)
	{
		$message = "Inserted";
		echo "<script type='text/javascript'>alert('$message');
		window.location = 'http://localhost/udan';</script>";
		
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);



?>