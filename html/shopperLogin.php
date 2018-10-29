<!DOCTYPE html>
<html>
<head>
  <title>Shopper Login</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <link rel="stylesheet" type="text/css" href="../css/shopperLogin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <style type="text/css">
    .error
    {
      color: black;
      font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
      font-size:16px;
    }
  </style>
</head>
<body>
  
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Ivy Designs and Stores</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <h5 class="my-0 mr-md-auto font-weight-normal">Shopper Login Page</h5>
    </nav>
    <a class="btn btn-outline-primary" href="html/shopperReg.html">Sign Up</a>
  </div>

  <div class="modal-dialog text-center">
    <div class="col-sm-9 main-section">
      <div class="modal-content">

        <div class="col-12 user-img">
          <img src="../images/face.png">
        </div>

        <div class="col-12 form-input">
          <h3 class="error">
            <?php 
              if(isset($error)){
                echo $error;
              }
              
            ?>
          </h3>

          <form action="../php/shopperLogin.php" method="POST">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter Email" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Enter Password" name="password">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Login</button>
          </form>
    
            <br><br>
        </div>

        <div class="col-12 forgot">
          <a href="#">Forgot Password</a>
        </div>

      </div> 
    </div> 
  </div>  
</body>
</html>

