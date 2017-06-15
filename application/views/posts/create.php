<div class="container">
  <div class="well row">
    <?php echo form_open('posts/create'); ?>
      <fieldset class="form-horizontal">
        <legend><?= $title ?></legend>

        <?php echo validation_errors(); ?>
        
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Title</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Title">
          </div>
        </div>
        <div class="form-group">
          <label for="textArea" class="col-lg-2 control-label">Body</label>
          <div class="col-lg-10">
            <textarea class="form-control" name="body" rows="3" id="textArea"></textarea>
          </div>
        </div>
        <!-- <div class="form-group">
          <label class="col-lg-2 control-label">Category</label>
          <div class="col-lg-10">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                Option one is this
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Option two can be something else
              </label>
            </div>
          </div>
        </div> -->
        <!-- <div class="form-group">
          <label for="select" class="col-lg-2 control-label">Selects</label>
          <div class="col-lg-10">
            <select class="form-control" id="select">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            <br>
            <select multiple="" class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div> -->
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
