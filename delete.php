<?php
	$id=$_GET['id'];
	include('connection.php');
	mysqli_query($con,"delete from `project_form` where id='$id'");
	header('location:admin.php');
?>