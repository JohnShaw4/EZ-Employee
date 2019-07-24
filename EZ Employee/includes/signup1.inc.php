<?php


if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$license = mysqli_real_escape_string($conn, $_POST['license']);
	$workstat = mysqli_real_escape_string($conn, $_POST['workstat']);
	$edustat = mysqli_real_escape_string($conn, $_POST['edustat']);
	$car = mysqli_real_escape_string($conn, $_POST['car']);
	$crim = mysqli_real_escape_string($conn, $_POST['crim']);
	$honest = mysqli_real_escape_string($conn, $_POST['honest']);
	$elig = mysqli_real_escape_string($conn, $_POST['elig']);
	$med = mysqli_real_escape_string($conn, $_POST['med']);
	$perm = mysqli_real_escape_string($conn, $_POST['perm']);

	$url = "Location: ../next2.php?signup=";
	$errorcheck = false;
	//Error handlers
	//Check for empty fields

	if (empty($license)) {
		$url = $url."license";
		$errorcheck = true;
	}

	if (empty($car)) {
		$url = $url."car";
		$errorcheck = true;
	}

	if (empty($workstat)) {
		$url = $url."workstat";
		$errorcheck = true;
	}

	if (empty($edustat)) {
		$url = $url."edustat";
		$errorcheck = true;
	}

	if (empty($crim)) {
		$url = $url."crim";
		$errorcheck = true;
	}

	if (empty($honest)) {
		$url = $url."honest";
		$errorcheck = true;
	} else if ($honest === "No") {
		$url = $url."hinvonest";
		$errorcheck = true;
	}

	if (empty($elig)) {
		$url = $url."elig";
		$errorcheck = true;
	}

	if (empty($med)) {
		$url = $url."med";
		$errorcheck = true;
	}

	if (empty($perm)) {
		$url = $url."perm";
		$errorcheck = true;
	} else if ($perm === "No"){
		$url = $url."pinverm";
		$errorcheck = true;
	}

	if ($errorcheck === true){
		header($url);
		exit();
	} else {
			session_start();
			$currentUserId = $_SESSION['u_id'];
		//Insert the user into the database
		$sql = "UPDATE users SET user_license = '$license', user_workstat = '$workstat', user_edustat = '$edustat', user_car = '$car', user_crim = '$crim', user_honest = '$honest', user_elig = '$elig', user_med = '$med', user_perm = '$perm' WHERE user_id = '$currentUserId'";
		mysqli_query($conn, $sql);
		header("Location: ../next3.php");
		exit();
	} 
}