<?php get_header(); ?>
<h1 class="p-test">お知らせページです</h1>
<section class="l-news p-news">
  <div class="p-news__items l-inner">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="c-news">
          <div class="c-news__meta">
            <time class="c-news__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            <span class="c-news__category">
              <?php get_template_part('includes/cat_name'); ?>
            </span>
          </div>
          <a href="<?php the_permalink(); ?>" class="c-news__linkTitle">
            <?php the_title(); ?>
          </a>
        </div><!-- c-news -->
    <?php endwhile;
    endif;  ?>
    
    <!-- ページが1ページ以上あれば以下を表示 -->
    <?php if (paginate_links()) : ?>
      <!-- pagination -->
      
      <div class="c-pagination">
        <?php
        echo
        paginate_links(
          array(
            'total' => 4,
            'end_size' => 1,
            'mid_size' => 2,
            'prev_next' => true,
            'prev_text' => 'PREV',
            'next_text' => 'NEXT',
          )
        );
        ?>
      </div><!-- /pagenation -->
    <?php endif; ?>

  </div>
</section>
<!-- /.l-news p-news -->


<?php get_footer(); ?>