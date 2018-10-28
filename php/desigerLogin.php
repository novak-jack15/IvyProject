<?php
	session_start();
	//gives variable for creating the connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ivyproject";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$error = ""; //Variable for storing our errors.

	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			$error = "Both fields are required.";
		}else
		{
			// Define $username and $password
			
			$password=$_POST['password'];

			if (isset($_POST['email'])) 
			{ 
				$designerEmail = trim($_POST["email"]);
			} 

			if (isset($_POST['password'])) 
			{ 
				$designerPassword = trim($_POST["password"]);
			}

			// To protect from MySQL injection
			$designerEmail = stripslashes($designerEmail);
			$designerPassword = stripslashes($designerPassword);
			$designerEmail = mysqli_real_escape_string($dbname, $designerEmail);
			$designerPassword = mysqli_real_escape_string($dbname, $designerPassword);
			$designerPassword = md5($designerPassword);
			
			//Check username and password from database
			$sql="SELECT designerID, designerusername FROM designerinfo WHERE designeremail='$designerEmail' and designerPassword='$designerPassword'";

			$result=mysqli_query($dbname,$sql);

			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['username'] = $designerEmail; // Initializing Session
				header("location: designs.html"); // Redirecting To Other Page
			}else
			{
				$error = "Incorrect username or password.";
			}

		}
	}

?>