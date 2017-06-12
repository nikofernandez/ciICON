<div class="container-fluid">
  <h2><span class="fa fa-bell"></span> Check Out The Latest News <small>Lorem ipsum dolor sit amet</small></h2>
</div>

<hr>

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="list-group text-center">
        <?php foreach($categories as $cat) : ?>
          <a href="<?php echo site_url('news/posts/'.$cat['cat_id']); ?>" class="list-group-item">
            <h4 class="list-group-item-heading">
              <span class="<?php echo $cat['symbol']; ?>"></span>
              <?php echo $cat['name']; ?>
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
