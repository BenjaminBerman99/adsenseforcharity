<!DOCTYPE html>
<html>

<head>
  <title>Charities</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <div class="py-5 text-center text-white h-100 align-items-center d-flex" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('img/charity-children-desert-36785.jpg');  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
    <div class="container py-5">
      <div class="row">
        <div class="mx-auto col-lg-8 col-md-10">
          <h1 class="display-3 mb-4">Meet the Charities<br></h1>
          <p class="lead mb-5"></p> <a href="watch.php" class="btn btn-lg btn-outline-primary mx-1 text-light">Watch Ads<br></a>
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
          <li class="nav-item mx-2"> <a class="nav-link navbar-brand mr-0 text-white" href="index.html"><i class="fa d-inline fa-lg fa-stop-circle-o"></i>
              <b>AdsenseForCharity</b></a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="aboutus.html">About us</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-3" style="">
    <div class="container">
      <?php
      require_once ("php/charities/CharityHandler.php");
      $handler = new CharityHandler();
      $charities = $handler->fetchAllCharities();
      $i = 0;
      $y = 0;
      while ($i <= count($charities)){
          $charity = $charities[$i];
          $pic = '<img src="'.$charity->getLogo().'" class="img-fluid d-block mx-auto mb-3">';
          if ($y == 0){
              echo '<div class="row">';
          }
          echo '
        <div class="py-5 col-md-6">
          <div class="row">
            <div class="text-center col-4">'.$pic.'</div>
            <div class="col-8">
              <h6><a href="charity.php?charity='.$charity->getName().'">#'.$charity->getRank().' '.$charity->getName().'</a></h6>
              <p>'.$charity->getDesc().'
            </div>
          </div>
        </div>
        ';
          if ($y == 1){
              echo '</div>';
              $y = -1;
          }
          $i = $i + 1;
          $y = $y + 1;
      }
      ?>
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