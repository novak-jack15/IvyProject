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
				$trpAgentEmail = trim($_POST["email"]);
			} 

			if (isset($_POST['password'])) 
			{ 
				$trpAgentPassword = trim($_POST["password"]);
			}

			// To protect from MySQL injection
			$trpAgentEmail = stripslashes($trpAgentEmail);
			$trpAgentPassword = stripslashes($trpAgentPassword);
			$trpAgentEmail = mysqli_real_escape_string($dbname, $trpAgentEmail);
			$trpAgentPassword = mysqli_real_escape_string($dbname, $trpAgentPassword);
			$trpAgentPassword = md5($trpAgentPassword);
			
			//Check username and password from database
			$sql="SELECT trpAgentID, trpAgentusername FROM trpAgentinfo WHERE trpAgentemail='$trpAgentEmail' and trpAgentPassword='$trpAgentPassword'";

			$result=mysqli_query($dbname,$sql);

			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['username'] = $trpAgentEmail; // Initializing Session
				header("location: designs.html"); // Redirecting To Other Page
			}else
			{
				$error = "Incorrect username or password.";
			}

		}
	}

?>