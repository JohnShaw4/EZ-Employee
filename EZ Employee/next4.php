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
               <h2>Registration Form - Part 3</h2>
                  <?php
                      if (isset($_GET['signup'])){
                        echo '<div class="a">There were some invalid fields:<ul>';
                       if (strpos($_GET['signup'], 'about') !== false){
                        echo '<li>No description entered';
                       }
                       if (strpos($_GET['signup'], 'whyhire') !== false){
                        echo '<li>No why hire enterd';
                       }
                      echo '</ul></div><br>';
                    }
                  ?>
                  <form class="signup-form" action="includes/signup3.inc.php" method="POST" enctype="multipart/form-data">
                    <p>In this section we want to get to know you. It is vital that potential employers know as much about you as they can before they bring you in for an interview. Here you can upload videos, profile pictures, your cv and more<br><br></p>
                   <strong>Describe yourself:</strong>
                    <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'about') !== false){
                        echo '<span style="color: red">   <br><strong>Must fill this out</strong></span>';
                       }
                    }
                    ?>
                    <textarea name="aboutme"></textarea>
                   <strong>Why should you be hired?</strong>
                    <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'whyhire') !== false){
                        echo '<span style="color: red">   <br><strong>Must fill this out</strong></span>';
                       }
                    }
                    ?>
                   <textarea name="whyhire"></textarea>
                  <strong>Profile Image:</strong> <input type="file" name="file">
                  <br><br><strong>Upload CV:</strong> <input type="file" name="cv">
                  <br><br><strong>Upload Video:</strong> <input type="file" name="vid">
                  <br><br>
                  <button type="submit" name="submit">Next</button>
            </div>
         </section>
      </div>
   </body>
</html>