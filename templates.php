<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Coordinator-Templates</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container" style="background-color:#2a2185;">
        <div class="navigation" style="background-color:#2a2185;">
            <ul>
                <li>
                    <a href="http://localhost/project/home.php#">
                        <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                        <h1 span class="title">Project Hub</span></h1>
                        
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
            .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #2a2185;
  border: none;
  color: white;
  text-align: center;
  font-size: 15px;
  padding: 7px;
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
                <h1><b>TEMPLATES</b> </h1>
                
                <div class="">
            
            </div>
            </div>

            <br><br>

   <!-- ================= New Customers ================ -->
   <div class="recentCustomers" >
                    <div class="cardHeader" style="background-color:#f5f5f5;" >
                        <h2>Uploaded Documents</h2>
						<br>
                        <a href="upload.php" class="btn">+Add Templates</a>
                    </div>

                    <table>
                        <tr >
                            <td width="60px">
                            <span class="icon">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </span>
                        <span class="title"> </span>
                            </td>
                            <td>
                                <h4>PROPOSAL SUBMISSION <br> <span> 25-JAN-2022</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <span class="icon">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </span>
                        <span class="title"> </span>
                                
                            </td>
                            <td>
                                <h4>SRS REPORT <br> <span>30-FEB-2022</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <span class="icon">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </span>
                        <span class="title"> </span>
                            </td>
                            <td>
                                <h4>MEETINGS FORMS<br> <span>5-MARCH-2022</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <span class="icon">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </span>
                        <span class="title"> </span>
                                
                            </td>
                            <td>
                                <h4>IGNITE REPORT <br> <span> 20-MARCH-2022</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <span class="icon">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </span>
                        <span class="title"> </span>
                                
                            </td>
                            <td>
                                <h4>MID PRESENTATION TEMPLATE<br> <span>1-APRIL-2022</span></h4>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <body>
	
	<div class="file__upload">
		<div class="header">
			<p><i class="fa fa-cloud-upload fa-2x"></i><span><span>up</span>load</span></p>
           			
		</div>
		<form action="" method="POST" enctype="multipart/form-data" class="body">
        

	
			<input type="file" name="file" id="upload" required>
			<label for="upload">
				<i class="fa fa-file-text-o fa-3x"></i>
				<p>
					<strong>Drag and drop</strong> files here<br>
					or <span>browse</span> to begin the upload
				</p>
			</label>
			<button name="upload" class="btn">Upload</button>
			<button name="Back"  onclick="location.href='http://localhost/project/home.php';"class="btn">Back</button>
			
		</form>
	</div>
</body>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
