<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <!-- <img src="http://via.placeholder.com/1500x250" class="img img-responsive" alt=""> -->

  </div>
</div>

<hr>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <img src="<?php echo base_url(); ?>assets/img/<?php echo $post['photo_name']; ?>" class="img img-responsive img-thumbnail pull-right" width="300" height="300" alt="">
      <h3><?php echo $post['title']; ?> <small>Posted on: <?php echo $post['created_at']; ?></small></h3>
      <p><?php echo $post['body'] ?></p>
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
</div>
