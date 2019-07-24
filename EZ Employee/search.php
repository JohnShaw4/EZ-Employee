<html>
   <head>
      <title>EZ Employee</title>
    <link rel="stylesheet" type="text/css" href="EmployerCSS.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="JSLASTONE.js"></script>
      <link rel="icon" type="image/png" href="favicon.png">
   </head>
   <body>
      <div class="header">
         <img src="capture.png" alt="logo">
         <a href="#" class="fa fa-facebook" onclick="openFB()"></a>
         <a href="#" class="fa fa-twitter" onclick="openTwit()"></a>
         <a href="#" class="fa fa-instagram" onclick="openInst()"></a>
      </div>
      <br>
   </body>
</html>

<?php

echo '<form method="post" action="search.php">
                  Work Locations:
                <select name="test">
                  <option value="%">Any</option>
                  <option value="Whenuapai">Whenuapai</option>
                  <option value="Murrays Bay">Murrays Bay</option>
                </select> Work Fields:
                <select name="workfield">
                  <option value="%">Any</option>
                  <option value="Sports">Sports</option>
                  <option value="Bar">Bar</option>
                  <option value="Fast Food">Fast Food</option>
                </select> Drivers License:
                <select name="license">
                  <option value="%">Any</option>
                  <option value="Full">Full</option>
                  <option value="Restricted">Restricted</option>
                  <option value="Learners">Learners</option>
                  <option value="None">None</option>
                </select>
                <br><br><button type="submit" name="submit">Find</button></form><br>';


if (isset($_POST['submit'])) {

  include 'includes/dbh.inc.php';
  $license = mysqli_real_escape_string($conn, $_POST['license']);
  $test = mysqli_real_escape_string($conn, $_POST['test']);
  $workfield = mysqli_real_escape_string($conn, $_POST['workfield']);

  $sql = $conn->query("SELECT * FROM users WHERE user_license LIKE '$license'
                      AND user_test LIKE '%$test%'
                      AND user_workfield LIKE '%$workfield%'");

  if ($sql->num_rows > 0) {
    echo '<div id="showProfile"><section><table>';
    echo '<tr><th>Profile Picture</th><th>Name</th><th>D.O.B</th><th>Work Locations</th><th>Work Fields</th><th>Drivers License</th><tr>';
    while ($data = $sql->fetch_array()){
     $passToFunc = '\''.$data['user_first'].'\''.',\''.$data['user_last'].'\''.',\''.$data['user_file'].'\''.',\''.$data['user_email'].'\''.',\''.$data['user_phone'].'\''.',\''.$data['user_day'].'\''.',\''.$data['user_month'].'\''.',\''.$data['user_year'].'\''.',\''.$data['user_gender'].'\''.',\''.$data['user_streetnameandnum'].'\''.',\''.$data['user_suburb'].'\''.',\''.$data['user_city'].'\''.',\''.$data['user_post'].'\''.',\''.$data['user_about'].'\''.',\''.$data['user_whyhire'].'\''.',\''.$data['user_vid'].'\'';
      echo '<tr>';
      echo '<td><img src="includes/uploads/'.$data['user_file'].'" height="70" width="70" hspace=5></td>';
      echo  '<td onclick="test('.$passToFunc.')">';
      echo $data['user_first'].' '.$data['user_last']."</td>";
      echo '<td>'.$data['user_day'].'/'.$data['user_month'].'/'.$data['user_year'].'</td>';
      echo '<td>'.$data['user_test'].'</td>';
      echo '<td>'.$data['user_workfield'].'</td>';
      echo '<td>'.$data['user_license'].'</td></tr>';
    }
    echo '</table></section></div>';
  } else {
    echo "Your search didn't get any matches, try again!";
  }
} else {
  include 'includes/dbh.inc.php';

  $sql = $conn->query("SELECT * FROM users");
  if ($sql->num_rows > 0) {
    echo '<div id="showProfile"><section><table>';
    echo '<tr><th>Profile Picture</th><th>Name</th><th>D.O.B</th><th>Work Locations</th><th>Work Fields</th><th>Drivers License</th><tr>';
  while ($data = $sql->fetch_array()){
     $passToFunc = '\''.$data['user_first'].'\''.',\''.$data['user_last'].'\''.',\''.$data['user_file'].'\''.',\''.$data['user_email'].'\''.',\''.$data['user_phone'].'\''.',\''.$data['user_day'].'\''.',\''.$data['user_month'].'\''.',\''.$data['user_year'].'\''.',\''.$data['user_gender'].'\''.',\''.$data['user_streetnameandnum'].'\''.',\''.$data['user_suburb'].'\''.',\''.$data['user_city'].'\''.',\''.$data['user_post'].'\''.',\''.$data['user_about'].'\''.',\''.$data['user_whyhire'].'\''.',\''.$data['user_vid'].'\'';
      echo '<tr>';
      echo '<td><img src="includes/uploads/'.$data['user_file'].'" height="70" width="70" hspace=5></td>';
      echo  '<td onclick="test('.$passToFunc.')">';
      echo $data['user_first'].' '.$data['user_last']."</td>";
      echo '<td>'.$data['user_day'].'/'.$data['user_month'].'/'.$data['user_year'].'</td>';
      echo '<td>'.$data['user_test'].'</td>';
      echo '<td>'.$data['user_workfield'].'</td>';
      echo '<td>'.$data['user_license'].'</td></tr>';
    }
    echo '</table></section></div>';
  } else {
    echo 'There is no users in the database! :(';
  }
}
?>