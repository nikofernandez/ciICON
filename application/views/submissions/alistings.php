<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php // TODO: Add single views w/ download file functionality ?>
      <div class="list-group">
        <?php foreach ($articles as $art) : ?>
          <a href="<?php echo site_url('/submissions/asingles/'.$art['article_id']); ?>" class="list-group-item">
            <h4 class="list-group-item-heading">
              <?php echo $art['ArtName']; ?>
              <small><?php echo $art['send_at'] . ' |'; ?> <?php echo $art['Name'] . ' [' . $art['StudNum'] . ']';?></small>
            </h4>
            <p class="list-group-item-text"><?php echo word_limiter($art['Description'], 60); ?></p>
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
