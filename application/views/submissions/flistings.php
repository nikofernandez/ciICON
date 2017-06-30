<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php // TODO: Add single views w/ download file functionality ?>
      <div class="list-group">
        <?php foreach ($feedbacks as $feed) : ?>
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">
              <?php echo $feed['name']; ?>
              <small><?php echo $feed['contact'] . ' | ' . $feed['email'] . ' | ' . $feed['send_at']; ?></small>
            </h4>
            <p class="list-group-item-text"><?php echo word_limiter($feed['message'], 60); ?></p>
          </a>
        <?php endforeach; ?>
      </div>
      <ul class="pager">
        <li><?php echo $this->pagination->create_links(); ?></li>
      </ul>

    </div>
  </div>
</div>
