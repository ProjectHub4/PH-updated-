<?php
	include('connection.php');
	$id=$_GET['id'];
 
	$fullname=$_POST['fullname'];
	$enrolment=$_POST['enrolment'];
	$batch=$_POST['batch'];
	$year=$_POST['year'];
	
 
	mysqli_query($con,"update `students` set fullname='$fullname', enrolment='$enrolment', batch='$batch', year='$year'  where id='$id'");
	header('location:student1.php');
?>