<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <img src="http://via.placeholder.com/1500x250" class="img img-responsive" alt="">
  </div>
</div>

<hr>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3><?php echo $post['title']; ?> <small>Posted on: <?php echo $post['created_at']; ?></small></h3>
      <p><?php echo $post['body']; ?></p>
    </div>
    <div class="col-md-2">
      <a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class=" btn btn-info pull-right">Edit</a>
      <?php echo form_open('/posts/delete/'. $post['slug'] ); ?>
        <input type="submit" class="btn btn-danger" name="Delete" value="Delete">
      </form>
    </div>
  </div>
</div>
