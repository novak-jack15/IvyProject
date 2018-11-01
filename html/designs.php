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
  <style type="text/css">
  	.grow { transition: all .2s ease-in-out; }
  	.grow-button { transition: all .1s ease-in-out; }
	.grow:hover {
	 transform: scale(1.1);
	 z-index: 1;
	 background:  #88ff4d;
	}
	.grow-button:hover {
	 transform: scale(1.2);
	 z-index: 1;
	 background-color: red !important;
	}
  </style>
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


      <?php
			$db = mysqli_connect("localhost", "root", "", "ivyproject");
			$sql = "SELECT clothName,clothDescription,clothPrice,image FROM clothesinfo";
			$result = mysqli_query($db, $sql);

			while ($row = mysqli_fetch_array($result)) {

				echo "<div class='col-sm-3 col-md-3 card grow' style='width:270px; border: 1px solid grey; border-radius: 15px; margin: 5px;'>";
					echo "<br>";
				    echo "<img class='card-img-top' src='../uploads/".$row['image']."' alt='Card image' style='width: 225px; height: 225px; border-radius: 10px;'>";
				    echo "<div class='card-body'>";
				      echo "<h4 style='text-align: center; text-transform: capitalize; font-weight: bold;' class='card-title'>".$row['clothName']."</h4>";
				      echo "<p class='card-text' style='text-align: center; text-transform: capitalize; font-weight: bold;'>Ksh.".$row['clothPrice']."</p>";
				      echo "<button class = 'text-center center-block grow grow-button btn btn-primary text-center'>Add to Cart<a href='#' class=''></a></button>";
				      echo "<br>";
				      echo "<br>";
				    echo "</div>";
  				echo "</div>";
			}

		?>
	</div>	

      <!-- Footer -->
<footer style="border: 1px solid grey; background: #red !important;" class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
      	<!--<footer class=" site-footer navbar navbar-fixed-bottom navbar-default container-fluid">
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

</body>
</html>