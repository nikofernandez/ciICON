<div class="container">
  <div class="well row">
    <?php echo form_open('news/create'); ?>
      <fieldset class="form-horizontal">
        <legend><?= $title ?></legend>

        <?php echo validation_errors(); ?>

        <div class="form-group">
          <label for="inputName" class="col-lg-2 control-label">Name</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>

</div>
