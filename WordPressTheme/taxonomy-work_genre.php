<?php get_header(); ?>
制作ジャンル ターム毎の一覧ページ
<?php get_header(); ?>
制作実績 ターム毎のアーカイブ
<!-- パーツ化したリンクタブ -->
<?php get_template_part('includes/work_linkTab'); ?>
<div class="p-works__items p-worksItems">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <a href="<?php the_permalink(); ?>" class="c-work">
        <article>
          <div class="c-work__img">
            <?php get_template_part('includes/thumbnail'); ?>
            <!-- パーツ化したターム名出力 -->
            <?php get_template_part('includes/term_name'); ?>
          </div>
          <p class="c-works__title">
            <?php the_title(); ?>
          </p>
        </article>
      </a>

  <?php endwhile;
  endif; ?>
</div>
<!-- パーツ化したページネーション -->
<?php get_template_part('includes/pagination'); ?>
<?php get_footer(); ?>