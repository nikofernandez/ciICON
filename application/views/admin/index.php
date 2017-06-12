<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Login</h3>
        </div>
        <?php //echo form_open(''); ?> <!-- Opening form_open -->
          <div class="panel-body">
            <div class="form-group">
              <label for="username">Username</label><br>
              <input type="text" class="form-control" name="username" value="" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label><br>
              <input type="password" class="form-control" name="password" value="" placeholder="Password">
            </div>
          </div>
          <div class="panel-footer">
            <a href="<?php echo base_url(); ?>admin/dashboard" class="btn btn-success">Login</a>
            <button type="button" class="btn btn-danger pull-right" name="button">Cancel</button>
          </div>
        <!-- </form> <!-- /End of form_open -->
      </div>
    </div>
  </div>
</div>
