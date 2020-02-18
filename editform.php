<?php
    session_start();
    error_reporting(0);

    $unam = $_REQUEST["unam"];
    $uphn1 =$_REQUEST["uphn1"];
    $uphn2 =$_REQUEST["uphn2"];
    
    $ufname =$_REQUEST["ufname"];
    $ufocc=$_REQUEST["ufocc"];
    $ufphn=$_REQUEST["ufphn"];
    
    $umname=$_REQUEST["umname"];
    $umocc=$_REQUEST["umocc"];
    $umphn=$_REQUEST["umphn"];
    
    $inc=$_REQUEST["inc"];
    $gen=$_REQUEST["gen"];
    
    $cadr=$_REQUEST["cadr"];
    $cast=$_REQUEST["cast"];
    $capin=$_REQUEST["capin"];
    $camob=$_REQUEST["camob"];
    
    $padr=$_REQUEST["padr"];
    $past=$_REQUEST["past"];
    $papin=$_REQUEST["papin"];
    $pamob=$_REQUEST["pamob"];
    
    $rur=$_REQUEST["rur"];
    $natn=$_REQUEST["natn"];
    $relg=$_REQUEST["relg"];
    $cat=$_REQUEST["cat"];
    $oaco=$_REQUEST["oaco"];
    $oarank=$_REQUEST["oarank"];
    $oaroll=$_REQUEST["oaroll"];
    $oabrn=$_REQUEST["oabrn"];
    $brnc=$_REQUEST["brnc"];
    $col=$_REQUEST["col"];
    $cen=$_REQUEST["cen"];
    $crsty=$_REQUEST["crsty"];
    $pcm=$_REQUEST["pcm"];
    
    $nob1=$_REQUEST["nob1"];
    $yop1=$_REQUEST["yop1"];
    $tm1=$_REQUEST["tm1"];
    $mo1 =$_REQUEST["mo1"];
    $divs1=$_REQUEST["divs1"];
    $pom1  =$_REQUEST["pom1"];
    
    $nob2  =$_REQUEST["nob2"];
    $yop2=$_REQUEST["yop2"];
    $tm2=$_REQUEST["tm2"];
    $mo2  =$_REQUEST["mo2"];
    $divs2  =$_REQUEST["divs2"];
    $pom2  =$_REQUEST["pom2"];
       
    $moi  = $_REQUEST["moi"];
    $pay= $_REQUEST["pay"];
    
    $con=mysqli_connect("localhost","root","","oas");
    
    
    if(!isset($con))
    {
        die("Database Not Found");
    }
    
    
    if(isset($_REQUEST["frmupdate"]))
    {
        $sql="update t_user set

s_phn1='$uphn1', s_phn2='$uphn2', f_name='$ufname', f_occ='$ufocc', f_phn='$ufphn', m_name='$umname',
m_occ='$umocc', m_phn='$umphn', s_iop='$inc', s_sex='$gen', s_cadr='$cadr', s_cst='$cast', s_cpin='$capin', s_cmob='$camob',
 s_padr='$padr', s_pst='$past', s_ppin='$papin', s_pmob='$pamob', s_ruc='$rur', s_natn='$natn',
s_relg='$relg', s_catg='$cat', s_mainsxam='$oaco', s_mainsrank='$oarank', s_mainsroll='$oaroll',
s_mainsbrnch='$oabrn', s_branch='$brnc',s_college='$col', s_center='$cen', s_crtype='$crsty', 
s_pcm='$pcm', s_tenbrd='$nob1', s_tenyop='$yop1', s_tentotmark='$tm1', s_tenmarkob='$mo1',
s_tendiv='$divs1', s_tenprcmark='$pom1', s_twlbrd=' $nob2 ', s_twlyop='$yop2', 
s_twltotmark='$tm2', s_twlmarkob='$mo2', s_twldiv='$divs2', s_twlprcmark='$pom2', s_moi='$moi', s_pay='$pay'
where s_id='".$_SESSION['user']."'";

$sql1="update t_user_data set s_name='$unam' where s_id='".$_SESSION['user']."'";
mysqli_query($con, $sql);
mysqli_query($con, $sql1);

        
        header('location:homepageuser.php');
        echo "<script type='text/javascript'>alert('Details Uploaded !!');</script>";
        
        
    }
    
    
