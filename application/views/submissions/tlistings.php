<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="list-group">
        <?php foreach ($teams as $tea) : ?>
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading"><?php echo $tea['Name']; ?> <strong><?php echo $tea['StudNum']; ?></strong> <small><?php echo $tea['requested_at']; ?></small></h4>
            <p class="list-group-item-text">
              <dl class="dl-horizontal">
                <dt>Contact</dt>
                <dd><?php echo $tea['Contact']; ?></dd>
                <dt>Email</dt>
                <dd><?php echo $tea['Email'] ?></dd>
                <dt>Course</dt>
                <dd><?php echo $tea['Course'] ?></dd>
                <dt>Position Applied</dt>
                <dd><?php echo $tea['Job'] ?></dd>
              </dl>
            </p>
          </a>
          <!-- <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Title <small>01/01/2017</small></h4>
            <p class="list-group-item-text">Name: John Doe [20150094][COURSE]</p>
            <a href="#" class="btn btn-primary btn-xs">View Details</a>
          </a> -->
        <?php endforeach; ?>
      </div>
      <ul class="pager">
        <li><?php echo $this->pagination->create_links(); ?></li>
      </ul>

    </div>
  </div>
</div>
