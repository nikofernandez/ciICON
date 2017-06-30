<div class="container well">
  <div class="row">
    <div class="col-sm-12">
      <div class="col-xs-12 col-sm-8">
          <h2><?php echo $team['Name']; ?> <small>Applied date: <?php echo $team['requested_at']; ?></small></h2>
          <p><strong>Student #: </strong> <?php echo $team['StudNum']; ?> </p>
          <p><strong>Course: </strong> <?php echo $team['Course']; ?></p>
          <p><strong>Job Applied</strong> <?php echo $team['Job']; ?></p>
          <p><strong>Contact Information: </strong> <?php echo $team['Email'] . ', ' . $team['Contact']; ?> </p>
          <p>
            <strong>Skills: </strong>
            <?php foreach ($skills as $skill) : ?>
              <span class="tags"><?php echo $skill['skills']; ?></span>
            <?php endforeach; ?>
          </p>
      </div>
    </div>
    <div class="col-xs-12 divider"></div>
    <div class="col-xs-12 text-center button-options">
      <div class="col-xs-12 col-sm-4 emphasis">
        <button class="btn btn-success btn-block"><span class="fa fa-thumbs-o-up"></span> Accept </button>
      </div>
      <div class="col-xs-12 col-sm-4 emphasis">
        <button class="btn btn-danger btn-block"><span class="fa fa-thumbs-o-down"></span> Deny </button>
      </div>
      <div class="col-xs-12 col-sm-4 emphasis">
        <a href="<?php echo base_url(); ?>submissions/tlistings" class="btn btn-warning btn-block"><span class="fa fa-arrow-left"></span> Go Back </a>
      </div>
    </div>
  </div>
</div>
