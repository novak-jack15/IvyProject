<?php
  session_start();
  //gives variable for creating the connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ivyproject";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  echo "After connection ";



  $error = ""; //Variable for storing our errors.

  if(isset($_POST["submit"]))
  {
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
      $error = "Both fields are required.";

    }
    else
    {
      // Define $username and $password
      echo "I am past erroer";
      $password=$_POST['password'];

      if (isset($_POST['email'])) 
      { 
        echo $shopperEmail = trim($_POST["email"]);
        echo "I am in erroer";
      } 

      if (isset($_POST['password'])) 
      { 
       echo $shopperPassword = trim($_POST["password"]);
      }

      // To protect from MySQL injection
      echo $shopperEmail = stripslashes($shopperEmail);
      echo $shopperPassword = stripslashes($shopperPassword);
      echo $shopperEmail = mysqli_real_escape_string($dbname, $shopperEmail);
      echo $shopperPassword = mysqli_real_escape_string($dbname, $shopperPassword);
      echo $shopperPassword = md5($shopperPassword);
      
      //Check username and password from database
      $sql="SELECT shopperID, shopperusername FROM shopperinfo WHERE shopperemail='$shopperEmail' and shopperPassword='$shopperPassword'";

      $result=mysqli_query($dbname,$sql);

      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);


      
      //If username and password exist in our database then create a session.
      //Otherwise echo error.
      
      if(mysqli_num_rows($result) == 1)
      {
        $_SESSION['shopperusername'] = $row['shopperusername'];
        $_SESSION['shopperID'] = $row['shopperID']; // Initializing Session
        //header("location: designs.html"); // Redirecting To Other Page
        echo "login successful";
      }
      else
      {
        echo $loginError = "Incorrect username or password.";
      }

    }
  }

?>
