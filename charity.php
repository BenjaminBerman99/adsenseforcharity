<!DOCTYPE html>
<html>

<?php
require_once ("php/charities/CharityHandler.php");
$charity = "American Red Cross";
if (isset($_GET["charity"])){
    $charity = $_GET["charity"];
    $handler = new CharityHandler();
    $charity = $handler->fetchCharity($charity);
}

?>

<head>
  <title>AFC : <?php echo $charity->getName();?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <div class="py-5 text-center" style="background-image: url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/light-column-particles_-ybovlvgs__F0000.png');background-size:cover;">
        <div class="container">
      <div class="row">
        <div class="bg-white p-5 mx-auto col-md-8 col-10">
          <h3 class="display-3"><?php echo $charity->getName(); ?></h3>
          <p class="mb-4"><?php echo $charity->getDesc(); ?></p> <a class="btn btn-outline-primary" href="watch.php" style="">Watch Ads</a> <a class="btn btn-outline-primary" href="<?php echo $charity->getLink();?>" style="">Learn More<br></a>
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
          <li class="nav-item mx-2"> <a class="nav-link" href="watch.php">Watch Ads</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link navbar-brand mr-0 text-white" href="#"><i class="fa d-inline fa-lg fa-stop-circle-o"></i>
              <b> AdsenseForCharity</b></a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="aboutus.html">About us</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-3" style="">
    <div class="container">
      <div class="row my-4 d-flex justify-content-center">
        <div class="d-flex flex-column justify-content-center p-3 col-lg-7">
          <p class="lead mb-0"><?php echo $charity->getLong1();?></p>
        </div>
        <div class="p-0 col-lg-3"> <img class="img-fluid d-block" src="<?php echo $charity->getLogo();?>"> </div>
      </div>
      <div class="row my-4 d-flex justify-content-center">
        <div class="p-0 order-2 order-lg-1 col-lg-3"> <img class="img-fluid d-block" src="<?php echo $charity->getPic2();?>"> </div>
        <div class="d-flex flex-column justify-content-center p-3 col-lg-7 order-1 order-lg-2">
          <p class="lead mb-0"><?php echo $charity->getLong2();?></p>
        </div>
      </div>
    </div>
  </div>
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