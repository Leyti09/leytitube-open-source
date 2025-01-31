<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_update.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_insert.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__user_i = new user_insert($__db); ?>
<?php $__user_u = new user_update($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php if(!$__video_h->video_exists($_GET['v']))
 die(require_once $_SERVER['DOCUMENT_ROOT'] . '/watch_404.php'); ?>
<?php $_video = $__video_h->fetch_video_rid($_GET['v']); ?>
<?php $_video['comments'] = $__video_h->get_comments_from_video($_video['rid']); ?>
<?php
	if($_video['visibility'] == "v" && @$_SESSION['siteusername'] != $_video['author'])
		header("Location: /");

	$__video_h->check_view($_GET['v'], @$_SERVER["HTTP_CF_CONNECTING_IP"]);

	$_SESSION['current_video'] = $_video['rid'];

	/* 
	PREPARE EMBEDS CLASS -- function(string $page_title, string $page_description...) 
	Returns a list of arrays for compatibility purposes & but downside is ugly for loop codes 
	Work on this tomorrow or some shit idk lol
	*/

	/* 
	USE THE GOD DAMN __CONFIG MORE -- idiot
	Work on this tomorrow or some shit
	*/

	$__server->page_embeds->page_title = htmlspecialchars($_video['title']);
	$__server->page_embeds->page_description = htmlspecialchars($_video['description']);
	$__server->page_embeds->page_image = "/dynamic/thumbs/" . $_video['thumbnail'];
	$__server->page_embeds->page_url = "https://leyti.xyz/watch?v=" . htmlspecialchars($_video['rid']);
?>
<!DOCTYPE html>
<html lang="en"><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><head><script id="js-2074221268" src="//web.archive.org/web/20121225000539/http://s.ytimg.com/yts/jsbin/www-searchbox-vflMOcX4x.js"></script><script id="js-946183242" src="//web.archive.org/web/20121225000539/http://s.ytimg.com/yts/jsbin/www-livecomments-vflciwrOb.js"></script><script id="js-2455638410" src="//web.archive.org/web/20121225000539/http://s.ytimg.com/yts/jsbin/www-guidev2-vfl72MaxY.js"></script><script id="js-1898340756" src="//web.archive.org/web/20121225000724/http://www.google.com/jsapi?autoload=%7B%22modules%22%3A%5B%7B%22name%22%3A%22ads%22%2C%22version%22%3A%221%22%2C%22callback%22%3A%22(function()%7B%7D)%22%2C%22packages%22%3A%5B%22content%22%5D%7D%5D%7D"></script><script id="js-148358013" src="//web.archive.org/web/20121225000724/http://pagead2.googlesyndication.com/pagead/show_companion_ad.js"></script><script id="js-1156331278" src="//web.archive.org/web/20121225000724/http://www.googletagservices.com/tag/js/gpt.js" data-loaded="true"></script><script id="js-4269418517" src="//web.archive.org/web/20121225000539/http://s.ytimg.com/yts/jsbin/www-watch7-extra-vflyP-4Kk.js" data-loaded="true"></script><script src="//archive.org/includes/athena.js" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app222.us.archive.org';v.server_ms=1118;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="/_static/js/bundle-playback.js?v=HxkREWBo" charset="utf-8"></script>
<script type="text/javascript" src="/_static/js/wombat.js?v=txqj7nKC" charset="utf-8"></script>
<script type="text/javascript">
    __wm.init("https://web.archive.org/web");
  __wm.wombat("http://www.youtube.com/watch?v=CE0Q904gtMI","20121225000539","https://web.archive.org/","web","/_static/",
	      "1356393939");
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
var yt = yt || {};yt.timing = yt.timing || {};yt.timing.data_ = yt.timing.data_ || {};yt.timing.tick = function(label, opt_time) {var timer = yt.timing.data_['timer'] || {};if(opt_time) {timer[label] = opt_time;}else {timer[label] = new Date().getTime();}yt.timing.data_['timer'] = timer;};yt.timing.info = function(label, value) {var info_args = yt.timing.data_['info_args'] || {};info_args[label] = value;yt.timing.data_['info_args'] = info_args;};yt.timing.info('e', "902543,920704,912806,928001,922403,922405,929901,913605,929104,913546,913556,908496,920201,913302,919009,911116,901451,902556");yt.timing.data_['wff'] = true;yt.timing.info('pr', "1");yt.timing.info('an', "aftv,afv");if (document.webkitVisibilityState == 'prerender') {document.addEventListener('webkitvisibilitychange', function() {yt.timing.tick('start');}, false);}yt.timing.tick('start');yt.timing.info('li','0');try {yt.timing.data_['srt'] = window.gtbExternal && window.gtbExternal.pageT() ||window.external && window.external.pageT;} catch(e) {}if (window.chrome && window.chrome.csi) {yt.timing.data_['srt'] = Math.floor(window.chrome.csi().pageT);}if (window.msPerformance && window.msPerformance.timing) {yt.timing.data_['srt'] = window.msPerformance.timing.responseStart - window.msPerformance.timing.navigationStart;}    </script>

<script>var yt = yt || {};yt.preload = {};yt.preload.counter_ = 0;yt.preload.start = function(src) {var img = new Image();var counter = ++yt.preload.counter_;yt.preload[counter] = img;img.onload = img.onerror = function () {delete yt.preload[counter];};img.src = src;img = null;};yt.preload.start("https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/r15---sn-nwj7knek.c.youtube.com\/crossdomain.xml");yt.preload.start("https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/r15---sn-nwj7knek.c.youtube.com\/generate_204?itag=34\u0026expire=1356417209\u0026ipbits=8\u0026factor=1.25\u0026newshard=yes\u0026ip=207.241.226.239\u0026key=yt1\u0026sparams=algorithm%2Cburst%2Ccp%2Cfactor%2Cgcr%2Cid%2Cip%2Cipbits%2Citag%2Csource%2Cupn%2Cexpire\u0026sver=3\u0026burst=40\u0026cp=U0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo\u0026id=084d10f74e20b4c2\u0026fexp=902543%2C920704%2C912806%2C928001%2C922403%2C922405%2C929901%2C913605%2C929104%2C913546%2C913556%2C908496%2C920201%2C913302%2C919009%2C911116%2C901451%2C902556\u0026gcr=us\u0026signature=B7826FE0B38BA46BF9023321C0E299B1CD352FA2.934F172DB6BACAEEB1746101409ED05E450A0606\u0026algorithm=throttle-factor\u0026ms=au\u0026mv=m\u0026upn=S-4xdVhdCBU\u0026source=youtube\u0026mt=1356393909");</script><title>Golden Eagle Snatches Kid - YouTube</title><link rel="search" type="application/opensearchdescription+xml" href="https://web.archive.org/web/20121225000539/http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search"><link rel="shortcut icon" href="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/favicon-vfldLzJxy.ico" type="image/x-icon">     <link rel="icon" href="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/favicon_32-vflWoMFGx.png" sizes="32x32"><link rel="canonical" href="/web/20121225000539/http://www.youtube.com/watch?v=CE0Q904gtMI"><link rel="alternate" media="handheld" href="https://web.archive.org/web/20121225000539/http://m.youtube.com/watch?v=CE0Q904gtMI"><link rel="alternate" media="only screen and (max-width: 640px)" href="https://web.archive.org/web/20121225000539/http://m.youtube.com/watch?v=CE0Q904gtMI"><link rel="shortlink" href="https://web.archive.org/web/20121225000539/http://youtu.be/CE0Q904gtMI">    <meta name="title" content="Golden Eagle Snatches Kid">

    <meta name="description" content="A golden eagle tries to snatch a baby in Montreal! What if he got away with it!? Un aigle royal attaque un jeune enfant sur le Mont-Royal! UPDATE: This video...">

    <meta name="keywords" content="Eagle, Attack, Predator, Kidnapping, Animal, Wild, Montreal, Baby, Park, Bird, Mont-Royal, Hunt, Fail, Epic Fail, Golden Eagle, Aigle, Enfant, 2012, Kid, Aig...">

    <link rel="alternate" type="application/json+oembed" href="https://web.archive.org/web/20121225000539/http://www.youtube.com/oembed?format=json&amp;url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DCE0Q904gtMI" title="Golden Eagle Snatches Kid">
  <link rel="alternate" type="text/xml+oembed" href="https://web.archive.org/web/20121225000539/http://www.youtube.com/oembed?format=xml&amp;url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DCE0Q904gtMI" title="Golden Eagle Snatches Kid">

      <meta property="og:url" content="https://web.archive.org/web/20121225000539/http://www.youtube.com/watch?v=CE0Q904gtMI">
    <meta property="og:title" content="Golden Eagle Snatches Kid">
    <meta property="og:description" content="A golden eagle tries to snatch a baby in Montreal! What if he got away with it!? Un aigle royal attaque un jeune enfant sur le Mont-Royal! UPDATE: This video...">
    <meta property="og:type" content="video">
    <meta property="og:image" content="https://web.archive.org/web/20121225000539im_/http://i4.ytimg.com/vi/CE0Q904gtMI/mqdefault.jpg">
      <meta property="og:video" content="https://web.archive.org/web/20121225000539/http://www.youtube.com/v/CE0Q904gtMI?version=3&amp;autohide=1">
      <meta property="og:video:type" content="application/x-shockwave-flash">
      <meta property="og:video:width" content="1280">
      <meta property="og:video:height" content="720">
    <meta property="og:site_name" content="YouTube">
    <meta property="fb:app_id" content="87741124305">
    <meta name="twitter:card" value="player">
    <meta name="twitter:site" value="@youtube">
      <meta name="twitter:player" value="https://www.youtube.com/embed/CE0Q904gtMI">
      <meta property="twitter:player:width" content="1280">
      <meta property="twitter:player:height" content="720">

  
  <link id="css-2783428260" rel="stylesheet" href="https://web.archive.org/web/20121225000539cs_/http://s.ytimg.com/yts/cssbin/www-hitchhiker-vfl_sDVM_.css">
    <script>
if (window.yt.timing) {yt.timing.tick("ct");}    </script>
<?php
			$_video['dislikes'] =  $__video_h->get_video_stars_level($_video['rid'], 1);
			$_video['dislikes'] += $__video_h->get_video_stars_level($_video['rid'], 2);

			$_video['likes'] =     $__video_h->get_video_stars_level($_video['rid'], 4);
			$_video['likes'] +=    $__video_h->get_video_stars_level($_video['rid'], 5);

			$_video['dislikes'] += $__video_h->get_video_likes($_video['rid'], false);
			$_video['likes'] += $__video_h->get_video_likes($_video['rid'], true);

			if($_video['likes'] == 0 && $_video['dislikes'] == 0) {
				$_video['likeswidth'] = 0;
				$_video['dislikeswidth'] = 0;
			} else {
				$_video['likeswidth'] = $_video['likes'] / ($_video['likes'] + $_video['dislikes']) * 100;
				$_video['dislikeswidth'] = 100 - $_video['likeswidth'];
			}

			$_video['liked'] = $__video_h->if_liked(@$_SESSION['siteusername'], $_video['rid'], true);
			$_video['disliked'] = $__video_h->if_liked(@$_SESSION['siteusername'], $_video['rid'], false);
			$_video['author_videos'] = $__video_h->fetch_user_videos($_video['author']);
			$_video['subscribed'] = $__user_h->if_subscribed(@$_SESSION['siteusername'], $_video['author']);
			$_video['favorited'] = $__video_h->if_favorited(@$_SESSION['siteusername'], $_video['rid']);
		?>
<style></style><style id="custom-cursor" type="text/css">body button, body [type='button'], body input[type='reset'], body input[type='submit'], body [role="button"], ::-webkit-search-cancel-button, ::-webkit-search-decoration, ::-webkit-scrollbar-button, ::-webkit-file-upload-button, [role^=button], .cc_pointer, [type="search"]::-webkit-search-cancel-button, a, select, [type="search"]::-webkit-search-decoration, .paper-button, .ytp-progress-bar-container, input[type=submit], :link, :visited, a > *, img,  ::-webkit-scrollbar-button, .ogdlpmhglpejoiomcodnpjnfgcpmgale_pointer, ::-webkit-file-upload-button, .ytp-volume-panel, #myogdlpmhglpejoiomcodnpjnfgcpmgale .icon, body .custom-cursor-on-hover {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAB8pJREFUWEetlwlUVOcVx/9vNoZFYIYZnBlBgbAJCKKVqGiCW4xrrCYxZHFJU0slYuxRTI11yYkeozlNo2mipjYkHrVV01ZCjLGosQYDSkCEAVnGYZlhxtmA2bf3XvseihJ7emZMvzPnzFvuvf/fu/c73/ddAj8aCgXCRJR4/hhF1AxFbGQGDVrhdHmj/CQVwudyvDw+10xTtLqty1JttzpPKI3Wjh/HCOaeeMCYm5csL8lOlm4NERDifpsberMNLo+fNSEIgMclQFHMNQFxZCiMfS7K6vCVkR7O+maj0R6M8D1bFiADEDyWl3xytCz8mRa1AVwO4CNpgPnRNPMHAY/DQtA04GfegYbXT7PvnW76us9FzHwUCBagICN+X36uYuOlWjX4XAIjwvjgcgj4/BQoRgs0OATBAjAZEPA5cPtI2JyD2WEg7A7q00at+dVgs0CMlYTJl87N6axp6hY43T7Wn/laoYDDipEUDS6XYEX4PA4cbj+EAi7cHnIwS3eH10tTDjvSW4zG9mAgiJw46brlT6fvr7jSiuiICPTZ7OByB1PNZIER9XhJCEO4cLrJu4AE3F4KAr4AJEWCpikW0Gontyt7LW8HBfBcftoxmVT44rWmXux5vRDGfhsuXFciLCQEPXfM0JvNoGimBGDLQZI0UuIVWPDERORmJKFbo8OOQ6cBgobDRX3Z0G1aHBTA2oXjq/UW6+PGPjcObyuCdFQcnDYrO+3dDgcqq+pQ16KGx+eHQirG1JwUZGelIVoSCw6HA4OmB1v+8Bm0RjNTlsa6TnN2UAC/WTZJVXdLkxQqFOKjbcUQj5QP83fZ7XDarWyKBSFChEdGgcvjDdkMmE3Y8t4R3O7Vw+2hO+s6jYlBARQvzlXXt2oT5BIx3t9ShKgYaTD+sFpM2Lz3E3TqDI8GsGJWxq0OjSltanY63ly3GnyBICgAW38fSvccHARwk011XeZxwQQgnpuWVqk19s167dl5WLboqWB8WVuf14N3PyxDVcMtON1U1Y0u07RgghAFmfHv+/yeN0rXvASpVAK90YJZ+RMCilGv7ECcTILGRiX2/vk0A1DR0G1aFJDzXSMiQy75VaQo8qBUIkaPVg+K9GHZU9MxKTsFqUnxkIqjhuIxE7FLeweqLh3KL9SgrrkdIpEIqQmj8MONmyD9VIfDQU3ssFisgUIQ8/Oy/h6bmr1kzpRMeNxuVJz/Dh2aXvjcHpB+EgunZcND0oiOCMM1pQoWmxsOhwM8DoEJ49KhkMeitqkdnn4Dls+cgI9Ofvtys850LGCAlXOnnudL4+dsXf8KBgZsECTkofjXv8C8RUsgsJux/9O/QsABvCSN/Mcn4oUVq/HNhW9wtfoqtmzYjEwZB4eOnkHiCECrM6D8/PevK/XmPwYMMGNc8s5I2ahtOzatgUg0mG5GLEw6GuXlX8PU0YDiwnm41tiOD05ewqHf74CX4sDpsEMcKwMnXITSDaVIDPdhSm4qNu39bElzr/lMwAAZI2NmTZmcXckLj0JpyWrwQkeAL46Hx09h/ZoiHPztywgPE7LxXtx8AMt/PhdPFjwBnkgBymXD1W8v4vjx05ie8xgkkaHYd6Q8U6m3NAcMMHakePLzC/K/b1TpYLB5kDUxD1EiEW7WXkPhzBw8M3vyUKw2tRYb9h3FmNR0iMIF7KT1OO3YsWoubrRr0Nqqwrkr9aktRmvAOyKRKRNnFL2ySCmXxSIpTorWttsQcAkkjpJiTFIiePz7C5PP64VGrcL1Wxo4SQKpiXHIy05BR7sKX12uQ4o8GruPVIxrudPXFHAGkmUR0p3rVt0RxUiJ/PHJw/ycLg/CQkOGnnl9fgj49/eBey8uXq6GTCbFF19e6H3v9OUEZn0KGIAxnJ2btnXx/DnbVi6awn/QsapWiTGjYhEnl+KWqgf9A3ZMnjD2odiXv6tBW7fR9vnfKp+/qTGeC1ScsRs6lL6xqrBi59olC0ANHrOYoTNYcOqry1D36BAdFYF5BXmYlJ3GHkofHDU1P2DDnrJ5Sp0lKPFhADnxI189c+zAEZFgMHsnyi/g8y/OAqCGtCiKRpxchtKil5CWFD/0vPzrS3jn4Kmk1jsD6mC+fhhAQnR09Pa3SnRLp6cJG1pU2LTrABIUIyEaEY4uvQlREaGIj42B1tgHrakfh3ZvhDw2htV7Z//Rm/uOn8sJVnwYAHPzwtMzyg6/W7qydPsu8GkaBbkpsDpc7OmYGRFhAkhixOgxDOC23oLSokJU1zfTG3cdXtioMTLpCnoMK2aaRJK2ruS1puv/Osvbtm4VrDYbNJ3dEEWGwun2guKGYOLPxsNps+GXvzuAtSuWkvs+PllU1db1p6CV7zoMn00AckbL9kzLHb1515sl7GQ79o/zKDt1lu0JPtixAWOTx6C1tQPFb38ImuK9VavW7X5U8YdKwDzIUIim5efEXRGGxeDZBTNx8Wot/nmlmtVYPOdJxMlicaqiEr0GC1wuKqNJZ275vwL8Z07xVs7Oauu3OxKNfQ62L2C2XqY7YhoRpi1jeganm6pv6DYFdnL5H4QPlYCxTZFGj89Klp4w9FnTmQ6JMfL6mK4U8PgoeNx0g9/jW9ZkGFD9lK//ryW4F5BpWDkKcQmfzy3mcJBA07SeIlHv9dPHm3XmvwC4v2L9BIp/A8vLZE6JujGRAAAAAElFTkSuQmCC") 5 3, pointer !important;} html,body,body select,body .custom-cursor-default-hover {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAABSRJREFUWEe911tsU3UcB/Dv6b1du663dVupHRuX3agFNwFRUFRA5eLQSJAQfFh4wBhNjCQYcaBgDDFeHsQHgkYeFnhYJiQEBqIO5eJgbB1ruw22td3Wnl7WnvZ0vZ/WnAoJIYKMdfu/nEtOft9Pfifnd84hcM+qLdNuqK5f+l4gxizOZjMMTY62J319u3o9mLz3unzuE2yxGkCwcM0LP5pe3rTtFhlCKpXOZTCpBByXzrZf6+19jT3MZ/DdWjlA49rVLaZXt2y1Do3lztPeMYDDhVRVglSUxnDHyS/Nt+17ZgRQX6HfuvWj5pZOmyNX3z9shT0RA3gCKERiVMypBO12ZEcut6/rd3nP5RtB7H7/3Y6wvHxlkApDX6LGxfZTCIUmAnxwXMU1T9WJpYWQiiQge6+63YNXjYMu2p9PBLH/071eKwVN0D4AKROGQK1Hz40r0cyEw6DSVZ/RL1tTn0mnQHA4GO441dbVZ9mcV8DnnzX7/7rRr8oSBKKeMax5axuOHz2MjN+9k5NOX9evWNspUWp5XKEISTqEod/bdljGvcfyhSAO7Puk+zaVMfVcOImEjzy0fsfO3b+dO4tkJnP5ptm8wjS/4pvKF9/4IBbwQlbyBLy2LsrV3Vk74Pe78oEg3m5cf2TJxu1NrT/9gPCI7SCXJ2jS1jaoyb7rH9+0Ow/VaDRSdXWdVVNdr48FvZAW62D/8/TpTrN5fV4AVaWqzbsOftvaeuIEKNIxGiedqzhZ7jybN3D+bkB1mer1yucb25hkHCK5Gux2qKP1HYvT9/N0EUQ5IKpY3mChsoQhSY4f6rOPNwNI3V+4wbjo5NyVGzb6B81QL1wMn+0G5evtqOrzTnqmg8gNIqMWBelM0Xyrj+p5ULHKMqXeUN1glXFS0skkA9kkCacn2NY16p3WU5EDPOqq06k/LFeIvopJiiEmGDC0H85g7E2LO9D6qDXuv25KAAC8pXOLr+kUMpMXBdAQUfipCDk6Ea+2UxT1OIipAlBTonpaJxdeERZIOREIUZSi4KDiR7tHfU2zAmBDTDrN9walaFcow4dEIkaaDmadVHR1P0n9MVXElDvABsxTKgtLFPx+jVRYSqb4KJFw4QmEB13D5JN2ID4VxGMB2IA6rXKLXiU+ziEIRHgyyDMROALRA+bxib2zAmBDGgzFZ+bIhesCcQYFIhHiiXjKE4qbLGTA+qiIx+4AGzBfK6/QFUr6FGKemKST0MoEcIcSl/52eJ8DkH0UxLQAuSGmU+0xKMRfZLIAnWAgE3LhDER33nQHjswKAAB/ebm2u1QurJ2IpiDhczGZZILjNF015Il4/w8x7Q6wATVlimd1heKLUgGXYG9FsVSAMSrR0jXq3TYrADZk8Rz1EYNS3JRisogkGUQL1Zgcc71k9UxceBgiLx1gAxbJ5YoitXhAKRNpxhgRQuonwPWN30r0WYwPmw15A+RmQ6lqO9+4/FiYwwPPNYK0Rgf+YM++fqdr/4O6kFcAAGKJ0fhr1LBwdToaAUEH2dy4YMS6yOIL3/4vRL4BqFKrF0jrTL1BiUzICfqQFUvBI+3dRNB/GEift7mpf39A7qy8A3KzoaK8mVPXsI9Op8H1ucAotUCGAYemwHMONtlcvqMzCmA/84qXLjNHS8sXxOIxENEwe3cALg9ct+PsQP/AKzMKYItXlRStUlQaW2IFhWVJcQESqSSI2CT4I9ZfbPaxxhkH3Ang1JQpnhEVarZw5epNEffQ1zan57t73xP/AMu0KD9ht/w2AAAAAElFTkSuQmCC") 3 1, auto !important;}</style><script src="https://web.archive.org/_static/js/jwplayer/jwplayer.html5.js"></script><style type="text/css"></style><link id="css-3814163658" rel="stylesheet" href="//web.archive.org/web/20121225000539/http://s.ytimg.com/yts/cssbin/www-home-c4-vfl7bPgdG.css"></head><!-- machid: pTkZzQks4SkxzWG5taWZmdnRldzlqMEdDRktRTm12OENqOFpGY1pkclZ4SnFzN1pad2JPbG1n --><body dir="ltr" class="  ltr        site-left-aligned    exp-new-site-width exp-watch7-comment-ui hitchhiker-enabled
      guide-enabled sidebar-expanded       guide-collapsed " __processed_6e9b063b-cfde-4271-9779-178bb7654030__="true"><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script>__wm.rw(0);</script>
<div id="wm-ipp-base" lang="en" style="display: block; direction: ltr; height: 1px;">
</div><div id="wm-ipp-print"></div>
<script type="text/javascript">//<![CDATA[
__wm.bt(750,27,25,2,"web","http://www.youtube.com/watch?v=CE0Q904gtMI","20121225000539",1996,"/_static/",["/_static/css/banner-styles.css?v=S1zqJCYt","/_static/css/iconochive.css?v=3PDvdIFv"], false);
  __wm.rw(1);
//]]></script>
<!-- END WAYBACK TOOLBAR INSERT -->
<?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2013_header.php"); ?>

</div>
<div id="header"></div><div id="page-container"><div id="page" class="  watch  "><div id="guide">    <div id="guide-container" class="collapsible-guide">
    <div id="guide-main" class="guide-module spf-nolink collapsed yt-uix-clickcard" data-orientation="vertical" data-position="bottomright" data-force-position="true" data-click-outside-persists="true" data-card-class="watch7-card-promo">
        <div class="guide-module-toggle">
          <span class="guide-module-toggle-icon">
            <span class="guide-module-toggle-arrow"></span>
            <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="">
            <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" id="collapsed-notification-icon">
          </span>
          <div class="guide-module-toggle-label">
            <h3>
              <span>
Guide
                <span class="yt-badge-new">new</span>
              </span>
            </h3>
          </div>
        </div>
      <div class="guide-module-content  hid">
        <ul class="guide-toplevel">
          <li id="guide-subscriptions-section" class="guide-section guide-section-no-counts">
            <div id="guide-subs-footer-container">
                <div id="guide-subscriptions-container">
                    <div class="guide-channels-content">
      <ul id="guide-channels" class="guide-channels-list guide-item-container yt-uix-scroller filter-has-matches">
              <li class="guide-channel">
    <a class="guide-item  narrow-item" href="/web/20121225000539/http://www.youtube.com/" title="Popular on YouTube" data-channel-id="youtube">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i1.ytimg.com/li/tnHdj3df7iM/default.jpg" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>Popular on YouTube</span>
      </span>
    </a>
  </li>


              <li class="guide-channel">
    <a class="guide-item " href="/web/20121225000539/http://www.youtube.com/music?feature=guide" title="Music" data-channel-id="HCp-Rdqh3z4Uc">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i1.ytimg.com/li/p-Rdqh3z4Uc/default.jpg" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>Music</span>
      </span>
    </a>
  </li>


              <li class="guide-channel">
    <a class="guide-item " href="/web/20121225000539/http://www.youtube.com/sports?feature=guide" title="Sports" data-channel-id="HC7Dr1BKwqctY">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i4.ytimg.com/li/7Dr1BKwqctY/default.jpg" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>Sports</span>
      </span>
    </a>
  </li>


              <li class="guide-channel">
    <a class="guide-item " href="/web/20121225000539/http://www.youtube.com/gaming?feature=guide" title="Gaming" data-channel-id="HChfZhJdhTqX8">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i1.ytimg.com/li/hfZhJdhTqX8/default.jpg" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>Gaming</span>
      </span>
    </a>
  </li>


              <li class="guide-channel">
    <a class="guide-item " href="/web/20121225000539/http://www.youtube.com/movies?feature=guide" title="Movies" data-channel-id="UCczhp4wznQWonO7Pb8HQ2MQ">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="https://web.archive.org/web/20121225000539/http://i4.ytimg.com/i/czhp4wznQWonO7Pb8HQ2MQ/1.jpg" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>Movies</span>
      </span>
    </a>
  </li>


              <li class="guide-channel">
    <a class="guide-item " href="/web/20121225000539/http://www.youtube.com/YouTubeShowsUS?feature=guide" title="TV Shows" data-channel-id="UCl8dMTqDrJQ0c8y23UBu4kQ">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="https://web.archive.org/web/20121225000539/http://i1.ytimg.com/i/l8dMTqDrJQ0c8y23UBu4kQ/1.jpg" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>TV Shows</span>
      </span>
    </a>
  </li>


              <li class="guide-channel">
    <a class="guide-item " href="/web/20121225000539/http://www.youtube.com/channel/HCPvDBPPFfuaM?feature=guide" title="News" data-channel-id="HCPvDBPPFfuaM">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i1.ytimg.com/li/PvDBPPFfuaM/default.jpg" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>News</span>
      </span>
    </a>
  </li>


              <li class="guide-channel">
    <a class="guide-item " href="/web/20121225000539/http://www.youtube.com/feed/UCBR8-60-B28hp2BmDPdntcQ?feature=guide" title="Spotlight" data-channel-id="UCBR8-60-B28hp2BmDPdntcQ">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="https://web.archive.org/web/20121225000539/http://i2.ytimg.com/i/ULkRHBdLC5ZcEQBaL0oYHQ/1.jpg?v=50bd2bea" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>Spotlight</span>
      </span>
    </a>
  </li>


          <li id="guide-filter-no-results">
No channels found
          </li>
      </ul>
  </div>

                </div>
                <hr class="guide-section-separator">
            </div>
          </li>
            <li id="guide-subscription-suggestions-section" class="guide-section guide-section-no-counts">
                <h3>
Channels for you
                </h3>
                <div class="guide-recommendations-list">
                    <div class="guide-channels-content">
      <ul class="guide-channels-list guide-item-container yt-uix-scroller filter-has-matches">
              <li class="guide-channel">
    <a class="guide-item  narrow-item" href="/web/20121225000539/http://www.youtube.com/feed/UCWljxewHlJE3M7U_6_zFNyA" title="AwesomenessTV" data-channel-id="UCWljxewHlJE3M7U_6_zFNyA">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i4.ytimg.com/i/WljxewHlJE3M7U_6_zFNyA/1.jpg" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>AwesomenessTV</span>
      </span>
    </a>
  </li>


              <li class="guide-channel">
    <a class="guide-item " href="/web/20121225000539/http://www.youtube.com/feed/UCkzRDjtq4ngMADh45j2KsJQ" title="MachinimaPrime" data-channel-id="UCkzRDjtq4ngMADh45j2KsJQ">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i4.ytimg.com/i/kzRDjtq4ngMADh45j2KsJQ/1.jpg" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>MachinimaPrime</span>
      </span>
    </a>
  </li>


              <li class="guide-channel">
    <a class="guide-item " href="/web/20121225000539/http://www.youtube.com/feed/UCW-B8MvkfS9LZW9X_jU6iJA" title="OraTVnetwork" data-channel-id="UCW-B8MvkfS9LZW9X_jU6iJA">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i4.ytimg.com/i/W-B8MvkfS9LZW9X_jU6iJA/1.jpg" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>OraTVnetwork</span>
      </span>
    </a>
  </li>


              <li class="guide-channel">
    <a class="guide-item " href="/web/20121225000539/http://www.youtube.com/feed/UCZWNlftHmjE3WdpKKULeLtg" title="ibaworldtour" data-channel-id="UCZWNlftHmjE3WdpKKULeLtg">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i3.ytimg.com/i/ZWNlftHmjE3WdpKKULeLtg/1.jpg" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>ibaworldtour</span>
      </span>
    </a>
  </li>


              <li class="guide-channel">
    <a class="guide-item " href="/web/20121225000539/http://www.youtube.com/feed/UClFSU9_bUb4Rc6OYfTt5SPw" title="sxephil" data-channel-id="UClFSU9_bUb4Rc6OYfTt5SPw">
        <span class="thumb"><span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i1.ytimg.com/i/lFSU9_bUb4Rc6OYfTt5SPw/1.jpg" data-thumb-manual="1" data-group-key="guide-channel-thumbs" alt="Thumbnail" width="18"><span class="vertical-align"></span></span></span></span></span>
      <span class="display-name">
        <span>sxephil</span>
      </span>
    </a>
  </li>


          <li id="guide-filter-no-results">
No channels found
          </li>
      </ul>
  </div>

                </div>
                <hr class="guide-section-separator">
                <a href="/web/20121225000539/http://www.youtube.com/channels?feature=guide" class="guide-management-section guide-management-plus-only guide-item ">
    <span class="thumb guide-management-plus-icon">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="">
    </span>
    <span class="guide-management-caption">
Browse channels
    </span>
  </a>

            </li>
        </ul>
            <div class="guide-section guide-header signup-promo guided-help-box">
    <p>
Sign in to add channels to your guide and for great recommendations!
    </p>
    <div id="guide-builder-promo-buttons" class="signed-out clearfix">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252F%253Ffeature%253Dsignin%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in ›</span></a>
    </div>
  </div>

          <div class="watch7-card-promo-content yt-uix-clickcard-content">
    <h3 class="watch7-card-promo-header">
      <img class="watch7-card-promo-guide-icon" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
This is your guide
    </h3>
    <div class="watch7-card-promo-message">
Access your channel, playlists, subscriptions, and more.
    </div>
    <div class="watch7-card-promo-account-line">
      <button class=" yt-uix-button yt-uix-button-hh-primary" type="button" onclick=";return false;" data-button-action="yt.www.guidev2.watch.acceptPromo" role="button"><span class="yt-uix-button-content">Got it! </span></button>
    </div>
  </div>

      </div>
    </div>
      <div id="watch-context-container" class="guide-module hid  collapsed yt-uix-clickcard" data-orientation="vertical" data-position="bottomright" data-force-position="true" data-click-outside-persists="true" data-card-class="watch7-card-promo">
          <div class="watch7-card-promo-content yt-uix-clickcard-content">
    <h3 class="watch7-card-promo-header">
      <img class="watch7-card-promo-context-icon" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
Never get lost
    </h3>
    <div class="watch7-card-promo-message">
Browse videos from the previous page, including the homepage feed, channel videos and search results.
    </div>
    <div class="watch7-card-promo-account-line">
      <button class=" yt-uix-button yt-uix-button-hh-primary" type="button" onclick=";return false;" data-button-action="yt.www.guidev2.watch.acceptPromo" role="button"><span class="yt-uix-button-content">Got it! </span></button>
    </div>
  </div>

      </div>
  </div>

</div><div id="content">  <div id="watch7-container" class="transition-content" itemscope="" itemid="" itemtype="http://schema.org/VideoObject">
        <link itemprop="url" href="http://www.youtube.com/watch?v=CE0Q904gtMI">
    <meta itemprop="name" content="Golden Eagle Snatches Kid">
    <meta itemprop="description" content="A golden eagle tries to snatch a baby in Montreal! What if he got away with it!? Un aigle royal attaque un jeune enfant sur le Mont-Royal! UPDATE: This video...">
    <meta itemprop="duration" content="PT1M0S">
    <meta itemprop="unlisted" content="False">
    <meta itemprop="paid" content="False">
      <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
        <link itemprop="url" href="http://www.youtube.com/user/MrNuclearCat">
      </span>
    <link itemprop="thumbnailUrl" href="http://i4.ytimg.com/vi/CE0Q904gtMI/hqdefault.jpg">
    <span itemprop="thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
      <link itemprop="url" href="http://i4.ytimg.com/vi/CE0Q904gtMI/mqdefault.jpg">
      <meta itemprop="width" content="320">
      <meta itemprop="height" content="180">
    </span>
      <link itemprop="embedURL" href="http://www.youtube.com/v/CE0Q904gtMI?version=3&amp;autohide=1">
      <meta itemprop="playerType" content="Flash">
      <meta itemprop="width" content="1280">
      <meta itemprop="height" content="720">
      <meta itemprop="isFamilyFriendly" content="True">
      <meta itemprop="regionsAllowed" content="AD,AE,AF,AG,AI,AL,AM,AO,AQ,AR,AS,AT,AU,AW,AX,AZ,BA,BB,BD,BE,BF,BG,BH,BI,BJ,BL,BM,BN,BO,BQ,BR,BS,BT,BV,BW,BY,BZ,CA,CC,CD,CF,CG,CH,CI,CK,CL,CM,CN,CO,CR,CU,CV,CW,CX,CY,CZ,DE,DJ,DK,DM,DO,DZ,EC,EE,EG,EH,ER,ES,ET,FI,FJ,FK,FM,FO,FR,GA,GB,GD,GE,GF,GG,GH,GI,GL,GM,GN,GP,GQ,GR,GS,GT,GU,GW,GY,HK,HM,HN,HR,HT,HU,ID,IE,IL,IM,IN,IO,IQ,IR,IS,IT,JE,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,PR,PS,PT,PW,PY,QA,RE,RO,RS,RU,RW,SA,SB,SC,SD,SE,SG,SH,SI,SJ,SK,SL,SM,SN,SO,SR,SS,ST,SV,SX,SY,SZ,TC,TD,TF,TG,TH,TJ,TK,TL,TM,TN,TO,TR,TT,TV,TW,TZ,UA,UG,UM,US,UY,UZ,VA,VC,VE,VG,VI,VN,VU,WF,WS,YE,YT,ZA,ZM,ZW">




    <div id="watch7-video-container">
      <div id="watch7-video">
            <script>
if (window.yt.timing) {yt.timing.tick("bf");}    </script>

       <div id="watch7-player" class="flash-player">      <embed type="application/x-shockwave-flash" src="http://s.ytimg.com/yts/swfbin/watch_as3-vflVIZAvA.swf" id="movie_player" flashvars="keywords=muay+thai%2CTraining%2Cmma%2CGym&amp;rvs=author%3DItsMyFightCard%26view_count%3D7%252C954%26title%3DXplode%2BFight%2BSeries%2B%2527Disarm%2527%2BMarch%252C%2B24th%2B2012%2BJason%2BMiknuk%2Bvs%2BDavid%2BSalas%26length_seconds%3D273%26id%3D4RmQilPvyNc%2Cauthor%3DPaladinPress%26view_count%3D102%252C290%26title%3DHow%2Bto%2BUse%2BSingle%2Band%2BDouble%2BLeg%2BTakedowns%253A%2BSecrets%2Bof%2BPankration%253A%2Bwith%2BJim%2BArvanitis%26length_seconds%3D457%26id%3D2I9Tddd56a8%2Cauthor%3DBeto%2BF.%26view_count%3D7%252C778%26title%3DThiago%2BDracena%2B%2528Rato%2529%2Bvs%2BGabriel%2BGuedes%2B-%2BMMA%2B-%2BRing%2Bof%2BFire%2B2%26length_seconds%3D203%26id%3DcwtWqxZ23Sg%2Cauthor%3DFunk%2BRoberts%26view_count%3D337%252C722%26title%3DMMA%2BCIRCUIT%2BTRAINING%2B%25232%26length_seconds%3D842%26id%3D_k5SBkGyBkc%2Cauthor%3DMMAGroupFitness%26view_count%3D430%26title%3DThe%2BInstitute%2Bof%2BHealth%2Band%2BFitness--Facility%2BTour%26length_seconds%3D202%26id%3DAzPCeEtPf98%2Cauthor%3Dsixpackshortcuts%26view_count%3D1%252C935%252C960%26title%3DCrazy%2B3%2BMin%2BHome%2BAbs%2BWorkout%26length_seconds%3D118%26id%3DGJHDRlepMTM%2Cauthor%3DTheRyanLoco%26view_count%3D1%252C710%26title%3DThe%2BCompound%26length_seconds%3D53%26id%3DEw9eD8hXO4A%2Cauthor%3DBryan%2BCambra%26view_count%3D370%26title%3DThe%2BCompound%2BMMA%2BAnd%2BFitness%2B2013%2BCommercial%26length_seconds%3D17%26id%3DLGuhYri6D7E%2Cauthor%3DTony%2BHigo%26view_count%3D400%26title%3DBoxing%2BCompound%2BCombo%26length_seconds%3D154%26id%3Dna0zlyRBOas%2Cauthor%3DCompoundFightClub%26view_count%3D481%26title%3DKelly%2BWalkers%2BPath%2BTo%2BThe%2B125lbs%2BTitle%2BBULLY%2BBREED%2BMMA%26length_seconds%3D352%26id%3D_pNCU105U8c%2Cauthor%3DNakMuayThai%26view_count%3D1%252C218%26title%3DThe%2BCompound%2BMMA%2Bgym%2Btrains%2B%2540%2BTiger%2BMuay%2BThai%2B%2526%2BMMA%252C%2BPhuket%252C%2BThailand%26length_seconds%3D187%26id%3DYQioIWNkiRE%2Cauthor%3Dprimalmma%26view_count%3D1%252C618%26title%3DIntroduction%2Bto%2Bthe%2BCompound%26length_seconds%3D166%26id%3DuKW3VRjPofE&amp;hl=en_US&amp;plid=AATVP3qeXjytVX39&amp;logwatch=1&amp;sourceid=r&amp;timestamp=1360368523&amp;sendtmp=1&amp;length_seconds=48&amp;t=vjVQa1PpcFOM8TN8E1_cqsZT_8LzIT7Qri08miyLHFg%3D&amp;ptk=youtube_none&amp;cr=US&amp;allow_embed=1&amp;pltype=contentugc&amp;watch_ajax_token=uvcKQ968xfvCNNnRYsO58Yw7bN98MTM2MDQ1NDkyM0AxMzYwMzY4NTIz&amp;user_age=49&amp;enablejsapi=1&amp;is_html5_mobile_device=False&amp;sk=cgybIo69gQLnzePFyjS14y820xepFw2NR&amp;abd=1&amp;enablecsi=1&amp;user_gender=f&amp;account_playback_token=WJEYBj35_JDbYq5VSj0PvY4EbAB8MTM2MDQ1NDkyM0AxMzYwMzY4NTIz&amp;sdetail=f%3Aem-share_video_user%2Cp%3Aus.mc163&amp;showpopout=1&amp;vq=auto&amp;url_encoded_fmt_stream_map=type%3Dvideo%252Fwebm%253B%2Bcodecs%253D%2522vp8.0%252C%2Bvorbis%2522%26quality%3Dlarge%26sig%3D5672680BC806DE713697BA7CA6D357B642B802E3.1C8CE657C160E36311EE4CCEBE440D64DAD79E36%26fallback_host%3Dtc.v1.cache4.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-q4f7dnl7.c.youtube.com%252Fvideoplayback%253Fcp%253DU0hVRVNUUF9JT0NONV9LTlRDOjNvaFBJX0NKWmIz%2526mt%253D1360368492%2526newshard%253Dyes%2526ipbits%253D8%2526id%253D2af0df742aa3b578%2526expire%253D1360392245%2526ratebypass%253Dyes%2526source%253Dyoutube%2526key%253Dyt1%2526ms%253Dau%2526ip%253D99.75.19.82%2526sver%253D3%2526mv%253Dm%2526sparams%253Dcp%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Cratebypass%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D930901%25252C900306%25252C921039%25252C920704%25252C912806%25252C902000%25252C922403%25252C922405%25252C929901%25252C913605%25252C925710%25252C929114%25252C925006%25252C920201%25252C911116%25252C926403%25252C910221%25252C901451%25252C919114%2526upn%253DbRHR6xKa-3A%2526itag%253D44%26itag%3D44%2Ctype%3Dvideo%252Fx-flv%26quality%3Dlarge%26sig%3D2174E7CF85B07B2C34B5C7B1E848209FC0D79971.11F7D974204566076D4A64C7E6CE50B098E8391C%26fallback_host%3Dtc.v1.cache2.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-q4f7dnl7.c.youtube.com%252Fvideoplayback%253Fcp%253DU0hVRVNUUF9JT0NONV9LTlRDOjNvaFBJX0NKWmIz%2526mt%253D1360368492%2526newshard%253Dyes%2526id%253D2af0df742aa3b578%2526expire%253D1360392245%2526source%253Dyoutube%2526key%253Dyt1%2526factor%253D1.25%2526burst%253D40%2526ms%253Dau%2526ipbits%253D8%2526sver%253D3%2526mv%253Dm%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D930901%25252C900306%25252C921039%25252C920704%25252C912806%25252C902000%25252C922403%25252C922405%25252C929901%25252C913605%25252C925710%25252C929114%25252C925006%25252C920201%25252C911116%25252C926403%25252C910221%25252C901451%25252C919114%2526upn%253DbRHR6xKa-3A%2526algorithm%253Dthrottle-factor%2526itag%253D35%2526ip%253D99.75.19.82%26itag%3D35%2Ctype%3Dvideo%252Fwebm%253B%2Bcodecs%253D%2522vp8.0%252C%2Bvorbis%2522%26quality%3Dmedium%26sig%3D85F414CB93AA4DB19FF66387675DD740B96D43CA.3299D88A93B18C9CE0B23AC2C146065DC0C10FD1%26fallback_host%3Dtc.v5.cache1.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-q4f7dnl7.c.youtube.com%252Fvideoplayback%253Fcp%253DU0hVRVNUUF9JT0NONV9LTlRDOjNvaFBJX0NKWmIz%2526mt%253D1360368492%2526newshard%253Dyes%2526ipbits%253D8%2526id%253D2af0df742aa3b578%2526expire%253D1360392245%2526ratebypass%253Dyes%2526source%253Dyoutube%2526key%253Dyt1%2526ms%253Dau%2526ip%253D99.75.19.82%2526sver%253D3%2526mv%253Dm%2526sparams%253Dcp%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Cratebypass%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D930901%25252C900306%25252C921039%25252C920704%25252C912806%25252C902000%25252C922403%25252C922405%25252C929901%25252C913605%25252C925710%25252C929114%25252C925006%25252C920201%25252C911116%25252C926403%25252C910221%25252C901451%25252C919114%2526upn%253DbRHR6xKa-3A%2526itag%253D43%26itag%3D43%2Ctype%3Dvideo%252Fx-flv%26quality%3Dmedium%26sig%3DA0170892032922552EA9CFCCC06960998855F6A4.7D0B721C143FA1C51F50202FFC4A44A2D0A6C588%26fallback_host%3Dtc.v14.cache4.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-q4f7dnl7.c.youtube.com%252Fvideoplayback%253Fcp%253DU0hVRVNUUF9JT0NONV9LTlRDOjNvaFBJX0NKWmIz%2526mt%253D1360368492%2526newshard%253Dyes%2526id%253D2af0df742aa3b578%2526expire%253D1360392245%2526source%253Dyoutube%2526key%253Dyt1%2526factor%253D1.25%2526burst%253D40%2526ms%253Dau%2526ipbits%253D8%2526sver%253D3%2526mv%253Dm%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D930901%25252C900306%25252C921039%25252C920704%25252C912806%25252C902000%25252C922403%25252C922405%25252C929901%25252C913605%25252C925710%25252C929114%25252C925006%25252C920201%25252C911116%25252C926403%25252C910221%25252C901451%25252C919114%2526upn%253DbRHR6xKa-3A%2526algorithm%253Dthrottle-factor%2526itag%253D34%2526ip%253D99.75.19.82%26itag%3D34%2Ctype%3Dvideo%252Fmp4%253B%2Bcodecs%253D%2522avc1.42001E%252C%2Bmp4a.40.2%2522%26quality%3Dmedium%26sig%3DD0B6B59B77FFC77CF602CBCA0574651135A9FA35.2137CA128F4EF6B28DDF315BE09EC93E649E67C9%26fallback_host%3Dtc.v24.cache1.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-q4f7dnl7.c.youtube.com%252Fvideoplayback%253Fcp%253DU0hVRVNUUF9JT0NONV9LTlRDOjNvaFBJX0NKWmIz%2526mt%253D1360368492%2526newshard%253Dyes%2526ipbits%253D8%2526id%253D2af0df742aa3b578%2526expire%253D1360392245%2526ratebypass%253Dyes%2526source%253Dyoutube%2526key%253Dyt1%2526ms%253Dau%2526ip%253D99.75.19.82%2526sver%253D3%2526mv%253Dm%2526sparams%253Dcp%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Cratebypass%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D930901%25252C900306%25252C921039%25252C920704%25252C912806%25252C902000%25252C922403%25252C922405%25252C929901%25252C913605%25252C925710%25252C929114%25252C925006%25252C920201%25252C911116%25252C926403%25252C910221%25252C901451%25252C919114%2526upn%253DbRHR6xKa-3A%2526itag%253D18%26itag%3D18%2Ctype%3Dvideo%252Fx-flv%26quality%3Dsmall%26sig%3D89666471F668377B29F91E8A0F7E9655731E8D8D.2E3FCD2740120D9FADD2BA298CFEA116930B1384%26fallback_host%3Dtc.v7.cache5.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-q4f7dnl7.c.youtube.com%252Fvideoplayback%253Fcp%253DU0hVRVNUUF9JT0NONV9LTlRDOjNvaFBJX0NKWmIz%2526mt%253D1360368492%2526newshard%253Dyes%2526id%253D2af0df742aa3b578%2526expire%253D1360392245%2526source%253Dyoutube%2526key%253Dyt1%2526factor%253D1.25%2526burst%253D40%2526ms%253Dau%2526ipbits%253D8%2526sver%253D3%2526mv%253Dm%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D930901%25252C900306%25252C921039%25252C920704%25252C912806%25252C902000%25252C922403%25252C922405%25252C929901%25252C913605%25252C925710%25252C929114%25252C925006%25252C920201%25252C911116%25252C926403%25252C910221%25252C901451%25252C919114%2526upn%253DbRHR6xKa-3A%2526algorithm%253Dthrottle-factor%2526itag%253D5%2526ip%253D99.75.19.82%26itag%3D5%2Ctype%3Dvideo%252F3gpp%253B%2Bcodecs%253D%2522mp4v.20.3%252C%2Bmp4a.40.2%2522%26quality%3Dsmall%26sig%3D27DAE234FDD3CEB70FBDAD0EFC7371E0171ABA9F.66F602D9B5D7E76B524C82E589141CA0D69B3C9C%26fallback_host%3Dtc.v3.cache3.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-q4f7dnl7.c.youtube.com%252Fvideoplayback%253Fcp%253DU0hVRVNUUF9JT0NONV9LTlRDOjNvaFBJX0NKWmIz%2526mt%253D1360368492%2526newshard%253Dyes%2526id%253D2af0df742aa3b578%2526expire%253D1360392245%2526source%253Dyoutube%2526key%253Dyt1%2526factor%253D1.25%2526burst%253D40%2526ms%253Dau%2526ipbits%253D8%2526sver%253D3%2526mv%253Dm%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D930901%25252C900306%25252C921039%25252C920704%25252C912806%25252C902000%25252C922403%25252C922405%25252C929901%25252C913605%25252C925710%25252C929114%25252C925006%25252C920201%25252C911116%25252C926403%25252C910221%25252C901451%25252C919114%2526upn%253DbRHR6xKa-3A%2526algorithm%253Dthrottle-factor%2526itag%253D36%2526ip%253D99.75.19.82%26itag%3D36%2Ctype%3Dvideo%252F3gpp%253B%2Bcodecs%253D%2522mp4v.20.3%252C%2Bmp4a.40.2%2522%26quality%3Dsmall%26sig%3DA228795DFE22BBBAA854D2189633A9779A9A0108.B56A13E034CF471A5B1336DCFD4D5CB4C7FBA592%26fallback_host%3Dtc.v23.cache2.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-q4f7dnl7.c.youtube.com%252Fvideoplayback%253Fcp%253DU0hVRVNUUF9JT0NONV9LTlRDOjNvaFBJX0NKWmIz%2526mt%253D1360368492%2526newshard%253Dyes%2526id%253D2af0df742aa3b578%2526expire%253D1360392245%2526source%253Dyoutube%2526key%253Dyt1%2526factor%253D1.25%2526burst%253D40%2526ms%253Dau%2526ipbits%253D8%2526sver%253D3%2526mv%253Dm%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D930901%25252C900306%25252C921039%25252C920704%25252C912806%25252C902000%25252C922403%25252C922405%25252C929901%25252C913605%25252C925710%25252C929114%25252C925006%25252C920201%25252C911116%25252C926403%25252C910221%25252C901451%25252C919114%2526upn%253DbRHR6xKa-3A%2526algorithm%253Dthrottle-factor%2526itag%253D17%2526ip%253D99.75.19.82%26itag%3D17&amp;csi_page_type=watch7&amp;autohide=2&amp;storyboard_spec=http%3A%2F%2Fi4.ytimg.com%2Fsb%2FKvDfdCqjtXg%2Fstoryboard3_L%24L%2F%24N.jpg%7C48%2327%23100%2310%2310%230%23default%23Ao4A0zODRNy_XLQNTf3_ySNn7Hw%7C60%2345%2348%2310%2310%231000%23M%24M%23pUdmZZ8tDQoyRrJNHBmHXMcr5ng%7C120%2390%2348%235%235%231000%23M%24M%23W4AMsRwjDoucVmRTJGO1_ruW8W4&amp;feature=em-share_video_user&amp;watermark=%2Chttp%3A%2F%2Fs.ytimg.com%2Fyts%2Fimg%2Fwatermark%2Fyoutube_watermark-vflHX6b6E.png%2Chttp%3A%2F%2Fs.ytimg.com%2Fyts%2Fimg%2Fwatermark%2Fyoutube_hd_watermark-vflAzLcD6.png&amp;video_id=KvDfdCqjtXg&amp;fmt_list=44%2F854x480%2F99%2F0%2F0%2C35%2F854x480%2F9%2F0%2F115%2C43%2F640x360%2F99%2F0%2F0%2C34%2F640x360%2F9%2F0%2F115%2C18%2F640x360%2F9%2F0%2F115%2C5%2F320x240%2F7%2F0%2F0%2C36%2F320x240%2F99%2F0%2F0%2C17%2F176x144%2F99%2F0%2F0&amp;referrer=http%3A%2F%2Fus.mc1635.mail.yahoo.com%2Fmc%2Fwelcome%3F.gx%3D1%26.tm%3D1360368438%26.rand%3D5f96q6sjmkq5r&amp;endscreen_module=http%3A%2F%2Fs.ytimg.com%2Fyts%2Fswfbin%2Fendscreen-vflhraKj4.swf&amp;fexp=930901%2C900306%2C921039%2C920704%2C912806%2C902000%2C922403%2C922405%2C929901%2C913605%2C925710%2C929114%2C925006%2C920201%2C911116%2C926403%2C910221%2C901451%2C919114&amp;title=Muay+Thai+Training++at+The+Compound" allowfullscreen="true" allowscriptaccess="always" bgcolor="#000000">
  <noembed><div class="yt-alert yt-alert-default yt-alert-error  yt-alert-player">  <div class="yt-alert-icon">
    <img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
  </div>
<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
    <div class="yt-alert-message">
            You need Adobe Flash Player to watch this video. <br> <a href="http://get.adobe.com/flashplayer/">Download it from Adobe.</a>
    </div>
</div></div></noembed>

</div>

</div>
    <script>
      (function() {
        var swf = "      \u003cembed type=\"application\/x-shockwave-flash\"     s\u0072c=\"http:\/\/s.ytimg.com\/yts\/swfbin\/watch_as3_hh-vfleHfpd4.swf\"     id=\"movie_player\"    flashvars=\"trueview=True\u0026amp;afv_ad_tag=http%3A%2F%2Fgoogleads.g.doubleclick.net%2Fpagead%2Fads%3Fdescription_url%3Dhttp%253A%252F%252Fwww.youtube.com%252Fvideo%252FCE0Q904gtMI%26host%3Dca-host-pub-4895533112976992%26loeid%3D900080%252C902543%26ad_type%3Dskippablevideo%26channel%3Dafv_instream%252BVertical_66%252BVertical_74%252BVertical_119%252BVertical_174%252BVertical_563%252BVertical_884%252BVertical_958%252Bafv_instream_us%252Byt_mpvid_AATRohLxgJqpzSKT%252Byt_cid_9101677%252Bivp%252Bytexp_900080.902543.920704.912806.928001.922403.922405.929901.913605.929104.913546.913556.908496.920201.913302.919009.911116.901451.902556%252Bafv_no_adsense%252Bytdevice_1%252Bytps_default%252Bytel_detailpage%26max_ad_duration%3D15000%26video_cpm%3D6000000%26client%3Dca-pub-6219811747049371%26ytdevice%3D1%26hl%3Den\u0026amp;cid=9101677\u0026amp;no_afv_instream=1\u0026amp;tk=7BOtYkUG-p15Abrcotpx9LYvqQMFHC_U85qj2DQDSh1ya4pnxfCD8Q%3D%3D\u0026amp;cr=US\u0026amp;adsense_video_doc_id=yt_CE0Q904gtMI\u0026amp;shortform=True\u0026amp;loeid=900080%2C902543\u0026amp;ad_flags=0\u0026amp;prefetch_ad_live_stream=True\u0026amp;t=vjVQa1PpcFO0OUxxu-1luOkpNU5PUw1vvUQw1X9ia7Y%3D\u0026amp;excluded_ads=0%3D1_2_1\u0026amp;afv=True\u0026amp;ad3_module=http%3A%2F%2Fs.ytimg.com%2Fyts%2Fswfbin%2Fad3-vfllNiPD9.swf\u0026amp;ad_slots=0\u0026amp;allow_embed=1\u0026amp;ad_eurl=http%3A%2F%2Fwww.youtube.com%2Fvideo%2FCE0Q904gtMI\u0026amp;sourceid=y\u0026amp;ad_host=ca-host-pub-4895533112976992\u0026amp;afv_video_min_cpm=6000000\u0026amp;ptk=youtube_multi\u0026amp;autohide=2\u0026amp;sendtmp=1\u0026amp;url_encoded_fmt_stream_map=itag%3D45%26quality%3Dhd720%26sig%3D4E3904215C48354823B9778E6A3DD68C5BCB5DF1.100E37B552FCEB96D98CC413CD619233A4B57B7F%26fallback_host%3Dtc.v6.cache8.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-nwj7knek.c.youtube.com%252Fvideoplayback%253Fitag%253D45%2526expire%253D1356417209%2526ipbits%253D8%2526newshard%253Dyes%2526ip%253D207.241.226.239%2526key%253Dyt1%2526ratebypass%253Dyes%2526cp%253DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%2526sver%253D3%2526gcr%253Dus%2526fexp%253D902543%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526id%253D084d10f74e20b4c2%2526sparams%253Dcp%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Cratebypass%25252Csource%25252Cupn%25252Cexpire%2526source%253Dyoutube%2526ms%253Dau%2526mv%253Dm%2526upn%253DS-4xdVhdCBU%2526mt%253D1356393909%26type%3Dvideo%252Fwebm%253B%2Bcodecs%253D%2522vp8.0%252C%2Bvorbis%2522%2Citag%3D22%26quality%3Dhd720%26sig%3D69E196AF7F8BFBA3757372340AE9896F7CF0CDC0.A7ACCD3044B711BE1F2DAE38CD527139663C9C2B%26fallback_host%3Dtc.v19.cache2.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-nwj7knek.c.youtube.com%252Fvideoplayback%253Fitag%253D22%2526expire%253D1356417209%2526ipbits%253D8%2526newshard%253Dyes%2526ip%253D207.241.226.239%2526key%253Dyt1%2526ratebypass%253Dyes%2526cp%253DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%2526sver%253D3%2526gcr%253Dus%2526fexp%253D902543%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526id%253D084d10f74e20b4c2%2526sparams%253Dcp%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Cratebypass%25252Csource%25252Cupn%25252Cexpire%2526source%253Dyoutube%2526ms%253Dau%2526mv%253Dm%2526upn%253DS-4xdVhdCBU%2526mt%253D1356393909%26type%3Dvideo%252Fmp4%253B%2Bcodecs%253D%2522avc1.64001F%252C%2Bmp4a.40.2%2522%2Citag%3D44%26quality%3Dlarge%26sig%3DB44DDF86A490D96D7E04AF6D2AE5FBE262D2D743.8A9EBC82480C6707ECC6549E7CC63C16CEE72D5A%26fallback_host%3Dtc.v22.cache1.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-nwj7knek.c.youtube.com%252Fvideoplayback%253Fitag%253D44%2526expire%253D1356417209%2526ipbits%253D8%2526newshard%253Dyes%2526ip%253D207.241.226.239%2526key%253Dyt1%2526ratebypass%253Dyes%2526cp%253DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%2526sver%253D3%2526gcr%253Dus%2526fexp%253D902543%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526id%253D084d10f74e20b4c2%2526sparams%253Dcp%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Cratebypass%25252Csource%25252Cupn%25252Cexpire%2526source%253Dyoutube%2526ms%253Dau%2526mv%253Dm%2526upn%253DS-4xdVhdCBU%2526mt%253D1356393909%26type%3Dvideo%252Fwebm%253B%2Bcodecs%253D%2522vp8.0%252C%2Bvorbis%2522%2Citag%3D35%26quality%3Dlarge%26sig%3D9863AE89BC39FC7EA7FD665A20C119E0ADD528EF.1B1CD7249B8875F96B7527F0CA5D6E80E2ABD714%26fallback_host%3Dtc.v15.cache7.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-nwj7knek.c.youtube.com%252Fvideoplayback%253Fitag%253D35%2526expire%253D1356417209%2526ipbits%253D8%2526factor%253D1.25%2526newshard%253Dyes%2526ip%253D207.241.226.239%2526key%253Dyt1%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526sver%253D3%2526burst%253D40%2526cp%253DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%2526id%253D084d10f74e20b4c2%2526fexp%253D902543%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526gcr%253Dus%2526algorithm%253Dthrottle-factor%2526ms%253Dau%2526mv%253Dm%2526upn%253DS-4xdVhdCBU%2526source%253Dyoutube%2526mt%253D1356393909%26type%3Dvideo%252Fx-flv%2Citag%3D43%26quality%3Dmedium%26sig%3D5BF61EDB209D6617A776182B0F3E885BBD6FE70C.B4343933AA5315FB6AC53F34182B910678B7E3CB%26fallback_host%3Dtc.v5.cache7.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-nwj7knek.c.youtube.com%252Fvideoplayback%253Fitag%253D43%2526expire%253D1356417209%2526ipbits%253D8%2526newshard%253Dyes%2526ip%253D207.241.226.239%2526key%253Dyt1%2526ratebypass%253Dyes%2526cp%253DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%2526sver%253D3%2526gcr%253Dus%2526fexp%253D902543%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526id%253D084d10f74e20b4c2%2526sparams%253Dcp%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Cratebypass%25252Csource%25252Cupn%25252Cexpire%2526source%253Dyoutube%2526ms%253Dau%2526mv%253Dm%2526upn%253DS-4xdVhdCBU%2526mt%253D1356393909%26type%3Dvideo%252Fwebm%253B%2Bcodecs%253D%2522vp8.0%252C%2Bvorbis%2522%2Citag%3D34%26quality%3Dmedium%26sig%3DB7826FE0B38BA46BF9023321C0E299B1CD352FA2.934F172DB6BACAEEB1746101409ED05E450A0606%26fallback_host%3Dtc.v14.cache4.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-nwj7knek.c.youtube.com%252Fvideoplayback%253Fitag%253D34%2526expire%253D1356417209%2526ipbits%253D8%2526factor%253D1.25%2526newshard%253Dyes%2526ip%253D207.241.226.239%2526key%253Dyt1%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526sver%253D3%2526burst%253D40%2526cp%253DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%2526id%253D084d10f74e20b4c2%2526fexp%253D902543%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526gcr%253Dus%2526algorithm%253Dthrottle-factor%2526ms%253Dau%2526mv%253Dm%2526upn%253DS-4xdVhdCBU%2526source%253Dyoutube%2526mt%253D1356393909%26type%3Dvideo%252Fx-flv%2Citag%3D18%26quality%3Dmedium%26sig%3D6D51F591D40D1C9845CECEACC14670B2B6615584.0764791427B67EB071149054F20002F2E9036814%26fallback_host%3Dtc.v23.cache5.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-nwj7knek.c.youtube.com%252Fvideoplayback%253Fitag%253D18%2526expire%253D1356417209%2526ipbits%253D8%2526newshard%253Dyes%2526ip%253D207.241.226.239%2526key%253Dyt1%2526ratebypass%253Dyes%2526cp%253DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%2526sver%253D3%2526gcr%253Dus%2526fexp%253D902543%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526id%253D084d10f74e20b4c2%2526sparams%253Dcp%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Cratebypass%25252Csource%25252Cupn%25252Cexpire%2526source%253Dyoutube%2526ms%253Dau%2526mv%253Dm%2526upn%253DS-4xdVhdCBU%2526mt%253D1356393909%26type%3Dvideo%252Fmp4%253B%2Bcodecs%253D%2522avc1.42001E%252C%2Bmp4a.40.2%2522%2Citag%3D5%26quality%3Dsmall%26sig%3D8B39B1524C08E6E34D9DFD29ED5EA2FE6FBB97AF.1C999CE8DF0A6059CB1498B541BD9D123DC7F30A%26fallback_host%3Dtc.v4.cache5.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-nwj7knek.c.youtube.com%252Fvideoplayback%253Fitag%253D5%2526expire%253D1356417209%2526ipbits%253D8%2526factor%253D1.25%2526newshard%253Dyes%2526ip%253D207.241.226.239%2526key%253Dyt1%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526sver%253D3%2526burst%253D40%2526cp%253DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%2526id%253D084d10f74e20b4c2%2526fexp%253D902543%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526gcr%253Dus%2526algorithm%253Dthrottle-factor%2526ms%253Dau%2526mv%253Dm%2526upn%253DS-4xdVhdCBU%2526source%253Dyoutube%2526mt%253D1356393909%26type%3Dvideo%252Fx-flv%2Citag%3D36%26quality%3Dsmall%26sig%3D76A387CB89354F27C57AFF70EEBBED0323E4C691.AEFE4B1120AFD720F1C8B917B48A3658A4FEFFC0%26fallback_host%3Dtc.v16.cache4.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-nwj7knek.c.youtube.com%252Fvideoplayback%253Fitag%253D36%2526expire%253D1356417209%2526ipbits%253D8%2526factor%253D1.25%2526newshard%253Dyes%2526ip%253D207.241.226.239%2526key%253Dyt1%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526sver%253D3%2526burst%253D40%2526cp%253DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%2526id%253D084d10f74e20b4c2%2526fexp%253D902543%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526gcr%253Dus%2526algorithm%253Dthrottle-factor%2526ms%253Dau%2526mv%253Dm%2526upn%253DS-4xdVhdCBU%2526source%253Dyoutube%2526mt%253D1356393909%26type%3Dvideo%252F3gpp%253B%2Bcodecs%253D%2522mp4v.20.3%252C%2Bmp4a.40.2%2522%2Citag%3D17%26quality%3Dsmall%26sig%3D92FF61CD5ACBDFBD6F41D4F47CA293FD17CD6602.C15C7528BBC3D6F563FBF3E2C3A74E4338FCC850%26fallback_host%3Dtc.v13.cache5.c.youtube.com%26url%3Dhttp%253A%252F%252Fr15---sn-nwj7knek.c.youtube.com%252Fvideoplayback%253Fitag%253D17%2526expire%253D1356417209%2526ipbits%253D8%2526factor%253D1.25%2526newshard%253Dyes%2526ip%253D207.241.226.239%2526key%253Dyt1%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526sver%253D3%2526burst%253D40%2526cp%253DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%2526id%253D084d10f74e20b4c2%2526fexp%253D902543%25252C920704%25252C912806%25252C928001%25252C922403%25252C922405%25252C929901%25252C913605%25252C929104%25252C913546%25252C913556%25252C908496%25252C920201%25252C913302%25252C919009%25252C911116%25252C901451%25252C902556%2526gcr%253Dus%2526algorithm%253Dthrottle-factor%2526ms%253Dau%2526mv%253Dm%2526upn%253DS-4xdVhdCBU%2526source%253Dyoutube%2526mt%253D1356393909%26type%3Dvideo%252F3gpp%253B%2Bcodecs%253D%2522mp4v.20.3%252C%2Bmp4a.40.2%2522\u0026amp;keywords=Eagle%2CAttack%2CPredator%2CKidnapping%2CAnimal%2CWild%2CMontreal%2CBaby%2CPark%2CBird%2CMont-Royal%2CHunt%2CFail%2CEpic+Fail%2CGolden+Eagle%2CAigle%2CEnfant%2C2012%2CKid%2CAigle+Royal%2CBirds%2CWildlife\u0026amp;ad_host_tier=None\u0026amp;ad_channel_code_overlay=invideo_overlay_480x70_cat15%2Cafv_overlay%2CVertical_66%2CVertical_74%2CVertical_119%2CVertical_174%2CVertical_563%2CVertical_884%2CVertical_958%2Cyt_mpvid_AATRohLxgJqpzSKT%2Cyt_cid_9101677%2Civp%2Cytexp_900080.902543.920704.912806.928001.922403.922405.929901.913605.929104.913546.913556.908496.920201.913302.919009.911116.901451.902556%2Cafv_no_adsense%2Cytdevice_1%2Cytps_default%2Cytel_detailpage\u0026amp;mpvid=AATRohLxgJqpzSKT\u0026amp;hl=en_US\u0026amp;showpopout=1\u0026amp;account_playback_token=\u0026amp;csi_page_type=watch7ad\u0026amp;inactive_skippable_threshold=600000\u0026amp;ad_channel_code_instream=afv_instream%2CVertical_66%2CVertical_74%2CVertical_119%2CVertical_174%2CVertical_563%2CVertical_884%2CVertical_958%2Cafv_instream_us%2Cyt_mpvid_AATRohLxgJqpzSKT%2Cyt_cid_9101677%2Civp%2Cytexp_900080.902543.920704.912806.928001.922403.922405.929901.913605.929104.913546.913556.908496.920201.913302.919009.911116.901451.902556%2Cafv_no_adsense%2Cytdevice_1%2Cytps_default%2Cytel_detailpage\u0026amp;afv_ad_tag_restricted_to_instream=http%3A%2F%2Fgoogleads.g.doubleclick.net%2Fpagead%2Fads%3Fdescription_url%3Dhttp%253A%252F%252Fwww.youtube.com%252Fvideo%252FCE0Q904gtMI%26host%3Dca-host-pub-4895533112976992%26loeid%3D900080%252C902543%26ad_type%3Dskippablevideo%26channel%3Dafv_instream%252BVertical_66%252BVertical_74%252BVertical_119%252BVertical_174%252BVertical_563%252BVertical_884%252BVertical_958%252Bafv_instream_us%252Byt_mpvid_AATRohLxgJqpzSKT%252Byt_cid_9101677%252Bivp%252Bytexp_900080.902543.920704.912806.928001.922403.922405.929901.913605.929104.913546.913556.908496.920201.913302.919009.911116.901451.902556%252Bafv_no_adsense%252Bytdevice_1%252Bytps_default%252Bytel_detailpage%26max_ad_duration%3D15000%26video_cpm%3D6000000%26client%3Dca-pub-6219811747049371%26ytdevice%3D1%26hl%3Den\u0026amp;pyv_in_related_cafe_experiment_id=\u0026amp;rvs=id%3DgYm9vCPLoG4%26author%3DTodayTonight%26view_count%3D1%252C780%252C645%26title%3DUnbelievable%2Broad%2Brage%2Battack%26length_seconds%3D502%2Cid%3DVklTs-Tid_I%26author%3DIanrhys1958%26view_count%3D3%252C913%252C945%26title%3Dgolden-eagle-drags-goats-off-cliff%26length_seconds%3D439%2Cid%3DguoJUqc_Jtc%26author%3DNateTalksToYou%26view_count%3D44%252C924%26title%3DGolden%2BEagle%2BSnatches%2BKid%2BFAKE%2B%2528Eagle%2BPicks%2BUp%2BBaby%2BHoax%2529%26length_seconds%3D86%2Cid%3DxhgkEdWq8JE%26author%3DNewsforthenation1%26view_count%3D70%252C890%26title%3DGolden%2BEagle%2BSnatches%2BA%2BBABY%2B%257C%2BIs%2BVideo%2BReal%2Bor%2BFake%2B%253F%2BDebate%2Bon%2BGMA%2BGood%2BMorning%2BAmerica%26length_seconds%3D130%2Cid%3D-iFOVi0vJGU%26author%3Dmydirtreport2%26view_count%3D805%252C533%26title%3DEagle%2Bthrows%2Bgoat%2Boff%2Bcliff%2Bto%2Bits%2Bdeath%26length_seconds%3D175%2Cid%3DBWAK0J8Uhzk%26author%3DTheDrivingDogs%26view_count%3D7%252C570%252C517%26title%3DMeet%2BPorter.%2BThe%2BWorld%2527s%2BFirst%2BDriving%2BDog.%26length_seconds%3D108%2Cid%3D5wwvPLPntZk%26author%3DRay%2BPhister%26view_count%3D5%252C281%252C453%26title%3DEagle%2BCatches%2BFox%2Band%2BWolf%26length_seconds%3D328%2Cid%3DVF6cmddWOgU%26author%3DTheFineBros%26view_count%3D3%252C668%252C975%26title%3DTeens%2BReact%2Bto%2BBullying%2B%2528Amanda%2BTodd%2529%26length_seconds%3D883%2Cid%3Dj7Of_2ykZpQ%26author%3Ddogstar7%26view_count%3D918%252C034%26title%3DEpic%2BWin%2521%2BJason%2Bbeats%2BWestboro%2BBaptist%2BChurch%2Bwith%2Ba%2BFund-Raiser%2Bat%2Btheir%2Bprotest%2521%26length_seconds%3D118%2Cid%3DXafAdkZIYKA%26author%3DQueen%2BEllen%26view_count%3D3%252C955%252C343%26title%3DEAGLE%2BVS.%2BMOUNTAIN%2BGOAT%253A%2BAMAZING%2BFOOTAGE%2521%2BFULL%2BCLIP%252C%2BHI-DEF%26length_seconds%3D174%2Cid%3DD7ZFLuZqCXc%26author%3DIsrael%2BFeiler%26view_count%3D1%252C541%252C603%26title%3DGolden%2BEagle%2BAttacks%2BA%2BBoy%26length_seconds%3D75%2Cid%3DPQJvtZ9PxxE%26author%3Dkupfertyp%26view_count%3D1%252C433%252C198%26title%3DInsane%2BSkydiver%26length_seconds%3D40\u0026amp;plid=AATRohLxOybMHMWw\u0026amp;watermark=%2Chttp%3A%2F%2Fs.ytimg.com%2Fyts%2Fimg%2Fwatermark%2Fyoutube_watermark-vflHX6b6E.png%2Chttp%3A%2F%2Fs.ytimg.com%2Fyts%2Fimg%2Fwatermark%2Fyoutube_hd_watermark-vflAzLcD6.png\u0026amp;sdetail=p%3A%2Fembed%2FCE0Q904gtMI\u0026amp;no_get_video_log=1\u0026amp;afv_instream_max=15000\u0026amp;referrer=http%3A%2F%2Fwww.youtube.com%2Fembed%2FCE0Q904gtMI\u0026amp;enablejsapi=1\u0026amp;gut_tag=%2F4061%2Fytunknown%2Fmain\u0026amp;host_language=en\u0026amp;title=Golden+Eagle+Snatches+Kid\u0026amp;vq=auto\u0026amp;as_launched_in_country=1\u0026amp;cafe_experiment_id=\u0026amp;yt_pt=AD1B29krgCqacknZuck-kSBYdRdo2QAZc47Y3A_G1ERbS7AByXObHDmlqjedl6K3wAmfFDufAmc_MuXaxd_wqmNI762geW1C9_kPzM217locbzooSKCMRz-p7jefnmioo8HsSrZzNNGMePMMNJWS\u0026amp;length_seconds=60\u0026amp;enablecsi=1\u0026amp;pltype=content\u0026amp;ad_logging_flag=1\u0026amp;aftv=True\u0026amp;tmi=1\u0026amp;fmt_list=45%2F1280x720%2F99%2F0%2F0%2C22%2F1280x720%2F9%2F0%2F115%2C44%2F854x480%2F99%2F0%2F0%2C35%2F854x480%2F9%2F0%2F115%2C43%2F640x360%2F99%2F0%2F0%2C34%2F640x360%2F9%2F0%2F115%2C18%2F640x360%2F9%2F0%2F115%2C5%2F320x240%2F7%2F0%2F0%2C36%2F320x240%2F99%2F0%2F0%2C17%2F176x144%2F99%2F0%2F0\u0026amp;ad_device=1\u0026amp;video_id=CE0Q904gtMI\u0026amp;fexp=902543%2C920704%2C912806%2C928001%2C922403%2C922405%2C929901%2C913605%2C929104%2C913546%2C913556%2C908496%2C920201%2C913302%2C919009%2C911116%2C901451%2C902556\u0026amp;video_wall=1\u0026amp;is_html5_mobile_device=False\u0026amp;sk=8NFMJa5fwf1ld96bK_ux5Lryxv7xnq6cC\u0026amp;abd=1\u0026amp;ad_video_pub_id=ca-pub-6219811747049371\u0026amp;sffb=True\u0026amp;afv_inslate_ad_tag=http%3A%2F%2Fgoogleads.g.doubleclick.net%2Fpagead%2Fads%3Fdescription_url%3Dhttp%253A%252F%252Fwww.youtube.com%252Fvideo%252FCE0Q904gtMI%26host%3Dca-host-pub-4895533112976992%26loeid%3D900080%252C902543%26ad_type%3Duserchoice%26max_ad_duration%3D15000%26client%3Dca-pub-6219811747049371%26ytdevice%3D1%26hl%3Den\u0026amp;endscreen_module=http%3A%2F%2Fs.ytimg.com%2Fyts%2Fswfbin%2Fendscreen-vflW8uRdM.swf\u0026amp;storyboard_spec=http%3A%2F%2Fi4.ytimg.com%2Fsb%2FCE0Q904gtMI%2Fstoryboard3_L%24L%2F%24N.jpg%7C48%2327%23100%2310%2310%230%23default%232Y4WPQs_elrd-ZAS5cfqq6Ikh5k%7C80%2345%2361%2310%2310%231000%23M%24M%23pmRuN4I7ce8hCJknKDZeqjkSr_k%7C160%2390%2361%235%235%231000%23M%24M%23xDs98s0SM8AIQu4PiaL4LDIyXh0\u0026amp;oid=o7a9Jsj77NoHmLCu-eZ2Ig\u0026amp;timestamp=1356393939\u0026amp;ad_preroll=1\"     bgcolor=\"#000000\" allowfullscreen=\"true\" allowscriptaccess=\"always\"\u003e\n  \u003cnoembed\u003e\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            You need Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e\u003c\/noembed\u003e\n\n";
        document.getElementById('watch7-player').innerHTML = swf;
      })();
    </script>

        
      </div>
    </div>

    <div id="watch7-main-container">
      <div id="watch7-main" class="clearfix">
        <div id="watch7-content">
            <div class="yt-uix-button-panel">
      <div id="watch7-headline" class="clearfix  yt-uix-expander yt-uix-expander-collapsed">
    <h1 id="watch-headline-title">
      

  


  <span class=" yt-uix-expander-head" dir="ltr" title="Golden Eagle Snatches Kid">
  <?php echo htmlspecialchars($_video['title']); ?>
  </span>

    </h1>
  </div>

    <div id="watch7-user-header"><a href="/user/<?php echo htmlspecialchars($_video['author']); ?>?feature=watch" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/silhouette48-vflLdu7sh.png" alt="<?php echo htmlspecialchars($_video['author']); ?>" width="48"><span class="vertical-align"></span></span></span></span></a><a href="/web/20121225000539/http://www.youtube.com/user/MrNuclearCat?feature=watch" class="yt-uix-sessionlink yt-user-name " data-sessionlink="feature=watch&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr"><?php echo htmlspecialchars($_video['author']); ?></a><span class="yt-user-separator">·</span><a class="yt-uix-sessionlink yt-user-videos" href="/web/20121225000539/http://www.youtube.com/user/MrNuclearCat/videos" data-sessionlink="feature=watch&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D">2 videos</a><br><span class="yt-uix-button-subscription-container yt-uix-button-context-light"><button class="yt-subscription-button yt-subscription-button-js-default None yt-uix-button yt-uix-button-subscribe-branded" type="button" href="<?php if($_video['subscribed']) { echo "subscribed "; } ?>" onclick=";window.location.href=this.getAttribute('href');return false;" data-subscription-type="" data-subscription-feature="watch" data-subscription-value="UCLVfJkPgwpppAuJgTNL9AMw" data-sessionlink="feature=watch&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" data-subscription-button-type="branded" role="button" data-subscription-initialized="true"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-subscribe-branded" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><span class="yt-uix-button-content">  <span class="subscribe-hh-label">Subscribe</span>
  <span class="subscribed-hh-label">Subscribed</span>
  <span class="unsubscribe-hh-label">Unsubscribe</span>
 </span></button><span class="yt-subscription-button-subscriber-count-branded-horizontal"><?php if($_video['subscribed']) { echo "subscribed "; } ?></span><span class="yt-subscription-button-disabled-mask"></span></span><div id="watch7-views-info">  <span class="watch-view-count">
 <?php echo $__video_h->fetch_video_views($_video['rid']); ?>
  </span>
    <div class="video-extras-sparkbars">
    <div class="video-extras-sparkbar-likes" style="width: 89.8478706779%"></div>
    <div class="video-extras-sparkbar-dislikes" style="width: 10.1521293221%"></div>
  </div>
  <span class="video-extras-likes-dislikes">
      <img class="icon-watch-stats-like" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Like"> 73,589
 &nbsp;&nbsp;&nbsp;   <img class="icon-watch-stats-dislike" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Dislike"> 8,315

  </span>

</div></div>
      <div id="watch7-action-buttons" class="clearfix">
    <div id="watch7-sentiment-actions">
      <span id="watch-like-dislike-buttons" class="yt-uix-button-group " data-button-toggle-group="optional"><span class="yt-uix-clickcard"><button class="yt-uix-clickcard-target yt-uix-button yt-uix-button-hh-text yt-uix-tooltip" id="watch-like" title="" type="button" onclick=";return false;" data-orientation="vertical" data-like-tooltip="I like this" data-unlike-tooltip="Unlike" data-button-toggle="true" data-position="bottomright" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-like" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><span class="yt-uix-button-content">Like </span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to like <span class="yt-user-name " dir="ltr">MrNuclearCat</span>'s video.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button class="yt-uix-clickcard-target yt-uix-button yt-uix-button-hh-text yt-uix-tooltip yt-uix-button-empty" id="watch-dislike" title="I dislike this" type="button" onclick=";return false;" data-orientation="vertical" data-button-toggle="true" data-position="bottomright" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-dislike" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="I dislike this"><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to dislike <span class="yt-user-name " dir="ltr">MrNuclearCat</span>'s video.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span></span>
    </div>
    <div id="watch7-secondary-actions" class="yt-uix-button-group" data-button-toggle-group="required">
        <span>
    <button class="action-panel-trigger  yt-uix-button-toggled yt-uix-button yt-uix-button-hh-text yt-uix-tooltip" type="button" title="" onclick=";return false;" data-trigger-for="action-panel-details" data-button-toggle="true" role="button"><span class="yt-uix-button-content">About </span></button>
  </span>

        <span>
    <button class="action-panel-trigger   yt-uix-button yt-uix-button-hh-text yt-uix-tooltip" type="button" title="" onclick=";return false;" data-trigger-for="action-panel-share" data-button-toggle="true" role="button"><span class="yt-uix-button-content">Share </span></button>
  </span>

          <span class="yt-uix-clickcard">
    <button class="action-panel-trigger   yt-uix-clickcard-target yt-uix-button yt-uix-button-hh-text yt-uix-tooltip" type="button" title="" onclick=";return false;" data-trigger-for="action-panel-none" data-orientation="vertical" data-upsell="playlist" data-button-toggle="true" data-position="bottomleft" role="button"><span class="yt-uix-button-content">Add to </span></button>
        <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to add <span class="yt-user-name " dir="ltr">MrNuclearCat</span>'s video to your playlist.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>

  </span>

        <span>
    <button class="action-panel-trigger   yt-uix-button yt-uix-button-hh-text yt-uix-tooltip yt-uix-button-empty" type="button" title="Statistics" onclick=";return false;" data-trigger-for="action-panel-stats" data-button-toggle="true" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-action-panel-stats" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Statistics"><span class="yt-uix-button-valign"></span></span></button>
  </span>

        <span>
    <button class="action-panel-trigger   yt-uix-button yt-uix-button-hh-text yt-uix-tooltip yt-uix-button-empty" type="button" title="Report" onclick=";return false;" data-trigger-for="action-panel-report" data-button-toggle="true" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-action-panel-report" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Report"><span class="yt-uix-button-valign"></span></span></button>
  </span>

    </div>
  </div>

      <div id="watch7-action-panels" class="yt-uix-button-panel">
      <div id="action-panel-details" class="action-panel-content" data-panel-loaded="true">
    <div id="watch-description" class="yt-uix-expander yt-uix-expander-collapsed yt-uix-button-panel" data-expander-action="yt.www.watch7.handleDescriptionToggle">
      <div id="watch-description-content">
        <div id="watch-description-clip">
          <p id="watch-uploader-info">
            <strong>Published on <span id="eow-date" class="watch-video-date">Dec 18, 2012</span>
</strong>
          </p>
          <div id="watch-description-text">
            <p id="eow-description">A golden eagle tries to snatch a baby in Montreal! What if he got away with it!?<br>Un aigle royal attaque un jeune enfant sur le Mont-Royal!<br><br>UPDATE: This video is a hoax produced by Antoine Seigle, Félix Marquis-Poulin, Loïc Mireault and Normand Archambault, students at Centre NAD Details: <a href="https://web.archive.org/web/20121225000539/http://bit.ly/VQ5rMw" target="_blank" title="http://bit.ly/VQ5rMw" rel="nofollow" dir="ltr" class="yt-uix-redirect-link">http://bit.ly/VQ5rMw</a><br><br>MISE À JOUR: Cette vidéo est un canular réalisé par Antoine Seigle, Félix Marquis-Poulin, Loïc Mireault et Normand Archambault, étudiants au Centre NAD. Précisions: <a href="https://web.archive.org/web/20121225000539/http://bit.ly/12AmJTy" target="_blank" title="http://bit.ly/12AmJTy" rel="nofollow" dir="ltr" class="yt-uix-redirect-link">http://bit.ly/12AmJTy</a></p>
          </div>
            <div id="watch-description-extras">
    <ul class="watch-extras-section">
      <li>
        <h4 class="title">
Category
        </h4>
        <div class="content">
              <p id="eow-category"><a href="/web/20121225000539/http://www.youtube.com/pets">Pets &amp; Animals</a></p>

        </div>
      </li>


        <li>
          <h4 class="title">License</h4>
          <div class="content">
              <p id="eow-reuse">
Standard LeytiTube License
  </p>

          </div></li>
        
    </ul>
  </div>

        </div>
        <ul id="watch-description-extra-info">
          
        </ul>
      </div>

      <div id="watch-description-toggle" class="yt-uix-expander-head yt-uix-button-panel">
        <div id="watch-description-expand" class="expand">
          <button class="metadata-inline yt-uix-button yt-uix-button-hh-text" type="button" onclick=";return false;" role="button"><span class="yt-uix-button-content">Show more </span></button>
        </div>
        <div id="watch-description-collapse" class="collapse">
          <button class="metadata-inline yt-uix-button yt-uix-button-hh-text" type="button" onclick=";return false;" role="button"><span class="yt-uix-button-content">Show less </span></button>
        </div>
      </div>
    </div>
  </div>

      <div id="action-panel-share" class="action-panel-content hid">
      <div id="watch-actions-share-loading">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

Loading...
  </p>

    </div>
  </div>
  <div id="watch-actions-share-panel"></div>

  </div>

      <div id="action-panel-addto" class="action-panel-content hid" data-auth-required="true">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

Loading...
  </p>

    </div>
  </div>

      <div id="action-panel-stats" class="action-panel-content hid">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

Loading...
  </p>

    </div>
  </div>

      <div id="action-panel-report" class="action-panel-content hid" data-auth-required="true">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

Loading...
  </p>

    </div>
  </div>

      <div id="action-panel-login" class="action-panel-content hid">
    <div class="action-panel-login">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-default" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
      <a href="/web/20121225000539/http://www.youtube.com/signup?next=%2Fwatch%3Fv%3DCE0Q904gtMI" class="yt-uix-button-alert-link">Sign up</a>
    </div>
  </div>

  <div id="action-panel-ratings-disabled" class="action-panel-content hid">
      <div id="watch-actions-ratings-disabled" class="watch-actions-panel hid">
    <em>Ratings have been disabled for this video.</em>
  </div>

  </div>

  <div id="action-panel-rental-required" class="action-panel-content hid">
      <div id="watch-actions-rental-required" class="watch-actions-panel hid">
    <strong>Rating is available when the video has been rented.</strong>
  </div>

  </div>

  <div id="action-panel-error" class="action-panel-content hid">
    <div class="action-panel-error">
      This feature is not available right now. Please try again later.
    </div>
  </div>

    <div id="watch7-action-panel-footer">
        <hr class="yt-horizontal-rule ">

    </div>
  </div>

  </div>
    <div id="watch7-discussion">

        
        <div id="comments-view" data-type="highlights" class="">

                <div class="comments-section">
      <h4>
            <strong>Top Comments</strong>

  </h4>

      <ul class="comment-list">
      


  <li class="clearfix comment" data-tag="top" data-author-id="Sny7b7F1RFlY6R-ekDo_Aw" data-id="KgHQVTA33GkuoojBK8LztfCOdwGCWPxWIc0-fC5QCsA" data-score="3">
      <button class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" type="button" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
        <a href="/web/20121225000539/http://www.youtube.com/channel/UCSny7b7F1RFlY6R-ekDo_Aw" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/https://lh3.googleusercontent.com/-pYcmVwegMBE/AAAAAAAAAAI/AAAAAAAAAAA/F17Roivd69o/s48-c-k/photo.jpg" data-thumb="https://web.archive.org/web/20121225000539/https://lh3.googleusercontent.com/-pYcmVwegMBE/AAAAAAAAAAI/AAAAAAAAAAA/F17Roivd69o/s48-c-k/photo.jpg" alt="Dhananjay Patel" width="48" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span></a>

    <div class="comment-body">
      

  <div class="content-container">
    <div class="content">


        <p class="metadata">
          <span class="author ">
            <a href="/web/20121225000539/http://www.youtube.com/channel/UCSny7b7F1RFlY6R-ekDo_Aw" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">Dhananjay Patel</a>
          </span>
            <span class="time" dir="ltr">
              <a dir="ltr" href="https://web.archive.org/web/20121225000539/http://www.youtube.com/comment?lc=KgHQVTA33GkuoojBK8LztfCOdwGCWPxWIc0-fC5QCsA">
                21 minutes ago
              </a>
            </span>
        </p>

          <div class="comment-text" dir="ltr">
            <p>"snake snatch a kid"..watch it on my channel..its pretty﻿ insane !!!!!!!!! </p>

          </div>
    </div>


      
  <div class="comment-actions">
      <button class="start comment-action yt-uix-button yt-uix-button-link" type="button" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
      <span class="separator">·</span>

        <span class="comments-rating-positive" title="5 up, 2 down">
          3
        </span>

      <span class="yt-uix-button-group"><span class="yt-uix-clickcard"><button class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Dhananjay Patel</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Dhananjay Patel</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span></span>
  </div>

  </div>

    </div>
  </li>

      


  <li class="clearfix comment" data-tag="top" data-author-id="wbW1qZvVXTQgp09yFv677w" data-id="KgHQVTA33GmildZN5oWWyb8K9vJWMwHyUEj9vv4Dw0s" data-score="1">
      <button class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" type="button" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
        <a href="/web/20121225000539/http://www.youtube.com/user/doomdude0990" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i4.ytimg.com/i/wbW1qZvVXTQgp09yFv677w/1.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i4.ytimg.com/i/wbW1qZvVXTQgp09yFv677w/1.jpg" alt="doomdude0990" width="48" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span></a>

    <div class="comment-body">
      

  <div class="content-container">
    <div class="content">


        <p class="metadata">
          <span class="author ">
            <a href="/web/20121225000539/http://www.youtube.com/user/doomdude0990" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">doomdude0990</a>
          </span>
            <span class="time" dir="ltr">
              <a dir="ltr" href="https://web.archive.org/web/20121225000539/http://www.youtube.com/comment?lc=KgHQVTA33GmildZN5oWWyb8K9vJWMwHyUEj9vv4Dw0s">
                1 minute ago
              </a>
            </span>
        </p>

          <div class="comment-text" dir="ltr">
            <p>Only﻿ one thing explains this ... Hide yo kidz xD</p>

          </div>
    </div>


      
  <div class="comment-actions">
      <button class="start comment-action yt-uix-button yt-uix-button-link" type="button" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
      <span class="separator">·</span>


      <span class="yt-uix-button-group"><span class="yt-uix-clickcard"><button class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">doomdude0990</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">doomdude0990</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span></span>
  </div>

  </div>

    </div>
  </li>

  </ul>

  </div>

      <hr>
          <div class="comments-section" onmouseover="if (yt.www &amp;&amp; yt.www.watch &amp;&amp; yt.www.watch.livecomments) yt.www.watch.livecomments.handleCommentMouseEvent(this, event);" onmouseout="if (yt.www &amp;&amp; yt.www.watch &amp;&amp; yt.www.watch.livecomments) yt.www.watch.livecomments.handleCommentMouseEvent(this, event);">
      <h4>
        <a class="comments-section-see-all" href="/web/20121225000539/http://www.youtube.com/all_comments?v=CE0Q904gtMI">
              <strong>All Comments</strong> (40,143)

        </a>
  </h4>


        <div class="comments-post-container clearfix">
        <div class="comments-post-alert">
          <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dcomments%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US">Sign in</a> <span class="comments-post-form-rollover-text">now to post a comment!</span>

        </div>
    </div>


          <div id="live-comments-setting-scroll" class="live-comments-setting live-comments-setting-group clearfix hid">
      <span id="live-comments-count" class="live-comments-setting-option"></span>
      <span class="live-comments-setting-option">
        <a onclick="yt.www.watch.livecomments.setScroll(true); return false;">Update automatically</a>
      </span>
    </div>
    <div id="live-comments-setting-no-scroll" class="live-comments-setting hid">
      <a onclick="yt.www.watch.livecomments.setScroll(false); return false;">Disable automatic updates</a>
    </div>

        <ul class="comment-list" id="live_comments">
      


  <li class="clearfix comment" data-author-id="ou2O7Nuf2KWk1yoPdijjKQ" data-id="KgHQVTA33GlWAxe6MCen0f9EURblgsly-Eec6VtbEtU">
      <button class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" type="button" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
        <a href="/web/20121225000539/http://www.youtube.com/user/marshallwa2" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://s.ytimg.com/yts/img/silhouette48-vflLdu7sh.png" data-thumb="//web.archive.org/web/20121225000539/http://s.ytimg.com/yts/img/silhouette48-vflLdu7sh.png" alt="marshallwa2" width="48" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span></a>

    <div class="comment-body">
      

  <div class="content-container">
    <div class="content">


        <p class="metadata">
          <span class="author ">
            <a href="/web/20121225000539/http://www.youtube.com/user/marshallwa2" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">marshallwa2</a>
          </span>
            <span class="time" dir="ltr">
              <a dir="ltr" href="https://web.archive.org/web/20121225000539/http://www.youtube.com/comment?lc=KgHQVTA33GlWAxe6MCen0f9EURblgsly-Eec6VtbEtU">
                1 minute ago
              </a>
            </span>
        </p>

          <div class="comment-text" dir="ltr">
            <p>I dont﻿ think so....</p>

          </div>
    </div>


      
  <div class="comment-actions">
      <button class="start comment-action yt-uix-button yt-uix-button-link" type="button" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
      <span class="separator">·</span>


      <span class="yt-uix-button-group"><span class="yt-uix-clickcard"><button class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">marshallwa2</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">marshallwa2</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span></span>
in reply to <a href="/web/20121225000539/http://www.youtube.com/user/MotilalGaming" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">MotilalGaming</a>
        <a href="#" class="comment-action comment-action-showparent" onclick="return false;" data-action="show-parent">(Show the comment)</a>
  </div>

  </div>

    </div>
  </li>

      


  <li class="clearfix comment" data-author-id="2N-tebEq-VGiymvWqSB8bw" data-id="KgHQVTA33GmJ16rLlAwlfpVa46eOsE-93CT78t63HmM">
      <button class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" type="button" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
        <a href="/web/20121225000539/http://www.youtube.com/channel/UC2N-tebEq-VGiymvWqSB8bw" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/https://lh6.googleusercontent.com/-EJq0-tvn4yU/AAAAAAAAAAI/AAAAAAAAAAA/47mRSno3dks/s48-c-k/photo.jpg" data-thumb="https://web.archive.org/web/20121225000539/https://lh6.googleusercontent.com/-EJq0-tvn4yU/AAAAAAAAAAI/AAAAAAAAAAA/47mRSno3dks/s48-c-k/photo.jpg" alt="Gonzalo Ithurralde" width="48" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span></a>

    <div class="comment-body">
      

  <div class="content-container">
    <div class="content">


        <p class="metadata">
          <span class="author ">
            <a href="/web/20121225000539/http://www.youtube.com/channel/UC2N-tebEq-VGiymvWqSB8bw" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">Gonzalo Ithurralde</a>
          </span>
            <span class="time" dir="ltr">
              <a dir="ltr" href="https://web.archive.org/web/20121225000539/http://www.youtube.com/comment?lc=KgHQVTA33GmJ16rLlAwlfpVa46eOsE-93CT78t63HmM">
                2 minutes ago
              </a>
            </span>
        </p>

          <div class="comment-text" dir="ltr">
            <p>Eeeeefreetreeeee﻿</p>

          </div>
    </div>


      
  <div class="comment-actions">
      <button class="start comment-action yt-uix-button yt-uix-button-link" type="button" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
      <span class="separator">·</span>


      <span class="yt-uix-button-group"><span class="yt-uix-clickcard"><button class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Gonzalo Ithurralde</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Gonzalo Ithurralde</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span></span>
  </div>

  </div>

    </div>
  </li>

      


  <li class="clearfix comment" data-author-id="NZz6XWG72Jnvmp0Bdrk0vQ" data-id="KgHQVTA33GnvCeBaUQvVlWFqyjF9UcShfVCjzMh5otY">
      <button class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" type="button" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
        <a href="/web/20121225000539/http://www.youtube.com/user/T1Brit" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i3.ytimg.com/i/NZz6XWG72Jnvmp0Bdrk0vQ/1.jpg" alt="T1Brit" width="48" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span></a>

    <div class="comment-body">
      

  <div class="content-container">
    <div class="content">


        <p class="metadata">
          <span class="author ">
            <a href="/web/20121225000539/http://www.youtube.com/user/T1Brit" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">T1Brit</a>
          </span>
            <span class="time" dir="ltr">
              <a dir="ltr" href="https://web.archive.org/web/20121225000539/http://www.youtube.com/comment?lc=KgHQVTA33GnvCeBaUQvVlWFqyjF9UcShfVCjzMh5otY">
                3 minutes ago
              </a>
            </span>
        </p>

          <div class="comment-text" dir="ltr">
            <p>Irresponsible dicks to make this fake video. As if eagles were not avtually an endangered species who have never harmed﻿ a single human being. But hey, french video special effects students have to get some attention don't they.</p>

          </div>
    </div>


      
  <div class="comment-actions">
      <button class="start comment-action yt-uix-button yt-uix-button-link" type="button" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
      <span class="separator">·</span>


      <span class="yt-uix-button-group"><span class="yt-uix-clickcard"><button class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">T1Brit</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">T1Brit</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span></span>
  </div>

  </div>

    </div>
  </li>

      


  <li class="clearfix comment" data-author-id="XYIJwERnxMJW69DJ_3UVEg" data-id="KgHQVTA33GnDLbnaW6wUMy8DgIlS9yK2vrNdQkxsHEY">
      <button class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" type="button" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
        <a href="/web/20121225000539/http://www.youtube.com/user/TheMemento99" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i1.ytimg.com/i/XYIJwERnxMJW69DJ_3UVEg/1.jpg" alt="TheMemento99" width="48" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span></a>

    <div class="comment-body">
      

  <div class="content-container">
    <div class="content">


        <p class="metadata">
          <span class="author ">
            <a href="/web/20121225000539/http://www.youtube.com/user/TheMemento99" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">TheMemento99</a>
          </span>
            <span class="time" dir="ltr">
              <a dir="ltr" href="https://web.archive.org/web/20121225000539/http://www.youtube.com/comment?lc=KgHQVTA33GnDLbnaW6wUMy8DgIlS9yK2vrNdQkxsHEY">
                3 minutes ago
              </a>
            </span>
        </p>

          <div class="comment-text" dir="ltr">
            <p>you would﻿ be surprised </p>

          </div>
    </div>


      
  <div class="comment-actions">
      <button class="start comment-action yt-uix-button yt-uix-button-link" type="button" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
      <span class="separator">·</span>


      <span class="yt-uix-button-group"><span class="yt-uix-clickcard"><button class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">TheMemento99</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">TheMemento99</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span></span>
in reply to <a href="/web/20121225000539/http://www.youtube.com/user/losipoop" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">losipoop</a>
        <a href="#" class="comment-action comment-action-showparent" onclick="return false;" data-action="show-parent">(Show the comment)</a>
  </div>

  </div>

    </div>
  </li>

      


  <li class="clearfix comment" data-author-id="5x24xWwGOU8uy86dRdhlPg" data-id="KgHQVTA33Gk5xLYvKwyV3DzyEDJHBUQF1M2Zv2OK7yQ">
      <button class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" type="button" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
        <a href="/web/20121225000539/http://www.youtube.com/user/Pupster88" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i2.ytimg.com/i/5x24xWwGOU8uy86dRdhlPg/1.jpg" alt="Pupster88" width="48" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span></a>

    <div class="comment-body">
      

  <div class="content-container">
    <div class="content">


        <p class="metadata">
          <span class="author ">
            <a href="/web/20121225000539/http://www.youtube.com/user/Pupster88" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">Pupster88</a>
          </span>
            <span class="time" dir="ltr">
              <a dir="ltr" href="https://web.archive.org/web/20121225000539/http://www.youtube.com/comment?lc=KgHQVTA33Gk5xLYvKwyV3DzyEDJHBUQF1M2Zv2OK7yQ">
                4 minutes ago
              </a>
            </span>
        </p>

          <div class="comment-text" dir="ltr">
            <p>"It" the clown? HAHA :) I haven't seen that movie for a﻿ long time.</p>

          </div>
    </div>


      
  <div class="comment-actions">
      <button class="start comment-action yt-uix-button yt-uix-button-link" type="button" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
      <span class="separator">·</span>


      <span class="yt-uix-button-group"><span class="yt-uix-clickcard"><button class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Pupster88</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Pupster88</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span></span>
