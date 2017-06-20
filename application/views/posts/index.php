<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="row" id="latest-news">
        <?php foreach($posts as $post) : ?>
          <div class="row" id="latest-news">
            <div class="col-md-3">
              <img src="http://via.placeholder.com/500x500" class="img img-responsive" alt="">
            </div>
            <div class="col-md-9">
              <h2><?php echo $post['title']; ?> <small>Posted on: <?php echo $post['created_at']; ?></small></h2>
              <p><?php echo word_limiter($post['body'], 60); ?></p>
              <br>
              <a href="<?php echo site_url('/posts/view/'.$post['slug']); ?>" class="btn btn-primary btn-sm">Read More</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>
