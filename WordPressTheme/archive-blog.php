<?php get_header(); ?>
ブログ一覧ページ
<div class="l-inner">
  <!-- パーツ化したリンクタブ -->
  <?php get_template_part('includes/blog_linkTab'); ?>

  <div class="c-cards">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- パーツ化したブログカード -->
        <?php get_template_part('includes/blog_card'); ?>

    <?php endwhile;
    endif; ?>

    <!-- パーツ化したページネーション -->
    <?php get_template_part('includes/pagination'); ?>
  </div>
</div>


<?php get_footer(); ?>