<?php 
if(!is_page('contact')):
?>

<footer>
      <div class="footer-request">
        <p class="footer-request__title">まずは無料で資料請求から</p>
        <button class="footer-request__btn"><a href="<?php echo esc_url(home_url('contact')); ?>">資料請求</a></button>
        <a href="<?php echo esc_url(home_url('contact')); ?>" class="footer-request__link">お問い合わせ</a>
      </div>
      <!-- ./footer-request -->
      <div class="footer-contact">
        <div class="wrapper">
          <p class="footer-contact__text">お電話でのお問い合わせはこちら</p>
          <p class="footer-contact__phone-number">0123-456-7890</p>
          <p class="footer-contact__hours">平日 08:00~20:00</p>
        </div>
      </div>
      <!-- ./footer-contact -->

      <?php endif; ?>

      <div class="footer-nav">
        <div class="wrapper">
          <ul class="footer-nav-left">
          <?php 
            wp_nav_menu(
              [
                'theme_location' => 'place_footer',
                'container' => false,
                'items_wrap' => '%3$s'
              ]
              );
            ?>
          </ul>
          <!-- ./footer-nav-left -->

          <div class="footer-nav-right">
            <p class="footer-nav-right__logo">
              <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo get_template_directory_uri().'/img/logo@2x.png';?>" alt="Engress" />
              </a>
            </p>
            <p class="footer-nav-right__phone-number">0123-456-7890</p>
            <p class="footer-nav-right__hours">平日08:00~20:00</p>
          </div>
          <!-- ./footer-nav-right -->
        </div>
      </div>
      <!-- ./footer-nav-->

      <div class="footer-copy">
        <div class="wrapper">
          <small class="footer-copy__text"> &copy; 2020 Engress. </small>
        </div>
      </div>
    </footer>
    <!-- ./footer -->
    <?php wp_footer(); ?>
  </body>
</html>