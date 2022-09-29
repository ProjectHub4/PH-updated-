<?php
require('connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM activity WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: activities.php"); 
?>