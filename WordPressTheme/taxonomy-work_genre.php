<?php get_header(); ?>
制作ジャンルごとの一覧ページ
<?php get_header(); ?>
制作実績アーカイブ
<div class="c-termLinks">
  <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="c-termLinks__items c-termLink">すべて</a>
  <!-- 1.get_queried_object()で、現在クエリされているオブジェクトを取得 -->
  <!-- 2.get_terms()で、指定されたタクソノミー 制作ジャンル（work_genre）に含まれるターム（分類のオブジェクト）$genre_termsを取得します。
'hide_empty'=> (真偽値) 空の（投稿などのオブジェクトに付けられていない）タームを返しません。
 1 (true) - デフォルト（空のタームを出力しない）
0 (false) （空のタームを出力する）-->
  <?php
  $queried_object = get_queried_object();
  $genre_terms = get_terms('work_genre', array('hide_empty' => false));
  foreach ($genre_terms as $genre_term) :
  ?>
 
    <!-- 1つ1つ指定されたタクソノミー 制作ジャンル（work_genre）に含まれるタームへのリンクとターム名を出力 -->
     <!-- 現在クエリされているオブジェクトのスラッグとforeachで1つ1つ切り出されたタクソノミーのタームのスラッグが一致した時にpost_classで'is-active'クラスを付与して、リンクタグにスタイルをつける -->
    <a <?php if($queried_object -> slug == $genre_term -> slug){ post_class('is-active c-termLinks__items c-termLink'); }  ?> href="<?php echo esc_url(get_term_link($genre_term, 'work_genre')); ?>" class="c-termLinks__items c-termLink"><?php echo esc_html($genre_term->name); ?>
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
<?php get_footer(); ?>