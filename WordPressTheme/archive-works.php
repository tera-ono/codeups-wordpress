<?php get_header(); ?>
制作ジャンル一覧ページ
<?php get_header(); ?>
制作実績アーカイブ
<!-- パーツ化したリンクタブ -->
<?php get_template_part('includes/work_linkTab'); ?>

<div class="p-works__items p-worksItems">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="p-worksItems__item c-worksItem">
        <div class="c-worksItem__img">
          <?php get_template_part('includes/thumbnail'); ?>
          <span class="c-worksItem__term">
            <!-- パーツ化したターム名出力 -->
            <?php get_template_part('includes/term_name'); ?>
          </span>
        </div>
        <p class="c-worksItem__title">
          <?php the_title(); ?>
        </p>
      </a>
  <?php endwhile;
  endif; ?>
</div>
<!-- パーツ化したページネーション -->
<?php get_template_part('includes/pagination'); ?>
<?php get_footer(); ?>