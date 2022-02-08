<!-- カスタム投稿 works のタクソノミー:work_genreの1つ目のターム名の出力 -->
<?php $terms = get_the_terms(get_the_ID(), 'work_genre');
if ($terms[0]) {
  echo esc_html($terms[0]->name);
}
?>