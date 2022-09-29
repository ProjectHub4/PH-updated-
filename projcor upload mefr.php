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
   
	<title>Meeting Form</title>
	<link rel="stylesheet" type="text/css" href="design1.css">
</head>
<body>
<form action="" method="POST">

	 <h2>Meeting Form</h2>
     
<div>

     <b><label>Project Title</label></b>
         <select name= "projecttitle">
                <option value="Project Hub">Project Hub</option>
                <option value="Cura Pets">Cura Pets</option>
                <option value="Glimpse">Glimpse</option>
                <option value="PakStan">PakStan</option>
            </select>
            <br><br>

     	<b><label>Date</label></b>
     	<input type="date" name="date" required><br>

        <b><label>Time</label></b>
     	<input type="time" name="time" required><br>

        <form>
      <b> <label>remarks</label></b>
        <input type="remarks" name="remarks" required placeholder="Enter remarks.."><br>
           
        
        <b><label>Status</label></b>
         <select name= "status">
                <option value="Attented">Attented</option>
                <option value="Not-Attented">Not-Attented</option>
            </select>
            <br><br>

        </form>
        <button class="button" style="vertical-align:middle" name=save_btn><span>Submit</span> </button><br><br><br>
        <button class="button" onclick="location.href='http://localhost/project/meeting3.php';" value="Back"><span>Cancel</span> </button>
        
        
</form>
</div>

     </form>

<?php
if (isset($_POST['save_btn'])) {
    $projecttitle=$_POST['projecttitle'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $remarks=$_POST['remarks'];
    $status=$_POST['status'];


$query="INSERT INTO meeting_form (
    projecttitle,date,time,remarks,status) VALUES('$projecttitle','$date','$time','$remarks','$status')";
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