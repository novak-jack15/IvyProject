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

      if(empty($_POST['email']) || empty($_POST['password'])){
          s$error = 'something is missing';
      }
      else{
        $shopperEmail = $_POST['email'];
        $shopperPassword = $_POST['password'];
        $shopperEmail = stripslashes($shopperEmail);
        $shopperPassword = stripslashes($shopperPassword);
        $shopperEmail = mysqli_real_escape_string($conn, $shopperEmail);
        $shopperPassword = mysqli_real_escape_string($conn, $shopperPassword);
        $shopperPassword = md5($shopperPassword);

        $sql="SELECT shopperID, shopperUsername FROM shopperinfo WHERE shopperEmail = '$shopperEmail' AND shopperPassword = '$shopperPassword'";

        $result=mysqli_query($conn,$sql);

        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

        if(mysqli_num_rows($result) == 1){
          $_SESSION['shopperID'] = $row['shopperID'];
          $_SESSION['shopperUsername'] = $row['shopperUsername'];

          header("location: ../html/designs.php"); // Redirecting To Other Page
        }
        else{
          $error = "Incorrect username or password.";
        }
      }
    }
  } 
?>
