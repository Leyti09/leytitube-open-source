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
<!DOCTYPE html>
<html lang="en" dir="ltr"><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><!-- machid: sWkFSZzctYUFHdmczNzN4bUp1Z1ZMVTh5M1NCSTR1am5FQjBJc2dJYnFZQWc4UGNJSjN6QVVB --><head><script src="//archive.org/includes/athena.js" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app211.us.archive.org';v.server_ms=682;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="/_static/js/bundle-playback.js?v=HxkREWBo" charset="utf-8"></script>
<script type="text/javascript" src="/_static/js/wombat.js?v=txqj7nKC" charset="utf-8"></script>
<script type="text/javascript">
    __wm.init("https://web.archive.org/web");
  __wm.wombat("http://www.youtube.com/","20100728112039","https://web.archive.org/","web","/_static/",
	      "1280316039");
</script>
<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=S1zqJCYt">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=3PDvdIFv">
<!-- Start Wayback Rewrite JS Include -->
<script type="text/javascript" src="/_static/js/jwplayer/jwplayer.js?v=hiYhl5rb" charset="utf-8"></script>
<script type="text/javascript" src="/_static/js/bundle-video.js?v=TFNEreMA" charset="utf-8"></script>
<script type="text/javascript">
_wmVideos_.init({ prefix:"/web" });
</script>
<!-- End Wayback Rewrite JS Include -->

				<script>
			var yt = yt || {};
			yt.timing = yt.timing || {};
			yt.timing.cookieName = 'VISITOR_INFO1_LIVE';
			yt.timing.tick = function(label) {
				var timer = yt.timing.timer || {};
				timer[label] = new Date().getTime();
				yt.timing.timer = timer;
			};
				yt.timing.experiment = '907112,907021';
			
				yt.timing.tick('start');
			
			try {
				yt.timing.pt = window.gtbExternal && window.gtbExternal.pageT() ||
							window.external && window.external.pageT;
			} catch(e) {}
			if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
				yt.timing.pt = window.chrome && window.chrome.csi && Math.floor(window.chrome.csi().pageT);
			}
		</script>


		<title>
		YouTube
			- Broadcast Yourself.
	</title>

				<link id="www-core-css" rel="stylesheet" href="https://web.archive.org/web/20100728112039cs_/http://s.ytimg.com/yt/cssbin/www-core-vfl178416.css">


	<style type="text/css">
</style>


			<link rel="alternate" type="application/rss+xml" title="YouTube - Blog" href="/web/20100728112039/http://www.youtube.com/rss/global/our_blog.rss">
	<link rel="alternate" type="application/rss+xml" title="YouTube - Top Favorites Today" href="https://web.archive.org/web/20100728112039/http://gdata.youtube.com/feeds/base/standardfeeds/top_favorites?client=ytapi-youtube-index&amp;time=today&amp;v=2">
	<link rel="alternate" type="application/rss+xml" title="YouTube - Top Rated Today" href="https://web.archive.org/web/20100728112039/http://gdata.youtube.com/feeds/base/standardfeeds/top_rated?client=ytapi-youtube-index&amp;time=today&amp;v=2">
	<link rel="alternate" type="application/rss+xml" title="YouTube - Top Viewed Today" href="https://web.archive.org/web/20100728112039/http://gdata.youtube.com/feeds/base/standardfeeds/most_viewed?client=ytapi-youtube-index&amp;time=today&amp;v=2">
	<link rel="alternate" type="application/rss+xml" title="YouTube - Most Discussed Today" href="https://web.archive.org/web/20100728112039/http://gdata.youtube.com/feeds/base/standardfeeds/most_discussed?client=ytapi-youtube-index&amp;time=today&amp;v=2">
	<link rel="alternate" type="application/rss+xml" title="YouTube - Recently Added" href="https://web.archive.org/web/20100728112039/http://gdata.youtube.com/feeds/base/standardfeeds/most_recent?client=ytapi-youtube-index&amp;v=2">
	<link rel="alternate" type="application/rss+xml" title="YouTube - Recently Featured" href="https://web.archive.org/web/20100728112039/http://gdata.youtube.com/feeds/base/standardfeeds/recently_featured?client=ytapi-youtube-index&amp;v=2">


	<link rel="search" type="application/opensearchdescription+xml" href="https://web.archive.org/web/20100728112039/http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search">
	<link rel="icon" href="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/favicon-vfl147246.ico" type="image/x-icon">
	<link rel="shortcut icon" href="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/favicon-vfl147246.ico" type="image/x-icon">
		<link rel="canonical" href="/web/20100728112039/http://www.youtube.com/">
		<link rel="alternate" media="handheld" href="https://web.archive.org/web/20100728112039/http://m.youtube.com/index?desktop_uri=%2F&amp;gl=US">
	
		<meta name="description" content="YouTube is a place to discover, watch, upload and share videos.">

		<meta name="keywords" content="video, free, simple, search, find, discover, watch, engage, share, sharing, upload, entertainment">

	

					<script id="www-core-js" src="https://web.archive.org/web/20100728112039js_/http://s.ytimg.com/yt/jsbin/www-core-vfl178338.js"></script>


	<!-- begin postpage section -->
	<script>
		
		yt.setConfig({
			'XSRF_TOKEN': 'mht5sSKQiHx-_E-jtVNMiqyp5Dl8MTI4MDQwMjQzOQ==',
			'XSRF_FIELD_NAME': 'session_token'
		});
		yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);


		yt.setConfig('XSRF_QL_PAIR', 'session_token=ZsS789gbu13NxtbfVxPPcwgae-h8MA==');



		yt.setConfig('LOGGED_IN', false);
	</script>

		

<script type="text/javascript">
	var masthead = new yt.www.home.ads.mastheadAd('1', false, '2', 'w_8GBNvBJBU', true, true, false)
	yt.pubsub.subscribe('init', function() {
		_showdiv('masthead-utility-menulink-short');
		_hidediv('masthead-utility-menulink-long');
	});

</script>

