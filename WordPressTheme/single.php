<?php get_header(); ?>
お知らせ＆ブログの詳細ページ

<!-- カスタム投稿ブログの個別投稿ページだったら -->
<?php if(is_singular('blog')) {
   get_template_part('includes/related_blogCards'); 
  //  デフォルトの投稿ページだったら
} elseif(is_single()) {
  get_template_part('includes/related_newsCards'); 
} ?>

<?php get_footer(); ?>
