<?php
	include('connection.php');
 
	$projectid=$_POST['projectid'];
	$password=$_POST['password'];
	$projecttitle=$_POST['projecttitle'];
	$supervisor=$_POST['supervisor'];
	$student1=$_POST['student1'];
	$student2=$_POST['student2'];
	$student3=$_POST['student3'];
	$student4=$_POST['student4'];
	$batch=$_POST['batch'];
	$year=$_POST['year'];
 
	mysqli_query($con,"insert into `project_form` (projectid,password,projecttitle,supervisor,student1,student2,student3,student4,batch,year) values ('$projectid', '$password', '$projecttitle','$supervisor','$student1','$student2','$student3','$student4','$batch','$year')");
	header('location:admin.php');
 
?>