<?php get_header(); ?>
<h1 class="p-test">お知らせページです</h1>
<section class="l-news p-news">
  <div class="p-news__items l-inner">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
    <?php get_template_part('includes/news'); ?>
    <?php endwhile;
    endif;  ?>

    <!-- パーツ化したページネーション -->
    <?php get_template_part('includes/pagination'); ?>

  </div><!-- /.l-news p-news -->
</section>



<?php get_footer(); ?>