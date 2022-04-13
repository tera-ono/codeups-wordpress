jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  /*******************************************
  スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  *******************************************/
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });





  /*******************************************
・ハンバーガーメニューをクリックすると"is-open"クラスがトグルされる

・モーダルメニューの背景をクリックしても"is-open"クラスは外されモーダル解除
*******************************************/
  $('.js-mobile-menu').on('click', function() {
    $(this).toggleClass('is-open');
    $('.js-drawer').toggleClass('is-open');
    // bodyにis-openクラスをトグルし、css overflow: hiddenを付け外ししてスクロールを禁止、解除させる
    $('body').toggleClass('is-open');
  });

  
  $('.js-drawer').on('click',function(event) {
    // event.targetを使ってクリックした要素をjQueryオブジェクトに変換する
    //「closest」でその最も近い親要素を指定し、その中に特定の要素があるかを「length」で確認
      if(!$(event.target).closest('.p-drawer__items').length) {
        $(this).removeClass('is-open');
        $('.js-mobile-menu').removeClass('is-open');
        $('body').removeClass('is-open');
      }
    });




/*******************************************
トップページのメインビューを画面の高さいっぱいに表示する記述(100vh指定だと、iPhoneのSafariはアドレスバーが表示されアドレスバーの高さだけメインビューが画面の下にはみ出してしまう為) 

ページの読み込み時とウインドウサイズ変更時にウインドウサイズを取得して.p-topMvと .topMv__swiper の.swiper-slideの高さを指定します。
*******************************************/
  $(document).ready(function () {
    var windowHeight = $(window).height();
    $(".p-topMv,.p-topMv__swiper .swiper-slide").height(windowHeight);
  });
  $(window).resize(function () {
    var windowHeight = $(window).height();
    $(".js-topMv-swiper").height(windowHeight);

    
  });


  /*******************************************
  ヘッダーがスクロールしてMVを通り過ぎると背景色の不透明度が1になる
  *******************************************/
  //  ヘッダーの高さ
  var header_height = $('.js-header').innerHeight();
  //  MVの高さ
  var mv_height1 = $(window).height();
  var mv_height2 = $('.js-commonMv').height();
  //  ヘッダーの下端がMVの下端に重なった時の高さ
  var target1 = mv_height1 - header_height;
  var target2 = mv_height2 - header_height;
    // console.log(mv_height1);
  $(window).scroll(function() {
    if($(this).scrollTop() > target1 || $(this).scrollTop() > target2 ) {
      $('.js-header').addClass('is-opacity');
    } else {
      $('.js-header').removeClass('is-opacity');
    }
  });

  /*******************************************
スクロールトップボタン
MV以下になると表れ以下追従
*******************************************/
// target1,2は上で変数宣言済み
 
  //スクロールボタンの要素
  var scroll_top = $('.js-scrollTop');
  // 最初はボタンを消しておく
  scroll_top.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if($(this).scrollTop() > target1 || $(this).scrollTop() > target2 ) {
      // MVの高さ以上のスクロールでボタンを表示
      scroll_top.fadeIn();
    } else {
      // 画面がMVの高さより上ならボタンを非表示
      scroll_top.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  scroll_top.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 400, 'swing');
    return false;
  });

});
