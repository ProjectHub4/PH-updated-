<?php include 'connection.php'; ?>

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
<form action="" method="POST">

	 <h2>Enroll Project</h2>
     
<div>

        <label><b>Project ID</b></label>
     	<input type="text" name="projectid" required placeholder="Enter Project ID"><br>

         <label><b>Password</b></label>
     	<input type="text" name="password" required placeholder="Enter Password"><br>

     	<label><b>Project Title</b></label>
     	<input type="text" name="projecttitle" required placeholder="Enter Project Title"><br>

       <label><b>Student 1</b></label>
     	<input type="text" name="student1" required placeholder="Enter Student1 Name"><br>
         <label><b>Student 2</b></label>
     	<input type="text" name="student2" required placeholder="Enter Student2 Name"><br>
         <label><b>Student 3</b></label>
     	<input type="text" name="student3" placeholder="Enter Student3 Name"><br>
         <label><b>Student 4</b></label>
     	<input type="text" name="student4"  placeholder="Enter Student4 Name"><br>

         <label><b>Academic Year</b></label>
     	<input type="text" name="year" required placeholder="Enter Academic Year">
       
         <label><b>Degree Program</b></label>
     	<select name= "batch" required>
                <option value="Select">Select</option>
                <option value="CS">CS</option>
                <option value="SE">SE</option>

                
<br><br>
                <br>
    </select>
    <br><br>
     	<label><b>Supervisor</b></label>
     	<select name= "supervisor" required placeholder="Select Supervisor">
                <option value="Select">Select</option>
                <option value="Ms. Soomaiya Hamid">Ms. Soomaiya Hamid</option>
                <option value="Ms. Anisa Ahmed">Ms. Anisa Ahmed</option>
                <option value="Ms. Sumaira Ahmed">Ms. Sumaira Ahmed</option>
                <option value="Dr. Saifullah Adnan">Dr. Saifullah Adnan</option>
                <option value="Ms. Kanwal Zahoor">Ms. Kanwal Zahoor</option>
                
            </select>
            <br><br>
            
 
     
    

           
       
           
          
    
        
        </form>
        
        
        <button class="button" style="vertical-align:middle" name="save_btn" ><span>Submit</span> </button><br>
    
        <br>
        <br>
       
        <button class="button" onclick="location.href='admin.php';" value="Back" ><span>Cancel</span> </button><br><br>
        
        
</form>
</div>

     </form>

<?php
    if (isset($_POST['save_btn'])) {
    $projectid = $_POST['projectid'];
    $password = $_POST['password'];
    $projecttitle = $_POST['projecttitle'];
    $student1 = $_POST['student1'];
    $student2 = $_POST['student2'];
    $student3 = $_POST['student3'];
    $student4 = $_POST['student4'];
    $batch = $_POST['batch'];
    $year = $_POST['year'];
    $supervisor = $_POST['supervisor'];
   
   
    $query="INSERT INTO project_form (projectid,password,projecttitle,student1,student2,student3,student4,batch,year,supervisor) VALUES('$projectid', '$password', '$projecttitle', '$student1', '$student2', '$student3', '$student4', '$batch','$year','$supervisor')";
    $data=mysqli_query($con,$query);
    if ($data) {
        ?>
        
        <?php
         header("location:admin.php");

    }
    else
    {
        ?>
        
        <?php
    }
    
}



?>

</body>
</html>