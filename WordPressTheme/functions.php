<?php

/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup()
{
	add_theme_support('post-thumbnails'); /* アイキャッチ */
	add_theme_support('automatic-feed-links'); /* RSSフィード */
	add_theme_support('title-tag'); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
	/* --- ブロックエディター（管理画面の*全ての*投稿記事編集画面）にCSSを適用させる記述 --- */
	add_theme_support('editor-styles');
	/* --- そのCSSファイルのパス --- */
	add_editor_style('assets/css/block-style.css');
}
add_action('after_setup_theme', 'my_setup');



/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
/* --- ファイル名間違い注意！！ --- */
function my_script_init()
{
	wp_enqueue_style('google-font1', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP&display=swap', array(), '1.0.1', 'all');
	
	if (is_front_page()) {
		wp_enqueue_style('google-font4', "https://fonts.googleapis.com/css2?family=Overlock:ital,wght@1,900&display=swap", array(), '1.0.1', 'all');
	}

	wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css", array(), '5.11.2', 'all');

	wp_enqueue_style('swiper-CDN', "https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.6/swiper-bundle.css", array(), '1.0.1', 'all');
	wp_enqueue_style('my', get_theme_file_uri('/assets/css/styles.css'), array(), filemtime(get_theme_file_path('/assets/css/styles.css')), 'all');
	

	wp_enqueue_script('swiper-CDN', "https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.6/swiper-bundle.min.js", array(), '1.0.0', true);

	if (is_front_page()) {
		wp_enqueue_script('mv-swiper', get_template_directory_uri() . '/assets/js/mv_slider.js', array(), '1.0.0', true);
	}

	if (is_singular('works')) {
		wp_enqueue_script('single-works_slider', get_theme_file_uri('/assets/js/single-works_slider.js'), array(), get_theme_file_path('/assets/js/single-works_slider.js'), true );
		
		// wp_enqueue_script('single-works_slider', get_template_directory_uri() . '/assets/js/single-works_slider.js', array(), '1.0.0', true);
	}

	if (is_page('contact')) {
		wp_enqueue_script('contact_error', get_theme_file_uri('/assets/js/contact_error.js'), array(), get_theme_file_path('/assets/js/contact_error.js'), true );
		
		// wp_enqueue_script('contact_error', get_template_directory_uri() . '/assets/js/contact_error.js', array(), '1.0.0', true);
	}

	wp_enqueue_script('my', get_theme_file_uri('/assets/js/script.js'), array(), get_theme_file_path('/assets/js/script.js'), true );
	
	// wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');




/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
function my_menu_init()
{
	register_nav_menus(
		array(
			'global'  => 'グローバルメニュー',
			'drawer'  => 'ドロワーメニュー',
			'footer' => 'フッターメニュー',
		)
	);
}
add_action('init', 'my_menu_init');


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title($title)
{

	if (is_home()) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif (is_category()) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title('', false) . '';
	} elseif (is_tag()) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title('', false) . '';
	} elseif (is_post_type_archive()) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title('', false) . '';
	} elseif (is_tax()) { /* タームアーカイブの場合 */
		$title = '' . single_term_title('', false);
	} elseif (is_search()) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html(get_query_var('s')) . '」の検索結果';
	} elseif (is_author()) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif (is_date()) { /* 日付アーカイブの場合 */
		$title = '';
		if (get_query_var('year')) {
			$title .= get_query_var('year') . '年';
		}
		if (get_query_var('monthnum')) {
			$title .= get_query_var('monthnum') . '月';
		}
		if (get_query_var('day')) {
			$title .= get_query_var('day') . '日';
		}
	}
	return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length($length)
{
	return 50;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'my_excerpt_more');


/**
 * カテゴリー名とターム名を1つだけ表示（aタグリンクも出しわけ）[引数デフォルト: カテゴリー]
 *
 * @param boolean $anchor aタグで出力するかどうか.
 * @param string  $taxonomy タクソノミー:初期値はデフォルトの投稿で使うcategory。 カスタム投稿の場合はそのタクソノミーを指定
 * @param integer $id 投稿id.
 * @return void
 */
function my_the_post_terms($anchor = false, $taxonomy = 'category', $id = 0)
{
  global $post;
  //引数が渡されなければ投稿IDを見るように設定
  if (0 === $id) {
    $id = $post->ID;
  }

  //ターム(カテゴリー)一覧を取得
  /* --- もし、taxonomy.php or category.phpだったら現在表示中のターム(カテゴリ)情報を取得 --- */
  if(is_tax() || is_category()) {
    $this_terms = get_queried_object();
    if ($this_terms) {
      if ($anchor) { //引数がtrueなら個別投稿記事リンク付きで出力
  
        echo '<a href="' . get_the_permalink() . '">' . esc_html($this_terms->name) . '</a>';
      } else { //引数がfalseならカテゴリー名のみ出力
        echo esc_html($this_terms->name);
      }
    }
  } else { /* --- それ以外、つまりその他のアーカイブページ:
						home.php(デフォルト投稿一覧), archive-〇〇.php(カスタム投稿一覧)のターム(カテゴリ)情報を取得 --- */
    $this_terms = get_the_terms($id, $taxonomy);
    if ($this_terms[0]) {
      if ($anchor) { //引数がtrueならアーカイブへのリンク付きで出力
  
        echo '<a href="' . esc_url(get_term_link($this_terms[0]->term_id)) . '">' . esc_html($this_terms[0]->name) . '</a>';
      } else { //引数がfalseならカテゴリー名のみ出力
        echo esc_html($this_terms[0]->name);
      }
    } 
  }
}


/* それぞれのテンプレートファイルのメインループを制御して、出力する数などを変更
===================================================*/
function my_preget_posts($query)
{
	//管理画面を表示しているとき、もしくは現在のクエリがメインクエリでなければ動作をキャンセルする
	//トップページを固定ページで設定しているので、front-page.phpでは使えない
	if (is_admin() || !$query->is_main_query()) {
		return;
	}
	/* --- カスタム投稿タイプ 制作実績 もしくは、タクソノミー制作ジャンル --- */
	if ($query->is_post_type_archive('works') || ($query->is_tax('work_genre'))) {
		$query->set('posts_per_page', 6);
	}
	if ($query->is_post_type_archive('blog') || ($query->is_tax('blog_category'))) {
		$query->set('posts_per_page', 9);
	}
}
add_action('pre_get_posts', 'my_preget_posts');



/* --- MW WP Formのエラーメッセージを変更 --- */
/**
 * my_error_message
 * @param string $error
 * @param string $key
 * @param string $rule（半角小文字）
 */
function my_error_message($error, $key, $rule)
{
	if (($key === 'company' || $key === 'section' || $key === 'name' || $key === 'kana' || $key === 'email' || $key === 'textarea') && $rule === 'noempty') {
		return '※必要事項を入力してください';
	}
	return $error;
}
add_filter('mwform_error_message_mw-wp-form-189', 'my_error_message', 10, 3);
