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
		die("<a href='/logout'>Your user has been deleted. Logout</a>");
	}
	ini_set('display_errors', 0);

?>
<!-- begin masthead -->
<div id="masthead" class="" dir="ltr">
          <a id="logo-container" href="/" title="LeytiTube home">
    <img id="logo" src="//web.archive.org/web/20120724040924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="YouTube home">
  </a>
	<?php if(!isset($_SESSION['siteusername'])) { ?>
		<div id="masthead-user-bar-container">
      <div id="masthead-user-bar">
        <div id="masthead-user">
          <div id="masthead-user-display"><a class="start" href="/signup?feature=header&amp;next=%2F">Create Account</a><span class="masthead-link-separator">|</span><a class="end" href="/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dheader%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US&amp;ltmpl=sso">Sign In</a></div>
        </div>
      </div>
    </div>
	<?php } else { ?>
		<div id="masthead-user-bar-container">
      <div id="masthead-user-bar">
        <div id="masthead-user">
          <span id="masthead-gaia-user-expander" class="masthead-user-menu-expander masthead-expander" onclick="yt.www.masthead.toggleExpandedMasthead()"><span id="masthead-gaia-user-wrapper" class="yt-rounded" tabindex="0"><?php echo htmlspecialchars($_SESSION['siteusername']); ?></span></span>
    <button type="button" class="sb-button sb-notif-off yt-uix-button" onclick=";return false;" id="sb-button-notify" role="button"><span class="yt-uix-button-content">  </span></button>
    <button type="button" class="sb-button yt-uix-button" onclick=";return false;" id="sb-button-share" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-share-plus" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span><span class="yt-uix-button-content">  </span></button>

<span id="masthead-gaia-photo-expander" class="masthead-user-menu-expander masthead-expander" onclick="yt.www.masthead.toggleExpandedMasthead()"><span id="masthead-gaia-photo-wrapper" class="yt-rounded"><span id="masthead-gaia-user-image"><span class="clip"><span class="clip-center"><img src="/dynamic/pfp/<?php echo $__user_h->fetch_pfp($_SESSION['siteusername']); ?>" alt=""><span class="vertical-center"></span></span></span></span><span class="masthead-expander-arrow"></span></span></span>
        </div>
      </div>
    </div>
	<?php } ?>
	<div id="masthead-search-bar-container">
		<div id="masthead-search-bar">
			<div id="masthead-nav"><a href="/videos?feature=mh">Browse</a><span class="masthead-link-separator">|</span><a href="/movies?feature=mh">Movies</a><span class="masthead-link-separator">|</span><a id="masthead-upload-link" class="" data-upsell="upload" href="/my_videos_upload">Upload</a></div>
			<form id="masthead-search" class="search-form consolidated-form" action="/results" onsubmit="if (_gel('masthead-search-term').value == '') return false;">
				<button class="search-btn-compontent search-button yt-uix-button yt-uix-button-default" onclick="if (_gel('masthead-search-term').value == '') return false; _gel('masthead-search').submit(); return false;;return true;" type="submit" id="search-btn" dir="ltr" tabindex="2" role="button"><span class="yt-uix-button-content">Search </span></button>
				<div id="masthead-search-terms" class="masthead-search-terms-border" dir="ltr"><label><input id="masthead-search-term" autocomplete="off" class="search-term" name="search_query" value="" type="text" tabindex="1" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)" title="Search"></label></div>
			</form>
		</div>

	</div></div>

	<div class="alerts-2012">
 
  </div>


</div>

