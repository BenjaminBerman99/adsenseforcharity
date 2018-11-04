<!DOCTYPE html>
<html style="height:100%;">

<head>
  <title>Watch Ads</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
</head>

<body style="background: #343a40; height: 100%;">
  <div class="py-5 text-center text-white h-100 align-items-center d-flex">
      <div id="video-placeholder"></div>
  </div>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary" style="float: bottom; margin-bottom: 0; bottom: 75px; ">
    <div class="container justify-content-center"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar9">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar9">
        <ul class="navbar-nav">
          <li class="nav-item mx-2 active"> <a class="nav-link" href="#">Done</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link navbar-brand mr-0 text-white" href="index.html"><i class="fa d-inline fa-lg fa-stop-circle-o"></i>
              <b> AdsenseForCharity</b></a> </li>
            <li class="nav-item mx-2"> <a class="nav-link" href="#">Estimated Donation: <p id="rev">$0</p></a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script>
        alert("Thank you for supporting <?php echo $_GET["charity"]; ?>!");
    </script>
  </footer>
</body>

</html>