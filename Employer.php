
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <title>job portal</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/hole.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style2 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">

<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> 

        <!-- Content -->
        <div id="content">

           
            

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            

            <hr class="noscreen" />

            <!-- Article -->
           
<div class="articless">
              
            <h2><span><a href="#">Our Employers</a></span></h2>
               

                <p>
                
  <table width="100%"  border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
      <tr>
    <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Company Name</strong></div></th>
    <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Contact Person</strong></div></th>
    <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Email</strong></div></th>
     </tr>
     <?php
     // Establish Connection with Database
     $con = mysqli_connect("localhost","root","","sourcecodester_jobportaldb");

     // Specify the query to execute
    $sql = "select * from employer_reg where Status='Confirm'";
    // Execute query
    $result = mysqli_query($con,$sql);
    // Loop through each records
    //var_dump($result);
    while($row = mysqli_fetch_array($result))
    {
    $CompanyName=$row['CompanyName'];
    $ContactPerson=$row['ContactPerson'];
    $Email=$row['Email'];

    ?>
    <tr>
    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CompanyName;?></strong></div></td>
    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $ContactPerson;?></strong></div></td>
    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
    </tr>
    <?php
    }
    // Retrieve Number of records returned
    $records = mysqli_num_rows($result);
    ?>

    <?php
    // Close the connection
    mysqli_close($con);
    ?>
  </table>
    </td>
    </tr>
  </table>
                </p>

               
              <p class="btn-more box noprint">&nbsp;</p>
</div> <!-- /article -->
          <div class="subart"><div class="upper">Those are our Employer listed in the table.They can registered themself on the web portal and then they can upload information of various job vacancies in their organization. </div>
             <div class="lower" id="lower">Employeer can view the applications of Job Seeker and send call latter to the job seekers.</div>
            <button class="more" onclick="toggll()">Read_more</button>
           </div>

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->
<script>
function toggll(){
            var div=document.getElementById("lower")
            


            if (div.style.display === "none"){
              div.style.display = "block";
             
            }
            else{
              div.style.display = "none";
             
            }

          }</script>

</body>
</html>
