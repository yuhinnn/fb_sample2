<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index1.css">
	<title>TBFBapp</title>

</head>

<body>
	<h1 id="fb-welcome"></h1>
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '607456416083903',
      xfbml      : true,
      version    : 'v2.6'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
		// Place following code after FB.init call.

function onLogin(response) {
  if (response.status == 'connected') {
    FB.api('/me?fields=first_name', function(data) {
      var welcomeBlock = document.getElementById('fb-welcome');
      welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
    });
  }
}

FB.getLoginStatus(function(response) {
  // Check login status on load, and if the user is
  // already logged in, go directly to the welcome message.
  if (response.status == 'connected') {
    onLogin(response);
  } else {
    // Otherwise, show Login dialog first.
    FB.login(function(response) {
      onLogin(response);
    }, {scope: 'user_friends, email'});
  }
});
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
				<h2>あなたにぴったりな<br>旅先を診断してみよう！</h2>

			</div>
			<div class="pushbutton">
				<a href="index2.php"><p class="pushtext">診断スタート</p></a>
			</div>
		</div>
	</div>

</body>
</html>
