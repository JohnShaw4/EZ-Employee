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
               <h2>Sign up to EZ Employee</h2>
                  <p>This is the start of your EZ Employee journey! Make an account by filling in the following details:</p>
                  <?php
                      if (isset($_GET['signup'])){
                        echo '<div class="a">There were some invalid fields:<ul>';
                        if (strpos($_GET['signup'], 'first') !== false){
                          echo '<li>No first name entered';
                       } else if (strpos($_GET['signup'], 'finvalidirst') !== false){
                        echo '<li>First name is invalid';
                       }
                       if (strpos($_GET['signup'], 'last') !== false){
                        echo '<li>No last name entered';
                       } else if (strpos($_GET['signup'], 'linvalidast') !== false){
                        echo '<li>Last name is invalid';
                       }
                       if (strpos($_GET['signup'], 'email') !== false){
                        echo '<li>No email address entered';
                       } else if (strpos($_GET['signup'], 'einvalidmail') !== false){
                        echo '<li>Email address is invalid';
                       } else if (strpos($_GET['signup'], 'etakenmail') !== false){
                        echo '<li>Email address is already taken';
                       }
                       if (strpos($_GET['signup'], 'username') !== false){
                        echo '<li>No username entered';
                       } else if (strpos($_GET['signup'], 'utakensername') !== false){
                        echo '<li>Username is already taken';
                       }
                       if (strpos($_GET['signup'], 'password') !== false){
                        echo '<li>No password entered';
                       } else if (strpos($_GET['signup'], 'pinvassword') !== false){
                        echo '<li>Password is invalid';
                       } else if (strpos($_GET['signup'], 'pmatchassword') !== false){
                        echo '<li>Your passwords don\'t match';
                      }
                       if (strpos($_GET['signup'], 'phone') !== false){
                        echo '<li>No phone number entered';
                       } else if (strpos($_GET['signup'], 'ptakenhone') !== false){
                        echo '<li>Phone number is already taken';
                       }
                       if (strpos($_GET['signup'], 'address') !== false){
                        echo '<li>No full address entered';
                       }
                       if (strpos($_GET['signup'], 'DOB') !== false){
                        echo '<li>No date of birth entered';
                       }
                       if (strpos($_GET['signup'], 'gender') !== false){
                        echo '<li>No gender selected';
                       }
                      echo '</ul></div>';
                    }
                  ?>
                  <form class="signup-form" action="includes/signup.inc.php" method="POST" enctype="multipart/form-data">
                     <strong>First Name:</strong>
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'first') !== false){
                        echo '<span style="color: red">   <br><strong>Must enter a first name</strong></span>';
                       } else if (strpos($_GET['signup'], 'finvalidirst') !== false){
                        echo '<span style="color: red">   <br><strong>Invalid first name</strong></span>';
                       }
                    }
                    ?>
                     <input type="text" name="first" class="typeinput">
        
                     <strong>Last Name:</strong>
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'last') !== false){
                        echo '<span style="color: red">   <br><strong>Must enter a last name</strong></span>';
                       } else if (strpos($_GET['signup'], 'linvalidast') !== false){
                        echo '<span style="color: red">   <br><strong>Invalid last name</strong></span>';
                       }
                    }
                    ?>
                    <input type="text" name="last" class="typeinput">

                     <strong>Email Address:</strong>
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'email') !== false){
                        echo '<span style="color: red">   <br><strong>Must enter an email address</strong></span>';
                       } else if (strpos($_GET['signup'], 'einvalidmail') !== false){
                        echo '<span style="color: red">   <br><strong>Invalid email</strong></span>';
                       } else if (strpos($_GET['signup'], 'etakenmail') !== false){
                        echo '<span style="color: red">   <br><strong>Email is already taken</strong></span>';
                       }
                    }
                    ?>
                    <input type="text" name="email" class="typeinput">

                     <strong>Username:</strong>
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'username') !== false){
                        echo '<span style="color: red">   <br><strong>Must enter a username</strong></span>';
                       } else if (strpos($_GET['signup'], 'utakensername') !== false){
                        echo '<span style="color: red">   <br><strong>Username is already taken</strong></span>';
                       }
                    }
                    ?>
                      <input type="text" name="uid" class="typeinput">

                     <strong>Password</strong>: <br>Must be at least 8 characters, containing at least 1 capital letter and 1 number
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'password') !== false){
                        echo '<span style="color: red">   <br><strong>Must enter a password</strong></span>';
                       } else if (strpos($_GET['signup'], 'pinvassword') !== false){
                        echo '<span style="color: red">   <br><strong>Password is invalid</strong></span>';
                       } else if (strpos($_GET['signup'], 'pmatchassword') !== false){
                        echo '<span style="color: red">   <br><strong>Passwords don\'t match</strong></span>';
                      }
                    }
                    ?>
                     <input type="password" name="pwd" class="typeinput">

                     <strong>Confirm Password:</strong>
                     <input type="password" name="ndpwd" class="typeinput">

                     <strong>Mobile Number:</strong>
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'phone') !== false){
                        echo '<span style="color: red">   <br><strong>Must enter a phone number</strong></span>';
                       } else if (strpos($_GET['signup'], 'ptakenhone') !== false){
                        echo '<span style="color: red">   <br><strong>Phone number is already taken</strong></span>';
                       }
                    }
                    ?>
                      <input type="tel" name="phone" class="typeinput">

                     <strong>Address:</strong>
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'address') !== false){
                        echo '<span style="color: red">   <br><strong>Must enter a full address</strong></span>';
                       }
                    }
                    ?>
                      <input type="text" name="address1" placeholder="Street Name and Number" class="typeinput">
                   <input type="text" name="address2" placeholder="Suburb" class="typeinput">
                   <input type="text" name="address3" placeholder="City" class="typeinput">
                   <input type="text" name="address4" placeholder="Postcode" class="typeinput">

                   <strong>Date Of Birth:</strong>
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'DOB') !== false){
                        echo '<span style="color: red">   <br><strong>Must enter a Date of Birth</strong></span>';
                       }
                    }
                    ?>
                    <br>
                   <select name="day">
                    <option value="0">Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                   </select>
                   <select name="month">
                    <option value="0">Month</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                   </select>
                   <select name="year">
                    <option value="0">Year</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                    <option value="1978">1978</option>
                    <option value="1977">1977</option>
                    <option value="1976">1976</option>
                    <option value="1975">1975</option>
                    <option value="1974">1974</option>
                    <option value="1973">1973</option>
                    <option value="1972">1972</option>
                    <option value="1971">1971</option>
                    <option value="1970">1970</option>
                    <option value="1969">1969</option>
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                    <option value="1959">1959</option>
                    <option value="1958">1958</option>
                    <option value="1957">1957</option>
                    <option value="1956">1956</option>
                    <option value="1955">1955</option>
                    <option value="1954">1954</option>
                    <option value="1953">1953</option>
                    <option value="1952">1952</option>
                    <option value="1951">1951</option>
                    <option value="1950">1950</option>
                   </select><br><br>

                     <strong>What is your gender?</strong>
                     <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'gender') !== false){
                        echo '<span style="color: red">   <br><strong>Must select a gender</strong></span>';
                       }
                    }
                    ?>
                     <br>

                     <input type="radio" name="gender" value="Male"> Male<br>
                     <input type="radio" name="gender" value="Female"> Female<br><br>
                  <button type="submit" name="submit">Sign up</button>
                  </form>
            </div>
         </section>
      </div>
   </body>
</html>