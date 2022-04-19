<?php get_header(); ?>
<main>
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
      <?php
      /* --- 繰り返しフィールドの値を取得 --- */
      $slider_images = SCF::get('slider_images');
      /* --- 繰り返しフィールドに値が入っていればスライダー表示 --- */
      // var_dump($slider_images);
      if (!empty($slider_images[0]['image'])) :
      ?>
        <div class="p-singleWork__swiperContainer">
          <!-- Slider main container -->
          <div class="p-singleWorks__swiper js-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <!-- 繰り返しカスタムフィールドでカスタム投稿の製作実績で設定した画像のURLを出力 :$imageは配列でURLは$image[0]に格納されている -->
              <?php
              // $slider_images = SCF::get('slider_images');
              foreach ($slider_images as $slider_image) :
              ?>
                <?php $image = wp_get_attachment_image_src($slider_image['image'], 'large');
                ?>
                <div class="swiper-slide">
                  <img src="<?php echo esc_url($image[0]); ?>" alt="">
                </div>
              <?php endforeach; ?>
            </div>
            <!-- If we need navigation buttons -->
            <!-- 画像が1枚だけならナビゲーションボタンを表示しない(2枚目($slider_images[1])が無ければ) -->
            <?php if (!empty($slider_images[1])) : ?>
              <div class="swiper-button-prev">
                <i class="fa-solid fa-chevron-left"></i>
              </div>
              <div class="swiper-button-next">
                <i class="fa-solid fa-chevron-right"></i>
              </div>
            <?php endif; ?>
          </div>

          <!-- 画像が1枚だけならサムネイルを表示しない(2枚目($slider_images[1])が無ければ) -->
          <?php if (!empty($slider_images[1])) : ?>
            <div class="p-singleWorks__thumbnail js-thumbnail">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <?php
                // $slider_images = SCF::get('slider_images');
                foreach ($slider_images as $slider_image) :
                ?>
                  <?php $image = wp_get_attachment_image_src($slider_image['image'], 'large'); ?>
                  <div class="swiper-slide">
                    <img src="<?php echo esc_url($image[0]); ?>" alt="">
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>
        </div><!-- p-singleWork__swiperContainer-->
      <?php endif; ?>

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
  <nav class="p-singleWorks__navigation">
    <?php get_template_part('includes/post_navLink'); ?>
  </nav>
  <!--.p-singleWorks__navigation -->
</main>

<?php get_template_part('includes/related_blogCards'); ?>
<?php get_footer(); ?>