<script type="text/javascript">

	var moduleHelper = new yt.www.home.ModuleHelper('',
			false, true);
		moduleHelper.addModule('FEA');
		moduleHelper.addModule('REC');
		moduleHelper.addModule('POP');
		moduleHelper.addModule('PRO');
		moduleHelper.addModule('TOP');

	function checkChromePromoAlert() {
		var hideChromePromos = yt.UserPrefs.getFlag3(yt.UserPrefs.Flags.FLAG3_HIDE_CHROME_PROMOS);

		if (!hideChromePromos) {
			_showdiv('homepage-chrome-side-promo');
		}
	};

	yt.pubsub.subscribe('init', checkChromePromoAlert);

	function dismissChromePromoAlert() {
		yt.UserPrefs.setFlag3(yt.UserPrefs.Flags.FLAG3_HIDE_CHROME_PROMOS, true);
		yt.UserPrefs.save();
		_hidediv('homepage-chrome-side-promo');
	};


	yt.pubsub.subscribe('init', function() {
		(function() {
			var sessionToken = '';
			var rootUrl = 'https://web.archive.org/web/20100728112039/http://www.youtube.com/';
			var locale = 'en_US';
			var serviceInfo = null;
			var isGaiaUser = false;
			var facebookAppKey = '7ff82e59b6b2fbd316cca35309e95df3';
			var tpDomain = 's.youtube-3rd-party.com';

			var autoshare = new yt.sharing.AutoShare(sessionToken, rootUrl, locale, serviceInfo,
					isGaiaUser, facebookAppKey, tpDomain);
			if (_gel('fb-login-btn')) {
				autoshare.registerConnectDialogLauncher(_gel('fb-login-btn'), 'facebook');
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
		// Initialize the inline "edit subscription" link featurette in the
		// Recent Activity module.
		window['subui_'] = new yt.www.home.Subscriptions();
		yt.pubsub.subscribe('init', function() {
			window['subui_'].setCurrentLink(_gel('_firsteditsublink'));
		});
	</script>


				<script>
			if (window.yt.timing) {
				yt.timing.tick('ct');
			}
		</script>


<style id="custom-cursor" type="text/css">body button, body [type='button'], body input[type='reset'], body input[type='submit'], body [role="button"], ::-webkit-search-cancel-button, ::-webkit-search-decoration, ::-webkit-scrollbar-button, ::-webkit-file-upload-button, [role^=button], .cc_pointer, [type="search"]::-webkit-search-cancel-button, a, select, [type="search"]::-webkit-search-decoration, .paper-button, .ytp-progress-bar-container, input[type=submit], :link, :visited, a > *, img,  ::-webkit-scrollbar-button, .ogdlpmhglpejoiomcodnpjnfgcpmgale_pointer, ::-webkit-file-upload-button, .ytp-volume-panel, #myogdlpmhglpejoiomcodnpjnfgcpmgale .icon, body .custom-cursor-on-hover {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAB8pJREFUWEetlwlUVOcVx/9vNoZFYIYZnBlBgbAJCKKVqGiCW4xrrCYxZHFJU0slYuxRTI11yYkeozlNo2mipjYkHrVV01ZCjLGosQYDSkCEAVnGYZlhxtmA2bf3XvseihJ7emZMvzPnzFvuvf/fu/c73/ddAj8aCgXCRJR4/hhF1AxFbGQGDVrhdHmj/CQVwudyvDw+10xTtLqty1JttzpPKI3Wjh/HCOaeeMCYm5csL8lOlm4NERDifpsberMNLo+fNSEIgMclQFHMNQFxZCiMfS7K6vCVkR7O+maj0R6M8D1bFiADEDyWl3xytCz8mRa1AVwO4CNpgPnRNPMHAY/DQtA04GfegYbXT7PvnW76us9FzHwUCBagICN+X36uYuOlWjX4XAIjwvjgcgj4/BQoRgs0OATBAjAZEPA5cPtI2JyD2WEg7A7q00at+dVgs0CMlYTJl87N6axp6hY43T7Wn/laoYDDipEUDS6XYEX4PA4cbj+EAi7cHnIwS3eH10tTDjvSW4zG9mAgiJw46brlT6fvr7jSiuiICPTZ7OByB1PNZIER9XhJCEO4cLrJu4AE3F4KAr4AJEWCpikW0Gontyt7LW8HBfBcftoxmVT44rWmXux5vRDGfhsuXFciLCQEPXfM0JvNoGimBGDLQZI0UuIVWPDERORmJKFbo8OOQ6cBgobDRX3Z0G1aHBTA2oXjq/UW6+PGPjcObyuCdFQcnDYrO+3dDgcqq+pQ16KGx+eHQirG1JwUZGelIVoSCw6HA4OmB1v+8Bm0RjNTlsa6TnN2UAC/WTZJVXdLkxQqFOKjbcUQj5QP83fZ7XDarWyKBSFChEdGgcvjDdkMmE3Y8t4R3O7Vw+2hO+s6jYlBARQvzlXXt2oT5BIx3t9ShKgYaTD+sFpM2Lz3E3TqDI8GsGJWxq0OjSltanY63ly3GnyBICgAW38fSvccHARwk011XeZxwQQgnpuWVqk19s167dl5WLboqWB8WVuf14N3PyxDVcMtON1U1Y0u07RgghAFmfHv+/yeN0rXvASpVAK90YJZ+RMCilGv7ECcTILGRiX2/vk0A1DR0G1aFJDzXSMiQy75VaQo8qBUIkaPVg+K9GHZU9MxKTsFqUnxkIqjhuIxE7FLeweqLh3KL9SgrrkdIpEIqQmj8MONmyD9VIfDQU3ssFisgUIQ8/Oy/h6bmr1kzpRMeNxuVJz/Dh2aXvjcHpB+EgunZcND0oiOCMM1pQoWmxsOhwM8DoEJ49KhkMeitqkdnn4Dls+cgI9Ofvtys850LGCAlXOnnudL4+dsXf8KBgZsECTkofjXv8C8RUsgsJux/9O/QsABvCSN/Mcn4oUVq/HNhW9wtfoqtmzYjEwZB4eOnkHiCECrM6D8/PevK/XmPwYMMGNc8s5I2ahtOzatgUg0mG5GLEw6GuXlX8PU0YDiwnm41tiOD05ewqHf74CX4sDpsEMcKwMnXITSDaVIDPdhSm4qNu39bElzr/lMwAAZI2NmTZmcXckLj0JpyWrwQkeAL46Hx09h/ZoiHPztywgPE7LxXtx8AMt/PhdPFjwBnkgBymXD1W8v4vjx05ie8xgkkaHYd6Q8U6m3NAcMMHakePLzC/K/b1TpYLB5kDUxD1EiEW7WXkPhzBw8M3vyUKw2tRYb9h3FmNR0iMIF7KT1OO3YsWoubrRr0Nqqwrkr9aktRmvAOyKRKRNnFL2ySCmXxSIpTorWttsQcAkkjpJiTFIiePz7C5PP64VGrcL1Wxo4SQKpiXHIy05BR7sKX12uQ4o8GruPVIxrudPXFHAGkmUR0p3rVt0RxUiJ/PHJw/ycLg/CQkOGnnl9fgj49/eBey8uXq6GTCbFF19e6H3v9OUEZn0KGIAxnJ2btnXx/DnbVi6awn/QsapWiTGjYhEnl+KWqgf9A3ZMnjD2odiXv6tBW7fR9vnfKp+/qTGeC1ScsRs6lL6xqrBi59olC0ANHrOYoTNYcOqry1D36BAdFYF5BXmYlJ3GHkofHDU1P2DDnrJ5Sp0lKPFhADnxI189c+zAEZFgMHsnyi/g8y/OAqCGtCiKRpxchtKil5CWFD/0vPzrS3jn4Kmk1jsD6mC+fhhAQnR09Pa3SnRLp6cJG1pU2LTrABIUIyEaEY4uvQlREaGIj42B1tgHrakfh3ZvhDw2htV7Z//Rm/uOn8sJVnwYAHPzwtMzyg6/W7qydPsu8GkaBbkpsDpc7OmYGRFhAkhixOgxDOC23oLSokJU1zfTG3cdXtioMTLpCnoMK2aaRJK2ruS1puv/Osvbtm4VrDYbNJ3dEEWGwun2guKGYOLPxsNps+GXvzuAtSuWkvs+PllU1db1p6CV7zoMn00AckbL9kzLHb1515sl7GQ79o/zKDt1lu0JPtixAWOTx6C1tQPFb38ImuK9VavW7X5U8YdKwDzIUIim5efEXRGGxeDZBTNx8Wot/nmlmtVYPOdJxMlicaqiEr0GC1wuKqNJZ275vwL8Z07xVs7Oauu3OxKNfQ62L2C2XqY7YhoRpi1jeganm6pv6DYFdnL5H4QPlYCxTZFGj89Klp4w9FnTmQ6JMfL6mK4U8PgoeNx0g9/jW9ZkGFD9lK//ryW4F5BpWDkKcQmfzy3mcJBA07SeIlHv9dPHm3XmvwC4v2L9BIp/A8vLZE6JujGRAAAAAElFTkSuQmCC") 5 3, pointer !important;} html,body,body select,body .custom-cursor-default-hover {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAABSRJREFUWEe911tsU3UcB/Dv6b1du663dVupHRuX3agFNwFRUFRA5eLQSJAQfFh4wBhNjCQYcaBgDDFeHsQHgkYeFnhYJiQEBqIO5eJgbB1ruw22td3Wnl7WnvZ0vZ/WnAoJIYKMdfu/nEtOft9Pfifnd84hcM+qLdNuqK5f+l4gxizOZjMMTY62J319u3o9mLz3unzuE2yxGkCwcM0LP5pe3rTtFhlCKpXOZTCpBByXzrZf6+19jT3MZ/DdWjlA49rVLaZXt2y1Do3lztPeMYDDhVRVglSUxnDHyS/Nt+17ZgRQX6HfuvWj5pZOmyNX3z9shT0RA3gCKERiVMypBO12ZEcut6/rd3nP5RtB7H7/3Y6wvHxlkApDX6LGxfZTCIUmAnxwXMU1T9WJpYWQiiQge6+63YNXjYMu2p9PBLH/071eKwVN0D4AKROGQK1Hz40r0cyEw6DSVZ/RL1tTn0mnQHA4GO441dbVZ9mcV8DnnzX7/7rRr8oSBKKeMax5axuOHz2MjN+9k5NOX9evWNspUWp5XKEISTqEod/bdljGvcfyhSAO7Puk+zaVMfVcOImEjzy0fsfO3b+dO4tkJnP5ptm8wjS/4pvKF9/4IBbwQlbyBLy2LsrV3Vk74Pe78oEg3m5cf2TJxu1NrT/9gPCI7SCXJ2jS1jaoyb7rH9+0Ow/VaDRSdXWdVVNdr48FvZAW62D/8/TpTrN5fV4AVaWqzbsOftvaeuIEKNIxGiedqzhZ7jybN3D+bkB1mer1yucb25hkHCK5Gux2qKP1HYvT9/N0EUQ5IKpY3mChsoQhSY4f6rOPNwNI3V+4wbjo5NyVGzb6B81QL1wMn+0G5evtqOrzTnqmg8gNIqMWBelM0Xyrj+p5ULHKMqXeUN1glXFS0skkA9kkCacn2NY16p3WU5EDPOqq06k/LFeIvopJiiEmGDC0H85g7E2LO9D6qDXuv25KAAC8pXOLr+kUMpMXBdAQUfipCDk6Ea+2UxT1OIipAlBTonpaJxdeERZIOREIUZSi4KDiR7tHfU2zAmBDTDrN9walaFcow4dEIkaaDmadVHR1P0n9MVXElDvABsxTKgtLFPx+jVRYSqb4KJFw4QmEB13D5JN2ID4VxGMB2IA6rXKLXiU+ziEIRHgyyDMROALRA+bxib2zAmBDGgzFZ+bIhesCcQYFIhHiiXjKE4qbLGTA+qiIx+4AGzBfK6/QFUr6FGKemKST0MoEcIcSl/52eJ8DkH0UxLQAuSGmU+0xKMRfZLIAnWAgE3LhDER33nQHjswKAAB/ebm2u1QurJ2IpiDhczGZZILjNF015Il4/w8x7Q6wATVlimd1heKLUgGXYG9FsVSAMSrR0jXq3TYrADZk8Rz1EYNS3JRisogkGUQL1Zgcc71k9UxceBgiLx1gAxbJ5YoitXhAKRNpxhgRQuonwPWN30r0WYwPmw15A+RmQ6lqO9+4/FiYwwPPNYK0Rgf+YM++fqdr/4O6kFcAAGKJ0fhr1LBwdToaAUEH2dy4YMS6yOIL3/4vRL4BqFKrF0jrTL1BiUzICfqQFUvBI+3dRNB/GEift7mpf39A7qy8A3KzoaK8mVPXsI9Op8H1ucAotUCGAYemwHMONtlcvqMzCmA/84qXLjNHS8sXxOIxENEwe3cALg9ct+PsQP/AKzMKYItXlRStUlQaW2IFhWVJcQESqSSI2CT4I9ZfbPaxxhkH3Ang1JQpnhEVarZw5epNEffQ1zan57t73xP/AMu0KD9ht/w2AAAAAElFTkSuQmCC") 3 1, auto !important;}</style></head>
<body class="date-20100728 en_US is-english watch5-active" dir="ltr" __processed_4e22c46b-9441-4f45-8bae-96591739f213__="true"><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script>__wm.rw(0);</script>
<div id="wm-ipp-base" lang="en" style="display: block; direction: ltr; height: 1px;">
</div><div id="wm-ipp-print"></div>
<script type="text/javascript">//<![CDATA[
__wm.bt(750,27,25,2,"web","http://www.youtube.com/","20100728112039",1996,"/_static/",["/_static/css/banner-styles.css?v=S1zqJCYt","/_static/css/iconochive.css?v=3PDvdIFv"], false);
  __wm.rw(1);
//]]></script>
<!-- END WAYBACK TOOLBAR INSERT -->
 
	<!--[if IE]><div id="ie"><![endif]-->
	<!-- begin prepage section -->
	<form name="logoutForm" method="post" action="/web/20100728112039/http://www.youtube.com/">
		<input type="hidden" name="action_logout" value="1">
	<input name="session_token" type="hidden" value="mht5sSKQiHx-_E-jtVNMiqyp5Dl8MTI4MDQwMjQzOQ=="></form>
	<!-- end prepage section -->
	<div id="page" class="">
			<div id="masthead-container">
			<div id="masthead" class="">
					<a href="/web/20100728112039/http://www.youtube.com/" title="YouTube home">
			<img id="logo" class="master-sprite" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt="YouTube home">
		</a>

		<div id="masthead-search">
			
	<form autocomplete="off" class="search-form" action="/web/20100728112039/http://www.youtube.com/results" method="get" name="searchForm" onsubmit="">
		<input id="masthead-search-term" class="search-term" name="search_query" value="" type="text" tabindex="1" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)" maxlength="128" autocomplete="off">



			<button type="button" class="search-button yt-uix-button" onclick="if (_gel('masthead-search-term').value != '') { document['searchForm'].submit(); }; return false;;return false;" tabindex="2"><span class="yt-uix-button-content">Search</span></button>

			<script>document.getElementById('masthead-search-term').focus();</script>
	<input type="hidden" name="aq" value="f"><input type="hidden" name="oq" value="" disabled=""></form>

		</div>
		<div id="masthead-nav">
			<a href="/web/20100728112039/http://www.youtube.com/videos">Browse</a><a href="https://web.archive.org/web/20100728112039/http://upload.youtube.com/my_videos_upload">Upload</a>
		</div>
			<div id="masthead-utility">
				<a class="start" href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/LogoutWarning?continue=http%3A%2F%2Fwww.youtube.com%2Fcreate_account%3Fnext%3D%252F&amp;ltmpl=sso&amp;hl=en_US&amp;service=youtube">Create Account</a><a class="end" href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US&amp;ltmpl=sso">Sign In</a>
			</div>
	</div>

	</div>
	
	</div> 
	<div id="baseDiv" class="date-20100728 video-info ">
			

		

	<div id="masthead_child_div"></div>
	<script type="text/javascript">
		var masthead_child_fo = new SWFObject("https://web.archive.org/web/20100728112039/http://s.ytimg.com/yt/swf/masthead_child-vfl89464.swf", "masthead_child", 1, 1, 7, "#FFFFFF");
		masthead_child_fo.addParam("allowFullscreen", "false");
		masthead_child_fo.addParam("allowScriptAccess", "always");
		masthead_child_fo.write("masthead_child_div");
	</script>
		

	

	<div id="ad_creative_expand_btn_1" class="homepage-masthead-ad hid" onclick="">
		<a class="homepage-masthead-btn" href="#" onclick="return masthead.expand_ad();">
				<span>Show Ad</span>
				<img src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite">
		</a>
	</div>



	
		






		<div id="ad_creative_1" class="ad-div mastad" style="z-index: 1; display: none;">
			<iframe id="ad_creative_iframe_1" src="https://web.archive.org/web/20100728112039if_/http://ad-g.doubleclick.net/adi/com.ythome/_default;sz=960x250;klg=en;kt=K;kga=-1;kgg=-1;kcr=us;dc_dedup=1;kmyd=ad_creative_1;tile=1;dcopt=ist;ord=4766595436711466" height="250" width="960" scrolling="no" frameborder="0" style="z-index: 1" onload="yt.www.home.ads.workaroundLoad()" onmouseover="yt.www.home.ads.workaroundIE(this)" onfocus="yt.www.home.ads.workaroundIE(this)"></iframe>			
		</div>



<div id="homepage-main-content" class="homepage-non-interactive">






	<div id="dragdrop" style="overflow: hidden; clear: both;">



			
		

					<div id="feedmodule-REC" class="feedmodule-anchor">
				<div class="feedmodule-modheader" id="REC-titlebar">
				<div id="feed_recommended">
		<div class="fm-title-underlined-gray custom-cursor-default-hover">
			<div class="fm2-title">
				<span class="fm2-titleText" id="feed_recommended-titleText"><a href="/web/20100728112039/http://www.youtube.com/videos?r=1" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/View_Recommended/Logged_Out');">Recommended for You</a></span>
			</div>

				<div class="feedmodule-preamble" style="border-bottom: 1px dotted;">
					<a href="#" onclick="_showdiv('logged_out_rec_learn_more_box');return false;" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/Rec_LearnMore_Open');">Learn More</a>
				</div>

					<div class="feedmodule-updown">

			<span id="medit-REC" class="iyt-edit-link iyt-edit-link-gray">Edit</span>

<span id="mup-REC" class="up-button disabled"><img class="master-sprite img-php-up-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></span><span id="mdown-REC" class="down-button disabled"><img class="master-sprite img-php-down-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></span><span id="mclose-REC" class="disabled"><img class="master-sprite img-php-close-button" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></span></div>


		</div>
	</div>

	</div>

	<div class="clear" id="feed_recommended-content">

			<div id="REC-options" class="opt-pane" style="display: none;">
		<div class="opt-box-top">
			<img class="homepage-sprite img-php-opt-box-caret" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif">
		</div>
		<div class="opt-banner">
			<div class="opt-links">
				<div class="opt-edit">Editing: Recommended for You</div>
				<div class="opt-close opt-close-button" onclick="moduleHelper.closeOptionsPane('REC')"><img class="img-php-close-button" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></div>
				<div class="opt-close opt-close-text" onclick="moduleHelper.closeOptionsPane('REC')">close</div>
				<div id="REC-loading-msg" class="opt-loading-msg" style="display: none;">
Saving...
				</div>
				<div id="REC-loading-icn" class="opt-loading-icn" style="display: none;">
					<img width="16" id="REC-loading-icn-image" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" image="http://s.ytimg.com/yt/img/icn_loading_animated-vfl24663.gif">
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="opt-main">
			<div class="opt-simple-msg">
				Want to customize this homepage?

				<a href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US<mpl=sso" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignIn/EditModuleBox');">Sign In</a> or <a href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/LogoutWarning?continue=http%3A%2F%2Fwww.youtube.com%2Fcreate_account%3Fnext%3DNone<mpl=sso&amp;hl=en_US&amp;service=youtube" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignUp/EditModuleBox');">Sign Up</a> now!

			</div>
		</div>
	</div>


		<div id="REC-data" class="feedmodule-data">


				<div id="logged_out_rec_learn_more_box" class="side-announcement-box" style="margin: 5px 10px 5px 5px; padding: 5px; display: none; zoom: 1;">
		<div style="cursor: pointer; display:inline; float: right;" onclick="_hidediv('logged_out_rec_learn_more_box'); return false;" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/Rec_LearnMore_Close');"><img class="img-php-close-button master-sprite" style="background-position: -82px -712px;" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></div>

	<div style="color: black; padding-left: 5px;">
The "Recommended for You" module picks videos based on your viewing history. To see your <a href="/web/20100728112039/http://www.youtube.com/my_history">viewing history</a>, click on the History link at the top right of the page; if you want to clear your history and recommendations, click the "Clear Viewing History" button on that page.
	</div>

	<div style="color: black; padding-left: 5px; padding-right: 10px; margin-top: 10px;">
Remember, you will get better, more specific, and more consistent recommendations by <a href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US&amp;ltmpl=sso">logging in</a> (or <a href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/LogoutWarning?continue=http%3A%2F%2Fwww.youtube.com%2Fcreate_account%3Fnext%3D%252F&amp;ltmpl=sso&amp;hl=en_US&amp;service=youtube">signing up</a> for a YouTube account, if you don't already have one).
	</div>
</div>


						<div class="feedmodule-body grid-view">
		<div class="clearL">
	
				<div id="reco-RpVqM2TGhiE" class="video-cell" style="width:24.5%" onmouseover="_showdiv('REMOVE-RpVqM2TGhiE');" onmouseout="_hidediv('REMOVE-RpVqM2TGhiE');">



	


	<div class="video-entry" style="position:relative">



		    <div class="hid" id="REMOVE-RpVqM2TGhiE" style="position: absolute; top: 0px; left: 140px; z-index: 1; display: none;" onclick="yt.www.recos.removeRecommendation('RpVqM2TGhiE');return false">
		        <img src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite img-php-close-button">
		    </div>
				
	
	
	
		
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch_videos?more_url=%2Fvideos%3Fr%3D1&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5&amp;feature=rec-LGOUT-real_rn-4r-11-HM&amp;no_autoplay=1" class="video-thumb ux-thumb-128" id="video-thumb-RpVqM2TGhiE-3460994"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="Itt Van A Gummimaci - Full Length Hungarian Version" alt="Itt Van A Gummimaci - Full Length Hungarian Version" src="https://web.archive.org/web/20100728112039im_/http://i3.ytimg.com/vi/RpVqM2TGhiE/default.jpg" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');"></span><span class="video-time">2:44</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-RpVqM2TGhiE-3460994', null, 'RpVqM2TGhiE', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-RpVqM2TGhiE">



			<div class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?more_url=%2Fvideos%3Fr%3D1&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5&amp;feature=rec-LGOUT-real_rn-4r-11-HM&amp;no_autoplay=1" rel="nofollow" title="Itt Van A Gummimaci - Full Length Hungarian Version" class="" id="video-short-title-RpVqM2TGhiE" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Itt Van A Gummimaci - Full Lengt...</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?more_url=%2Fvideos%3Fr%3D1&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5&amp;feature=rec-LGOUT-real_rn-4r-11-HM&amp;no_autoplay=1" rel="nofollow" title="Itt Van A Gummimaci - Full Length Hungarian Version" class="" id="video-long-title-RpVqM2TGhiE" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Itt Van A Gummimaci - Full Length Hungarian Version</a>

						<div class="video-logos">
	</div>

				</div>
			</div>

				<div id="video-description-RpVqM2TGhiE" class="video-description">
					From www.gummibar.net -  Full length Hungarian version of I Am A Gummy Bear (The G...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-RpVqM2TGhiE" class="video-date-added">2 years ago</span>

					<span id="video-num-views-RpVqM2TGhiE" class="video-view-count">8,027,534 views
</span>





				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>


	                <div class="smallText grayText"><em>Because you watched</em></div>
		        <div class="video-title">
			    <div class="smallText">
			        <a href="/web/20100728112039/http://www.youtube.com/watch?v=5bLjqxYlZVM" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');" title="Halo Wars" rel="nofollow"><em>Halo Wars</em></a>
 			    </div>
	   	        </div>


	</div>	
</div>	

				<div id="reco-WCEMeY4jiuw" class="video-cell" style="width:24.5%" onmouseover="_showdiv('REMOVE-WCEMeY4jiuw');" onmouseout="_hidediv('REMOVE-WCEMeY4jiuw');">



	


	<div class="video-entry" style="position:relative">



		    <div class="hid" id="REMOVE-WCEMeY4jiuw" style="position: absolute; top: 0px; left: 140px; z-index: 1; display: none;" onclick="yt.www.recos.removeRecommendation('WCEMeY4jiuw');return false">
		        <img src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite img-php-close-button">
		    </div>
				
	
	
	
		
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=1&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-2r-22-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" class="video-thumb ux-thumb-128" id="video-thumb-WCEMeY4jiuw-4141709"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="Real Grunt in South America" alt="Real Grunt in South America" src="https://web.archive.org/web/20100728112039im_/http://i4.ytimg.com/vi/WCEMeY4jiuw/default.jpg" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');"></span><span class="video-time">0:16</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-WCEMeY4jiuw-4141709', null, 'WCEMeY4jiuw', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-WCEMeY4jiuw">



			<div class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=1&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-2r-22-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="Real Grunt in South America" class="" id="video-short-title-WCEMeY4jiuw" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Real Grunt in South America</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=1&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-2r-22-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="Real Grunt in South America" class="" id="video-long-title-WCEMeY4jiuw" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Real Grunt in South America</a>

						<div class="video-logos">
	</div>

				</div>
			</div>

				<div id="video-description-WCEMeY4jiuw" class="video-description">
					It looks like the Covenant have come a little sooner than we thought.

Original ...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-WCEMeY4jiuw" class="video-date-added">2 years ago</span>

					<span id="video-num-views-WCEMeY4jiuw" class="video-view-count">142,398 views
</span>





				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>


	                <div class="smallText grayText"><em>Because you watched</em></div>
		        <div class="video-title">
			    <div class="smallText">
			        <a href="/web/20100728112039/http://www.youtube.com/watch?v=RkNhNZs-oZU" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');" title="What not to do in Halo 3!" rel="nofollow"><em>What not to do in...</em></a>
 			    </div>
	   	        </div>


	</div>	
</div>	

				<div id="reco-quXaVn1MQZQ" class="video-cell" style="width:24.5%" onmouseover="_showdiv('REMOVE-quXaVn1MQZQ');" onmouseout="_hidediv('REMOVE-quXaVn1MQZQ');">



	


	<div class="video-entry" style="position:relative">



		    <div class="hid" id="REMOVE-quXaVn1MQZQ" style="position: absolute; top: 0px; left: 140px; z-index: 1; display: none;" onclick="yt.www.recos.removeRecommendation('quXaVn1MQZQ');return false">
		        <img src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite img-php-close-button">
		    </div>
				
	
	
	
		
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=2&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-1r-45-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" class="video-thumb ux-thumb-128" id="video-thumb-quXaVn1MQZQ-9779881"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="Real Halo Costume" alt="Real Halo Costume" src="https://web.archive.org/web/20100728112039im_/http://i2.ytimg.com/vi/quXaVn1MQZQ/default.jpg" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');"></span><span class="video-time">2:01</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-quXaVn1MQZQ-9779881', null, 'quXaVn1MQZQ', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-quXaVn1MQZQ">



			<div class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=2&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-1r-45-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="Real Halo Costume" class="" id="video-short-title-quXaVn1MQZQ" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Real Halo Costume</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=2&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-1r-45-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="Real Halo Costume" class="" id="video-long-title-quXaVn1MQZQ" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Real Halo Costume</a>

						<div class="video-logos">
	</div>

				</div>
			</div>

				<div id="video-description-quXaVn1MQZQ" class="video-description">
					This Is The Original Halo costume
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-quXaVn1MQZQ" class="video-date-added">2 years ago</span>

					<span id="video-num-views-quXaVn1MQZQ" class="video-view-count">870,126 views
</span>





				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>


	                <div class="smallText grayText"><em>Because you watched</em></div>
		        <div class="video-title">
			    <div class="smallText">
			        <a href="/web/20100728112039/http://www.youtube.com/watch?v=XdoRup9D4v0" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');" title="Real Halo 4 Trailer" rel="nofollow"><em>Real Halo 4 Trailer</em></a>
 			    </div>
	   	        </div>


	</div>	
</div>	

				<div id="reco-maPFhlFfJG8" class="video-cell" style="width:24.5%" onmouseover="_showdiv('REMOVE-maPFhlFfJG8');" onmouseout="_hidediv('REMOVE-maPFhlFfJG8');">



	


	<div class="video-entry" style="position:relative">



		    <div class="hid" id="REMOVE-maPFhlFfJG8" style="position: absolute; top: 0px; left: 140px; z-index: 1; display: none;" onclick="yt.www.recos.removeRecommendation('maPFhlFfJG8');return false">
		        <img src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite img-php-close-button">
		    </div>
				
	
	
	
		
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=3&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-4r-16-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" class="video-thumb ux-thumb-128" id="video-thumb-maPFhlFfJG8-1343294"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="Transformers 2 Revenge of the Fallen - Official Teaser Trailer [HD]" alt="Transformers 2 Revenge of the Fallen - Official Teaser Trailer [HD]" src="https://web.archive.org/web/20100728112039im_/http://i2.ytimg.com/vi/maPFhlFfJG8/default.jpg" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');"></span><span class="video-time">2:17</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-maPFhlFfJG8-1343294', null, 'maPFhlFfJG8', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-maPFhlFfJG8">



			<div class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=3&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-4r-16-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="Transformers 2 Revenge of the Fallen - Official Teaser Trailer [HD]" class="" id="video-short-title-maPFhlFfJG8" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Transformers 2 Revenge of the Fa...</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=3&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-4r-16-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="Transformers 2 Revenge of the Fallen - Official Teaser Trailer [HD]" class="" id="video-long-title-maPFhlFfJG8" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Transformers 2 Revenge of the Fallen - Official Teaser Trailer [HD]</a>

						<div class="video-logos">
		<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=3&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-4r-16-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5&amp;hd=1"><img src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite hd-video-logo video-logo"></a>
	</div>

				</div>
			</div>

				<div id="video-description-maPFhlFfJG8" class="video-description">
					Release Date: June 26, 2009
Genre: Action | Adventure | Sci-Fi
Cast: Megan Fox, ...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-maPFhlFfJG8" class="video-date-added">1 year ago</span>

					<span id="video-num-views-maPFhlFfJG8" class="video-view-count">588,635 views
</span>





				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>


	                <div class="smallText grayText"><em>Because you watched</em></div>
		        <div class="video-title">
			    <div class="smallText">
			        <a href="/web/20100728112039/http://www.youtube.com/watch?v=ilSJVF0NPLk" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');" title="Halo 3 Homicide Detective" rel="nofollow"><em>Halo 3 Homicide D...</em></a>
 			    </div>
	   	        </div>


	</div>	
</div>	

				<div id="reco-YQqqM-ywdJg" class="video-cell" style="width:24.5%" onmouseover="_showdiv('REMOVE-YQqqM-ywdJg');" onmouseout="_hidediv('REMOVE-YQqqM-ywdJg');">



	


	<div class="video-entry" style="position:relative">



		    <div class="hid" id="REMOVE-YQqqM-ywdJg" style="position: absolute; top: 0px; left: 140px; z-index: 1; display: none;" onclick="yt.www.recos.removeRecommendation('YQqqM-ywdJg');return false">
		        <img src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite img-php-close-button">
		    </div>
				
	
	
	
		
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=4&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-3r-4-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" class="video-thumb ux-thumb-128" id="video-thumb-YQqqM-ywdJg-4410583"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="Halo 3 Machinima:  Elites Suck" alt="Halo 3 Machinima:  Elites Suck" src="https://web.archive.org/web/20100728112039im_/http://i2.ytimg.com/vi/YQqqM-ywdJg/default.jpg" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');"></span><span class="video-time">1:56</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-YQqqM-ywdJg-4410583', null, 'YQqqM-ywdJg', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-YQqqM-ywdJg">



			<div class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=4&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-3r-4-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="Halo 3 Machinima:  Elites Suck" class="" id="video-short-title-YQqqM-ywdJg" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Halo 3 Machinima:  Elites Suck</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=4&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-3r-4-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="Halo 3 Machinima:  Elites Suck" class="" id="video-long-title-YQqqM-ywdJg" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Halo 3 Machinima:  Elites Suck</a>

						<div class="video-logos">
	</div>

				</div>
			</div>

				<div id="video-description-YQqqM-ywdJg" class="video-description">
					A short Halo 3 machinima showing how the elite armor in Halo 3 sucks. The finale o...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-YQqqM-ywdJg" class="video-date-added">1 year ago</span>

					<span id="video-num-views-YQqqM-ywdJg" class="video-view-count">331,787 views
</span>





				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>


	                <div class="smallText grayText"><em>Because you watched</em></div>
		        <div class="video-title">
			    <div class="smallText">
			        <a href="/web/20100728112039/http://www.youtube.com/watch?v=uCsdPszJLNQ" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');" title="Halo 3 Trailer" rel="nofollow"><em>Halo 3 Trailer</em></a>
 			    </div>
	   	        </div>


	</div>	
</div>	

				<div id="reco-d76x5m5s7Xo" class="video-cell" style="width:24.5%" onmouseover="_showdiv('REMOVE-d76x5m5s7Xo');" onmouseout="_hidediv('REMOVE-d76x5m5s7Xo');">



	


	<div class="video-entry" style="position:relative">



		    <div class="hid" id="REMOVE-d76x5m5s7Xo" style="position: absolute; top: 0px; left: 140px; z-index: 1; display: none;" onclick="yt.www.recos.removeRecommendation('d76x5m5s7Xo');return false">
		        <img src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite img-php-close-button">
		    </div>
				
	
	
	
		
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=5&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-1r-21-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" class="video-thumb ux-thumb-128" id="video-thumb-d76x5m5s7Xo-8682320"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="HALO 3 ZOMBIES MOVIE" alt="HALO 3 ZOMBIES MOVIE" src="https://web.archive.org/web/20100728112039im_/http://i1.ytimg.com/vi/d76x5m5s7Xo/default.jpg" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');"></span><span class="video-time">4:26</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-d76x5m5s7Xo-8682320', null, 'd76x5m5s7Xo', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-d76x5m5s7Xo">



			<div class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=5&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-1r-21-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="HALO 3 ZOMBIES MOVIE" class="" id="video-short-title-d76x5m5s7Xo" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">HALO 3 ZOMBIES MOVIE</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=5&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-1r-21-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="HALO 3 ZOMBIES MOVIE" class="" id="video-long-title-d76x5m5s7Xo" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">HALO 3 ZOMBIES MOVIE</a>

						<div class="video-logos">
	</div>

				</div>
			</div>

				<div id="video-description-d76x5m5s7Xo" class="video-description">
					this happend all footage real nothing staged i just recorded it on my pc using a c...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-d76x5m5s7Xo" class="video-date-added">2 years ago</span>

					<span id="video-num-views-d76x5m5s7Xo" class="video-view-count">1,217,750 views
</span>





				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>


	                <div class="smallText grayText"><em>Because you watched</em></div>
		        <div class="video-title">
			    <div class="smallText">
			        <a href="/web/20100728112039/http://www.youtube.com/watch?v=_nSUfCBgtw4" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');" title="Halo 3 - Infection" rel="nofollow"><em>Halo 3 - Infection</em></a>
 			    </div>
	   	        </div>


	</div>	
</div>	

				<div id="reco-AZ3uXfEpp7k" class="video-cell" style="width:24.5%" onmouseover="_showdiv('REMOVE-AZ3uXfEpp7k');" onmouseout="_hidediv('REMOVE-AZ3uXfEpp7k');">



	


	<div class="video-entry" style="position:relative">



		    <div class="hid" id="REMOVE-AZ3uXfEpp7k" style="position: absolute; top: 0px; left: 140px; z-index: 1; display: none;" onclick="yt.www.recos.removeRecommendation('AZ3uXfEpp7k');return false">
		        <img src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite img-php-close-button">
		    </div>
				
	
	
	
		
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=6&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-2r-25-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" class="video-thumb ux-thumb-128" id="video-thumb-AZ3uXfEpp7k-5669492"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="Halo Movie Theatrical Trailer (SHOWS MASTERCHIEF!!!)" alt="Halo Movie Theatrical Trailer (SHOWS MASTERCHIEF!!!)" src="https://web.archive.org/web/20100728112039im_/http://i2.ytimg.com/vi/AZ3uXfEpp7k/default.jpg" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');"></span><span class="video-time">1:35</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-AZ3uXfEpp7k-5669492', null, 'AZ3uXfEpp7k', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-AZ3uXfEpp7k">



			<div class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=6&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-2r-25-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="Halo Movie Theatrical Trailer (SHOWS MASTERCHIEF!!!)" class="" id="video-short-title-AZ3uXfEpp7k" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Halo Movie Theatrical Trailer (S...</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=6&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-2r-25-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="Halo Movie Theatrical Trailer (SHOWS MASTERCHIEF!!!)" class="" id="video-long-title-AZ3uXfEpp7k" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Halo Movie Theatrical Trailer (SHOWS MASTERCHIEF!!!)</a>

						<div class="video-logos">
	</div>

				</div>
			</div>

				<div id="video-description-AZ3uXfEpp7k" class="video-description">
					DISCLAIMER: This is a theatrical trailer I made for the upcoming Halo movie schedu...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-AZ3uXfEpp7k" class="video-date-added">2 years ago</span>

					<span id="video-num-views-AZ3uXfEpp7k" class="video-view-count">439,759 views
</span>





				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>


	                <div class="smallText grayText"><em>Because you watched</em></div>
		        <div class="video-title">
			    <div class="smallText">
			        <a href="/web/20100728112039/http://www.youtube.com/watch?v=s0QGu_aQKQ8" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');" title="Halo (fan-made edit) movie trailer - the flood" rel="nofollow"><em>Halo (fan-made ed...</em></a>
 			    </div>
	   	        </div>


	</div>	
</div>	

				<div id="reco-83_DJ5CGtqk" class="video-cell" style="width:24.5%" onmouseover="_showdiv('REMOVE-83_DJ5CGtqk');" onmouseout="_hidediv('REMOVE-83_DJ5CGtqk');">



	


	<div class="video-entry" style="position:relative">



		    <div class="hid" id="REMOVE-83_DJ5CGtqk" style="position: absolute; top: 0px; left: 140px; z-index: 1; display: none;" onclick="yt.www.recos.removeRecommendation('83_DJ5CGtqk');return false">
		        <img src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite img-php-close-button">
		    </div>
				
	
	
	
		
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=7&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-1r-46-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" class="video-thumb ux-thumb-128" id="video-thumb-83_DJ5CGtqk-4444360"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="Top 10 Halo 3 Sticks" alt="Top 10 Halo 3 Sticks" src="https://web.archive.org/web/20100728112039im_/http://i1.ytimg.com/vi/83_DJ5CGtqk/default.jpg" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');"></span><span class="video-time">6:27</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-83_DJ5CGtqk-4444360', null, '83_DJ5CGtqk', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-83_DJ5CGtqk">



			<div class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=7&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-1r-46-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="Top 10 Halo 3 Sticks" class="" id="video-short-title-83_DJ5CGtqk" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Top 10 Halo 3 Sticks</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch_videos?index=7&amp;more_url=%2Fvideos%3Fr%3D1&amp;no_autoplay=1&amp;feature=rec-LGOUT-real_rn-1r-46-HM&amp;video_ids=RpVqM2TGhiE%2CWCEMeY4jiuw%2CquXaVn1MQZQ%2CmaPFhlFfJG8%2CYQqqM-ywdJg%2Cd76x5m5s7Xo%2CAZ3uXfEpp7k%2C83_DJ5CGtqk&amp;type=5" rel="nofollow" title="Top 10 Halo 3 Sticks" class="" id="video-long-title-83_DJ5CGtqk" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');">Top 10 Halo 3 Sticks</a>

						<div class="video-logos">
	</div>

				</div>
			</div>

				<div id="video-description-83_DJ5CGtqk" class="video-description">
					Thanks for watching!

Become a fan on Facebook: http://www.tiny.cc/ct3Vb
Follow...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-83_DJ5CGtqk" class="video-date-added">2 years ago</span>

					<span id="video-num-views-83_DJ5CGtqk" class="video-view-count">2,094,282 views
</span>





				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>


	                <div class="smallText grayText"><em>Because you watched</em></div>
		        <div class="video-title">
			    <div class="smallText">
			        <a href="/web/20100728112039/http://www.youtube.com/watch?v=DLFDzC_ok8c" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/REC/Logged_Out');" title="Halo 3 - E3 2007 Trailer" rel="nofollow"><em>Halo 3 - E3 2007 ...</em></a>
 			    </div>
	   	        </div>


	</div>	
</div>	

		</div>
	</div>


		</div>
	</div>
	<div class="clear"></div>
	

		</div>



					<div id="feedmodule-POP" class="feedmodule-anchor">
				<div class="feedmodule-modheader" id="POP-titlebar">
				<div id="feed_popular">
		<div class="fm-title-underlined-gray custom-cursor-default-hover">
			<div class="fm2-title">
				<span class="fm2-titleText" id="feed_popular-titleText"><a href="/web/20100728112039/http://www.youtube.com/videos?s=pop" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/View_Popular/Logged_Out');">Videos Being Watched Now</a></span>
			</div>


					<div class="feedmodule-updown">

			<span id="medit-POP" class="iyt-edit-link iyt-edit-link-gray">Edit</span>

<span id="mup-POP" class="up-button disabled"><img class="master-sprite img-php-up-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></span><span id="mdown-POP" class="down-button disabled"><img class="master-sprite img-php-down-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></span><span id="mclose-POP" class="disabled"><img class="master-sprite img-php-close-button" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></span></div>


		</div>
	</div>

	</div>

	<div class="clear" id="feed_popular-content">

			<div id="POP-options" class="opt-pane" style="display: none;">
		<div class="opt-box-top">
			<img class="homepage-sprite img-php-opt-box-caret" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif">
		</div>
		<div class="opt-banner">
			<div class="opt-links">
				<div class="opt-edit">Editing: Videos Being Watched Now</div>
				<div class="opt-close opt-close-button" onclick="moduleHelper.closeOptionsPane('POP')"><img class="img-php-close-button" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></div>
				<div class="opt-close opt-close-text" onclick="moduleHelper.closeOptionsPane('POP')">close</div>
				<div id="POP-loading-msg" class="opt-loading-msg" style="display: none;">
Saving...
				</div>
				<div id="POP-loading-icn" class="opt-loading-icn" style="display: none;">
					<img width="16" id="POP-loading-icn-image" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" image="http://s.ytimg.com/yt/img/icn_loading_animated-vfl24663.gif">
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="opt-main">
			<div class="opt-simple-msg">
				Want to customize this homepage?

				<a href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US<mpl=sso" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignIn/EditModuleBox');">Sign In</a> or <a href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/LogoutWarning?continue=http%3A%2F%2Fwww.youtube.com%2Fcreate_account%3Fnext%3DNone<mpl=sso&amp;hl=en_US&amp;service=youtube" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignUp/EditModuleBox');">Sign Up</a> now!

			</div>
		</div>
	</div>


		<div id="POP-data" class="feedmodule-data">



						<div class="feedmodule-body bigthumb-view">





			<div class="feeditem-bigthumb super-large-video ">
				<div style="font-size: 12px;" class="floatL">
					<div class="feedmodule-thumbnail">
							
	
	
	
		
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=ESq0XpRjHQs&amp;feature=popular" class="video-thumb ux-thumb-224" id="video-thumb-ESq0XpRjHQs-6146011"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i2.ytimg.com/vi/ESq0XpRjHQs/hqdefault.jpg" title="Yo Gotti Cocaine Muzik 4.5 Mixtape Trailer" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');"></span><span class="video-time">1:39</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-ESq0XpRjHQs-6146011', null, 'ESq0XpRjHQs', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

					</div>
				</div>
				
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=ESq0XpRjHQs&amp;feature=popular" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');" title="Yo Gotti Cocaine Muzik 4.5 Mixtape Trailer">Yo Gotti Cocaine Muzik 4.5 Mixtape Trailer</a>
		</div>
		<div>
					70,549 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/livemixtapestv">livemixtapestv</a>
			</nobr>
		</div>
	</div>

				<div class="spacer">&nbsp;</div>
			</div>




			<div class="feeditem-bigthumb normal-size-video ">
				<div style="font-size: 12px;" class="floatL">
					<div class="feedmodule-thumbnail">
							
	
	
	
		
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=wdsNuxDC7nE&amp;feature=popular" class="video-thumb ux-thumb-128" id="video-thumb-wdsNuxDC7nE-9270232"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i4.ytimg.com/vi/wdsNuxDC7nE/default.jpg" title="COD MW2 - Bad Aim = Good Game" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');"></span><span class="video-time">5:58</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-wdsNuxDC7nE-9270232', null, 'wdsNuxDC7nE', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

					</div>
				</div>
				
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=wdsNuxDC7nE&amp;feature=popular" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');" title="COD MW2 - Bad Aim = Good Game">COD MW2 - Bad Aim = Good Game</a>
		</div>
		<div>
					126,077 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/Smoove7182954">Smoove7182954</a>
			</nobr>
		</div>
	</div>

				<div class="spacer">&nbsp;</div>
			</div>




			<div class="feeditem-bigthumb normal-size-video ">
				<div style="font-size: 12px;" class="floatL">
					<div class="feedmodule-thumbnail">
							
	
	
	
		
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=r2PM0om2El8&amp;feature=popular" class="video-thumb ux-thumb-128" id="video-thumb-r2PM0om2El8-1201985"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i3.ytimg.com/vi/r2PM0om2El8/default.jpg" title="Jane Austen's Fight Club" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');"></span><span class="video-time">3:23</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-r2PM0om2El8-1201985', null, 'r2PM0om2El8', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

					</div>
				</div>
				
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=r2PM0om2El8&amp;feature=popular" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');" title="Jane Austen's Fight Club">Jane Austen's Fight Club</a>
		</div>
		<div>
					543,837 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/TwoTurntablesNMic">TwoTurntablesNMic</a>
			</nobr>
		</div>
	</div>

				<div class="spacer">&nbsp;</div>
			</div>




			<div class="feeditem-bigthumb normal-size-video ">
				<div style="font-size: 12px;" class="floatL">
					<div class="feedmodule-thumbnail">
							
	
	
	
		
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=W5edTmCn09s&amp;feature=popular" class="video-thumb ux-thumb-128" id="video-thumb-W5edTmCn09s-8660068"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i4.ytimg.com/vi/W5edTmCn09s/default.jpg" title="Ultimate Frisbee Golazo WUCC Prague 2010" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');"></span><span class="video-time">1:06</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-W5edTmCn09s-8660068', null, 'W5edTmCn09s', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

					</div>
				</div>
				
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=W5edTmCn09s&amp;feature=popular" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');" title="Ultimate Frisbee Golazo WUCC Prague 2010">Ultimate Frisbee Golazo WUCC Prague 2010</a>
		</div>
		<div>
					183,390 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/bessonalex">bessonalex</a>
			</nobr>
		</div>
	</div>

				<div class="spacer">&nbsp;</div>
			</div>

		<div class="spacer">&nbsp;</div>
	</div>

	
		</div>
	</div>
	<div class="clear"></div>
	

		</div>

		

					<div id="feedmodule-PRO" class="feedmodule-anchor">
				<div class="feedmodule-modheader" id="PRO-titlebar">
				<div id="feed_promoted">
		<div class="fm-title-underlined-blue">
			<div class="fm2-title">
				<span class="fm2-titleText" id="feed_promoted-titleText">Featured Videos</span>
			</div>


					<div class="feedmodule-updown">


<span id="mup-PRO" class="up-button disabled"><img class="master-sprite img-php-up-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></span><span id="mdown-PRO" class="down-button disabled"><img class="master-sprite img-php-down-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></span></div>


		</div>
	</div>

	</div>

	<div class="clear" id="feed_promoted-content">

			<div id="PRO-options" class="opt-pane" style="display: none;">
		<div class="opt-box-top">
			<img class="homepage-sprite img-php-opt-box-caret" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif">
		</div>
		<div class="opt-banner">
			<div class="opt-links">
				<div class="opt-edit">Editing: Featured Videos</div>
				<div class="opt-close opt-close-button" onclick="moduleHelper.closeOptionsPane('PRO')"><img class="img-php-close-button" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></div>
				<div class="opt-close opt-close-text" onclick="moduleHelper.closeOptionsPane('PRO')">close</div>
				<div id="PRO-loading-msg" class="opt-loading-msg" style="display: none;">
Saving...
				</div>
				<div id="PRO-loading-icn" class="opt-loading-icn" style="display: none;">
					<img width="16" id="PRO-loading-icn-image" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" image="http://s.ytimg.com/yt/img/icn_loading_animated-vfl24663.gif">
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="opt-main">
			<div class="opt-simple-msg">
				Want to customize this homepage?

				<a href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US<mpl=sso" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignIn/EditModuleBox');">Sign In</a> or <a href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/LogoutWarning?continue=http%3A%2F%2Fwww.youtube.com%2Fcreate_account%3Fnext%3DNone<mpl=sso&amp;hl=en_US&amp;service=youtube" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignUp/EditModuleBox');">Sign Up</a> now!

			</div>
		</div>
	</div>


		<div id="PRO-data" class="feedmodule-data">



						<div class="feedmodule-body grid-view">
		<div class="clearL">
	
				<div class="video-cell" style="width:24.5%">



	


	<div class="video-entry">



				
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=xTwCCrMRTxE&amp;feature=fvhl" class="video-thumb ux-thumb-128" id="video-thumb-xTwCCrMRTxE-8184539"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="Grammar School with Snooki" alt="Grammar School with Snooki" src="https://web.archive.org/web/20100728112039im_/http://i1.ytimg.com/vi/xTwCCrMRTxE/default.jpg" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');"></span><span class="video-time">3:36</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-xTwCCrMRTxE-8184539', null, 'xTwCCrMRTxE', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-xTwCCrMRTxE">



			<div class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch?v=xTwCCrMRTxE&amp;feature=fvhl" rel="nofollow" title="Grammar School with Snooki" class="" id="video-short-title-xTwCCrMRTxE" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Grammar School with Snooki</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch?v=xTwCCrMRTxE&amp;feature=fvhl" rel="nofollow" title="Grammar School with Snooki" class="" id="video-long-title-xTwCCrMRTxE" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Grammar School with Snooki</a>

						<div class="video-logos">
	</div>

				</div>
			</div>

				<div id="video-description-xTwCCrMRTxE" class="video-description">
					In which John discusses how bad grammar can lead to confusion. And threesomes.
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-xTwCCrMRTxE" class="video-date-added">4 days ago</span>

					<span id="video-num-views-xTwCCrMRTxE" class="video-view-count">117,172 views
</span>



					<span class="video-username"><a id="video-from-username-xTwCCrMRTxE" class="hLink" href="/web/20100728112039/http://www.youtube.com/user/vlogbrothers">vlogbrothers</a></span>


				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>




	</div>	
</div>	

				<div class="video-cell" style="width:24.5%">



	


	<div class="video-entry">



				
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=Sjy5ufUFsrM&amp;feature=fvhl" class="video-thumb ux-thumb-128" id="video-thumb-Sjy5ufUFsrM-7625093"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="Bleep Bloop: iPad Games" alt="Bleep Bloop: iPad Games" src="https://web.archive.org/web/20100728112039im_/http://i4.ytimg.com/vi/Sjy5ufUFsrM/default.jpg" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');"></span><span class="video-time">4:42</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-Sjy5ufUFsrM-7625093', null, 'Sjy5ufUFsrM', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-Sjy5ufUFsrM">



			<div class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch?v=Sjy5ufUFsrM&amp;feature=fvhl" rel="nofollow" title="Bleep Bloop: iPad Games" class="" id="video-short-title-Sjy5ufUFsrM" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Bleep Bloop: iPad Games</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch?v=Sjy5ufUFsrM&amp;feature=fvhl" rel="nofollow" title="Bleep Bloop: iPad Games" class="" id="video-long-title-Sjy5ufUFsrM" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Bleep Bloop: iPad Games</a>

						<div class="video-logos">
	</div>

				</div>
			</div>

				<div id="video-description-Sjy5ufUFsrM" class="video-description">
					Sure it revolutionized the way we think about computers, but how does it handle Sc...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-Sjy5ufUFsrM" class="video-date-added">5 days ago</span>

					<span id="video-num-views-Sjy5ufUFsrM" class="video-view-count">240,504 views
</span>



					<span class="video-username"><a id="video-from-username-Sjy5ufUFsrM" class="hLink" href="/web/20100728112039/http://www.youtube.com/user/collegehumor">collegehumor</a></span>


				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>




	</div>	
</div>	

				<div class="video-cell" style="width:24.5%">



	


	<div class="video-entry">



				
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=ycyWBv9sebU&amp;feature=fvhl" class="video-thumb ux-thumb-128" id="video-thumb-ycyWBv9sebU-5924104"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="ZAC EFRON NIGHTMARE?!" alt="ZAC EFRON NIGHTMARE?!" src="https://web.archive.org/web/20100728112039im_/http://i2.ytimg.com/vi/ycyWBv9sebU/default.jpg" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');"></span><span class="video-time">2:00</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-ycyWBv9sebU-5924104', null, 'ycyWBv9sebU', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-ycyWBv9sebU">



			<div class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch?v=ycyWBv9sebU&amp;feature=fvhl" rel="nofollow" title="ZAC EFRON NIGHTMARE?!" class="" id="video-short-title-ycyWBv9sebU" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">ZAC EFRON NIGHTMARE?!</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch?v=ycyWBv9sebU&amp;feature=fvhl" rel="nofollow" title="ZAC EFRON NIGHTMARE?!" class="" id="video-long-title-ycyWBv9sebU" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">ZAC EFRON NIGHTMARE?!</a>

						<div class="video-logos">
	</div>

				</div>
			</div>

				<div id="video-description-ycyWBv9sebU" class="video-description">
					facebook me if you're bored http://www.facebook.com/shanedawsonfans
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-ycyWBv9sebU" class="video-date-added">4 days ago</span>

					<span id="video-num-views-ycyWBv9sebU" class="video-view-count">439,881 views
</span>



					<span class="video-username"><a id="video-from-username-ycyWBv9sebU" class="hLink" href="/web/20100728112039/http://www.youtube.com/user/shane">shane</a></span>


				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>




	</div>	
</div>	

				<div class="video-cell" style="width:24.5%">



	


	<div class="video-entry">



				
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=nANwMSb65U8&amp;feature=fvhl" class="video-thumb ux-thumb-128" id="video-thumb-nANwMSb65U8-9373092"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="Limbo - Hidden Eggs 1-4 (Wrong Way, Altitude is Attitude, It's Stuck, Urban Exploration)" alt="Limbo - Hidden Eggs 1-4 (Wrong Way, Altitude is Attitude, It's Stuck, Urban Exploration)" src="https://web.archive.org/web/20100728112039im_/http://i3.ytimg.com/vi/nANwMSb65U8/default.jpg" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');"></span><span class="video-time">3:10</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-nANwMSb65U8-9373092', null, 'nANwMSb65U8', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-nANwMSb65U8">



			<div class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch?v=nANwMSb65U8&amp;feature=fvhl" rel="nofollow" title="Limbo - Hidden Eggs 1-4 (Wrong Way, Altitude is Attitude, It's Stuck, Urban Exploration)" class="" id="video-short-title-nANwMSb65U8" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Limbo - Hidden Eggs 1-4 (Wrong W...</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100728112039/http://www.youtube.com/watch?v=nANwMSb65U8&amp;feature=fvhl" rel="nofollow" title="Limbo - Hidden Eggs 1-4 (Wrong Way, Altitude is Attitude, It's Stuck, Urban Exploration)" class="" id="video-long-title-nANwMSb65U8" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Limbo - Hidden Eggs 1-4 (Wrong Way, Altitude is Attitude, It's Stuc...</a>

						<div class="video-logos">
		<a href="/web/20100728112039/http://www.youtube.com/watch?v=nANwMSb65U8&amp;feature=fvhl&amp;hd=1"><img src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite hd-video-logo video-logo"></a>
	</div>

				</div>
			</div>

				<div id="video-description-nANwMSb65U8" class="video-description">
					Jack and Joel walk you through the first four hidden eggs in the new XBLA game Lim...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-nANwMSb65U8" class="video-date-added">5 days ago</span>

					<span id="video-num-views-nANwMSb65U8" class="video-view-count">73,775 views
</span>



					<span class="video-username"><a id="video-from-username-nANwMSb65U8" class="hLink" href="/web/20100728112039/http://www.youtube.com/user/RoosterTeeth">RoosterTeeth</a></span>


				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>




	</div>	
</div>	

		</div>
	</div>


		</div>
	</div>
	<div class="clear"></div>
	

		</div>

		

					<div id="feedmodule-TOP" class="feedmodule-anchor">
				<div class="feedmodule-modheader" id="TOP-titlebar">
				<div id="feed_top_videos">
		<div class="fm-title-underlined-gray">
			<div class="fm2-title">
				<span class="fm2-titleText" id="feed_top_videos-titleText"><a href="/web/20100728112039/http://www.youtube.com/videos?s=pop" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/View_TopVideos/Logged_Out');">Most Popular</a></span>
			</div>


					<div class="feedmodule-updown">


<span id="mup-TOP" class="up-button disabled"><img class="master-sprite img-php-up-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></span><span id="mdown-TOP" class="down-button disabled"><img class="master-sprite img-php-down-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></span><span id="mclose-TOP" class="disabled"><img class="master-sprite img-php-close-button" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></span></div>


		</div>
	</div>

	</div>

	<div class="clear" id="feed_top_videos-content">

			<div id="TOP-options" class="opt-pane" style="display: none;">
		<div class="opt-box-top">
			<img class="homepage-sprite img-php-opt-box-caret" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif">
		</div>
		<div class="opt-banner">
			<div class="opt-links">
				<div class="opt-edit">Editing: Most Popular</div>
				<div class="opt-close opt-close-button" onclick="moduleHelper.closeOptionsPane('TOP')"><img class="img-php-close-button" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"></div>
				<div class="opt-close opt-close-text" onclick="moduleHelper.closeOptionsPane('TOP')">close</div>
				<div id="TOP-loading-msg" class="opt-loading-msg" style="display: none;">
Saving...
				</div>
				<div id="TOP-loading-icn" class="opt-loading-icn" style="display: none;">
					<img width="16" id="TOP-loading-icn-image" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" image="http://s.ytimg.com/yt/img/icn_loading_animated-vfl24663.gif">
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="opt-main">
			<div class="opt-simple-msg">
				Want to customize this homepage?

				<a href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US<mpl=sso" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignIn/EditModuleBox');">Sign In</a> or <a href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/LogoutWarning?continue=http%3A%2F%2Fwww.youtube.com%2Fcreate_account%3Fnext%3DNone<mpl=sso&amp;hl=en_US&amp;service=youtube" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignUp/EditModuleBox');">Sign Up</a> now!

			</div>
		</div>
	</div>


		<div id="TOP-data" class="feedmodule-data">



						<div class="feedmodule-body compressed-view">
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100728112039/http://www.youtube.com/videos?c=24" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/24');">Entertainment</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=3vYPcdN77cw&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-3vYPcdN77cw-1721794"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i4.ytimg.com/vi/3vYPcdN77cw/default.jpg" title="City Meets Country" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/24');"></span><span class="video-time">0:37</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-3vYPcdN77cw-1721794', null, '3vYPcdN77cw', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=3vYPcdN77cw&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/24');" title="City Meets Country">City Meets Country</a>
		</div>
		<div>
					31,178 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/OfficialMafiaWars">OfficialMafiaWars</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100728112039/http://www.youtube.com/videos?c=10" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/10');">Music</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=UOtJUmiUZ08&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-UOtJUmiUZ08-3736086"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i2.ytimg.com/vi/UOtJUmiUZ08/default.jpg" title="The YouTube Interview with Katy Perry" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/10');"></span><span class="video-time">31:32</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-UOtJUmiUZ08-3736086', null, 'UOtJUmiUZ08', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=UOtJUmiUZ08&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/10');" title="The YouTube Interview with Katy Perry">The YouTube Interview with Katy Perry</a>
		</div>
		<div>
					806,801 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/KatyPerryMusic">KatyPerryMusic</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100728112039/http://www.youtube.com/news" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/25');">News &amp; Politics</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=1hvaeHllwtw&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-1hvaeHllwtw-2803042"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i2.ytimg.com/vi/1hvaeHllwtw/default.jpg" title="Basil Marceaux : The Next Governor of Tennessee" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/25');"></span><span class="video-time">1:21</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-1hvaeHllwtw-2803042', null, '1hvaeHllwtw', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=1hvaeHllwtw&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/25');" title="Basil Marceaux : The Next Governor of Tennessee">Basil Marceaux : The Next Governor of...</a>
		</div>
		<div>
					96,494 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/ObamaChronicles">ObamaChronicles</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100728112039/http://www.youtube.com/videos?c=1" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/1');">Film &amp; Animation</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=2l2mvTryVZs&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-2l2mvTryVZs-181345"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i3.ytimg.com/vi/2l2mvTryVZs/default.jpg" title="*PRANK* WORST SODA EVER!!" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/1');"></span><span class="video-time">8:11</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-2l2mvTryVZs-181345', null, '2l2mvTryVZs', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=2l2mvTryVZs&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/1');" title="*PRANK* WORST SODA EVER!!">*PRANK* WORST SODA EVER!!</a>
		</div>
		<div>
					1,670,409 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/ShaneDawsonTV">ShaneDawsonTV</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100728112039/http://www.youtube.com/sports" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/17');">Sports</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=xmx6wp_cioY&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-xmx6wp_cioY-6096585"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i1.ytimg.com/vi/xmx6wp_cioY/default.jpg" title="2010 IZOD IndyCar Series Honda Indy Edmonton" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/17');"></span><span class="video-time">8:30</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-xmx6wp_cioY-6096585', null, 'xmx6wp_cioY', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=xmx6wp_cioY&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/17');" title="2010 IZOD IndyCar Series Honda Indy Edmonton">2010 IZOD IndyCar Series Honda Indy E...</a>
		</div>
		<div>
					499,797 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/500bennu">500bennu</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100728112039/http://www.youtube.com/videos?c=26" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/26');">Howto &amp; Style</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=Q6E82nK3DT8&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-Q6E82nK3DT8-9909834"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i2.ytimg.com/vi/Q6E82nK3DT8/default.jpg" title="Tag! 2nd YouTube Birthday and Update!" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/26');"></span><span class="video-time">6:24</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-Q6E82nK3DT8-9909834', null, 'Q6E82nK3DT8', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=Q6E82nK3DT8&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/26');" title="Tag! 2nd YouTube Birthday and Update!">Tag! 2nd YouTube Birthday and Update!</a>
		</div>
		<div>
					58,597 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/AllThatGlitters21">AllThatGlitters21</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100728112039/http://www.youtube.com/videos?c=28" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/28');">Science &amp; Technology</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=cY78Itw3-Ps&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-cY78Itw3-Ps-2131378"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i4.ytimg.com/vi/cY78Itw3-Ps/default.jpg" title="Chautauqua Lake Tornado / Waterspout" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/28');"></span><span class="video-time">1:48</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-cY78Itw3-Ps-2131378', null, 'cY78Itw3-Ps', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=cY78Itw3-Ps&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/28');" title="Chautauqua Lake Tornado / Waterspout">Chautauqua Lake Tornado / Waterspout</a>
		</div>
		<div>
					39,802 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/shaw561">shaw561</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100728112039/http://www.youtube.com/videos?c=2" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/2');">Autos &amp; Vehicles</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=Oj2JL2RSQZQ&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-Oj2JL2RSQZQ-1675537"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i4.ytimg.com/vi/Oj2JL2RSQZQ/default.jpg" title="PrankvsPrank Goes Skydiving Out a Plane" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/2');"></span><span class="video-time">5:25</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-Oj2JL2RSQZQ-1675537', null, 'Oj2JL2RSQZQ', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=Oj2JL2RSQZQ&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/2');" title="PrankvsPrank Goes Skydiving Out a Plane">PrankvsPrank Goes Skydiving Out a Plane</a>
		</div>
		<div>
					113,853 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/PrankvsPrank">PrankvsPrank</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100728112039/http://www.youtube.com/videos?s=mp" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/0%26s%3Dmp');">Most Viewed</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=xmx6wp_cioY&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-xmx6wp_cioY-2404713"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i1.ytimg.com/vi/xmx6wp_cioY/default.jpg" title="2010 IZOD IndyCar Series Honda Indy Edmonton" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/0%26s%3Dmp');"></span><span class="video-time">8:30</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-xmx6wp_cioY-2404713', null, 'xmx6wp_cioY', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=xmx6wp_cioY&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/0%26s%3Dmp');" title="2010 IZOD IndyCar Series Honda Indy Edmonton">2010 IZOD IndyCar Series Honda Indy E...</a>
		</div>
		<div>
					499,797 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/500bennu">500bennu</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100728112039/http://www.youtube.com/videos?s=mf" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/0%26s%3Dmf');">Top Favorited</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100728112039/http://www.youtube.com/watch?v=AKlucE-5nIM&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-AKlucE-5nIM-5614840"><span class="img"><img src="https://web.archive.org/web/20100728112039im_/http://i2.ytimg.com/vi/AKlucE-5nIM/default.jpg" title="Best celebration ever in football" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/0%26s%3Dmf');"></span><span class="video-time">0:22</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short yt-uix-button-arrowbutton" onclick=";return false;"> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-short"><li><span class=" yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-AKlucE-5nIM-5614840', null, 'AKlucE-5nIM', '', '');return false;">Add to queue</span></li></ul></button></span><span class="video-in-quicklist">Added to <br> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100728112039/http://www.youtube.com/watch?v=AKlucE-5nIM&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/0%26s%3Dmf');" title="Best celebration ever in football">Best celebration ever in football</a>
		</div>
		<div>
					1,327,974 views


		</div>
		<div>
			<nobr>
			<a href="/web/20100728112039/http://www.youtube.com/user/dontlifese">dontlifese</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
		<div class="spacer">&nbsp;</div>
	</div>

	
		</div>
	</div>
	<div class="clear"></div>
	

		</div>

			</div>

	<div class="main-spacer-bottom"></div>
