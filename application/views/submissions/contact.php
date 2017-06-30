<div class="container-fluid">
  <h2><span class="fa fa-envelope"></span> Got Any Questions?</h2>
</div>

<hr>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">

      <h5 class="text-danger"><?php echo validation_errors(); ?></h5>

      <?php if($this->session->flashdata('feed_failed')) : ?>
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $this->session->flashdata('feed_failed'); ?>
        </div>
      <?php endif; ?>

      <?php if($this->session->flashdata('feed_success')) : ?>
        <div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $this->session->flashdata('feed_success'); ?>
        </div>
      <?php endif; ?>

      <?php echo form_open('submissions/contact'); ?>
        <div class="form-group">
          <label for="name">Name</label><br>
          <input type="text" name="name" class="form-control" value="" placeholder="Name here...">
        </div>
        <div class="form-group">
          <label for="email">Email</label><br>
          <input type="text" name="email" class="form-control" value="" placeholder="Email here...">
        </div>
        <div class="form-group">
          <label for="contact">Contact #</label><br>
          <div class="input-group">
            <span class="input-group-addon" id="contactNum">+63</span>
            <input type="text" name="contact" class="form-control" class="form-control" placeholder="Contact # here..." aria-describedby="contactNum">
          </div>
        </div>
        <div class="form-group">
          <label for="message">Message</label><br>
          <textarea name="message" class="form-control" rows="10" cols="30"></textarea>
        </div>
        <button type="submit" class="btn btn-success" name="button">Submit</button>
      </form>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><span class="fa fa-bell"></span> Or Reach Us On The Links Below</h3>
        </div>
        <div class="panel-body">
          <ul class="list-unstyled">
            <li><a href="#" class="btn btn-link"><span class="fa fa-facebook-square"></span> @ICON.feudiliman</a></li>
            <li><a href="#" class="btn btn-link"><span class="fa fa-twitter-square"></span> @ICON.feudiliman</a></li>
            <li><a href="#" class="btn btn-link"><span class="fa fa-youtube-square"></span> @ICON.feudiliman</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
