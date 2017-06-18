<div class="container-fluid">
  <h2><span class="fa fa-group"></span> Want To Join The Team?</h2>
</div>

<hr>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><span class="fa fa-certificate"></span> Qualifications</h3>
        </div>
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

          <hr>

          <i class="fa fa-user-plus text-info"> Available Positions</i>
          <ul>
            <li>News Correspondents</li>
            <li>News Correspondents</li>
            <li>News Correspondents</li>
            <li>News Correspondents</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="well">

        <h5 class="text-danger"><?php echo validation_errors(); ?></h5>

        <?php if($this->session->flashdata('team_success')) : ?>
          <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $this->session->flashdata('team_success'); ?>
          </div>
        <?php endif; ?>

        <?php echo form_open('submissions/team'); ?>
          <div class="form-group">
            <label for="name">Name</label><br>
            <input type="text" name="name" class="form-control" value="" placeholder="Name here...">
          </div>
          <div class="form-group">
            <label for="studNum">Student #</label><br>
            <input type="number" name="studNum" class="form-control" value="" placeholder="Student # here...">
          </div>
          <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" class="form-control" value="" placeholder="Email here...">
          </div>
          <div class="form-group">
            <label for="contact">Contact #</label><br>
            <div class="input-group">
              <span class="input-group-addon" id="contactNum">+63</span>
              <input type="number" class="form-control" name="contact" class="form-control" placeholder="Contact # here..." aria-describedby="contactNum">
            </div>
          </div>
          <div class="form-group">
            <label for="course"></label>
            <select class="form-control" name="course">
              <option>BS Information Technology</option>
              <option>BS Accountancy</option>
              <option>BSBA Financial Management</option>
              <option>BSBA Operations Management</option>
              <option>BSBA Marketing</option>
            </select>
          </div>
          <div class="form-group">
            <label class="control-label">Job position:</label><br>
            <div class="radio">
              <label>
                <input type="radio" name="job" value="Campus News Editor" /> Campus News Editor
              </label>
              <label>
                <input type="radio" name="job" value="Features Editor" /> Features Editor
              </label>
              <label>
                <input type="radio" name="job" value="Business Editor" /> Business Editor
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="skills">Skills</label><br>
            <input type="text" value="Photoshop,Photography,Front-End,Videographer,Writer" name="skills" id="skills" class="form-control" data-role="tagsinput">
            <p class="help-block">*Press <kbd>tab</kbd> to add more skills</p>
          </div>
          <input type="submit" class="btn btn-success btn-block" value="Submit">
        </form>
      </div>
    </div>
  </div>
</div>
