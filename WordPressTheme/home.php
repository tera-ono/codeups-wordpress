<?php get_header(); ?>
<section class="l-news p-news">
  <div class="p-news__inner">
    <div class="p-news__items">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
      <?php get_template_part('includes/news'); ?>
      <?php endwhile;
      endif;  ?>
      <!-- パーツ化したページネーション -->
      <?php get_template_part('includes/pagination'); ?>
    </div><!-- /.l-news p-news -->
  </div>
</section>



<?php get_footer(); ?>