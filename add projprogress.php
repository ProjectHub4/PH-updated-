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
   
	<title>Progress Report</title>
	<link rel="stylesheet" type="text/css" href="design1.css">
</head>
<body>
<form action="" method="POST">

	 <h2>Progress Report</h2>
<div>

<b><label>Project Title</label></b>
     	<select name= "projecttitle">
                <option value="Project Hub">Project Hub</option>
                <option value="Cura Pets">Cura Pets</option>
                <option value="Glimpse">Glimpse</option>
                <option value="PakStan">PakStan</option>
            </select>
            <br><br>
            <b><label>Task</label></b>
     	<input type="text" name="Task" required placeholder="Enter tasks.."><br>

         <b><label>Remarks</label></b>
     	<input type="text" name="Remarks" required placeholder="Enter remarks.."><br>


         <label><b>Performance:</b></label>

            <select name= "performance" >
             <option value="-----">%</option>
                <option value="40">40%</option>
                <option value="45">45%</option>
                <option value="50">50%</option>
                <option value="55">55%</option>
                </select>


<select name= "performance1">
                <option value="-----">%</option>
                <option value="60">60%</option>
                <option value="65">65%</option>
                <option value="70">70%</option>
                <option value="75">75%</option>
                </select>

            <select name= "performance2" >
                <option value="-----">%</option>
                <option value="80">80%</option>
                <option value="85">85%</option>
                <option value="90">90%</option>
                <option value="95">95%</option>
                <option value="100">100%</option>
            </select>

            <br><br>

        
         
<form>
           <label><b>Status</b></label>
            <select name= "status">
                <option value="Satisfactory">Satisfactory</option>
                <option value="Not-Satisfactory">Not-Satisfactory</option>

             
            </select>
           <br><br> 
        </form>
        <button class="button" style="vertical-align:middle" name=save_btn><span>Submit</span> </button><br><br><br>
        <button class="button" onclick="location.href='http://localhost/project/perform grad.php';" value="Back"><span>Cancel</span> </button>
</div>

     </form>

<?php
if (isset($_POST['save_btn'])) {
    $projecttitle=$_POST['projecttitle'];
    $Task=$_POST['Task'];
    $Remarks=$_POST['Remarks'];
   
    $status=$_POST['status'];

$query="INSERT INTO performance_form (
    projecttitle,Task,Remarks,status) VALUES('$projecttitle','$Task','$Remarks','$status')";
    $data=mysqli_query($con,$query);
    if ($data) {
        ?>
         <?php
        header("location:perform grad.php");

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