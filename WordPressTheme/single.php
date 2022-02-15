<?php get_header(); ?>
お知らせ＆ブログの詳細ページ
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php the_content(); ?>

<?php endwhile; endif; ?>

<!-- 個別投稿ページでの（デフォルト・カスタム投稿ページ共通）の前後の記事へのリンクと、その投稿タイプのアーカイブページへのリンク -->
<nav class="post__navigation">
  <?php get_template_part('includes/post_navLink'); ?>
</nav>


<!-- カスタム投稿ブログの個別投稿ページだったら -->
<?php if(is_singular('blog')) {
   get_template_part('includes/related_blogCards'); 
  //  デフォルトの投稿ページだったら
} elseif(is_single()) {
  get_template_part('includes/related_newsCards'); 
} ?>

<?php get_footer(); ?>
