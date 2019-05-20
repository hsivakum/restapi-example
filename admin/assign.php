<?php

$workerid =$_POST['workderid'];
date_default_timezone_set('GMT');
$requestid =$_POST['requestid'];
$date = date('Y-m-d H:i:s');
$temp = $date;

$tobedone = date('Y-m-d H:i',strtotime('+1 hour',strtotime($date)));
$conn = mysqli_connect("localhost","root","","udaan");

$query = "update user_requests set workerid=$workerid , timeofallocation= $temp, tasktobeperformedby= $tobedone where id='$requestid'";
$mysql = mysqli_query($conn,$query);
if($mysql)
{
	$message = "Task Successfully assigned";
	echo "<script type='text/javascript'>alert('$message');
	window.location = 'http://localhost/udan';</script>";
}
else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>