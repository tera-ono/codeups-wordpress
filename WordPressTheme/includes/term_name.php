<!-- 現在の記事のカスタム投稿タイプを取得し、1つ目のターム名の出力 -->
<?php
/* --- 現在のページの投稿タイプを取得 --- */
$post_type = get_post_type();

/* --- 取得した投稿タイプが一致したら それのタクソノミーを変数に取得 --- */
if ($post_type == 'blog') {
  $taxonomy = 'blog_category';
} elseif ($post_type == 'works') {
  $taxonomy = 'work_genre';
}

/* --- 現在の記事のタームオブジェクトを取得 --- */
$terms = get_the_terms(get_the_ID(), $taxonomy); 

if ($terms[0]) {
  echo esc_html($terms[0]->name); //ターム名は複数かもしれないので、1つ目を表示
}
?>
