<footer class="footer">
  <div class="footer-container" >
    <div class="footer-layout">
      
      <!-- Logo -->
      <div class="site-logo">
        <?php get_template_part( 'template-parts/svg/logo' ); ?>
      </div>

      <!-- Links -->
      <div class="footer-links">
        <div>
          <h3 class="footer-info">Sections</h3>
          <?php wp_nav_menu(array(
              'theme_location' => 'footer_one',
              'menu_class' => 'footer-lists',
              'container' => false,
          )); ?>
        </div>

        <div>
          <h3 class="footer-info">Company</h3>
          <?php wp_nav_menu(array(
              'theme_location' => 'footer_two',
              'menu_class' => 'footer-lists',
              'container' => false,
          )); ?>
        </div>

      </div>
    </div><!-- .footer-layout -->
    
    
    <div class="footer-bottom">
      <div><?php get_template_part( 'template-parts/components/theme-mode' ); ?></div>
      <div class="copyright">Copyright © 2025 AI Luxury Boutique</div>
    </div><!-- footer-bottom --> 

  </div><!-- .container --> 
</footer>
</body>