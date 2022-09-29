<?php
	include('connection.php');
	$id=$_GET['id'];
 
	$title=$_POST['title'];
	$date=$_POST['date'];
	$year=$_POST['year'];
    $time=$_POST['time'];
	$batch=$_POST['batch'];
	
 
	mysqli_query($con,"update `activity` set title='$title', date='$date', year='$year', time='$time', batch='$batch'  where id='$id'");
	header('location:activities.php');
?>