<!-- お問い合わせページ以外に表示されるセクション footer.phpに含める -->
<?php get_template_part('includes/contact_section'); ?>


<!-- フッターの中身 -->
<footer class="l-footer p-footer">
  <div class="p-footer__inner">
    <div class="p-footer__items">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="p-footer__logo">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/logo.svg'); ?>" alt="">
      </a>

      <nav class="p-footer__nav c-footerNav">
        <?php
        wp_nav_menu(
          array(
            'depth' => 1,
            'theme_location' => 'footer', //フッターメニューをここに表示すると指定
            'container' => false,
            'menu_class' => 'c-footerNav__items c-navItems', //ulのクラス
            'link_before' => '<span>',
            'link_after' => '</span>',
          )
        );
        ?>
      </nav>
    </div>
    <p class="p-footer__copyright"> © 2021 CodeUps Inc.</p>
  </div>
</footer>

<!-- スクロールトップボタン -->
<div class="c-scrollTop js-scrollTop">
  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/scrollTop.png'); ?>" alt="">
</div>