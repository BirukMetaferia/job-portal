


                <h2><span><a href="#">Welcome <?php echo $_SESSION['$UserName_emp'];?></a></span></h2>
               <?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","sourcecodester_jobportaldb");

$sql = "select * from employer_reg where EmployerId ='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql) or die( mysqli_error($con));
// Loop through each records 
$row = mysqli_fetch_array($result)
?>         <div class="prof">
                <table  width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Company ID:</strong></td>
                    <td><?php echo $row['EmployerId'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Company Name:</strong></td>
                    <td><?php echo $row['CompanyName'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Contact Person:</strong></td>
                    <td><?php echo $row['ContactPerson'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Address:</strong></td>
                    <td><?php echo $row['Address'];?></td>
                  </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td><?php echo $row['City'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td><?php echo $row['Mobile'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Area of Work:</strong></td>
                    <td><?php echo $row['Area_Work'];?></td>
                  </tr>
                  <tr>
                    <td><strong>User Name:</strong></td>
                    <td><?php echo $row['UserName'];?></td>
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td><a href="EditProfile.php?EmployerId=<?php echo $row['EmployerId']; ?>">Edit Profile</a></td>
                  </tr>
                </table>
              </div>
                <?php
                mysqli_close($con);
                ?>
              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
        