</div> <!-- end homepage-main-content -->

<div id="homepage-side-content">

		<div id="iyt-login-suggest-side-box" class="homepage-side-block">
				
	
	
	
	<div id="iyt-login-suggest-side-box" class="yt-alert yt-alert-announce yt-rounded">
			<img src="https://web.archive.org/web/20100728112039im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
		
		<div class="yt-alert-content">
									<strong>Want to customize this homepage?
</strong><br>

			<a href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US<mpl=sso">Sign In</a> or <a href="https://web.archive.org/web/20100728112039/https://www.google.com/accounts/LogoutWarning?continue=http%3A%2F%2Fwww.youtube.com%2Fcreate_account%3Fnext%3D<mpl=sso&amp;hl=en_US&amp;service=youtube">Sign Up</a> now!


		</div>
		
	</div>


		</div>



			<div class="homepage-side-block" id="homepage-chrome-side-promo">
			<div id="side-announcement-box">
				
	
	
	
	<div class="yt-alert yt-alert-info yt-rounded">
		
		<div id="chrome-promo-hp" class="yt-alert-content custom-cursor-on-hover">
						




	<div id="chrome-promo-hp">
		<a href="https://web.archive.org/web/20100728112039/http://www.google.com/chrome/index.html?brand=CHFH&amp;utm_source=en-et-yt-ftr-lx&amp;utm_medium=et&amp;utm_campaign=en&amp;hl=en-US" id="chrome-link-hp" style="padding: 0;">
			<button class="master-sprite chrome-icon"></button>
			<div class="textblock">
				<div class="tagline">Try YouTube in a new web browser</div>
				<div class="link">Download Google Chrome</div>
			</div>
			<div class="clear"></div>
		</a>
	</div>

		</div>
		
			<button onclick="_hidediv(this.parentNode);dismissChromePromoAlert();" class="close master-sprite">
				close
			</button>
	</div>

			</div>
		</div>





			





	

	<div id="ad_creative_3" class="ad-div " style="z-index: 1">

	<iframe id="ad_creative_iframe_3" height="100" width="300" scrolling="no" frameborder="0" style="z-index: 1" src="https://web.archive.org/web/20100728112039/http://ad-g.doubleclick.net/adi/tst.ythome/promo1;sz=300x100;klg=en;kt=K;kga=-1;kgg=-1;kcr=us;dc_dedup=1;kmyd=ad_creative_3;tile=3;ord=8537811358297159?"></iframe>

	<script type="text/javascript">
		var add_timestamp = (Math.floor(Math.random() * 1000) == 0);
		if (add_timestamp) {
			var kts = new Date().getTime();
			var iframe_src = "https://web.archive.org/web/20100728112039/http://ad-g.doubleclick.net/adi/tst.ythome/promo1;sz=300x100;klg=en;kt=K;kga=-1;kgg=-1;kcr=us;dc_dedup=1;kmyd=ad_creative_3;tile=3;kts=" + kts + ";ord=8537811358297159?";
		} else {
			var iframe_src = "https://web.archive.org/web/20100728112039/http://ad-g.doubleclick.net/adi/tst.ythome/promo1;sz=300x100;klg=en;kt=K;kga=-1;kgg=-1;kcr=us;dc_dedup=1;kmyd=ad_creative_3;tile=3;ord=8537811358297159?";
		}
		ad_iframe = _gel("ad_creative_iframe_3");
		ad_iframe.src = iframe_src;
	</script>


	</div>


	<div class="clear"></div>

	<div class="homepage-side-block">
	<div id="homepage-whats-new">
			<h2>What's New</h2>
	
		<h3><a href="https://web.archive.org/web/20100728112039/http://youtube-global.blogspot.com/2010/07/youtube-leanback-offers-effortless.html">YouTube Leanback</a></h3>
		<div class="entry">Sit back, relax and enjoy your favorite videos</div>
		
		<h3><a href="https://web.archive.org/web/20100728112039/http://www.youtube.com/mobile">New Mobile Site</a></h3>
		<div class="entry">Get the full YouTube experience on your phone</div>


			<h3>
				<a href="https://web.archive.org/web/20100728112039/http://youtube-global.blogspot.com/">Katy Perry bares all as Lisa Nova asks your top questions</a>
			</h3>
			<div class="entry">
				“Did you really kiss a girl?” “Do you ever laugh at the parody videos making fun of you?” “Are you and Russell planning on having kids?” <a href="https://web.archive.org/web/20100728112039/http://youtube-global.blogspot.com/2010/07/did-she-really-kiss-girl-ask-katy-perry.html">The call</a> was to ask Katy Perry anything you wanted, and you ...
			</div>
			
			<p class="alignR">
				<a href="https://web.archive.org/web/20100728112039/http://youtube-global.blogspot.com/">Read more in our Blog</a>
			</p>

	</div>
