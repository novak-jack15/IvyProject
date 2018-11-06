<?php
	session_start();
	echo 'time to shop';
	echo $_SESSION['shopperID'];
	$login_user = $_SESSION['shopperUsername']; 
	echo $login_user;

	$

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
              <li><a href="designs.php">Trends</a></li>
              <li><a href="men.php">Men</a></li>
              <li><a href="women.php">Women</a></li>
              <li><a href="kids.php">Kids</a></li>
              <li><a href="couples.php">Couples</a></li>
            </ul>

            <!--links for navbar on the right-->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="shoppingCart.php"><img src="../images/cart3.png"> <span class="badge">7</span></a></li>
              <li><a title = "click to views your profile" href="#"><span class="glyphicon glyphicon-user"></span><span class="userloggedin"><strong> <?php echo $login_user;?></strong></span><span ></span></a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout<span></span></a></li>
            </ul>
          </div>
        </div>
      </nav>

      <br>
      <br>


      <?php
      	$db = mysqli_connect("localhost", "root", "", "ivyown");
		$sql = "SELECT clothName,clothDescription,clothPrice,image FROM clothesinfo WHERE clothCategory = 'men'"; 
	
		while($res = mysqli_fetch_array($result)) { 		
			echo "<tr>";
			echo "<td width='10%'>".$res['jobID']."</td>";
			echo "<td>".$res['workerFname']."</td>";
			echo "<td>".$res['workerSname']."</td>";
			echo "<td>".$res['jobDescription']."</td>";
			echo "<td>".$res['jobDate']."</td>";
			echo "<td>".$res['totalCost']."</td>";
			echo "<td>".$res['clientJobStatus']."</td>";	
			echo "<td><a href=\"../php/clientjobconfirmation.php?id=$res[jobID]\">Order Delivered</a> | <a href=\"../php/clientjobcancellation.php?id=$res[jobID]\" onClick=\"return confirm('Are you sure you want to cancel the and get a refund?')\">Cancel Order</a></td>";
			echo "</tr>";		
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

</body>
</html>