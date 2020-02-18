<?php
    error_reporting(0);

$con=mysqli_connect("localhost","root","","oas");
if(!isset($con))
{
    die("Database Not Found");
}

if(isset($_REQUEST["vfrm"]))
{
    header('location:viewdoc.php?id=".$getid."');
}

$getid= $_GET["id"];
       
$data = mysqli_query($con,"SELECT * FROM t_userdoc ") or
die(mysqli_error());

$picfile_path ='studentpic/';

$docfile_path ='studentdoc/';

$prooffile_path ='studentproof/';


?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
         <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
    </head>
     <body style="background-image:url('./images/inbg.jpg');">
        <form id="vidoc" action="viewdoc.php" method="post">
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                  <br>
                     <center> <img src="images/logog.png" class="center" width="10%"/></center>
                     <br>
                  </div>
                 </div>    
             </div><br>
             <div class="container-fluid" id="dmid">    
            <div class="row">
                    <div class="col-sm-12">
                        <center><font style="color:white; margin-left:0px; font-family: Verdana; width:100%; font-size:30px;">
                        <b>ADEWALE IBRAHIM COLLEGE OF HEALTH SCIENCES</b> </font></center>
                      </div>
                 </div>
             </div>
             
         
             <div  class="container-fluid">  
                
                 <div class="row">
                    <div class="col-sm-12" style="height:933px;box-shadow: 1px 5px 14px #999999;">
                    <center><h3>Student Documents</h3></center>
                      <?php
                    
                    $result1 = mysqli_query($con,"SELECT * FROM t_userdoc where s_id='$getid'");
                        
                    echo '<table class="table table-hover">';
                    echo '<tbody>';
                    while($row = mysqli_fetch_array($result1))
                      {
                        echo '<tr><td colspan=2><center><h4><i>Documents</i></h4></center></td><tr>';                        
                        
                        $picsrc=$picfile_path.$row['s_pic'];
                        echo '<tr><td>Passport Size Image :</td>';
                        echo "<td><img src='$picsrc.' width='150px' height='150px'></td></tr>";
                        
                        $docsrc1=$docfile_path.$row['s_tenmarkpic'];
                        echo '<tr><td>O Level Result (WAEC NECO or NABTEB) :</td>';
                        echo "<td><a href='$docsrc1.' width='300px' height='300px'> View </a></td></tr>";
                        
                        $docsrc2=$docfile_path.$row['s_tencerpic'];
                        echo '<tr><td>JAMB Result Slip :</td>';
                        echo "<td><a href='$docsrc2.' width='300px' height='300px'> View </a></td></tr>";
                        
                        
                        $docsrc3=$docfile_path.$row['s_twdmarkpic'];
                        echo '<tr><td>Higher Institution Certificate (If Any) :</td>';
                        echo "<td><a href='$docsrc3.' width='300px' height='300px'> View </a></td></tr>";
                        
                        $docsrc4=$docfile_path.$row['s_twdcerpic'];
                        echo '<tr><td>Application Fee Bank Receipt (If Paid Directly to Bank) :</td>';
                        echo "<td><a href='$docsrc4.' width='300px' height='300px'> View </a></td></tr>";
                        
                        $proofsrc1=$prooffile_path.$row['s_idprfpic'];
                        echo '<tr><td>O Level Result (WAEC NECO or NABTEB) 2nd Sitting :</td>';
                        echo "<td><a href='$proofsrc1.' width='300px' height='300px'> View </a></td></tr>";
                        
                        
                      
                      }
                      
                    echo '</tbody>';
                    echo '</table>';
                ?>
                
                                  
                         
                        </div>
                    </div>
                 </div>
                 <br><br><br>
            <center><p>©2019, Adewale Ibrahim College of Health Sciences. Design and Developed with ♥ by <a href="https://jeffrey.myethion.com" target="_blank">ETHION</a></p></center>
                   <br>         
            <br>
             
                  </form>
                 
            </body>
</html>
