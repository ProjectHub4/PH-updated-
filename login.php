<?php
error_reporting(0);
$host="localhost";
$user="root";
$password="";
$db="project_hub";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)

{
	die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];

	$sql="select * from login where username= '".$username. "'AND password='".$password."'
	";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="Student")
	{
		header("location:index.php");
	}
	elseif($row["usertype"]=="ProjectCordinator")
	{
		
		header("location:home.php");
	}
	elseif($row["usertype"]=="Supervisor")
	{
		
		header("location:index2.php");
	}
    elseif($row["usertype"]=="Admin")
	{
		
		header("location:admin.php");
	}
	else
	{
		echo "Username or Password Incorrect";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
     <form name="#" method=post>

	 <h2>LOGIN</h2>
<div>
     	<label>Username</label>
     	<input type="text" name="username" required placeholder="Enter Username" required><br>

     	<label>Password</label>
     	<input type="password" name="password" required placeholder="Enter Password"  required><br>

</div>
        <button type="submit">Login</button>

     </form>
</body>
</html>