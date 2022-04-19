<?php get_header(); ?>
<main>
  <section class="p-404 l-404">
    <div class="p-404__inner l-inner">
      <h2 class="p-404__heading">
        404 Not Found
      </h2>
      <p class="p-404__text">
        お探しのページは<br class="u-hidden-tab">
        見つかりませんでした。
      </p>
      <div class="p-404__link">
        <a href=<?php echo esc_url(home_url('/')); ?> class="c-btn">
          TOPへ
        </a>
      </div>
    </div>
  </section>
  <!-- /.p-404 l-404 -->
</main>
<?php get_footer(); ?>