</div>


</div> <!-- end homepage-side-content -->

<div class="clear"></div>





		<div id="footer-container">
				<div id="footer">
		<ul class="footer-links">
			<li><a href="https://web.archive.org/web/20100728112039/http://www.google.com/support/youtube/bin/static.py?p=homepage&amp;page=start.cs&amp;hl=en_US">Help</a>
</li>
			<li><a href="/web/20100728112039/http://www.youtube.com/t/about">About</a></li>
			<li><a href="https://web.archive.org/web/20100728112039/http://www.google.com/support/youtube/bin/request.py?contact_type=abuse&amp;hl=en_US">Safety</a></li>
			<li><a href="/web/20100728112039/http://www.youtube.com/t/privacy_at_youtube">Privacy</a></li>
			<li><a href="/web/20100728112039/http://www.youtube.com/t/terms">Terms</a></li>
			<li><a href="/web/20100728112039/http://www.youtube.com/t/dmca_policy">Copyright</a></li>
				<li><a href="/web/20100728112039/http://www.youtube.com/t/uploaders_partners">Uploaders &amp; Partners</a></li>
				<li><a href="https://web.archive.org/web/20100728112039/http://code.google.com/apis/youtube/overview.html">Developers</a></li>
			<li><a href="/web/20100728112039/http://www.youtube.com/t/advertising" onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Advertising');">Advertising</a></li>
		</ul>
			<p id="copyright">	© 2010 YouTube, LLC
