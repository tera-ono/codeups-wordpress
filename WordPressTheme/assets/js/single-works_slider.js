/* --- 製作実績 サムネイル連動スライダー --- */

// スライドの枚数を数える[スライドさせる要素数を変数へ代入]
const slideLength = document.querySelectorAll('.js-slider .swiper-slide').length
console.log(slideLength);

/* --- 表示するスライドが1枚しかない時はSwiperを動かさない --- */
if (slideLength > 1) {
  //メイン
  const slider = new Swiper ('.js-slider', {
    loop: true,
    loopedSlides: slideLength, //スライドの枚数と同じ値を指定(ループ時に設定しないとスライド時にズレるので注意)
    slidesPerView: 1,
    spaceBetween: 10,
    centeredSlides: true,
    
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
  });
  
  //サムネイル
  const thumbs = new Swiper ('.js-thumbnail', {
    loop: true,
    loopedSlides: slideLength, //スライドの枚数と同じ値を指定(ループ時に設定しないとスライド時にズレるので注意)
    slidesPerView: 2,
    spaceBetween: 24,
    breakpoints: {
      768: {
        slidesPerView: slideLength,
        spaceBetween: 8,
      }
    },
    grabCursor: true,
    //アクティブなスライドを中央に配置
    centeredSlides:true,
    // スワイプ中に別のスライドをクリックした時に、スライドを変更が可能になる
    slideToClickedSlide: true,
    
    //slidesPerViewで設定した数よりも実際のスライド枚数が少ない時、スライドが中央に配置される
    centerInsufficientSlides: true,
  });
  
  //4系～
  //メインとサムネイルを紐づける
  slider.controller.control = thumbs;
  thumbs.controller.control = slider;
}