<?php

    session_start();
    error_reporting(0);

$con=mysqli_connect("localhost","root","","oas");
$q=mysqli_query($con,"select s_name from t_user_data where s_id='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['s_name'];
$id=$_SESSION['user'];
$q=mysqli_query($con,"select m_occ from t_user where s_id='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$umocc=$n["m_occ"];
$id=$_SESSION['user'];
$q=mysqli_query($con,"select s_pay from t_user where s_id='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$pay=$n["s_pay"];


$result = mysqli_query($con,"SELECT * FROM t_user WHERE s_id='".$_SESSION['user']."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
       
        
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
    <body style="background-image:url(./images/draft.jpg) ">
      <form id="admincard" action="admincard.php" method="post">
            
          <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table" style="font-family: Verdana">
                
                <tr>
                 <td style="width:15%;"><center><br><img src="./images/logog.png" width="165"> </center></td>
                 <td style="width:75%;"><center><font style="font-family:Arial;  font-size:30px;">
                 <b>ADEWALE IBRAHIM COLLEGE OF HEALTH SCIENCES</b></font></center>
                <br>
                <center><font style="font-family:Verdana; font-size:15px;">
                <b>Buari, Irepodun LGA, Kwara State. PMB 1405 Ilorin, 
 Kwara State, Nigeria.
 <br>Email: info@aicohs.com.ng 
 <br>Phone: 08035387285, 08038023957</b>
                    </font></center>
<br>

                    <center><font style="font-family:Avantgarde gold; font-size:15px;">
                <b>GOVERNMENT APPROVED</b>
                    </font></center>
                    <td style="width:50%;"><center><br><br><br><font style="font-family:Arial Black; font-size:18px;">
                 <b>RC: 1345736</b></font></center>
                </td>
                    <td colspan="2" width="3%" >
                   
                        </td>
                 </tr>       
                 
                 
                <!-- <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Date</font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                        10th May 2019, Afternoon Session</font> </td>
                 </tr>
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Time </font> </td>
                    <td style="width:8%;" colspan="3"> <font style="font-family: Verdana; font-weight: bold">
                        2:00 PM - 4:00 PM </font></td>
                 </tr>
                 
                <tr>
                    <td> <font style="font-family: Verdana;">Registration No. </font> </td>
                    <td colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $id ?></font> </td>
                </tr>
                
                <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Name  </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stname;?></font> </td>
                 </tr>
                 
                 <tr>
                     <td style="width:4%;"> <font style="font-family: Verdana;">Exam Center  </font> </td>
                    <td style="width:8%;" colspan="3">
                       <font style="font-family: Verdana; font-weight: bold"> Sri SaiRam College Of Engineering<br>
                        At - Guddanahalli<br>
                        P.O - Anekal, Bengaluru<br>
                        Dist: Bengaluru - 562106<br>
                        Karnataka, India<br>
                        Phone: (0123)1234567<br>
                        </font>
                    </td>
                 </tr>
                <?php
                }
                ?>
                -->
                 
                    </table>
                </div>
             </div>
          </div>
          <hr>
          <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    
                    
                    <font style="font-family: Verdana;  font-size: margin-left:200px; 15px; font-weight: bold;">Our Ref: </font> </td>
                    <td colspan="3"><font style="font-family: Verdana; font-size: 15px; ">
                     <?php echo $id ?></font> </td>
                     <td>

                     <td><font style="font-family: Verdana;  font-size: 15px; margin-left:200px; font-weight: bold;">Your Ref: </font> </td>
                    
                     
                     <font style="font-family: Verdana;  font-size: 15px; margin-left:200px; font-weight: bold;">Date: </font> </td>
                    <td colspan="3"><font style="font-family: Verdana; font-size: 15px; ">
                    <?php
echo " " . date("d-M-Y") . "<br>";
?>
                     
                     </font> </td>
                </tr>
          <hr>
          <br>
          <center><font style="font-family: Verdana; font-weight: bold; font-size: 17px;">In affiliation with<br>KWARA STATE COLLEGE OF HEALTH TECHNOLOGY
<br>OFFA, KWARA STATE</font></center><br>
 
<br>
<br>

          <tr>
                 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-size: 20px; font-weight: bold">
                     <?php echo $stname;?></font> </td>
                 </tr>


<br>
<br>
<br>

          <center><font style="font-family: Verdana; font-weight: bold; font-size: 17px;">OFFER OF PROVISIONAL ADMISSION</font></center><br>
          <font style="font-family: Verdana;  font-size: 13px;"> 
            <p style="margin-left: 100px; margin-right: 100px; font-size: 15px; font-family: Verdana;">
            I am pleased to inform you that you have been offered provisional admission into the College for a 
programme leading to the award of <font style="font-family: Verdana; font-weight: bold; font-size: 16px;"><?php echo $umocc;?></font>  for a period 
of <b><?php echo $pay;?></b>.
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-size: 15px; font-family: Verdana;">
            At the time of registration, you are advised to register at the study centre (BUARI) specified in your 
application form. You are to produce at the time of registration the following documents:
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-size: 15px; font-family: Verdana;">
            i. Originals of bank tellers/receipts obtained when you paid for the application form online or directly to the bank. 
            <br>ii. Original tuition fee bank draft collected at the Bank. 
            <br>iii. Originals and three (3) photocopies of all the academic certificates specified in your application form.
            <br>iv. Original and photocopy of your birth Certificate or Sworn declaration of age.
            <br>v. Three(3) recent passport-size photograph.
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-size: 15px; font-family: Verdana;">
            The College also reserves the right to withdraw your admission whenever it is discovered that you have 
given false information to the school or falsified any results or records. You are advised to proceed for 
registration at the study centre indicated above and receive further information about your programme 
and the school.

            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-size: 15px; font-family: Verdana;">
            Accept my congratulations.
            <br>
            <img src="./images/img8.jpg" width="165">
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-size: 15px; font-family: Verdana;">
           <b> Mr Kasimawo Ramoni S. TEFL, FDM</b>
<br><i>MA, Eng., PGD TESL (BUK); Dip DTP(imti/aau), BA (Hons) Eng. (LASU)</i>
<br><b><i>Registrar</i></b></p>

            
          </font>
          <br>
          <br>
          <br>
          <center><input type="button" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>
      <br><br><br>
      </form>
    </body>
</html>
