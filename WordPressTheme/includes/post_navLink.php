<!-- 個別投稿ページでの（デフォルト・カスタム投稿ページ共通）の前後の記事へのリンクと、その投稿タイプのアーカイブページへのリンク -->
<div class="c-postNav-link">
  <div class="c-postNav-link__item">
    <!-- 前の記事へのリンク -->
    <?php previous_post_link('%link', 'PREV'); ?>
  </div>

  <!-- 現在の投稿のアーカイブページへのリンク -->
  <!-- get_post_type()で現在の記事の投稿タイプを出力している -->
  <div class="c-postNav-link__item">
    <a href="<?php echo esc_url(get_post_type_archive_link(get_post_type())); ?>">一覧</a>
  </div>

  <div class="c-postNav-link__item">
    <!-- 次の記事へのリンク -->
    <?php next_post_link('%link', 'NEXT'); ?>
  </div>
</div>