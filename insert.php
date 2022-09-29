<?php
include('connection.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']){
    $projecttitle =$_SESSION ['projecttitle'];
    $student1 = $_SESSION['student1'];
    $student2 = $_SESSION['student2'];
    $student3 = $_SESSION["student3"];
    $student4 = $_SESSION["student4"];
    $supervisor = $_SESSION["supervisor"];
    $batch = $_SESSION["batch"];
    $ins_query="insert into project_form
    (`projecttitle`,`student1`,`student2`,`student3`,`student4`,`supervisor`,`batch`) values
    ('$projecttitle','$student1','$student2','$student3', '$student4', '$supervisor', '$batch')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='Admin.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Project Form</title>
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





<form name="form" method="post" action="Admin.php"> 
<input type="hidden" name="new" value="submit" />
<p><input type="text" name="projecttitle" placeholder="Enter project title" 
  /></p>

<p><input type="text" name="student1" placeholder="Enter student" 
 /></p>

<p><input type="text" name="student2" placeholder="Enter student" 
 /></p>

<p><input type="text" name="student3" placeholder="Enter student" 
 /></p>

<p><input type="text" name="student4" placeholder="Enter student" 
 /></p>

<p><input type="text" name="supervisor" placeholder="Enter supervisor" 
 /></p>

<p><input type="text" name="batch" placeholder="Enter batch" 
  /></p>

<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>