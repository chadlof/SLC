<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ABC Stone</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">PHP Class Assignment</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signin.php">SignIn</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
            <?php
            if(isset($_POST['submit']))
            {
                try{
                    include('connect.php');
                    $ANSWER = $_POST['answer'];
                    if($ANSWER == 'yes')
                    {
                      $flag = "1";
                  
                        ?>
                        <h2>Please enter your Last Name and Phone number below to sign in</h2>
                      <form action="form.php" method="post">
                        <p><label for="lname">Last Name:</label>
                        <input type="text" name="lname" id="lname"></p>
                        <p><label for="phone">Phone Number:</label>
                        <input type="text" name="phone" id="phone"></p>
                        <input type="hidden" name="formflag" value="<?php echo $Flag; ?>">
                        <input type="submit" name="submit" value="SUBMIT">
                      </form>
                      <?php
                    }
                    elseif($ANSWER == 'no')
                    {
                      ?>
                      <h2>Please enter details below to register.</h2>
                      <form action="findUs.php" method="post">
                          <p><label for="fname">First Name:</label>
                          <input type="text" name="fname" id="fname"></p>
                          <p><label for="lname">Last Name:</label>
                          <input type="text" name="lname" id="lname"></p>
                          <p><label for="address">Address:</label>
                          <input type="text" name="address" id="address"></p>
                          <p><label for="phone">Phone Number:</label>
                          <input type="text" name="phone" id="phone"></p>
                          <p><label for="email">Email address:</label>
                          <input type="text" name="email" id="email"></p>
                          <input type="submit" name="submit" value="SUBMIT">
                      </form>
                      <?php
                    }
                  

                }
                catch(PDOException $e)
                {
                    echo 'ERROR:' .$e->getMessage();
                }
            }
            ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <!-- <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
   
        </div>
      </div>
    </section> -->

    <!-- Download Section -->
    <!-- <section id="download" class="download-section content-section text-center">
      <div class="container">
        <div class="col-lg-8 mx-auto">
          <h2>Download Grayscale</h2>
          <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
          <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
        </div>
      </div>
    </section> -->

    <!-- Contact Section -->
    <!-- <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact Start Bootstrap</h2>
            <p>Feel free to leave us a comment on the
              <a href="http://startbootstrap.com/template-overviews/grayscale/">Grayscale template overview page</a>
              on Start Bootstrap to give some feedback about this theme!</p>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg">
                  <i class="fa fa-twitter fa-fw"></i>
                  <span class="network-name">Twitter</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/BlackrockDigital/startbootstrap" class="btn btn-default btn-lg">
                  <i class="fa fa-github fa-fw"></i>
                  <span class="network-name">Github</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg">
                  <i class="fa fa-google-plus fa-fw"></i>
                  <span class="network-name">Google+</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Map Section -->
    <!-- <div id="map"></div> -->

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; chadlofgren.com 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
