
    <?php if($isAdmin === false || $Login === false) : ?>
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

      <script src="<?php echo base_url(); ?>/assets/js/bootstrap-tagsinput.js" charset="utf-8"></script>
  </body>
</html>
