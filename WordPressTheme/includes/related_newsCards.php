<!-- デフォルトの投稿の同じカテゴリーの関連記事 4つ出力-->
<?php $post_cats = get_the_category();
// サブループのパラメータ'category__in'の値が配列なので$cat_idsは配列と定義
$cat_ids = array();
//所属カテゴリーのIDリストを作っておく
foreach ($post_cats as $cat) {
  $cat_ids[] = $cat->term_id;
}
$args = array(
  'posts_per_page' => 4,   //投稿数：4
  'post__not_in'  => array(get_the_ID()), //現在の記事は省いて表示
  'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
  'orderby' => 'rand' // ランダムに
);

$related_news = get_posts($args);
foreach ($related_news as $post) : setup_postdata($post);
?>

<!-- 使い回せるお知らせのパーツ -->
<?php get_template_part('includes/news'); ?>

<?php endforeach;
wp_reset_postdata(); ?>