        <!-- Right column -->
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/logreg.css">
        <div id="col" class="noprint">
          <center>
          <div id="col-in" >

<!-- About Me -->
<!-- /about-me -->

<hr class="noscreen" />

<!-- Category -->


<div class="login" id="logod">
   
   <img class="imgee" src="design/profile.png">
  
  <form name="form1" method="post" action="login.php">
    
      <span id="sprytextfield1">
            <label class="usern">
              <input class="usern" type="text" name="txtUser" id="txtUser" placeholder="User Name">
            </label>
            <span class="textfieldRequiredMsg">*</span></span>
          <label></label><br><span id="sprytextfield2">
            <label class="usern">
              <input type="password" name="txtPass" id="txtPass" placeholder="Password">
            </label><br>
            <span class="textfieldRequiredMsg">*</span></span><label class="usern">
            <select name="cmbUser" id="cmbUser">
              <option value="JobSeeker">JobSeeker</option>
              <option value="Employer" selected="selected">Employer</option>
              <option value="Administrator">Administrator</option>
            </select>
          </label><br><label>
            <div align="center">
              <input type="submit" name="button" id="button" value="Login">
            </div>
          </label>
          <div class="linko" align="center"><a href="Forget.php"><strong>Forgot Password? </strong></a></div>
          
          <a id="logoi" onclick="toggle()" class="logreg l" href="#">login</a>
           <a class="logreg r" id="logoi" onclick="toggl()" href="#">Register</a>
        
  </form>
</div>
<div class="register" id="logor">
           <a  class="choice" href="EmployerReg.php" >Register as Employer</a>
           <a  class="choice" href="JobSeekerReg.php" >Register as Job_Seeker</a>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <a id="logoi" onclick="toggle()" class="logregg l" href="#">login</a>
           <a class="logregg r" id="logoi" onclick="toggl()" href="#">Register</a>
           
</div>
<br />

<hr class="noscreen" />

<!-- Archive -->


<hr class="noscreen" />

<!-- Links -->

<hr class="noscreen" />
</div>
          </center>
          <!-- /col-in -->
        </div> <!-- /col -->
        <script type="text/javascript">
          <!--
          var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
          var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
          //
          -->
          function toggle(){
            var div=document.getElementById("logod")
            var divd=document.getElementById("logor")

            if (div.style.display === "none"){
              div.style.display = "block";
              divd.style.display = "none";
            }
            else{
              div.style.display = "none";
              divd.style.display = "none";
            }

          }
          function toggl(){
            var div=document.getElementById("logor")
            var divd=document.getElementById("logod")


            if (div.style.display === "none"){
              div.style.display = "block";
              divd.style.display = "none";
            }
            else{
              div.style.display = "none";
              divd.style.display = "none";
            }

          }
          

        </script>