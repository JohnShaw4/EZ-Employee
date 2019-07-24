<?php

include_once 'includes/dbh.inc.php';
session_start();

?>

<!DOCTYPE html>
<html>
   <head>
      <title>EZ Employee</title>
     <link rel="stylesheet" type="text/css" href="CSS.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="JSLASTONE.js"></script>
      <link rel="icon" type="image/png" href="favicon.png">
   </head>
   <body>
      <div class="header">
         <img src="capture.png" alt="logo">
      </div>
      <br>
      <div class="socials">
         <a href="#" class="fa fa-facebook" onclick="openFB()"></a>
         <a href="#" class="fa fa-twitter" onclick="openTwit()"></a>
         <a href="#" class="fa fa-instagram" onclick="openInst()"></a>
      </div>
      <div class="menu">
         <a id="Home" onclick="showHomeTab();">Home</a>
         <a id="Register" onclick="showRegisterTab();">Register</a>
         <a id="Login" onclick="showLoginTab();">Login</a>
         <a id="Profile" onclick="showProfileTab();"><strong>Profile</strong></a>
      </div>
         <hr />
      <div id="ProfileSection">
         <section>
            <?php
               if (isset($_SESSION['u_id'])){
                $id = $_SESSION['u_id'];
                $sql = $conn->query("SELECT * FROM users");
                if ($sql->num_rows > 0) {
                  while ($data = $sql->fetch_array()){
                    echo '<img src="includes/uploads/';
                    echo $data['user_file'];
                    echo '" height="200" width="250" align="left" hspace=20>'; 
                    echo '<font size="20"><strong>';
                    echo $data['user_first']; 
                    echo ' ';
                    echo $data['user_last'];
                    echo '</font><br><br>E</strong>: ';
                    echo $data['user_email'];
                    echo '<br><strong>Ph</strong>: ';
                    echo $data['user_phone']; 
                    echo '<br><strong>D.O.B</strong>: ';
                    echo $data['user_day'];
                    echo '/';
                    echo $data['user_month'];
                    echo '/';
                    echo $data['user_year'];
                    echo '<br><strong>Gender</strong>: ';
                    echo $data['user_gender']; 
                    echo '<br><strong>Address</strong>: ';
                    echo $data['user_streetnameandnum'];
                    echo ', ';
                    echo $data['user_suburb'];
                    echo ', ';
                    echo $data['user_city']; 
                    echo '. ';
                    echo $data['user_post'];
                    echo '<br><br><br><p id="otherdetails">';
                    echo '<strong>Bio</strong>:<br>';
                    echo $data['user_about'];
                    echo '<br><br><strong>Why hire me?</strong>:<br>';
                    echo $data['user_whyhire'];
                    echo '<br><br><strong>Video Resume</strong>:<br><br><video width="320" height="240" controls>';
                    echo '<source src="includes/uploads/';
                    echo $data['user_vid'];
                    echo '" type="video/mp4">Your browser does not support this video tag.</video>';
                    echo '<br><br><strong>Link to CV</strong>: ';
                    echo '<a href="includes/uploads/';
                    echo $data['user_cv'];
                    echo '" target="_blank">Here</a>';
                    echo '<br><br><strong>Drivers License</strong>: ';
                    echo $data['user_license'];
                    echo '<br><strong>Employment Status</strong>: ';
                    echo $data['user_workstat'];
                    echo '<br><strong>Education Status</strong>: ';
                    echo $data['user_edustat'];
                    echo '<br><strong>Access to vehicle</strong>: ';
                    echo $data['user_car'];
                    echo '<br><strong>Any criminal convictions?</strong>: ';
                    echo $data['user_crim'];
                    echo '<br><strong>Eligibility to work in NZ</strong>: ';
                    echo $data['user_elig'];
                    echo '<br><strong>Desired Work Suburbs</strong>: ';
                    echo $data['user_test'];
                    echo '<br><strong>Desired Work Fields</strong>: ';
                    echo $data['user_workfield'];
                  }
               } else {
                  echo 'Log in to see your profile!';
               }
             }
            ?>
         </section>
      </div>
   </body>
</html>