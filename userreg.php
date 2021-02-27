 <?php

$host="localhost";
$user="root";
$password="";

$conn=mysqli_connect($host,$user,$password);
$db=mysqli_select_db($conn,"hostel");

session_start();



if(isset($_POST['submit'])){
  if($_POST['pass']==$_POST['repass']){

    

     
     $fname=$_POST['fname'];
     $mname=$_POST['mname'];
     $lname=$_POST['lname'];
     $gender=$_POST['gender'];
     $contact=$_POST['contact'];
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $branch=$_POST['branch'];

     


    
     $fname=mysqli_real_escape_string($conn,$fname);
     $mname=mysqli_real_escape_string($conn,$mname);
     $lname=mysqli_real_escape_string($conn,$lname);
     $gender=mysqli_real_escape_string($conn,$gender);
     $contact=mysqli_real_escape_string($conn,$contact);
     $email=mysqli_real_escape_string($conn,$email); 
     $pass=mysqli_real_escape_string($conn,$pass);
     $branch=mysqli_real_escape_string($conn,$branch);


$sql="SELECT * from user where email='$email'" ;

  $query=mysqli_query($conn,$sql);
  $result = mysqli_num_rows($query);
  if($result>0){
    echo"<script>alert('Your User Registration was already done !');</script>";
  }
  else{

 $sqlreg = "INSERT INTO user(fname,mname,lname,gender,contact,email,password,branch)VALUES('$fname','$mname','$lname','$gender','$contact','$email','$pass','$branch')";

  if(mysqli_query($conn,$sqlreg)){
      echo"<script>alert('Registration Successful!!');</script>";
      
  }
  else{
    echo"<script>alert('User cannot be added to database');</script>" ;
  }  
 







  if($_POST['branch']=="CSE"){

    

     $regno="";
     $fname=$_POST['fname'];
     $mname=$_POST['mname'];
     $lname=$_POST['lname'];
     $gender=$_POST['gender'];
     $contact=$_POST['contact'];
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $branch=$_POST['branch'];

     



     $regno=mysqli_real_escape_string($conn,$regno);
     $fname=mysqli_real_escape_string($conn,$fname);
     $mname=mysqli_real_escape_string($conn,$mname);
     $lname=mysqli_real_escape_string($conn,$lname);
     $gender=mysqli_real_escape_string($conn,$gender);
     $contact=mysqli_real_escape_string($conn,$contact);
     $email=mysqli_real_escape_string($conn,$email); 
     $pass=mysqli_real_escape_string($conn,$pass);
     $branch=mysqli_real_escape_string($conn,$branch);

 $sqlreg = "INSERT INTO cse(regno,fname,mname,lname,gender,contact,email,password,branch)VALUES('$regno','$fname','$mname','$lname','$gender','$contact','$email','$pass','$branch')";

  if(mysqli_query($conn,$sqlreg)){
      
  }
}  


 elseif($_POST['branch']=="ECE"){

    

     $regno="";
     $fname=$_POST['fname'];
     $mname=$_POST['mname'];
     $lname=$_POST['lname'];
     $gender=$_POST['gender'];
     $contact=$_POST['contact'];
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $branch=$_POST['branch'];

     



     $regno=mysqli_real_escape_string($conn,$regno);
     $fname=mysqli_real_escape_string($conn,$fname);
     $mname=mysqli_real_escape_string($conn,$mname);
     $lname=mysqli_real_escape_string($conn,$lname);
     $gender=mysqli_real_escape_string($conn,$gender);
     $contact=mysqli_real_escape_string($conn,$contact);
     $email=mysqli_real_escape_string($conn,$email); 
     $pass=mysqli_real_escape_string($conn,$pass);
     $branch=mysqli_real_escape_string($conn,$branch);

 $sqlreg = "INSERT INTO ece(regno,fname,mname,lname,gender,contact,email,password,branch)VALUES('$regno','$fname','$mname','$lname','$gender','$contact','$email','$pass','$branch')";

  if(mysqli_query($conn,$sqlreg)){
      
  }
}  


 elseif($_POST['branch']=="ME"){

    

     $regno="";
     $fname=$_POST['fname'];
     $mname=$_POST['mname'];
     $lname=$_POST['lname'];
     $gender=$_POST['gender'];
     $contact=$_POST['contact'];
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $branch=$_POST['branch'];

     



     $regno=mysqli_real_escape_string($conn,$regno);
     $fname=mysqli_real_escape_string($conn,$fname);
     $mname=mysqli_real_escape_string($conn,$mname);
     $lname=mysqli_real_escape_string($conn,$lname);
     $gender=mysqli_real_escape_string($conn,$gender);
     $contact=mysqli_real_escape_string($conn,$contact);
     $email=mysqli_real_escape_string($conn,$email); 
     $pass=mysqli_real_escape_string($conn,$pass);
     $branch=mysqli_real_escape_string($conn,$branch);

 $sqlreg = "INSERT INTO me(regno,fname,mname,lname,gender,contact,email,password,branch)VALUES('$regno','$fname','$mname','$lname','$gender','$contact','$email','$pass','$branch')";

  if(mysqli_query($conn,$sqlreg)){
      
  }
}  

elseif($_POST['branch']=="EE"){

    

     $regno="";
     $fname=$_POST['fname'];
     $mname=$_POST['mname'];
     $lname=$_POST['lname'];
     $gender=$_POST['gender'];
     $contact=$_POST['contact'];
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $branch=$_POST['branch'];

     



     $regno=mysqli_real_escape_string($conn,$regno);
     $fname=mysqli_real_escape_string($conn,$fname);
     $mname=mysqli_real_escape_string($conn,$mname);
     $lname=mysqli_real_escape_string($conn,$lname);
     $gender=mysqli_real_escape_string($conn,$gender);
     $contact=mysqli_real_escape_string($conn,$contact);
     $email=mysqli_real_escape_string($conn,$email); 
     $pass=mysqli_real_escape_string($conn,$pass);
     $branch=mysqli_real_escape_string($conn,$branch);

 $sqlreg = "INSERT INTO ee(regno,fname,mname,lname,gender,contact,email,password,branch)VALUES('$regno','$fname','$mname','$lname','$gender','$contact','$email','$pass','$branch')";

  if(mysqli_query($conn,$sqlreg)){
      
  }
}  


 elseif($_POST['branch']=="CE"){

    

     $regno="";
     $fname=$_POST['fname'];
     $mname=$_POST['mname'];
     $lname=$_POST['lname'];
     $gender=$_POST['gender'];
     $contact=$_POST['contact'];
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $branch=$_POST['branch'];

     



     $regno=mysqli_real_escape_string($conn,$regno);
     $fname=mysqli_real_escape_string($conn,$fname);
     $mname=mysqli_real_escape_string($conn,$mname);
     $lname=mysqli_real_escape_string($conn,$lname);
     $gender=mysqli_real_escape_string($conn,$gender);
     $contact=mysqli_real_escape_string($conn,$contact);
     $email=mysqli_real_escape_string($conn,$email); 
     $pass=mysqli_real_escape_string($conn,$pass);
     $branch=mysqli_real_escape_string($conn,$branch);

 $sqlreg = "INSERT INTO ce(regno,fname,mname,lname,gender,contact,email,password,branch)VALUES('$regno','$fname','$mname','$lname','$gender','$contact','$email','$pass','$branch')";

  if(mysqli_query($conn,$sqlreg)){
      
  }
}  


 elseif($_POST['branch']=="MME"){

    

     $regno="";
     $fname=$_POST['fname'];
     $mname=$_POST['mname'];
     $lname=$_POST['lname'];
     $gender=$_POST['gender'];
     $contact=$_POST['contact'];
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $branch=$_POST['branch'];

     



     $regno=mysqli_real_escape_string($conn,$regno);
     $fname=mysqli_real_escape_string($conn,$fname);
     $mname=mysqli_real_escape_string($conn,$mname);
     $lname=mysqli_real_escape_string($conn,$lname);
     $gender=mysqli_real_escape_string($conn,$gender);
     $contact=mysqli_real_escape_string($conn,$contact);
     $email=mysqli_real_escape_string($conn,$email); 
     $pass=mysqli_real_escape_string($conn,$pass);
     $branch=mysqli_real_escape_string($conn,$branch);

 $sqlreg = "INSERT INTO mme(regno,fname,mname,lname,gender,contact,email,password,branch)VALUES('$regno','$fname','$mname','$lname','$gender','$contact','$email','$pass','$branch')";

  if(mysqli_query($conn,$sqlreg)){
      
  }
} 

 elseif($_POST['branch']=="PIE"){

    

     $regno="";
     $fname=$_POST['fname'];
     $mname=$_POST['mname'];
     $lname=$_POST['lname'];
     $gender=$_POST['gender'];
     $contact=$_POST['contact'];
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $branch=$_POST['branch'];

     



     $regno=mysqli_real_escape_string($conn,$regno);
     $fname=mysqli_real_escape_string($conn,$fname);
     $mname=mysqli_real_escape_string($conn,$mname);
     $lname=mysqli_real_escape_string($conn,$lname);
     $gender=mysqli_real_escape_string($conn,$gender);
     $contact=mysqli_real_escape_string($conn,$contact);
     $email=mysqli_real_escape_string($conn,$email); 
     $pass=mysqli_real_escape_string($conn,$pass);
     $branch=mysqli_real_escape_string($conn,$branch);

 $sqlreg = "INSERT INTO pie(regno,fname,mname,lname,gender,contact,email,password,branch)VALUES('$regno','$fname','$mname','$lname','$gender','$contact','$email','$pass','$branch')";

  if(mysqli_query($conn,$sqlreg)){
      
  }
}  
}
 
}


  else{
    
     echo"<script>alert('password didnot match');</script>" ;
  }
}




