   <?php


if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$about = mysqli_real_escape_string($conn, $_POST['aboutme']);
	$whyhire = mysqli_real_escape_string($conn, $_POST['whyhire']);


	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileType = $_FILES['file']['type'];
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$fileNameNew = uniqid('', true).".".$fileActualExt;
	$fileDestination = 'uploads/'.$fileNameNew;
	move_uploaded_file($fileTmpName, $fileDestination);

	$cv = $_FILES['cv'];
	$cvName = $_FILES['cv']['name'];
	$cvTmpName = $_FILES['cv']['tmp_name'];
	$cvSize = $_FILES['cv']['size'];
	$cvType = $_FILES['cv']['type'];
	$cvExt = explode('.', $cvName);
	$cvActualExt = strtolower(end($cvExt));

	$cvNameNew = uniqid('', true).".".$cvActualExt;
	$cvDestination = 'uploads/'.$cvNameNew;
	move_uploaded_file($cvTmpName, $cvDestination);

	$vid = $_FILES['vid'];
	$vidName = $_FILES['vid']['name'];
	$vidTmpName = $_FILES['vid']['tmp_name'];
	$vidSize = $_FILES['vid']['size'];
	$vidType = $_FILES['vid']['type'];
	$vidExt = explode('.', $vidName);
	$vidActualExt = strtolower(end($vidExt));

	$vidNameNew = uniqid('', true).".".$vidActualExt;
	$vidDestination = 'uploads/'.$vidNameNew;
	move_uploaded_file($vidTmpName, $vidDestination);
	$url = "Location: ../next4.php?signup=";
	$errorcheck = false;
	//Error handlers
	//Check for empty fields

	if (empty($about)) {
		$url = $url."about";
		$errorcheck = true;
	}
				
	if (empty($whyhire)) {
		$url = $url."whyhire";
		$errorcheck = true;
	}

	if ($errorcheck === true){
		header($url);
		exit();
	} else {
			session_start();
			$currentUserId = $_SESSION['u_id'];
		//Insert the user into the database
		$sql = "UPDATE users SET user_about = '$about', user_whyhire = '$whyhire', user_file = '$fileNameNew', user_cv = '$cvNameNew', user_vid = '$vidNameNew' WHERE user_id = '$currentUserId'";
		mysqli_query($conn, $sql);
		header("Location: ../profile.php?signup=success");
		exit();
	} 
}