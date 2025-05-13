<footer>
  <div class="container" >
    <div class="footer-layout">
      
      <!-- Logo -->
      <div class="site-logo">
        <?php get_template_part( 'template-parts/svg/logo' ); ?>
      </div>

      <!-- Links -->
      <div class="footer-menus">
        <div>
          <?php if (has_nav_menu('footer_one')) : ?>
            <h3 class="footer-info">Sections</h3>
            <?php wp_nav_menu(array(
                'theme_location' => 'footer_one',
                'menu_class' => 'footer-list',
                'container' => false,
            )); ?>
          <?php endif; ?>
        </div>

        <div>
          <?php if (has_nav_menu('footer_two')) : ?>
            <h3 class="footer-info">Company</h3>
            <?php wp_nav_menu(array(
                'theme_location' => 'footer_two',
                'menu_class' => 'footer-list',
                'container' => false,
            )); ?>
          <?php endif; ?>
        </div>

      </div>
    </div><!-- .footer-layout -->
    
    
    <div class="footer-bottom">
      <!-- <div>get_template_part( 'template-parts/components/theme-mode' ); </div> -->
      <div class="copyright">Copyright © 2025 AI Luxury Boutique</div>
    </div><!-- footer-bottom --> 

  </div><!-- .container --> 
</footer>
</body>