in reply to <a href="/web/20121225000539/http://www.youtube.com/user/tusmorninginsept911" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">tusmorninginsept911</a>
        <a href="#" class="comment-action comment-action-showparent" onclick="return false;" data-action="show-parent">(Show the comment)</a>
  </div>

  </div>

    </div>
  </li>

      


  <li class="clearfix comment" data-author-id="Tcj8XANN2OlDNL637DVfAQ" data-id="KgHQVTA33Glg_LU8TuzCDyCOrpKjAcBqE2Wb7MYG3Ek">
      <button class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" type="button" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
        <a href="/web/20121225000539/http://www.youtube.com/user/nopps24k" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="https://web.archive.org/web/20121225000539/https://lh6.googleusercontent.com/-36w0Im0sf9c/AAAAAAAAAAI/AAAAAAAAAAA/HEaf-pmGhSA/s48-c-k/photo.jpg" alt="Don Whan" width="48" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span></a>

    <div class="comment-body">
      

  <div class="content-container">
    <div class="content">


        <p class="metadata">
          <span class="author ">
            <a href="/web/20121225000539/http://www.youtube.com/user/nopps24k" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">Don Whan</a>
          </span>
            <span class="time" dir="ltr">
              <a dir="ltr" href="https://web.archive.org/web/20121225000539/http://www.youtube.com/comment?lc=KgHQVTA33Glg_LU8TuzCDyCOrpKjAcBqE2Wb7MYG3Ek">
                4 minutes ago
              </a>
            </span>
        </p>

          <div class="comment-text" dir="ltr">
            <p>The Canadian version of "To Catch a Predator" seems to take a more dryer and direct approach. Not﻿ as funny as Chris Hanson though.</p>

          </div>
    </div>


      
  <div class="comment-actions">
      <button class="start comment-action yt-uix-button yt-uix-button-link" type="button" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
      <span class="separator">·</span>


      <span class="yt-uix-button-group"><span class="yt-uix-clickcard"><button class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Don Whan</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Don Whan</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span></span>
  </div>

  </div>

    </div>
  </li>

      


  <li class="clearfix comment" data-author-id="qZeNSfy_6bLvsjf0pqlVrg" data-id="KgHQVTA33Gnepb_x4qNeioAfpBhDGLT3vHJUEty7MF8">
      <button class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" type="button" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
        <a href="/web/20121225000539/http://www.youtube.com/user/losipoop" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i2.ytimg.com/i/qZeNSfy_6bLvsjf0pqlVrg/1.jpg" alt="losipoop" width="48" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span></a>

    <div class="comment-body">
      

  <div class="content-container">
    <div class="content">


        <p class="metadata">
          <span class="author ">
            <a href="/web/20121225000539/http://www.youtube.com/user/losipoop" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">losipoop</a>
          </span>
            <span class="time" dir="ltr">
              <a dir="ltr" href="https://web.archive.org/web/20121225000539/http://www.youtube.com/comment?lc=KgHQVTA33Gnepb_x4qNeioAfpBhDGLT3vHJUEty7MF8">
                4 minutes ago
              </a>
            </span>
        </p>

          <div class="comment-text" dir="ltr">
            <p> you can't﻿ get money for raping eagles, sir.</p>

          </div>
    </div>


      
  <div class="comment-actions">
      <button class="start comment-action yt-uix-button yt-uix-button-link" type="button" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
      <span class="separator">·</span>


      <span class="yt-uix-button-group"><span class="yt-uix-clickcard"><button class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">losipoop</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" type="button" title="" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">losipoop</span>'s comment.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-hh-primary" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span></span>
