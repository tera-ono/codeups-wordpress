<?php get_header(); ?>
制作ジャンル ターム毎の一覧ページ
<?php get_header(); ?>
制作実績 ターム毎のアーカイブ
<!-- パーツ化したリンクタブ -->
<?php get_template_part('includes/work_linkTab'); ?>
<div class="p-works__items p-worksItems">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <!-- パーツ化したブログカード -->
      <?php get_template_part('includes/blog_card'); ?>

  <?php endwhile;
  endif; ?>
</div>
<!-- パーツ化したページネーション -->
<?php get_template_part('includes/pagination'); ?>
<?php get_footer(); ?>