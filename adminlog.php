<?php


$host="localhost";
$user="root";
$password="";

$conn=mysqli_connect($host,$user,$password);
$db=mysqli_select_db($conn,"hostel");

session_start();

if (isset($_POST['email']))
{
  $uname=$_POST['email'];
  $password=$_POST['password'];


  $sql="select * from admin where email='".$uname."'AND password='".$password."' ";


  $query=mysqli_query($conn,$sql);

$rows = mysqli_num_rows($query);
  if($rows==1 ){
    $_SESSION['login']=$uname;
    header("location: admin.php");
     
    exit();
  }
  else{
    echo"<script>alert('You have entered incorrect password');</script>";
    
  }

}
?>




























<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN</title>
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="adminlog.css">
	
</head>
<body>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="userreg.php">User Registration</a>
                </li>
                <li>
                    <a href="userlog.php">User Login</a>
                </li>
                <li>
                    <a href="adminlog.php">Admin login</a>
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
          


    <form method="POST" style="margin-top: 175px; margin-left: 110px; margin-right: 200px; border: 1px solid grey; padding: 10px 10px 10px 10px;">
        <h2 style="margin-left: 70px;" >ADMIN LOGIN</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button name="submit" type="submit" class="btn btn-primary">LOGIN</button>
</form>

                                                
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