$q=mysqli_query($con,"select s_name from t_user_data where s_id='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['s_name'];


?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
        
        
    </head>
     <body style="background-image:url('./images/inbg.jpg');">
        <form id="edform" action="editform.php" method="post">
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                  <br>
                  <center> <img src="images/logog.png" width="10%"/></center>
                  <br>
                  </div>
                 </div>    
             </div>
            <div id="dmid" class="container-fluid">  
                
            <div class="col-sm-12">
                        <center><font style="color:white; margin-left:0px; font-family: Verdana; width:100%; font-size:30px;">
                        <b>ADEWALE IBRAHIM COLLEGE OF HEALTH SCIENCES</b> </font></center>
                      </div>
                
             </div>
                       
                       
            <table class="frmtbl">
                <?php
            
                    $result = mysqli_query($con,"SELECT * FROM t_user WHERE s_id='".$_SESSION['user']."'");

                            while($row = mysqli_fetch_array($result))
                              {
                        
                ?>
                <tr border="1" class="hdrow">
                    
                 </tr>      



                 <td>
<center><h2>Personal Details</h2></center>
<br>
</td> 
                 
                  <tr>
                      <td> <font style="font-family: Verdana;">Name: </font> </td>
                    <td colspan="2"> <input type="text" id="unam" name="unam" value="<?php echo $stname;?>">
                   
                  </tr>

                  <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>

                  <tr>
                    <td> <font style="font-family: Verdana;">Sex: </font>
                    <td><input type="radio" id="gen" name="gen" value="Male"><font style="font-family: Verdana;">Male</font>
                     <input type="radio" id="gen" name="gen" value="Female"><font style="font-family: Verdana;">Female </font></td>       
                    
                </tr>


                <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>

                <tr>
                    <td><font style="font-family: Verdana;">Marital Status: </font></td>
                    <td><input type="text" id="oaroll" name="oaroll" value="<?php echo $row[26] ?>"></td>
                    <td><font style="font-family: Verdana;">Religion: </font></td>
                    <td><input type="text" id="oabrn" name="oabrn" value="<?php echo $row[27] ?>"></td>
               </tr>  

               <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>

                  
                  <tr>
                    <td> <font style="font-family: Verdana;">Student's Contact Number: </font>  </td>
                    <td colspan="3"> <input type="text" id="uphn1" name="uphn1" value="<?php echo $row[2]  ?>">
                    </td>
                  </tr>
                  <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>

                  </tr>
                  <tr>
                    <td><font style="font-family: Verdana;">Residential Address: </font>
                    <td colspan="3"><input type="text" id="cadr" name="cadr" value="<?php echo $row[12] ?>" ><br>
                          <input type="text" id="cast" name="cast" value="<?php echo $row[13] ?>" style="margin-top: 4px;"><br>
                          <input type="text" id="capin" name="capin" value="<?php echo $row[14] ?>" style="margin-top: 4px;"><br>
                </td>
                
                <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>

                <tr>
                    <td><font style="font-family: Verdana;">Nationality: </font>
                    <td><input type="text" id="natn" name="natn" value="<?php echo $row[21] ?>"></td>
                    <td><font style="font-family: Verdana;">State of Origin: </font>
                    <td><input type="text" id="relg" name="relg" value="<?php echo $row[22] ?>"></td>
                </tr>   

                
                <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>

                <tr>
                    <td><font style="font-family: Verdana;">LGA: </font></td>
                    <td  colspan="3"> <input type="text" id="ufname" name="ufname" value="<?php echo $row[4]  ?>" > </td>
                   </tr>


                   <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>
                 
                  <tr>
                    <td> <font style="font-family: Verdana;">Guardian/Parent Name: </font></td>
                    <td> <input type="text" id="ufocc" name="ufocc" value="<?php echo $row[5] ?>"> </td>
                    <td> <font style="font-family: Verdana;">Guardian/Parent Email: </font> </td>
                    <td> <input type="text" id="umname" name="umname" value="<?php echo $row[7] ?>"></td>
                    
                  </tr>

                  <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>
                
                <tr>

                <td><font style="font-family: Verdana;">Guardian/Parent Number: </font></td>
                    <td> <input type="text" id="ufphn" name="ufphn" value="<?php echo $row[6] ?>"> </td>
                </tr>

                <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Guardian/Parent Address: </font>
                    <td colspan="3"><input type="text" id="padr" name="padr" value="<?php echo $row[16] ?>" ><br>
                          <input type="text" id="past" name="past" value="<?php echo $row[17] ?>" style="margin-top: 4px;"><br>
                          <input type="text" id="papin" name="papin" value="<?php echo $row[18] ?>" style="margin-top: 4px;"><br>
                    </td>
                </tr>   


                <tr>
<td>
<br>
<center><h2>Choice of Admission</h2></center>
<br>
</td>
</tr>



                <tr>
                     <td><font style="font-family: Verdana;">School/Faculty: (1st Choice) </font></td>
                     <td><select id="col" name="col">
                         <option><?php echo $row[29] ?></option>
                         <option>--------------------Select--------------------</option>
                         <option>SCHOOL OF COMMUNITY HEALTH & PREVENTIVE MEDICINE</option>
                         <option>SCHOOL OF COMPLEMENTARY & ALTERNATIVE MEDICINE</option>
						 <option>SCHOOL OF PUBLIC HEALTH NURSING</option>
						 <option>SCHOOL OF DENTAL TECHNOLOGY</option>
						 <option>SCHOOL OF ENVIRONMENTAL HEALTH</option>
						 <option>SCHOOL OF PHARMACEUTICAL TECHNOLOGY & TECHNICIAN</option>
                         <option>SCHOOL OF HEALTH INFORMATION MANAGEMENT</option>
                         <option>SCHOOL OF DIAGNOSIS & PARAMEDICS</option>
                         </select>
                     </td>
                     <td> <font style="font-family: Verdana;">Programme of Choice: </font></td>
                    <td> <input type="text" id="umocc" name="umocc" value="<?php echo $row[8] ?>"> </td>
                     
                </tr>

                <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>
                <tr>
                    <td><font style="font-family: Verdana;">School/Faculty: (2nd Choice) </font></td>
                    <td><select id="brnc" name="brnc">
                         <option><?php echo $row[28] ?></option>
                         <option>--------------------Select--------------------</option>
                         <option>SCHOOL OF COMMUNITY HEALTH & PREVENTIVE MEDICINE</option>
                         <option>SCHOOL OF COMPLEMENTARY & ALTERNATIVE MEDICINE</option>
						 <option>SCHOOL OF PUBLIC HEALTH NURSING</option>
						 <option>SCHOOL OF DENTAL TECHNOLOGY</option>
						 <option>SCHOOL OF ENVIRONMENTAL HEALTH</option>
						 <option>SCHOOL OF PHARMACEUTICAL TECHNOLOGY & TECHNICIAN</option>
                         <option>SCHOOL OF HEALTH INFORMATION MANAGEMENT</option>
                         <option>SCHOOL OF DIAGNOSIS & PARAMEDICS</option>
                         </select>
                     </td>
                     <td><font style="font-family: Verdana;">Programme of Choice: </font></td>
                    <td><input type="text" id="oarank" name="oarank" value="<?php echo $row[25] ?>"></td>
               </tr>


               <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>

                <tr>
               <td><font style="font-family: Verdana;">1st Choice <br>Programme Duration: </font></td>
                               <td>
                                    <input type="radio" id="pay" name="pay" value="1 Year"><font style="font-family: Verdana;">1 Year</font>
                                    <input type="radio" id="pay" name="pay" value="2 Years"><font style="font-family: Verdana;">2 Years</font>
                                    <input type="radio" id="pay" name="pay" value="3 Years"><font style="font-family: Verdana;">3 Years</font>
                               </td>
                               </tr>






               <tr>
<td>
<br><font><a href="https://aicohs.com.ng/index.php/2019/08/26/available-departments-at-a-i-c-o-h-s/" target="_blank">Click here</a> to view list of <br>Available Schools/Faculties, <br> Programmes & Duration.</font>
</td>
               </tr>




               <td>
<br>
<center><h2>Academic Background</h2></center>
<br>
</td>
</tr>


<tr>
                   <td><font style="font-family: Verdana;">Academic Qualification: </font></td>
                   <td colspan="3">
                       <table class="table table-hover">
                           <thead>
                               <tr>
                               <th><font style="font-family: Verdana;font-size: small"></font> <br><font style="font-family: Verdana; font-size: small"></font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Name</font> <br><font style="font-family: Verdana;font-size: small"></font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Month of</font> <br><font style="font-family: Verdana;font-size: small"> Admission</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Year of</font><br><font style="font-family: Verdana;font-size: small"> Admission</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Month of</font> <br><font style="font-family: Verdana;font-size: small"> Graduation</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Year of</font><br><font style="font-family: Verdana;font-size: small"> Graduation</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Qualification</font><br><font style="font-family: Verdana;font-size: small"> Obtained</font></th>
                              </tr>   
                           </thead>
                            <tbody>
                           <tr>
                               <td><?php echo "Primary School: "; ?></td>
                               <td><input type="text" id="nob1" name="nob1" value="<?php echo $row[33] ?>"></td>
                               <td><input type="text" id="yop1" name="yop1" class="actab" value="<?php echo $row[34] ?>"></td>
                               <td><input type="text" id="tm1" name="tm1" class="actab" value="<?php echo $row[35] ?>"></td>
                               <td><input type="text" id="mo1" name="mo1" class="actab" value="<?php echo $row[36] ?>"></td>
                               <td><input type="text" id="divs1" name="divs1" class="actab" value="<?php echo $row[37] ?>"></td>
                               <td><input type="text" id="pom1" name="pom1" class="actab" value="<?php echo $row[38] ?>"></td>
                           </tr>

                           <tr>

<td>

</td>

</tr>

                           <tr>
                               <td><?php echo "Secondary School: "; ?> </td>
                               <td><input type="text" id="nob2" name="nob2" value="<?php echo $row[39] ?>"></td>
                               <td><input type="text" id="yop2" name="yop2" class="actab" value="<?php echo $row[40] ?>"></td>
                               <td><input type="text" id="tm2" name="tm2" class="actab" value="<?php echo $row[41] ?>"></td>
                               <td><input type="text" id="mo2" name="mo2" class="actab" value="<?php echo $row[42] ?>"></td>
                               <td><input type="text" id="divs2" name="divs2" class="actab" value="<?php echo $row[43] ?>"></td>
                               <td><input type="text" id="pom2" name="pom2" class="actab" value="<?php echo $row[44] ?>"></td>
                           </tr>
                           
                            </tbody>
                       </table>

      <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>

                
                <tr>
                    <td><font style="font-family: Verdana;">JAMB Registration Number: </font>
                     <td><input type="text" id="inc" name="inc" value="<?php echo $row[10] ?>"></td>
                     <td><font style="font-family: Verdana;">JAMB Score: </font></td>
                     <td><input type="text" id="pcm" name="pcm" value="<?php echo $row[32] ?>"></td>
                </tr>
                
                <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>

                <tr>
                               <td><font style="font-family: Verdana;">O'Level Examination Passed: </font></td>
                               <td colspan="3">
                                    <input type="radio" id="moi" name="moi" value="1 Examination Passed"><font style="font-family: Verdana;">1 Examination Passed</font>
                                    <input type="radio" id="moi" name="moi" value="2 Examinations Passed"><font style="font-family: Verdana;">2 Examinations Passed (for combination of 2 O'Level Results)</font>
                               </td>
                           </tr>
                           

                           <tr>
<tr>
<td>
<br>
</td>
</tr>
</tr>

                           <tr>
                     <td> <font style="font-family: Verdana;">O'Level Examination Number: </font></td>
                    <td> <input type="text" id="umphn" name="umphn" value="<?php echo $row[9] ?>"></td>
                    <td> <font style="font-family: Verdana;">Additional O'Level
<br>Examination Number: 
<br>(If any) </font></td>
                    <td><input type="text" id="uphn2" name="uphn2" value="<?php echo $row[3]  ?>"></td>
                </tr>


              
                           
                           <tr>
                                <td colspan="4">
                                <br>
                                <br><br>
                                   <center> <input type="submit" id="frmupdate" name="frmupdate" value="Update" ></center>
                              <br>
                              <center><a  href="homepageuser.php">Cancel</a></center>
                              <br>
                                </td>
                           </tr>
                           
                           <?php
                           
                              }
                           ?>
                       </table>
            <br>
                  
            <center><p>©2019, Adewale Ibrahim College of Health Sciences. Design and Developed with ♥ by <a href="https://jeffrey.myethion.com" target="_blank">ETHION</a></p></center>
                            
            <br>
                    
                       
                  </form>
            </body>
</html>
