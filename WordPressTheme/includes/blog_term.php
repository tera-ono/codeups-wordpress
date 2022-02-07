<!-- カスタム投稿 blog のタクソノミー:blog_categoryの1つ目のターム名の出力 -->
<?php $terms = get_the_terms(get_the_ID(), 'blog_category');
if ($terms[0]) {
  echo esc_html($terms[0]->name);
}
?>