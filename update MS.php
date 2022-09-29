<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard | Project Coordinator</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="http://localhost/project/index3.php">
                        <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                       <b> <h1 span class="title">Project Hub</span></h1>
                        
                    </a>

                    
                </li>

                <li>
                    <a href="http://localhost/project/index3.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span></b>
                    </a>
                </li>


              

                <li>
                    <a href="http://localhost/project/Meeting3.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title"> Meetings</span>
                    </a>
                </li>

                <li>
                    <a href="http://localhost/project/review3.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Reviews</span>
                    </a>
                </li>


                <li>
                    <a href="http://localhost/project/perform%20grad.php">
                        <span class="icon">
                            <ion-icon name="star-outline"></ion-icon>
                        </span>
                        <span class="title">Progress Report</span>
                    </a>
                </li>


                <li>
                    <a href="http://localhost/project/files.php">
                        <span class="icon">
                            <ion-icon name="card-outline"></ion-icon>
                        </span>
                        <span class="title">Files</span>
                    </a>
                </li>


                <li>
                    <a href="http://localhost/project/login.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title"> LogOut</span>
                    </a>
                </li>
            </ul>
        </div>

                 <!-- ========================= Main ==================== -->
                 <style>
            .button {
  display: inline-block;
  border-radius: 9px;
  background-color: #2a2185;
  border: none;
  color: white;
  text-align: center;
  font-size: 15px;
  padding: 5px;
  width: 180px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<div class="main" >
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <h1><b>UPDATE MEETING STATUS</b> </h1>
                
                <div class="">
        
              
              
    </a>
            </div>
            </div>
       

                   
              <!-- ======================= Cards ================== -->
              <div class="cardBox">
                

                
                </div>
                  <!-- ================ Order Details List ================= -->
                  <?php include 'connection.php'; ?>
                <div class="details" >
                    <div class="recentOrders" style="background-color:#f5f5f5;">
                        <div class="cardHeader">
                            <h2><b>UPDATE MEETING </b></h2>
                            <a href="http://localhost/project/add%20MS.php" >
                            <button class="button" style="vertical-align:middle"  ><span>+Add Status</span> </button></a>
                            </div>

                            
    <table>
        <thead>
            <table border="5px" cellppadding="5px" cellspacing"5px">
            <tr style="background-color: #A9A6CE;">
               <td><b><center>PROJECT TITTLE</center></b></td>
                <td><b><center>MEETING SCHEDULED</center></b></td>
                <td><b><center>MEETING DETAILS</center></b></td>
                <td><b><center>REMARKS</center></b></td>
                <td><b><center>STATUS</center></b></td>
               
            </tr>
        </thead>
    
        <tbody>
        <?php
        $query="SELECT * FROM meeting_status";
        $data=mysqli_query($con,$query);
        $result=mysqli_num_rows($data);
        if ($result) {
            while ($row=mysqli_fetch_array($data)) {
                ?>
                    <tr>
                    <td><center><?php echo $row['projecttitle']; ?></center>
                    </td>
                    <td><center><span class="status delivered"><?php echo $row['meetingscheduled']; ?></center></span>
                    </td>
                    <td><center><?php echo $row['meetingdetails']; ?></center>
                    </td>
                    <td><center><?php echo $row['remarks']; ?></center>
                    </td>
                    <td><center><span class="status inProgress"><?php echo $row['status']; ?></center></span>
                    </td>
                </tr>
                <?php
            }
        }
    ?>
     
        </tbody>
        </table>

</div>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>