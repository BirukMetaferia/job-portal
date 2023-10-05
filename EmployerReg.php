
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
-->
    </style>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body id="www-url-cz">
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						["minlen=1",
		"Please Enter Company Name"
						  ]
					
                     ],
                   [//Contact Person
						  ["minlen=1",
		"Please Enter Contact Person"
						  ]
						  
                   ],
				   [//Address
						["minlen=1",
		"Please Enter Address"
						  ] 					  				
                   ],
                   [//City
						["minlen=1",
		"Please Enter City"
						  ] 					  				
                   ],
				   [//Email
						  
						["minlen=1",
		"Please Enter Email "
						  ], 
						  ["email",
		"Please Enter valid email "
						  ]  
                   ],
				   [//Mobile
						   ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ] 	  
                   ],
				   [//Area
						  
					  ["minlen=1",
		"Please Enter Area of Work"
						  ] 	
								 
						  
                   ],
				
				   [//User
						  ["minlen=1",
		"Please Enter UserName "
						  ]
						 
						  
                   ],
				   [//Password
						["minlen=1",
		"Please Enter Password "
						  ]  
						  
						  
                   ],
				    [//Que
						  
						
                   ],
				    [//Answer
						  
						  ["minlen=1",
		"Please Enter Answer "
						  ]
						  
                   ]
				   
            ];
</SCRIPT>
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
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
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
            
               <div class="logine">
               <h2 class="titlefor">Employer Registration Form</h2>
               <img id="pic" class="size" src="design/logos.jpg" alt="Company Logo" >
                <form action="EmployeInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  
                  
                    
                      Company Name:
                      <span id="sprytextfield3">
                        <label class="emregl">
                        <input type="text" name="txtName" id="txtName" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Name</span></span></td>
                    
                   
                    <br>
                     Contact Person:
                      <span id="sprytextfield8">
                        <label class="emregl">
                        <input type="text" name="txtPerson" id="txtPerson" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Contact Person</span></span>
                      <br>
                      Address:
                      <span id="sprytextarea1">
                        <label  class="emregl">
                        <textarea class="txtad" name="txtAddress" id="txtAddress" cols="45" rows="1"></textarea>
                        </label>
                      <span class="textareaRequiredMsg">Enter Address</span></span>
                      <br>
                      City:
                      <span id="sprytextfield4">
                        <label  class="emregl">
                        <input type="text" name="txtCity" id="txtCity" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter City</span></span>
                      <br>
                      Email:
                     <span id="sprytextfield5">
                        <label class="emregl">
                        <input type="text" name="txtEmail" id="txtEmail" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Email</span></span>
                      
                      <br>
                      Mobile:
                      <span id="sprytextfield6">
                        <label class="emregl">
                        <input type="text" name="txtMobile" id="txtMobile" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Mobile</span></span>
                      <br>
                      Area of Work: 
                      <span id="sprytextfield7">
                      <label class="emregl">
                      <input type="text" name="txtAreaWork" id="txtAreaWork" />
                      </label>
                      <span class="textfieldRequiredMsg">Enter Area of Work</span></span>
                      <br>
                     User Name:
                    <span id="sprytextfield9">
                        <label class="emregl">
                        <input type="text" name="txtUserName" id="txtUserName" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter User Name</span></span>
                      <br>
                      Password:
                      <label class="emregl"><span id="sprytextfield10">
                        <input type="password" name="txtPassword" id="txtPassword" />
                      <span class="textfieldRequiredMsg">Enter Password</span></span></label>
                      <br>
                      Security Question:
                     <select name="cmbQue" id="cmbQue">
                        <option>What is Your Pet Name?</option>
                       <option selected="selected">Who is Your Favourite Person?</option>
                        <option>What is the Name of Your First School?</option>
                                                                  </select>
                                                                  <br>
                      Answer:
                    <span id="sprytextfield11">
                      <label class="emregl">
                      <input type="text" name="txtAnswer" id="txtAnswer" />
                      </label>
                      <span class="textfieldRequiredMsg">Enter Answer.</span></span>
                      <br>
                      <label class="emregl">
                        <div align="center">
                          <input type="submit" name="button2" id="button2" value="Submit" />
                          </div>
                      </label>
                   
                 </form>
              </div>
              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

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

<script type="text/javascript" src="SpryAssets/pic.js">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
//-->

</script>
</body>
</html>
