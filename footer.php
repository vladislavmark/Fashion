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
    <a href="https://www.facebook.com/uapp.group/" class="social-icon facebook" target="_blank"></a>
    <a href="https://www.instagram.com/uapp.group/" class="social-icon instagram" target="_blank"></a>
    <a href="https://www.linkedin.com/company/uapp-corp/" class="social-icon linke" target="_blank"></a>
    <a href="https://uapp-llc.com/" class="social-icon pinterest" target="_blank"></a>
    <a href="https://uapp-llc.com/" class="social-icon google" target="_blank"></a>
    <a href="https://www.behance.net/uapp-llc" class="social-icon be" target="_blank"></a>
  </div>

  <p>@2019 Logwork. All Right Reserved.</p>
</footer>
<!-- end footer -->

<?php wp_footer(); ?>
