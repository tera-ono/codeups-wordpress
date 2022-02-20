<?php get_header(); ?>
<main>

  <section class="l-topMv p-topMv">
    <!-- Slider main container -->
    <div class="swiper p-topMv__swiper js-topMv-swiper">
      <!-- Additional required wrapper -->

      <div class="p-topMv__title">
        <h2 class="p-topMv__mainTitle">Live with nature</h2>
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
        <a href="<?php echo esc_url(home_url('news')); ?>" class="c-topNews-btn">すべてみる</a>
      </div>
    </div>
  </section>
  <!-- /l-topNews p-topNews -->



  <a href="<?php echo esc_url(home_url('contact')); ?>" class="">お問い合わせ</a>
  <br>

  <!-- セクションタイトル -->
  <div class="l-inner">
    <h3 class="c-sectionTitle">
      お問い合わせ
      <span class="c-sectionTitle__sub">Contact</span>
    </h3>
  </div>

  <div class="l-inner">
    <h3 class="c-sectionTitle">
      制作実績
      <span class="c-sectionTitle__sub c-sectionTitle__sub--right">Works</span>
    </h3>
  </div>






  <a href="<?php echo esc_url(home_url('works')); ?>" class="c-btn">詳しく見る</a>

  <a href="<?php echo esc_url(home_url('overview')); ?>" class="c-btn">詳しく見る</a>
  <div class="l-inner">
    <div class="c-cards">
      <?php
      $args = array(
        'post_type' => 'blog',
        'posts_per_page' => 3,
      );
      $posts = get_posts($args);
      foreach ($posts as $post) : setup_postdata($post);
      ?>

        <!-- パーツ化したブログカード -->
        <?php get_template_part('includes/blog_card'); ?>

      <?php endforeach;
      wp_reset_postdata(); ?>
    </div>
    <!-- /.c-cards -->
    <a href="<?php echo esc_url(home_url('blog')); ?>">詳しくみる</a>
  </div>

</main>






<?php get_footer(); ?>