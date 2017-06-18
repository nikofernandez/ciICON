<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ICON Blog</title>

    <link rel="stylesheet" href="assets/css/custom.css">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    <!-- Font Awesome CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Bootstrap Tags Input CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-tagsinput.css">

    <!-- Timeline CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/timeline.css">

  </head>
  <body>
    <!-- Navbar -->

    <!-- Navbar dropdown contents -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="pages/submission-photo.php">Submit Photo</a></li>
      <li><a href="pages/submission-article.php">Submit Article</a></li>
      <li class="divider"></li>
      <li><a href="pages/submission-team.php">Join the Team</a></li>
    </ul> <!-- //dropdown contents -->
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo"><span class="fa fa-newspaper-o"></span> ICON</a>
        <a href="#" data-activates="navmobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="pages/about.php">About</a></li>
          <li><a href="pages/news-categories.php">News</a></li>
          <li><a href="pages/contact-us.php">Contact Us</a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Submission<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul id="navmobile" class="side-nav">
          <li><a href="pages/about.php">About</a></li>
          <li><a href="pages/news-categories.php">News</a></li>
          <li><a href="pages/contact-us.php">Contact Us</a></li>
          <li class="divider"></li>
          <li><a href="pages/submission-photo.php">Submit Photo</a></li>
          <li><a href="pages/submission-article.php">Submit Article</a></li>
          <li class="divider"></li>
          <li><a href="pages/submission-team.php">Join the Team</a></li>
        </ul>
      </div>
    </nav> <!-- //Navbar -->

    <section id="main-header">
      <div class="row">
        <div class="col s12 m6 l6 xl6">
          <img src="http://via.placeholder.com/650x500" class="responsive-img" alt="">
        </div>
        <div class="col s12 m6 l6 xl6">
          <div class="row" id="latest-news">
            <div class="col s3 m3 l3 xl3">
              <img src="http://via.placeholder.com/500x500" class="responsive-img" alt="">
            </div>
            <div class="col s9 m9 l9 xl9">
              <h2>Title here</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
            </div>
          </div>
          <div class="row" id="latest-news">
            <div class="col s3 m3 l3 xl3">
              <img src="http://via.placeholder.com/500x500" class="responsive-img" alt="">
            </div>
            <div class="col s9 m9 l9 xl9">
              <h2>Title here</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
            </div>
          </div>
          <div class="row" id="latest-news">
            <div class="col s3 m3 l3 xl3">
              <img src="http://via.placeholder.com/500x500" class="responsive-img" alt="">
            </div>
            <div class="col s9 m9 l9 xl9">
              <h2>Title here</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="main-goals">
      <div class="row">
        <div class="col s4 m4 l4 xl4">
          <i class="fa fa-bell"></i>
          <h4>Release Updated News</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="col s4 m4 l4 xl4">
          <i class="fa fa-camera-retro"></i>
          <h4>Capture The Moment</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="col s4 m4 l4 xl4">
          <i class="fa fa-coffee"></i>
          <h4>Work Endlessly For You</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
      </div>

      <div class="row">
        <div class="col s4 m4 l4 xl4">
          <i class="fa fa-users"></i>
          <h4>Be A Community</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="col s4 m4 l4 xl4">
          <i class="fa fa-user"></i>
          <h4>Be Part of Our Team</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="col s4 m4 l4 xl4">
          <i class="fa fa-smile-o"></i>
          <h4>Have Fun</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
      </div>
    </section>

    <section id="main-message">
      <div class="container">
        <blockquote>
          <p>" May our successor learn from the lesson that I personally learned the hard way: A passion thatr burns brightly scalds in cold water. The publication is in no doubt destined to show its true potential. May we all learn from that mistake and use it as a medium for improvement. Have a good one and good luck. We all need that "</p>
          <small>Message from our former <cite title="Source Title">EIC, Vernil P. Puno</cite></small>
        </blockquote>
      </div>
    </section>

    <footer class="page-footer">
      <!-- <div class="container">
        <div class="row">
          <div class="col l3 s12">
            <h5 class="white-text">Settings</h5>
            <ul>
              <li><a class="white-text" href="#!">Link 1</a></li>
              <li><a class="white-text" href="#!">Link 2</a></li>
              <li><a class="white-text" href="#!">Link 3</a></li>
              <li><a class="white-text" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div> -->
      <div class="footer-copyright">
        <div class="container center-align">
        <a class="green-text" href="http://materializecss.com"><span class="fa fa-facebook"></span> @ICONfeudiliman</a>
        | <a class="green-text" href="http://materializecss.com"><span class="fa fa-twitter"></span> @iconFEUDILIMAN</a>
        | <a class="green-text" href="http://materializecss.com"><span class="fa fa-youtube"></span> FEU Diliman ICON</a>
        </div>
      </div>
    </footer>


    <!--Import jQuery before materialize.js-->
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <script>
      $(document).ready(function(){
        $(".button-collapse").sideNav();
      })
    </script>

    <!-- Bootstrap Tagsinput JS -->
      <script src="<?php echo base_url(); ?>assets/js/bootstrap-tagsinput.js" charset="utf-8"></script>

      <!-- iCheck JS -->
      <script src="<?php echo base_url(); ?>assets/js/icheck.js" charset="utf-8"></script>
      <script>
        $(document).ready(function(){
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-orange',
            radioClass: 'iradio_flat-orange'
          });
        });
      </script>

      <!-- CKEditor -->
      <script src="//cdn.ckeditor.com/4.7.0/basic/ckeditor.js"></script>
      <script>
        window.onload = function() {
            CKEDITOR.replace( 'editor1' );
        };
    </script>
  </body>
</html>
