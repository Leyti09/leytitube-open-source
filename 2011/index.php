<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/page_builder.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__page_b = new page_builder("templates/m"); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php ob_start(); ?>
<?php
  $__server->page_embeds->page_title = "LeytiTube";
  $__server->page_embeds->page_description = "Share your videos with friends, family, and the world";
  $__server->page_embeds->page_image = "/yt/imgbin/full-size-logo.png";
  $__server->page_embeds->page_url = "https://subrock.rocks/";
?>
<html lang="en" dir="ltr"><!-- machid: sWkFSZzctYUFHdmlXZnNlSVNYTXpGT1huTEpYS3hDeFlnWlVyVG5MNlkxQ0MtdHJQQ2VSZWdB --><head><script src="//archive.org/includes/analytics.js?v=cf34f82" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app222.us.archive.org';v.server_ms=703;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="/_static/js/bundle-playback.js?v=poeZ53Bz" charset="utf-8"></script>
<script type="text/javascript" src="/_static/js/wombat.js?v=UHAOicsW" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=fantwOh2">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
        <script>
var yt = yt || {};yt.timing = yt.timing || {};yt.timing.tick = function(label, opt_time) {var timer = yt.timing['timer'] || {};if(opt_time) {timer[label] = opt_time;}else {timer[label] = new Date().getTime();}yt.timing['timer'] = timer;};yt.timing.info = function(label, value) {var info_args = yt.timing['info_args'] || {};info_args[label] = value;yt.timing['info_args'] = info_args;};yt.timing.info('e', '903945,904719,910209');yt.timing.tick('start');yt.timing.info('li','0');try {yt.timing['srt'] = window.gtbExternal && window.gtbExternal.pageT() ||window.external && window.external.pageT;} catch(e) {}if (window.chrome && window.chrome.csi) {yt.timing['srt'] = Math.floor(window.chrome.csi().pageT);}if (window.msPerformance && window.msPerformance.timing) {yt.timing['srt'] = window.msPerformance.timing.responseStart - window.msPerformance.timing.navigationStart;}    </script>


    <title>
      LeytiTube
  </title>  
    <meta name="description" content="BetaTube is a place to discover, watch, upload and share videos.">
    <meta name="keywords" content="video, free, simple, search, find, discover, watch, engage, share, sharing, upload, entertainment">

        <script>
      if (window.yt.timing) {
        yt.timing.tick('hpcss');
      }
    </script>

  <meta property="fb:app_id" content="87741124305">


      <link id="www-core-css" rel="stylesheet" href="/s/css/www-core-vfl5llGvX2011.css">

  

      <style>

    </style>


      
    <script id="www-core-js" src="/s/js/www-core-vfllZKJd-.js"></script>



  <script>
        yt.setConfig({
      'XSRF_TOKEN': 'e-TYRlMVyrKvXPQ1sbCne4N3Rnd8MTMxMjE1NzM2NEAxMzEyMDcwOTY0',
      'XSRF_FIELD_NAME': 'session_token'
    });
    yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);

    yt.setConfig('XSRF_REDIRECT_TOKEN', 'zcbvEeoztZCMJeZqniu3C80Qnil8MTMxMjE1NzM2NEAxMzEyMDcwOTY0');

    yt.setConfig('LOGGED_IN', false);
    yt.setConfig('ENABLE_WATCH6', false);

    yt.setConfig('FEEDBACK_LOCALE_LANGUAGE', "en");
    yt.setConfig('FEEDBACK_LOCALE_EXTRAS', {"experiments": "903945,904719,910209", "accept_language": null});
  </script>

          <script>
      if (window.yt.timing) {
        yt.timing.tick('hpjs');
      }
    </script>


    <script>
      var masthead = new yt.www.home.ads.mastheadAd('1', false, '2', 'kTZ5yc6IX04', true, true, false)
      yt.pubsub.subscribe('init', function() {
        _showdiv('masthead-utility-menulink-short');
        _hidediv('masthead-utility-menulink-long');
      });
    </script>



    <script>
    yt.net.ajax.setToken('subscription_ajax', "");
    yt.pubsub.subscribe('init', yt.www.subscriptions.SubscriptionButton.init);
  </script>


    <script>
    yt.net.ajax.setToken('channel_recommendations_token', '');
  </script>


  <script>
    yt.setConfig('USERNAME', "");
    yt.setConfig('SUBS_XSRF', "");


    var moduleHelper = new yt.www.home.ModuleHelper('',
        false, true);


    yt.pubsub.subscribe('init', function() {
        (function() {
      var sessionToken = '';
      var rootUrl = 'https://web.archive.org/web/20110731000924/http://www.youtube.com/';
      var locale = 'en_US';
      var serviceInfo = null;
      var isGaiaUser = false;
      var facebookAppKey = '7ff82e59b6b2fbd316cca35309e95df3';
      var tpDomain = 's.youtube-3rd-party.com';

      var autoshare = new yt.sharing.AutoShare(sessionToken, rootUrl, locale, serviceInfo,
          isGaiaUser, facebookAppKey, tpDomain);

      // Register Facebook connect button.
      if (_gel('fb-login-btn')) {
        autoshare.registerConnectDialogLauncher(_gel('fb-login-btn'), 'facebook', true);
      }

      var gaiaChangedCallback = function(autoshare) {
        var isGaiaUser = autoshare.isGaiaUser();
        yt.style.setDisplayed('fb-promo-google-nag', !isGaiaUser);
        yt.style.setDisplayed('fb-promo-google-linked', isGaiaUser);

        if (isGaiaUser) {
          var link = _gel('fb-promo-google-linked-continue-to-fb');
          var fn = function() {
            autoshare.handleConnectService({currentTarget: _gel('fb-login-btn')});
          }
          link.onclick = fn;
        }
      }
      autoshare.addGaiaChangedCallback(gaiaChangedCallback);

      var canConnectCallback = function(autoshare) {
        var isGaiaUser = autoshare.isGaiaUser();
        yt.style.setDisplayed('fb-promo-google-nag', !isGaiaUser);
        yt.style.setDisplayed('fb-promo-google-linked', false);
        yt.style.setDisplayed('fb-promo-fb-linked', false);
        return isGaiaUser;
      }
      autoshare.addCanConnectCallback(canConnectCallback);

      var serviceChangedCallback = function(autoshare) {
        var serviceInfo = autoshare.getServiceInfo();
        for (var service in serviceInfo) {
          var info = serviceInfo[service];
          if (service == 'facebook' && info['is_connected']) {
            yt.style.setDisplayed('fb-promo-fb-linked', true);
            hideFbPromoAlert();
          }
          if (service == 'es' && info['is_connected']) {
            yt.style.setDisplayed('es-optin-success', true);
            hideEsOptinAlert();
          }
        }
      };
      autoshare.addServiceChangedCallback(serviceChangedCallback);

      window['autoshare'] = autoshare;

      var prefs = yt.UserPrefs;
      var optOut = prefs.getFlag3(prefs.Flags.FLAG3_FBPROMO_OPT_OUT);
      if (!optOut) {
        _showdiv('fb-promo1');
      }

      // The user has "dismissed" the promo, i.e., clicked on the [x].
      // This is distinct from simply hiding the promo as a side effect.
      window.dismissFbPromoAlert = function() {
        prefs.setFlag3(prefs.Flags.FLAG3_FBPROMO_OPT_OUT, true);
        prefs.save();
        hideFbPromoAlert();
      };

      function hideFbPromoAlert() {
        _hidediv('fb-promo1');
      }

})();

    });


  </script>


  <script>
    // Initialize the subscriptions helper object that supports both the inline
    // "edit subscription" link featurette in the Recent Activity module and
    // the subscribe-from-masthead facility.
    var gaiaHost = 'https://web.archive.org/web/20110731000924/https://www.google.com';
    var gaiaLocale = 'en-US';
    window['subui_'] = new yt.www.home.Subscriptions(gaiaHost, gaiaLocale);
    yt.pubsub.subscribe('init', function() {
      window['subui_'].setCurrentLink(_gel('_firsteditsublink'));
    });
  </script>



        <script>
      if (window.yt.timing) {
        yt.timing.tick('ct');
      }
    </script>


</head>
<body id="" class="date-20110730 en_US ltr" dir="ltr">
  <form name="logoutForm" method="POST" action="/logout">
    <input type="hidden" name="action_logout" value="1">
  <input name="session_token" type="hidden" value="e-TYRlMVyrKvXPQ1sbCne4N3Rnd8MTMxMjE1NzM2NEAxMzEyMDcwOTY0"></form>
      <div id="ticker" class="ytg-base marketing">
    <div class="ytg-wide">
      <button onclick="yt.net.cookies.set('HideTicker', 1, 604800); _hidediv('ticker')">
Close
        <img alt="Close" onclick="yt.net.cookies.set('HideTicker', 1, 604800); _hidediv('ticker')" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
      </button>

                  <strong>WARNING: 2011 is in beta and is not finished.</strong> 
    </div>
  </div>

  <!-- begin page -->
  <div id="page" class="  home ">
      <!-- begin pagetop -->
<?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2011_header.php"); ?>
  <!-- end pagetop -->
  <!-- begin pagemiddle -->
  <div id="content-container">
    <div id="baseDiv" class="date-20110730 video-info ">
      <div id="alerts"></div>
  <div id="homepage-main-content" class="ytg-4col homepage-non-interactive">
	<?php if(!isset($_SESSION['siteusername'])) { ?>
      <div id="iyt-login-suggest-box">
          <div class="yt-alert yt-alert-promo yt-rounded "><div class="yt-alert-content">        <div id="signup-promo-message">Join the best worldwide video-sharing community!</div>
  <div id="signup-promo-links">
    <button href="/sign_up?feature=idx_promo_std&amp;next=" type="button" class=" yt-uix-button" onclick=";window.location.href=this.getAttribute('href');return false;" role="button" aria-pressed="false"><span class="yt-uix-button-content">Create Account ›</span></button>
    <span id="signup-promo-have-account">Already have an account? </span>
    <a href="/sign_in">Sign In</a>
  </div>

</div></div>

      </div>
	<?php } ?>


