<?php
require('connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM students WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: student1.php"); 
?>