in reply to <a href="/web/20121225000539/http://www.youtube.com/user/TheMemento99" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" dir="ltr">TheMemento99</a>
        <a href="#" class="comment-action comment-action-showparent" onclick="return false;" data-action="show-parent">(Show the comment)</a>
  </div>

  </div>

    </div>
  </li>

  </ul>

  </div>




          <div class="comments-section">
      <div class="comments-pagination" data-ajax-enabled="true">
          

    <div class="yt-uix-pager" role="navigation">

        
<a href="/web/20121225000539/http://www.youtube.com/all_comments?v=CE0Q904gtMI&amp;page=2" class="yt-uix-button  yt-uix-pager-button yt-uix-pager-show-more yt-uix-sessionlink yt-uix-button-hh-default" data-sessionlink="ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D" data-page="2"><span class="yt-uix-button-content">Show more</span></a>
    </div>

      </div>
  </div>



      <ul>
    <li class="hid" id="parent-comment-loading"> Loading comment...</li>
  </ul>

    <div id="comments-loading" class="hid">Loading...</div>
  </div>


  </div>


        </div>
        <div id="watch7-sidebar">
                <div id="watch-longform-ad" style="display:none;">
    <div id="watch-longform-text">
Advertisement
    </div>
    <div id="watch-longform-ad-placeholder">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" height="60" width="300">
    </div>
    <div id="instream_google_companion_ad_div"></div>
  </div>




        <div id="watch-channel-brand-div" style="display:none;">
    <div id="watch-channel-brand-div-text">
