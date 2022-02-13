<!-- カスタム投稿の同じタームの関連記事 4つ出力-->
<?php $terms = get_the_terms(get_the_ID(), 'blog_category');
$args = array(
  'post_type' => 'blog',    //投稿タイプ：カスタム投稿のblog
  'posts_per_page' => 4,   //投稿数：4
  'post__not_in'  => array(get_the_ID()), //現在の記事は省いて表示
  // タクソノミーに関するパラメータをまとめる配列。重要『'tax_query'の値に"さらに配列で"各パラメータを指定していく』
  'tax_query' => array(

    array(
      'taxonomy' => 'blog_category', //タクソノミーを指定
      'field' => 'slug',          //'id' / 'slug'どちらでタームを指定するかを宣言
      'terms' => $terms[0], //タームのオブジェクトだと、'field'がslugでも、idでも対応できた！
    ),

  ),

);

  $related_blogs = get_posts($args);
  foreach($related_blogs as $post) :setup_postdata($post);
?>

<!-- パーツ化したカスタム投稿のブログカード -->
<?php get_template_part('includes/blog_card'); ?>

<?php endforeach; wp_reset_postdata();?>
