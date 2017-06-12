<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="list-group">

        <?php foreach($posts as $post) : ?>
          <a href="<?php echo site_url('/posts/view/'.$post['slug']); ?>" class="list-group-item">
            <h4 class="list-group-item-heading">
              <?php echo $post['title']; ?>
              <?php //echo $post['name']; ?>
              <small>Posted on: <?php echo $post['created_at']; ?></small>
            </h4>
            <p><?php echo $post['body']; ?></p>
          </a>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</div>
