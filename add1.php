<?php
	include('connection.php');
 
	$fullname=$_POST['fullname'];
	$enrolment=$_POST['enrolment'];
	$batch=$_POST['batch'];
	$year=$_POST['year'];
 
	mysqli_query($con,"insert into `students` (fullname,enrolment,batch,year) values ('$fullname','$enrolment','$batch','$year')");
	header('location:student1.php');
 
?>