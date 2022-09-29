<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="style.css">

    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard | Admin Panel</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="http://localhost/project/admin.php">
                        <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                       <b> <h1 span class="title">Project Hub</span></h1>
                        
                    </a>
                

                    
                </li>

                <li>
                    <a href="http://localhost/project/admin.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span></b>
                    </a>
                </li>

                
                <li>
                    <a href="http://localhost/project/enroll%20faculty.php">
                        <span class="icon">
                            <ion-icon name="woman"></ion-icon>
                        </span>
                        <span class="title">Faculty</span></b>
                    </a>
                </li>

                <li>
                    <a href="http://localhost/project/student1.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Students</span></b>
                    </a>
                </li>
                

                <li>
                    <a href="http://localhost/project/admin_project.php">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title"> projects</span>
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
                <h1><b> ADMIN PANEL-DASHBOARD</b> </h1>
                
                <div class="">
        
              
              
    </a>
            </div>
            </div>
       
            
            <!-- ======================= Cards ================== -->
<style>
    input[type=button],
      input[type=submit] {
        background-color: #2a2185;
        border: none;
        color: #fff;
        padding: 15px 30px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 12px;
        font-size: 20px;
      }
 
        </style>
            <?php include 'connection.php';
            if(isset($_POST['deleteAnnouncementButton'])) {
                unset($_POST['deleteAnnouncementButton']);
                include('delete_data.php'); 
            }
            ?>
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
                <form method="post">
        <input type="submit" name="deleteAnnouncementButton"
                value="Delete"/>
          
    </form>
                <div class="Button">
                    <div>
                    <?php   
            
            ?>
                    
                
                   
                    <style>
        .btn{
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

        .btn span{
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        }

        .btn span:after{
            content:'\00bb';
            position: absolute;
            opacity: 0;
            top:0
            right: -20px;
            transition: 0.5s;
        }

        .btn:hover span{
            padding-right: 25px;
        }

        .btn:hover span:after{
            opacity: 1;
            right: 0;
        } 
        </style>
        </head>
               
    </form>
                </div>
            
            
    
                    
                    <div class="iconBx">
                        <ion-icon name=""></ion-icon>
                    </div>
                </div>

               
            </div>

              <!-- ================ Order Details List ================= -->
              <?php  include('connection.php'); 
            
            ?>
            
            <div class="details" >
                <div class="recentOrders" style="background-color:#f5f5f5;">
                    <div class="cardHeader">
                        <h2><b>Recent Projects</b></h2>

                        <a href="http://localhost/project/enroll%20project.php">
            <button class="button" style="vertical-align:middle" ><span>Enroll Project</span> </button>
                        </a>
                    </div>
 
                    <div>
              <body>
	
		<table border="1">
        <thead>
                            <table border="3px" cellppadding="3px" cellspacing="3px" >
                            <tr style="background-color: #A9A6CE;">
                            
                            <th><center><b>PROJECT ID</b></center></th>
                            <th><center><b>PASSWORD</b></center></th>
                            <th><center><b>PROJECT TITTLE</b></center></th>
                            <th><center><b>SUPERVISOR</b></center></th>
                            
                            <th colspan="4"><center><b>STUDENT NAMES</b></center></th><br>

                            <th><center><b>DEGREE PROGRAM</b></center></th>
                            <th><center><b>ACADEMIC YEAR</b></center></th>
                            <th><center><b></b></center></th>
                            <th colspan="3"><center><b></b></center></th>
                         
                            
                             

                              
                           
                            </tr>
                            
                           
                            <tr style="background-color: #A9A6CE;">
                            <th><center><b></b></center></td>
                            <th><center><b></b></center></td>
                            <th><center><b></b></center></td>
                            <th><center><b></b></center></td>
                            <th colspan=""><center><b>1.</b></center></th><br>
                            <th colspan=""><center><b>2.</b></center></th><br>
                            <th colspan=""><center><b>3.</b></center></th><br>
                            <th colspan=""><center><b>4.</b></center></th><br>
                            <th colspan=""><center><b></b></center></th>
                            <th colspan=""><center><b></b></center></th>
                          
                           
                            <th colspan="2"><center><b>ACTIONS</b></center></th>
                         

                            
                           
                     
        </tr>
      
                        </thead>
			<tbody>
				<?php
					include('connection.php');
					$query=mysqli_query($con,"select * from `project_form`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
                        <td><center><?php echo $row['projectid']; ?><b><center></td>
                        <td><center><?php echo $row['password']; ?><center></td>
							<td><center><a href="http://localhost/project/admin_project.php" style="text-decoration:none; color:black;"><?php echo $row['projecttitle']; ?><center></td>
							<td><?php echo $row['supervisor']; ?></td>
                            <td><?php echo $row['student1']; ?></td>
                            <td><?php echo $row['student2']; ?></td>
                            <td><?php echo $row['student3']; ?></td>
                            <td><?php echo $row['student4']; ?></td>
                            <td><center><?php echo $row['batch']; ?><center></td>
                            <td><center><?php echo $row['year']; ?><center></td>
							<td>
								<b><center><a href="edits.php?id=<?php echo $row['id']; ?>">Edit</a><center></b>
                                </td>
                                <td>
								<b><center><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a><center></b>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>

      <!-- ================= New Customers ================ -->
                
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/table_script.js"></script>

            

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>