<?php
  session_start();
  //gives variable for creating the connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ivyproject";

  // Create connection
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
  if (!$conn){
      die("Connection failed: " . mysqli_connect_error());
  }
  else{
    echo "Connected successfully";

    if(isset($_POST['submit'])){

    	echo 'submit is working';

      if(empty($_POST['email']) || empty($_POST['password'])){
          $error = 'something is missing';
      }
      else{
        $designerEmail = $_POST['email'];
        $designerPassword = $_POST['password'];
        $designerEmail = stripslashes($designerEmail);
        $designerPassword = stripslashes($designerPassword);
        $designerEmail = mysqli_real_escape_string($conn, $designerEmail);
        $designerPassword = mysqli_real_escape_string($conn, $designerPassword);
        $designerPassword = md5($designerPassword);

        $sql="SELECT designerID, designerUsername FROM designerinfo WHERE designerEmail = '$designerEmail' AND designerPassword = '$designerPassword'";

        $result=mysqli_query($conn, $sql);

        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

        if(mysqli_num_rows($result) == 1){

          //taking session variables
          $_SESSION['designerID'] = $row['designerID'];
          $_SESSION['designerUsername'] = $row['designerUsername'];

          header("location: ../html/designerHome.php"); // Redirecting To Other Page
        }
        else{
          echo $error = "Incorrect username or password.";
        }
      }
    }
  } 
?>
