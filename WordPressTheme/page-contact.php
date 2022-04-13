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
<!-- <div class="p-contactForm__items">
  <dl class="p-contactForm__item">
    <dt class="p-contactForm__heading">※会社名・団体名</dt>
    <dd class="p-contactForm__input">[mwform_text name="会社名・団体名" size="60" placeholder="会社名・団体名を入力してください"]</dd>
  </dl>
  <dl class="p-contactForm__item">
    <dt class="p-contactForm__heading">※部署名</dt>
    <dd class="p-contactForm__input">[mwform_text name="部署名" size="60" placeholder="部署名を入力してください"]</dd>
  </dl>


  <dl class="p-contactForm__item">
    <dt class="p-contactForm__heading">※お名前</dt>
    <dd class="p-contactForm__input">[mwform_text name="お名前" size="60" placeholder="お名前を入力してください"]</dd>
  </dl>


  <dl class="p-contactForm__item">
    <dt class="p-contactForm__heading">※ふりがな</dt>
    <dd class="p-contactForm__input">[mwform_text name="ふりがな" size="60" placeholder="ふりがなを入力してください"]</dd>
  </dl>


  <dl class="p-contactForm__item">
    <dt class="p-contactForm__heading">※メールアドレス</dt>
    <dd class="p-contactForm__input">[mwform_email name="メールアドレス" size="60" placeholder="メールアドレスを入力してください"]</dd>
  </dl>


  <dl class="p-contactForm__item">
    <dt class="p-contactForm__heading">※お問い合わせ内容</dt>
    <dd class="p-contactForm__input">[mwform_textarea name="お問い合わせ内容" cols="50" rows="5" placeholder="お問い合わせ内容を入力してください"]</dd>
  </dl>
</div>
<div class="p-contactForm__btn">
  [mwform_submit name="送信ボタン" value="送信"]
</div> -->