<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php // TODO: Add single views w/ download file functionality ?>
      <div class="list-group">
        <?php foreach ($photos as $pho) : ?>
          <div class="media">
            <div class="media-left media-middle">
              <a href="#">
                <!-- http://via.placeholder.com/100x100 -->
                <img class="media-object" src="<?php echo base_url();?>assets/documents/photos/<?php echo $pho['sub_photo'];?>" alt="..." width="200" height="150">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading"><?php echo $pho['PhotoName']; ?> <small><?php echo $pho['send_at'] . ' |'; ?> <?php echo $pho['Name'] . ' [' . $pho['StudNum'] . ']';?></small></h4>
              <p><?php echo word_limiter($pho['Description'], 60); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <ul class="pager">
        <li><?php echo $this->pagination->create_links(); ?></li>
      </ul>

    </div>
  </div>
</div>
