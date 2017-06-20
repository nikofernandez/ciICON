<?php echo form_open('admin/login'); ?>
<div class="container">

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <?php if($this->session->flashdata('admin_loggin_failed')) : ?>
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $this->session->flashdata('admin_loggin_failed'); ?>
        </div>
      <?php endif; ?>

      <?php if($this->session->flashdata('admin_loggedout')) : ?>
        <div class="alert alert-dismissible alert-warning">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $this->session->flashdata('admin_loggedout'); ?>
        </div>
      <?php endif; ?>
      <div class="panel panel-primary text-center">
        <div class="panel-heading">
          <h3 class="panel-title"><?= $title; ?></h3>
        </div>
        <div class="panel-body">
          <h5 class="text-danger"><?php echo validation_errors(); ?></h5>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email..." autofocus>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password...">
          </div>
        </div>
        <div class="panel-footer">
          <input type="submit" name="Submit" value="Login" class="btn btn-primary btn-block">
        </div>
      </div>
    </div>
  </div>
</div>

<?php echo form_close(); ?>
