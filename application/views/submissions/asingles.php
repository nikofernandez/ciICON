<div class="container well">
  <div class="row">
    <div class="col-sm-12">
      <div class="col-xs-12 col-sm-8">

        <h2><?php echo $articles['ArtName']; ?> <small><?php echo $articles['sub_article']; ?> | Applied date: <?php echo $articles['send_at']; ?></small></h2>
        <p><strong>Name: </strong> <?php echo $articles['Name']; ?></p>
        <p><strong>Student #: </strong> <?php echo $articles['StudNum']; ?> </p>
        <p><strong>Contact Information: </strong> <?php echo $articles['Email'] . ', ' . $articles['Contact']; ?> </p>

      </div>
    </div>
    <div class="col-xs-12 divider"></div>
    <div class="col-xs-12 text-center button-options">
      <div class="col-xs-12 col-sm-6 emphasis">
        <a href="<?php echo base_url() ?>/FileController/downloadArticle/<?php echo $articles['sub_article']; ?>" class="btn btn-info btn-block"> <span class="fa fa-download"></span> Download</a>
        <!-- <button class="btn btn-info btn-block"><span class="fa fa-download"></span> Download </button> -->
      </div>
      <div class="col-xs-12 col-sm-6 emphasis">
        <a href="<?php echo base_url(); ?>submissions/alistings" class="btn btn-warning btn-block"><span class="fa fa-arrow-left"></span> Go Back </a>
      </div>
    </div>
  </div>
</div>
