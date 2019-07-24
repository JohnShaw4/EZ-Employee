<?php

include_once 'includes/dbh.inc.php';
session_start();

?>

<!DOCTYPE html>
<html>
   <head>
      <title>EZ Employee</title>
     <link rel="stylesheet" type="text/css" href="CSS2.css">
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
         <a id="Register" onclick="showRegisterTab();"><strong>Register</strong></a>
         <a id="Login" onclick="showLoginTab();">Login</a>
         <a id="Profile" onclick="showProfileTab();">Profile</a>
      </div>
         <hr />
      <div id="RegisterSection">
         <section>
            <div>
               <h2>Registration Form - Part 1</h2>
                  <form class="signup-form" action="includes/signup1.inc.php" method="POST" enctype="multipart/form-data">
                  <p>Well done <?php echo "<strong>".$_SESSION['u_first']." ".$_SESSION['u_last']."</strong>"; ?>, You have successfully made your account and logged in. Now you will need to answer the following questions to begin devloping your profile.<r><br></p>
                  <?php
                      if (isset($_GET['signup'])){
                        echo '<div class="a">There were some invalid fields:<ul>';
                       if (strpos($_GET['signup'], 'license') !== false){
                        echo '<li>No drivers license option selected';
                       }
                       if (strpos($_GET['signup'], 'car') !== false){
                        echo '<li>No car access option selected';
                       }
                       if (strpos($_GET['signup'], 'workstat') !== false){
                        echo '<li>No work status option selected';
                       }
                       if (strpos($_GET['signup'], 'edustat') !== false){
                        echo '<li>No education status option selected';
                       }
                       if (strpos($_GET['signup'], 'crim') !== false){
                        echo '<li>No criminal charges option selected';
                       }
                       if (strpos($_GET['signup'], 'honest') !== false){
                        echo '<li>No honesty option selected';
                       } else if (strpos($_GET['signup'], 'hinvonest') !== false){
                        echo '<li>Must agree to honesty';
                      }
                       if (strpos($_GET['signup'], 'elig') !== false){
                        echo '<li>No eligibility option selected';
                       }
                       if (strpos($_GET['signup'], 'med') !== false){
                        echo '<li>No medical option selected';
                       }
                       if (strpos($_GET['signup'], 'perm') !== false){
                        echo '<li>No background check option selected';
                       } else if (strpos($_GET['signup'], 'pinverm') !== false){
                        echo '<li>Must agree to background check';
                      }
                      echo '</ul></div><br>';
                    }
                  ?>
                     <strong>What type of drivers license do you have?</strong>
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'license') !== false){
                        echo '<span style="color: red">   <br><strong>Must select an option</strong></span>';
                       }
                    }
                    ?>
                     <br>
                     <input type="radio" name="license" value="Full"> Full<br>
                     <input type="radio" name="license" value="Restricted"> Restricted<br>
                     <input type="radio" name="license" value="Learners"> Learners<br>
                     <input type="radio" name="license" value="None"> None<br><br>
                     <strong>What is your access to a vehicle?</strong>
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'car') !== false){
                        echo '<span style="color: red">   <br><strong>Must select an option</strong></span>';
                       }
                    }
                    ?>
                     <br>
                     <input type="radio" name="car" value="Own my own"> I own my own car<br>
                     <input type="radio" name="car" value="Have access"> I don't own one but have constant acess to one<br>
                     <input type="radio" name="car" value="No acess or car"> I don't own one or have access to a car<br>
                   <br><strong>What is your current work status?</strong>
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'workstat') !== false){
                        echo '<span style="color: red">   <br><strong>Must select an option</strong></span>';
                       }
                    }
                    ?>
                   <br>
                   <input type="radio" name="workstat" value="Employed"> Employed<br>
                   <input type="radio" name="workstat" value="Unemployed"> Unemployed<br><br>
                   <strong>What is your current education status?</strong>
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'edustat') !== false){
                        echo '<span style="color: red">   <br><strong>Must select an option</strong></span>';
                       }
                    }
                    ?>
                   <br>
                   <input type="radio" name="edustat" value="University Graduate"> University Graduate<br>
                   <input type="radio" name="edustat" value="University Student"> University Student<br>
                   <input type="radio" name="edustat" value="School Graduate"> School Graduate<br>
                   <input type="radio" name="edustat" value="School Student"> School Student<br><br>
                  <strong>Do you have any criminal convictions?</strong>
                    <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'crim') !== false){
                        echo '<span style="color: red">   <br><strong>Must select an option</strong></span>';
                       }
                    }
                    ?>
                  <br>
                  <input type="radio" name="crim" value="Yes"> Yes<br>
                  <input type="radio" name="crim" value="No"> No<br>
                  <br><strong>Do you agree that everything you have submitted in this form is true? And if it is found that this isn't the case, it will result in legal action?</strong>
                    <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'honest') !== false){
                        echo '<span style="color: red">   <br><strong>Must select an option</strong></span>';
                       } else if (strpos($_GET['signup'], 'hinvonest') !== false){
                        echo '<span style="color: red">   <br><strong>You must select yes to continue</strong></span>';
                      }
                    }
                    ?>
                  <br>
                  <input type="radio" name="honest" value="Yes"> Yes<br>
                  <input type="radio" name="honest" value="No"> No<br>
                  <br><strong>What is your eligibility to work in New Zealand?</strong>
                    <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'elig') !== false){
                        echo '<span style="color: red">   <br><strong>Must select an option</strong></span>';
                       }
                    }
                    ?>
                  <br>
                  <input type="radio" name="elig" value="New Zealand/Australian Citizen"> New Zealand/Australian Citizen<br>
                  <input type="radio" name="elig" value="New Zealand/Australian Permanent Resident"> New Zealand/Australian Permanent Resident<br>
                  <input type="radio" name="elig" value="Work Visa"> Work Visa<br>
                  <br><strong>Do you have any medical conditions that will effect your work?</strong>
                    <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'med') !== false){
                        echo '<span style="color: red">   <br><strong>Must select an option</strong></span>';
                       }
                    }
                    ?>
                  <br>
                  <input type="radio" name="med" value="Yes"> Yes<br>
                  <input type="radio" name="med" value="No"> No<br>
                  <br><strong>Do you give permission for these details and your criminal record to be checked?</strong>
                    <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'perm') !== false){
                        echo '<span style="color: red">  <br><strong>Must select an option</strong></span>';
                       } else if (strpos($_GET['signup'], 'pinverm') !== false){
                        echo '<span style="color: red">   <br><strong>You must select yes to continue</strong></span>';
                      }
                    }
                    ?>
                  <br>
                  <input type="radio" name="perm" value="Yes"> Yes<br>
                  <input type="radio" name="perm" value="No"> No<br><br>
                  <br><br>
                  <button type="submit" name="submit">Next</button>
            </div>
         </section>
      </div>
   </body>
</html>