<div id="feedmodule-REC" class="feedmodule-anchor" bis_skin_checked="1">
    <div id="REC-titlebar" class="feedmodule-modheader" bis_skin_checked="1">
          <div class="fm-title-underlined" bis_skin_checked="1">
    <div class="fm2-title" bis_skin_checked="1">
      <h2>
        <a href="/web/20110825062609/http://www.youtube.com/videos?r=1" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TitleClick/REC/Logged_Out');">Recommended for You</a>
      </h2>
    </div>

      <div class="feedmodule-preamble" bis_skin_checked="1">
        <a href="#" onclick="_showdiv('logged_out_rec_learn_more_box');return false;" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/Rec_LearnMore_Open');">Learn More</a>
      </div>
  </div>

    </div>


    <div id="REC-content" class="clear" bis_skin_checked="1">
        <div id="REC-data" class="feedmodule-data" bis_skin_checked="1">
              <div id="logged_out_rec_learn_more_box" class="side-announcement-box" style="margin: 5px 10px 5px 5px; padding: 5px; display: none; zoom: 1;" bis_skin_checked="1">
    <div style="cursor: pointer; display:inline; float: right;" onclick="_hidediv('logged_out_rec_learn_more_box'); return false;" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/Rec_LearnMore_Close');" bis_skin_checked="1"><img class="img-php-close-button master-sprite" style="background-position: -82px -712px;" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif"></div>

  <div style="color: black; padding-left: 5px;" bis_skin_checked="1">
The "Recommended for You" module picks videos based on your viewing history. To see your <a href="/web/20110825062609/http://www.youtube.com/my_history">viewing history</a>, click on the History link at the top right of the page; if you want to clear your history and recommendations, click the "Clear Viewing History" button on that page.
  </div>

  <div style="color: black; padding-left: 5px; padding-right: 10px; margin-top: 10px;" bis_skin_checked="1">
