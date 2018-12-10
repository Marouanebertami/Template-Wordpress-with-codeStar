<div class="container-fluid footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <?php dynamic_sidebar('footer'); ?>
      </div>
      <div class="col-sm-4">
        <?php dynamic_sidebar('footer_1'); ?>
      </div>
      <div class="col-sm-4">
        <?php dynamic_sidebar('footer_2'); ?>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid copyright">
  <div class="container">
    <div class="footer-copyright">
      <!--  Copyright  -->
      <?php
        $copyright = cs_get_option('copyright');
        echo '<p>'.$copyright.'</p>';
      ?>
    </div>
  </div>
</div>
<?php //get_search_form(); ?>
<?php wp_footer(); ?>
</body>
</html>
