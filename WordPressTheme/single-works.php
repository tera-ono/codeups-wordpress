<?php get_header(); ?>
制作実績詳細ページ
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>

<?php endwhile;
endif; ?>

<!-- 個別投稿ページでの（デフォルト・カスタム投稿ページ共通）の前後の記事へのリンクと、その投稿タイプのアーカイブページへのリンク -->
<nav class="post__navigation">
  <?php get_template_part('includes/post_navLink'); ?>
</nav>
<!--.post__navigation -->

<?php get_template_part('includes/related_blogCards'); ?>
<?php get_footer(); ?>