?>



























<!DOCTYPE html>
<html>
<head>
	<title>USER REGISTRATION</title>
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="userreg.css">
	
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
                    	
                                                
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->




<form method="POST" >
    
    <div>
        <label class="fadf"  style="margin-left: 600px;">First Name :</label>
        <input class="box" style="margin-left: 130px;" type="text" name="fname" required="">
    </div><br>
    <div>
        <label class="fadf" style="margin-left: 600px;">Middle Name :</label>
        <input class="box" style="margin-left: 117px;" type="text" name="mname" required="">
    </div><br>
    <div>
        <label class="fadf" style="margin-left: 600px;">Last Name :</label>
        <input  class="box"style="margin-left: 130px;" type="text" name="lname" required="">
    </div><br>
    <div>
        <label class="fadf" style="margin-left: 600px;">Gender :</label>
        <select style="margin-left: 150px;" class="box" name="gender"  required="required">
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
    </div><br>
    <div>
        <label class="fadf" style="margin-left: 600px;">Contact No :</label>
        <input style="margin-left: 126px;" class="box"  type="text" name="contact" required="">
    </div><br>
    <div>
        <label class="fadf" style="margin-left: 600px;">Email ID :</label>
        <input style="margin-left: 145px;" class="box" type="email" name="email" required="">
    </div><br>
    <div>
        <label class="fadf" style="margin-left: 600px;">Password :</label>
        <input style="margin-left: 131px;" class="box" type="password" name="pass" required="">
    </div><br>
    <div>
        <label class="fadf" style="margin-left: 600px;">Confirm Password :</label>
        <input style="margin-left: 74px;" class="box" type="password" name="repass" required="">
    </div><br>
     
    <div>
        <label class="fadf" style="margin-left: 600px;">Branch :</label>
        <select style="margin-left: 150px;" class="box" name="branch"  required="required">
<option value="">Select Branch</option>
<option value="CSE">CSE</option>
<option value="ECE">ECE</option>
<option value="ME">ME</option>
<option value="EE">EE</option>
<option value="CE">CE</option>
<option value="MME">MME</option>
<option value="PIE">PIE</option>
</select>
    </div><br>
  
  <button  style="margin-left: 600px;" type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


















 

 <script src="userreg.js"></script>

	  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>