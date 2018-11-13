<?php
	session_start();
	echo 'time to shop';
	echo $_SESSION['shopperID'];
	$login_user = $_SESSION['shopperUsername']; 
	echo $login_user;
	echo $clothID = $_GET['id'];
	echo 'i am here';
?>