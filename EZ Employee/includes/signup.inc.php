<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$ndpwd = mysqli_real_escape_string($conn, $_POST['ndpwd']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$address1 = mysqli_real_escape_string($conn, $_POST['address1']);
	$address2 = mysqli_real_escape_string($conn, $_POST['address2']);
	$address3 = mysqli_real_escape_string($conn, $_POST['address3']);
	$address4 = mysqli_real_escape_string($conn, $_POST['address4']);
	$day = mysqli_real_escape_string($conn, $_POST['day']);
	$month = mysqli_real_escape_string($conn, $_POST['month']);
	$year = mysqli_real_escape_string($conn, $_POST['year']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);

	$url = "Location: ../next.php?signup=";
	$errorcheck = false;
	//Error handlers
	//Check for empty fields

	if (empty($first)) {
		$url = $url."first";
		$errorcheck = true;
	} else if (!preg_match("/^[a-zA-z]*$/", $first)){
		$url = $url."finvalidirst";
		$errorcheck = true;
	}

	if (empty($last)) {
		$url = $url."last";
		$errorcheck = true;
	} else if (!preg_match("/^[a-zA-z]*$/", $last)){
		$url = $url."linvalidast";
		$errorcheck = true;
	}

	$sql = "SELECT * FROM users WHERE user_email='$email'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if (empty($email)) {
		$url = $url."email";
		$errorcheck = true;
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$url = $url."einvalidmail";
		$errorcheck = true;
	} else if ($resultCheck > 0){
		$url = $url."etakenmail";
		$errorcheck = true;
	}

	$sql1 = "SELECT * FROM users WHERE user_uid='$uid'";
	$result1 = mysqli_query($conn, $sql1);
	$resultCheck1 = mysqli_num_rows($result1);
	if (empty($uid)) {
		$url = $url."username";
		$errorcheck = true;
	} else if ($resultCheck1 > 0){
		$url = $url."utakensername";
		$errorcheck = true;
	}


	if (empty($pwd)) {
		$url = $url."password";
		$errorcheck = true;
	} else if (strlen($pwd) < 8){
		$url = $url."pinvassword";
		$errorcheck = true;
	} else if (0 === preg_match('~[0-9]~', $pwd)){
		$url = $url."pinvassword";
		$errorcheck = true;
	} else if(0 === preg_match('/[A-Z]/', $pwd)){
		$url = $url."pinvassword";
		$errorcheck = true;
	} else if ($pwd !== $ndpwd){
		$url = $url."pmatchassword";
		$errorcheck = true;
	}
			

	$sql2 = "SELECT * FROM users WHERE user_phone='$phone'";
	$result2 = mysqli_query($conn, $sql2);
	$resultCheck2 = mysqli_num_rows($result2);		
	if (empty($phone)) {
		$url = $url."phone";
		$errorcheck = true;
	} else if ($resultCheck2 > 0){
		$url = $url."ptakenhone";
		$errorcheck = true;
	}

	if (empty($gender)) {
		$url = $url."gender";
		$errorcheck = true;
	}

	if (empty($address1)) {
		$url = $url."address";
		$errorcheck = true;
	}
	if (empty($address2)) {
		$url = $url."address";
		$errorcheck = true;
	}
	if (empty($address3)) {
		$url = $url."address";
		$errorcheck = true;
	}
	if (empty($address4)) {
		$url = $url."address";
		$errorcheck = true;
	}
	if ($day === '0') {
		$url = $url."DOB";
		$errorcheck = true;
	}
	if ($month == '0') {
		$url = $url."DOB";
		$errorcheck = true;
	}
	if ($year == '0') {
		$url = $url."DOB";
		$errorcheck = true;
	}

	if ($errorcheck === true){
		header($url);
		exit();
	} else {
		//Hashing the password
		$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
		//Insert the user into the database
		$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, user_phone, user_streetnameandnum, user_suburb, user_city, user_post, user_day, user_month, user_year, user_gender) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd', '$phone', '$address1', '$address2', '$address3', '$address4', '$day', '$month', '$year', '$gender');";
		mysqli_query($conn, $sql);
		header("Location: ../login.php?signup=success");
		exit();
	}
}