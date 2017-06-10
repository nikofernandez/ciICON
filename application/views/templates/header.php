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
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet" integrity="sha384-awusxf8AUojygHf2+joICySzB780jVvQaVCAt1clU3QsyAitLGul28Qxb2r1e5g+" crossorigin="anonymous">

    <style media="screen">
      .navbar, .navbar-inverse{
        background-color: #F4D03F !important;
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
      }

      .showcase{
        height: 600px;
        padding: 100px 20px;
        text-align: center;
        border-bottom: #ccc 1px solid;
        margin-bottom: 30px;
        color: #fff;
        /*background:url('../assets/img/showcase.jpg') no-repeat center center;*/
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
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">News</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
