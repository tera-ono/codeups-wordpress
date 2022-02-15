 <!-- もし、タイトルの文字数が28文字以上なら28文字に制限してそれ以降を...にして、
	それ以外ならそのままタイトルを表示する -->
  <?php if(mb_strlen(get_the_title()) > 28) { 
    echo mb_substr(get_the_title(), 0, 28).'...';
  } else {
    the_title();
  }?>