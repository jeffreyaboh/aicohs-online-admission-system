<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","","oas");
if(!isset($con))
{
    die("Database Not Found");
}

  
  
if(isset($_REQUEST["a_sub"]))
{
    
 $aid=$_POST['a_id'];
 $apwd=$_POST['a_ps'];
 if($aid!=''&&$apwd!='')
 {
   $query=mysqli_query($con ,"select * from t_admin where ad_id='".$aid."' and ad_pswd='".$apwd."'");
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['ad']=$aid;
    header('location:admin.php');
   }
   else
   {
     echo '<script>';
    echo 'alert("Invalid Login ! Please try again.")';
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
        <script language="javascript" type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
        <script language="javascript" type="text/javascript" src="jquery/jquery-ui.js"></script>
        <link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css" />

        <title></title>
        
        
        
    </head>
    <body style="background-image:url('./images/inbg.jpg');">
                <form id="adminlogin" action="adminlogin.php" method="post">
            
                    
                                
                           
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                  <br>
                     <center> <img src="images/logog.png" width="10%" /></center>
                  </div>
                 </div>    
             </div>  
        

             <div  id="divtop">
         <center>  <h2>A.I.C.O.H.S Administrator Login</h2></center>
            
                <div  id="dmain">
                    <br>
                           <div class="container-fluid">    
                                    <div class="row">
                                     <div class="col-sm-12">
                                     <center><img src="./images/admin.png" width="70px" height="60px" ></center>
                                     <br>
                                           <input type="text" id="a_id" name="a_id" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Admin ID"><br><br>
                                            <input type="password" id="a_ps" name="a_ps" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Password"><br><br>
                                            <input type="submit" id="a_sub" name="a_sub" value="Login" class="toggle btn btn-primary" style="width:100px; margin-left: 160px;"><br>
                                      </div>
                                       
                                       
                                     </div>
                           </div>
                             
                              
                            </div>
                        <br>
                        <br>
                    
                            <center><p>©2019, Adewale Ibrahim College of Health Sciences. Design and Developed with ♥ by <a href="https://jeffrey.myethion.com" target="_blank">ETHION</a></p></center>
        </form>  

    </body>
</html>




























