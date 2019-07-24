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
         <a id="Login" onclick="showLoginTab();"><strong>Login</strong></a>
         <a id="Profile" onclick="showProfileTab();">Profile</a>
      </div>
         <hr />
      <div id="LoginSection">
         <section>
            <div class="nav-login">
               <?php
                  if (isset($_SESSION['u_id'])) {
                     echo '<h3>You are logged in as '.$_SESSION['u_first'].' '.$_SESSION['u_last'].'<h3><br> <form action="includes/logout.inc.php" method="POST">
                              <button type="submit" name="submit">Logout</button>
                           </form>';
                  } else {
                     if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'success') !== false){
                        echo 'You have registered successfully! Now you can log in and develop your profile even further!';
                       }
                    }
                     echo '<h3>Login to your account here!<h3><br><br><form action="includes/login.inc.php" method="POST">
                              <input type="text" name="uid" placeholder="Username/e-mail">
                              <input type="password" name="pwd" placeholder="Password">
                              <button type="submit" name="submit">Login</button>
                           </form>';
                  }
               ?>
            </div>
         </section>
      </div>