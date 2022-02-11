<!-- archive-works.phpとtaxonomy-works_genre.phpの内容は同じにしたいので、条件分岐で出力するタブを制御するしテンプレート化する -->
<div class="c-termLinks">
  <?php if (is_post_type_archive('works')) : ?>
    <span class="c-termLinks__items c-termLink is-active">すべて</span>
  <?php else : ?>
    <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="c-termLinks__items c-termLink">すべて</a>
  <?php endif; ?>
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
    <!-- 現在クエリされているオブジェクトのスラッグとforeachで1つ1つ切り出されたタクソノミーのタームのスラッグが一致した時に リンクが必要無いので、 spanタグに 元のスタイルの他に"is-active"を付ける -->
    <?php if (is_tax('work_genre') && $queried_object->slug == $genre_term->slug) : ?>
      <span class="c-termLinks__items c-termLink is-active"><?php echo esc_html($genre_term->name); ?>
      </span>
      <!-- 1つ1つ指定されたタクソノミー 制作ジャンル（work_genre）に含まれるタームへのリンクとターム名を出力 -->
    <?php else : ?>
      <a href="<?php echo esc_url(get_term_link($genre_term, 'work_genre')); ?>" class="c-termLinks__items c-termLink"><?php echo esc_html($genre_term->name); ?>
      </a>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
<!-- /.c-termLinks -->