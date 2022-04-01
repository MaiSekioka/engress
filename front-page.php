<?php get_header(); ?>
    <main>
      <section class="main-visual">
        <p class="main-visual__title">TOEFL対策は<br class="sp-br">Engress</p>
        <p class="main-visual__text">
          日本人へのTOEFL指導歴豊かな講師陣の<br />
          コーチング型TOEFLスクール
        </p>
        <button class="main-visual__request-btn">
          <a href="<?php echo esc_url(home_url('contact')); ?>">資料請求</a>
        </button>
        <a href="<?php echo esc_url(home_url('contact')); ?>" class="main-visual__link">お問い合わせ</a>
      </section>
      <!-- ./main-visual -->

      <section class="introduce">
        <div class="wrapper">
          <h3 class="section-title section-title--white">
            TOEFL学習で<br class="sp-br">こんな悩みありませんか？
          </h3>
          <ul class="problem-list">
            <li class="problem-list__item">
              勉強の習慣が<br />
              身についていない
            </li>
            <li class="problem-list__item">
              勉強しているはず<br />
              なのに点数が伸びない
            </li>
            <li class="problem-list__item">
              正しい勉強方法が<br />
              わからない
            </li>
          </ul>
          <div class="solution-box-wrapper">
            <div class="solution-box">
              <p class="solution-box__title">
                Engressは<br />
                <span class="line--orange">TOEFLに特化した<br class="sp-br">スクール</span>です
              </p>
              <p class="solution-box__text">
                完全オーダーメイドで、<br class="sp-br">１人１人の悩みに合わせた最適な指導で<br />
                TOEFLの苦手分野を克服します。
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- ./introduce -->

      <section class="strength">
        <div class="wrapper">
          <h3 class="section-title">TOEFL対策に特化した<br class="sp-br">Engress3つの強み</h3>
          <div class="strength-media">
            <div class="strength-body">
              <span class="strength-body__badge">特長１</span>
              <p class="strength-body__title">
                TOEFLに最適化された<br />無駄のないカリキュラム
              </p>
              <p class="strength-body__text">
                TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
              </p>
            </div>
            <div class="strength-image">
              <img
                src="<?php echo get_template_directory_uri().'/img/strength01.png'; ?>"
                alt=""
                class="strength-image__img"
              />
            </div>
          </div>
          <!-- ./strength-media -->

          <div class="strength-media strength-media--reverse">
            <div class="strength-body">
              <span class="strength-body__badge">特長２</span>
              <p class="strength-body__title">
                日本人指導歴10年以上の<br />経験豊富な講師陣
              </p>
              <p class="strength-body__text">
                Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
              </p>
            </div>
            <div class="strength-image">
              <img
                src="<?php echo get_template_directory_uri().'/img/strength02.png'; ?>"
                alt=""
                class="strength-image__img"
              />
            </div>
          </div>
          <!-- ./strength-media -->

          <div class="strength-media">
            <div class="strength-body">
              <span class="strength-body__badge">特長３</span>
              <p class="strength-body__title">平均3ヶ月でTOEFL iBT20点アップ</p>
              <p class="strength-body__text">
                Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
              </p>
            </div>
            <div class="strength-image">
              <img
                src="<?php echo get_template_directory_uri().'/img/strength03.png'; ?>"
                alt=""
                class="strength-image__img"
              />
            </div>
          </div>
          <!-- ./strength-media -->

        </div>
            <div class="price-area">
              <p class="price-area__text">Engressの料金プランはこちら</p>
              <button class="price-area__btn"><a href="<?php echo esc_url(home_url('price')); ?>">料金を見てみる</a></button>
            </div>
            <!-- ./price-area -->
      </section>
      <!-- ./strength -->

      <section class="case">
        <div class="wrapper">
          <h3 class="section-title section-title--white">TOEFL成功事例</h3>
          <div class="case-cards">

            <div class="case-card">
            <?php 
            $first_student = get_field('case_student01');
            ?>
              <p class="case-card__title">
                <?php echo $first_student['case_title']; ?>
              </p>
              <div class="case-card__image" style="background-image: url(<?php echo $first_student['case_icon']; ?>);"></div>
              <ul class="case-card__detail-box">
                <li class="case-card__occupation"><?php echo $first_student['case_occupation']; ?></li>
                <li class="case-card__name"><?php echo $first_student['case_name'].'さん'; ?></li>
                <li class="case-card__achievement"><?php echo $first_student['case_achievement']; ?></li>
              </ul>
            </div>
            <!-- ./case-card -->


            <div class="case-card">
            <?php 
              $second_student = get_field('case_student02');
            ?>
              <p class="case-card__title">
                <?php echo $second_student['case_title']; ?>
              </p>
              <div class="case-card__image" style="background-image: url(<?php echo $second_student['case_icon']; ?>);"></div>
              <ul class="case-card__detail-box">
                <li class="case-card__occupation"><?php echo $second_student['case_occupation']; ?></li>
                <li class="case-card__name"><?php echo $second_student['case_name'].'さん'; ?></li>
                <li class="case-card__achievement"><?php echo $second_student['case_achievement']; ?></li>
              </ul>
            </div>
            <!-- ./case-card -->

            <div class="case-card">
            <?php 
              $third_student = get_field('case_student03');
            ?>
              <p class="case-card__title">
                <?php echo $third_student['case_title']; ?>
              </p>
              <div class="case-card__image" style="background-image: url(<?php echo $third_student['case_icon']; ?>);"></div>
              <ul class="case-card__detail-box">
                <li class="case-card__occupation"><?php echo $third_student['case_occupation']; ?></li>
                <li class="case-card__name"><?php echo $third_student['case_name'].'さん'; ?></li>
                <li class="case-card__achievement"><?php echo $third_student['case_achievement']; ?></li>
              </ul>
            </div>
            <!-- ./case-card -->
            <!-- ./case-card -->
          </div>
          <!-- ./case-cards -->
        </div>
      </section>
      <!-- ./case -->

      <section class="flow">
        <div class="wrapper">
          <h3 class="section-title">ご利用の流れ</h3>
          <div class="flow-box">
            <p class="flow-box__number">01</p>
            <p class="flow-box__title">お問い合わせ</p>
            <p class="flow-box__text">
              まずはフォームまたはお電話からお申し込みください。
            </p>
          </div>
          <div class="flow-box">
            <p class="flow-box__number">02</p>
            <p class="flow-box__title">ヒアリング</p>
            <p class="flow-box__text">
              現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。
            </p>
          </div>
          <div class="flow-box">
            <p class="flow-box__number">03</p>
            <p class="flow-box__title">学習プランのご提供</p>
            <p class="flow-box__text">
              目標達成のために最適な学習プランをご提案致します。
            </p>
          </div>
          <div class="flow-box">
            <p class="flow-box__number">04</p>
            <p class="flow-box__title">ご入会</p>
            <p class="flow-box__text">
              お申込み完了後、レッスンがスタートします。
            </p>
          </div>
        </div>
      </section>
      <!-- ./flow -->

      <section class="faq">
        <div class="wrapper">
          <h3 class="section-title">よくある質問</h3>
          <div class="faq-contents-wrapper">
            <div class="faq__question-box">
              <p class="faq__question-text">
                Engressはサラリーマンでも学習を続けられるでしょうか？
              </p>
              <button class="faq__toggle-btn is-active"></button>
            </div>
            <div class="faq__answer-area is-active">
              Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
            </div>

            <div class="faq__question-box">
              <p class="faq__question-text">
                教材はオリジナルのものを使用しているのでしょうか？
              </p>
              <button class="faq__toggle-btn"></button>
            </div>
            <div class="faq__answer-area">
              ８割以上がEngressオリジナルの教材です。その他、既存の教材も含めて個々の生徒のレベルに合わせた教材を組み合わせ、オリジナルのカリキュラムを作成します。
            </div>

            <div class="faq__question-box">
              <p class="faq__question-text">講師に日本人はいますか？</p>
              <button class="faq__toggle-btn"></button>
            </div>
            <div class="faq__answer-area">
              日本人講師も在籍しております。いずれの講師もTESOL(英語教授法)を取得しており、英語力、指導力ともに優れた講師陣です。
            </div>

            <div class="faq__question-box">
              <p class="faq__question-text">
                TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？
              </p>
              <button class="faq__toggle-btn"></button>
            </div>
            <div class="faq__answer-area">
              EngressはTOEFLに特化したスクールのため、海外大学合格のサポートは致しておりません。学習の進捗やご要望に合わせて、提携スクールのご紹介は可能です。
            </div>
          </div>
        </div>
      </section>
      <!-- ./faq -->

      <div class="topics-area wrapper">
      <section class="blog">
        <?php 
        $args = [
          'post_type' => 'post',
          'posts_per_page' => 3,
          'ignore_sticky_posts' => true
        ];
        $blog_query = new WP_Query($args);
        ?>
          <h3 class="section-title">ブログ</h3>
          <?php 
          if($blog_query -> have_posts()): 
            while($blog_query -> have_posts()): $blog_query -> the_post();
          ?>
          <div class="blog-media">
            <div class="blog-media__image">
              <span class="blog-media__category"><?php print_one_catname(); ?></span>
              <?php 
              if(has_post_thumbnail()){
                echo '<img class="blog-media__img" src="'.get_the_post_thumbnail_url(get_the_ID(),'blog-thumbnail').'">';
              } else {
                echo '<img class="blog-media__img" src="'.get_template_directory_uri().'/img/thumbnail-dummy@2x.png">';
              }
              ?>
            </div>
            <div class="blog-media__body">
              <a href="<?php the_permalink(); ?>" class="blog-media__link">
              <?php
              if(mb_strlen($post->post_title, 'UTF-8') > 25){
                $title = mb_substr($post->post_title,0,25).'...';
                echo $title;
              } else {
                echo $post->post_title;
              }
              ?>
              </a>
              <time class="blog-media__date"><?php the_date(); ?></time>
            </div>
          </div>
          <?php 
            endwhile;
          wp_reset_postdata();
          endif;
          ?>
        </section>
        <!-- ./blog -->
  
        <section class="news">
          <?php 
          $args = [
            'post_type' => 'news',
            'posts_per_page' => 3,
          ];
          $news_query = new WP_Query($args);
          ?>
          <h3 class="section-title">お知らせ</h3>
          <?php 
          if($news_query -> have_posts()): 
            while($news_query -> have_posts()): $news_query -> the_post();
          ?>
          <div class="news-box">
            <time class="news-box__time"><?php echo get_the_date(); ?></time>
            <a href="<?php the_permalink(); ?>" class="news-box__link">
            <?php
              if(mb_strlen($post->post_title, 'UTF-8') > 20){
                $title = mb_substr($post->post_title,0,20).'...';
                echo $title;
              } else {
                echo $post->post_title;
              }
              ?>
            </a>
          </div>
          <?php 
            endwhile;
          wp_reset_postdata();
          endif;
          ?>
        </section>
        <!-- ./news -->
      </div>
      <!-- /.topics-area -->
    </main>
    <!-- ./main -->

<?php get_footer(); ?>
