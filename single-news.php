<?php get_header(); ?>

    <div class="news-detail news-contents-wrapper wrapper">
      <section class="news-container">
        <div class="article-header">
          <h1 class="article-header__heading"><?php the_title(); ?></h1>
          <time class="article-header__date"><?php echo get_the_date(); ?></time>
        </div>
        <!-- ./article-header -->
        <div class="news-body">
          <?php
          the_content();
          ?>
        </div>

      </section>
    </div>

  
  </main>
  <!-- ./main -->
<?php get_footer(); ?>