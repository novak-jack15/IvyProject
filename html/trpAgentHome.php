<?php
  session_start();
  echo 'time to upload goods';

  echo $trpID = $_SESSION['trpAgentID'];
  $login_user = $_SESSION['trpAgentUsername'];

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
    <link href="../css/style.css" rel="stylesheet" type="text/css">
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
              <li><a href="trpAgentOrders.php">Dispatch Orders</a></li>
            </ul>

            <!--links for navbar on the right-->
            <ul class="nav navbar-nav navbar-right">
              <li><a title = "click to views your profile" href="#"><span class="glyphicon glyphicon-user"></span><span class="userloggedin"><strong> <?php echo $login_user;?></strong></span><span ></span></a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <br>
      <br>
      <br>

    <div class="container container-fluid">
      <div style="text-align: center;">
        <h2 class="hello">Welocome back, <strong style="text-transform: capitalize;"><?php echo $login_user;?>!</strong></h2>
        <h3> Below is an overview of your contribution to the Ivy Designs Community.<br></h3>
      </div>
        
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 align="center" class="panel-title">Transport Agent Work Overview</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-4">
                <div class="well dash-box">
                  <h2><span class="glyphicon glyphicon-time" aria-hidden="true"></span>  <?php echo 4 ;?></h2>
                  <h4>Pending Deliveries</h4>
                </div>
              </div>
              <div class="col-md-4">
                <div class="well dash-box">
                  <h2><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>  <?php echo 7;?></h2>
                  <h4>Complete Deliveries</h4>
                </div>
              </div>
              <div class="col-md-4">
                <div class="well dash-box">
                  <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>  203</h2>
                  <h4>Stock</h4>
                </div>
              </div>
              <div class="col-md-4">
                <div class="well dash-box">
                  <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>  <?php echo 21;?></h2>
                  <h4>Total Deliveries</h4>
                </div>
              </div>
              <div class="col-md-4">
                <div class="well dash-box">
                  <h2><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>  <?php echo 4;?></h2>
                  <h4>Total Earnings</h4>
                </div>
              </div>
              <div class="col-md-4">
                <div class="well dash-box">
                  <h2><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>  <?php echo 10;?></h2>
                  <h4>Cancelled or Failed Deliveries</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div style="text-align: center;" class="col-md-12 col-sm-12">
          <br><h4>Kindly check into your unconfirmed orders and confirm them if the client has been served.<br>If your are facing any challenges kindly feel free to cancel any orders and contact us afterwards so that we might know how to be of help the next time such an occurrence takes place.</h4>
        </div>

        
      </div>    

<footer class=" site-footer navbar navbar-fixed-bottom navbar-inverse container-fluid">
    <div id="theContent">
        <div class="col-md-12 col-sm-12">

        </div>
        <div class="gridInfo col-md-3 col-sm-3">
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
</footer>

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
    </footer>
</div>

</body>
</html>