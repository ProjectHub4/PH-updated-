<?php
	include('connection.php');
	$password=$_POST['password'];
	$fullname=$_POST['fullname'];
	$designation=$_POST['designation'];
	$position=$_POST['position'];
 
	mysqli_query($con,"insert into `faculty_form` (password,fullname,designation,position) values ('$password','$fullname','$designation','$position')");
	header('location:enroll faculty.php');
 
?>