Advertisement
    </div>
    <div id="ad300x250"></div>
    <div id="google_companion_ad_div"></div>
  </div>


      
  <div class="watch-sidebar-section">
    <div class="watch-sidebar-body">
      <ul id="watch-related" class="video-list">
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=gYm9vCPLoG4" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CAMQzRooAA%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i4.ytimg.com/vi/gYm9vCPLoG4/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i4.ytimg.com/vi/gYm9vCPLoG4/default.jpg" alt="Unbelievable road rage attack" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">8:22</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="gYm9vCPLoG4" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Unbelievable road rage attack">Unbelievable road rage attack</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">TodayTonight</span></span><span class="stat view-count">1,780,645 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=VklTs-Tid_I" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CAQQzRooAQ%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i3.ytimg.com/vi/VklTs-Tid_I/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i3.ytimg.com/vi/VklTs-Tid_I/default.jpg" alt="golden-eagle-drags-goats-off-cliff" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">7:19</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="VklTs-Tid_I" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="golden-eagle-drags-goats-off-cliff">golden-eagle-drags-goats-off-cliff</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">Ianrhys1958</span></span><span class="stat view-count">3,913,945 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=guoJUqc_Jtc" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CAUQzRooAg%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i4.ytimg.com/vi/guoJUqc_Jtc/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i4.ytimg.com/vi/guoJUqc_Jtc/default.jpg" alt="Golden Eagle Snatches Kid FAKE (Eagle Picks Up Baby Hoax)" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:26</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="guoJUqc_Jtc" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Golden Eagle Snatches Kid FAKE (Eagle Picks Up Baby Hoax)">Golden Eagle Snatches Kid FAKE (Eagle Picks Up Baby Hoax)</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">NateTalksToYou</span></span><span class="stat view-count">44,924 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=xhgkEdWq8JE" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CAYQzRooAw%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i1.ytimg.com/vi/xhgkEdWq8JE/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i1.ytimg.com/vi/xhgkEdWq8JE/default.jpg" alt="Golden Eagle Snatches A BABY | Is Video Real or Fake ? Debate on GMA Good Morning America" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">2:10</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="xhgkEdWq8JE" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Golden Eagle Snatches A BABY | Is Video Real or Fake ? Debate on GMA Good Morning America">Golden Eagle Snatches A BABY | Is Video Real or Fake ? Debate on GMA Good Morning America</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">Newsforthenation1</span></span><span class="stat view-count">70,890 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=-iFOVi0vJGU" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CAcQzRooBA%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i2.ytimg.com/vi/-iFOVi0vJGU/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i2.ytimg.com/vi/-iFOVi0vJGU/default.jpg" alt="Eagle throws goat off cliff to its death" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">2:55</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="-iFOVi0vJGU" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Eagle throws goat off cliff to its death">Eagle throws goat off cliff to its death</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">mydirtreport2</span></span><span class="stat view-count">805,533 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=BWAK0J8Uhzk" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CAgQzRooBQ%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i3.ytimg.com/vi/BWAK0J8Uhzk/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i3.ytimg.com/vi/BWAK0J8Uhzk/default.jpg" alt="Meet Porter. The World's First Driving Dog." width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:48</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="BWAK0J8Uhzk" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Meet Porter. The World's First Driving Dog.">Meet Porter. The World's First Driving Dog.</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">TheDrivingDogs</span></span><span class="stat view-count">7,570,517 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=5wwvPLPntZk" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CAkQzRooBg%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i2.ytimg.com/vi/5wwvPLPntZk/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i2.ytimg.com/vi/5wwvPLPntZk/default.jpg" alt="Eagle Catches Fox and Wolf" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">5:28</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="5wwvPLPntZk" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Eagle Catches Fox and Wolf">Eagle Catches Fox and Wolf</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">Ray Phister</span></span><span class="stat view-count">5,281,453 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=VF6cmddWOgU" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CAoQzRooBw%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i3.ytimg.com/vi/VF6cmddWOgU/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i3.ytimg.com/vi/VF6cmddWOgU/default.jpg" alt="Teens React to Bullying (Amanda Todd)" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">14:43</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="VF6cmddWOgU" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Teens React to Bullying (Amanda Todd)">Teens React to Bullying (Amanda Todd)</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">TheFineBros</span></span><span class="stat view-count">3,668,975 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=j7Of_2ykZpQ" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CAsQzRooCA%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i3.ytimg.com/vi/j7Of_2ykZpQ/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i3.ytimg.com/vi/j7Of_2ykZpQ/default.jpg" alt="Epic Win! Jason beats Westboro Baptist Church with a Fund-Raiser at their protest!" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:58</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="j7Of_2ykZpQ" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Epic Win! Jason beats Westboro Baptist Church with a Fund-Raiser at their protest!">Epic Win! Jason beats Westboro Baptist Church with a Fund-Raiser at their protest!</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">dogstar7</span></span><span class="stat view-count">918,034 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=XafAdkZIYKA" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CAwQzRooCQ%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i1.ytimg.com/vi/XafAdkZIYKA/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i1.ytimg.com/vi/XafAdkZIYKA/default.jpg" alt="EAGLE VS. MOUNTAIN GOAT: AMAZING FOOTAGE! FULL CLIP, HI-DEF" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">2:54</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="XafAdkZIYKA" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="EAGLE VS. MOUNTAIN GOAT: AMAZING FOOTAGE! FULL CLIP, HI-DEF">EAGLE VS. MOUNTAIN GOAT: AMAZING FOOTAGE! FULL CLIP, HI-DEF</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">Queen Ellen</span></span><span class="stat view-count">3,955,343 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=D7ZFLuZqCXc" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CA0QzRooCg%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i1.ytimg.com/vi/D7ZFLuZqCXc/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i1.ytimg.com/vi/D7ZFLuZqCXc/default.jpg" alt="Golden Eagle Attacks A Boy" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:15</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="D7ZFLuZqCXc" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Golden Eagle Attacks A Boy">Golden Eagle Attacks A Boy</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">Israel Feiler</span></span><span class="stat view-count">1,541,603 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=PQJvtZ9PxxE" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CA4QzRooCw%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i1.ytimg.com/vi/PQJvtZ9PxxE/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i1.ytimg.com/vi/PQJvtZ9PxxE/default.jpg" alt="Insane Skydiver" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">0:40</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="PQJvtZ9PxxE" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Insane Skydiver">Insane Skydiver</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">kupfertyp</span></span><span class="stat view-count">1,433,198 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=Id3wmT0UrMk" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CA8QzRooDA%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i2.ytimg.com/vi/Id3wmT0UrMk/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i2.ytimg.com/vi/Id3wmT0UrMk/default.jpg" alt="F1 Turbo - The most scary race cars ever (Feel the torque)" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:41</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="Id3wmT0UrMk" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="F1 Turbo - The most scary race cars ever (Feel the torque)">F1 Turbo - The most scary race cars ever (Feel the torque)</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">a51stef</span></span><span class="stat view-count">851,648 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=w-llZmPPNwU" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CBAQzRooDQ%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20121225000539/http://i4.ytimg.com/vi/w-llZmPPNwU/default.jpg" data-thumb="//web.archive.org/web/20121225000539/http://i4.ytimg.com/vi/w-llZmPPNwU/default.jpg" alt="Fruit Ninja in Real Life to Dubstep!" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">2:47</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="w-llZmPPNwU" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Fruit Ninja in Real Life to Dubstep!">Fruit Ninja in Real Life to Dubstep!</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">scottdw</span></span><span class="stat view-count">10,162,273 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=8Q2P4LjuVA8" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CBEQzRooDg%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i1.ytimg.com/vi/8Q2P4LjuVA8/default.jpg" alt="The Glitch" width="120" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span><span class="video-time">2:28</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="8Q2P4LjuVA8" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="The Glitch">The Glitch</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">CorridorDigital</span></span><span class="stat view-count">8,548,364 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=5dz2EsDhioo" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CBIQzRooDw%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i2.ytimg.com/vi/5dz2EsDhioo/default.jpg" alt="Cats vs Printers" width="120" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span><span class="video-time">2:00</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="5dz2EsDhioo" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Cats vs Printers">Cats vs Printers</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">mihaifrancu</span></span><span class="stat view-count">474,314 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=zWpI5vVjH-s" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CBMQzRooEA%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i3.ytimg.com/vi/zWpI5vVjH-s/default.jpg" alt="EAGLE STEALS A BABY" width="120" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span><span class="video-time">4:26</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="zWpI5vVjH-s" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="EAGLE STEALS A BABY">EAGLE STEALS A BABY</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">RayWilliamJohnson</span></span><span class="stat view-count">1,576,975 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=PopuH9urcwc" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CBQQzRooEQ%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i1.ytimg.com/vi/PopuH9urcwc/default.jpg" alt="Doggy Does Handstand While Eating LOL" width="120" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span><span class="video-time">0:24</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="PopuH9urcwc" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Doggy Does Handstand While Eating LOL">Doggy Does Handstand While Eating LOL</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">Clark Griswald</span></span><span class="stat view-count">589,319 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=3svKWr9LH4I" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=relmfu&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CBUQzRooEg%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i4.ytimg.com/vi/3svKWr9LH4I/default.jpg" alt="Golden Eagle Snatches Kid: The Making-Of" width="120" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span><span class="video-time">0:30</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="3svKWr9LH4I" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Golden Eagle Snatches Kid: The Making-Of">Golden Eagle Snatches Kid: The Making-Of</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">MrNuclearCat</span></span><span class="stat view-count">74,745 views</span></a>
          </li>
          <li class="video-list-item">
            <a href="/web/20121225000539/http://www.youtube.com/watch?v=Adfk_RSndb4" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D&amp;ved=CBYQzRooEw%3D%3D"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="https://web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//web.archive.org/web/20121225000539/http://i2.ytimg.com/vi/Adfk_RSndb4/default.jpg" alt="Eagle Kills Deer" width="120" data-group-key="thumb-group-2"><span class="vertical-align"></span></span></span></span><span class="video-time">0:16</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-hh-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="Adfk_RSndb4" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
