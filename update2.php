<?php
	include('connection.php');
	$id=$_GET['id'];

	$password=$_POST['password'];
	$fullname=$_POST['fullname'];
	$designation=$_POST['designation'];
	$position=$_POST['position'];
	
 
	mysqli_query($con,"update `faculty_form` set password='$password',fullname='$fullname', designation='$designation',position='$position'  where id='$id'");
	header('location:enroll faculty.php');
?>