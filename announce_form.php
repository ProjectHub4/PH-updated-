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
	<title>Announcement Form</title>
	<link rel="stylesheet" type="text/css" href="design1.css">
</head>
<body>
<form action="" method="POST">

	 <h2>Announcement Form</h2>
     
<div>

<label><b>Date</b></label>
     	 <input type="date" name="date" required><br>

     	<b><label>Announcement Description</label></b>
     	<input type="text" name="descript" required><br>

        </form>
        
        <button class="button" style="vertical-align:middle" name=save_btn><span>Submit</span> </button><br><br><br>
        
</form>
</div>

     </form>

     <?php
if (isset($_POST['save_btn'])) {
    $date=$_POST['date'];
    $descript=$_POST['descript'];
   

$query="INSERT INTO announcement_db (
    date,descript) VALUES('$date','$descript')";
    $data=mysqli_query($con,$query);
    if ($data) {
        ?>
      
        <?php
        header("location:home.php");

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

