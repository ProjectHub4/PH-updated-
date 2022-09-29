<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
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
            width: 400px;
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
   
  
	<title>Project Form</title>
	<link rel="stylesheet" type="text/css" href="design1.css">
</head>
<body>
<form action="" method="POST">

	 <h2>Enroll Project </h2>
     
<div>

<b><label>ProjectTittle</label></b>
     	<input type="text" name="ProjectTittle" required placeholder="Enter project name.."><br>
     	
   
<b><label>Student</label></b>
     	<input type="text" name="Student" required placeholder="Enter Student name.."><br>
        <form>
       
        <b><label>Supervisor</label></b>
            <select name= "Supervisor">
                <option value="select">select</option>
                <option value="Ms Soomaiya Hamid">Ms Soomaiya Hamid</option>
                <option value="Ms Anisa Ahmed">Ms Anisa Ahmed</option>
                <option value="Sir Saifullah Adnan">Sir Saifullah Adnan</option>
                <option value="Ms Sumaira">Ms Sumaira</option>
                <option value="Ms Kanwal Zahoor">Ms Kanwal Zahoor</option>
                
            </select>
            <br>
            <br>
            
        <b><label>Performance</label></b>
        <br>
        <br>
        <label style="color:red;"><b>Bad</b></label>
        
            <select name= "Performance">
            <option value="-----">%</option>
                <option value="0%">0%</option></span>
                <option value="5%"><center>5%</center></option>
                <option value="10%"><center>10%</center></option>
                <option value="15%"><center>15%</center></option>
                <option value="20%"><center>20%</center></option>
                <option value="25%"><center>25%</center></option>
                <option value="30%"><center>30%</center></option>
                <option value="35%"><center>35%</center></option>
                <option value="40%"><center>40%</center></option>
                <option value="45%"><center>45%</center></option>
                <option value="49%"><center>49%</center></option>
            </select>
            <br>
            <br>
            <label style="color:#d4af37;"><b>Good</b></label>
            <select name= "performance1">
     
            <option value="-----">%</option>
                <option value="50%">50%</option></span>
                <option value="55%"><center>55%</center></option>
                <option value="60%"><center>60%</center></option>
                <option value="65%"><center>65%</center></option>
                <option value="70%"><center>70%</center></option>
                <option value="75%"><center>75%</center></option>
          
                </select>
                <br>
                <br>
            <label style="color:green;"><b>Excellent</b></label>
            <select name= "performance2">
            <option value="-----">%</option>
                <option value="76%">76%</option></span>
                <option value="80%"><center>80%</center></option>
                <option value="85%"><center>85%</center></option>
                <option value="90%"><center>90%</center></option>
                <option value="95%"><center>95%</center></option>
                <option value="100%"><center>100%</center></option>
    
            </select>


            <br>
            <br>
        
        </form>

        
        <button class="button" style="vertical-align:middle" name=save_btn><span>Submit</span> </button><br><br><br>
        <button class="button" onclick="location.href='http://localhost/project/index3.php';" value="Back"><span>Back</span> </button>
        
        
</form>
</div>

     </form>

<?php
if (isset($_POST['save_btn'])) {
    $ProjectTittle=$_POST['ProjectTittle'];
    $Student=$_POST['Student'];
    $Supervisor=$_POST['Supervisor'];
    $Performance=$_POST['Performance'];
    $performance1 = $_POST['performance1'];
    $performance2 = $_POST['performance2'];

$query="INSERT INTO project_form (
    ProjectTittle,Student,Supervisor,Performance,performance1,performance2) VALUES('$ProjectTittle','$Student','$Supervisor','$Performance', '$performance1','$performance2')";
   $data=mysqli_query($con,$query);
    if ($data) {
        ?>
        <script type="text/javascript">
        </script>
        <?php

    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("Please Try Again");
        </script>
        <?php
    }
    
}

?>

</body>
</html>