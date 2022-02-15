<!-- ブログのカード記事 -->
<a href="<?php the_permalink(); ?>" class="c-cards__item c-card">
  <article>
    <div class="c-card__img">
      <?php get_template_part('includes/thumbnail'); ?>
    </div>
    <div class="c-card__body">
      <p class="c-card__title"><?php get_template_part('includes/title_limit'); ?></p>
      <p class="c-card__excerpt"><?php echo esc_html(get_the_excerpt()); ?></p>
      <div class="c-card__meta">
        <span class="c-card__category c-categoryTag">
          <!-- パーツ化したターム名出力 -->
          <?php get_template_part('includes/term_name'); ?>
        </span>
        <span class="c-card__time">
          <time class="" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
        </span>
      </div>
    </div>
  </article>
</a>