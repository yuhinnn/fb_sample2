<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
	<meta charset="utf-8">
  <meta property="og:title" content="ページタイトル" />
  <meta property="og:description" content="ページの説明" />
  <meta property="og:type" content="ページのタイプ" />
  <meta property="og:url" content="ページURL" />
  <meta property="og:image" content="画像URL" />
  <meta property="og:locale" content="ja_JP" />
	<link rel="stylesheet" type="text/css" href="css/index1.css">
	<title>TBFBappresalt</title>
</head>
<body>
  <div id="fb-root"></div>

  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '607456416083903',
      xfbml      : true,
      version    : 'v2.6'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
    FB.ui({
  method: 'share',
  href: 'https://developers.facebook.com/docs/',
}, function(response){});

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

	<div class="main">
		<div class="content">
			<div class="TBlogo">

			</div>
			<div class="textbox">
				<h2>あなたの診断結果は・・・<br></h2>

			</div>
			<div class="pushbutton2">
				<a href="https://developers.facebook.com/docs/plugins/"><p class="pushtext2">いいねをする</p></a>
			</div>
      <a class="pushbutton3" href="http://www.facebook.com/share.php?u=【シェアしたいURL】" onclick="window.open(encodeURI(decodeURI(this.href)),
      'FBwindow', 'width=554, height=470, menubar=no, toolbar=no, scrollbars=yes'); return false;" rel="nofollow">

      結果をシェアする
    </a>

		</div>

  <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

</body>
</html>
