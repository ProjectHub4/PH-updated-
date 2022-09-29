<?php
	include('connection.php');
	$id=$_GET['id'];
	$query=mysqli_query($con,"select * from `students` where id='$id'");
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
	
	<form method="POST" action="update1.php?id=<?php echo $id; ?>">
    <h2>Student Edit Form</h2>
		<label>Full Name:</label><input type="text" value="<?php echo $row['fullname']; ?>" name="fullname">
        <label>Enrolment :</label><input type="text" value="<?php echo $row['enrolment']; ?>" name="enrolment">
		<label>Degree Program:</label><input type="text" value="<?php echo $row['batch']; ?>" name="batch">
		<label>Academic Year:</label><input type="text" value="<?php echo $row['year']; ?>" name="year">
    	
           
        <button class="button" style="vertical-align:middle" name="save_btn" ><span>Submit</span> </button><br><br><br>
        <button class="button" onclick="location.href='student1.php';" value="Back" ><span>Back</span> </button>
        
	</form>
</body>
</html>