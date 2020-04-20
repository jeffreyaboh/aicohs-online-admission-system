<?php
    error_reporting(0);
$getid= $_GET["id"];
$con=mysqli_connect("localhost","root","","oas");
if(!isset($con))
{
    die("Database Not Found");
}






$q=mysqli_query($con,"select s_name from t_user_data where s_id='$getid'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['s_name'];
$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM t_user WHERE s_id='$getid'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
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

        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>




    </head>
     <body style="background-image:url('./images/');">
        <form id="viform" action="viewform.php" method="post">
         
        <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table table-bordered" style="font-family: Verdana">
                
                <tr>
                 <td style="width:3%;"><BR><center><img src="./images/logog.png" width="80%"> </center></td>
                 <td style="width:8%;"><center><font style="font-family:Arial Black; font-size:20px;">
                     <br>
                   <H3><B>ADEWALE IBRAHIM COLLEGE OF HEALTH SCIENCES, BUARI, KWARA STATE.</B></H3></font></center>
                
                <center><font style="font-family:Verdana; font-size:18px;">
                    <B>Phone: +234 80 353 87285, +234 80 380 23957</B>
                    </font></center>
                <br>
                <br>
                <br>
                <center><font style="font-family:Arial Black; font-size:20px;">
                   <B> ADMISSION SLIP</B></font></center>
                </td>
                    <td colspan="2" width="3%" >
                    <br>
                   <center> <p>Passport Photo</p></center>
                   <?php
                  
                    $picfile_path ='studentpic/';
                    
                    $result1 = mysqli_query($con,"SELECT * FROM t_userdoc where s_id='".$_SESSION['user']."'");
                        
                    while($row1 = mysqli_fetch_array($result1))
                      {                  
                        $picsrc=$picfile_path.$row1['s_pic'];
                        
                        echo "Attach<img src='$picsrc.' class='img-thumbnail' width='180px' style='height:180px;'>";
                        echo"<div>";
                      }
                      
                    
                      
                      
                        $resdata = mysqli_query($con,"SELECT * FROM t_user_data WHERE s_id='".$_SESSION['user']."'");
                    
                    while($rowdata = mysqli_fetch_array($resdata))
                      {
                        
                    
                   ?>
                        </td>
                 </tr>       
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Name: </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $stname;?> </td>
                 </tr>
                 
                 
                <tr>
                    <td> <font style="font-family: Verdana;">ID: </font> </td>
                    <td colspan="3"> <?php echo $id ?> </td>
                </tr>
                  
                
                <tr>
                    <td> <font style="font-family: Verdana;">Date of Birth: </font> </td>
                    <td colspan="3"> <?php echo $rowdata[2] ?> </td>
                </tr>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Email: </font> </td>
                      <td colspan="3"> <?php echo $rowdata[4]  ?> </td>
                </tr>
                  <?php
                      }
                      ?>
                
                
                  <tr>
                    <td > <font style="font-family: Verdana;"> Mobile: </font>  </td>
                    <td colspan="3"> <?php echo ' '. $row[2]. '   ' ?></td>
                   
                  </tr>
                
                  <tr>
                    <td> <font style="font-family: Verdana;">Sex: </font>
                    <td colspan="3"><?php echo $row[11] ?></td>       
                    
                </tr>


                <tr>
                    <td><font style="font-family: Verdana;">Marital Status: </font></td>
                    <td><?php echo $row[26] ?></td>
                    <td><font style="font-family: Verdana;">Religion: </font></td>
                    <td><?php echo $row[27] ?></td>
               </tr>  

               <tr>
                    <td><font style="font-family: Verdana;">Residential Address: </font>
                    <td colspan="3"><?php echo 'Address: '. $row[12] ?><br>
                          <?php echo 'State: '. $row[13] ?><br>
                          <?php echo 'Postal Code: '. $row[14] ?><br>
                </td>


                <tr>
                    <td><font style="font-family: Verdana;">Nationality: </font>
                    <td> <?php echo $row[21] ?></td>
                    <td><font style="font-family: Verdana;">State of Origin: </font>
                    <td> <?php echo $row[22] ?></td>
                </tr>    

                  <tr>
                    <td><font style="font-family: Verdana;">LGA: </font></td>
                    <td  colspan="3"><?php echo $row[4] ?> </td>
                   </tr>
                 
                  <tr>
                    <td> <font style="font-family: Verdana;">Guardian/Parent Name: </font></td>
                    <td> <?php echo $row[5] ?></td>
                    <td><font style="font-family: Verdana;">Guardian/Parent Number: </font></td>
                    <td> <?php echo $row[6] ?> </td>
                  </tr>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Guardian/Parent Email: </font> </td>
                    <td colspan="3"> <?php echo $row[7] ?></td>
                </tr>
                

                <tr>
                    <td> <font style="font-family: Verdana;">Guardian/Parent Address: </font>
                    <td colspan="3"><?php echo 'Address: '. $row[16] ?><br>
                          <?php echo 'State: '. $row[17] ?><br>
                          <?php echo 'Postal Code: '. $row[18] ?><br>
                </td>
                </tr>   

                <tr>
                     <td><font style="font-family: Verdana;">School/Faculty: (1st Choice): </font></td>
                     <td><?php echo $row[29] ?>
                     </td>
                     <td> <font style="font-family: Verdana;">Programme of Choice: </font></td>
                    <td> <?php echo $row[8] ?> </td>
                     
                </tr>


                <tr>
                    <td><font style="font-family: Verdana;">School/Faculty: (2nd Choice): </font></td>
                    <td><?php echo $row[28] ?> </td>
                     <td><font style="font-family: Verdana;">Programme of Choice: </font></td>
                    <td><?php echo $row[25] ?></td>
               </tr>


               <tr>
                               <td><font style="font-family: Verdana;">1st Choice 
<br>Programme Duration: </font></td>
                               
                               <td colspan="3"><?php echo $row[46] ?></td>
                               
                           </tr>


               <tr>
                   <td><font style="font-family: Verdana;">Academic Qualification: </font></td>
                   <td colspan="3">
                       <table class="table table-hover">
                           <thead>
                               <tr>
                                    <th><font style="font-family: Verdana;font-size: small"></font> <br><font style="font-family: Verdana; font-size: small"></font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Name</font> <br><font style="font-family: Verdana;font-size: small"></font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Month of</font> <br><font style="font-family: Verdana;font-size: small">Admission</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Year of</font><br><font style="font-family: Verdana;font-size: small">Admission</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Month of</font> <br><font style="font-family: Verdana;font-size: small">Graduation</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Year of</font><br><font style="font-family: Verdana;font-size: small">Graduation</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Qualification</font><br><font style="font-family: Verdana;font-size: small">Obtained</font></th>
                              </tr>   
                           </thead>
                            <tbody>
                           <tr>
                               <td><?php echo "Primary School: "; ?></td>
                               <td><?php echo $row[33] ?></td>
                               <td><?php echo $row[34] ?></td>
                               <td><?php echo $row[35] ?></td>
                               <td><?php echo $row[36] ?></td>
                               <td><?php echo $row[37] ?></td>
                               <td><?php echo $row[38] ?></td>
                               
                           </tr>
                           <tr>
                               <td><?php echo "Secondary School: "; ?> </td>
                               <td><?php echo $row[39] ?></td>
                               <td><?php echo $row[40] ?></td>
                               <td><?php echo $row[41] ?></td>
                               <td><?php echo $row[42] ?></td>
                               <td><?php echo $row[43] ?></td>
                               <td><?php echo $row[44] ?></td>
                           </tr>
                           
                            </tbody>
                       </table>

                
                <tr>
                    <td><font style="font-family: Verdana;">JAMB Registration Number: </font>
                     <td><?php echo $row[10] ?></td>
                     <td><font style="font-family: Verdana;">JAMB Score: </font></td>
                     <td colspan="3"><?php echo $row[32] ?></td>
                </tr>
                
               
                <tr>
                               <td><font style="font-family: Verdana;">O'Level Examination Passed: </font></td>
                               
                                    <td colspan="3"><?php echo $row[45] ?></td>
                               
                           </tr>



                           <tr>
                     <td> <font style="font-family: Verdana;">O'Level Examination Number: </font></td>
                    <td> <?php echo $row[9] ?></td>
                    <td> <font style="font-family: Verdana;">Additional O'Level
<br>Examination Number: 
<br>(If any) </font></td>
                    <td><?php echo ' '.$row[3] ?></td>




                </tr>

                           
                           
                           <tr>
                               <td><font style="font-family: Verdana;"><br><br></font></td>
                               
                               <td colspan="2"></td>
                               
                               <td colspan="2">
                           <center><font style="font-family: Verdana;"><br><br><br><br>Signature & Date</font></center> 
                               </td>
                           </tr>
                 
                       </table></center>
                               </div>
                            </div>
            </div>
        <?php
              }
        ?>   
        <br><br><br>
        <center>
             <input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"><br> <br>

             </center>           
             <br><br>
                  </form>
            </body>
</html>
