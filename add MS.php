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
   
	<title>Status Form</title>
	<link rel="stylesheet" type="text/css" href="design1.css">
</head>
<body>
<form action="" method="POST">

	 <h2>Status Form</h2>
     
<div>

     <b><label>Project Title</label></b>
         <select name= "projecttitle">
                <option value="Project Hub">Project Hub</option>
                <option value="Cura Pets">Cura Pets</option>
                <option value="Glimpse">Glimpse</option>
                <option value="PakStan">PakStan</option>
            </select>
            <br><br>

            <b><label>Meeting Scheduled</label></b>
         <select name= "meetingscheduled">
         <option value="Attented">Attented</option>
                <option value="Not-Attented">Not-Attented</option>
            </select>
            <br><br>

        <b><label>Meeting Details</label></b>
     	<input type="meetingdetails" name="meetingdetails" required placeholder="Enter meeting details.."><br>

        <form>
      <b> <label>Remarks</label></b>
        <input type="remarks" name="remarks" required placeholder="Enter remarks.."><br>
           
        
        <b><label>Status</label></b>
            <select name= "status">
                <option value="Satisfactory">Satisfactory</option>
                <option value="Not-Satisfactory">Not-Satisfactory</option>
                </select>
            <br><br>

        </form>
        <button class="button" style="vertical-align:middle" name=save_btn><span>Submit</span> </button><br><br><br>
        <button class="button" onclick="location.href='http://localhost/project/update%20MS.php';" value="Back"><span>Back</span> </button>
        
        
</form>
</div>

     </form>

<?php
if (isset($_POST['save_btn'])) {
    $projecttitle=$_POST['projecttitle'];
    $meetingscheduled=$_POST['meetingscheduled'];
    $meetingdetails=$_POST['meetingdetails'];
    $remarks=$_POST['remarks'];
    $status=$_POST['status'];


$query="INSERT INTO meeting_status (
    projecttitle,meetingscheduled,meetingdetails,remarks,status) VALUES('$projecttitle','$meetingscheduled','$meetingdetails','$remarks','$status')";
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