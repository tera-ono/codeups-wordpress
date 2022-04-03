<?php get_header(); ?>
<div class="p-singleWorks l-singleWorks">
  <div class="p-singleWorks__inner">
    <h2 class="p-singleWorks__heading">
      <?php the_title(); ?>様 <span>製作実績</span>
    </h2>
    <div class="p-singleWorks__meta c-single-meta">
      <time class="p-singleWorks__date c-single-meta__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
      <span class="p-singleWorks__termTag c-single-meta__termTag c-term-tag">
        <!-- パーツ化したターム名出力 -->
        <?php get_template_part('includes/term_name'); ?>
      </span>
    </div>

    <!-- サムネイル連動スワイパー -->
    <div class="p-singleWork__swiperContainer">
      <!-- Slider main container -->
      <div class="p-singleWorks__swiper js-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/top-contents1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev">
          <i class="fa-solid fa-chevron-left"></i>
        </div>
        <div class="swiper-button-next">
          <i class="fa-solid fa-chevron-right"></i>
        </div>
      </div>

      <div class="p-singleWorks__thumbnail js-thumbnail">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/top-contents1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/content-1.jpg"); ?>" alt="">
          </div>
        </div>
      </div>

    </div><!-- p-singleWork__swiperContainer-->

    <div class="p-singleWorks__points">
      <div class="p-singleWorks__point p-singleWorks-point">
        <p class="p-singleWorks-point__title">制作のポイント</p>
        <p class="p-singleWorks-point__text">
          <?php the_field('create'); ?>
        </p>
      </div>
      <div class="p-singleWorks__point p-singleWorks-point">
        <p class="p-singleWorks-point__title">デザインのポイント</p>
        <p class="p-singleWorks-point__text">
          <?php the_field('design'); ?>
        </p>
      </div>
      <div class="p-singleWorks__point p-singleWorks-point">
        <p class="p-singleWorks-point__title">その他</p>
        <p class="p-singleWorks-point__text">
          <?php the_field('other'); ?>
        </p>
      </div>
    </div>
  </div>
  <!-- ."p-singleWorks__inner l-inner -->
</div>
<!-- /.p-singleWorks l-singleWorks -->

<!-- 個別投稿ページでの（デフォルト・カスタム投稿ページ共通）の前後の記事へのリンクと、その投稿タイプのアーカイブページへのリンク -->
<nav class="post__navigation">
  <?php get_template_part('includes/post_navLink'); ?>
</nav>
<!--.post__navigation -->

<?php get_template_part('includes/related_blogCards'); ?>
<?php get_footer(); ?>