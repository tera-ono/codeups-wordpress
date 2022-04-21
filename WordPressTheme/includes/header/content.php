<!-- headerの中身 -->
<header class="l-header p-header js-header">
	<div class="p-header__inner">

		<a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__logo">
			<h1><img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/common/logo.svg"); ?>" alt="CodeUpsロゴ"></h1>
		</a>
		<!-- グローバルメニュー -->
		<nav class="p-header__nav p-header-nav">
			<?php
			wp_nav_menu(
				array(
					'depth' => 1,
					'theme_location' => 'global', //グローバルメニューをここに表示すると指定
					'container' => false,
					'menu_class' => 'p-header-nav__items c-navItems', //ulのクラス
					'link_before' => '<span>',
					'link_after' => '</span>'
				)
			);
			?>
		</nav>



		<!-- ハンバーガーメニュー -->
		<button class="c-mobile-menu js-mobile-menu u-hidden-tab-large">
			<span class="c-mobile-menu__bar"></span>
			<span class="c-mobile-menu__bar"></span>
			<span class="c-mobile-menu__bar"></span>
		</button>
	</div>
	<!--.p-header__inner-->
</header>


<!-- ドロワーメニュー パーツ化 -->
<?php get_template_part('includes/header/drawer'); ?>

<!-- トップページ、個別投稿ページ、お問い合わせ完了ページ、404以外 でメインビュー表示 -->
<?php if (!(is_front_page() || is_single() || is_page('thanks') || is_404())) : ?>
	<section class="p-commonMv js-commonMv">
		<h2 class="p-commonMv__title l-inner">
			<?php if (is_tax()) {
				single_term_title();
			} else {
				wp_title('');
			}
			?>
		</h2>
	</section>
<?php endif; ?>
<!-- /.l-commonMv p-commonMv -->

<!-- トップページ&お問い合わせ完了ページ&404ページ以外はパンくずリストを表示 -->
<?php if (!((is_front_page()) || is_404() || is_page('thanks'))) : ?>
	<?php get_template_part('includes/header/breadcrumbs'); ?>
<?php endif; ?>