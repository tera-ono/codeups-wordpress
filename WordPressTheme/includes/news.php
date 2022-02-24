<!-- 使い回せるお知らせのパーツ -->

<div class="p-news__item c-news">
  <div class="c-news__meta">
    <time class="c-news__time" datetime="<?php the_time('c'); ?>">
      <?php the_time('Y.m.d'); ?>
    </time>
    <span class="c-news__category">
      <?php get_template_part('includes/cat_name'); ?>
    </span>
  </div>
  <a href="<?php the_permalink(); ?>" class="c-news__linkTitle">
    <?php the_title(); ?>
  </a>
</div><!-- c-news -->