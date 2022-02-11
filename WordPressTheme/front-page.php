<?php get_header(); ?>
<h1 class="p-test">トップページです</h1>





<a href="<?php echo esc_url(home_url('contact')); ?>" class="">お問い合わせ</a>
<br>


<!-- デフォルト投稿1件表示 -->
<section class="l-topNews p-topNews">
  <div class="p-topNews__inner l-inner">
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 1,
    );
    $posts = get_posts($args);
    foreach ($posts as $post) : setup_postdata($post);
    ?>
      <div class="c-news">
        <div class="c-news__meta">
          <time class="c-news__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
          <span class="c-news__category">
            <?php get_template_part('includes/cat_name'); ?>
          </span>
        </div>
        <a href="<?php the_permalink(); ?>" class="c-news__linkTitle">
          <?php the_title(); ?>
        </a>
      </div><!-- c-news -->
    <?php endforeach;
    wp_reset_postdata(); ?>
    <div class="p-topNews__btn">
      <a href="<?php echo esc_url(home_url('news')); ?>" class="c-topNews-btn">すべてみる</a>
    </div>
  </div>
</section>



<a href="<?php echo esc_url(home_url('works')); ?>" class="c-btn">詳しく見る</a>

<a href="<?php echo esc_url(home_url('overview')); ?>" class="c-btn">詳しく見る</a>


<?php
$args = array(
  'post_type' => 'blog',
  'posts_per_page' => 3,
);
$posts = get_posts($args);
foreach ($posts as $post) : setup_postdata($post);
?>

  <!-- パーツ化したブログカード -->
  <?php get_template_part('includes/blog_card'); ?>
  
<?php endforeach;
wp_reset_postdata(); ?>

<a href="<?php echo esc_url(home_url('blog')); ?>">詳しくみる</a>

<?php get_footer(); ?>