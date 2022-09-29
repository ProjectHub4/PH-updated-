<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Faculty Form</title>
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

	 <h2> Add Faculty</h2>
     
<div>
        <label><b>Password</b></label>
     	<input type="text" name="password" required placeholder="Enter Your Password"><br>

     	<label><b>FullName</b></label>
     	<input type="text" name="fullname" required placeholder="Enter Your Full Name"><br>

         <label><b>Designation</b></label>
     	<input type="text" name="designation" required placeholder="Enter Your Designation"><br>

         <label><b>Position</b></label>
     	<input type="text" name="position" required placeholder="Enter Your position e.g: project cordinator"><br>
       
  

        
               
              
            </select>
            
            
 
     
    

           
       
           
          
    
        
        </form>
        
        
        <button class="button" style="vertical-align:middle" name="save_btn" ><span>Submit</span> </button><br>
    
        <br>
        <br>
       
        <button class="button" onclick="location.href='enroll faculty.php';" value="Back" ><span>Cancel</span> </button><br><br>
        
        
</form>
</div>

     </form>

<?php
    if (isset($_POST['save_btn'])) {
    
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $designation = $_POST['designation'];
    $position = $_POST['position'];
  
   
   
    $query="INSERT INTO faculty_form (password,fullname,designation,position) VALUES('$password','$fullname', '$designation', '$position')";
    $data=mysqli_query($con,$query);
    if ($data) {
        ?>
        
        <?php
         header("location:enroll faculty.php");

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