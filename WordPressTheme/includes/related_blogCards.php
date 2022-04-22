<!-- 使い回せる関連記事(カスタム投稿:タクソノミーblogの同じ種類のターム記事) -->

<section class="c-relatedBlog l-relatedBlog">
  <div class="l-inner">
    <h4 class="c-relatedBlog__title">関連記事</h4>
    <div class="c-relatedBlog__cards c-cards">
      <!-- カスタム投稿の同じタームの関連記事 4つ出力-->
      <?php
      /* --- どのカスタム投稿の個別ページが表示中かによって、出力するタクソノミーとタームを制御する--- */
      if (is_singular('blog')) {
        $taxonomy = 'blog_category';
        $post_type = 'blog';
      } elseif (is_singular('works')) {
        $taxonomy = 'work_genre';
        $post_type = 'works';
      }


      $terms = get_the_terms(get_the_ID(), $taxonomy);
      $args = array(
        'post_type' => $post_type,    //投稿タイプ：カスタム投稿のblog
        'posts_per_page' => 4,   //投稿数：4
        'post__not_in'  => array(get_the_ID()), //現在の記事は省いて表示
        // タクソノミーに関するパラメータをまとめる配列。重要『'tax_query'の値に"さらに配列で"各パラメータを指定していく』
        'tax_query' => array(

          array(
            'taxonomy' => $taxonomy, //タクソノミーを指定
            'field' => 'slug',          //'id' / 'slug'どちらでタームを指定するかを宣言
            'terms' => $terms[0], //タームのオブジェクトだと、'field'がslugでも、idでも対応できた！
          ),

        ),

      );

      $related_blogs = get_posts($args);
      foreach ($related_blogs as $post) : setup_postdata($post);
      ?>

        <!-- パーツ化したカスタム投稿のブログカード -->
        <?php get_template_part('includes/blog_card'); ?>

      <?php endforeach;
      wp_reset_postdata(); ?>

    </div>
  </div>
</section>
<!--"c-relatedBlog l-relatedBlog-->