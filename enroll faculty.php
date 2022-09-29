<!DOCTYPE html>
<html>
<head>
	<title>Faculty | Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="style.css">

    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Faculty | Admin Panel</title>
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
                <h1><b> ADMIN PANEL- FACULTY</b> </h1>
                
                <div class="">
        
              
              
    </a>
            </div>
            </div>
       
            
            <!-- ======================= Cards ================== -->
            <?php include 'connection.php'; ?>
            <div class="" style="width:150rem;">
                <div class="">
                
                    <div>
                
                    
              </div>

                    <div class="iconBx">
                        <ion-icon name=""></ion-icon>
                    </div>
                </div>
            
                
                
                
                <br><br><br><br><br><br>
                <div class="Button">
                    <div>


                   
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
            <style>
        .button{
            display:inline-block;
            border-radius:9px;
            background-color: #2a2185;
            border:none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 3px;
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
            
            <div class="details" >
                <div class="recentOrders" style="background-color:#f5f5f5;">
                    <div class="cardHeader">
                        <h2><b>Enter Faculty Members</b></h2>
                       <a href="http://localhost/project/faculty%20form.php">
                        <button class="button" style="vertical-align:middle" ><span>+Enroll Faculty</span> </button>
                        </a>

                        </div>
 
 <div>
<body>

<table>
                        
                        <thead>
                            <table border="3px" cellppadding="3px" cellspacing="3px" >
                            <tr style="background-color: #A9A6CE;">
                         
                                <td><center><b>ID</b></center></td>
                                <td><center><b>PASSWORD</b></center></td>
                                <td><center><b>FULL NAME</b></center></td>
                                <td><center><b>DESIGNATION</b></center></td>
                                <td><center><b>POSITION</b></center></td>
                                
                                
                            
                                
                                
                             
                                <td colspan="2"><center><b>Actions</b></center></td>
                                </tr>

                     
                         



                            
                          
                          
                           
                            </tr>
                  
                            </thead>
			<tbody>
            <?php
                        $count=1;
					include('connection.php');
					$query=mysqli_query($con,"select * from `faculty_form`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
                            <td><center><b><?php echo $count; ?></td></center></b>
                            <td><center><?php echo $row['password']; ?><center></td>
							<td><center><?php echo $row['fullname']; ?><center></td>
                            <td><center><?php echo $row['designation']; ?><center></td>
                            <td><center><?php echo $row['position']; ?><center></td>
							<td>
								<b><center><a href="edit2.php?id=<?php echo $row['id']; ?>">Edit</a><center></b>
                                </td>
                                <td>
								<b><center><a href="delete2.php?id=<?php echo $row['id']; ?>">Delete</a><center></b>
							</td>
						</tr>
                        <?php $count++; } ?>
						<?php
					
				?>
       	</tbody> 
                     
       
                        </thead>
                    
                        
                      
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