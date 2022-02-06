<?php get_header(); ?>
  <h1 class="p-test">トップページです</h1>

  <a href="<?php echo esc_url(home_url('news')); ?>" class="">全てみる</a>
  <a href="<?php echo esc_url(home_url('works')); ?>" class="">詳しく見る</a>
  <a href="<?php echo esc_url(home_url('overview')); ?>" class="">詳しく見る</a>
  <a href="<?php echo esc_url(home_url('blog')); ?>">詳しくみる</a>
  <a href="<?php echo esc_url(home_url('contact')); ?>" class="">お問い合わせ</a>   
<?php get_footer(); ?>