Remember, you will get better, more specific, and more consistent recommendations by <a href="https://web.archive.org/web/20110825062609/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US&amp;ltmpl=sso">logging in</a> (or <a href="/web/20110825062609/http://www.youtube.com/signup?next=%2F">signing up</a> for a YouTube account, if you don't already have one).
  </div>
</div>


                <div class="feedmodule-body grid-view" bis_skin_checked="1">
    <div class="clearL" bis_skin_checked="1">
        <div class="feedmodule-item-with-x" bis_skin_checked="1">
          <div id="reco-pIA4kdzkgZw" class="video-cell" style="width:99.5%" onmouseover="_showdiv('REMOVE-pIA4kdzkgZw');" onmouseout="_hidediv('REMOVE-pIA4kdzkgZw');" bis_skin_checked="1">


  <div class="video-entry" style="position:relative" bis_skin_checked="1">

      <div class="hid" id="REMOVE-pIA4kdzkgZw" style="position:absolute;top:0px;left:140px;z-index:1" onclick="yt.www.recos.removeRecommendation('pIA4kdzkgZw');return false" bis_skin_checked="1">
        <img src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="master-sprite img-php-close-button">
      </div>

      





    

<a href="/web/20110825062609/http://www.youtube.com/watch?v=pIA4kdzkgZw&amp;feature=grec_index" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="Lirr" alt="Thumbnail" src="//web.archive.org/web/20110825062609im_/http://i1.ytimg.com/vi/pIA4kdzkgZw/default.jpg" class="" click="" onmousedown=""></span></span><span class="video-time">1:51</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="pIA4kdzkgZw" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-pIA4kdzkgZw" bis_skin_checked="1">

      <div dir="ltr" class="video-title" bis_skin_checked="1">
        <div class="video-short-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=pIA4kdzkgZw&amp;feature=grec_index" id="video-short-title-pIA4kdzkgZw" rel="nofollow" title="Lirr" dir="ltr">Lirr</a>

        </div>
        <div class="video-long-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=pIA4kdzkgZw&amp;feature=grec_index" id="video-long-title-pIA4kdzkgZw" rel="nofollow" title="Lirr" dir="ltr">Lirr</a>

        </div>
      </div>

        <div id="video-description-pIA4kdzkgZw" dir="ltr" class="video-description" bis_skin_checked="1">
          Lirr
        </div>


      <div class="video-facets" bis_skin_checked="1">
          <span id="video-added-time-pIA4kdzkgZw" class="video-date-added">
              5 days ago
          </span>


            <span id="video-num-views-pIA4kdzkgZw" class="video-view-count">10 views
</span>




          

      </div>      </div>  

    <div class="video-clear-list-left" bis_skin_checked="1"></div>

        <div class="smallText grayText" bis_skin_checked="1"><em>Because you watched</em></div>
        <div dir="ltr" class="video-title" bis_skin_checked="1">
          <div class="smallText" bis_skin_checked="1">
            <a href="/web/20110825062609/http://www.youtube.com/watch?v=pTGaU5kOvvw" title="LIRR Ticket Issuing Machines Pilot" rel="nofollow"><em>LIRR Ticket Issui...</em></a>
          </div>
        </div>

  </div>  
</div>  

        </div>
        <div class="feedmodule-item-with-x" bis_skin_checked="1">
          <div id="reco-fGBiZiWmcbQ" class="video-cell" style="width:99.5%" onmouseover="_showdiv('REMOVE-fGBiZiWmcbQ');" onmouseout="_hidediv('REMOVE-fGBiZiWmcbQ');" bis_skin_checked="1">


  <div class="video-entry" style="position:relative" bis_skin_checked="1">

      <div class="hid" id="REMOVE-fGBiZiWmcbQ" style="position:absolute;top:0px;left:140px;z-index:1" onclick="yt.www.recos.removeRecommendation('fGBiZiWmcbQ');return false" bis_skin_checked="1">
        <img src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="master-sprite img-php-close-button">
      </div>

      





    

<a href="/web/20110825062609/http://www.youtube.com/watch?v=fGBiZiWmcbQ&amp;feature=grec_index" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="*THIS COUNTRY IS FINISHED* GEORGE CARLIN ON COUNTDOWN" alt="Thumbnail" src="//web.archive.org/web/20110825062609im_/http://i3.ytimg.com/vi/fGBiZiWmcbQ/default.jpg" class="" click="" onmousedown=""></span></span><span class="video-time">7:40</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="fGBiZiWmcbQ" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-fGBiZiWmcbQ" bis_skin_checked="1">

      <div dir="ltr" class="video-title" bis_skin_checked="1">
        <div class="video-short-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=fGBiZiWmcbQ&amp;feature=grec_index" id="video-short-title-fGBiZiWmcbQ" rel="nofollow" title="*THIS COUNTRY IS FINISHED* GEORGE CARLIN ON COUNTDOWN" dir="ltr">*THIS COUNTRY IS FINISHED* GEORG...</a>

        </div>
        <div class="video-long-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=fGBiZiWmcbQ&amp;feature=grec_index" id="video-long-title-fGBiZiWmcbQ" rel="nofollow" title="*THIS COUNTRY IS FINISHED* GEORGE CARLIN ON COUNTDOWN" dir="ltr">*THIS COUNTRY IS FINISHED* GEORGE CARLIN ON COUNTDOWN</a>

        </div>
      </div>

        <div id="video-description-fGBiZiWmcbQ" dir="ltr" class="video-description" bis_skin_checked="1">
          OCTOBER 23, 2007 KEITH OLBERMANN
        </div>


      <div class="video-facets" bis_skin_checked="1">
          <span id="video-added-time-fGBiZiWmcbQ" class="video-date-added">
              2 years ago
          </span>


            <span id="video-num-views-fGBiZiWmcbQ" class="video-view-count">92,048 views
</span>




          

      </div>      </div>  

    <div class="video-clear-list-left" bis_skin_checked="1"></div>

        <div class="smallText grayText" bis_skin_checked="1"><em>Because you watched</em></div>
        <div dir="ltr" class="video-title" bis_skin_checked="1">
          <div class="smallText" bis_skin_checked="1">
            <a href="/web/20110825062609/http://www.youtube.com/watch?v=hYIC0eZYEtI" title="George Carlin -&quot;Who Really Controls America&quot;" rel="nofollow"><em>George Carlin -"W...</em></a>
          </div>
        </div>

  </div>  
</div>  

        </div>
        <div class="feedmodule-item-with-x" bis_skin_checked="1">
          <div id="reco-7V-Dn9bHf4M" class="video-cell" style="width:99.5%" onmouseover="_showdiv('REMOVE-7V-Dn9bHf4M');" onmouseout="_hidediv('REMOVE-7V-Dn9bHf4M');" bis_skin_checked="1">


  <div class="video-entry" style="position:relative" bis_skin_checked="1">

      <div class="hid" id="REMOVE-7V-Dn9bHf4M" style="position:absolute;top:0px;left:140px;z-index:1" onclick="yt.www.recos.removeRecommendation('7V-Dn9bHf4M');return false" bis_skin_checked="1">
        <img src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="master-sprite img-php-close-button">
      </div>

      





    

<a href="/web/20110825062609/http://www.youtube.com/watch?v=7V-Dn9bHf4M&amp;feature=grec_index" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="MTA LIRR Bombardier M7 #7703 at the Franklin Avenue crossing in Garden City" alt="Thumbnail" src="//web.archive.org/web/20110825062609im_/http://i4.ytimg.com/vi/7V-Dn9bHf4M/default.jpg" class="" click="" onmousedown=""></span></span><span class="video-time">1:28</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="7V-Dn9bHf4M" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-7V-Dn9bHf4M" bis_skin_checked="1">

      <div dir="ltr" class="video-title" bis_skin_checked="1">
        <div class="video-short-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=7V-Dn9bHf4M&amp;feature=grec_index" id="video-short-title-7V-Dn9bHf4M" rel="nofollow" title="MTA LIRR Bombardier M7 #7703 at the Franklin Avenue crossing in Garden City" dir="ltr">MTA LIRR Bombardier M7 #7703 at ...</a>

        </div>
        <div class="video-long-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=7V-Dn9bHf4M&amp;feature=grec_index" id="video-long-title-7V-Dn9bHf4M" rel="nofollow" title="MTA LIRR Bombardier M7 #7703 at the Franklin Avenue crossing in Garden City" dir="ltr">MTA LIRR Bombardier M7 #7703 at the Franklin Avenue crossing in Gar...</a>

        </div>
      </div>

        <div id="video-description-7V-Dn9bHf4M" dir="ltr" class="video-description" bis_skin_checked="1">
          MTA Long Island Rail Road Bombardier M7 #7703 at the Franklin Avenue crossing in G...
        </div>


      <div class="video-facets" bis_skin_checked="1">
          <span id="video-added-time-7V-Dn9bHf4M" class="video-date-added">
              1 week ago
          </span>


            <span id="video-num-views-7V-Dn9bHf4M" class="video-view-count">46 views
</span>




          

      </div>      </div>  

    <div class="video-clear-list-left" bis_skin_checked="1"></div>

        <div class="smallText grayText" bis_skin_checked="1"><em>Because you watched</em></div>
        <div dir="ltr" class="video-title" bis_skin_checked="1">
          <div class="smallText" bis_skin_checked="1">
            <a href="/web/20110825062609/http://www.youtube.com/watch?v=pTGaU5kOvvw" title="LIRR Ticket Issuing Machines Pilot" rel="nofollow"><em>LIRR Ticket Issui...</em></a>
          </div>
        </div>

  </div>  
</div>  

        </div>
        <div class="feedmodule-item-with-x" bis_skin_checked="1">
          <div id="reco-ovb4r3g74JQ" class="video-cell" style="width:99.5%" onmouseover="_showdiv('REMOVE-ovb4r3g74JQ');" onmouseout="_hidediv('REMOVE-ovb4r3g74JQ');" bis_skin_checked="1">


  <div class="video-entry" style="position:relative" bis_skin_checked="1">

      <div class="hid" id="REMOVE-ovb4r3g74JQ" style="position: absolute; top: 0px; left: 140px; z-index: 1; display: none;" onclick="yt.www.recos.removeRecommendation('ovb4r3g74JQ');return false" bis_skin_checked="1">
        <img src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="master-sprite img-php-close-button">
      </div>

      





    

<a href="/web/20110825062609/http://www.youtube.com/watch?v=ovb4r3g74JQ&amp;feature=grec_index" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="Roseanne Drive-Through" alt="Thumbnail" src="//web.archive.org/web/20110825062609im_/http://i4.ytimg.com/vi/ovb4r3g74JQ/default.jpg" class="" click="" onmousedown=""></span></span><span class="video-time">0:22</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="ovb4r3g74JQ" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-ovb4r3g74JQ" bis_skin_checked="1">

      <div dir="ltr" class="video-title" bis_skin_checked="1">
        <div class="video-short-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=ovb4r3g74JQ&amp;feature=grec_index" id="video-short-title-ovb4r3g74JQ" rel="nofollow" title="Roseanne Drive-Through" dir="ltr">Roseanne Drive-Through</a>

        </div>
        <div class="video-long-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=ovb4r3g74JQ&amp;feature=grec_index" id="video-long-title-ovb4r3g74JQ" rel="nofollow" title="Roseanne Drive-Through" dir="ltr">Roseanne Drive-Through</a>

        </div>
      </div>

        <div id="video-description-ovb4r3g74JQ" dir="ltr" class="video-description" bis_skin_checked="1">
          Roseanne installs a drive-thru window.
        </div>


      <div class="video-facets" bis_skin_checked="1">
          <span id="video-added-time-ovb4r3g74JQ" class="video-date-added">
              3 years ago
          </span>


            <span id="video-num-views-ovb4r3g74JQ" class="video-view-count">4,591 views
</span>




          

      </div>      </div>  

    <div class="video-clear-list-left" bis_skin_checked="1"></div>

        <div class="smallText grayText" bis_skin_checked="1"><em>Because you watched</em></div>
        <div dir="ltr" class="video-title" bis_skin_checked="1">
          <div class="smallText" bis_skin_checked="1">
            <a href="/web/20110825062609/http://www.youtube.com/watch?v=DuhUDkmFD_4" title="Roseanne Confronts Her State Representative On Big Business, Politics, Unemployment  &amp; Foreclosure" rel="nofollow"><em>Roseanne Confront...</em></a>
          </div>
        </div>

  </div>  
</div>  

        </div>
        <div class="feedmodule-item-with-x" bis_skin_checked="1">
          <div id="reco-RBYYoAiNEqU" class="video-cell" style="width:99.5%" onmouseover="_showdiv('REMOVE-RBYYoAiNEqU');" onmouseout="_hidediv('REMOVE-RBYYoAiNEqU');" bis_skin_checked="1">


  <div class="video-entry" style="position:relative" bis_skin_checked="1">

      <div class="hid" id="REMOVE-RBYYoAiNEqU" style="position:absolute;top:0px;left:140px;z-index:1" onclick="yt.www.recos.removeRecommendation('RBYYoAiNEqU');return false" bis_skin_checked="1">
        <img src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="master-sprite img-php-close-button">
      </div>

      





    

<a href="/web/20110825062609/http://www.youtube.com/watch?v=RBYYoAiNEqU&amp;feature=grec_index" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="Roseanne talks accountability with Rep Mike" alt="Thumbnail" src="//web.archive.org/web/20110825062609im_/http://i3.ytimg.com/vi/RBYYoAiNEqU/default.jpg" class="" click="" onmousedown=""></span></span><span class="video-time">1:34</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="RBYYoAiNEqU" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-RBYYoAiNEqU" bis_skin_checked="1">

      <div dir="ltr" class="video-title" bis_skin_checked="1">
        <div class="video-short-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=RBYYoAiNEqU&amp;feature=grec_index" id="video-short-title-RBYYoAiNEqU" rel="nofollow" title="Roseanne talks accountability with Rep Mike" dir="ltr">Roseanne talks accountability wi...</a>

        </div>
        <div class="video-long-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=RBYYoAiNEqU&amp;feature=grec_index" id="video-long-title-RBYYoAiNEqU" rel="nofollow" title="Roseanne talks accountability with Rep Mike" dir="ltr">Roseanne talks accountability with Rep Mike</a>

        </div>
      </div>

        <div id="video-description-RBYYoAiNEqU" dir="ltr" class="video-description" bis_skin_checked="1">
          Roseanne opens the door to rep Representative Mike Summers and discusses big busin...
        </div>


      <div class="video-facets" bis_skin_checked="1">
          <span id="video-added-time-RBYYoAiNEqU" class="video-date-added">
              1 month ago
          </span>


            <span id="video-num-views-RBYYoAiNEqU" class="video-view-count">935 views
</span>




          

      </div>      </div>  

    <div class="video-clear-list-left" bis_skin_checked="1"></div>

        <div class="smallText grayText" bis_skin_checked="1"><em>Because you watched</em></div>
        <div dir="ltr" class="video-title" bis_skin_checked="1">
          <div class="smallText" bis_skin_checked="1">
            <a href="/web/20110825062609/http://www.youtube.com/watch?v=DuhUDkmFD_4" title="Roseanne Confronts Her State Representative On Big Business, Politics, Unemployment  &amp; Foreclosure" rel="nofollow"><em>Roseanne Confront...</em></a>
          </div>
        </div>

  </div>  
</div>  

        </div>
        <div class="feedmodule-item-with-x" bis_skin_checked="1">
          <div id="reco-jnEluTsOg2U" class="video-cell" style="width:99.5%" onmouseover="_showdiv('REMOVE-jnEluTsOg2U');" onmouseout="_hidediv('REMOVE-jnEluTsOg2U');" bis_skin_checked="1">


  <div class="video-entry" style="position:relative" bis_skin_checked="1">

      <div class="hid" id="REMOVE-jnEluTsOg2U" style="position:absolute;top:0px;left:140px;z-index:1" onclick="yt.www.recos.removeRecommendation('jnEluTsOg2U');return false" bis_skin_checked="1">
        <img src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="master-sprite img-php-close-button">
      </div>

      





    

<a href="/web/20110825062609/http://www.youtube.com/watch?v=jnEluTsOg2U&amp;feature=grec_index" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="What are George Carlin's good ideas?" alt="Thumbnail" src="//web.archive.org/web/20110825062609im_/http://i3.ytimg.com/vi/jnEluTsOg2U/default.jpg" class="" click="" onmousedown=""></span></span><span class="video-time">1:31</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="jnEluTsOg2U" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-jnEluTsOg2U" bis_skin_checked="1">

      <div dir="ltr" class="video-title" bis_skin_checked="1">
        <div class="video-short-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=jnEluTsOg2U&amp;feature=grec_index" id="video-short-title-jnEluTsOg2U" rel="nofollow" title="What are George Carlin's good ideas?" dir="ltr">What are George Carlin's good id...</a>

        </div>
        <div class="video-long-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=jnEluTsOg2U&amp;feature=grec_index" id="video-long-title-jnEluTsOg2U" rel="nofollow" title="What are George Carlin's good ideas?" dir="ltr">What are George Carlin's good ideas?</a>

        </div>
      </div>

        <div id="video-description-jnEluTsOg2U" dir="ltr" class="video-description" bis_skin_checked="1">
          America's top comic has a real knack for innovative products.
        </div>


      <div class="video-facets" bis_skin_checked="1">
          <span id="video-added-time-jnEluTsOg2U" class="video-date-added">
              4 years ago
          </span>


            <span id="video-num-views-jnEluTsOg2U" class="video-view-count">82,230 views
</span>




          

      </div>      </div>  

    <div class="video-clear-list-left" bis_skin_checked="1"></div>

        <div class="smallText grayText" bis_skin_checked="1"><em>Because you watched</em></div>
        <div dir="ltr" class="video-title" bis_skin_checked="1">
          <div class="smallText" bis_skin_checked="1">
            <a href="/web/20110825062609/http://www.youtube.com/watch?v=DuhUDkmFD_4" title="Roseanne Confronts Her State Representative On Big Business, Politics, Unemployment  &amp; Foreclosure" rel="nofollow"><em>Roseanne Confront...</em></a>
          </div>
        </div>

  </div>  
</div>  

        </div>
        <div class="feedmodule-item-with-x" bis_skin_checked="1">
          <div id="reco-5TatWzAZXwo" class="video-cell" style="width:99.5%" onmouseover="_showdiv('REMOVE-5TatWzAZXwo');" onmouseout="_hidediv('REMOVE-5TatWzAZXwo');" bis_skin_checked="1">


  <div class="video-entry" style="position:relative" bis_skin_checked="1">

      <div class="hid" id="REMOVE-5TatWzAZXwo" style="position:absolute;top:0px;left:140px;z-index:1" onclick="yt.www.recos.removeRecommendation('5TatWzAZXwo');return false" bis_skin_checked="1">
        <img src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="master-sprite img-php-close-button">
      </div>

      





    

<a href="/web/20110825062609/http://www.youtube.com/watch?v=5TatWzAZXwo&amp;feature=grec_index" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="Roseanne Lose a Job, Winnebago Part 1" alt="Thumbnail" src="//web.archive.org/web/20110825062609im_/http://i2.ytimg.com/vi/5TatWzAZXwo/default.jpg" class="" click="" onmousedown=""></span></span><span class="video-time">5:57</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="5TatWzAZXwo" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-5TatWzAZXwo" bis_skin_checked="1">

      <div dir="ltr" class="video-title" bis_skin_checked="1">
        <div class="video-short-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=5TatWzAZXwo&amp;feature=grec_index" id="video-short-title-5TatWzAZXwo" rel="nofollow" title="Roseanne Lose a Job, Winnebago Part 1" dir="ltr">Roseanne Lose a Job, Winnebago P...</a>

        </div>
        <div class="video-long-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=5TatWzAZXwo&amp;feature=grec_index" id="video-long-title-5TatWzAZXwo" rel="nofollow" title="Roseanne Lose a Job, Winnebago Part 1" dir="ltr">Roseanne Lose a Job, Winnebago Part 1</a>

        </div>
      </div>

        <div id="video-description-5TatWzAZXwo" dir="ltr" class="video-description" bis_skin_checked="1">
          Part 1.
        </div>


      <div class="video-facets" bis_skin_checked="1">
          <span id="video-added-time-5TatWzAZXwo" class="video-date-added">
              3 years ago
          </span>


            <span id="video-num-views-5TatWzAZXwo" class="video-view-count">42,856 views
</span>




          

      </div>      </div>  

    <div class="video-clear-list-left" bis_skin_checked="1"></div>

        <div class="smallText grayText" bis_skin_checked="1"><em>Because you watched</em></div>
        <div dir="ltr" class="video-title" bis_skin_checked="1">
          <div class="smallText" bis_skin_checked="1">
            <a href="/web/20110825062609/http://www.youtube.com/watch?v=DuhUDkmFD_4" title="Roseanne Confronts Her State Representative On Big Business, Politics, Unemployment  &amp; Foreclosure" rel="nofollow"><em>Roseanne Confront...</em></a>
          </div>
        </div>

  </div>  
</div>  

        </div>
        <div class="feedmodule-item-with-x" bis_skin_checked="1">
          <div id="reco-LVwmtwZLG88" class="video-cell" style="width:99.5%" onmouseover="_showdiv('REMOVE-LVwmtwZLG88');" onmouseout="_hidediv('REMOVE-LVwmtwZLG88');" bis_skin_checked="1">


  <div class="video-entry" style="position:relative" bis_skin_checked="1">

      <div class="hid" id="REMOVE-LVwmtwZLG88" style="position: absolute; top: 0px; left: 140px; z-index: 1; display: none;" onclick="yt.www.recos.removeRecommendation('LVwmtwZLG88');return false" bis_skin_checked="1">
        <img src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="master-sprite img-php-close-button">
      </div>

      





    

<a href="/web/20110825062609/http://www.youtube.com/watch?v=LVwmtwZLG88&amp;feature=grec_index" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="curious stroboscopic effect" alt="Thumbnail" src="//web.archive.org/web/20110825062609im_/http://i1.ytimg.com/vi/LVwmtwZLG88/default.jpg" class="" click="" onmousedown=""></span></span><span class="video-time">0:26</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="LVwmtwZLG88" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825062609im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-LVwmtwZLG88" bis_skin_checked="1">

      <div dir="ltr" class="video-title" bis_skin_checked="1">
        <div class="video-short-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=LVwmtwZLG88&amp;feature=grec_index" id="video-short-title-LVwmtwZLG88" rel="nofollow" title="curious stroboscopic effect" dir="ltr">curious stroboscopic effect</a>

        </div>
        <div class="video-long-title" bis_skin_checked="1">
          
  





  <a class="" href="/web/20110825062609/http://www.youtube.com/watch?v=LVwmtwZLG88&amp;feature=grec_index" id="video-long-title-LVwmtwZLG88" rel="nofollow" title="curious stroboscopic effect" dir="ltr">curious stroboscopic effect</a>

        </div>
      </div>

        <div id="video-description-LVwmtwZLG88" dir="ltr" class="video-description" bis_skin_checked="1">
          That's what happens when you record the plane's blades with a Nokia N95.
        </div>


      <div class="video-facets" bis_skin_checked="1">
          <span id="video-added-time-LVwmtwZLG88" class="video-date-added">
              2 years ago
          </span>


            <span id="video-num-views-LVwmtwZLG88" class="video-view-count">1,703,923 views
</span>




          

      </div>      </div>  

    <div class="video-clear-list-left" bis_skin_checked="1"></div>

        <div class="smallText grayText" bis_skin_checked="1"><em>Because you watched</em></div>
        <div dir="ltr" class="video-title" bis_skin_checked="1">
          <div class="smallText" bis_skin_checked="1">
            <a href="/web/20110825062609/http://www.youtube.com/watch?v=2bCu2eGCjz4" title="Maggie Gallagher Meets St. Peter" rel="nofollow"><em>Maggie Gallagher ...</em></a>
          </div>
        </div>

  </div>  
</div>  

        </div>
    </div>
  </div>


        </div>
    </div>
  </div>


    <div id="dragdrop" class="h2-links-black" style="overflow: hidden; clear: both;">
          
                        
                  <div class="top-videos-module ytg-box">
        <div class="fm-title-underlined">
    <div class="fm2-title">
      <h2>
        <a href="/user/music" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TitleClick/TOP/Logged_Out');">Music</a>
      </h2>
    </div>

  </div>

      <div class="ytg-4col grid-view"><?php $musicvid = 0; ?>
															<?php
                                                                $stmt = $__db->prepare("SELECT * FROM videos WHERE category = 'Music' ORDER BY rand() LIMIT 4");
                                                                $stmt->execute();
                                                                while($video = $stmt->fetch(PDO::FETCH_ASSOC)) {	
																	$_user22 = $__user_h->fetch_user_username($video['author']);
                                                                    $video['age'] = $__time_h->time_elapsed_string($video['publish']);		
                                                                    $video['duration'] = $__time_h->timestamp($video['duration']);
                                                                    $video['views'] = $__video_h->fetch_video_views($video['rid']);
                                                                    $video['author'] = htmlspecialchars($video['author']);		
                                                                    $video['title'] = htmlspecialchars($video['title']);
                                                                    $video['description'] = $__video_h->shorten_description($video['description'], 50);
                                                            ?><?php $musicvid = $musicvid + 1; ?>  
    <div class="ytg-box ytg-1col<?php if ($musicvid == '4') { ?>-last<?php } ?> ">
      <div class="video-cell" style="width:99.5%">
  <div class="video-entry">
<a href="/watch?v=<?php echo $video['rid'] ?>" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="<?php echo $video['title'] ?>" alt="Thumbnail" src="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" class="" click="" onmousedown=""></span></span><span class="video-time"><?php echo $video['duration']; ?></span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="h7djo7Xu9JU" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false" data-tooltip="Add to Watch Later
" data-tooltip-title="Add to Watch Later
" data-tooltip-timer="687"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false" data-tooltip-timer="683"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-h7djo7Xu9JU">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=h7djo7Xu9JU&amp;feature=topvideos_music" id="video-short-title-h7djo7Xu9JU" rel="nofollow" title="<?php echo $video['title'] ?>"><?php echo $video['title'] ?></a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=h7djo7Xu9JU&amp;feature=topvideos_music" id="video-long-title-h7djo7Xu9JU" rel="nofollow" title="<?php echo $video['title'] ?>"><?php echo $video['title'] ?></a>

        </div>
      </div>

        <div id="video-description-h7djo7Xu9JU" dir="ltr" class="video-description">
			this never actually shows so who cares about this lololol
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="KurtHugoSchneider" href="/user/<?php echo htmlspecialchars($video['author']); ?>"><?php if($_user22['title'])	{	?><?php echo htmlspecialchars($_user22['title']); ?><?php } else {	?><?php echo htmlspecialchars($video['author']); ?><?php	}	?></a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>
																<?php } ?>
      </div>
    </div>

          <div class="top-videos-module ytg-box">
        <div class="fm-title-underlined">
    <div class="fm2-title">
      <h2>
        <a href="/user/entertainment" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TitleClick/TOP/Logged_Out');">Entertainment</a>
      </h2>
    </div>

  </div>

      <div class="ytg-4col grid-view">
         
<!--yes --><?php $musicvid = 0; ?>
															<?php
                                                                $stmt = $__db->prepare("SELECT * FROM videos WHERE category = 'Entertainment' ORDER BY rand() LIMIT 4");
                                                                $stmt->execute();
                                                                while($video = $stmt->fetch(PDO::FETCH_ASSOC)) {	
																	$_user22 = $__user_h->fetch_user_username($video['author']);
                                                                    $video['age'] = $__time_h->time_elapsed_string($video['publish']);		
                                                                    $video['duration'] = $__time_h->timestamp($video['duration']);
                                                                    $video['views'] = $__video_h->fetch_video_views($video['rid']);
                                                                    $video['author'] = htmlspecialchars($video['author']);		
                                                                    $video['title'] = htmlspecialchars($video['title']);
                                                                    $video['description'] = $__video_h->shorten_description($video['description'], 50);
                                                            ?><?php $musicvid = $musicvid + 1; ?>  
    <div class="ytg-box ytg-1col <?php if ($musicvid == '4') { ?>ytg-last<?php } ?> ">
      <div class="video-cell" style="width:99.5%">
  <div class="video-entry">
<a href="/watch?v=<?php echo $video['rid'] ?>" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="<?php echo $video['title'] ?>" alt="Thumbnail" src="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" class="" click="" onmousedown=""></span></span><span class="video-time"><?php echo $video['duration']; ?></span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="h7djo7Xu9JU" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false" data-tooltip="Add to Watch Later
" data-tooltip-title="Add to Watch Later
" data-tooltip-timer="687"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false" data-tooltip-timer="683"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-h7djo7Xu9JU">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=h7djo7Xu9JU&amp;feature=topvideos_music" id="video-short-title-h7djo7Xu9JU" rel="nofollow" title="<?php echo $video['title'] ?>"><?php echo $video['title'] ?></a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=h7djo7Xu9JU&amp;feature=topvideos_music" id="video-long-title-h7djo7Xu9JU" rel="nofollow" title="<?php echo $video['title'] ?>"><?php echo $video['title'] ?></a>

        </div>
      </div>

        <div id="video-description-h7djo7Xu9JU" dir="ltr" class="video-description">
			this never actually shows so who cares about this lololol
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="KurtHugoSchneider" href="/user/<?php echo htmlspecialchars($video['author']); ?>"><?php if($_user22['title'])	{	?><?php echo htmlspecialchars($_user22['title']); ?><?php } else {	?><?php echo htmlspecialchars($video['author']); ?><?php	}	?></a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>
<?php } ?>
<!--no-->
      </div>
    </div>

          <div class="top-videos-module ytg-box">
        <div class="fm-title-underlined">
    <div class="fm2-title">
      <h2>
        <a href="/user/sports" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TitleClick/TOP/Logged_Out');">Sports</a>
      </h2>
    </div>

  </div>

      <div class="ytg-4col grid-view">
<!--yes --><?php $musicvid = 0; ?>
															<?php
                                                                $stmt = $__db->prepare("SELECT * FROM videos WHERE category = 'Sports' ORDER BY rand() LIMIT 4");
                                                                $stmt->execute();
                                                                while($video = $stmt->fetch(PDO::FETCH_ASSOC)) {	
																	$_user22 = $__user_h->fetch_user_username($video['author']);
                                                                    $video['age'] = $__time_h->time_elapsed_string($video['publish']);		
                                                                    $video['duration'] = $__time_h->timestamp($video['duration']);
                                                                    $video['views'] = $__video_h->fetch_video_views($video['rid']);
                                                                    $video['author'] = htmlspecialchars($video['author']);		
                                                                    $video['title'] = htmlspecialchars($video['title']);
                                                                    $video['description'] = $__video_h->shorten_description($video['description'], 50);
                                                            ?><?php $musicvid = $musicvid + 1; ?>  
    <div class="ytg-box ytg-1col <?php if ($musicvid == '4') { ?>ytg-last<?php } ?> ">
      <div class="video-cell" style="width:99.5%">
  <div class="video-entry">
<a href="/watch?v=<?php echo $video['rid'] ?>" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="<?php echo $video['title'] ?>" alt="Thumbnail" src="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" class="" click="" onmousedown=""></span></span><span class="video-time"><?php echo $video['duration']; ?></span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="h7djo7Xu9JU" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false" data-tooltip="Add to Watch Later
" data-tooltip-title="Add to Watch Later
" data-tooltip-timer="687"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false" data-tooltip-timer="683"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-h7djo7Xu9JU">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=h7djo7Xu9JU&amp;feature=topvideos_music" id="video-short-title-h7djo7Xu9JU" rel="nofollow" title="<?php echo $video['title'] ?>"><?php echo $video['title'] ?></a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=h7djo7Xu9JU&amp;feature=topvideos_music" id="video-long-title-h7djo7Xu9JU" rel="nofollow" title="<?php echo $video['title'] ?>"><?php echo $video['title'] ?></a>

        </div>
      </div>

        <div id="video-description-h7djo7Xu9JU" dir="ltr" class="video-description">
			this never actually shows so who cares about this lololol
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="KurtHugoSchneider" href="/user/<?php echo htmlspecialchars($video['author']); ?>"><?php if($_user22['title'])	{	?><?php echo htmlspecialchars($_user22['title']); ?><?php } else {	?><?php echo htmlspecialchars($video['author']); ?><?php	}	?></a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>
<?php } ?>
<!--no-->
      </div>
    </div>


            <div class="top-videos-module ytg-box">
          <div class="ytg-2col ">
        <div class="fm-title-underlined">
    <div class="fm2-title">
      <h2>
        <a href="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TitleClick/TOP/Logged_Out');">Recent videos</a>
      </h2>
    </div>

  </div>

      <div class="ytg-2col">
        <ul class="video-list">

                                                            <?php
                                                                $stmt = $__db->prepare("SELECT * FROM videos ORDER BY id DESC LIMIT 3");
                                                                $stmt->execute();
                                                                while($video = $stmt->fetch(PDO::FETCH_ASSOC)) {	
																	$_user22 = $__user_h->fetch_user_username($video['author']);
                                                                    $video['age'] = $__time_h->time_elapsed_string($video['publish']);		
                                                                    $video['duration'] = $__time_h->timestamp($video['duration']);
                                                                    $video['views'] = $__video_h->fetch_video_views($video['rid']);
                                                                    $video['author'] = htmlspecialchars($video['author']);		
                                                                    $video['title'] = htmlspecialchars($video['title']);
                                                                    $video['description'] = $__video_h->shorten_description($video['description'], 50);
                                                            ?>
    <li class="video-list-item "><a href="/watch?v=<?php echo $video['rid']; ?>" class="video-list-item-link "><span class="ux-thumb-wrap  contains_addto"><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" alt="Thumbnail" data-thumb="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" data-group-key="thumb-group-1"></span></span><span class="video-time"><?php echo $video['duration'] ?></span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="AcFrOPEOeQI" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></span><span dir="ltr" class="title" title="METH RAGE"><?php echo $video['title'] ?></span><span class="stat">by <?php if($_user22['title'])	{	?><?php echo htmlspecialchars($_user22['title']); ?><?php } else {	?><?php echo htmlspecialchars($video['author']); ?><?php	}	?></span><span class="stat view-count"><?php echo $video['views']; ?> views
</span></a></li>
																<?php } ?>
        </ul>
      </div>
    </div>

          <div class="ytg-2col ytg-last">
        <div class="fm-title-underlined">
    <div class="fm2-title">
      <h2>
        <a href="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TitleClick/TOP/Logged_Out');">Random videos</a>
      </h2>
    </div>

  </div>

      <div class="ytg-2col">
        <ul class="video-list">
								<?php
									$stmt = $__db->prepare("SELECT * FROM videos WHERE visibility = 'n' ORDER BY rand() LIMIT 3");
									$stmt->execute();
									while($video = $stmt->fetch(PDO::FETCH_ASSOC)) {	
										$_user22 = $__user_h->fetch_user_username($_video['author']);
										$video['age'] = $__time_h->time_elapsed_string($video['publish']);		
										$video['duration'] = $__time_h->timestamp($video['duration']);
										$video['views'] = $__video_h->fetch_video_views($video['rid']);
										$_user22 = $__user_h->fetch_user_username($_video['author']);
										$video['author'] = htmlspecialchars($video['author']);		
										$video['title'] = htmlspecialchars($video['title']);
										$video['description'] = $__video_h->shorten_description($video['description'], 50);
								?>
    <li class="video-list-item "><a href="/watch?v=<?php echo $video['rid'] ?>" class="video-list-item-link "><span class="ux-thumb-wrap  contains_addto"><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" alt="Thumbnail" data-thumb="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" data-group-key="thumb-group-1"></span></span><span class="video-time"><?php echo $video['duration'] ?></span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="luLiCZFeVXI" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></span><span dir="ltr" class="title" title="PARALLEL: FaZe Fakie &amp; FaZe Temperrr - A MW2 Dualtage by FaZe MinK"><?php echo $video['title'] ?></span><span class="stat">by <?php if($_user22['title'])	{	?><?php echo htmlspecialchars($_user22['title']); ?><?php } else {	?><?php echo htmlspecialchars($video['author']); ?><?php	}	?></span><span class="stat view-count"><?php echo $video['views'] ?> views
</span></a></li><?php } ?>

        </ul>
      </div>
    </div>

    </div>


        <div class="top-videos-module ytg-box">
        <div class="ytg-2col ">
            <div class="fm-title-underlined">
    <div class="fm2-title">
      <h2>
        <a href="/film" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TitleClick/TOP/Logged_Out');">Film &amp; Animation</a>
      </h2>
    </div>

  </div>

          <div class="ytg-2col grid-view">
              
    <div class="ytg-box ytg-1col ">
      <div class="video-cell" style="width:99.5%">




  <div class="video-entry">



      





    

<a href="/web/20110731000924/http://www.youtube.com/watch?v=FL0JuVhAv44&amp;feature=topvideos_film" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="Upcoming Stuff" data-thumb="//web.archive.org/web/20110731000924/http://i3.ytimg.com/vi/FL0JuVhAv44/default.jpg" alt="Thumbnail" src="//web.archive.org/web/20110731000924/http://i3.ytimg.com/vi/FL0JuVhAv44/default.jpg" class="" click="" onmousedown="" data-group-key="thumb-group-2"></span></span><span class="video-time">3:09</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="FL0JuVhAv44" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-FL0JuVhAv44">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=FL0JuVhAv44&amp;feature=topvideos_film" id="video-short-title-FL0JuVhAv44" rel="nofollow" title="Upcoming Stuff">Upcoming Stuff</a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=FL0JuVhAv44&amp;feature=topvideos_film" id="video-long-title-FL0JuVhAv44" rel="nofollow" title="Upcoming Stuff">Upcoming Stuff</a>

        </div>
      </div>

        <div id="video-description-FL0JuVhAv44" dir="ltr" class="video-description">
          Check out my other videos: http://youtube.com/MysteryGuitarMan

My second channe...
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="MysteryGuitarMan" href="/web/20110731000924/http://www.youtube.com/user/MysteryGuitarMan">MysteryGuitarMan</a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>

              
    <div class="ytg-box ytg-1col ytg-last">
      <div class="video-cell" style="width:99.5%">




  <div class="video-entry">



      





    

<a href="/web/20110731000924/http://www.youtube.com/watch?v=mNNivaRIj5A&amp;feature=topvideos_film" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="TAKEOUT - Moving Out" data-thumb="//web.archive.org/web/20110731000924/http://i2.ytimg.com/vi/mNNivaRIj5A/default.jpg" alt="Thumbnail" src="//web.archive.org/web/20110731000924/http://i2.ytimg.com/vi/mNNivaRIj5A/default.jpg" class="" click="" onmousedown="" data-group-key="thumb-group-2"></span></span><span class="video-time">3:56</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="mNNivaRIj5A" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-mNNivaRIj5A">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=mNNivaRIj5A&amp;feature=topvideos_film" id="video-short-title-mNNivaRIj5A" rel="nofollow" title="TAKEOUT - Moving Out">TAKEOUT - Moving Out</a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=mNNivaRIj5A&amp;feature=topvideos_film" id="video-long-title-mNNivaRIj5A" rel="nofollow" title="TAKEOUT - Moving Out">TAKEOUT - Moving Out</a>

        </div>
      </div>

        <div id="video-description-mNNivaRIj5A" dir="ltr" class="video-description">
          Bloopers and behind the scenes: Moving Out.

Watch the original video: http://ww...
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="juliansmith87" href="/web/20110731000924/http://www.youtube.com/user/juliansmith87">juliansmith87</a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>

          </div>
        </div>
        <div class="ytg-2col ytg-last">
            <div class="fm-title-underlined">
    <div class="fm2-title">
      <h2>
        <a href="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TitleClick/TOP/Logged_Out');">News &amp; Politics</a>
      </h2>
    </div>

  </div>

          <div class="ytg-2col grid-view">
              
    <div class="ytg-box ytg-1col ">
      <div class="video-cell" style="width:99.5%">




  <div class="video-entry">



      





    

<a href="/web/20110731000924/http://www.youtube.com/watch?v=5Cn41HlEIeQ&amp;feature=topvideos_news" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="‪Diana Jenkins : The Outrageous Case of Jovan Divjak‬" data-thumb="//web.archive.org/web/20110731000924/http://i2.ytimg.com/vi/5Cn41HlEIeQ/default.jpg" alt="Thumbnail" src="//web.archive.org/web/20110731000924/http://i2.ytimg.com/vi/5Cn41HlEIeQ/default.jpg" class="" click="" onmousedown="" data-group-key="thumb-group-2"></span></span><span class="video-time">3:38</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="5Cn41HlEIeQ" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-5Cn41HlEIeQ">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=5Cn41HlEIeQ&amp;feature=topvideos_news" id="video-short-title-5Cn41HlEIeQ" rel="nofollow" title="‪Diana Jenkins : The Outrageous Case of Jovan Divjak‬">‪Diana Jenkins : The Outrageous ...</a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=5Cn41HlEIeQ&amp;feature=topvideos_news" id="video-long-title-5Cn41HlEIeQ" rel="nofollow" title="‪Diana Jenkins : The Outrageous Case of Jovan Divjak‬">‪Diana Jenkins : The Outrageous Case of Jovan Divjak‬</a>

        </div>
      </div>

        <div id="video-description-5Cn41HlEIeQ" dir="ltr" class="video-description">
          Read Here: http://huff.to/BosnianJustice

BREAKING NEWS JOVAN DIVJAK IS FREED!
...
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="Justice4Bosnia" href="/web/20110731000924/http://www.youtube.com/user/Justice4Bosnia">Justice4Bosnia</a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>

              
    <div class="ytg-box ytg-1col ytg-last">
      <div class="video-cell" style="width:99.5%">




  <div class="video-entry">



      





    

<a href="/web/20110731000924/http://www.youtube.com/watch?v=0meBdaobWC8&amp;feature=topvideos_news" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="Cártel de Jalisco Nueva Generación en Veracruz" data-thumb="//web.archive.org/web/20110731000924/http://i1.ytimg.com/vi/0meBdaobWC8/default.jpg" alt="Thumbnail" src="//web.archive.org/web/20110731000924/http://i1.ytimg.com/vi/0meBdaobWC8/default.jpg" class="" click="" onmousedown="" data-group-key="thumb-group-2"></span></span><span class="video-time">4:53</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="0meBdaobWC8" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-0meBdaobWC8">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=0meBdaobWC8&amp;feature=topvideos_news" id="video-short-title-0meBdaobWC8" rel="nofollow" title="Cártel de Jalisco Nueva Generación en Veracruz">Cártel de Jalisco Nueva Generaci...</a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=0meBdaobWC8&amp;feature=topvideos_news" id="video-long-title-0meBdaobWC8" rel="nofollow" title="Cártel de Jalisco Nueva Generación en Veracruz">Cártel de Jalisco Nueva Generación en Veracruz</a>

        </div>
      </div>

        <div id="video-description-0meBdaobWC8" dir="ltr" class="video-description">
          Mas informacion: http://www.blogdelnarco.com/2011/07/video-cartel-de-jalisco-nueva...
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="BlogdelNarcoVideos" href="/web/20110731000924/http://www.youtube.com/user/BlogdelNarcoVideos">BlogdelNarcoVideos</a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>

          </div>
        </div>
        <div class="ytg-2col ">
            <div class="fm-title-underlined">
    <div class="fm2-title">
      <h2>
        <a href="/comedy" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TitleClick/TOP/Logged_Out');">Comedy</a><?php $musicvid = 0; ?>
      </h2>
    </div>

  </div>

          <div class="ytg-2col grid-view">
															<?php
                                                                $stmt = $__db->prepare("SELECT * FROM videos WHERE category = 'Comedy' ORDER BY rand() LIMIT 2");
                                                                $stmt->execute();
                                                                while($video = $stmt->fetch(PDO::FETCH_ASSOC)) {	
																	$_user22 = $__user_h->fetch_user_username($video['author']);
                                                                    $video['age'] = $__time_h->time_elapsed_string($video['publish']);		
                                                                    $video['duration'] = $__time_h->timestamp($video['duration']);
                                                                    $video['views'] = $__video_h->fetch_video_views($video['rid']);
                                                                    $video['author'] = htmlspecialchars($video['author']);		
                                                                    $video['title'] = htmlspecialchars($video['title']);
                                                                    $video['description'] = $__video_h->shorten_description($video['description'], 50);
                                                            ?><?php $musicvid = $musicvid + 1; ?> 
    <div class="ytg-box ytg-1col <?php if ($musicvid == '2') { ?>ytg-last<?php } ?>">
      <div class="video-cell" style="width:99.5%">
  <div class="video-entry">
<a href="/watch?v=" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="Talking Trash to mum" data-thumb="//web.archive.org/web/20110731000924/http://i4.ytimg.com/vi/wO2qaIVsgtQ/default.jpg" alt="Thumbnail" src="//web.archive.org/web/20110731000924/http://i4.ytimg.com/vi/wO2qaIVsgtQ/default.jpg" class="" click="" onmousedown="" data-group-key="thumb-group-2"></span></span><span class="video-time">3:49</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="wO2qaIVsgtQ" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-wO2qaIVsgtQ">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=wO2qaIVsgtQ&amp;feature=topvideos_comedy" id="video-short-title-wO2qaIVsgtQ" rel="nofollow" title="Talking Trash to mum">Talking Trash to mum</a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=wO2qaIVsgtQ&amp;feature=topvideos_comedy" id="video-long-title-wO2qaIVsgtQ" rel="nofollow" title="Talking Trash to mum">Talking Trash to mum</a>

        </div>
      </div>

        <div id="video-description-wO2qaIVsgtQ" dir="ltr" class="video-description">
          Throwing out process at home: my bin  to my mum. Do you guys get the same thing? E...
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="communitychannel" href="/web/20110731000924/http://www.youtube.com/user/communitychannel">communitychannel</a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>
	<?php } ?>
      </div>
        </div>
        <div class="ytg-2col ytg-last">
            <div class="fm-title-underlined">
    <div class="fm2-title">
      <h2>
        <a href="/people" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TitleClick/TOP/Logged_Out');">People &amp; Blogs</a>
      </h2>
    </div>

  </div>

          <div class="ytg-2col grid-view">
              
    <div class="ytg-box ytg-1col ">
      <div class="video-cell" style="width:99.5%">




  <div class="video-entry">



      





    

<a href="/web/20110731000924/http://www.youtube.com/watch?v=HUvBTb-0lH8&amp;feature=topvideos_people" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="This Must End | Old Spice Mano a Mano" data-thumb="//web.archive.org/web/20110731000924/http://i1.ytimg.com/vi/HUvBTb-0lH8/default.jpg" alt="Thumbnail" src="//web.archive.org/web/20110731000924/http://i1.ytimg.com/vi/HUvBTb-0lH8/default.jpg" class="" click="" onmousedown="" data-group-key="thumb-group-2"></span></span><span class="video-time">4:08</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="HUvBTb-0lH8" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-HUvBTb-0lH8">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=HUvBTb-0lH8&amp;feature=topvideos_people" id="video-short-title-HUvBTb-0lH8" rel="nofollow" title="This Must End | Old Spice Mano a Mano">This Must End | Old Spice Mano a...</a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=HUvBTb-0lH8&amp;feature=topvideos_people" id="video-long-title-HUvBTb-0lH8" rel="nofollow" title="This Must End | Old Spice Mano a Mano">This Must End | Old Spice Mano a Mano</a>

        </div>
      </div>

        <div id="video-description-HUvBTb-0lH8" class="video-description">
          
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="OldSpice" href="/web/20110731000924/http://www.youtube.com/user/OldSpice">OldSpice</a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>

              
    <div class="ytg-box ytg-1col ytg-last">
      <div class="video-cell" style="width:99.5%">




  <div class="video-entry">



      





    

<a href="/web/20110731000924/http://www.youtube.com/watch?v=5mc_NACJ140&amp;feature=topvideos_people" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="DEATH BY BURGER" data-thumb="//web.archive.org/web/20110731000924/http://i2.ytimg.com/vi/5mc_NACJ140/default.jpg" alt="Thumbnail" src="//web.archive.org/web/20110731000924/http://i2.ytimg.com/vi/5mc_NACJ140/default.jpg" class="" click="" onmousedown="" data-group-key="thumb-group-2"></span></span><span class="video-time">5:30</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="5mc_NACJ140" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-5mc_NACJ140">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=5mc_NACJ140&amp;feature=topvideos_people" id="video-short-title-5mc_NACJ140" rel="nofollow" title="DEATH BY BURGER">DEATH BY BURGER</a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=5mc_NACJ140&amp;feature=topvideos_people" id="video-long-title-5mc_NACJ140" rel="nofollow" title="DEATH BY BURGER">DEATH BY BURGER</a>

        </div>
      </div>

        <div id="video-description-5mc_NACJ140" dir="ltr" class="video-description">
          WATCH THE NEWEST EPISODE: http://bit.ly/WorstPICKUPs

Every Thursday, you're inv...
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="IanH" href="/web/20110731000924/http://www.youtube.com/user/IanH">IanH</a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>

          </div>
        </div>
        <div class="ytg-2col ">
            <div class="fm-title-underlined">
    <div class="fm2-title">
      <h2>
        <a href="/science" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TitleClick/TOP/Logged_Out');">Science &amp; Technology</a>
      </h2>
    </div>

  </div>

          <div class="ytg-2col grid-view">
              
    <div class="ytg-box ytg-1col ">
      <div class="video-cell" style="width:99.5%">




  <div class="video-entry">



      





    

<a href="/web/20110731000924/http://www.youtube.com/watch?v=K-4THnOdk3I&amp;feature=topvideos_science" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="BMW i. Born Electric. The BMW i3 Concept &amp; BMW i8 Concept" data-thumb="//web.archive.org/web/20110731000924/http://i4.ytimg.com/vi/K-4THnOdk3I/default.jpg" alt="Thumbnail" src="//web.archive.org/web/20110731000924/http://i4.ytimg.com/vi/K-4THnOdk3I/default.jpg" class="" click="" onmousedown="" data-group-key="thumb-group-3"></span></span><span class="video-time">1:11</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="K-4THnOdk3I" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-K-4THnOdk3I">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=K-4THnOdk3I&amp;feature=topvideos_science" id="video-short-title-K-4THnOdk3I" rel="nofollow" title="BMW i. Born Electric. The BMW i3 Concept &amp; BMW i8 Concept">BMW i. Born Electric. The BMW i3...</a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=K-4THnOdk3I&amp;feature=topvideos_science" id="video-long-title-K-4THnOdk3I" rel="nofollow" title="BMW i. Born Electric. The BMW i3 Concept &amp; BMW i8 Concept">BMW i. Born Electric. The BMW i3 Concept &amp; BMW i8 Concept</a>

        </div>
      </div>

        <div id="video-description-K-4THnOdk3I" dir="ltr" class="video-description">
          Visit http://www.bmw-i.com and find out more about BMW i.
We just unveiled the BMW...
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="BMWi" href="/web/20110731000924/http://www.youtube.com/user/BMWi">BMWi</a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>

              
    <div class="ytg-box ytg-1col ytg-last">
      <div class="video-cell" style="width:99.5%">




  <div class="video-entry">



      





    

<a href="/web/20110731000924/http://www.youtube.com/watch?v=5BoKULBoWAo&amp;feature=topvideos_science" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="Bradesco - Link 237" data-thumb="//web.archive.org/web/20110731000924/http://i2.ytimg.com/vi/5BoKULBoWAo/default.jpg" alt="Thumbnail" src="//web.archive.org/web/20110731000924/http://i2.ytimg.com/vi/5BoKULBoWAo/default.jpg" class="" click="" onmousedown="" data-group-key="thumb-group-3"></span></span><span class="video-time">0:31</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="5BoKULBoWAo" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-5BoKULBoWAo">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=5BoKULBoWAo&amp;feature=topvideos_science" id="video-short-title-5BoKULBoWAo" rel="nofollow" title="Bradesco - Link 237">Bradesco - Link 237</a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=5BoKULBoWAo&amp;feature=topvideos_science" id="video-long-title-5BoKULBoWAo" rel="nofollow" title="Bradesco - Link 237">Bradesco - Link 237</a>

        </div>
      </div>

        <div id="video-description-5BoKULBoWAo" dir="ltr" class="video-description">
          Conheça as facilidades do Novo Bradesco Internet Banking :)
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="bradesco" href="/web/20110731000924/http://www.youtube.com/user/bradesco">bradesco</a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>

          </div>
        </div>
        <div class="ytg-2col ytg-last">
            <div class="fm-title-underlined">
    <div class="fm2-title">
      <h2>
        <a href="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TitleClick/TOP/Logged_Out');">Education</a>
      </h2>
    </div>

  </div>

          <div class="ytg-2col grid-view">
              
    <div class="ytg-box ytg-1col ">
      <div class="video-cell" style="width:99.5%">




  <div class="video-entry">



      





    

