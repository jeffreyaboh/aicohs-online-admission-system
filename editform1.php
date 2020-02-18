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

        
         mysqli_query($con, $sql1);
         
        header('location:admin.php');
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


 if (!isset($_SESSION['ad']))
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
        <form id="adform" action="editform1.php" method="post">
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
