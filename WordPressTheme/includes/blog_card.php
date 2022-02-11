<!-- ブログのカード記事 -->
<a href="<?php the_permalink(); ?>" class="c-card">
  <article>
    <div class="c-card__img">
      <?php get_template_part('includes/thumbnail'); ?>
    </div>
    <div class="c-card__body">
      <p class="c-card__title"><?php the_title(); ?></p>
      <div class="c-card__meta">
        <span class="c-cat-tag">
          <?php get_template_part('includes/blog_term'); ?>
        </span>
        <span class="c-card__time">
          <time class="" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
        </span>
      </div>
    </div>
  </article>
</a>