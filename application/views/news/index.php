<div class="container-fluid">
  <h2><span class="fa fa-bell"></span> Check Out The Latest News <small>Lorem ipsum dolor sit amet</small></h2>
</div>

<hr>

<div class="container">
  <div class="row">

      <?php foreach($categories as $cat) : ?>
        <div class="col-md-1 col-sm-1 col-xs-1 text-center">
          <?php echo form_open('/news/delete/'. $cat['cat_id']); ?>
            <input type="submit" class="btn btn-danger btn-sm" name="Delete" value="X">
          </form>
        </div>
        <div class="col-md-11 col-sm-11 col-xs-11">
          <div class="list-group text-center">
            <a href="<?php echo site_url('news/posts/'.$cat['cat_id']); ?>" class="list-group-item">
              <h4 class="list-group-item-heading">
                <span class="<?php echo $cat['symbol']; ?>"></span>
                <?php echo $cat['name']; ?>
              </h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </a>
          </div>
        </div>
      <?php endforeach; ?>



  </div>
</div>
