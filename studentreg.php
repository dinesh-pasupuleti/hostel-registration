<?php

$host="localhost";
$user="root";
$password="";

$conn=mysqli_connect($host,$user,$password);
$db=mysqli_select_db($conn,"hostel");

session_start();



if(isset($_POST['submit'])){
 

    

    
     $fname=$_POST['fname'];
     $mname=$_POST['mname'];
     $lname=$_POST['lname'];
     $gender=$_POST['gender'];
     $course=$_POST['course'];
     $branch=$_POST['branch'];
     $contact=$_POST['contact'];
     $email=$_POST['email'];
     $econtact=$_POST['econtact'];
     $gname=$_POST['gname'];
     $grelation=$_POST['grelation'];
     $gcontact=$_POST['gcontact'];
     $address=$_POST['address'];
     $city=$_POST['city'];
     $state=$_POST['state'];
     $pincode=$_POST['pincode'];
     $room="";

     



     $fname=mysqli_real_escape_string($conn,$fname);
     $mname=mysqli_real_escape_string($conn,$mname);
     $lname=mysqli_real_escape_string($conn,$lname);
     $gender=mysqli_real_escape_string($conn,$gender);
     $course=mysqli_real_escape_string($conn,$course);
     $branch=mysqli_real_escape_string($conn,$branch);
     $contact=mysqli_real_escape_string($conn,$contact);
     $email=mysqli_real_escape_string($conn,$email); 
     $econtact=mysqli_real_escape_string($conn,$econtact);
     $gname=mysqli_real_escape_string($conn,$gname);
     $grelation=mysqli_real_escape_string($conn,$grelation);
     $gcontact=mysqli_real_escape_string($conn,$gcontact);
     $address=mysqli_real_escape_string($conn,$address);
     $city=mysqli_real_escape_string($conn,$city);
     $state=mysqli_real_escape_string($conn,$state);
     $pincode=mysqli_real_escape_string($conn,$pincode);

$sql="SELECT * from user where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);
  if($result>0){
    

$sql="SELECT * from student where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);
  if($result>0){
    echo"<script>alert('Your Hostel Registration was already done !');</script>";
  }
    
    
else{
 $sqlreg = "INSERT INTO student(fname,mname,lname,gender,course,branch,contact,email,emergencycontact,guardianname,guardianrelation,guardiancontact,address,city,state,pincode,roomnumber)VALUES('$fname','$mname','$lname','$gender','$course','$branch','$contact','$email','$econtact','$gname','$grelation','$gcontact','$address','$city','$state','$pincode','$room')";

  if(mysqli_query($conn,$sqlreg)){
      echo"<script>alert('Registration Successful!!');</script>";
      
  }
  else{
    echo"<script>alert('User cannot be added to database');</script>" ;
  }  
  

  

if ($_POST['branch']=="CSE") {
 
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


    $roomno="A-".$i; 


$sqlreg=mysqli_query($conn,"SELECT * from student where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE student set roomnumber='$roomno' where email='$email' ");
 echo"<script>alert('Your roomnumber is generated!! ');</script>";
      
  }
  else{
    echo"<script>alert('Room number number not generated!!');</script>" ;
  }

}





elseif ($_POST['branch']=="ECE") {


  
 
$sql="SELECT ID from ece where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);
  if($result==1){
    $rows=mysqli_fetch_assoc($query);
    $id=$rows["ID"];

     if($id<10){
        $i="00".$id;
    }

    if($id>9 && id <100){
        $i="0".$id;
    }
    if($id>99){
        $i=$id;
    }

    $roomno="B-".$i;


$sqlreg=mysqli_query($conn,"SELECT * from student where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE student set roomnumber='$roomno' where email='$email' ");
 echo"<script>alert('Your roomnumber is generated!! ');</script>";
      
  }
  else{
    echo"<script>alert('Room number number not generated!!');</script>" ;
  }
}
}





elseif ($_POST['branch']=="ME") {


  
 
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

    $roomno="C-".$i;


$sqlreg=mysqli_query($conn,"SELECT * from student where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE student set roomnumber='$roomno' where email='$email' ");
 echo"<script>alert('Your roomnumber is generated!! ');</script>";
      
  }
  else{
    echo"<script>alert('Room number number not generated!!');</script>" ;
  }

}