<a href="/web/20110731000924/http://www.youtube.com/watch?v=qSps33-5A14&amp;feature=topvideos_education" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="Cordel Encantado 28/07/2011 parte 1 quinta feira" data-thumb="//web.archive.org/web/20110731000924/http://i2.ytimg.com/vi/qSps33-5A14/default.jpg" alt="Thumbnail" src="//web.archive.org/web/20110731000924/http://i2.ytimg.com/vi/qSps33-5A14/default.jpg" class="" click="" onmousedown="" data-group-key="thumb-group-3"></span></span><span class="video-time">8:02</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="qSps33-5A14" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-qSps33-5A14">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=qSps33-5A14&amp;feature=topvideos_education" id="video-short-title-qSps33-5A14" rel="nofollow" title="Cordel Encantado 28/07/2011 parte 1 quinta feira">Cordel Encantado 28/07/2011 part...</a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=qSps33-5A14&amp;feature=topvideos_education" id="video-long-title-qSps33-5A14" rel="nofollow" title="Cordel Encantado 28/07/2011 parte 1 quinta feira">Cordel Encantado 28/07/2011 parte 1 quinta feira</a>

        </div>
      </div>

        <div id="video-description-qSps33-5A14" dir="ltr" class="video-description">
          Cordel Encantado 28/07/2011 Quinta Feira Capitulo 94 parte 1
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="1cordelencantado" href="/web/20110731000924/http://www.youtube.com/user/1cordelencantado">1cordelencantado</a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>

              
    <div class="ytg-box ytg-1col ytg-last">
      <div class="video-cell" style="width:99.5%">




  <div class="video-entry">



      





    

