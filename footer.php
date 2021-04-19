<!-- start footer  -->
<footer class="footer">
  <div class="logo">
    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/image/icon/logo.png" alt="" /></a>
  </div>

  <nav>
    <ul class="list-nav">
      <?php wp_nav_menu(array(
        'theme_location'  => 'bottom',
        'container'       => 'null',
        'menu_class'      => 'list-nav',
      )); ?>
    </ul>
  </nav>

  <div class="social">
    <a href="https://uapp-llc.com/" class="social-icon facebook"></a>
    <a href="https://uapp-llc.com/" class="social-icon twiter"></a>
    <a href="https://uapp-llc.com/" class="social-icon pinterest"></a>
    <a href="https://uapp-llc.com/" class="social-icon google"></a>
    <a href="https://uapp-llc.com/" class="social-icon be"></a>
    <a href="https://uapp-llc.com/" class="social-icon instagram"></a>
  </div>






  <p>@2019 Logwork. All Right Reserved.</p>
</footer>
<!-- end footer -->



<?php wp_footer(); ?>
</body>

</html>