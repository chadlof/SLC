<?php
              if(isset($_POST['submit']))
              {
                  try
                  {
                    session_start();
                      include('connect.php');
                      $Fname=$_POST['fname'];
                      $Lname=$_POST['lname'];
                      $Address=$_POST['address'];
                      $Phone=$_POST['phone'];
                      $Email=$_POST['email'];
                      $_SESSION['fname'] = $Fname;
                      $_SESSION['lname'] = $Lname;
                      $_SESSION['address'] = $Address;
                      $_SESSION['phone'] = $Phone;
                      $_SESSION['email'] = $Email;
                      $stmt = $db->exec("INSERT INTO customer_info(ID, Fname, Lname, Address, Phone, Email)
                                                          VALUES(null, '$Fname', '$Lname', '$Address', '$Phone', '$Email')");
                      echo'<script>alert("Inserted Successfully")</script>';

                      if (!isset($_SESSION)) 
                      {
                        session_start();
                      }
                    
                      // if ($_SERVER['REQUEST_METHOD'] == 'POST') 
                      // {
                      //     $_SESSION['postdata'] = $_POST;
                      //     unset($_POST);
                      //     header("Location: ".$_SERVER['PHP_SELF']);
                      //     exit;
                      // }
                  }
                  catch(PDOException $e)
                  {
                      echo 'ERROR:' .$e->getMessage();
                  }
              }
              ?>
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

    <!-- css -->
    <style>
     .drop {
      padding: 5px;
      color: #000;
      font-size: 20px;
      background: transparent;

  
  }
  
    </style>

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
            
                  
                      <div class="comtent" align="">
                          <div class="box">
                              <h2>How did you first hear about us?</h2>

                              <div class="dropdown">
                                <button method="post" name="options" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Choose One
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu drop" >
                                  <li><a name="refOption" href="referral.php">Referral</a></li>
                                  <li><a name="onlOption" href="online.php">Online</a></li>
                                  <li><a name="othOption" href="other.php">Other</a></li>
                                </ul>
                              </div>
                          </div>
                      </div>
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
