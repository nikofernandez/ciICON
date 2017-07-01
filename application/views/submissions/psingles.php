<div class="container well">
  <div class="row">
    <div class="col-sm-12">
      <div class="col-xs-12 col-sm-8">

        <h2><?php echo $photo['PhotoName']; ?> <small>Applied date: <?php echo $photo['send_at']; ?></small></h2>
        <p><strong>Name: </strong> <?php echo $photo['Name']; ?></p>
        <p><strong>Student #: </strong> <?php echo $photo['StudNum']; ?> </p>
        <p><strong>Contact Information: </strong> <?php echo $photo['Email'] . ', ' . $photo['Contact']; ?> </p>
        <p><strong>Description: </strong> <?php echo $photo['Description']; ?></p>

      </div>
      <div class="col-xs-12 col-sm-4">
        <img src="<?php echo base_url(); ?>/assets/documents/photos/<?php echo $photo['sub_photo']; ?>" class="img img-thumbnail" alt="">
      </div>
    </div>
    <div class="col-xs-12 divider"></div>
    <div class="col-xs-12 text-center button-options">
      <div class="col-xs-12 col-sm-6 emphasis">
        <a href="<?php echo base_url() ?>/FileController/downloadPhoto/<?php echo $photo['sub_photo']; ?>" class="btn btn-info btn-block"> <span class="fa fa-download"></span> Download</a>
        <!-- <button class="btn btn-info btn-block"><span class="fa fa-download"></span> Download </button> -->
      </div>
      <div class="col-xs-12 col-sm-6 emphasis">
        <a href="<?php echo base_url(); ?>submissions/plistings" class="btn btn-warning btn-block"><span class="fa fa-arrow-left"></span> Go Back </a>
      </div>
    </div>
  </div>
</div>
