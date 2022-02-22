/*******************************************
メインビューのスワイパー
*******************************************/
const swiper1 = new Swiper('.js-topMv-swiper', {
  // Optional parameters

  // スライド方向
  // direction: 'vertical',縦方向

  // ループするか
  loop: true,

  // 表示方法
  effect: 'fade',

  // 自動再生
  autoplay : {
    // 次のスライドまでの時間
    delay: 4000,
   //操作されたら自動再生を止める:true  止めない:false
    disableOnInteraction: false,
  },

  // スライドスピード
  speed: 2000,
  //マウスでのスワイプさせるか:true させない:false
  allowTouchMove: false,
});

/*******************************************
トップページ: worksのスワイパー
*******************************************/
const swiper2 = new Swiper('.js-bg-flexItem__swiper', {
  // Optional parameters

  // スライド方向
  // direction: 'vertical',縦方向

  // ループするか
  loop: true,

  // 表示方法
  effect: 'fade',

  // 自動再生
  autoplay : {
    // 次のスライドまでの時間
    delay: 2000,
   //操作されたら自動再生を止める:true  止めない:false
    disableOnInteraction: false,
  },

  // スライドスピード
  speed: 2000,
  //マウスでのスワイプさせるか:true させない:false
  allowTouchMove: false,

   /* --- ページネーション --- */
   pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
		clickable: true
	}
});
