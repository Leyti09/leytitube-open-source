<?php
	if(isset($_SESSION['siteusername'])) {
        $stmt = $__db->prepare("UPDATE users SET ip = :ip WHERE username = :username");
        $stmt->bindParam(":username", $_SESSION['siteusername']);
		$stmt->bindParam(":ip",       $_SERVER["HTTP_CF_CONNECTING_IP"]);
        $stmt->execute();

		$stmt = $__db->prepare("UPDATE users SET lastlogin = now() WHERE username = :username");
        $stmt->bindParam(":username", $_SESSION['siteusername']);
        $stmt->execute();
	}

	if(isset($_SESSION['siteusername']) && !$__user_h->user_exists(@$_SESSION['siteusername'])) {
		die("The currently logged in channel has been deleted!");
	}
	
	ini_set('display_errors', 0);
?>
 <div id="page" class="">
			<div id="masthead-container">
			<div id="masthead" class="">
					<a href="/" title="YouTube home">
			<img id="logo" class="master-sprite" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt="YouTube home">
		</a>

		<div id="masthead-search">
			
	<form autocomplete="off" class="search-form" action="/results" method="get" name="searchForm" onsubmit="">
		<input id="masthead-search-term" class="search-term" name="search_query" value="" type="text" tabindex="1" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)" maxlength="128" autocomplete="off">



			<button type="button" class="search-button yt-uix-button" onclick="if (_gel('masthead-search-term').value != '') { document['searchForm'].submit(); }; return false;;return false;" tabindex="2"><span class="yt-uix-button-content">Search</span></button>

			<script>document.getElementById('masthead-search-term').focus();</script>
	<input type="hidden" name="aq" value="f"><input type="hidden" name="oq" value="" disabled=""></form>

		</div>
		<div id="masthead-nav">
			<a href="/videos">Browse</a><a href="/my_videos_upload">Upload</a>
		</div>
			<div id="masthead-utility">
				<a class="start" href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/LogoutWarning?continue=http%3A%2F%2Fwww.youtube.com%2Fcreate_account%3Fnext%3D%252F&amp;ltmpl=sso&amp;hl=en_US&amp;service=youtube">Create Account</a><a class="end" href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US&amp;ltmpl=sso">Sign In</a>
			</div>
	</div>

	</div>
	
	</div>