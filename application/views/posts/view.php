<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <!-- <img src="http://via.placeholder.com/1500x250" class="img img-responsive" alt=""> -->

  </div>
</div>

<hr>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row hidden-md hidden-lg"><h1 class="text-center" >TITULO LARGO DE UNA INVESTIGACION cualquiera</h1></div>

      <div class="pull-left col-md-4 col-xs-12 thumb-contenido">
        <img class="center-block img-responsive" src='<?php echo base_url(); ?>assets/img/<?php echo $post['photo_name']; ?>' width="500" height="500" />
      </div>
      <div class="">
        <h1  class="hidden-xs hidden-sm"><?php echo $post['title']; ?></h1>
        <hr>
        <small><?php echo $post['created_at']; ?></small>
        <hr>
        <p><?php echo $post['body'] ?></p>
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
</div>
