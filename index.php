<?php
session_start();

$con=mysqli_connect("localhost","root","","oas");
if(!isset($con))
{
    die("Database Not Found");
}


if(isset($_REQUEST["u_sub"]))
{
    
 $id=$_POST['u_id'];
 $pwd=$_POST['u_ps'];
 if($id!=''&&$pwd!='')
 {
   $query=mysqli_query($con ,"select * from t_user_data where s_id='".$id."' and s_pwd='".$pwd."'");
   $res=mysqli_fetch_row($query);
   $query1=mysqli_query($con ,"select * from t_user where s_id='".$id."'");
   $res1=mysqli_fetch_row($query1);

   if($res)
   {
    $_SESSION['user']=$id;
    header('location:admsnform.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
   
   if($res1)
   {
    $_SESSION['user']=$id;
    header('location:homepageuser.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
  }
 else
 {
     echo '<script>';
    echo 'alert("Enter both username and password")';
    echo '</script>';
 
 }
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="css/login.css"></link>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>

       
        <title></title>
        
        
        
    </head>
    <body  style="background-image:url('./images/inbg.jpg');" >
        <form id="index" action="index.php" method="post">
            
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                  <br>
                       <center> <img src="images/logog.png" width="10%"/></center>
                  </div>
                 </div>    
            
            
                <div  id="divtop">
                 <center><h2>A.I.C.O.H.S Online Application Portal</h2></center>
                            <div id="dmain"  > 
                               <center><img src="./images/user.jpg" width="90px" height="80px" ></center>
                                    <input type="text" id="u_id" name="u_id" class="form-control" style="width:300px; margin-left: 70px;" placeholder="Enter Your User ID"><br>
                                    <input type="password" id="u_ps" name="u_ps" class="form-control" style="width:300px; margin-left: 70px;" placeholder="Enter Your Password"><br>
                                    <input type="submit" id="u_sub" name="u_sub" value="Login" class="toggle btn btn-primary" style="width:100px; margin-left: 170px;"><br>
                                   <p><center> <p>Don't have an account? <a href="signup.php">Sign Up </a></p></center></p>
                                   <p><center> <p>Forgot User ID or Password? <a href="mailto:info@aicohs.com.ng?Subject=Forgot%20User%20ID%20&%20Password">Contact Us</a></p></center></p>
                             </div>
                             <br>
                             <br>
                             <center><p>©2019, Adewale Ibrahim College of Health Sciences. Design and Developed with ♥ by <a href="https://jeffrey.myethion.com" target="_blank">ETHION</a></p></center>
                     </div>
                     
                    </div>
                    
               </div>
            </div>  
            </div>
        </form>  
       </body>
</html>
