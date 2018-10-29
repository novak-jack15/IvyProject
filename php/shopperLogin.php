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
      echo 'submit working';

      if(empty($_POST['email']) || empty($_POST['password'])){
        echo $error = 'something is missing';
      }
      else{
        echo "all is well";
        echo "<br>";
        echo $shopperEmail = $_POST['email'];
        echo "<br>";
        echo $shopperPassword = $_POST['password'];
        echo "<br>";
        echo $shopperEmail = stripslashes($shopperEmail);
        echo "<br>";
        echo $shopperPassword = stripslashes($shopperPassword);
        echo "<br>";
        echo $shopperEmail = mysqli_real_escape_string($conn, $shopperEmail);
        echo "<br>";
        echo $shopperPassword = mysqli_real_escape_string($conn, $shopperPassword);
        echo "<br>";
        echo $shopperPassword = md5($shopperPassword);
        echo "<br>";

        $sql="SELECT shopperID, shopperUsername FROM shopperinfo WHERE shopperEmail = '$shopperEmail' AND shopperPassword = '$shopperPassword'";

        $result=mysqli_query($conn,$sql);

        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

        if(mysqli_num_rows($result) == 1){
          echo $_SESSION['shopperID'] = $row['shopperID'];
          echo "<br>";
          echo $_SESSION['shopperUsername'] = $row['shopperUsername'];
          echo "<br>";
          echo 'log in was successfully';
          header("location: ../php/designs.php"); // Redirecting To Other Page
        }
        else{
          $error = "Incorrect username or password.";
        }
      }
    }
  } 
?>
