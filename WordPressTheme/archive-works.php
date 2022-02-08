<?php get_header(); ?>
制作実績アーカイブ
<div class="c-termLinks">
  <span href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="c-termLinks__items c-termLink is-active">すべて</span>
  <!-- 1.get_terms()で、指定されたタクソノミー 制作ジャンル（work_genre）に含まれるターム（分類のオブジェクト）$genre_termsを取得します。
'hide_empty'=> (真偽値) 空の（投稿などのオブジェクトに付けられていない）タームを返しません。
 1 (true) - デフォルト（空のタームを出力しない）
0 (false) （空のタームを出力する）-->
  <?php
  $genre_terms = get_terms('work_genre', array('hide_empty' => false));
  foreach ($genre_terms as $genre_term) :
  ?>
    <!-- 1つ1つ指定されたタクソノミー 制作ジャンル（work_genre）に含まれるタームへのリンクとターム名を出力 -->
    <a href="<?php echo esc_url(get_term_link($genre_term, 'work_genre')); ?>" class="c-termLink"><?php echo esc_html($genre_term->name); ?>
    </a>
    <?php endforeach; ?>
</div>
<!-- /.c-termLinks -->

<div class="p-works__items p-worksItems"></div>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <div class="p-worksItems__item c-worksItem">
    <div class="c-worksItem__img">
      <?php get_template_part('includes/thumbnail'); ?>
      <span class="c-worksItem__term">
        <?php get_template_part('includes/works_term'); ?>
      </span>
    </div>
    <p class="c-worksItem__title">
      <?php the_title(); ?>
    </p>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>