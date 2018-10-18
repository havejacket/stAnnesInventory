<?php


$conn;

function execSQL($sql) {
	connect();
	global $conn;
	$result=$conn->query($sql);
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	mysqli_free_result($result);
	return $data;
}



function connect() {
	$servername = "localhost";
	$username = "User";
	$password = "KUoEzaR2MUpRvyJy";
	$dbname = "inventory";
	global $conn;
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}  else {
		//echo "Connected successfully!";
	}
}
?>