<a href="/web/20110731000924/http://www.youtube.com/watch?v=Vl-GZYRFFJs&amp;feature=topvideos_education" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-128 "><span class="clip"><img onload="" title="Kim Kardashian Sexy Hot Pink Look" data-thumb="//web.archive.org/web/20110731000924/http://i3.ytimg.com/vi/Vl-GZYRFFJs/default.jpg" alt="Thumbnail" src="//web.archive.org/web/20110731000924/http://i3.ytimg.com/vi/Vl-GZYRFFJs/default.jpg" class="" click="" onmousedown="" data-group-key="thumb-group-3"></span></span><span class="video-time">8:37</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="Vl-GZYRFFJs" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>


    <div class="video-main-content video-title-one-line" id="video-main-content-Vl-GZYRFFJs">

      <div dir="ltr" class="video-title ">
        <div class="video-short-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=Vl-GZYRFFJs&amp;feature=topvideos_education" id="video-short-title-Vl-GZYRFFJs" rel="nofollow" title="Kim Kardashian Sexy Hot Pink Look">Kim Kardashian Sexy Hot Pink Look</a>

        </div>
        <div class="video-long-title">
            
  





  <a class="" href="/web/20110731000924/http://www.youtube.com/watch?v=Vl-GZYRFFJs&amp;feature=topvideos_education" id="video-long-title-Vl-GZYRFFJs" rel="nofollow" title="Kim Kardashian Sexy Hot Pink Look">Kim Kardashian Sexy Hot Pink Look</a>

        </div>
      </div>

        <div id="video-description-Vl-GZYRFFJs" dir="ltr" class="video-description">
          I entered a contest hosted to win a trip to New York. I'd be so thankful if you wa...
        </div>




      <div class="video-facets">





                  <span class="video-username">
