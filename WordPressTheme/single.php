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
          <?php
          if (is_singular('blog')) {
            get_template_part('includes/term_name');
          } elseif (is_singular('post')) {
            get_template_part('includes/cat_name');
          }
          ?>
        </span>
      </div>
      <!-- 本文 -->
      <div class="p-single__content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="p-single-content">
              <?php the_content(); ?>
            </div>
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


<div class="p-single__related-post">
  <div class="l-inner">
    <!-- カスタム投稿ブログの個別投稿ページだったら -->
    <?php if (is_singular('blog')) {
      get_template_part('includes/related_blogCards');
      //  デフォルトの投稿ページだったら
    } elseif (is_singular('post')) {
      get_template_part('includes/related_newsCards');
    } ?>
  </div>
</div>

<?php get_footer(); ?>