<?php get_header(); ?>
<main>
  <section class="p-contact l-contact">
    <div class="p-contact__inner">
      <?php if (have_posts()) : the_post() ?>
        <div class="p-contact__form p-contactForm">
          <?php the_content(); ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- /.p-contact l-contact -->
</main>
<?php get_footer(); ?>
