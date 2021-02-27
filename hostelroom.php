<?php


$host="localhost";
$user="root";
$password="";

$conn=mysqli_connect($host,$user,$password);
$db=mysqli_select_db($conn,"hostel");

session_start();



$email=$_SESSION['mail'];

$sql="SELECT * from student where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);


?>
















<!DOCTYPE html>
<html>
<head>
	<title>HOSTEL ROOM</title>
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="hostelroom.css">
	
</head>
<body>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->




<br>
<button style="margin-left: 1300px; " type="button" class="btn btn-light"><a href="userlog.php">Logout</a></button>

    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a title="For Home Page" href="home.php">
                         <img id="logo" height="50px" src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7d/National_Institute_of_Technology%2C_Jamshedpur_Logo.png/200px-National_Institute_of_Technology%2C_Jamshedpur_Logo.png"> 
                    </a> 
                </li><br><br>
            <li>
                    <a href="hostelroom.php">Hostel Room</a>
                </li>
                <li>
                    <a href="profile.php">Student Profile</a>
                </li>
               <li>
                  <a href="updatepro.php">Update Profile</a>
                </li>
                
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">



                        <?php   if($result==1){
    $rows=mysqli_fetch_assoc($query);
    $room=$rows["roomnumber"];

                         echo "<h2>YOUR ROOM NUMBER IS  ".$room."</h2>";

                     }
                     else{
                        echo "<h2>Register in Hostel Registration through ADMIN to get your roomnumber</h2>";
                     }

                        ?>

                                             
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->















 <script src="home.js"></script>

	  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>