<?php


$host="localhost";
$user="root";
$password="";

$conn=mysqli_connect($host,$user,$password);
$db=mysqli_select_db($conn,"hostel");

session_start();

$email=$_SESSION['mail'];

$sql="SELECT branch from user where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);
  if($result==1){
    $rows=mysqli_fetch_assoc($query);
    $branch=$rows["branch"];
    }


  if($branch=="CSE"){
        $b="CS";


$sql="SELECT ID from cse where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);
  if($result==1){
    $rows=mysqli_fetch_assoc($query);
    $id=$rows["ID"];
    }

     if($id<10){
        $i="00".$id;
    }

    if($id>9 && id <100){
        $i='0'.$id;
    }
    if($id>99){
        $i=$id;
    }

    $regno="2020UG".$b.$i;
   
$sqlreg=mysqli_query($conn,"SELECT * from cse where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE cse set regno='$regno' where email='$email' ");
 echo"<script>alert('Registration number generated!!');</script>";
      
  }
  else{
    echo"<script>alert('Registration number not generated!!');</script>" ;
  }
    


 }


    if($branch=="ECE"){
        $b="EC";



$sql="SELECT ID from ece where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);
  if($result==1){
    $rows=mysqli_fetch_assoc($query);
    $id=$rows["ID"];
    }

     if($id<10){
        $i="00".$id;
    }

    if($id>9 && id <100){
        $i='0'.$id;
    }
    if($id>99){
        $i=$id;
    }

    $regno="2020UG".$b.$i;
   
$sqlreg=mysqli_query($conn,"SELECT * from ece where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE ece set regno='$regno' where email='$email' ");
 echo"<script>alert('Registration number generated!!');</script>";
      
  }
  else{
    echo"<script>alert('Registration number not generated!!');</script>" ;
  }
    }
  




    if($branch=="ME"){
        $b="ME";


$sql="SELECT ID from me where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);
  if($result==1){
    $rows=mysqli_fetch_assoc($query);
    $id=$rows["ID"];
    }

     if($id<10){
        $i="00".$id;
    }

    if($id>9 && id <100){
        $i='0'.$id;
    }
    if($id>99){
        $i=$id;
    }

    $regno="2020UG".$b.$i;
   
$sqlreg=mysqli_query($conn,"SELECT * from me where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE me set regno='$regno' where email='$email' ");
 echo"<script>alert('Registration number generated!!');</script>";
      
  }
  else{
    echo"<script>alert('Registration number not generated!!');</script>" ;
  }

    }
  





    if($branch=="EE"){
        $b="EE";


$sql="SELECT ID from ee where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);
  if($result==1){
    $rows=mysqli_fetch_assoc($query);
    $id=$rows["ID"];
    }

     if($id<10){
        $i="00".$id;
    }

    if($id>9 && id <100){
        $i='0'.$id;
    }
    if($id>99){
        $i=$id;
    }

    $regno="2020UG".$b.$i;
   
$sqlreg=mysqli_query($conn,"SELECT * from ee where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE ee set regno='$regno' where email='$email' ");
 echo"<script>alert('Registration number generated!!');</script>";
      
  }
  else{
    echo"<script>alert('Registration number not generated!!');</script>" ;
  }

    
    }




    if($branch=="CE"){
        $b="CE";


$sql="SELECT ID from ce where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);
  if($result==1){
    $rows=mysqli_fetch_assoc($query);
    $id=$rows["ID"];
    }

     if($id<10){
        $i="00".$id;
    }

    if($id>9 && id <100){
        $i='0'.$id;
    }
    if($id>99){
        $i=$id;
    }

    $regno="2020UG".$b.$i;
   
$sqlreg=mysqli_query($conn,"SELECT * from ce where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE ce set regno='$regno' where email='$email' ");
 echo"<script>alert('Registration number generated!!');</script>";
      
  }
  else{
    echo"<script>alert('Registration number not generated!!');</script>" ;
  }
    }
  



    if($branch=="MME"){
        $b="MM";


$sql="SELECT ID from mme where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);
  if($result==1){
    $rows=mysqli_fetch_assoc($query);
    $id=$rows["ID"];
    }

     if($id<10){
        $i="00".$id;
    }

    if($id>9 && id <100){
        $i='0'.$id;
    }
    if($id>99){
        $i=$id;
    }

    $regno="2020UG".$b.$i;
   
$sqlreg=mysqli_query($conn,"SELECT * from mme where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE mme set regno='$regno' where email='$email' ");
 echo"<script>alert('Registration number generated!!');</script>";
      
  }
  else{
    echo"<script>alert('Registration number not generated!!');</script>" ;
  }

    
    }
   



    if($branch=="PIE"){
        $b="PI";


$sql="SELECT ID from pie where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);
  if($result==1){
    $rows=mysqli_fetch_assoc($query);
    $id=$rows["ID"];
    }

     if($id<10){
        $i="00".$id;
    }

    if($id>9 && id <100){
        $i='0'.$id;
    }
    if($id>99){
        $i=$id;
    }

    $regno="2020UG".$b.$i;
   
$sqlreg=mysqli_query($conn,"SELECT * from pie where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE pie set regno='$regno' where email='$email' ");
 echo"<script>alert('Registration number generated!!');</script>";
      
  }
  else{
    echo"<script>alert('Registration number not generated!!');</script>" ;
  }
  
    }






?>








<!DOCTYPE html>
<html>
<head>
	<title>USER </title>
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="home.css">
	
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

                        <h3>Your Registration Number </h3>


                       &nbsp &nbsp &nbsp <?php echo $regno;   ?>
                                                  


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