<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">

      <div class="row" id="latest-news">
        <?php foreach($posts as $post) : ?>
          <div class="row" id="news-listings">
            <div class="col-md-3">
              <img src="http://via.placeholder.com/350x200" class="img img-responsive img-thumbnail" alt="">
            </div>
            <div class="col-md-9">
              <h2><?php echo $post['title']; ?> <small>Posted on: <?php echo $post['created_at']; ?></small></h2>
              <p><?php echo word_limiter($post['body'], 60); ?></p>
              <br>
              <a href="<?php echo site_url('/posts/view/'.$post['slug']); ?>" class="btn btn-primary btn-sm">Read More</a>
            </div>
          </div>
        <?php endforeach; ?>
        <ul class="pager">
          <li><?php echo $this->pagination->create_links(); ?></li>
        </ul>
      </div>

    </div>
  </div>
</div>
