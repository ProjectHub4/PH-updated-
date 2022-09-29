<?php
	include('connection.php');
	$id=$_GET['id'];
 
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
 
	mysqli_query($con,"update `project_form` set projectid='$projectid', password='$password', projecttitle='$projecttitle', supervisor='$supervisor', student1='$student1', student2='$student2', student3='$student3', student4='$student4', batch='$batch', year='$year'  where id='$id'");
	header('location:admin.php');
?>