</div></div>
</div>
	</div>
	<?php if(isset($error['status'])) { ?>
		<div id="masthead_child_div" style="width: 970px;margin: auto;"><div class="yt-alert yt-alert-default yt-alert-error  yt-alert-player">  <div class="yt-alert-icon">
			<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
		</div>
		<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
			<div class="yt-alert-message">
				<?php echo $error['message']; ?>
			</div>
		</div></div></div>
	<?php } ?>
	<?php if(isset($_GET['error'])) { ?>
		<div id="masthead_child_div" style="width: 970px;margin: auto;"><div class="yt-alert yt-alert-default yt-alert-error ">  <div class="yt-alert-icon">
			<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
		</div>
		<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
			<div class="yt-alert-message">
				<?php echo htmlspecialchars($_GET['error']); ?>
			</div>
		</div></div></div>
	<?php } ?>
	<?php if(isset($_GET['success'])) { ?>
		<div id="masthead_child_div" style="width: 970px;margin: auto;"><div class="yt-alert yt-alert-default yt-alert-success ">  <div class="yt-alert-icon">
			<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
		</div>
		<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
			<div class="yt-alert-message">
				<?php echo htmlspecialchars($_GET['success']); ?>
			</div>
		</div></div></div>
	<?php } ?>
	<?php if(isset($_SESSION['error'])) { ?>
		<div id="masthead_child_div" style="width: 970px;margin: auto;"><div class="yt-alert yt-alert-default yt-alert-error">  <div class="yt-alert-icon">
			<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
		</div>
		<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
			<div class="yt-alert-message">
				<?php echo $_SESSION['error']->message; ?>
			</div>
		</div></div></div>
		<?php unset($_SESSION['error']); ?>
	<?php } ?>
	<!--
	<div id="ticker" class="ytg-base "><div id="ticker-inner"><div class="ytg-wide"><button onclick="yt.net.cookies.set('HideTicker', 1, 604800);" class="yt-uix-close" data-close-parent-id="ticker"><img alt="Close" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif"></button><img class="ticker-icon" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><div class="ticker-content">
		<b>New minor update: <pre style="display:inline-block;">1fe1fa4</pre></b> <pre style="display:inline-block;font-size:10px;margin-left:35px;">This is a part of the Communications update. The inbox has been updated with a cleaner look.</pre>
	</div></div></div></div><br>
	-->
<?php if(isset($_SESSION['siteusername'])) ?>
    <div id="masthead-expanded" class="hid">
    <div id="masthead-expanded-container" class="with-sandbar">
      <div id="masthead-expanded-menus-container">
        <span id="masthead-expanded-menu-shade"></span>
          <div id="masthead-expanded-google-menu">
    <span class="masthead-expanded-menu-header">
Leyti+ account
    </span>
    <div id="masthead-expanded-menu-google-container">
	<img id="masthead-expanded-menu-gaia-photo" alt="" data-src="/dynamic/pfp/<?php echo $__user_h->fetch_pfp($_SESSION['siteusername']); ?>" src="/dynamic/pfp/<?php echo $__user_h->fetch_pfp($_SESSION['siteusername']); ?>">
        <div id="masthead-expanded-menu-account-info">
		<p><?php echo htmlspecialchars($_SESSION['siteusername']); ?></p>
    
		<p id="masthead-expanded-menu-email">This is you.</p>
      </div>
      <div id="masthead-expanded-menu-google-column1">
        <ul>
          <li class="masthead-expanded-menu-item"><a href="https://profiles.google.com?authuser=0">Profile</a></li>
          <li class="masthead-expanded-menu-item"><a href="https://plus.google.com/u/0/stream">Leyti+</a></li>
          <li class="masthead-expanded-menu-item"><a href="https://plus.google.com/u/0/settings/privacy">Privacy</a></li>
        </ul>
      </div>
      <div id="masthead-expanded-menu-google-column2">
        <ul>
          <li class="masthead-expanded-menu-item">
            <a href="https://plus.google.com/u/0/settings">
Settings
            </a>
          </li>
          <li class="masthead-expanded-menu-item">
            <a class="end" href="#" onclick="document.logoutForm.submit(); return false;">
Sign out
            </a>
          </li>
            <li class="masthead-expanded-menu-item">
              <a href="#" onclick="yt.www.masthead.accountswitch.toggle(); return false;">