</span><span dir="ltr" class="title" title="Eagle Kills Deer">Eagle Kills Deer</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">FishingGuruMaster</span></span><span class="stat view-count">693,497 views</span></a>
          </li>
      </ul>
        <ul id="watch-more-related" class="video-list hid">
          <li id="watch-more-related-loading">
Loading more suggestions...
          </li>
        </ul>
    </div>       <div class="watch-sidebar-foot">
        <button class=" yt-uix-button yt-uix-button-hh-default" id="watch-more-related-button" type="button" onclick=";return false;" data-button-action="yt.www.watch7.handleLoadMoreRelated" role="button"><span class="yt-uix-button-content">Load more suggestions </span></button>
      </div>
  </div> 

        </div>
      </div>
    </div>

      <div style="visibility: hidden; height: 0px; padding: 0px; overflow: hidden;">

  </div>

  </div>
</div></div></div></div><div id="footer-hh-container">    <div id="footer-hh"><div id="footer-hh-main"><div id="footer-hh-logo"><a href="/web/20121225000539/http://www.youtube.com/" title="YouTube home"><img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="YouTube home"></a></div>  <ul class="pickers yt-uix-button-group" data-button-toggle-group="optional">
      <li>
          
  <button class=" yt-uix-button yt-uix-button-hh-default" id="yt-picker-language-button" type="button" onclick=";return false;" data-button-toggle="true" data-button-menu-id="arrow-display" data-picker-position="footer" data-picker-key="language" data-button-action="yt.www.picker.load" role="button"><span class="yt-uix-button-content">    <span class="yt-picker-button-label">
