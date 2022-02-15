<?php get_header(); ?>
<main>
  <h1 class="p-test">トップページです</h1>





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


<!-- お問い合わせページ以外に表示されるセクション footer.phpに含める -->
<section class="l-commonContact c-commonContact">
  <div class="l-inner">
    <!-- セクションタイトル -->
    <div class="c-commonContact__title">
      <h3 class="c-sectionTitle">
        お問い合わせ
        <span class="c-sectionTitle__sub">Contact</span>
      </h3>
    </div>
    <p class="c-commonContact__text">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </p>
    <div class="c-commonContact__link">
      <a href="<?php echo esc_url(home_url('contact')); ?>" class="c-btn">
        詳しくみる
      </a>
    </div>
  </div>
</section>
<!-- /.c-commonContact -->



<?php get_footer(); ?>