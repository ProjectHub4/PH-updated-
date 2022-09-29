<!DOCTYPE html>
<html>
<head>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ADMIN PANEL - PROJECTS</title>
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
      input[type=text] {
        width: 100%;
        padding: 12px 120px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #2a2185;
        border-radius: 4px;
       
}
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
      }
 
        </style>
   
   <div class="main" >
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <h1><b> ADMIN PANEL-PROJECTS</b> </h1>
                
                <div class="">

                
        
              
              
    </a>
            </div>
            </div>
       
            
            <!-- ======================= Cards ================== -->
       
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
                        <h2><b>ALL Projects</b></h2>
                      
        <?php
error_reporting(0);
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `project_form` WHERE CONCAT(`projecttitle`, `supervisor`, `batch`, `year`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `project_form`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "project_hub");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

           <form action="admin_project.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Search Here"><br><br>
        <input type="submit" style="vertical-align:middle" name="search" value="Search"><br><br>

        
      
          
                    </div>
                    <table border="1">
                    
        <thead>
                            <table border="3px" cellppadding="3px" cellspacing="3px" >
                            <tr style="background-color: #A9A6CE;">
                               
                                <th><center><b>PROJECT TITLE</b></center></th>
                                 <th><center><b>SUPERVISOR</b></center></th>
                                
                                <th colspan="4"><center><b>STUDENT NAMES</b></center></th><br>
                                
                            
                                <th><center><b>DEGREE PROGRAM</b></center></th>
                                <th><center><b>ACADEMIC YEAR</b></center></th>
                                <th colspan=""><center><b></b></center></th>
                           
                            </tr>
                            
                           
                            <tr style="background-color: #A9A6CE;">
                            <th><center><b></b></center></th>
                            <th><center><b></b></center></th>
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
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <td><center><?php echo $row['projecttitle']; ?><center>
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
                <?php endwhile;?>
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

