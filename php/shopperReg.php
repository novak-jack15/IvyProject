<?php
//gives variable for creating the connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ivyproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check  whether the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$shoppername = trim($_POST["name"]);
$email = trim($_POST["email"]);
$pass = trim($_POST["password"]);

$sql = "INSERT INTO shopperinfo (shoppername, email, pass)
VALUES ('$shoppername', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>