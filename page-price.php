<?php get_header(); ?>
    <section class="structure">
      <div class="wrapper">
        <h3 class="section-title section-title--under">料金体系</h3>
        <ul class="structure-list">
          <li class="structure-list__item">入会金 39,800円</li>
          <li class="structure-list__item">月額費用</li>
        </ul>
        <p class="structure__text">
          Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
        </p>
      </div>
    </section>
    <!-- ./structure -->

    <section class="plan">
      <div class="wrapper">
        <h3 class="section-title section-title--under">料金表</h3>
        <ul class="plan-contents-wrapper js-scrollable">
          <li class="plan-box">
            <?php 
            $basic = get_field('basic');
            ?>
            <div class="plan-box__title">基礎プラン</div>
            <p class="plan-box__price"><?php echo number_format($basic['price']); ?>円~</p>
            <p>*月額（税抜価格）</p>
            <ul class="plan-list">
              <li class="plan-list__item">カリキュラム作成</li>
              <li class="plan-list__item">TOEFL学習サポート</li>
              <li class="plan-list__item">週一回のビデオMTG</li>
            </ul>
          </li>
          <!-- ./plan-box -->

          <li class="plan-box">
            <?php 
            $practice = get_field('practice');
            ?>
            <div class="plan-box__title">演習プラン</div>
            <p class="plan-box__price"><?php echo number_format($practice['price']); ?>円~</p>
            <p>*月額（税抜価格）</p>
            <ul class="plan-list">
              <li class="plan-list__item">カリキュラム作成</li>
              <li class="plan-list__item">TOEFL学習サポート</li>
              <li class="plan-list__item">週一回のビデオMTG</li>
              <li class="plan-list__item">月二回の模試（解説付き）</li>
            </ul>
          </li>
          <!-- ./plan-box -->

          
          <div class="plan-box plan-box--recommend">
            <?php 
            $examination = get_field('examination')
            ?>
            <li class="plan-box__title">おすすめ<br>志望校対策プラン</li>
            <p class="plan-box__price"><?php echo number_format($examination['price']); ?>円~</p>
            <p>*月額（税抜価格）</p>
            <ul class="plan-list">
              <li class="plan-list__item">カリキュラム作成</li>
              <li class="plan-list__item">TOEFL学習サポート</li>
              <li class="plan-list__item">週一回のビデオMTG</li>
              <li class="plan-list__item">月二回の模試（解説付き）</li>
              <li class="plan-list__item">週一の英語面接対策</li>
            </ul>
          </div>
          <!-- ./plan-box -->

          <li class="plan-box">
            <?php 
            $flex = get_field('flex');
            ?>
            <p class="plan-box__title">フレックスプラン</p>
            <p class="plan-box__price"><?php echo number_format($flex['price']); ?>円~</p>
            <p>*月額（税抜価格）</p>
            <p class="plan-box__annotation">＊別途ご相談ください</p>
          </li>
          <!-- ./plan-box -->

        </ul>
        <!-- ./plan-contents-wrapper -->
        
      </div>
    </section>
    <!-- ./plan -->

  </main>
  <!-- ./main -->
<?php get_footer(); ?>