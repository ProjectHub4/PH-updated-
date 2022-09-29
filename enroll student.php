<?php include 'connection.php'; ?>

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
<form action="" method="POST">

	 <h2> Add Students</h2>
     
<div>

     	<label><b>FullName</b></label>
     	<input type="text" name="fullname" required placeholder="Enter Your Full Name"><br>

         <label><b>Enrolment</b></label>
     	<input type="text" name="enrolment" required placeholder="Enter Your Enrolment Number"><br>
       
         <label><b>Degree Program</b></label>
     	<select name= "batch" required>
                <option value="Select">Select</option>
                <option value="CS">CS</option>
                <option value="SE">SE</option>
    </select>
    <br><br>
     	<label><b>Academic Year</b></label>
     	<select name= "year" required placeholder="Enter Year">
                <option value="Select">Select</option>
                <option value="2022">2019</option>
                <option value="2022">2020</option>
                <option value="2022">2021</option>
                <option value="2022">2022</option>
               
                
            </select>
            <br><br>
            
 
     
    

           
       
           
          
    
        
        </form>
        
        
        <button class="button" style="vertical-align:middle" name="save_btn" ><span>Submit</span> </button><br>
    
        <br>
        <br>
       
        <button class="button" onclick="location.href='student1.php';" value="Back" ><span>Cancel</span> </button><br><br>
        
        
</form>
</div>

     </form>

<?php
    if (isset($_POST['save_btn'])) {
    $fullname = $_POST['fullname'];
    $enrolment = $_POST['enrolment'];
    $batch = $_POST['batch'];
    $year = $_POST['year'];
  
   
   
    $query="INSERT INTO students (fullname, enrolment, batch, year) VALUES('$fullname', '$enrolment', '$batch', '$year')";
    $data=mysqli_query($con,$query);
    if ($data) {
        ?>
        
        <?php
         header("location:student1.php");

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