</p>
			<ul class="pickers">
			<li>Language:
	<a href="#" onclick="yt.www.masthead.loadPicker('language-picker', ''); return false;">English</a>
</li>
			<li>Location:
	<a href="#" onclick="yt.www.masthead.loadPicker('region-picker', ''); return false;">Worldwide</a>
</li>
			<li>Safety mode:
	<a href="#" onclick="yt.www.masthead.loadPicker('safetymode-picker', ''); return false;">

Off

	</a>
</li>
	</ul>
		<div id="picker-container"></div>
	<div id="picker-loading" style="display: none">Loading...</div>


	</div>

		</div>
		
	</div>
	<div> 

	</div>
					<script>
			yt.setConfig('TIMING_ACTION', 'index');
		</script>

	
	
	<script>
	
		

		
		yt.www.thumbnailDelayLoad.setFudgeFactor(0);
	
	if (document.documentElement["getBoundingClientRect"]) {
		yt.events.listen(window, 'scroll', yt.www.thumbnailDelayLoad.loadImages);
		yt.events.listen(window, 'resize', yt.www.thumbnailDelayLoad.loadImages);
	}
	yt.www.thumbnailDelayLoad.loadImages();

		yt.www.thumbnailDelayLoad.setLoadAllAtOnce(true);


		
			yt.events.listen(_gel('masthead-search-term'), 'focus', yt.www.home.ads.workaroundReset);
		
			yt.setTimeout(function() {
				window.yt.www.suggest.install(document.searchForm,
						document.searchForm.search_query,
						'en','close',
						'Suggestions',
						'Web search',
						-1,
						null);
					}, 100);

	</script>
	
	<script id="legacy-user-datastore" style="behavior:url('/web/20100728112039im_/http://www.youtube.com/#default#userdata')"></script>
	
	


	<!-- end postpage section -->
	<!--[if IE]></div><![endif]-->



<table id="completeTable" cellpadding="0" cellspacing="0" class="yt-suggest-table" style="visibility: hidden; left: 222px; top: 42px; width: 292px;"></table><iframe id="yt-suggest-iframe" allow="autoplay 'self'; fullscreen 'self'" style="left: 222px; top: 42px; width: 292px; height: 0px; visibility: hidden;"></iframe></body></html>