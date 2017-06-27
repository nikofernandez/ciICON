<div class="container">
  <div class="well row">
    <?php // TODO: Re-check fields ?>
    <?php echo form_open_multipart('posts/create'); ?>
      <fieldset class="form-horizontal">
        <legend><?= $title ?></legend>

        <h5 class="text-danger text-center"><?php echo validation_errors(); ?></h5>

        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Title</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Title">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAuth" class="col-lg-2 control-label">Author</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="inputAuth" name="author" placeholder="Author">
          </div>
        </div>
        <div class="form-group">
          <label for="textArea" class="col-lg-2 control-label">Body</label>
          <div class="col-lg-10">
            <textarea class="form-control" name="body" id="editor1" rows="3" id="textArea"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="selectCategories" class="col-lg-2 control-label">Category</label>
          <div class="col-lg-10">
            <select class="form-control" name="category" id="selectCategories">
              <?php foreach($categories as $category) : ?>
                <option value="<?php echo $category['cat_id']; ?>"><?php echo $category['name']; ?></option>

              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="userfile" class="col-lg-2 control-label">Upload Image</label>
          <div class="col-lg-10">
            <input type="file" name="userfile" id="userfile">
            <p class="help-block">only .jpg, .png, .jpeg</p>
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
