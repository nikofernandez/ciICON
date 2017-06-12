<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ICON Blog | <?= $title ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Bootswatch CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">

    <!-- Bootstrap Tags Input CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-tagsinput.css">

    <!-- Timeline CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/timeline.css">

    <style media="screen">
      .navbar, .navbar-inverse, .navbar-default a{
        background-color: #F4D03F !important;
        color: #000 !important;
      }

      .navbar-default a:hover{
        background-color: #17202A !important;
        color: #FDFEFE !important;
      }

      .box{
        margin-bottom: 20px;
      }

      .box .fa{
        font-size: 100px !important;
        margin-bottom: 10px;
      }

      footer{
        border-top: #ccc 2px solid !important;
        margin-top: 20px !important;
      }

      .showcase{
        height: 600px;
        padding: 100px 20px;
        text-align: center;
        border-bottom: #ccc 1px solid;
        margin-bottom: 30px;
        color: #fff;
        background:url('<?php echo base_url(); ?>/assets/img/ICON Banner.jpg') no-repeat center center;
      }

      .showcase h1{
        font-size: 55px;
        padding-bottom: 20px;
        color: #fff;
      }

      .showcase p{
        font-size: 20px;
        margin-bottom: 50px;
      }

      .boxes{
        text-align: center;
        background: #fff;
        margin-bottom: 30px;
      }

      .box .fa{
        font-size: 45px !important;
        margin-bottom: 10px;
      }

      .box{
        padding: 15px;
        border: #ccc 1px solid;
      }

      /* FEATURES */
      #features{
        border-top: #D5D8DC 1px solid;
        border-bottom: #D5D8DC 1px solid;
        padding-bottom: 30px;
      }
      #features h2{
        font-size: 35px;
        margin 0;
        padding-bottom: 10px;
      }

      #features .fa{
        font-size: 60px;
        color: #121035;
      }

      /* MESSAGE */
      #main-message{
        margin-top: 50px;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="fa fa-newspaper-o"></span> ICON</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php if ($isAdmin === false) : ?> <!-- If not in admin link -->
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><a href="<?php echo base_url(); ?>about">About</a></li>
              <li><a href="<?php echo base_url(); ?>news/index">News</a></li>
              <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url(); ?>photo">Submit Photo</a></li>
              <li><a href="<?php echo base_url(); ?>article">Submit Article</a></li>
              <li><a href="<?php echo base_url(); ?>team">Join the Team</a></li>
            </ul>
          <?php endif; ?>

          <?php if ($Login === true) : ?> <!-- If in login page -->
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url(); ?>admin/index">Login</a></li>
            </ul>
          <?php endif; ?>

          <?php if ($isAdmin === true) : ?>
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url(); ?>admin/dashboard">Overview</a></li>
              <li><a href="<?php echo base_url(); ?>admin/submission">Submission</a></li>
              <li><a href="<?php echo base_url(); ?>admin/posts">Posts</a></li>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </nav>
