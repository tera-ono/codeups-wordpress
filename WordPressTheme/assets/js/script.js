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

  
/*******************************************
トップページのメインビューを画面の高さいっぱいに表示する記述(100vh指定だと、iPhoneのSafariはアドレスバーが表示されアドレスバーの高さだけメインビューが画面の下にはみ出してしまう為) 

ページの読み込み時とウインドウサイズ変更時にウインドウサイズを取得して.p-topMvと .topMv__swiper の.swiper-slideと ローディング画面.js-loadingの高さを指定します。
*******************************************/
  $(document).ready(function () {
    var windowHeight = $(window).height();
    $(".p-topMv,.p-topMv__swiper .swiper-slide, .js-loading").height(windowHeight);
  });
  $(window).resize(function () {
    var windowHeight = $(window).height();
    $(".js-topMv-swiper, .js-loading").height(windowHeight);
  });


  /* トップページ： ローディング時
  ===================================================*/
  $(window).on('load', function () {

    $('.js-loading, .js-topMv').addClass('is-active');
    /* ---front.phpのbodyクラスだけ スクロール禁止(他のページに影響が無いように) --- */
    $('body.home').css({
      overflow: 'hidden',
    });
    //3秒後にスクロール可能にする
    setTimeout(function () {
      $('body').css({
        height: 'auto',
        overflow: 'auto',
      });
    }, 3000);
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


  /* マウスカーソル 移動位置, aタグ・buttonタグにhover時にクラス付与
  ===================================================*/
  
  $(function(){
    //カーソル要素の指定
    var cursor=$(".c-cursor");
    //ちょっと遅れてついてくるストーカー要素の指定  
    var stalker=$(".c-cursor__stalker");
    
    //mousemoveイベントでカーソル要素を移動させる
    $(document).on("mousemove",function(e){
      //カーソルの座標位置を取得
      var x=e.clientX;
      var y=e.clientY;
      //カーソル要素のcssを書き換える用
      cursor.css({
        "opacity":"0.8",
        "top":y+"px",
        "left":x+"px"
      });
      //ストーカー要素のcssを書き換える用    
      setTimeout(function(){
        stalker.css({
          // "opacity":"0.9",
          "top":y+"px",
          "left":x+"px"
        });
      },140);//カーソルより遅れる時間を指定
    });
    //aタグホバー
    $("a, button").on({
      "mouseenter": function() {
        //activeクラス付与
        cursor.addClass("is-active");
        stalker.addClass("is-active");
      },
      "mouseleave": function() {
        cursor.removeClass("is-active");
        stalker.removeClass("is-active");
        
      }
    });
  });

});
