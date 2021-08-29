<?php
include 'conn.php';
if(isset($_POST['sub']))
{
	$fname=$_POST['fn'];
	$lname=$_POST['ln'];
	$email=$_POST['mail'];
	$dob=date('y-m-d',strtotime($_POST['dob']));
	$mobile=$_POST['mob'];
	$designation=$_POST['des'];
	$gender=$_POST['gender'];
	$hobbies=$_POST['hobbies'];


	$query="INSERT INTO `user_info`(`id`, `firstname`, `lastname`, `email`, `dob`, `mobile`, `designation`, `gender`, `hobbies`) VALUES ('','$fname','$lname','$email','$dob','$mobile','$designation','$gender','$hobbies')";

	mysqli_query($conn,$query);
	echo "<script>alert('date instert')</script>";
	header("location:index.php");
}
?>