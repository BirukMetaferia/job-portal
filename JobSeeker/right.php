

</style>


<div id="logod" class="profiles">
   
 
    <?php 
  include "Profile.php"
    ?>
    <li ><a class="logouts" href="session_destroy.php">Logout<span class="tab-l"></span><span class="tab-r"></span></a></li>
</div>

<script type="text/javascript">
       
          function toggl(){
            var div=document.getElementById("logod")
            var btn=document.getElementById("logoi")


            if (div.style.display === "none"){
              div.style.display = "block";
              btn.style.marginRight=30;

              
            }
            else{
              div.style.display = "none";
              
            }

          }
          

        </script>
