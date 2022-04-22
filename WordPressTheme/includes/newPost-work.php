<!-- カスタム投稿 製作実績の最新の投稿1件 トップページのMVスライダーにpositionで重ねる -->
<?php
$args = [
  'post_type' => 'works',
  'posts_per_page' => 1,
];

$new_workPosts = get_posts($args);
foreach ($new_workPosts as $post) : setup_postdata($post);
?>

  <a href="<?php the_permalink(); ?>" class="p-topMV__newPost c-newPost-work">
    <div class="c-newPost-work__inner">
      <h3 class="c-newPost-work__heading">最新の制作実績</h3>
      <article class="c-newPost-work__item">
        <div class="c-newPost-work__img">
          <?php get_template_part('includes/thumbnail'); ?>
        </div>
        <div class="c-newPost-work__body">
          <div class="c-newPost-work__title">
            <?php echo esc_html(get_the_title(), 20, '...'); ?>
          </div>
          <div class="c-newPost-work__meta">
            <time class="c-newPost-work__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
          </div>
        </div>
      </article>
    </div>
  </a>
<?php endforeach;
wp_reset_postdata(); ?>