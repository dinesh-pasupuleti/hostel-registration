<?php
session_start();
if($_SESSION['login'])
{

?>




<?php
$host="localhost";
$user="root";
$password="";

$conn=mysqli_connect($host,$user,$password);
$db=mysqli_select_db($conn,"hostel");


if(isset($_POST['submit']))
{
    if ($_POST['newpassword']==$_POST['cpass']) {
        
    
 
 $email=$_SESSION['login'];   
 $oldpass=$_POST['oldpassword'];
 $newpassword=$_POST['newpassword'];

 
$sql=mysqli_query($conn,"SELECT password FROM admin where password='$oldpass' && email='$email' ");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE admin set password='$newpassword' where email='$email' ");
echo"<script>alert('password updated');</script>";
}
else
{
    echo"<script>alert('old password is not correct');</script>";
}
}
else{
    echo"<script>alert('password didnot match');</script>";

}
}

?>

















<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="admin.css">
	
</head>
<body>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<br>
<button style="margin-left: 1300px; " type="button" class="btn btn-light"><a href="adminlog.php">Logout</a></button>



<div style="margin-left: 380px; margin-right: 800px;" >
         <h3>ADMIN PROFILE</h3>
         <ul  class="list-group">
  <li  class="list-group-item">Username :  admin</li> 
  &nbsp &nbsp <small id="emailHelp" class="form-text text-muted">Username cannot be changed.</small><br><br>
  <li  class="list-group-item">Email  :   <?php echo $_SESSION['login'];?></li>
  </ul>

</div> 

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
                    <a href="courses.php">Courses</a>
                </li>
                <li>
                    <a href="studentreg.php">Hostel Registration</a>
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
                                                 

             
           
           

<form style="margin-left: 50px; border: 1px solid white; width:250px;padding-left: 10px;padding-bottom: 10px;padding-right: 10px;" method="POST">
  <h3>Password Updation</h3>
  
  <div class="form-group">
    <label  for="exampleInputPassword1">Old Password</label>
    <input name="oldpassword" type="password" class="form-control" id="exampleInputPassword1" required="">
    <label for="exampleInputPassword1">New Password</label>
    <input name="newpassword" type="password" class="form-control" id="exampleInputPassword1" required="">
    <label for="exampleInputPassword1">Confirm New Password</label>
    <input name="cpass" type="password" class="form-control" id="exampleInputPassword1" required="">
  </div>
 
  <button name="submit" type="submit" class="btn btn-primary">Update</button>
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

<?php
} else{
header('location:adminlog.php');
}
?>