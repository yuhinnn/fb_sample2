<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index1.css">
	<title>TBFBappresalt</title>
</head>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6&appId=607456416083903";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


FB.ui({
  method: 'share',
  href: 'https://developers.facebook.com/docs/',
}, function(response){});


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
			<div class="pushbutton3">
				<a data-share="true" href="https://developers.facebook.com/docs/plugins/"><p class="pushtext3">結果をシェアする</p></a>
			</div>
		</div>
	</div>
  <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

</body>
</html>
