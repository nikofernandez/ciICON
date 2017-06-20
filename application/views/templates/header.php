<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ICON Blog | <?= $title ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

    <!-- Bootstrap CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Bootswatch CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">

    <!-- Bootstrap Tags Input CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-tagsinput.css">

    <!-- Timeline CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/timeline.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/flat/orange.css">

    <style media="screen">
      .navbar-nav > li > .dropdown-menu{
        background-color: #F4D03F !important;
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
          <?php if(!$this->session->userdata('logged_in')) : ?>
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><span class="fa fa-newspaper-o"></span> ICON</a>
          <?php endif; ?>

          <?php if($this->session->userdata('logged_in')) : ?>
            <a class="navbar-brand" href="<?php echo base_url(); ?>dashboard/index"><span class="fa fa-dashboard"></span> Overview</a>
          <?php endif; ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php if ($LoginPage === false) : ?>
            <ul class="nav navbar-nav">
              <li></li>
            </ul>

            <?php if(!$this->session->userdata('logged_in')) : ?>
              <!-- Users View on right -->
              <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>about">About</a></li>
                <li><a href="<?php echo base_url(); ?>news/index">News</a></li>
                <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
              </ul> <!-- End of Users View nav-right-->
            <?php endif; ?>

            <?php if($this->session->userdata('logged_in')) : ?>
              <!-- Admin View -->
              <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>dashboard/submissions">Submissions</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Posts <span class="caret"></span></a>
                  <ul class="dropdown-menu" id="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url(); ?>news/index">View Posts</a></li>
                    <li><a href="<?php echo base_url(); ?>posts/create">Create New Posts</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>news/create">Create New Categories</a></li>
                  </ul>
                </li>
              </ul> <!-- End of Admin View -->
            <?php endif; ?>

            <?php if($this->session->userdata('logged_in')) : ?>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>admin/logout">Logout</a></li>
              </ul> <!-- End of Users View on Left -->
            <?php endif; ?>

            <?php if(!$this->session->userdata('logged_in')) : ?>
              <!-- Users View on Left -->
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>submissions/photo">Submit Photo</a></li>
                <li><a href="<?php echo base_url(); ?>submissions/article">Submit Article</a></li>
                <li><a href="<?php echo base_url(); ?>submissions/team">Join the Team</a></li>
              </ul> <!-- End of Users View on Left -->
            <?php endif; ?>

          <?php endif; ?>


        </div>
      </div>
    </nav>

    <?php if($this->session->flashdata('admin_loggin_success')) : ?>
      <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $this->session->flashdata('admin_loggin_success'); ?>
      </div>
    <?php endif; ?>
