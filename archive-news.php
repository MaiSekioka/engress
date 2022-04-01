<?php get_header(); ?>

    <section class="news-archive">
      <div class="wrapper">
        <h3 class="section-title section-title--under">お知らせ一覧</h3>

        <ul class="news-list">
        <?php
        if (have_posts()):
          while(have_posts()): the_post();
        ?>
          <li class="news-list__item">
            <time class="news-list__date"><?php echo get_the_date(); ?></time>
            <a href="<?php the_permalink(); ?>" class="news-list__link">
            <?php
              if(mb_strlen($post->post_title, 'UTF-8') > 45){
                $title = mb_substr($post->post_title,0,45).'...';
                echo $title;
              } else {
                echo $post->post_title;
              }
              ?>
            </a>
          </li>
          <!-- ./news-list__item -->
          <?php 
          endwhile;
        else:
          ?>
          <p>記事が見つかりませんでした。</p>
        <?php endif; ?>
        </ul>
      </div>
    </section>
    <!-- ./news-archive -->

    <nav class="pagenation-area wrapper">
      <ul class="pagenation">
        <?php 
        if(function_exists('wp_pagenavi')){
          wp_pagenavi();
        }
        ?>
        <!-- <li class="pagenation__item pagenation__item--current">1</li>
        <li class="pagenation__item"><a href="">2</a></li>
        <li class="pagenation__item"><a href="">3</a></li>
        …
        <li class="pagenation__item"><a href="">5</a></li> -->
      </ul>
    </nav>
    <!-- ./pagenation-area -->

  </main>
  <!-- ./main -->

<?php get_footer(); ?>