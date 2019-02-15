<?php
	$conn=mysqli_connect("localhost","root","","thinksite");
	$query='SELECT * from user';
	$result=mysqli_query($conn,$query);
	$user=mysqli_fetch_assoc($result);
	//echo $user;
	echo json_encode($user);
?>