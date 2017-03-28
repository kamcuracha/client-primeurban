<footer id="prefooter" class="section prefooter-section animatedParent">
  <div class="container">
    <div class="footer-logo animated fadeInUpShort" data-id="1">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-prime-urban.png" alt=""></a>
    </div>
    <div class="footer-social animated fadeInUpShort" data-id="2">
      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </div>
    <?php hybrid_get_menu( 'secondary' );  ?>
  </div>
</footer>

<footer class="section footer-section">
  <div class="container">
    <div class="t-footer-left">&copy Urban Prime <?php echo date("Y") ?>. All rights reserved.</div>
    <div class="t-footer-right">Website by <a href="#">Light Media</a></div>
  </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>