by <a title="MissChievous" href="/web/20110731000924/http://www.youtube.com/user/MissChievous">MissChievous</a>
  </span>




          

      </div>      </div>  


    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    </div>

          </div>
        </div>
  </div>



    </div>

    <div class="main-spacer-bottom"></div>
  </div> <!-- end homepage-main-content -->

  <div id="homepage-side-content" class="ytg-2col ytg-last module-title-links-black ">





      

        <div class="homepage-side-block">
      
    <div class="module-title">Spotlight</div>

              <h3>lol!</h3>
  

    <div class="feedmodule-feditor">
      <div class="guest-editor-with-comment">
        <div class="guest-editor-comment">i lilika spart remihx1!!!!!!!!!!!</div>
          <div class="guest-editor-profile-link">
Presented by:
            <a href="/user/Leyti">Leyti</a>
          </div>
      </div>
      <div class="spacer">&nbsp;</div>
    </div>



    </div>
        <div class="homepage-side-block">
      
    <div class="module-title">Featured</div>

      
        <div id="hp-sidebar-PRO">
      <ul id="sidebar-videos-PRO" class="video-list">
                                                    <?php
                                                        $stmt = $__db->prepare("SELECT * FROM videos WHERE featured = 'v' ORDER BY id DESC LIMIT 3");
                                                        $stmt->execute();
                                                        while($video = $stmt->fetch(PDO::FETCH_ASSOC)) {	
															$_user22 = $__user_h->fetch_user_username($video['author']);
                                                            $video['age'] = $__time_h->time_elapsed_string($video['publish']);		
                                                            $video['duration'] = $__time_h->timestamp($video['duration']);
                                                            $video['views'] = $__video_h->fetch_video_views($video['rid']);
                                                            $video['author'] = htmlspecialchars($video['author']);		
                                                            $video['title'] = htmlspecialchars($video['title']);
                                                            $video['description'] = $__video_h->shorten_description($video['description'], 50);
                                                    ?>
            <li class="video-list-item "><a href="/watch?v=<?php echo $video['rid'] ?>" class="video-list-item-link " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');"><span class="ux-thumb-wrap  contains_addto"><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" alt="Thumbnail" data-thumb="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" data-group-key="thumb-group-1"></span></span><span class="video-time"><?php echo $video['duration'] ?></span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="d2Oe6NoX2ms" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></span><span dir="ltr" class="title" title="Nyan Cat - the Poptart Kitty"><?php echo $video['title'] ?></span><span class="stat">by <?php if($_user22['title'])	{	?><?php echo htmlspecialchars($_user22['title']); ?><?php } else {	?><?php echo htmlspecialchars($video['author']); ?><?php	}	?></span><span class="stat view-count"><?php echo $video['views'] ?> views
														</span></a></li><?php } ?>
  

      </ul>
  </div>

    </div>


    <div class="homepage-side-block">
  <div id="homepage-whats-new">
      <div class="module-title">What's New</div>
  
      <h3><a href="/web/20110731000924/http://www.youtube.com/movies?feature=mm_mv_wn" onmousedown="yt.analytics.trackEvent('HomePage', 'link', 'WhatsNew-Movies-201105');">2011</a></h3>
      <div class="entry">Your place for 2012 and 2013 now has 2011.<br></div>
      <p class="alignR">
        <a href="/user/Betatube">See more in our Blog</a>
      </p>

  </div>
