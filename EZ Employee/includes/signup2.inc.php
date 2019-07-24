<?php


if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$testarr = $_POST['test'];
	$test = implode(" - ", $testarr);

	$workfieldarr = $_POST['workfield'];
	$workfield = implode(" - ", $workfieldarr);

	$url = "Location: ../next3.php?signup=";
	$errorcheck = false;
	//Error handlers
	//Check for empty fields

	if (empty($test)) {
		$url = $url."test";
		$errorcheck = true;
	}

	if (empty($workfield)) {
		$url = $url."workfield";
		$errorcheck = true;
	}

	if ($errorcheck === true){
		header($url);
		exit();
	} else {
			session_start();
			$currentUserId = $_SESSION['u_id'];
		//Insert the user into the database
		$sql = "UPDATE users SET user_test = '$test', user_workfield = '$workfield' WHERE user_id = '$currentUserId'";
		mysqli_query($conn, $sql);
		header("Location: ../next4.php");
		exit();
	} 
}