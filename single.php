<?php get_header(); ?>  
    <div class="blog-detail blog-contents-wrapper wrapper">
      <div class="left-container">
        <section class="blog-container">
          <div class="article-header">
            <span class="article-header__category"><?php echo print_one_catname(); ?></span>
            <h1 class="article-header__heading"><?php the_title(); ?></h1>
            <div class="article-header__inline-box">
              <?php echo do_shortcode('[socialBtns]'); ?>
              <time class="article-header__date"><?php echo get_the_date(); ?></time>
            </div>
          </div>
          <!-- ./article-header -->
          <img class="blog-thumbnail" src="<?php get_thumbnail(); ?>">
          <div class="blog-body">
            <?php
            the_content();
            ?>
          </div>
          <!-- /.blog-body -->
        </section>
        <!-- /.blog-container -->

        <section class="recommend wrapper">
          <p class="recommend__heading">おすすめの記事</p>
          <?php 
          $args = array(
            'tag' => 'pickup',
            'posts_per_page' => 3,
            'ignore_sticky_posts' => true,
            'post__not_in' => array( $post->ID ),
            'orderby' => 'rand'
          );
          $recommend_query = new WP_Query($args);
          ?>
          <?php 
          while($recommend_query->have_posts()): $recommend_query->the_post();
          ?>
          <article class="recommend-media">
            <div class="recommend-media__image">
              <?php $category = get_the_category(); ?>
              <span class="recommend-media__category"><?php echo $category[0]->cat_name; ?></span>
              <img src="<?php echo get_thumbnail();?>" alt="" class="recommend-media__img">
            </div>
            <div class="recommend-media__body">
              <time class="recommend-media__date"><?php echo get_the_date() ?></time>
              <a href="<?php the_permalink(); ?>" class="recommend-media__link">
              <?php 
                  if(mb_strlen($post->post_title, 'UTF-8') > 23){
                    $title = mb_substr($post->post_title,0,23).'...';
                    echo $title;
                  } elseif(mb_strlen($post->post_title, 'UTF-8') == 0){
                    echo '___';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
              </a>
            </div>
          </article>
          <!-- ./recommend-media -->
          <?php 
          endwhile;
          wp_reset_postdata();
          ?>
        </section>
        <!-- ./recommend -->
      </div>
      <!-- /.left-container -->

      <aside class="sidebar right-container">
        <div class="article-box">
          <p class="article-box__title">関連記事</p>
        <?php 
            if(has_category()):
            $categories = get_the_category();
            $cat_ids = array();
            foreach($categories as $category){
              $cat_ids[] = $category->cat_ID;
            }
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'ignore_sticky_posts' => true,
              'post__not_in' => array( $post->ID ),
              'category__in' => $cat_ids,
              'orderby' => 'rand'
            );
            $cat_query = new WP_Query($args);
            ?>
            <?php if($cat_query->post_count > 0): ?>
          <ul class="article-list">
              <?php
              while($cat_query->have_posts()): $cat_query->the_post();
            ?>
            <li class="article-list__item">
              <div class="article-list__image">
                <img src="<?php get_thumbnail(); ?>" alt="" class="article-list__img">
              </div>
                <a href="<?php the_permalink(); ?>" class="article-list__link">
                  <?php 
                  if(mb_strlen($post->post_title, 'UTF-8') > 25){
                    $title = mb_substr($post->post_title,0,25).'...';
                    echo $title;
                  } elseif(mb_strlen($post->post_title, 'UTF-8') == 0){
                    echo '___';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
                </a>
            </li>
            <?php 
            endwhile;
            wp_reset_postdata();
            ?>
          </ul>
          <?php else: ?>
            関連記事が見つかりません。
          <?php 
        endif; // ($cat_query->post_count > 0)
      endif; // (has_category())
          ?>
        </div>
        <!-- ./article-box -->

        <div class="category-box">
          <p class="category-box__title">カテゴリー</p>
          <ul class="category-list">
            <?php 
            $args = array(
              'parent' => 0,
              'orderby' => 'term_order',
              'order' => 'ASC'
            );
            $categories = get_categories($args);

            foreach($categories as $category):
            ?>
              <li>・<a href="<?php echo get_category_link($category -> term_id); ?>" class="category-list__link"><?php echo $category -> name; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <!-- ./category-box -->

      </aside>
      <!-- ./sidebar -->

    </div>
  </main>
  <!-- ./main -->

<?php get_footer(); ?>