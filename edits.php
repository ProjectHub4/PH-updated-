<?php
	include('connection.php');
	$id=$_GET['id'];
	$query=mysqli_query($con,"select * from `project_form` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Form</title>
<link rel="stylesheet" type="text/css" href="design1.css">


<style>
        .button{
            display:inline-block;
            border-radius:9px;
            background-color: #2a2185;
            border:none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 7px;
            width: 390px;
            transition: all 0.5s;
            cursor:pointer:
            margin: 5px;
        }

        .button span{
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        }

        .button span:after{
            content:'\00bb';
            position: absolute;
            opacity: 0;
            top:0
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span{
            padding-right: 25px;
        }

        .button:hover span:after{
            opacity: 1;
            right: 0;
        }
        
        </style>
</head>
<body>
	
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
	<h2>Edit Form</h2>
	<label>Project ID :</label><input type="text" value="<?php echo $row['projectid']; ?>" name="projectid">
        <label>Password:</label><input type="text" value="<?php echo $row['password']; ?>" name="password">
		<label>Project Tittle:</label><input type="text" value="<?php echo $row['projecttitle']; ?>" name="projecttitle">
		<label>Supervisor:</label><input type="text" value="<?php echo $row['supervisor']; ?>" name="supervisor">
		<label>Student1:</label><input type="text" value="<?php echo $row['student1']; ?>" name="student1">
		<label>Student2:</label><input type="text" value="<?php echo $row['student2']; ?>" name="student2">
		<label>Student3:</label><input type="text" value="<?php echo $row['student3']; ?>" name="student3">
		<label>Student4:</label><input type="text" value="<?php echo $row['student4']; ?>" name="student4">
		<label>Degree Program:</label><input type="text" value="<?php echo $row['batch']; ?>" name="batch">
		<label>Academic Year:</label><input type="text" value="<?php echo $row['year']; ?>" name="year">
		<button class="button" style="vertical-align:middle" name="save_btn" ><span>Submit</span> </button><br><br><br>
        <button class="button" onclick="location.href='admin.php';" value="Back" ><span>Back</span> </button>
		
	</form>
</body>
</html>