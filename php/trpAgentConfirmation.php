<?php
	session_start();
	echo $disID = $_GET['id'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ivyproject";

	  // Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//select agent and shopper IDs
   	$sql = "SELECT shopperID, trpAgentID FROM dispatch WHERE dispatchID ='$disID'";

   	$result = mysqli_query($conn,$sql);

	if (mysqli_query($conn, $sql)) 
	{
    	//echo "<br>shopper location";

    	echo '<br>';

    	$row = mysqli_fetch_array($result);

    	echo $shopperID = $row['shopperID'];
    	echo '<br>';
    	echo $trpAgentID = $row['trpAgentID'];
   		//header('Location: ../html/shoppingCart.php');
	} 
	else 
	{
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	//fetching Agent info
	$sql1 = "SELECT trpAgentFname, trpAgentSname, trpAgentEmail FROM trpagentinfo WHERE trpAgentID ='$trpAgentID'";

   	$result1 = mysqli_query($conn,$sql1);

	if (mysqli_query($conn, $sql1)) 
	{
    	//echo "<br>shopper location";

    	echo '<br>';

    	$row1 = mysqli_fetch_array($result1);

    	echo $trpAgentFname = $row1['trpAgentFname'];
    	echo '<br>';
    	echo $trpAgentSname = $row1['trpAgentSname'];
    	echo '<br>';
    	echo $trpAgentEmail = $row1['trpAgentEmail'];
    	echo '<br>';
   		//header('Location: ../html/shoppingCart.php');
	} 
	else 
	{
	    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
	}

	//fetching shopper info
	$sql2 = "SELECT shopperFname, shopperSname, shopperEmail FROM shopperinfo WHERE shopperID ='$shopperID'";

   	$result2 = mysqli_query($conn,$sql2);

	if (mysqli_query($conn, $sql2)) 
	{
    	//echo "<br>shopper location";

    	echo '<br>';

    	$row2 = mysqli_fetch_array($result2);

    	echo $shopperFname = $row2['shopperFname'];
    	echo '<br>';
    	echo $shopperFname = $row2['shopperSname'];
    	echo '<br>';
    	echo $shopperEmail = $row2['shopperEmail'];
   		//header('Location: ../html/shoppingCart.php');
	} 
	else 
	{
	    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
	}

	//confirm delivery status
	$sql3 = "UPDATE dispatch SET deliveryStatus = 'confirmed' WHERE dispatchID = '$disID'";

	if (mysqli_query($conn, $sql3)) 
	{
	    echo "Record updated successfully";
	} 
	else 
	{
	    echo "Error updating record: " . mysqli_error($conn);
	}
?>