elseif ($_POST['branch']=="EE") {


  
 
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

    $roomno="D-".$i;


$sqlreg=mysqli_query($conn,"SELECT * from student where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE student set roomnumber='$roomno' where email='$email' ");
 echo"<script>alert('Your roomnumber is generated!! ');</script>";
      
  }
  else{
    echo"<script>alert('Room number number not generated!!');</script>" ;
  }

}



elseif ($_POST['branch']=="CE") {


  
 
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

    $roomno="E-".$i;


$sqlreg=mysqli_query($conn,"SELECT * from student where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE student set roomnumber='$roomno' where email='$email' ");
 echo"<script>alert('Your roomnumber is generated!! ');</script>";
      
  }
  else{
    echo"<script>alert('Room number number not generated!!');</script>" ;
  }

}



elseif ($_POST['branch']=="MME") {


  
 
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

    $roomno="F-".$i;


$sqlreg=mysqli_query($conn,"SELECT * from student where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE student set roomnumber='$roomno' where email='$email' ");
 echo"<script>alert('Your roomnumber is generated!! ');</script>";
      
  }
  else{
    echo"<script>alert('Room number number not generated!!');</script>" ;
  }

}





elseif ($_POST['branch']=="PIE") { 
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

    $roomno="G-".$i;


$sqlreg=mysqli_query($conn,"SELECT * from student where email='$email' ");
$num=mysqli_fetch_array($sqlreg);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE student set roomnumber='$roomno' where email='$email' ");
 echo"<script>alert('Your roomnumber is generated!! ');</script>";
      
  }
  else{
    echo"<script>alert('Room number number not generated!!');</script>" ;
  }

}


}
}


   else
    {
      echo"<script>alert('Your have to first register in user registration !');</script>";
    }
    
}







?>








<!DOCTYPE html>
<html>
<head>
    <title>HOSTEL REGISTRATION</title>
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
<button style="margin-left: 1300px; " type="button" class="btn btn-light"><a href="adminlog.php">Logout</a></button>


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
                                                  
               
  

            <form method="POST" >
  <div class="form-group">
    <label for="exampleFormControlInput1">First Name :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required="" name="fname" >
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Middle Name :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required="" name="mname" >
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Last Name :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required="" name="lname" >
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">Gender :</label>
    <select class="form-control" id="exampleFormControlSelect1" required="" name="gender" >
      <option value="" >Select Gender</option>
      <option value="Male" >Male</option>
        <option value="Female" >Female</option>
         <option value="Other" >Other</option>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Course :</label>
    <select class="form-control" id="exampleFormControlSelect1" required="" name="course" >
      <option value="" >Select Course</option>
      <option value="B.Tech" >B.Tech</option>
     
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Branch :</label>
    <select class="form-control" id="exampleFormControlSelect1" required="" name="branch" >
        <option value="" >Select Branch</option>
      <option value="CSE" >CSE</option>
      <option value="ECE" >ECE</option>
      <option value="ME" >ME</option>
      <option value="EE" >EE</option>
      <option value="CE" >CE</option>
      <option value="MME" >MME</option>
      <option value="PIE" >PIE</option>
    </select>
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Contact Number :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required="" name="contact" >
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Email address :</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required="" name="email" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Emergency Contact :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required="" name="econtact" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Guardian Name :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required="" name="gname" >
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Guardian Relation :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required="" name="grelation" >
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Guardian Contact No :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required="" name="gcontact" >
  </div>
<h4>Permanent Address</h4> 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Address :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="" name="address"  ></textarea>
  </div>
 <div class="form-group">
    <label for="exampleFormControlInput1">City :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required="" name="city" >
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">State :</label>
<select name="state" id="state" class="form-control" name="state" >
    <option value="" >Select State</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
</div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Pincode :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required="" name="pincode" >



   <br> 
   <button type="submit" class="btn btn-primary" name="submit" >Register</button> <br> <br> <br>
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