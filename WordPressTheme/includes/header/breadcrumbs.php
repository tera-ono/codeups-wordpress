<!-- パンくずリスト -->
<?php
if (function_exists('bcn_display')) {
  echo '<nav class="c-breadcrumbs l-breadcrumbs">';
  echo '<ul class="c-breadcrumbs__inner l-inner">';
  bcn_display();
  echo '</ul>';
  echo '</nav>';
}
?>