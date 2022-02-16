<!-- ドロワーメニュー -->
<nav class="l-drawer p-drawer  js-drawer">
	<div class="p-drawer__inner">
		<?php
		wp_nav_menu(
			array(
				'depth' => 1,
				'theme_location' => 'drawer', //グローバルメニューをここに表示すると指定
				'container' => false,
				'menu_class' => 'p-drawer__items c-navItems', //ulのクラス
			)
		);
		?>




	</div>
</nav>