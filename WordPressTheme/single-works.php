<?php get_header(); ?>
<div class="p-singleWorks l-singleWorks">
  <div class="p-singleWorks__inner l-inner">
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