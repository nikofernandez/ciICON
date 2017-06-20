
    <?php if($LoginPage === false) : ?>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="list-inline">
            <li class="list-inline-item"><button type="button" class="btn btn-link" name="button"><span class="fa fa-facebook-square"></span> Lorem ipsum dolor</button></li>
            <li class="list-inline-item"><button type="button" class="btn btn-link" name="button"><span class="fa fa-twitter-square"></span> Lorem ipsum dolor</button></li>
            <li class="list-inline-item"><button type="button" class="btn btn-link" name="button"><span class="fa fa-youtube-square"></span> Lorem ipsum dolor</button></li>
          </ul>
      </footer>
    <?php endif; ?>

    <!-- jQuery CDN -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.js"
      integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous"></script>

      <!-- Bootstrap JS CDN -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <!-- Bootstrap Tagsinput JS -->
      <script src="<?php echo base_url(); ?>assets/js/bootstrap-tagsinput.js" charset="utf-8"></script>

      <!-- iCheck JS -->
      <script src="<?php echo base_url(); ?>assets/js/icheck.js" charset="utf-8"></script>
      <script>
        $(document).ready(function(){
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-orange',
            radioClass: 'iradio_flat-orange'
          });
        });
      </script>

      <!-- CKEditor -->
      <script src="//cdn.ckeditor.com/4.7.0/basic/ckeditor.js"></script>
      <script>
        window.onload = function() {
            CKEDITOR.replace( 'editor1' );
        };
    </script>
  </body>
</html>