Language:
    </span>
  English
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>


      </li>
      <li>
          
  <button class=" yt-uix-button yt-uix-button-hh-default" id="yt-picker-language-button" type="button" onclick=";return false;" data-button-toggle="true" data-button-menu-id="arrow-display" data-picker-position="footer" data-picker-key="country" data-button-action="yt.www.picker.load" role="button"><span class="yt-uix-button-content">    <span class="yt-picker-button-label">
Country:
    </span>
  Worldwide
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>


      </li>
      <li>
          
  <button class=" yt-uix-button yt-uix-button-hh-default" id="yt-picker-language-button" type="button" onclick=";return false;" data-button-toggle="true" data-button-menu-id="arrow-display" data-picker-position="footer" data-picker-key="safetymode" data-button-action="yt.www.picker.load" role="button"><span class="yt-uix-button-content">    <span class="yt-picker-button-label">
Safety:
    </span>
Off
 </span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>


      </li>
  </ul>

    <div id="in-product-help" class="yt-uix-clickcard">
      <button class="yt-uix-clickcard-target yt-uix-button-reverse yt-uix-button yt-uix-button-hh-default" id="help-button" type="button" onclick=";return false;" data-orientation="vertical" data-iph-js-url="//s.ytimg.com/yts/jsbin/www-help-vflDI78xO.js" data-iph-css-url="//s.ytimg.com/yts/cssbin/www-helpie-vflVn-ywY.css" data-position="bottomleft" data-iph-anchor-text="More Help" data-locale="en_US" data-iph-search-button-text="Search" data-iph-title-text="Need Help on this page?" data-iph-search-input-text="Search YouTube's Help Center" data-help-center-host="//support.google.com/youtube" data-iph-tracking="iph-questionmark" data-iph-topic-id="1699712" role="button"><span class="yt-uix-button-content">  <img class="questionmark" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
  <span>Help</span>
  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
 </span></button>
      <div class="yt-uix-clickcard-content" id="help-target">  <p class="yt-spinner">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

Loading...
  </p>
</div>
    </div>
      <div id="yt-picker-language-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

Loading...
  </p>

  </div>

      <div id="yt-picker-country-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

Loading...
  </p>

  </div>

      <div id="yt-picker-safetymode-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

Loading...
  </p>

  </div>

</div><div id="footer-hh-links"><ul id="footer-hh-links-primary">  <li><a href="/web/20121225000539/http://www.youtube.com/t/about_youtube">About</a></li>
  <li><a href="/web/20121225000539/http://www.youtube.com/t/press">Press &amp; Blogs</a></li>
  <li><a href="/web/20121225000539/http://www.youtube.com/t/copyright_center">Copyright</a></li>
  <li><a href="/web/20121225000539/http://www.youtube.com/creators">Creators &amp; Partners</a></li>
  <li><a href="/web/20121225000539/http://www.youtube.com/t/advertising_overview">Advertising</a></li>
  <li><a href="/web/20121225000539/http://www.youtube.com/dev">Developers</a></li>
</ul><ul id="footer-hh-links-secondary">  <li><a href="/web/20121225000539/http://www.youtube.com/t/terms">Terms</a></li>
  <li><a href="https://web.archive.org/web/20121225000539/http://www.google.com/intl/en/policies/privacy/">Privacy</a></li>
  <li><a href="//web.archive.org/web/20121225000539/http://support.google.com/youtube/bin/request.py?contact_type=abuse&amp;hl=en-US">Safety</a></li>

  <li><a href="//web.archive.org/web/20121225000539/http://www.google.com/tools/feedback/intl/en/error.html" onclick="return yt.www.feedback.start(yt.getConfig('FEEDBACK_LOCALE_LANGUAGE'), yt.getConfig('FEEDBACK_LOCALE_EXTRAS'), null, yt.getConfig('FEEDBACK_BUCKET_ID'));" id="reportbug">Send feedback</a></li>
  <li><a href="/web/20121225000539/http://www.youtube.com/testtube">Try something new!</a></li>

    <li></li>

</ul></div>        <div id="yt-hitchhiker-feedback">
      <a class="start end" href="//web.archive.org/web/20121225000539/http://www.google.com/tools/feedback/intl/en/error.html" onclick="return yt.www.feedback.start(yt.getConfig('FEEDBACK_LOCALE_LANGUAGE'), yt.getConfig('FEEDBACK_LOCALE_EXTRAS'), null, yt.getConfig('FEEDBACK_BUCKET_ID'));">
Send feedback
      </a>
    </div>

</div>
</div>

      <div class="yt-dialog hid" id="feed-privacy-lb">
    <div class="yt-dialog-base">
      <span class="yt-dialog-align"></span>
      <div class="yt-dialog-fg">
        <div class="yt-dialog-fg-content">
          <div class="yt-dialog-loading">
              <div class="yt-dialog-waiting-content">
    <div class="yt-spinner-img"></div><div class="yt-dialog-waiting-text">Loading...</div>
  </div>

          </div>
          <div class="yt-dialog-content">
              <div id="feed-privacy-dialog">
  </div>

          </div>
          <div class="yt-dialog-working">
              <div id="yt-dialog-working-overlay">
  </div>
  <div id="yt-dialog-working-bubble">
    <div class="yt-dialog-waiting-content">
      <div class="yt-spinner-img"></div><div class="yt-dialog-waiting-text">Working...</div>
    </div>
  </div>

          </div>
        </div>
      </div>
    </div>
  </div>



    <div id="shared-addto-watch-later-login" class="hid">
      <a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="sign-in-link">Sign in</a> to add this to a playlist

    </div>

  <div id="shared-addto-menu" style="display: none;" class="hid sign-in">
      <div class="addto-menu">
        <div id="addto-list-panel" class="menu-panel active-panel">
        <span class="yt-uix-button-menu-item yt-uix-tooltip sign-in" data-possible-tooltip="" data-tooltip-show-delay="750"><a href="https://web.archive.org/web/20121225000539/https://accounts.google.com/ServiceLogin?uilel=3&amp;service=youtube&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1&amp;passive=true&amp;hl=en_US" class="sign-in-link">Sign in</a> to add this to a playlist
</span>

  </div>
  <div id="addto-list-saved-panel" class="menu-panel">
    <div class="panel-content">
      <div class="yt-alert yt-alert-naked yt-alert-success  ">  <div class="yt-alert-icon">
    <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
  </div>
<div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
    <div class="yt-alert-message">
            
  <span class="message">Added to <span class="addto-title yt-uix-tooltip yt-uix-tooltip-reverse" title="More information about this playlist" data-tooltip-show-delay="750"></span></span>

    </div>
</div></div>
    </div>
  </div>
  <div id="addto-list-error-panel" class="menu-panel">
    <div class="panel-content">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
      <span class="error-details"></span>
      <a class="show-menu-link">Back to list</a>
    </div>
  </div>

        <div id="addto-note-input-panel" class="menu-panel">
    <div class="panel-content">
      <div class="yt-alert yt-alert-naked yt-alert-success  ">  <div class="yt-alert-icon">
    <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
  </div>
<div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
    <div class="yt-alert-message">
              <span class="message">Added to playlist:</span>
  <span class="addto-title yt-uix-tooltip" title="More information about this playlist" data-tooltip-show-delay="750"></span>

    </div>
</div></div>
    </div>
<div class="yt-uix-char-counter" data-char-limit="150"><div class="addto-note-box addto-text-box"><textarea id="addto-note" class="addto-note yt-uix-char-counter-input" maxlength="150"></textarea><label for="addto-note" class="addto-note-label">Add an optional note</label></div><span class="yt-uix-char-counter-remaining">150</span></div>    <button class="playlist-save-note yt-uix-button yt-uix-button-hh-default" type="button" onclick=";return false;" disabled="disabled" role="button"><span class="yt-uix-button-content">Add note </span></button>
  </div>
  <div id="addto-note-saving-panel" class="menu-panel">
    <div class="panel-content loading-content">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
      <span>Saving note...</span>
    </div>
  </div>
  <div id="addto-note-saved-panel" class="menu-panel">
    <div class="panel-content">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
      <span class="message">Note added to:</span>
    </div>
  </div>
  <div id="addto-note-error-panel" class="menu-panel">
    <div class="panel-content">
      <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
      <span class="message">Error adding note:</span>
      <ul class="error-details"></ul>
      <a class="add-note-link">Click to add a new note</a>
    </div>
  </div>
  <div class="close-note hid">
    <img src="//web.archive.org/web/20121225000539im_/http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="close-button">
  </div>

  </div>

  </div>
    <script>
