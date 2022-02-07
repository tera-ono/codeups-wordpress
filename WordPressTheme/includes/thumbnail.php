<!-- アイキャッチ画像があれば表示して、無ければ、noimg画像を表示する: パーツ化した -->
<?php
  if (has_post_thumbnail()) {
    the_post_thumbnail('large');
  } else {
    echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/common/noimg.jpg" alt="画像無し">';
  }
  ?>