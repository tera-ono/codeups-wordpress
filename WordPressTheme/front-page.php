<?php get_header(); ?>
<main>

  <section class="l-topMv p-topMv js-topMv">
    <!-- Slider main container -->
    <div class="swiper p-topMv__swiper js-topMv-swiper">
      <!-- Additional required wrapper -->

      <div class="p-topMv__title">
        <h2 class="p-topMv__mainTitle">Live With Nature</h2>
        <p class="p-topMv__subTitle">自然と共に暮らす</p>
      </div>
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri() . "/assets/images/sp/mv1-sp.jpg") ?>">
            <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri() . "/assets/images/pc/mv1-pc.jpg") ?>">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/pc/mv1-pc.jpg") ?>" alt="本社ビル">
          </picture>
        </div>

        <div class="swiper-slide">
          <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri() . "/assets/images/sp/mv2-sp.jpg") ?>">
          <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri() . "/assets/images/pc/mv2-pc.jpg") ?>">
          <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/pc/mv2-pc.jpg") ?>" alt="本社ビル">
        </div>

        <div class="swiper-slide">
          <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri() . "/assets/images/sp/mv3-sp.jpg") ?>">
          <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri() . "/assets/images/pc/mv3-pc.jpg") ?>">
          <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/pc/mv3-pc.jpg") ?>" alt="本社ビル">
        </div>
      </div>
    </div>
  </section>
  <!-- /.l-topMv p-topMv -->

  <?php get_template_part('includes/loader'); ?>

  <!-- デフォルト投稿1件表示 -->
  <section class="l-topNews p-topNews">
    <div class="p-topNews__inner l-inner">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
      );
      $posts = get_posts($args);
      foreach ($posts as $post) : setup_postdata($post);
      ?>

        <!-- 使い回せるお知らせのパーツ -->
        <?php get_template_part('includes/news'); ?>

      <?php endforeach;
      wp_reset_postdata(); ?>
      <div class="p-topNews__btn">
        <!-- タブレット以降表示 -->
        <a href="<?php echo esc_url(home_url('news')); ?>" class="c-topNews-btn">すべてみる</a>
        <!-- タブレット以降消す -->
        <a href="<?php echo esc_url(home_url('news')); ?>" class="c-btn u-hidden-tab">すべてみる</a>
      </div>
    </div>
  </section>
  <!-- /l-topNews p-topNews -->

  <section class="l-topContent p-topContent p-bgLine">
    <div class="p-topContent__title l-inner">
      <h3 class="p-topContent__title c-sectionTitle c-sectionTitle__sub--left">
        事業内容
        <span class="c-sectionTitle__sub">Contact</span>
      </h3>
    </div>

    <div class="p-topContent__items">
      <a href=<?php echo esc_url(home_url('content')); ?> class="p-topContent__item  p-topContent-item">
        <h4 class="p-topContent-item__title">経営理念ページへ</h4>
        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/top-contents1.jpg") ?>" alt="事業内容ページ">
      </a>
      <a href=<?php echo esc_url(home_url('content')); ?> class="p-topContent__item p-topContent-item">
        <h4 class="p-topContent-item__title">理念1へ</h4>
        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/top-contents2.jpg") ?>" alt="事業内容ページ">
      </a>
      <a href=<?php echo esc_url(home_url('content')); ?> class="p-topContent__item p-topContent-item">
        <h4 class="p-topContent-item__title">理念2へ</h4>
        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/top-contents3.jpg") ?>" alt="事業内容ページ">
      </a>
      <a href=<?php echo esc_url(home_url('content')); ?> class="p-topContent__item p-topContent-item">
        <h4 class="p-topContent-item__title">理念3へ</h4>
        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/top-contents4.jpg") ?>" alt="事業内容ページ">
      </a>
    </div>
  </section>
  <!-- /.l-topContent p-topContent -->


  <section class="l-commonSection c-commonSection">
    <div class="c-commonSection__title l-inner">
      <h3 class="c-sectionTitle">
        制作実績
        <span class="c-sectionTitle__sub c-sectionTitle__sub--right">Works</span>
      </h3>
    </div>

    <div class="c-commonSection__item  c-commonSection-item">
      <div class="c-commonSection-item__inner l-inner">
        <div class="c-commonSection-item__swiperContainer">
          <!-- Slider main container -->
          <div class="swiper c-commonSection-item__swiper js-bg-flexItem__swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/top-slider1.jpg"); ?>" alt="PC画像">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/top-slider2.jpg"); ?>" alt="PC画像">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/top-slider3.jpg"); ?>" alt="PC画像">
              </div>

            </div>
            <!-- If we need pagination -->
          </div><!-- /swiper c-commonSection-item js-bg-flexItem__swiper -->
          <div class="swiper-pagination"></div>
        </div>
        <!-- /.c-commonSection-item__swiperContainer -->

        <div class="c-commonSection-item__body">
          <h4 class="c-commonSection-item__title">私たちの制作実績</h4>
          <p class="c-commonSection-item__text">
            私たちは、クライアント様の提供されるサービスの価値
            ・魅力を最大限に活かし、『目的』・『方向性』・『ターゲット』を明確にすることで希望される以上の結果を出すWebページを作成します！！
          </p>
          <div class="c-commonSection-item__btn">
            <a href="<?php echo esc_url(home_url('works')); ?>" class="c-btn">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.l-commonSection c-commonSection -->

  <section class="l-commonSection c-commonSection">
    <div class="c-commonSection__title l-inner">
      <h3 class="c-sectionTitle">
        企業概要
        <span class="c-sectionTitle__sub c-sectionTitle__sub--left">Overview</span>
      </h3>
    </div>

    <div class="c-commonSection__item  c-commonSection-item">
      <div class="c-commonSection-item__inner l-inner">
        <div class="c-commonSection-item__img">
          <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/top-overview.jpg"); ?>" alt="本社内">
        </div>
        <!-- /.c-commonSection-item__img -->

        <div class="c-commonSection-item__body">
          <h4 class="c-commonSection-item__title">私たちの仕事に対する考え方</h4>
          <p class="c-commonSection-item__text">
            私たちは、変化を恐れずに常にその時のベストな方法を模索します。<br>
            クライアント様の目的を達成するための最新の技術やツールを取り入れ、また私たち自身が働く場所にとらわれずに心と体が穏やかに過ごせるところで仕事をすることを推奨し、それが成果に還元出来ると信じております。
          </p>
          <div class="c-commonSection-item__btn">
            <a href="<?php echo esc_url(home_url('overview')); ?>" class="c-btn">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.l-commonSection c-commonSection -->

  <section class="l-topBlog p-topBlog">
    <div class="l-inner">
      <h3 class="p-topBlog__title c-sectionTitle">
        ブログ
        <span class="c-sectionTitle__sub c-sectionTitle__sub--right">Blog</span>
      </h3>
      <div class="p-topBlog__cards c-cards">
        <?php
        $args = array(
          'post_type' => 'blog',
          'posts_per_page' => 3,
        );
        $new_query = new WP_Query($args);
        ?>
        <?php if ($new_query->have_posts()) : ?>
          <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>

          <!-- 1番目の記事だったら -->
            <?php if ($new_query->current_post == 0) : ?>
              <?php get_template_part('includes/newIcon_blog_card'); ?>
              <!-- それ以降（2番目からの出力） -->
              <?php else : ?>
                <!-- パーツ化したブログカード -->
                <?php get_template_part('includes/blog_card'); ?>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata(); ?>
      </div>
      <!-- /.c-cards -->
      <div class="p-topBlog__btn">
        <a href="<?php echo esc_url(home_url('blog')); ?>" class="c-btn">詳しくみる</a>
      </div>
    </div>
  </section>
  <!-- /.l-topBlog p-topBlog -->


</main>






<?php get_footer(); ?>