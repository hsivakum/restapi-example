<?php
	$conn = mysqli_connect("localhost","root","","udaan");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	
	$assetid = $_POST['assetid'];
	$taskname = $_POST['taskname'];
	$taskdesc = $_POST['description'];
	$query = "insert into tasks (id,assetid,tasknname,description)values(NULL,'$assetid','$taskname','$taskdesc')";
	$mysql = mysqli_query($conn,$query);
	if($mysql)
	{
		$message = "Inserted Task Successfully";
		echo "<script type='text/javascript'>alert('$message');
		window.location = 'http://localhost/udan';</script>";
		
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);



?>