<!-- お知らせ＆ブログの詳細ページ -->
<?php get_header(); ?>
<main>
  <div class="p-single l-single">
    <div class="p-single__inner">
      <h2 class="p-single__heading">
        <?php the_title(); ?>
      </h2>
      <div class="p-single__meta c-single-meta">
        <time class="p-single__date c-single-meta__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
        <span class="p-single__termTag c-single-meta__termTag c-term-tag">
          <!-- パーツ化したターム名出力 -->
          <?php get_template_part('includes/term_name'); ?>
        </span>
      </div>
      <!-- 本文 -->
      <div class="p-single__content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
      </div>

      <!-- 個別投稿ページでの（デフォルト・カスタム投稿ページ共通）の前後の記事へのリンクと、その投稿タイプのアーカイブページへのリンク -->
      <nav class="p-single__navigation">
        <?php get_template_part('includes/post_navLink'); ?>
      </nav>
    </div>
  </div>


</main>

<!-- カスタム投稿ブログの個別投稿ページだったら -->
<?php if (is_singular('blog')) {
  get_template_part('includes/related_blogCards');
  //  デフォルトの投稿ページだったら
} elseif (is_single()) {
  get_template_part('includes/related_newsCards');
} ?>

<?php get_footer(); ?>