<?php


$host="localhost";
$user="root";
$password="";

$conn=mysqli_connect($host,$user,$password);
$db=mysqli_select_db($conn,"hostel");

session_start();



$email=$_SESSION['mail'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>STUDENT PROFILE</title>
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="profile.css">
	
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

<?php

$sql="SELECT * from student where email='$email'" ;

  $query=mysqli_query($sql);
 while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){

?>   


<?php
 
 if($row['branch']=="CE"){
$sql="SELECT * from ce where email='$email'" ;

  $query=mysqli_query($conn,$sql);
   while($rows=mysqli_fetch_array($query)){
 
?>


    <h4>REGISTRATION NUMBER :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $rows['regno'] ; ?>  </h4>

    <?php }} ?>




<?php
 
 if($row['branch']=="CSE"){
$sql="SELECT * from cse where email='$email'" ;

  $query=mysqli_query($conn,$sql);
   while($rows=mysqli_fetch_array($query)){
 
?>


    <h4>REGISTRATION NUMBER :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $rows['regno'] ; ?>  </h4>

    <?php }} ?>





<?php
 
 if($row['branch']=="ECE"){
$sql="SELECT * from ece where email='$email'" ;

  $query=mysqli_query($conn,$sql);
   while($rows=mysqli_fetch_array($query)){
 
?>


    <h4>REGISTRATION NUMBER :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $rows['regno'] ; ?>  </h4>

    <?php }} ?>





<?php
 
 if($row['branch']=="ME"){
$sql="SELECT * from me where email='$email'" ;

  $query=mysqli_query($conn,$sql);
   while($rows=mysqli_fetch_array($query)){
 
?>


    <h4>REGISTRATION NUMBER :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $rows['regno'] ; ?>  </h4>

    <?php }} ?>




<?php
 
 if($row['branch']=="EE"){
$sql="SELECT * from ee where email='$email'" ;

  $query=mysqli_query($conn,$sql);
   while($rows=mysqli_fetch_array($query)){
 
?>


    <h4>REGISTRATION NUMBER :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $rows['regno'] ; ?>  </h4>

    <?php }} ?>




<?php
 
 if($row['branch']=="MME"){
$sql="SELECT * from mme where email='$email'" ;

  $query=mysqli_query($conn,$sql) ;
   while($rows=mysqli_fetch_array($query,MYSQLI_ASSOC)){
 
?>


    <h4>REGISTRATION NUMBER :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $rows['regno'] ; ?>  </h4>

    <?php }} ?>




<?php
 
 if($row['branch']=="PIE"){
$sql="SELECT * from pie where email='$email'" ;

  $query=mysqli_query($conn,$sql);
   while($rows=mysqli_fetch_array($query)){
 
?>


    <h4>REGISTRATION NUMBER :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $rows['regno'] ; ?>  </h4>

    <?php }} ?>

   
    <h4>ROOM NUMBER :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['roomnumber'] ; ?>  </h4>


    <h4>COURSE : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['course'] ; ?>  </h4>


    <h4>BRANCH : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['branch'] ; ?>  </h4>





<br><br>

    <h4>FIRST NAME : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['fname'] ; ?>  </h4>

    <h4>MIDDLE NAME : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['mname'] ; ?>  </h4>

    <h4>LAST NAME : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['lname'] ; ?>  </h4>

    <h4>GENDER : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['gender'] ; ?>  </h4>

    <h4>CONTACT NO : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['contact'] ; ?>  </h4>
 
    <h4>EMAIL ID : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['email'] ; ?>  </h4>

    <h4>EMERGENCY CONTACT : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['emergencycontact'] ; ?>  </h4>

    
     <h4>GUARDIAN NAME : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['guardianname'] ; ?>  </h4>


     <h4>GUARDIAN RELATION : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['guardianrelation'] ; ?>  </h4>


    <h4>GUARDIAN CONTACT : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['guardiancontact'] ; ?>  </h4>

<br><br>


  <h4>ADDRESS : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['address'] ; ?>  </h4>


  <h4>CITY : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['city'] ; ?>  </h4>


  <h4>STATE : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['state'] ; ?>  </h4>


  <h4>PINCODE : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['pincode'] ; ?>  </h4>








 <?php } ?>





 

























                                             
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