if (window.yt.timing) {yt.timing.tick("js_head");}    </script>
  
    <script id="js-1886910086" src="//web.archive.org/web/20121225000539js_/http://s.ytimg.com/yts/jsbin/www-watch7-core-vflzdEjU1.js" data-loaded="true"></script>

  <script>
    yt.setConfig({
      'WATCH_EXTRA_JS': "\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/jsbin\/www-watch7-extra-vflyP-4Kk.js",
      'WATCH_GUIDE_JS': "\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/jsbin\/www-guidev2-vfl72MaxY.js",
      'WATCH_GUIDE_CSS': "\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/cssbin\/www-home-c4-vfl7bPgdG.css",
        'WATCH_CONTEXT_CONTAINER_TEMPLATE': "\u003cdiv id=\"context-source-container\"data-context-source=\"__source__\"data-context-image=\"__image__\"style=\"display:none;\"\u003e\u003c\/div\u003e\u003cdiv class=\"__container_classes__\"\u003e\u003cdiv class=\"guide-module-toggle context-header\"\u003e\u003cspan class=\"guide-module-toggle-icon\"\u003e\u003cspan class=\"guide-module-toggle-arrow\"\u003e\u003c\/span\u003e\u003cimg src=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" alt=\"\"\u003e\u003c\/span\u003e\u003ca class=\"context-back-link yt-uix-sessionlink\" href=\"__back_link__\" data-sessionlink=\"feature=__feature__\u0026amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D\"\u003e\u003cspan class=\"guide-context-image-link\"\u003e\u003cspan class=\"thumb guide-context-image\"\u003e\u003cimg id=\"context-image\" src=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" alt=\"\" data-context-image=\"__image__\"\u003e\u003c\/span\u003e\u003c\/span\u003e\u003cdiv class=\"guide-module-toggle-label\"\u003e\u003ch3 class=\"context-title\"\u003e\u003cspan\u003e__headline__\u003cspan class=\"yt-badge-new\"\u003enew\u003c\/span\u003e\u003c\/span\u003e\u003c\/h3\u003e\u003cspan class=\"placeholder\" title=\"__more_from__\" dir=\"__title_dir__\"\u003e__more_from__\u003c\/span\u003e\u003c\/div\u003e\u003c\/a\u003e\u003c\/div\u003e\u003cdiv class=\"guide-module-content  hid\"\u003e\u003chr class=\"guide-section-separator guide-context-separator-top\"\u003e\u003cul id=\"watch-context-item-list\" class=\"guide-context-item-container context-data-container yt-uix-scroller guide-context-body\" data-context-playing=\"__click_index__\" data-context-open=\"true\" data-context-subsource=\"__subsource__\" data-scroll-action=\"yt.www.watch.context.loadThumbnails\"\u003e__item_list__\u003c\/ul\u003e\u003chr class=\"guide-section-separator guide-context-separator-bottom\"\u003e\u003c\/div\u003e\u003c\/div\u003e",
        'WATCH_CONTEXT_VIDEO_TEMPLATE': "\u003cli class=\"guide-context-item context-data-item context-video yt-uix-scroller-scroll-unit __item_classes__\" data-context-item-type=\"video\" data-context-item-actionverb=\"__action_verb__\" data-context-item-actionuser=\"__action_username__\" data-context-item-time=\"__video_time__\" data-context-item-user=\"__user_name__\" data-context-item-title=\"__video_title__\" data-context-item-id=\"__video_id__\" data-context-item-views=\"__view_count__\"\u003e\u003ca href=\"\/watch?v=__video_id__\" class=\"yt-uix-contextlink yt-uix-sessionlink \" data-sessionlink=\"feature=__feature__\u0026amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D\"\u003e\u003cspan class=\"video-thumb ux-thumb yt-thumb-default-40 context-video-thumb\"\u003e\u003cspan class=\"yt-thumb-clip\"\u003e\u003cspan class=\"yt-thumb-clip-inner\"\u003e\u003cimg src=\"http:\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" data-thumb=\"\/\/i4.ytimg.com\/vi\/__video_id__\/default.jpg\" data-thumb-manual=\"1\" data-group-key=\"guide-context-thumbs\" alt=\"\" width=\"40\" \u003e\u003cspan class=\"vertical-align\"\u003e\u003c\/span\u003e\u003c\/span\u003e\u003c\/span\u003e\u003c\/span\u003e\u003cspan class=\"title\"\u003e__video_title__\u003c\/span\u003e\u003cspan class=\"username\"\u003eby __user_name__\u003c\/span\u003e\u003cspan class=\"viewcount\"\u003e__view_count__\u003c\/span\u003e\u003cspan class=\"action\"\u003e__action_username__ __action_verb__\u003c\/span\u003e\u003c\/a\u003e\u003c\/li\u003e",
        'WATCH_CONTEXT_PLAYLIST_TEMPLATE': "\u003cli class=\"guide-context-item context-data-item context-playlist yt-uix-scroller-scroll-unit __item_classes__\" data-context-item-type=\"playlist\" data-context-item-actionverb=\"__action_verb__\" data-context-item-actionuser=\"__action_username__\" data-context-item-videos=\"[\u0026quot;__playlist_video_id__\u0026quot;]\" data-context-item-count-label=\"__video_count_label__\" data-context-item-user=\"\u0026quot;__user_name__\u0026quot;\" data-context-item-title=\"__playlist_title__\" data-context-item-count=\"__video_count__\" data-context-item-id=\"__playlist_id__\"\u003e\u003ca href=\"\/watch?v=__playlist_video_id__\u0026amp;playnext=1\u0026amp;list=__playlist_id__\" class=\"yt-uix-contextlink yt-uix-sessionlink \" data-sessionlink=\"feature=__feature__\u0026amp;ei=CLqoxJehtLQCFcomRAodb3uW7Q%3D%3D\"\u003e\u003cspan class=\"context-video-thumb yt-pl-thumb\"\u003e\u003cspan class=\"video-thumb ux-thumb yt-thumb-default-40 \"\u003e\u003cspan class=\"yt-thumb-clip\"\u003e\u003cspan class=\"yt-thumb-clip-inner\"\u003e\u003cimg src=\"http:\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" data-thumb=\"\/\/i4.ytimg.com\/vi\/__playlist_video_id__\/default.jpg\" data-thumb-manual=\"1\" data-group-key=\"guide-context-thumbs\" alt=\"\" width=\"40\" \u003e\u003cspan class=\"vertical-align\"\u003e\u003c\/span\u003e\u003c\/span\u003e\u003c\/span\u003e\u003c\/span\u003e  \u003cspan class=\"video-count-wrapper\"\u003e\n    \u003cspan class=\"video-count-block\"\u003e\n      \u003cspan class=\"count-label\"\u003e__video_count__\u003c\/span\u003e\n      \u003cspan class=\"text-label\"\u003e__video_count_label__\u003c\/span\u003e\n    \u003c\/span\u003e\n  \u003c\/span\u003e\n\u003c\/span\u003e\u003cspan class=\"title\"\u003e__playlist_title__\u003c\/span\u003e\u003cspan class=\"username\"\u003eby __user_name__\u003c\/span\u003e\u003cspan class=\"action\"\u003e__action_username__ __action_verb__\u003c\/span\u003e\u003c\/a\u003e\u003c\/li\u003e",
        'WATCH_CONTEXT_GEN204': true,
      'WATCH7_ENABLED': true,
      'WATCH_PROMO_GUIDE': true,
      'WATCH_PROMO_CONTEXT': true,
      'GUIDE_ENABLED': true,
      'GUIDE_EXPANDS_IF_ROOM': null,
      'CONTEXT_EXPANDS_IF_ROOM': null,
      'GUIDE_EXPANDS_ON_NOTIFICATION': false,
      'GUIDE_OR_CONTEXT_EXPAND_IF_ROOM': false,
      'GUIDE_MODULE_STATE_STICKY': false
    });

    yt.setAjaxToken('promo_ajax_token', "R9CRx_YXZgKqo4ZKvBHBvNOWdQF8MTM1NjQ4MDMzOUAxMzU2MzkzOTM5");

      yt.setMsg({
        'WATCH_CONTEXT_MORE_FROM': "More from",
        'WATCH_CONTEXT_MORE_RESULTS': "More results"
      });

    
  </script>

      <script>
      yt.setAjaxToken('subscription_ajax', "");

  </script>


  <script>
    yt.setConfig({
      'VIDEO_ID': "CE0Q904gtMI",
      'RADIO_JS': "\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/jsbin\/www-radio-vflQwnXYf.js",
      'WATCH_LIVECOMMENTS_JS': "\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/jsbin\/www-livecomments-vflciwrOb.js",
      'WATCH_TRANSCRIPT_JS': "\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/jsbin\/www-watch-transcript-vflB-GDIu.js",


      'REPORTVIDEO_JS': "\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/jsbin\/www-reportvideo-vflik8cLN.js",
      'REPORTVIDEO_CSS': "\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/cssbin\/www-watch7-reportvideo-vflFgjmTM.css",


      'ENABLE_AUTO_LARGE': true,
      'ENABLE_ASPECT_RATIO': false    });

      yt.setAjaxToken('guide_channels_ajax', "2i--k4HNXUVuymOItyQv8IuiWLp8MTM1NjQ4MDMzOUAxMzU2MzkzOTM5");
  </script>

  <script>
    yt = yt || {};
      yt.playerConfig = {"args": {"trueview": true, "afv_ad_tag": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/googleads.g.doubleclick.net\/pagead\/ads?description_url=http%3A%2F%2Fwww.youtube.com%2Fvideo%2FCE0Q904gtMI\u0026host=ca-host-pub-4895533112976992\u0026loeid=900080%2C902543\u0026ad_type=skippablevideo\u0026channel=afv_instream%2BVertical_66%2BVertical_74%2BVertical_119%2BVertical_174%2BVertical_563%2BVertical_884%2BVertical_958%2Bafv_instream_us%2Byt_mpvid_AATRohLxgJqpzSKT%2Byt_cid_9101677%2Bivp%2Bytexp_900080.902543.920704.912806.928001.922403.922405.929901.913605.929104.913546.913556.908496.920201.913302.919009.911116.901451.902556%2Bafv_no_adsense%2Bytdevice_1%2Bytps_default%2Bytel_detailpage\u0026max_ad_duration=15000\u0026video_cpm=6000000\u0026client=ca-pub-6219811747049371\u0026ytdevice=1\u0026hl=en", "cid": 9101677, "no_afv_instream": "1", "tk": "7BOtYkUG-p15Abrcotpx9LYvqQMFHC_U85qj2DQDSh1ya4pnxfCD8Q==", "cr": "US", "adsense_video_doc_id": "yt_CE0Q904gtMI", "shortform": true, "loeid": "900080,902543", "ad_flags": 0, "prefetch_ad_live_stream": true, "t": "vjVQa1PpcFO0OUxxu-1luOkpNU5PUw1vvUQw1X9ia7Y=", "excluded_ads": "0=1_2_1", "afv": true, "ad3_module": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/swfbin\/ad3-vfllNiPD9.swf", "ad_slots": "0", "allow_embed": 1, "ad_eurl": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/www.youtube.com\/video\/CE0Q904gtMI", "sourceid": "y", "ad_host": "ca-host-pub-4895533112976992", "afv_video_min_cpm": 6000000, "ptk": "youtube_multi", "autohide": "2", "sendtmp": "1", "url_encoded_fmt_stream_map": "itag=45\u0026quality=hd720\u0026sig=4E3904215C48354823B9778E6A3DD68C5BCB5DF1.100E37B552FCEB96D98CC413CD619233A4B57B7F\u0026fallback_host=tc.v6.cache8.c.youtube.com\u0026url=http%3A%2F%2Fr15---sn-nwj7knek.c.youtube.com%2Fvideoplayback%3Fitag%3D45%26expire%3D1356417209%26ipbits%3D8%26newshard%3Dyes%26ip%3D207.241.226.239%26key%3Dyt1%26ratebypass%3Dyes%26cp%3DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%26sver%3D3%26gcr%3Dus%26fexp%3D902543%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26id%3D084d10f74e20b4c2%26sparams%3Dcp%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Cratebypass%252Csource%252Cupn%252Cexpire%26source%3Dyoutube%26ms%3Dau%26mv%3Dm%26upn%3DS-4xdVhdCBU%26mt%3D1356393909\u0026type=video%2Fwebm%3B+codecs%3D%22vp8.0%2C+vorbis%22,itag=22\u0026quality=hd720\u0026sig=69E196AF7F8BFBA3757372340AE9896F7CF0CDC0.A7ACCD3044B711BE1F2DAE38CD527139663C9C2B\u0026fallback_host=tc.v19.cache2.c.youtube.com\u0026url=http%3A%2F%2Fr15---sn-nwj7knek.c.youtube.com%2Fvideoplayback%3Fitag%3D22%26expire%3D1356417209%26ipbits%3D8%26newshard%3Dyes%26ip%3D207.241.226.239%26key%3Dyt1%26ratebypass%3Dyes%26cp%3DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%26sver%3D3%26gcr%3Dus%26fexp%3D902543%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26id%3D084d10f74e20b4c2%26sparams%3Dcp%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Cratebypass%252Csource%252Cupn%252Cexpire%26source%3Dyoutube%26ms%3Dau%26mv%3Dm%26upn%3DS-4xdVhdCBU%26mt%3D1356393909\u0026type=video%2Fmp4%3B+codecs%3D%22avc1.64001F%2C+mp4a.40.2%22,itag=44\u0026quality=large\u0026sig=B44DDF86A490D96D7E04AF6D2AE5FBE262D2D743.8A9EBC82480C6707ECC6549E7CC63C16CEE72D5A\u0026fallback_host=tc.v22.cache1.c.youtube.com\u0026url=http%3A%2F%2Fr15---sn-nwj7knek.c.youtube.com%2Fvideoplayback%3Fitag%3D44%26expire%3D1356417209%26ipbits%3D8%26newshard%3Dyes%26ip%3D207.241.226.239%26key%3Dyt1%26ratebypass%3Dyes%26cp%3DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%26sver%3D3%26gcr%3Dus%26fexp%3D902543%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26id%3D084d10f74e20b4c2%26sparams%3Dcp%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Cratebypass%252Csource%252Cupn%252Cexpire%26source%3Dyoutube%26ms%3Dau%26mv%3Dm%26upn%3DS-4xdVhdCBU%26mt%3D1356393909\u0026type=video%2Fwebm%3B+codecs%3D%22vp8.0%2C+vorbis%22,itag=35\u0026quality=large\u0026sig=9863AE89BC39FC7EA7FD665A20C119E0ADD528EF.1B1CD7249B8875F96B7527F0CA5D6E80E2ABD714\u0026fallback_host=tc.v15.cache7.c.youtube.com\u0026url=http%3A%2F%2Fr15---sn-nwj7knek.c.youtube.com%2Fvideoplayback%3Fitag%3D35%26expire%3D1356417209%26ipbits%3D8%26factor%3D1.25%26newshard%3Dyes%26ip%3D207.241.226.239%26key%3Dyt1%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26sver%3D3%26burst%3D40%26cp%3DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%26id%3D084d10f74e20b4c2%26fexp%3D902543%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26gcr%3Dus%26algorithm%3Dthrottle-factor%26ms%3Dau%26mv%3Dm%26upn%3DS-4xdVhdCBU%26source%3Dyoutube%26mt%3D1356393909\u0026type=video%2Fx-flv,itag=43\u0026quality=medium\u0026sig=5BF61EDB209D6617A776182B0F3E885BBD6FE70C.B4343933AA5315FB6AC53F34182B910678B7E3CB\u0026fallback_host=tc.v5.cache7.c.youtube.com\u0026url=http%3A%2F%2Fr15---sn-nwj7knek.c.youtube.com%2Fvideoplayback%3Fitag%3D43%26expire%3D1356417209%26ipbits%3D8%26newshard%3Dyes%26ip%3D207.241.226.239%26key%3Dyt1%26ratebypass%3Dyes%26cp%3DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%26sver%3D3%26gcr%3Dus%26fexp%3D902543%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26id%3D084d10f74e20b4c2%26sparams%3Dcp%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Cratebypass%252Csource%252Cupn%252Cexpire%26source%3Dyoutube%26ms%3Dau%26mv%3Dm%26upn%3DS-4xdVhdCBU%26mt%3D1356393909\u0026type=video%2Fwebm%3B+codecs%3D%22vp8.0%2C+vorbis%22,itag=34\u0026quality=medium\u0026sig=B7826FE0B38BA46BF9023321C0E299B1CD352FA2.934F172DB6BACAEEB1746101409ED05E450A0606\u0026fallback_host=tc.v14.cache4.c.youtube.com\u0026url=http%3A%2F%2Fr15---sn-nwj7knek.c.youtube.com%2Fvideoplayback%3Fitag%3D34%26expire%3D1356417209%26ipbits%3D8%26factor%3D1.25%26newshard%3Dyes%26ip%3D207.241.226.239%26key%3Dyt1%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26sver%3D3%26burst%3D40%26cp%3DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%26id%3D084d10f74e20b4c2%26fexp%3D902543%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26gcr%3Dus%26algorithm%3Dthrottle-factor%26ms%3Dau%26mv%3Dm%26upn%3DS-4xdVhdCBU%26source%3Dyoutube%26mt%3D1356393909\u0026type=video%2Fx-flv,itag=18\u0026quality=medium\u0026sig=6D51F591D40D1C9845CECEACC14670B2B6615584.0764791427B67EB071149054F20002F2E9036814\u0026fallback_host=tc.v23.cache5.c.youtube.com\u0026url=http%3A%2F%2Fr15---sn-nwj7knek.c.youtube.com%2Fvideoplayback%3Fitag%3D18%26expire%3D1356417209%26ipbits%3D8%26newshard%3Dyes%26ip%3D207.241.226.239%26key%3Dyt1%26ratebypass%3Dyes%26cp%3DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%26sver%3D3%26gcr%3Dus%26fexp%3D902543%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26id%3D084d10f74e20b4c2%26sparams%3Dcp%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Cratebypass%252Csource%252Cupn%252Cexpire%26source%3Dyoutube%26ms%3Dau%26mv%3Dm%26upn%3DS-4xdVhdCBU%26mt%3D1356393909\u0026type=video%2Fmp4%3B+codecs%3D%22avc1.42001E%2C+mp4a.40.2%22,itag=5\u0026quality=small\u0026sig=8B39B1524C08E6E34D9DFD29ED5EA2FE6FBB97AF.1C999CE8DF0A6059CB1498B541BD9D123DC7F30A\u0026fallback_host=tc.v4.cache5.c.youtube.com\u0026url=http%3A%2F%2Fr15---sn-nwj7knek.c.youtube.com%2Fvideoplayback%3Fitag%3D5%26expire%3D1356417209%26ipbits%3D8%26factor%3D1.25%26newshard%3Dyes%26ip%3D207.241.226.239%26key%3Dyt1%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26sver%3D3%26burst%3D40%26cp%3DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%26id%3D084d10f74e20b4c2%26fexp%3D902543%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26gcr%3Dus%26algorithm%3Dthrottle-factor%26ms%3Dau%26mv%3Dm%26upn%3DS-4xdVhdCBU%26source%3Dyoutube%26mt%3D1356393909\u0026type=video%2Fx-flv,itag=36\u0026quality=small\u0026sig=76A387CB89354F27C57AFF70EEBBED0323E4C691.AEFE4B1120AFD720F1C8B917B48A3658A4FEFFC0\u0026fallback_host=tc.v16.cache4.c.youtube.com\u0026url=http%3A%2F%2Fr15---sn-nwj7knek.c.youtube.com%2Fvideoplayback%3Fitag%3D36%26expire%3D1356417209%26ipbits%3D8%26factor%3D1.25%26newshard%3Dyes%26ip%3D207.241.226.239%26key%3Dyt1%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26sver%3D3%26burst%3D40%26cp%3DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%26id%3D084d10f74e20b4c2%26fexp%3D902543%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26gcr%3Dus%26algorithm%3Dthrottle-factor%26ms%3Dau%26mv%3Dm%26upn%3DS-4xdVhdCBU%26source%3Dyoutube%26mt%3D1356393909\u0026type=video%2F3gpp%3B+codecs%3D%22mp4v.20.3%2C+mp4a.40.2%22,itag=17\u0026quality=small\u0026sig=92FF61CD5ACBDFBD6F41D4F47CA293FD17CD6602.C15C7528BBC3D6F563FBF3E2C3A74E4338FCC850\u0026fallback_host=tc.v13.cache5.c.youtube.com\u0026url=http%3A%2F%2Fr15---sn-nwj7knek.c.youtube.com%2Fvideoplayback%3Fitag%3D17%26expire%3D1356417209%26ipbits%3D8%26factor%3D1.25%26newshard%3Dyes%26ip%3D207.241.226.239%26key%3Dyt1%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cgcr%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26sver%3D3%26burst%3D40%26cp%3DU0hUS1RMVV9FU0NONF9MRllDOnprY2hNeW5KRXFo%26id%3D084d10f74e20b4c2%26fexp%3D902543%252C920704%252C912806%252C928001%252C922403%252C922405%252C929901%252C913605%252C929104%252C913546%252C913556%252C908496%252C920201%252C913302%252C919009%252C911116%252C901451%252C902556%26gcr%3Dus%26algorithm%3Dthrottle-factor%26ms%3Dau%26mv%3Dm%26upn%3DS-4xdVhdCBU%26source%3Dyoutube%26mt%3D1356393909\u0026type=video%2F3gpp%3B+codecs%3D%22mp4v.20.3%2C+mp4a.40.2%22", "keywords": "Eagle,Attack,Predator,Kidnapping,Animal,Wild,Montreal,Baby,Park,Bird,Mont-Royal,Hunt,Fail,Epic Fail,Golden Eagle,Aigle,Enfant,2012,Kid,Aigle Royal,Birds,Wildlife", "ad_host_tier": null, "ad_channel_code_overlay": "invideo_overlay_480x70_cat15,afv_overlay,Vertical_66,Vertical_74,Vertical_119,Vertical_174,Vertical_563,Vertical_884,Vertical_958,yt_mpvid_AATRohLxgJqpzSKT,yt_cid_9101677,ivp,ytexp_900080.902543.920704.912806.928001.922403.922405.929901.913605.929104.913546.913556.908496.920201.913302.919009.911116.901451.902556,afv_no_adsense,ytdevice_1,ytps_default,ytel_detailpage", "mpvid": "AATRohLxgJqpzSKT", "hl": "en_US", "showpopout": 1, "account_playback_token": "", "csi_page_type": "watch7ad", "inactive_skippable_threshold": 600000, "ad_channel_code_instream": "afv_instream,Vertical_66,Vertical_74,Vertical_119,Vertical_174,Vertical_563,Vertical_884,Vertical_958,afv_instream_us,yt_mpvid_AATRohLxgJqpzSKT,yt_cid_9101677,ivp,ytexp_900080.902543.920704.912806.928001.922403.922405.929901.913605.929104.913546.913556.908496.920201.913302.919009.911116.901451.902556,afv_no_adsense,ytdevice_1,ytps_default,ytel_detailpage", "afv_ad_tag_restricted_to_instream": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/googleads.g.doubleclick.net\/pagead\/ads?description_url=http%3A%2F%2Fwww.youtube.com%2Fvideo%2FCE0Q904gtMI\u0026host=ca-host-pub-4895533112976992\u0026loeid=900080%2C902543\u0026ad_type=skippablevideo\u0026channel=afv_instream%2BVertical_66%2BVertical_74%2BVertical_119%2BVertical_174%2BVertical_563%2BVertical_884%2BVertical_958%2Bafv_instream_us%2Byt_mpvid_AATRohLxgJqpzSKT%2Byt_cid_9101677%2Bivp%2Bytexp_900080.902543.920704.912806.928001.922403.922405.929901.913605.929104.913546.913556.908496.920201.913302.919009.911116.901451.902556%2Bafv_no_adsense%2Bytdevice_1%2Bytps_default%2Bytel_detailpage\u0026max_ad_duration=15000\u0026video_cpm=6000000\u0026client=ca-pub-6219811747049371\u0026ytdevice=1\u0026hl=en", "pyv_in_related_cafe_experiment_id": "", "rvs": "id=gYm9vCPLoG4\u0026author=TodayTonight\u0026view_count=1%2C780%2C645\u0026title=Unbelievable+road+rage+attack\u0026length_seconds=502,id=VklTs-Tid_I\u0026author=Ianrhys1958\u0026view_count=3%2C913%2C945\u0026title=golden-eagle-drags-goats-off-cliff\u0026length_seconds=439,id=guoJUqc_Jtc\u0026author=NateTalksToYou\u0026view_count=44%2C924\u0026title=Golden+Eagle+Snatches+Kid+FAKE+%28Eagle+Picks+Up+Baby+Hoax%29\u0026length_seconds=86,id=xhgkEdWq8JE\u0026author=Newsforthenation1\u0026view_count=70%2C890\u0026title=Golden+Eagle+Snatches+A+BABY+%7C+Is+Video+Real+or+Fake+%3F+Debate+on+GMA+Good+Morning+America\u0026length_seconds=130,id=-iFOVi0vJGU\u0026author=mydirtreport2\u0026view_count=805%2C533\u0026title=Eagle+throws+goat+off+cliff+to+its+death\u0026length_seconds=175,id=BWAK0J8Uhzk\u0026author=TheDrivingDogs\u0026view_count=7%2C570%2C517\u0026title=Meet+Porter.+The+World%27s+First+Driving+Dog.\u0026length_seconds=108,id=5wwvPLPntZk\u0026author=Ray+Phister\u0026view_count=5%2C281%2C453\u0026title=Eagle+Catches+Fox+and+Wolf\u0026length_seconds=328,id=VF6cmddWOgU\u0026author=TheFineBros\u0026view_count=3%2C668%2C975\u0026title=Teens+React+to+Bullying+%28Amanda+Todd%29\u0026length_seconds=883,id=j7Of_2ykZpQ\u0026author=dogstar7\u0026view_count=918%2C034\u0026title=Epic+Win%21+Jason+beats+Westboro+Baptist+Church+with+a+Fund-Raiser+at+their+protest%21\u0026length_seconds=118,id=XafAdkZIYKA\u0026author=Queen+Ellen\u0026view_count=3%2C955%2C343\u0026title=EAGLE+VS.+MOUNTAIN+GOAT%3A+AMAZING+FOOTAGE%21+FULL+CLIP%2C+HI-DEF\u0026length_seconds=174,id=D7ZFLuZqCXc\u0026author=Israel+Feiler\u0026view_count=1%2C541%2C603\u0026title=Golden+Eagle+Attacks+A+Boy\u0026length_seconds=75,id=PQJvtZ9PxxE\u0026author=kupfertyp\u0026view_count=1%2C433%2C198\u0026title=Insane+Skydiver\u0026length_seconds=40", "plid": "AATRohLxOybMHMWw", "watermark": ",http:\/\/s.ytimg.com\/yts\/img\/watermark\/youtube_watermark-vflHX6b6E.png,http:\/\/s.ytimg.com\/yts\/img\/watermark\/youtube_hd_watermark-vflAzLcD6.png", "sdetail": "p:\/embed\/CE0Q904gtMI", "no_get_video_log": "1", "afv_instream_max": 15000, "referrer": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/www.youtube.com\/embed\/CE0Q904gtMI", "enablejsapi": 1, "gut_tag": "\/4061\/ytunknown\/main", "host_language": "en", "title": "Golden Eagle Snatches Kid", "vq": "auto", "as_launched_in_country": "1", "cafe_experiment_id": "", "yt_pt": "AD1B29krgCqacknZuck-kSBYdRdo2QAZc47Y3A_G1ERbS7AByXObHDmlqjedl6K3wAmfFDufAmc_MuXaxd_wqmNI762geW1C9_kPzM217locbzooSKCMRz-p7jefnmioo8HsSrZzNNGMePMMNJWS", "length_seconds": 60, "enablecsi": "1", "pltype": "content", "ad_logging_flag": 1, "aftv": true, "tmi": "1", "fmt_list": "45\/1280x720\/99\/0\/0,22\/1280x720\/9\/0\/115,44\/854x480\/99\/0\/0,35\/854x480\/9\/0\/115,43\/640x360\/99\/0\/0,34\/640x360\/9\/0\/115,18\/640x360\/9\/0\/115,5\/320x240\/7\/0\/0,36\/320x240\/99\/0\/0,17\/176x144\/99\/0\/0", "ad_device": 1, "video_id": "CE0Q904gtMI", "fexp": "902543,920704,912806,928001,922403,922405,929901,913605,929104,913546,913556,908496,920201,913302,919009,911116,901451,902556", "video_wall": 1, "is_html5_mobile_device": false, "sk": "8NFMJa5fwf1ld96bK_ux5Lryxv7xnq6cC", "abd": "1", "ad_video_pub_id": "ca-pub-6219811747049371", "sffb": true, "afv_inslate_ad_tag": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/googleads.g.doubleclick.net\/pagead\/ads?description_url=http%3A%2F%2Fwww.youtube.com%2Fvideo%2FCE0Q904gtMI\u0026host=ca-host-pub-4895533112976992\u0026loeid=900080%2C902543\u0026ad_type=userchoice\u0026max_ad_duration=15000\u0026client=ca-pub-6219811747049371\u0026ytdevice=1\u0026hl=en", "endscreen_module": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/swfbin\/endscreen-vflW8uRdM.swf", "storyboard_spec": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/i4.ytimg.com\/sb\/CE0Q904gtMI\/storyboard3_L$L\/$N.jpg|48#27#100#10#10#0#default#2Y4WPQs_elrd-ZAS5cfqq6Ikh5k|80#45#61#10#10#1000#M$M#pmRuN4I7ce8hCJknKDZeqjkSr_k|160#90#61#5#5#1000#M$M#xDs98s0SM8AIQu4PiaL4LDIyXh0", "oid": "o7a9Jsj77NoHmLCu-eZ2Ig", "timestamp": 1356393939, "ad_preroll": "1"}, "min_version": "8.0.0", "assets": {"js": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/jsbin\/html5player-vflppn5jI.js", "css": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/cssbin\/www-player-vfl95jqbw.css", "html": "\/html5_player_template", "css_actions": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/cssbin\/www-player-actions-vflBv1HfX.css"}, "html5": false, "url_v8": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/swfbin\/cps-vflsW5I5F.swf", "attrs": {"id": "movie_player"}, "url_v9as2": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/swfbin\/cps-vflsW5I5F.swf", "params": {"bgcolor": "#000000", "allowfullscreen": "true", "allowscriptaccess": "always"}, "url": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/swfbin\/watch_as3_hh-vfleHfpd4.swf"};
      yt.setConfig({
    'EMBED_HTML_TEMPLATE': "\u003ciframe width=\"__width__\" height=\"__height__\" src=\"__url__\" frameborder=\"0\" allowfullscreen\u003e\u003c\/iframe\u003e",
    'EMBED_HTML_URL': "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/www.youtube.com\/embed\/__videoid__"
  });
    yt.setMsg('FLASH_UPGRADE', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            You need to upgrade your Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");
  yt.setMsg('PLAYER_FALLBACK', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            The Adobe Flash Player or an HTML5 supported browser is required for video playback. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eGet the latest Flash Player\u003c\/a\u003e \u003cbr\u003e \u003ca href=\"\/html5\"\u003eLearn more about upgrading to an HTML5 browser\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");
  yt.setMsg('QUICKTIME_FALLBACK', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            The Adobe Flash Player or QuickTime is required for video playback. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eGet the latest Flash Player\u003c\/a\u003e \u003cbr\u003e \u003ca href=\"http:\/\/www.apple.com\/quicktime\/download\/\"\u003eGet the latest version of QuickTime\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");


  </script>

  <script>
    yt.setConfig({
      'SUBSCRIBE_AXC': "",
      'IS_OWNER_VIEWING': null,
      'IS_WIDESCREEN': true,
      'PREFER_LOW_QUALITY': false,
      'ALLOW_EMBED': true,
      'ALLOW_RATINGS': true,
      'YPC_CAN_RATE_VIDEO': true,
      'YPC_SHOW_VPPA_CONFIRM_RATING': false,










      'ADS_DATA': {"gut_vars": {"tag": "\/4061\/ytunknown\/main"}, "show_afv": true, "use_gut": true, "show_pyv": true, "pyv_vars": {"iframe_json": "{\"google_ad_host\": \"ca-host-pub-4895533112976992\", \"google_only_pyv_ads\": true, \"google_loeid\": \"900080,902543\", \"google_yt_pt\": \"AD1B29krgCqacknZuck-kSBYdRdo2QAZc47Y3A_G1ERbS7AByXObHDmlqjedl6K3wAmfFDufAmc_MuXaxd_wqmNI762geW1C9_kPzM217locbzooSKCMRz-p7jefnmioo8HsSrZzNNGMePMMNJWS\", \"google_ad_client\": \"ca-pub-6219811747049371\", \"google_video_doc_id\": \"yt_CE0Q904gtMI\", \"google_max_num_ads\": 1, \"google_language\": \"en\", \"google_ad_type\": \"text\", \"google_ad_host_tier_id\": null, \"google_ad_output\": \"js\", \"google_ad_block\": \"3\", \"google_page_url\": \"http:\\\/\\\/www.youtube.com\\\/video\\\/CE0Q904gtMI\", \"google_ad_channel\": \"PyvWatchInRelated+PyvYTWatch+PyvWatchNoAdX+pw+non_lpw+yt_mpvid_AATRohLxgJqpzSKT+yt_cid_9101677+ivp+ytexp_900080.902543.920704.912806.928001.922403.922405.929901.913605.929104.913546.913556.908496.920201.913302.919009.911116.901451.902556+afv_no_adsense+ytdevice_1\"}"}, "show_instream": true, "show_afc": false, "afc_vars": {"format": "300x250_as", "video_doc_id": "yt_CE0Q904gtMI", "ad_host": "ca-host-pub-4895533112976992", "ad_client": "ca-pub-6219811747049371", "ad_host_tier_id": null, "ad_channel": "9954876678+9954876672+0854550287+yt_mpvid_AATRohLxgJqpzSKT+yt_cid_9101677+ivp+ytexp_900080.902543.920704.912806.928001.922403.922405.929901.913605.929104.913546.913556.908496.920201.913302.919009.911116.901451.902556+afv_no_adsense+ytdevice_1+Vertical_66+Vertical_74+Vertical_119+Vertical_174+Vertical_563+Vertical_884+Vertical_958+ytps_default+ytel_detailpage+afc_on_page", "language": "en", "ad_type": "image", "ad_block": "2", "alternate_ad_url": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/www.youtube.com\/ad_frame?id=watch-channel-brand-div"}, "afv_vars": {"google_ad_host": "ca-host-pub-4895533112976992", "google_ad_height": "250", "google_video_doc_id": "yt_CE0Q904gtMI", "google_ad_client": "ca-pub-6219811747049371", "google_alternate_ad_url": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/www.youtube.com\/ad_frame?id=watch-channel-brand-div", "google_ad_type": "image", "google_ad_block": "2", "google_ad_channel": "9954876678+9954876672+0854550288+yt_mpvid_AATRohLxgJqpzSKT+yt_cid_9101677+ivp+ytexp_900080.902543.920704.912806.928001.922403.922405.929901.913605.929104.913546.913556.908496.920201.913302.919009.911116.901451.902556+afv_no_adsense+ytdevice_1+Vertical_66+Vertical_74+Vertical_119+Vertical_174+Vertical_563+Vertical_884+Vertical_958+ytps_default+ytel_detailpage", "google_loeid": "900080,902543", "google_ad_format": "300x250_as", "google_ad_host_tier_id": null, "google_language": "en", "google_yt_pt": "AD1B29krgCqacknZuck-kSBYdRdo2QAZc47Y3A_G1ERbS7AByXObHDmlqjedl6K3wAmfFDufAmc_MuXaxd_wqmNI762geW1C9_kPzM217locbzooSKCMRz-p7jefnmioo8HsSrZzNNGMePMMNJWS", "google_page_url": "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/www.youtube.com\/video\/CE0Q904gtMI"}, "show_companion": true},
      'PLAYBACK_ID': "AATRohLxOybMHMWw",
      'PLAY_ALL_MAX': 480,
      'IN_SIGNED_OUT_ACTION_PROMO_1': false,
      'IN_SIGNED_OUT_ACTION_PROMO_2': false    });

    yt.setMsg({
      'LOADING': "Loading..."    });

      yt.setMsg({
    'UNBLOCK_USER': "Are you sure you want to unblock this user?",
    'BLOCK_USER': "Are you sure you want to block this user?"
  });
  yt.setConfig('BLOCK_USER_AJAX_XSRF', '');


      
  yt.setConfig({
    'COMMENTS_SIGNIN_URL': "https:\/\/web.archive.org\/web\/20121225000539\/https:\/\/accounts.google.com\/ServiceLogin?uilel=3\u0026service=youtube\u0026continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dcomments%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DCE0Q904gtMI%26nomobiletemp%3D1\u0026passive=true\u0026hl=en_US",
    'COMMENTS_THRESHHOLD': -5,
    'COMMENTS_PAGE_SIZE': 10,
    'COMMENTS_COUNT': 40143,
    'COMMENTS_YPC_CAN_POST_OR_REACT_TO_COMMENT': true,
    'COMMENT_SOURCE': "w",
    'COMMENT_OPEN_REPLY_BOX' : false  });

  yt.setAjaxToken('link_ajax', "");
  yt.setAjaxToken('comment_servlet', "");
  yt.setAjaxToken('comment_voting', "");

  yt.setMsg({
    'CHARACTERS_REMAINING': {"other": "# characters remaining", "case0": "No characters remaining", "case1": "1 character remaining"},
    'COMMENT_OK': "OK",
    'COMMENT_BLOCKED': "You have been blocked by the owner of this video.",
    'COMMENT_CAPTCHAFAIL': "The response to the letters on the image was not correct, please try again.",
    'COMMENT_PENDING': "Comment Pending Approval!",
    'COMMENT_ERROR_EMAIL': "Error, account unverified (see email)",
    'COMMENT_ERROR': "Error, try again",
    'COMMENT_FAILED_MAINTENANCE': "We're currently performing site maintenace, please try later.",
    'COMMENT_OWNER_LINKING': "Comments can't contain links, please put the link in your video description and refer to it in the comment.",
    'SECONDS_REMAINING': {"other": "# seconds remaining before you can post", "case0": "You can post again", "case1": "1 second remaining before you can post"}
  });


      yt.setConfig({
    'ENABLE_LIVE_COMMENTS': true,
    'WATCH_LIVECOMMENTS_JS': "\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/jsbin\/www-livecomments-vflciwrOb.js",
    'COMMENTS_VIDEO_ID': "CE0Q904gtMI",
    'COMMENTS_LATEST_TIMESTAMP': 1356393852,
    'COMMENTS_POLLING_INTERVAL': 15000,
    'COMMENTS_FORCE_SCROLLING': false,
    'COMMENTS_PAGE_SIZE': 10  });

  yt.setMsg({
    'LC_COUNT_NEW_COMMENTS': "\u003ca href=\"#\" onclick=\"yt.www.watch.livecomments.showNewComments(); return false;\"\u003eShow $count new comments.\u003c\/a\u003e"
  });





    









    
  </script>


<script>yt.setConfig({'EVENT_ID': "CLqoxJehtLQCFcomRAodb3uW7Q==",'LOGGED_IN': false,'SESSION_INDEX': null,'CURRENT_URL': "https:\/\/web.archive.org\/web\/20121225000539\/http:\/\/www.youtube.com\/watch?v=CE0Q904gtMI",'WATCH_CONTEXT_CLIENTSIDE': true,'FEEDBACK_BUCKET_ID': "Watch",'FEEDBACK_LOCALE_LANGUAGE': "en",'FEEDBACK_LOCALE_EXTRAS': {"logged_in": false, "experiments": "902543,920704,912806,928001,922403,922405,929901,913605,929104,913546,913556,908496,920201,913302,919009,911116,901451,902556", "guide_subs": 8, "accept_language": null}});yt.setMsg({'ADDTO_WATCH_LATER_ADDED': "Added",'ADDTO_WATCH_LATER_ERROR': "Error"});yt.setAjaxToken('addto_ajax_logged_out', "uqcWmbZL0wdFcWfiC_u6AklFmLR8MTM1NjQ4MDMzOUAxMzU2MzkzOTM5");  yt.setConfig('FEED_PRIVACY_CSS_URL', "\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/cssbin\/www-feedprivacydialog-vfl_3sjoJ.css");
  yt.setAjaxToken('feed_privacy_ajax', "");
    yt.setConfig('FEED_PRIVACY_LIGHTBOX_ENABLED', true);
yt.setConfig({'SBOX_JS_URL': "\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/jsbin\/www-searchbox-vflMOcX4x.js",'SBOX_SETTINGS': {"REQUEST_LANGUAGE": "en", "SESSION_INDEX": null, "EXPERIMENT_ID": -1, "CHIP_PARAMETERS": {}, "REQUEST_DOMAIN": "us", "SHOW_CHIP": false, "CLOSE_ICON_URL": "\/\/web.archive.org\/web\/20121225000539\/http:\/\/s.ytimg.com\/yts\/img\/icons\/close-vflrEJzIW.png", "HAS_ON_SCREEN_KEYBOARD": false, "PSUGGEST_TOKEN": null, "IS_HH": true},'SBOX_LABELS': {"SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed", "SUGGESTION_DISMISS_LABEL": "Dismiss"}});</script>    <script>
if (window.yt.timing) {yt.timing.tick("js_page");}    </script>
    <script>
yt.setConfig('TIMING_ACTION', "watch7ad");    </script>
<script>yt.setConfig({'XSRF_TOKEN': "uRgKw2yuA8QwJzXkrL12XN92Owp8MTM1NjQ4MDMzOUAxMzU2MzkzOTM5",'XSRF_REDIRECT_TOKEN': "cTRNcGRQlS1Lyr4518Kv2Hr_WNh8MTM1NjQ4MDMzOUAxMzU2MzkzOTM5",'XSRF_FIELD_NAME': "session_token"});</script><script>yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 0);</script>    <script>
if (window.yt.timing) {yt.timing.tick("js_foot");}    </script>
<div id="debug"></div>
<iframe frameborder="0" src="javascript:&quot;&quot;" style="border: 0px; vertical-align: bottom; display: none;" allow="autoplay 'self'; fullscreen 'self'"></iframe></body></html>