<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <!-- <img src="http://via.placeholder.com/1500x250" class="img img-responsive" alt=""> -->

  </div>
</div>

<section class="banner-section">
</section>
<section class="post-content-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
        <h1 class="text-center"><?php echo $post['title']; ?></h1>
        <ul class="list-inline text-center">
          <li><?php echo $post['created_at']; ?></li>
        </ul>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="image-block">
          <img src="<?php echo base_url(); ?>assets/img/<?php echo $post['photo_name']; ?>" class="img-responsive" width="550" height="500">
        </div>
        <p><?php echo $post['body'] ?></p>
      </div>
      <div class="col-lg-3  col-md-3 col-sm-12">
        <div class="well">
          <h2>Author</h2>
          <p><?php echo $post['author']; ?></p>
        </div>
        <div class="list-group">
          <a class="list-group-item" href="<?php echo base_url(); ?>submissions/article">
            <h4 class="list-group-item-heading"><span class="fa fa-newspaper-o"></span> Submit an Article</h4>
          </a>
          <a class="list-group-item" href="<?php echo base_url(); ?>submissions/photo">
            <h4 class="list-group-item-heading"><span class="fa fa-photo"></span> Submit a Photo</h4>
          </a>
        </div>
      </div>
      <?php if($this->session->userdata('logged_in')) : ?>
        <div class="col-md-2">
          <a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class=" btn btn-info btn-sm pull-right"><span class="fa fa-pencil"></span> Edit</a>
          <?php echo form_open('/posts/delete/'. $post['slug'] ); ?>
            <button type="submit" class="btn btn-danger btn-sm" name="Delete"><span class="fa fa-times"></span> Delete</button>
          </form>
        </div>
      <?php endif; ?>
    </div>
  </div> <!-- /container -->
</section>
