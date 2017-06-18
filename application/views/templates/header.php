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
          <?php if ($isAdmin === false && $LoginPage === false) : ?>
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><span class="fa fa-newspaper-o"></span> ICON</a>
          <?php endif; ?>

          <?php if ($isAdmin === true && $LoginPage === false) : ?>
            <a class="navbar-brand" href="<?php echo base_url(); ?>admin/dashboard"><span class="fa fa-dashboard"></span> Overview</a>
          <?php endif; ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php if ($LoginPage === true) : ?>
            <ul class="nav navbar-nav">
              <li></li>
            </ul>
          <?php endif; ?>

          <?php if ($isAdmin === false && $LoginPage === false) : ?>
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url(); ?>about">About</a></li>
              <li><a href="<?php echo base_url(); ?>news/index">News</a></li>
              <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url(); ?>submissions/photo">Submit Photo</a></li>
              <li><a href="<?php echo base_url(); ?>submissions/article">Submit Article</a></li>
              <li><a href="<?php echo base_url(); ?>submissions/team">Join the Team</a></li>
            </ul>
          <?php endif; ?>

          <?php if ($isAdmin === true) : ?>
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url(); ?>admin/submissions">Submissions</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Posts <span class="caret"></span></a>
                <ul class="dropdown-menu" id="dropdown-menu" role="menu">
                  <li><a href="<?php echo base_url(); ?>news/index">View Posts</a></li>
                  <li><a href="<?php echo base_url(); ?>posts/create">Create New Posts</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo base_url(); ?>news/create">Create New Categories</a></li>
                </ul>
              </li>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </nav>

    <?php if($this->session->flashdata('login_failed')) : ?>
      <p class="alert alert-danger"><?php $this->session->flashdata('login_failed'); ?></p>
    <?php endif; ?>
