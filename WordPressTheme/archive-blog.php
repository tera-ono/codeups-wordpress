<?php get_header(); ?>
<main>
  <section class="l-blog p-blog">
    <div class="p-blog__inner l-inner">
      <!-- パーツ化したリンクタブ -->
      <?php get_template_part('includes/blog_linkTab'); ?>

      <div class="p-blog__cards c-cards">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if ($wp_query->current_post == 0) : ?>
              <?php get_template_part('includes/newIcon_blog_card'); ?>
            <?php else : ?>
              <!-- パーツ化したブログカード -->
              <?php get_template_part('includes/blog_card'); ?>
            <?php endif; ?>

        <?php endwhile;
        endif; ?>

      </div>
      <!-- パーツ化したページネーション -->
      <?php get_template_part('includes/pagination'); ?>
    </div>
  </section>
  <!-- /.l-blog p-blog -->
</main>



<?php get_footer(); ?>