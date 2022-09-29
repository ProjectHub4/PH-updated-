<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Activity Form</title>
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

	 <h2>Create Activity</h2>
     
<div>

        <label><b>Title</b></label>
     	<input type="text" name="title" required placeholder="Enter Title"><br>

         <label><b>Date</b></label>
     	 <input type="date" name="date" required><br>

         <label><b>Academic Year</b></label>
     	<input type="text" name="year" required placeholder="Enter Academic Year">
       
         <b><label>Time</label></b>
     	<input type="time" name="time" required><br>
       
         <label><b>Degree Program</b></label>
     	<select name= "batch" required>
                <option value="Select">Select</option>
                <option value="CS">CS</option>
                <option value="SE">SE</option>

           
    </select>
   <br><br>
    
        </form>
        
        
        <button class="button" style="vertical-align:middle" name="save_btn" ><span>Submit</span> </button><br>
    
        <br>
        <br>
        
       
        <button class="button" onclick="location.href='activities.php';" value="Back" ><span>Cancel</span> </button><br><br>
        
        
</form>
</div>

     </form>

<?php
    if (isset($_POST['save_btn'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $year = $_POST['year'];
    $time = $_POST['time'];
    $batch = $_POST['batch'];
   
   
   
    $query="INSERT INTO activity (title,date,year,time,batch) VALUES('$title','$date','$year','$time','$batch')";
    $data=mysqli_query($con,$query);
    if ($data) {
        ?>
        
        <?php
         header("location:activities.php");

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