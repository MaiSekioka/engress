<?php get_header(); ?>
    <section class="blog-list">
      <div class="wrapper">
        <h3 class="section-title section-title--under"><?php get_list_title(); ?>一覧</h3>
        <?php  
        if(have_posts()):
          while(have_posts()): the_post();
        ?>
        <article class="media">
          <div class="media__image">
            <span class="media__category"><?php print_one_catname(); ?></span>
            <img src="<?php get_thumbnail(); ?>" alt="" class="media__img">
          </div>
          <div class="media__body">
            <time class="media__date"><?php echo get_the_date(); ?></time>
            <a href="<?php the_permalink(); ?>" class="media__link">
            <?php
              if(mb_strlen($post->post_title, 'UTF-8') > 35){
                $title = mb_substr($post->post_title,0,35).'...';
                echo $title;
              } elseif(mb_strlen($post->post_title, 'UTF-8') == 0 ){
                echo '_';
              } else {
                echo $post->post_title;
              }
            ?>
            </a>
            <p class="media__text">
            <?php
              if(mb_strlen($post->post_content, 'UTF-8') > 80){
                $excerpt = str_replace('\n','',mb_substr(strip_tags($post->post_content),0,60,'UTF-8'));
                echo $excerpt.'...';
              } else {
                echo str_replace('\n','',strip_tags($post->post_content));
              }
            ?>
            </p>
          </div>
        </article>
        <!-- /.media -->
        <?php 
          endwhile;
        endif;
        ?>
      </div>
    </section>
    <!-- ./blog-list -->

    <nav class="pagenation-area wrapper">
      <ul class="pagenation">
      <?php 
        if(function_exists('wp_pagenavi')){
          wp_pagenavi();
        }
        ?>
      </ul>
    </nav>
    <!-- ./pagenation-area -->

  </main>
  <!-- ./main -->

<?php get_footer(); ?>