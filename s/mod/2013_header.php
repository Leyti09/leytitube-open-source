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
<?php $_user222 = $__user_h->fetch_user_username($_SESSION['siteusername']); ?>
<div id="yt-masthead-container" class="yt-grid-box yt-masthead-hh" bis_skin_checked="1">
			<div id="yt-masthead" class="">
			<a id="logo-container" href="/" title="LeytiTube home"><img id="logo" src="/yts/img/pixel-vfl3z5WfW.gif" alt="LeytiTube home"></a>
				<?php if(!isset($_SESSION['siteusername']) && !isset($_SESSION['plususer'])) { ?>
				<div id="yt-masthead-signin">
					<button href="/sign_in" type="button" class=" yt-uix-button yt-uix-button-hh-primary" onclick=";window.location.href=this.getAttribute('href');return false;" role="button"><span class="yt-uix-button-content">Sign In </span></button>
				</div>
				<?php } else { ?> 
					</::before>
					<div id="yt-masthead-user">
<span id="yt-masthead-user-displayname" dir="ltr" class="yt-valign-container" onclick="yt.www.masthead.toggleExpandedMasthead();">
<?php echo htmlspecialchars($_SESSION['siteusername']); ?> </span>
<button onclick=";return false;" class="sb-notif-off yt-uix-button yt-uix-button-hh-default" type="button" id="sb-button-notify" role="button"><span class="yt-uix-button-content">0</span></button> <button onclick="yt.www.masthead.toggleExpandedMasthead();;return false;" class="yt-masthead-user-icon yt-uix-button yt-uix-button-hh-default" type="button" data-orientation="vertical" role="button"><span class="yt-uix-button-content"> <span class="video-thumb ux-thumb yt-thumb-square-27 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img alt="Thumbnail" src="/dynamic/pfp/<?php echo $__user_h->fetch_pfp($_SESSION['siteusername']); ?>" width="27" loading="lazy"><span class="vertical-align"></span></span></span></span>
</span></button>
<span id="yt-masthead-dropdown" onclick="yt.www.masthead.toggleExpandedMasthead();"></span>
  <button onclick="yt.www.masthead.toggleExpandedMasthead();;return false;" type="button" class="yt-masthead-user-icon" data-orientation="vertical" role="button">
  <span class="vertical-center"></span></span></span></span>
 </span>
 </button>
</div>
				<?php } ?>
				<div id="yt-masthead-content"><span <?php if(!isset($_SESSION['siteusername']) && !isset($_SESSION['plususer'])) { ?>class="yt-uix-button-group"<?php } ?> id="masthead-upload-button-group"><a href="/my_videos_upload" class="yt-uix-button  start link-gplus-lightbox yt-uix-sessionlink yt-uix-button-hh-default" data-upsell="upload"><span class="yt-uix-button-content">Upload</span></a><?php if(isset($_COOKIE['sessionuser'])) { ?><button onclick=";return false;" type="button" class="end yt-uix-button yt-uix-button-hh-default yt-uix-button-empty" data-button-menu-id="upload-button-menu" role="button"><img class="yt-uix-button-arrow" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button><?php } ?></span>
				<ul id="upload-button-menu" class="yt-uix-button-menu yt-uix-button-menu-default" role="menu" aria-haspopup="true" style="display: none"><li role="menuitem"><a href="/my_videos_upload_beta" class="yt-uix-button-menu-item upload-menu-link">Beta Uploader</a></li><li role="menuitem"><a href="/my_videos" class="yt-uix-button-menu-item upload-menu-link"><img class="upload-menu-vm" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">Video Manager</a></li><li role="menuitem"><a href="/analytics" class="yt-uix-button-menu-item upload-menu-link"><img class="upload-menu-analytics" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">Analytics</a></li></ul>
				
					<form id="masthead-search" class="search-form consolidated-form" action="/results" onsubmit="if (_gel('masthead-search-term').value == '') return false;">
						<button class="search-btn-component search-button yt-uix-button yt-uix-button-hh-default" onclick="if (_gel('masthead-search-term').value == '') return false; _gel('masthead-search').submit(); return false;;return true;" type="submit" id="search-btn" dir="ltr" tabindex="2" role="button"><span class="yt-uix-button-content">Search </span></button>
						<div id="masthead-search-terms" class="masthead-search-terms-border" dir="ltr">
							<label>
								<input id="masthead-search-term" class="search-term" name="search_query" value="" type="text" tabindex="1" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)" title="Search">
							</label>
						</div>
					</form> 
				</div>
			</div>
		</div>

 </span></button>
    
</div>
			</div>
		</div>
</div>
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
<?php if(isset($_SESSION['errormsg'])) { ?>
	<div id="masthead_child_div" style="width: 970px;margin: auto;"><div class="yt-alert yt-alert-default yt-alert-error">  <div class="yt-alert-icon">
		<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
	</div>
	<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
		<div class="yt-alert-message">
			<?php echo $_SESSION['errormsg'] ?>
		</div>
	</div></div></div>
	<?php unset($_SESSION['errormsg']); ?>
	<?php } ?>
<?php if(isset($_SESSION['siteusername'])) { ?>
<?php	$_subslol = $__user_h->fetch_subs_count($_SESSION['siteusername']);	?>
		<div id="masthead-expanded" class="hid">
    <div id="masthead-expanded-container">
      <span id="masthead-expanded-menu-shade"></span>
      <div id="masthead-expanded-menus-container">
          <div id="masthead-expanded-menu">
    <ul id="masthead-expanded-menu-list">
      <li class="masthead-expanded-menu-item first">
        <a href="/user/<?php echo htmlspecialchars($_COOKIE['sessionuser']); ?>">
My Channel
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
        <a href="/inbox?feature=mhee&amp;folder=messages">Inbox</a>
      </li>
      <li class="masthead-expanded-menu-item">
        <a href="/account?feature=mhee">
Settings
        </a>
      </li>
      <li class="masthead-expanded-menu-item">
        <a class="end" href="/logout">
Sign out</a>
        </a>
      </li>
    </ul>
      </div>

      </div>
	  
      <div id="masthead-expanded-lists-container">
        <div id="masthead-expanded-loading-message">Loading...</div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <?php } ?>
  