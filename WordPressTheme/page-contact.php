<?php get_header(); ?>
<main>
  <section class="p-contact l-contact">
    <div class="p-contact__inner l-inner">
      <div class="p-contact__form p-contactForm">
        <?php if (have_posts()) : the_post() ?>
          <?php the_content(); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- /.p-contact l-contact -->
</main>
<?php get_footer(); ?>