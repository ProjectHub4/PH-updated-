<?php
	include('connection.php');
 
	$title=$_POST['title'];
	$date=$_POST['date'];
	$year=$_POST['year'];
    $time=$_POST['time'];
	$batch=$_POST['batch'];
 
	mysqli_query($con,"insert into `activity` (title,date,year,time,batch) values ('$title','$date','$year','$time','$batch')");
	header('location:activities.php');
 
?>