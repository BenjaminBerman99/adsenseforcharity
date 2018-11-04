<!DOCTYPE html>
<html>

<?php
session_start();
require_once ("php/user/UserHandler.php");
$name = "Error";
if (isset($_SESSION['googleID'])){
    $name = $_SESSION["name"];
    $handler = new UserHandler();
    $profile = $handler->getUser($_SESSION["googleID"]);
}

?>

<head>
  <title>AFC : <?php echo $name;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body style="background: #343a40; height: 100%;">
  <div class="py-5 text-center" style="background-image: url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/light-column-particles_-ybovlvgs__F0000.png');background-size:cover;">
        <div class="container">
      <div class="row">
        <div class="bg-white p-5 mx-auto col-md-8 col-10">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?php echo $_SESSION["pic"]; ?>" class="img-responsive img-rounded">
                </div>
                <div class="col-md-9">
                    <h3 class="display-3"><?php echo $name; ?></h3>
                    <p class="mb-4">Level <?php echo $profile->getLevel(); ?></p><br>
                    <p class="mb-4">Next Level Up In $<?php echo $profile->getRemaining(); ?></p><br>
                </div>
            </div>

        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container justify-content-center"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar9">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar9">
        <ul class="navbar-nav">
          <li class="nav-item mx-2"> <a class="nav-link" href="selector.php">Watch Ads</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link navbar-brand mr-0 text-white" href="#"><i class="fa d-inline fa-lg fa-stop-circle-o"></i>
              <b> AdsenseForCharity</b></a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="aboutus.html">About us</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <footer>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <div class="py-3" >
          <div class="container">
              <div class="row">
                  <div class="col-md-12 text-center">
                      <p class="mb-0">© 2018 AdsenseForCharity. All rights reserved</p>
                  </div>
              </div>
          </div>
      </div>
  </footer>
</body>

</html>