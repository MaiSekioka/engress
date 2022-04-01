<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      Engress | 日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール
    </title>
    <meta
      name="description"
      content="日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール"
    />
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <h1 class="site-title">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo get_template_directory_uri().'/img/logo@2x.png';?>" alt="engress" class="site-logo" />
        </a>
      </h1>
      <!-- ./site-title -->
      <div class="sp-menu-wrapper" id="js-sp-menu" aria-hidden="true">
        <nav class="header-nav">
          <ul class="nav-left">
            <?php 
            wp_nav_menu(
              [
                'theme_location' => 'place_global',
                'container' => false,
                'items_wrap' => '%3$s'
              ]
              );
            ?>
          </ul>
          <!-- ./nav-left -->

          <div class="nav-right">
            <div class="nav-information-box">
              <span class="nav-right__hours">平日08:00〜20:00</span>
              <span class="nav-right__phone-number">0123-456-7890</span>
            </div>
            <button class="nav-right__request-btn">
              <a href="<?php echo esc_url(home_url('contact')); ?>">資料請求</a>
            </button>
            <button class="nav-right__contact-btn">
              <a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a>
            </button>
          </div>
          <!-- ./nav-right -->

        </nav>
      </div>
      <button class="burger-btn" id="js-burger" aria-controls="js-sp-menu" aria-expanded="false" aria-label="メニューの開閉を行う">
        <span class="burger-btn__bar"></span>
      </button>
      <!-- ./burger-btn -->
    </header>
    <!-- ./header -->

    <?php
    if(!(is_front_page() || is_singular('post') || is_singular('news') || is_page('contact-complete'))):
    ?>
    <main id="<?php echo get_the_pageId();?>">
      <section class="header-visual ">
      <h2 class="page-title"><?php get_main_title(); ?></h2>
    </section>
    <!-- ./header-visual -->
    <?php
    endif;
    if(!is_front_page()):
    ?>

    <div class="breadcrumb-wrapper">
      <?php 
      if(function_exists('bcn_display')){
        echo '<div class="breadcrumb wrapper">';
        bcn_display();
        echo '</div>';
      }
      ?>
    </div>
    <!-- ./breadcrumb-wrapper -->

    <?php endif; ?>
