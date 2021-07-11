<?php
session_start();
include("./db.inc.php");
include("./functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	// Something was posted

	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
	    // save to database

		$user_id= random_num(20);
        $query = "insert into users(user_id, user_name, password) values('$user_id', '$user_name', '$password')";

		mysqli_query($con, $query);
		header("location: ../login.php");
		die;
	} else {
		echo "Please Enter some Valid Info";
	}
}