Switch account
              </a>
            </li>
        </ul>
      </div>
    </div>
  </div>

          <div id="masthead-expanded-menu">
    <span class="masthead-expanded-menu-header">
LeytiTube
    </span>
    <ul id="masthead-expanded-menu-list">
      <li class="masthead-expanded-menu-item">
        <a href="/user/<?php echo htmlspecialchars($_SESSION['siteusername']); ?>?feature=mhee">
My channel
        </a>
      </li>
      <li class="masthead-expanded-menu-item">
        <a href="/my_videos?feature=mhee">
Video Manager
        </a>
      </li>
      <li class="masthead-expanded-menu-item">
        <a href="/my_subscriptions?feature=mhee">Subscriptions</a>
      </li>
      <li class="masthead-expanded-menu-item">
        <a href="/account?feature=mhee">
LeytiTube settings
        </a>
      </li>
    </ul>
  </div>

  </div>
      <div id="masthead-expanded-sandbar">
        <div id="masthead-expanded-lists-container">
        <div class="yt-uix-slider yt-rounded" id="masthead-expanded-lists-content" data-slider-slide-selected="1"
    data-slider-slides="1">
    <button class="yt-uix-button yt-uix-button-default yt-uix-slider-prev" rel="prev"><img
            class="yt-uix-slider-prev-arrow" src="/yts/img/pixel-vfl3z5WfW.gif" alt="previous"></button>
    <button class="yt-uix-button yt-uix-button-default yt-uix-slider-next" rel="next"><img
            class="yt-uix-slider-next-arrow" src="/yts/img/pixel-vfl3z5WfW.gif" alt="next"></button>
    <div class="yt-uix-slider-body">
        <div class="yt-uix-slider-slides">
            <ul class="yt-uix-slider-slide ">
                <li class="yt-uix-slider-slide-item ">
                    <div class="playlist-bar-item yt-tile-default yt-tile-static">
                        <span class="ux-thumb-wrap"><span class="video-thumb ux-thumb yt-thumb-default-106 ">
                                <span class="yt-thumb-clip"><span class="yt-thumb-clip-inner">
                                        <img alt="title" src="/yt/imgbin/pbar_fav.jpg" width="106">
                                        <span class="vertical-align"></span></span></span></span>
                        </span>
                        </span>
                        <a href="#"><span dir="ltr" class="list-title">Favorites</span>
                            <br><br><br>
                            No videos
                            <br>
                            View list
                        </a>

                    </div>
                </li>
                <li class="yt-uix-slider-slide-item ">
                    <div class="playlist-bar-item yt-tile-default yt-tile-static">
                        <span class="ux-thumb-wrap"><span class="video-thumb ux-thumb yt-thumb-default-106 ">
                                <span class="yt-thumb-clip"><span class="yt-thumb-clip-inner">
                                        <img alt="title" src="/yt/imgbin/pbar_wl.jpg" width="106">
                                        <span class="vertical-align"></span></span></span></span>
                        </span>
                        </span>
                        <a href="#"><span dir="ltr" class="list-title">Watch later</span>
                            <br><br><br>
                            No videos
                            <br>
                            View list
                        </a>

                    </div>
                </li>
                <li class="yt-uix-slider-slide-item ">
                    <div class="playlist-bar-item yt-tile-default yt-tile-static">
                        <span class="ux-thumb-wrap"><span class="video-thumb ux-thumb yt-thumb-default-106 ">
                                <span class="yt-thumb-clip"><span class="yt-thumb-clip-inner">
                                        <img alt="title" src="/yt/imgbin/pbar_like.jpg" width="106">
                                        <span class="vertical-align"></span></span></span></span>
                        </span>
                        </span>
                        <a href="#"><span dir="ltr" class="list-title">Likes</span>
                            <br><br><br>
                            No videos
                            <br>
                            View list
                        </a>

                    </div>
                </li>
                <li>
                    <hr>
                </li>
            </ul>
        </div>
    </div>
</div></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>