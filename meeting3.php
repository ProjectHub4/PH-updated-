
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting- Project Coordinator</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
  
<body>
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
<body>
   

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

body
{
  font-family:sans-serif;
  background: #A9A6CE;
  min-height: 100vh;
}
.center,.content
{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}
.click-me
{
  display:block;
  width:100px;
  height:50px;
  background: #A9A6CE;
  text-align:center;
  font-size:12px;
  line-height:50px;
  cursor:pointer;
}
#click
{
  display:none;
}
.click-me:hover
{
  color: #2a2185;
}
.content
{
  visibility:hidden;  
  width: 330px;
  height: auto;
  background: #2a2185;
  padding: 30px 35px 40px;
  box-sizing: border-box;
  border-radius: 5px;
}
#temp
{
  position:absolute;
  right:10px;
  top:20px;
  font-size:25px;
  background: #dde1e7;
  padding: 3px;
  padding-left: 11px;
  padding-right: 11px;
  border-radius: 50%;
  cursor:pointer;
}
#click:checked~.content
{
  opacity:1;
  visibility:visible;
}
.text
{
  font-size: 30px;
  color: #fff;
  font-weight: 600;
  text-align: center;
  letter-spacing: 2px;
}
form
{
  margin-top: 40px;
}
label
{
  display: block;
  margin-top: 30px;
  font-size: 16px;
  font-weight: 500;
}
input
{
  display: block;
  height: 43px;
  width: 100%;
  background-color: #fff;
  border-radius: 3px;
  border: none;

  margin-top: 8px;

  font-size: 18px;
  font-weight: 300;
}
::placeholder
{
  color: #4b4e4d;
  padding-left: 10px;
}
button
{
  width: 100%;
  margin-top: 35px;
  display:inline-block;
            border-radius:9px;
            background-color: #dde1e7;
            border:none;
            color: #2a2185;
            text-align: center;
            font-size: 20px;
            padding: 3px;
            width: 180px;
            transition: all 0.5s;
            cursor:pointer:
            margin: 5px;
}
</style>
<div class="main" >
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <h1><b> PROJECT CO-ORDINATOR-MEETING</b> </h1>
                
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
                            <h2><b>MEETING STATUS</b></h2>
                           
                            <a href="http://localhost/project/projcor%20upload%20mefr.php">
                            <button class="button" style="vertical-align:middle"  ><span>+Schedule Meeting</span> </button></a>
                            </div>
    
    <table>
        <thead>
            <table border="5px" cellppadding="5px" cellspacing"5px">
            <tr style="background-color: #A9A6CE;">
               <td><b><center>PROJECT TITTLE</center></b></td>
                <td><b><center>DATE</center></b></td>
                <td><b><center>TIME</center></b></td>
                <td><b><center>REMARKS</center></b></td>
                <td><b><center>STATUS</center></b></td>
           
               
            </tr>
        </thead>
    
        <tbody>
        <?php
        $query="SELECT * FROM meeting_form";
        $data=mysqli_query($con,$query);
        $result=mysqli_num_rows($data);
        if ($result) {
            while ($row=mysqli_fetch_array($data)) {
                ?>
                    <tr>
                    <td><center><?php echo $row['projecttitle']; ?></center>
                    </td>
                    <td><center><?php echo $row['date']; ?></center>
                    </td>
                    <td><center><?php echo $row['time']; ?></center>
                    </td>
    
       <td> <input type="checkbox" id="click">
    <label for="click" class="click-me"><b>Add Remarks</label></b>
    <div class="content">
      <div class="text">
        Add Remarks
     </div>
        <label for="click" id="temp">x</label>
    <form>

        
        <input type="text" placeholder="Add Remarks" id="remarks">
       
       
        <button  style="vertical-align:middle" name="save_btn" ><span>Submit</span> </button>

    </form>
    <?php
if (isset($_POST['save_btn'])) {
    $remarks=$_POST['remarks'];
   
   

$query="INSERT INTO meetingform (
    remarks) VALUES('$remarks')";
    $data=mysqli_query($con,$query);
    if ($data) {
        ?>
        
        <?php
 header("location:meeting3.php");
    }
    else
    {
        ?>
        
        <?php
    }
    
}

?>

   
            </td></center></b
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