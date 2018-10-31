<?php
	session_start();
	echo 'time to shop';
	echo $_SESSION['shopperID'];
	$login_user = $_SESSION['shopperUsername']; 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Shopping Page</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/home.css" rel="stylesheet" type="text/css">
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container container-fluid">
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Ivy Designs</a>
        </div>

        <!--links for navbar on the left-->
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Trends</a></li>
              <li><a href="#">Men</a></li>
              <li><a href="#">Women</a></li>
              <li><a href="#">Kids</a></li>
              <li><a href="#">Couples</a></li>
            </ul>

            <!--links for navbar on the right-->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"> <span class="badge">7</span></a></li>
              <li><a title = "click to views your profile" href="#"><span class="glyphicon glyphicon-user"></span><span class="userloggedin"><strong> <?php echo $login_user;?></strong></span><span ></span></a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout<span></span></a></li>
            </ul>
          </div>
        </div>
      </nav>

      <br>
      <br>
      <br>


      <?php
			$db = mysqli_connect("localhost", "root", "", "ivyproject");
			$sql = "SELECT clothName,clothDescription,clothPrice,image FROM clothesinfo";
			$result = mysqli_query($db, $sql);

			while ($row = mysqli_fetch_array($result)) {
				//echo "<div id='img_div'>";
					//echo "<img src='images/".$row['image']."'>";
					//echo "<p>".$row['textVal']."</p>";
				//echo "</div>";

				//echo "<div class='col-md-1 col-sm-1'></div>";	
				echo "<div class='col-sm-3 col-md-3 card' style='width:200px; border: 1px solid grey; border-radius: 10px;'>";
					echo "<br>";
				    echo "<img class='card-img-top' src='../uploads/".$row['image']."' alt='Card image' style='width:100%; max-height: 237px;'>";
				    echo "<div class='card-body'>";
				      echo "<h4 class='card-title'>".$row['clothName']."</h4>";
				      //echo "<p class='card-text'>".$row['clothDescription']."</p>";
				      echo "<p class='card-text'>".$row['clothPrice']."</p>";
				      echo "<button class = 'text-center btn btn-primary text-center'>Add to Cart<a href='#' class=''></a></button>";
				      echo "<br>";
				      echo "<br>";
				    echo "</div>";
  				echo "</div>";
  				//echo "<div class='col-md-1 col-sm-1'></div>";
  				
			}

		?>

      
      	<footer class=" site-footer navbar navbar-fixed-bottom navbar-default container-fluid">
		    <div id="theContent">
		        <div class="col-md-3 col-sm-3">

		        </div>
		        <div class="gridInfo col-md-6 col-sm-6">
		            <h5>Help & support</h5>
		            <ul >
		                <li><a href="#">Home</a></li>
		                <li><a href="#">About Us</a></li>
		                <li><a href="#">Contact US</a></li>
		            </ul>
		        </div>

		        <div class="gridInfo col-md-3 col-sm-3">
		            <h5>Social Media</h5>
		            <ul>
						<li><img src="../icons/Facebook_32.png"></span></li>
						<li><img src="../icons/Twitter_32.png"></span></li>
					<ul>
		        </div>
		    </div>
		</footer>-->
</div>
</div>
</body>
</html>