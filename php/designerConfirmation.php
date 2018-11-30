<?php
	session_start();
	echo 'time to upload goods';

	echo $desID = $_SESSION['designerID'];
  	echo $login_user = $_SESSION['designerUsername'];
  	echo $orderID = $_GET['id'];

  	$servername = "localhost";
  	$username = "root";
  	$password = "";
  	$dbname = "ivyproject";

  	// Create connection
  	$conn = new mysqli($servername, $username, $password, $dbname);

  	
?>