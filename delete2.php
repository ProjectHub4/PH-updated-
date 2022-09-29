<?php
require('connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM faculty_form WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: enroll faculty.php"); 
?>