</div>

        





  

  <div id="ad_creative_3" class="ad-div " style="z-index: 1">

  <iframe id="ad_creative_iframe_3" height="100" width="300" scrolling="no" frameborder="0" style="z-index: 1" src="https://web.archive.org/web/20110731000924/http://ad-g.doubleclick.net/adi/tst.ythome/promo1;sz=300x100;tile=3;klg=en;kt=K;kga=-1;kgg=-1;kcr=us;dc_dedup=1;kmyd=ad_creative_3;ord=2867974556173930?"></iframe>

  <script>
    (function() {
      var addTimestamp = (Math.floor(Math.random() * 1000) == 0);
      if (addTimestamp) {
        var kts = new Date().getTime();
        var iframeSrc = "https://web.archive.org/web/20110731000924/http://ad-g.doubleclick.net/adi/tst.ythome/promo1;sz=300x100;tile=3;klg=en;kt=K;kga=-1;kgg=-1;kcr=us;dc_dedup=1;kmyd=ad_creative_3;kts=" + kts + ";ord=2867974556173930?";
      } else {
        var iframeSrc = "https://web.archive.org/web/20110731000924/http://ad-g.doubleclick.net/adi/tst.ythome/promo1;sz=300x100;tile=3;klg=en;kt=K;kga=-1;kgg=-1;kcr=us;dc_dedup=1;kmyd=ad_creative_3;ord=2867974556173930?";
      }
      var adIframe = document.getElementById("ad_creative_iframe_3");
      adIframe.src = iframeSrc;
    })();
  </script>


  </div>

  </div> <!-- end homepage-side-content -->
  <div class="clear"></div>



      
      <div class="clear"></div>
    </div>
  </div>
  <!-- end pagemiddle -->
  <!-- begin pagebottom -->
