<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Login</h3>
        </div>
        <?php echo form_open('admin/login'); ?> <!-- Opening form_open -->
          <div class="panel-body">
            <div class="form-group">
              <label for="username">Username</label><br>
              <input type="text" class="form-control" name="username" value="" placeholder="Username" autofocus>
            </div>
            <div class="form-group">
              <label for="password">Password</label><br>
              <input type="password" class="form-control" name="password" value="" placeholder="Password">
            </div>
          </div>
          <div class="panel-footer">
            <button type="submit" class="btn btn-primary btn-block" name="button">Login</button>
          </div>
        <?php echo form_close(); ?> <!-- /End of form_open -->
      </div>
    </div>
  </div>
</div>
