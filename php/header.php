<?php include ('info-site.php'); ?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://use.fontawesome.com/40917ba2bf.js"></script>
    </head>
    <body>
      <header>
        <nav class="nav-extended card-panel teal light-blue darken-1">
          <div class="nav-wrapper">
            <img src="<?php echo $infoSite['logo']?>" class="brand-logo responsive-img git st logo" alt="logo du site">
            <div class="fixed-action-btn horizontal click-to-toggle" id="navigation">
              <a class="btn-floating btn-large  halfway-fab waves-effect waves-light teal">
                <i class="material-icons">contacts</i>
              </a>
              <ul>
                <li><a class="btn-floating red"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a class="btn-floating green"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                <li><a class="btn-floating blue"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>

          <div class="nav-content center-align">
            <h1 class="nav-title"><?php echo $infoSite["titre"]?></h1>

          </div>
        </nav>

      </header>
