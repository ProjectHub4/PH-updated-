<!DOCTYPE html>
<html>
<head>
	<title>ACTIVITIES</title>
	<link rel="stylesheet" type="text/css" href="style.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Activities | Project Coordinator</title>
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
                <h1><b> PROJECT CO-ORDINATOR-ACTIVITIES</b> </h1>
                
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
                    
        
    

    </a>
                    </div>
                    
                    <div class="iconBx">
                        <ion-icon name=""></ion-icon>
                    </div>
                </div>

               
            </div>
            

            <!-- ================ Order Details List ================= -->
            <style>
      input[type=text] {
        width: 100%;
        padding: 11px 120px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #2a2185;
        border-radius: 14px;
       
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
        border-radius: 15px;
        
      }
 
        </style>  
           
            <?php include 'connection.php';?>
            <div class="details" >
                <div class="recentOrders" style="background-color:#f5f5f5;">
                    <div class="cardHeader">
                        <h2><b>Activity Log</b></h2>
                       
                        <?php
error_reporting(0);
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `activity` WHERE CONCAT( `batch`, `year`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `activity`";
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

           <form action="activities.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Search Here"><br><br>
        <input type="submit" style="vertical-align:middle" name="search" value="Search"><br><br>

        </form>
        
        <a href="http://localhost/project/create%20activity.php">
            <button class="button" style="vertical-align:middle" ><span>Create Activity</span> </button>
                        </a>
          
                    </div>

                        
            
                    <table border="1">
        <thead>
                            <table border="3px" cellppadding="3px" cellspacing="3px" >
                            <tr style="background-color: #A9A6CE;">
                                <th><center><b>TITLE</b></center></th>
                                 <th><center><b>DATE</b></center></th>
                                <th><center><b>ACADEMIC YEAR</b></center></th>
                                <th><center><b>TIME</b></center></th>
                                <th><center><b>DEGREE PROGRAM</b></center></th>
                              
                                
                                <th colspan="2"><center><b>ACTIONS</b></center></th>
                            </tr>
                            
                           
                
                           
                     
        </tr>
      
                        </thead>
			<tbody>
            </tbody>
            <?php
        $query="SELECT * FROM activity";
        $data=mysqli_query($con,$query);
        $result=mysqli_num_rows($data);
        if ($result) {
            while ($row=mysqli_fetch_array($data)) {
                ?>
                <tr>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <td><center><?php echo $row['title']; ?><center>
                    </td>
                    <td><center><?php echo $row['date']; ?><center>
                    </td>
                    <td><center><?php echo $row['year']; ?><center>
                    </td>
                    <td><center><?php echo $row['time']; ?><center>
                    </td>
                    <td><center><?php echo $row['batch']; ?><center>
                    <td>
						<b><center><a href="edit3.php?id=<?php echo $row['id']; ?>">Edit</a><center></b>
                            </td>
                            <td>
						<b><center><a href="delete3.php?id=<?php echo $row['id']; ?>">Delete</a><center></b>
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