<?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2011_footer.php"); ?>
    



  <div id="playlist-bar" class="hid passive editable empty" data-video-url="/watch?v=&amp;feature=BFql&amp;playnext=1&amp;list=QL" data-list-id="" data-list-type="QL"><iframe id="playlist-bar-mask" frameborder="0" src="javascript:&quot;&quot;" allow="autoplay 'self'; fullscreen 'self'"></iframe>
    <div id="playlist-bar-bar-container">
      <div id="playlist-bar-bar">
        <div id="playlist-bar-notifications" style="display: none;" class="yt-alert yt-alert-success yt-alert-small yt-alert-naked yt-rounded "><img src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><div class="yt-alert-content"></div></div>
<span id="playlist-bar-info"><span class="playlist-bar-active yt-uix-button-group"><button onclick=";return false;" title="Previous video" type="button" id="playlist-bar-prev-button" class="yt-uix-tooltip yt-uix-tooltip-masked start start-edge yt-uix-button yt-uix-tooltip yt-uix-button-empty" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-prev" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked end yt-uix-button yt-uix-button-empty" onclick=";return false;" id="playlist-bar-next-button" role="button" aria-pressed="false" data-tooltip="Next video"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-next" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="playlist-bar-passive"><button onclick=";return false;" title="Play videos" type="button" id="playlist-bar-play-button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-tooltip yt-uix-button-empty" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-play" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span id="playlist-bar-title">    <span>
Unsaved Playlist (<span class="item-count">0</span>)
    </span>
</span><button type="button" class="yt-uix-button-masked yt-uix-button-reverse yt-uix-button" onclick=";return false;" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-content">Options</span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><div class="yt-uix-button-menu" style="display: none;">  <div id="playlist-bar-options-menu" class="passive">

    <div id="playlist-bar-extras-menu">
        <ul>
      <li><span class="yt-uix-button-menu-item" data-action="clear">
Clear all videos from this list
      </span></li>
  </ul>

    </div>

    <ul>
      <li><span class="yt-uix-button-menu-item" onclick="window.location.href='https://web.archive.org/web/20110731000924/http://www.google.com/support/youtube/bin/answer.py?answer=146749'">Learn more</span></li>
    </ul>
  </div>
</div></button></span>
        <a id="playlist-bar-lists-back" href="#">
Return to active list
        </a>

<span id="playlist-bar-controls" class="yt-uix-button-group"><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked start playlist-bar-active yt-uix-button yt-uix-button-toggle yt-uix-button-empty" onclick=";return false;" id="playlist-bar-autoplay-button" role="button" aria-pressed="false" data-tooltip="Turn autoplay on"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-autoplay" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked start playlist-bar-active yt-uix-button yt-uix-button-toggle yt-uix-button-empty" onclick=";return false;" id="playlist-bar-shuffle-button" role="button" aria-pressed="false" data-tooltip="Turn shuffle on"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-shuffle" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked end end-edge yt-uix-button yt-uix-button-empty" onclick=";return false;" id="playlist-bar-toggle-button" role="button" aria-pressed="false" data-tooltip="Hide playlist"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-toggle" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span>      </div>
    </div>

<div id="playlist-bar-tray-container"><div id="playlist-bar-tray" class="yt-uix-slider yt-uix-slider-fluid"><button class="yt-uix-button playlist-bar-tray-button yt-uix-slider-prev" onclick="return false;"><img class="yt-uix-slider-prev-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Previous"></button><button class="yt-uix-button playlist-bar-tray-button yt-uix-slider-next" onclick="return false;"><img class="yt-uix-slider-next-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Next"></button><div class="yt-uix-slider-body"><div id="playlist-bar-tray-content" class="yt-uix-slider-slide"><ol class="video-list"></ol><ol id="playlist-bar-help"><li class="empty playlist-bar-help-message">Your queue is empty. Add videos to your queue using this button: <img src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="addto-button-help"><br> or <a href="https://web.archive.org/web/20110731000924/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US&amp;ltmpl=sso">sign in</a> to load a different list.</li></ol></div><div class="yt-uix-slider-shade-left"></div><div class="yt-uix-slider-shade-right"></div></div></div><div id="playlist-bar-save"></div><div id="playlist-bar-lists" class="dark-lolz"></div><div id="playlist-bar-loading"><img src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Loading..."><span id="playlist-bar-loading-message">Loading...</span><span id="playlist-bar-saving-message" class="hid">Saving...</span></div><div id="playlist-bar-template" style="display: none;" data-video-thumb-url="//i4.ytimg.com/vi/__video_encrypted_id__/default.jpg"><!--<li class="playlist-bar-item yt-uix-slider-slide-unit __classes__" data-video-id="__video_encrypted_id__"><a href="__video_url__" title="__video_title__"><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="__video_title__" data-thumb-manual="true" data-thumb="__video_thumb_url__" ></span></span><span class="screen"></span><span class="count"><strong>__list_position__</strong></span><span class="play"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif"></span><span class="yt-uix-button delete"><img class="yt-uix-button-icon-playlist-bar-delete" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Delete"></span></a><span dir="ltr" class="title yt-uix-slider-title"><span>__video_title__<span class="uploader">by __video_username__</span></span></span></li>--></div><div id="playlist-bar-next-up-template" style="display: none;"><!--<div class="playlist-bar-next-thumb"><span class="video-thumb ux-thumb-64 "><span class="clip"><img src="//i4.ytimg.com/vi/__video_encrypted_id__/default.jpg" alt="Thumbnail" ></span></span></div>--></div></div>  </div>


    <div id="shared-addto-menu" style="display: none;">
      <form method="post" action="/web/20110731000924/http://www.youtube.com/addto_ajax">
    <ul class="addto-menu">
      



    

    <li>
      <span class="yt-uix-button-menu-item " onclick="">
          <a href="#" onclick="yt.www.addtomenu.signInWithAddto(this);return false">Sign in</a> to add this to a playlist

      </span>
    </li>

      <li class="yt-uix-button-menu-item addto-item addto-create-container" style="display: none;">
        <input type="text" class="addto-create-name" value="" size="25">
      </li>
      
    </ul>
  <input name="session_token" type="hidden" value="e-TYRlMVyrKvXPQ1sbCne4N3Rnd8MTMxMjE1NzM2NEAxMzEyMDcwOTY0"></form>

  </div>



  <!-- end pagebottom -->

  </div>
  <!-- end page -->
      
      <script>
      yt.setConfig('TIMING_ACTION', 'index');
    </script>



  <script>
    


  yt.setMsg({
    'LIST_CLEARED': "List cleared",
      'PLAYLIST_VIDEO_DELETED': "Video deleted.",
    'ERROR_OCCURRED': "Sorry, an error occurred.",
    'NEXT_VIDEO_TOOLTIP': "Next video:\u003cbr\u003e \u0026#8220;${next_video_title}\u0026#8221;",
    'NEXT_VIDEO_NOTHUMB_TOOLTIP': "Next video",
    'SHOW_PLAYLIST_TOOLTIP': "Show playlist",
    'HIDE_PLAYLIST_TOOLTIP': "Hide playlist",
    'AUTOPLAY_ON_TOOLTIP': "Turn autoplay off",
    'AUTOPLAY_OFF_TOOLTIP': "Turn autoplay on",
    'SHUFFLE_ON_TOOLTIP': "Turn shuffle off",
    'SHUFFLE_OFF_TOOLTIP': "Turn shuffle on",
    'PLAYLIST_BAR_PLAYLIST_SAVED': "Playlist saved!",
    'PLAYLIST_BAR_ADDED_TO_FAVORITES': "Added to favorites",
    'PLAYLIST_BAR_ADDED_TO_PLAYLIST': "Added to playlist",
    'PLAYLIST_BAR_ADDED_TO_QUEUE': "Added to queue",
    'AUTOPLAY_WARNING1': "Next video starts in 1 second...",
    'AUTOPLAY_WARNING2': "Next video starts in 2 seconds...",
    'AUTOPLAY_WARNING3': "Next video starts in 3 seconds...",
    'AUTOPLAY_WARNING4': "Next video starts in 4 seconds...",
    'AUTOPLAY_WARNING5': "Next video starts in 5 seconds...",
    'UNDO_LINK': "Undo"  });


  yt.setConfig({
    'DRAGDROP_BINARY_URL': "\/\/web.archive.org\/web\/20110731000924\/http:\/\/s.ytimg.com\/yt\/jsbin\/www-dragdrop-vfltWcOgk.js",
    'PLAYLIST_BAR_PLAYING_INDEX': -1,
    'LOAD_WATCH_LATER_LIST': null  });

    yt.net.ajax.setToken("addto_ajax_logged_out", "_8KVkr2lDFVHsG4Sm41coNP0Q8p8MEAxMzEyMDcwOTY0");

    yt.pubsub.subscribe('init', yt.www.lists.init);





        yt.www.thumbnaildelayload.init();



      yt.events.listen(_gel('masthead-search-term'), 'focus', yt.www.home.ads.workaroundReset);


      if (_gel('masthead-search')) {
          yt.setTimeout(function() {
            window.yt.www.suggest.install(_gel('masthead-search'),
                _gel('masthead-search')['search_query'],
                'en',
                'close',
                '',
                'Web search',
                -1,
                null);
          }, 100);
      }

  </script>

  


  


<!--
playback timings (ms):
  exclusion.robots: 168.409 (7)
  exclusion.robots.policy: 168.308 (7)
  xauthn.identify: 100.204
  xauthn.chkprivs: 66.528
  RedisCDXSource: 177.304 (7)
  esindex: 0.07 (7)
  LoadShardBlock: 962.204 (24)
  PetaboxLoader3.datanode: 804.363 (25)
  CDXLines.iter: 474.185 (12)
  load_resource: 148.501
  PetaboxLoader3.resolve: 81.023
--><table id="completeTable" cellpadding="0" cellspacing="0" class="yt-suggest-table" style="visibility: hidden; left: 479px; top: 71px; width: 425px;"></table><iframe id="yt-suggest-iframe" allow="autoplay 'self'; fullscreen 'self'" style="left: 479px; top: 71px; width: 425px; height: 0px; visibility: hidden;"></iframe></body></html>