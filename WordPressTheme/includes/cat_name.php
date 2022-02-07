<!-- デフォルトの投稿 news の1つ目のカテゴリー出力 -->
<?php $categories = get_the_category();
  if ($categories[0]) { ?>
    <?php echo $categories[0]->cat_name ?>
  <?php } ?>