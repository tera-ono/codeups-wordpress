<!-- ページが1ページ以上あれば以下を表示 -->
<?php if (paginate_links()) : ?>
      <!-- pagination -->
      <div class="l-pagination c-pagination">
        <?php
        echo
        paginate_links(
          array(
            'end_size' => 1,
            'mid_size' => 2,
            'prev_next' => true,
            'prev_text' => 'PREV',
            'next_text' => 'NEXT',
          )
        );
        ?>
      </div><!-- /pagination -->
    <?php endif; ?>