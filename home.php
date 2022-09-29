<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard | Project Coordinator</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="http://localhost/project/home.php">
                        <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                       <b> <h1 span class="title">Project Hub</span></h1>
                        
                    </a>

                    
                </li>

                <li>
                    <a href="http://localhost/project/home.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span></b>
                    </a>
                </li>

                <li>
                    <a href="http://localhost/project/activities.php">
                        <span class="icon">
                            <ion-icon name="create-outline"></ion-icon>
                        </span>
                        <span class="title">Activities</span></b>
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
                    <a href="http://localhost/project/perform%20grad.php">
                        <span class="icon">
                            <ion-icon name="star-outline"></ion-icon>
                        </span>
                        <span class="title">Progress Report</span>
                    </a>
                </li>
                
                <li>
                    <a href="http://localhost/project/projcor%20project.php">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title"> projects</span>
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
                    <a href="http://localhost/project/files.php">
                        <span class="icon">
                            <ion-icon name="card-outline"></ion-icon>
                        </span>
                        <span class="title">Templates</span>
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
        .button{
            display:inline-block;
            border-radius:9px;
            background-color: #2a2185;
            border:none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 5px;
            width: 180px;
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
   
   <div class="main" >
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <h1><b> PROJECT CO-ORDINATOR-DASHBOARD</b> </h1>
                
                <div class="">

                
        
              
              
    </a>
            </div>
            </div>
       
            
            <!-- ======================= Cards ================== -->
            <?php include 'connection.php'; ?>
            <div class="cardBox" style="width:150rem;">
                <div class="card">
                
                    <div>
                    <?php
                    $query="SELECT * FROM announcement_db";
                    $data=mysqli_query($con,$query);
                    $result=mysqli_num_rows($data);
                    if ($result) {
                    while ($row=mysqli_fetch_array($data)) {
                    ?>
                    
                        
                    <div class="cardName"> <?php echo $row['descript']; ?></div>
                        <div class="numbers"><b><?php echo $row['date']; ?></b></div><br>
                           
                            <?php
                            
                            
                }
                
            }
        ?>
                    
              </div>

                    <div class="iconBx">
                        <ion-icon name=""></ion-icon>
                    </div>
                </div>
            
                
                
                
                <br><br><br><br><br><br>
                <div class="Button">
                    <div>
                    
                <a href="announce_form.php">
                <button class="button" style="vertical-align:middle"  ><span>+Add Announcement</span> </button><br><br>
    </a>
    

    </a>
                    </div>
                    
                    <div class="iconBx">
                        <ion-icon name=""></ion-icon>
                    </div>
                </div>

               
            </div>
            

            <!-- ================ Order Details List ================= -->
            <?php include 'connection.php';?>
            <div class="details" >
                <div class="recentOrders" style="background-color:#f5f5f5;">
                    <div class="cardHeader">
                        <h2><b>Recent Projects</b></h2>
                       
                        <a href="http://localhost/project/projcor%20enrollproj.php">
            <button class="button" style="vertical-align:middle" ><span>Enroll Project</span> </button>
                        </a>
                        
                        
                    </div>
                    <table border="1">
        <thead>
                            <table border="3px" cellppadding="3px" cellspacing="3px" >
                            <tr style="background-color: #A9A6CE;">
                            <th><center><b>PROJECT ID</b></center></th>
                                <th><center><b>PROJECT TITLE</b></center></th>
                                 <th><center><b>SUPERVISOR</b></center></th>
                                
                                <th colspan="4"><center><b>STUDENT NAMES</b></center></th><br>
                                
                            
                                <th><center><b>DEGREE PROGRAM</b></center></th>
                                <th><center><b>ACADEMIC YEAR</b></center></th>
                                <th><center><b></b></center></th>
                                <th><center><b></b></center></th>
                                
                           
                            </tr>
                            
                           
                            <tr style="background-color: #A9A6CE;">
                            <th><center><b></b></center></td>
                            <th><center><b></b></center></td>
                            <th><center><b></b></center></td>
                            <th colspan=""><center><b>1.</b></center></th><br>
                            <th colspan=""><center><b>2.</b></center></th><br>
                            <th colspan=""><center><b>3.</b></center></th><br>
                            <th colspan=""><center><b>4.</b></center></th><br>
                            <th colspan=""><center><b></b></center></th>
                            <th colspan=""><center><b></b></center></th>
                           
                     
        </tr>
      
                        </thead>
			<tbody>
            </tbody>
            <?php
        $query="SELECT * FROM project_form";
        $data=mysqli_query($con,$query);
        $result=mysqli_num_rows($data);
        if ($result) {
            while ($row=mysqli_fetch_array($data)) {
                ?>
                <tr>
                <td><center><?php echo $row['projectid']; ?><b><center></td>
                <td><center><a href="http://localhost/project/projcor project.php" style="text-decoration:none; color:black;"><?php echo $row['projecttitle']; ?><center>
                    </td>
                    <td><center><?php echo $row['supervisor']; ?><center>
                    </td>
                    <td><?php echo $row['student1']; ?>
                    </td>
                    <td><?php echo $row['student2']; ?>
                    </td>
                    <td><?php echo $row['student3']; ?>
                    </td>
                    <td><?php echo $row['student4']; ?>
                    </td>
                    <td><center><?php echo $row['batch']; ?><center>
                    </td>
                    <td><center><?php echo $row['year']; ?><center>
                    </td>
                </tr>
                <?php
            }
        }
    ?>
                </div>

                <!-- ================= New Customers ================ -->
                
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

   <!-- ====== ionicons ======= -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

