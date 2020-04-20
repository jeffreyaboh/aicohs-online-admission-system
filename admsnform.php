<?php
    session_start();
    error_reporting(0);

    
    
    $detid=$_REQUEST["detid"];
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
    
    
    if(isset($_REQUEST["frmnext"]))
    {
        if($detid== "")
        $detid = DetCode();
        $sql  = "insert into t_user values(";
        $sql .= "'" . $detid . "',";
        $sql .= "'" . $_SESSION['user'] ."',";
        $sql .= "'" . $uphn1 . "',";
        $sql .= "'" . $uphn2 . "',";
        $sql .= "'" . $ufname . "',";
        $sql .= "'" . $ufocc . "',";
        $sql .= "'" . $ufphn . "',";
        $sql .= "'" . $umname . "',";
        $sql .= "'" . $umocc . "',";
        $sql .= "'" . $umphn . "',";
        $sql .= "'" . $inc . "',";
        $sql .= "'" . $gen . "',";
        $sql .= "'" . $cadr . "',";
        $sql .= "'" . $cast . "',";
        $sql .= "'" . $capin . "',";
        $sql .= "'" . $camob . "',";
        $sql .= "'" . $padr . "',";
        $sql .= "'" . $past . "',";
        $sql .= "'" . $papin . "',";
        $sql .= "'" . $pamob . "',";
        $sql .= "'" . $rur . "',";
        $sql .= "'" . $natn . "',";
        $sql .= "'" . $relg . "',";
        $sql .= "'" . $cat . "',";
        $sql .= "'" . $oaco . "',";
        $sql .= "'" . $oarank . "',";
        $sql .= "'" . $oaroll . "',";
        $sql .= "'" . $oabrn . "',";
        $sql .= "'" . $brnc . "',";
        $sql .= "'" . $col . "',";
        $sql .= "'" . $cen . "',";
        $sql .= "'" . $crsty . "',";
        $sql .= "'" . $pcm . "',";
        $sql .= "'" . $nob1 . "',";
        $sql .= "'" . $yop1 . "',";
        $sql .= "'" . $tm1 . "',";
        $sql .= "'" . $mo1 . "',";
        $sql .= "'" . $divs1 . "',";
        $sql .= "'" . $pom1 . "',";
        $sql .= "'" . $nob2 . "',";
        $sql .= "'" . $yop2 . "',";
        $sql .= "'" . $tm2 . "',";
        $sql .= "'" . $mo2 . "',";
        $sql .= "'" . $divs2 . "',";
        $sql .= "'" . $pom2 . "',";
        $sql .= "'" . $moi . "',";
        $sql .= "'" . $pay . "')";

      
        mysqli_query($con, $sql);
        
        $sql1  = "insert into t_status values(";
        $sql1 .= "'" . $_SESSION['user'] ."',";
        $sql1 .= "'Applied')";
        
         mysqli_query($con, $sql1);
         
        header('location:documents.php');
        echo "<script type='text/javascript'>alert('Details Uploaded !!');</script>";
        
        
    }
    
    
    function DetCode()
{
      $con = mysqli_connect("localhost", "root", "", "oas");
      $rs  = mysqli_query($con,"select CONCAT('DE',LPAD(RIGHT(ifnull(max(s_detid),'DE00000000'),8) + 1,8,'0')) from t_user");
      return mysqli_fetch_array($rs)[0];
}

