<?php get_header(); ?>
<main>
  <section class="p-thanks l-thanks">
    <div class="p-thanks__inner l-inner">
      <h2 class="p-thanks__heading">
        お問い合わせ完了
      </h2>
      <?php the_content(); ?>
      <div class="p-thanks__link">
        <a href=<?php echo esc_url(home_url('/')); ?> class="c-btn">
          TOPへ
        </a>
      </div>
    </div>
  </section>
  <!-- /.p-thanks l-thanks -->
</main>
<?php get_footer(); ?>