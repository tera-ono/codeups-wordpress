
jQuery(function($) {
  /* --- 入力にエラーがなければ、要素を非表示 --- */
 if( $(".p-contactForm__error").find("span.error").length == 0) {
  $(".p-contactForm__error").hide();
 }

/* --- MW WP Formでエラーの入力項目に背景色を付ける --- */
  $(".p-contactForm__input").each(function() {
    const error = $(this).find("span.error");
    console.log(error.length);
    // console.log(error);
    
    
    if (error.length === 1) {
    $(this).addClass("is-error");
    $(this).find("span.error").text('');
    }
   });
   
});
