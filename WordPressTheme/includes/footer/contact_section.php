<!-- お問い合わせページ以外に表示されるセクション footer.phpに含める -->
<?php if(!is_page('contact')) : ?>
<section class="l-commonContact c-commonContact">
  <div class="l-inner">
    <!-- セクションタイトル -->
    <div class="c-commonContact__title">
      <h3 class="c-sectionTitle">
        お問い合わせ
        <span class="c-sectionTitle__sub">Contact</span>
      </h3>
    </div>
    <p class="c-commonContact__text">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </p>
    <div class="c-commonContact__link">
      <a href="<?php echo esc_url(home_url('contact')); ?>" class="c-btn">
        詳しくみる
      </a>
    </div>
  </div>
</section>
<!-- /.c-commonContact -->
<?php endif; ?>