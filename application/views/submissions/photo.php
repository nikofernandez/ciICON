<div class="container-fluid">
  <h2><span class="fa fa-picture-o"></span> Got An Awesome Captured Moment?</h2>
</div>

<hr>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><span class="fa fa-certificate"></span> Qualifications</h3>
        </div>
        <?php // TODO: Re-check rules ?>
        <div class="panel-body">
          <i class="fa fa-check text-success"> YES</i>
          <ul>
            <li>Rule 1</li>
            <li>Rule 2</li>
            <li>Rule 3</li>
            <li>Rule 4</li>
            <li>Rule 5</li>
          </ul>

          <hr>

          <i class="fa fa-warning text-danger"> NO</i>
          <ul>
            <li>Rule 1</li>
            <li>Rule 2</li>
            <li>Rule 3</li>
            <li>Rule 4</li>
            <li>Rule 5</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="well">

        <h5 class="text-danger"><?php echo validation_errors(); ?></h5>

        <?php if($this->session->flashdata('photo_failed')) : ?>
          <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $this->session->flashdata('photo_failed'); ?>
          </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('photo_success')) : ?>
          <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $this->session->flashdata('photo_success'); ?>
          </div>
        <?php endif; ?>

        <?php echo form_open_multipart('submissions/photo'); ?>
          <div class="form-group">
            <label for="name">Photo Name</label><br>
            <input type="text" name="photoname" class="form-control" value="" placeholder="Photo Name here...">
          </div>
          <div class="form-group">
            <label for="name">Name</label><br>
            <input type="text" name="name" class="form-control" value="" placeholder="Name here...">
          </div>
          <div class="form-group">
            <label for="studNum">Student #</label><br>
            <input type="number" name="studNum" class="form-control" value="" placeholder="Student # here...">
          </div>
          <div class="form-group">
            <label for="contact">Contact #</label><br>
            <div class="input-group">
              <span class="input-group-addon" id="contactNum">+63</span>
              <input type="text" class="form-control" name="contact" class="form-control" placeholder="Contact # here..." aria-describedby="contactNum">
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email</label><br>
            <input type="text" name="email" class="form-control" value="" placeholder="Email here...">
          </div>
          <div class="form-group">
            <label for="userfile">File input</label>
            <input type="file" name="userfile">
            <p class="help-block">only .jpg, .png, .jpeg</p>
          </div>
          <div class="form-group">
            <label for="message">Description</label><br>
            <textarea name="message" class="form-control" rows="5" cols="30"></textarea>
          </div>
          <input type="submit" name="submit" value="Submit" class="btn btn-success btn-block">
        </form>
      </div>
    </div>
  </div>
</div>