$q=mysqli_query($con,"select s_name from t_user_data where s_id='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['s_name'];


 if (!isset($_SESSION['user']))
{
        echo "<br><h2>You are not Logged On Please Login to Access this Page</div></h2>";
        echo "<a href=index.php><h3 align=center>Click Here to Login</h3></a>";
        exit();
}



?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
         <script language="javascript" type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
        
       

        <script type="text/javascript">
        function validate()
        {
            $('#adform input[type="text"]').each(function() {
                if(this.required)
                {
                    if(this.value=="")
                        $(this).addClass("inpterr");
                    else
                        $(this).addClass("inpterrc");
                }
              
                if($(this).attr("VT")=="NM")
                {
                    if((!isAlpha(this.value)) && this.value!="")
                    {
                       alert("Only Aplhabets Are Allowed . . .");
                       $(this).focus();
                    }
                }

                if($(this).attr("VT")=="PH")
                        {
                                if((!isPhone(this.value)) && this.value!="")
                                {
                                        alert("You have Successfully Registered!");
                                        $(this).focus();
                                }
                        }


                        if($(this).attr("VT")=="EML")
                        {
                                if(!IsEmail($(this).val()) && this.value!="")
                                {
                                        alert("Invalid Email . . . .");
                                        $(this).focus();
                                }
                        }	

                        if($(this).attr("VT")=="PIN")
                        {
                                if((!IsPin(this.value)) && this.value!="")
                                {
                                        alert("Invalid Pin Code . . . .");
                                        $(this).focus();
                                }
                        }

            });
        }
        
                function isAlpha(x)
                {
                    var re = new RegExp(/^[a-zA-Z\s]+$/);
                    return re.test(x);
                }
        
		function isPhone(x)
		{
			
			var ph = new RegExp (/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/);  
			//if(!ph.length<10)
			return ph.test(x);
		}
                
                
		
		function IsEmail(x) 
		{
  			var em = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
  			return em.test(x);
		}
		
		function IsPin(x) 
		{
  			var pin = new RegExp (/^\d{6}$/);
			
  			return pin.test(x);
		}		
        </script>
        
        <style type="text/css">
            .inpterr
            {
                border: 1px solid red;
                background: #FFCECE;

            }
            
            .inpterrc
            {
                border: 1px solid black;
                background: white;
            }
        </style>
            
        
        
        
    </head>
     <body style="background-image:url('./images/inbg.jpg');">
        <form id="adform" action="admsnform.php" method="post">
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
                
                 <div class="row">
                    <div class="col-sm-12">
                    <div class="col-sm-12">
                        <center><font style="color:white; margin-left:0px; font-family: Verdana; width:100%; font-size:30px;">
                        <b>ADEWALE IBRAHIM COLLEGE OF HEALTH SCIENCES</b> </font></center>
                      </div>
                 </div>
                
             </div>
            
            <table class="frmtbl">
                
                <tr border="1" class="hdrow">
                    
                 </tr>       
                 
                 <tr>



                  <tr>
                          <td> <font style="font-family: Verdana;"><h4>Welcome,  <?php echo $stname;?></h4> </font> </td>
                    <td colspan="2"> 
                        <input type="hidden" id="detid" name="detid"></td>
                    
                    
                  </tr>
                  
                  <td>
<center><h2>Personal Details</h2></center>
<br>
</td>
</tr>

                  <tr>
                    <td> <font style="font-family: Verdana;">Sex: </font>
                    <td><input type="radio" id="gen" name="gen" value="Male"><font style="font-family: Verdana;">Male</font>
                     <input type="radio" id="gen" name="gen" value="Female"><font style="font-family: Verdana;">Female </font></td>       
                    
                </tr>


                <tr>
<td>
<br>
</td>
</tr>
</tr>


                <tr>
                    <td><font style="font-family: Verdana;">Marital Status: </font></td>
                    <td><input type="text" id="oaroll" name="oaroll" required="true"></td>
                    <td><font style="font-family: Verdana;">Religion: </font></td>
                    <td><input type="text" id="oabrn" name="oabrn" required="true"></td>
               </tr>  


               <tr>
<td>
<br>
</td>
</tr>
</tr>


                  <tr>
                    <td> <font style="font-family: Verdana;">Student's Contact Number: </font>  </td>
                    <td colspan="3"> <input type="text" id="uphn1" name="uphn1" placeholder="Telephone" required="true" VT="PH"></td>
                    
                  </tr>
                


                  <tr>
<td>
<br>
</td>
</tr>
</tr>

                  <tr>
                    <td><font style="font-family: Verdana;">Residential Address: </font>
                    <td colspan="3"><input type="text" id="cadr" name="cadr" class="ad" placeholder="House Number, Street Name" required="true"><br>
                          <input type="text" id="cast" name="cast" class="ad" placeholder="State" style="margin-top: 4px;" required="true"><br>
                          <input type="text" id="capin" name="capin" class="ad" placeholder="Postal Code" style="margin-top: 4px;" required="true"><br>
                </td>


                <tr>
<td>
<br>
</td>
</tr>
</tr>



                <tr>
                    <td><font style="font-family: Verdana;"> Nationality: </font>
                    <td><input type="text" id="natn" name="natn" required="true"></td>
                    <td><font style="font-family: Verdana;"> State of Origin: </font>
                    <td><input type="text" id="relg" name="relg" required="true"></td>
                    </tr>



                    <tr>
<td>
<br>
</td>
</tr>
</tr>

                    <tr>
                    <td><font style="font-family: Verdana;"> LGA: </font></td>
                    <td><input type="text" id="ufname" name="ufname" required="true" VT="NM"> </td>
                </tr> 



                <tr>
<td>
<br>
</td>
</tr>
</tr>

                 
                  <tr>
                    <td> <font style="font-family: Verdana;">Guardian/Parent Name: </font></td>
                    <td> <input type="text" id="ufocc" name="ufocc" required="true" VT="NM"> </td>
                    <td> <font style="font-family: Verdana;">Guardian/Parent Email: </font> </td>
                    <td> <input type="text" id="umname" name="umname" required="true" VT="EML"></td>
                    </tr>


                    <tr>
<td>
<br>
</td>
</tr>
</tr>


                    <tr>
                    <td><font style="font-family: Verdana;">Guardian/Parent Number: </font></td>
                    <td> <input type="text" id="ufphn" name="ufphn" required="true" VT="PH"> </td>
                  </tr>
                

                  <tr>
<td>
<br>
</td>
</tr>
</tr>

                
                  <tr>
                    <td> <font style="font-family: Verdana;">Guardian/Parent Address: </font>
                    <td colspan="3"><input type="text" id="padr" name="padr" class="ad" placeholder="House Number, Street Name" required="true"><br>
                          <input type="text" id="past" name="past" class="ad" placeholder="State" style="margin-top: 4px;" required="true"><br>
                          <input type="text" id="papin" name="papin" class="ad" placeholder="Postal Code" style="margin-top: 4px;" required="true"><br>
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
                     <td><font style="font-family: Verdana;">School/Faculty: (1st Choice)</font></td>
                     <td><select id="col" name="col">
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
                    <td> <font style="font-family: Verdana;">Programme of Choice: </font></td>
                    <td> <input type="text" id="umocc" name="umocc" placeholder="e.g: Community Health" required="true" VT="NM"> </td>
                     </td>


                     <tr>
<td>
<br>
</td>
</tr>
</tr>


                     <tr>
                    <td><font style="font-family: Verdana;">School/Faculty: (2nd Choice)</font></td>
                    <td><select id="brnc" name="brnc">
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
                    <td><font style="font-family: Verdana;">Programme of Choice: </font></td>
                    <td><input type="text" id="oarank" name="oarank" placeholder="e.g: Dental Technology" required="true"></td>
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

                          




               <tr>
<td>
<br>
<center><h2>Academic Background</h2></center>
<br>
</td>
</tr>


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
                               <td><input type="text" id="nob1" name="nob1" ></td>
                               <td><input type="text" id="yop1" name="yop1" class="actab" ></td>
                               <td><input type="text" id="tm1" name="tm1" class="actab" ></td>
                               <td><input type="text" id="mo1" name="mo1" class="actab" ></td>
                               <td><input type="text" id="divs1" name="divs1" class="actab" ></td>
                               <td><input type="text" id="pom1" name="pom1" placeholder="WAEC, NECO etc." class="actab" ></td>
                           </tr>
                           <tr>
                               <td><?php echo "Secondary School: "; ?> </td>
                               <td><input type="text" id="nob2" name="nob2" ></td>
                               <td><input type="text" id="yop2" name="yop2" class="actab" ></td>
                               <td><input type="text" id="tm2" name="tm2" class="actab" ></td>
                               <td><input type="text" id="mo2" name="mo2" class="actab" ></td>
                               <td><input type="text" id="divs2" name="divs2" class="actab" ></td>
                               <td><input type="text" id="pom2" name="pom2" placeholder="BSc, OND, ND etc." class="actab" ></td>
                           </tr>
                           
                            </tbody>
                       </table>


                       <tr>
<td>
<br>
</td>
</tr>
</tr>

                       <tr>
                       <td><font style="font-family: Verdana;">JAMB Registration Number: </font>
                     <td><input type="text; number" id="inc" name="inc"  ></td>
                     <td><font style="font-family: Verdana;">JAMB Score: </font></td>
                     <td><input type="text" id="pcm" name="pcm" ></td>
                     
                </tr>

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
<td>
<br>
</td>
</tr>
</tr>



                <tr>
                     <td> <font style="font-family: Verdana;">O'Level Examination Number: </font></td>
                    <td> <input type="text" id="umphn" name="umphn" required="true" VT="PH"></td>
                    <td> <font style="font-family: Verdana;">Additional O'Level<br> Examination Number: <br>(If any)</font></td>
                   <td> <input type="text" id="uphn2" name="uphn2" VT="PH"></td>
                </tr>

        




                       <td>
                       <tr>
<br>
<center><h2>ADMISSION FORM</h2>
<br>
<center><p>Application Fee cost<b> ₦6,500</b>. It must be paid Online or directly to the Bank Account Below.</p></center>
<center><h4>First Bank: 2032070259</h4></center>
<center><p><b>NB:</b> You are required to upload a scanned copy of the bank receipt as you proceed (If paid directly to the Bank). </p></center>
<br>
</td>
</tr>
                           
                           <tr>
                                <td colspan="4">
                                <br>
                                <br>
                                   <center> <input type="submit" onclick="validate();" id="frmnext" name="frmnext" value="Next"></center>
                                   <br>
                                   <br>
                                   <center><a  href="logout.php"><b>Logout</b></a></center>
                               <br>
                               <br>
                                </td>
                           </tr>

                       </table>
            <br><br><br><br>
            <center><p>©2019, Adewale Ibrahim College of Health Sciences. Design and Developed with ♥ by <a href="https://jeffrey.myethion.com" target="_blank">ETHION</a></p></center>
                            
            <br>
                       
                  </form>
            </body>
</html>
