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
<html lang="en" dir="ltr"><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><!-- machid: pVGQ2bk04cmgyVkxxUFZ5RGJlTVRlb1dwTXVvZGdHMng5R2k5b3BjYXl4aHg4UFRqeXpTbUNB --><head><script src="//archive.org/includes/athena.js" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app220.us.archive.org';v.server_ms=1243;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="/_static/js/bundle-playback.js?v=HxkREWBo" charset="utf-8"></script>
<script type="text/javascript" src="/_static/js/wombat.js?v=txqj7nKC" charset="utf-8"></script>
<script type="text/javascript">
    __wm.init("https://web.archive.org/web");
  __wm.wombat("http://www.youtube.com/watch?v=mqCeTFO0fr8&amp;gl=US&amp;hl=en&amp;amp;has_verified=1","20110825084108","https://web.archive.org/","web","/_static/",
	      "1314261668");
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
var yt = yt || {};yt.timing = yt.timing || {};yt.timing.tick = function(label, opt_time) {var timer = yt.timing['timer'] || {};if(opt_time) {timer[label] = opt_time;}else {timer[label] = new Date().getTime();}yt.timing['timer'] = timer;};yt.timing.info = function(label, value) {var info_args = yt.timing['info_args'] || {};info_args[label] = value;yt.timing['info_args'] = info_args;};yt.timing.info('e', '914025,913103,910207');yt.timing.wff = true;yt.timing.info('pr', '1');yt.timing.info('an', 'dclk,aftv,afv');yt.timing.tick('start');yt.timing.info('li','0');try {yt.timing['srt'] = window.gtbExternal && window.gtbExternal.pageT() ||window.external && window.external.pageT;} catch(e) {}if (window.chrome && window.chrome.csi) {yt.timing['srt'] = Math.floor(window.chrome.csi().pageT);}if (window.msPerformance && window.msPerformance.timing) {yt.timing['srt'] = window.msPerformance.timing.responseStart - window.msPerformance.timing.navigationStart;}    </script>

    <script>
      var yt = yt || {};
      yt.preload = {};
      yt.preload.start = function() {
        var img = new Image();
        yt.preload.videoConnection = img;
        img.onload = img.onerror = function () {
          delete yt.preload.videoConnection;
        };
        img.src = "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/o-o.preferred.sjc07s15.v1.lscache4.c.youtube.com\/generate_204?sparams=id%2Cexpire%2Cip%2Cipbits%2Citag%2Cratebypass\u0026fexp=914025%2C913103%2C910207\u0026itag=43\u0026ip=207.0.0.0\u0026signature=1F92A549898DC220ECD98DF2305A00EFA2438615.D026D8CD5258BC7CE48D15F36C73065802C40E96\u0026sver=3\u0026ratebypass=yes\u0026expire=1314284400\u0026key=yt1\u0026ipbits=8\u0026id=9aa09e4c53b47ebf";
        img = null;
      };
      yt.preload.start();
    </script>

    <title>
        I want to be in the circus!
      - YouTube
  </title>

    
  <link rel="search" type="application/opensearchdescription+xml" href="https://web.archive.org/web/20110825084108/http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search">
  <link rel="icon" href="https://web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/favicon-vflZlzSbU.ico" type="image/x-icon">
  <link rel="shortcut icon" href="https://web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/favicon-vflZlzSbU.ico" type="image/x-icon">     <link rel="canonical" href="/web/20110825084108/http://www.youtube.com/watch?v=mqCeTFO0fr8">
    <link rel="alternate" media="handheld" href="https://web.archive.org/web/20110825084108/http://m.youtube.com/watch?has_verified=1&amp;desktop_uri=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DmqCeTFO0fr8%26gl%3DUS%26hl%3Den%26amp%3Bhas_verified%3D1&amp;hl=en&amp;v=mqCeTFO0fr8&amp;amp=&amp;gl=US">
    <link rel="shortlink" href="https://web.archive.org/web/20110825084108/http://youtu.be/mqCeTFO0fr8">
      <meta name="title" content="I want to be in the circus!">


      <meta name="description" content="I'm not fat! I'm just gravity generous.">


      <meta name="keywords" content="Shaycarl, shaytards, weight, loss, exercise, fitness, workout, muscle, body, bodybuilding, health, training, lose, gym, bodybuilder, muscles, personal, flex,...">


      <link rel="alternate" type="application/json+oembed" href="https://web.archive.org/web/20110825084108/http://www.youtube.com/oembed?url=http%3A//www.youtube.com/watch?v%3DmqCeTFO0fr8&amp;format=json" title="I want to be in the circus!">
  <link rel="alternate" type="text/xml+oembed" href="https://web.archive.org/web/20110825084108/http://www.youtube.com/oembed?url=http%3A//www.youtube.com/watch?v%3DmqCeTFO0fr8&amp;format=xml" title="I want to be in the circus!">

    <meta property="fb:app_id" content="87741124305">
  <meta property="og:url" content="https://web.archive.org/web/20110825084108/http://www.youtube.com/watch?v=mqCeTFO0fr8">
  <meta property="og:title" content="I want to be in the circus!">
  <meta property="og:description" content="I'm not fat! I'm just gravity generous.">
  <meta property="og:type" content="video">
  <meta property="og:image" content="https://web.archive.org/web/20110825084108im_/http://i2.ytimg.com/vi/mqCeTFO0fr8/default.jpg">
  <meta property="og:video" content="https://web.archive.org/web/20110825084108/http://www.youtube.com/v/mqCeTFO0fr8?version=3&amp;autohide=1">
  <meta property="og:video:type" content="application/x-shockwave-flash">
    <meta property="og:video:width" content="396">
    <meta property="og:video:height" content="297">
  <meta property="og:site_name" content="YouTube">

    <meta name="attribution" content="ShayLoss%2Buser">  

      <link id="www-core-css" rel="stylesheet" href="https://web.archive.org/web/20110825084108cs_/http://s.ytimg.com/yt/cssbin/www-core-vflSI-vrC.css">

  

  











  

  


    <script>
    var gYouTubePlayerReady = false;
    if (!window['onYouTubePlayerReady']) {
      window['onYouTubePlayerReady'] = function() {
        gYouTubePlayerReady = true;
      };
    }
  </script><script bis_use="true" type="text/javascript" charset="utf-8" data-bis-config="[&quot;facebook.com/&quot;,&quot;twitter.com/&quot;,&quot;youtube-nocookie.com/embed/&quot;,&quot;//vk.com/&quot;,&quot;//www.vk.com/&quot;,&quot;linkedin.com/&quot;,&quot;//www.linkedin.com/&quot;,&quot;//instagram.com/&quot;,&quot;//www.instagram.com/&quot;,&quot;//www.google.com/recaptcha/api2/&quot;,&quot;//hangouts.google.com/webchat/&quot;,&quot;//www.google.com/calendar/&quot;,&quot;//www.google.com/maps/embed&quot;,&quot;spotify.com/&quot;,&quot;soundcloud.com/&quot;,&quot;//player.vimeo.com/&quot;,&quot;//disqus.com/&quot;,&quot;//tgwidget.com/&quot;,&quot;//js.driftt.com/&quot;,&quot;friends2follow.com&quot;,&quot;/widget&quot;,&quot;login&quot;,&quot;//video.bigmir.net/&quot;,&quot;blogger.com&quot;,&quot;//smartlock.google.com/&quot;,&quot;//keep.google.com/&quot;,&quot;/web.tolstoycomments.com/&quot;,&quot;moz-extension://&quot;,&quot;chrome-extension://&quot;,&quot;/auth/&quot;,&quot;//analytics.google.com/&quot;,&quot;adclarity.com&quot;,&quot;paddle.com/checkout&quot;,&quot;hcaptcha.com&quot;,&quot;recaptcha.net&quot;,&quot;2captcha.com&quot;,&quot;accounts.google.com&quot;,&quot;www.google.com/shopping/customerreviews&quot;,&quot;buy.tinypass.com&quot;,&quot;gstatic.com&quot;,&quot;secureir.ebaystatic.com&quot;,&quot;docs.google.com&quot;,&quot;contacts.google.com&quot;,&quot;github.com&quot;,&quot;mail.google.com&quot;,&quot;chat.google.com&quot;,&quot;audio.xpleer.com&quot;,&quot;keepa.com&quot;,&quot;static.xx.fbcdn.net&quot;,&quot;sas.selleramp.com&quot;,&quot;1plus1.video&quot;,&quot;console.googletagservices.com&quot;,&quot;//lnkd.demdex.net/&quot;,&quot;//radar.cedexis.com/&quot;,&quot;//li.protechts.net/&quot;,&quot;challenges.cloudflare.com/&quot;,&quot;ogs.google.com&quot;]" src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/../executers/vi-tr.js"></script>
      <script>
      if (window.yt.timing) {
        yt.timing.tick('ct');
      }
    </script>


<style id="custom-cursor" type="text/css">body button, body [type='button'], body input[type='reset'], body input[type='submit'], body [role="button"], ::-webkit-search-cancel-button, ::-webkit-search-decoration, ::-webkit-scrollbar-button, ::-webkit-file-upload-button, [role^=button], .cc_pointer, [type="search"]::-webkit-search-cancel-button, a, select, [type="search"]::-webkit-search-decoration, .paper-button, .ytp-progress-bar-container, input[type=submit], :link, :visited, a > *, img,  ::-webkit-scrollbar-button, .ogdlpmhglpejoiomcodnpjnfgcpmgale_pointer, ::-webkit-file-upload-button, .ytp-volume-panel, #myogdlpmhglpejoiomcodnpjnfgcpmgale .icon, body .custom-cursor-on-hover {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAB8pJREFUWEetlwlUVOcVx/9vNoZFYIYZnBlBgbAJCKKVqGiCW4xrrCYxZHFJU0slYuxRTI11yYkeozlNo2mipjYkHrVV01ZCjLGosQYDSkCEAVnGYZlhxtmA2bf3XvseihJ7emZMvzPnzFvuvf/fu/c73/ddAj8aCgXCRJR4/hhF1AxFbGQGDVrhdHmj/CQVwudyvDw+10xTtLqty1JttzpPKI3Wjh/HCOaeeMCYm5csL8lOlm4NERDifpsberMNLo+fNSEIgMclQFHMNQFxZCiMfS7K6vCVkR7O+maj0R6M8D1bFiADEDyWl3xytCz8mRa1AVwO4CNpgPnRNPMHAY/DQtA04GfegYbXT7PvnW76us9FzHwUCBagICN+X36uYuOlWjX4XAIjwvjgcgj4/BQoRgs0OATBAjAZEPA5cPtI2JyD2WEg7A7q00at+dVgs0CMlYTJl87N6axp6hY43T7Wn/laoYDDipEUDS6XYEX4PA4cbj+EAi7cHnIwS3eH10tTDjvSW4zG9mAgiJw46brlT6fvr7jSiuiICPTZ7OByB1PNZIER9XhJCEO4cLrJu4AE3F4KAr4AJEWCpikW0Gontyt7LW8HBfBcftoxmVT44rWmXux5vRDGfhsuXFciLCQEPXfM0JvNoGimBGDLQZI0UuIVWPDERORmJKFbo8OOQ6cBgobDRX3Z0G1aHBTA2oXjq/UW6+PGPjcObyuCdFQcnDYrO+3dDgcqq+pQ16KGx+eHQirG1JwUZGelIVoSCw6HA4OmB1v+8Bm0RjNTlsa6TnN2UAC/WTZJVXdLkxQqFOKjbcUQj5QP83fZ7XDarWyKBSFChEdGgcvjDdkMmE3Y8t4R3O7Vw+2hO+s6jYlBARQvzlXXt2oT5BIx3t9ShKgYaTD+sFpM2Lz3E3TqDI8GsGJWxq0OjSltanY63ly3GnyBICgAW38fSvccHARwk011XeZxwQQgnpuWVqk19s167dl5WLboqWB8WVuf14N3PyxDVcMtON1U1Y0u07RgghAFmfHv+/yeN0rXvASpVAK90YJZ+RMCilGv7ECcTILGRiX2/vk0A1DR0G1aFJDzXSMiQy75VaQo8qBUIkaPVg+K9GHZU9MxKTsFqUnxkIqjhuIxE7FLeweqLh3KL9SgrrkdIpEIqQmj8MONmyD9VIfDQU3ssFisgUIQ8/Oy/h6bmr1kzpRMeNxuVJz/Dh2aXvjcHpB+EgunZcND0oiOCMM1pQoWmxsOhwM8DoEJ49KhkMeitqkdnn4Dls+cgI9Ofvtys850LGCAlXOnnudL4+dsXf8KBgZsECTkofjXv8C8RUsgsJux/9O/QsABvCSN/Mcn4oUVq/HNhW9wtfoqtmzYjEwZB4eOnkHiCECrM6D8/PevK/XmPwYMMGNc8s5I2ahtOzatgUg0mG5GLEw6GuXlX8PU0YDiwnm41tiOD05ewqHf74CX4sDpsEMcKwMnXITSDaVIDPdhSm4qNu39bElzr/lMwAAZI2NmTZmcXckLj0JpyWrwQkeAL46Hx09h/ZoiHPztywgPE7LxXtx8AMt/PhdPFjwBnkgBymXD1W8v4vjx05ie8xgkkaHYd6Q8U6m3NAcMMHakePLzC/K/b1TpYLB5kDUxD1EiEW7WXkPhzBw8M3vyUKw2tRYb9h3FmNR0iMIF7KT1OO3YsWoubrRr0Nqqwrkr9aktRmvAOyKRKRNnFL2ySCmXxSIpTorWttsQcAkkjpJiTFIiePz7C5PP64VGrcL1Wxo4SQKpiXHIy05BR7sKX12uQ4o8GruPVIxrudPXFHAGkmUR0p3rVt0RxUiJ/PHJw/ycLg/CQkOGnnl9fgj49/eBey8uXq6GTCbFF19e6H3v9OUEZn0KGIAxnJ2btnXx/DnbVi6awn/QsapWiTGjYhEnl+KWqgf9A3ZMnjD2odiXv6tBW7fR9vnfKp+/qTGeC1ScsRs6lL6xqrBi59olC0ANHrOYoTNYcOqry1D36BAdFYF5BXmYlJ3GHkofHDU1P2DDnrJ5Sp0lKPFhADnxI189c+zAEZFgMHsnyi/g8y/OAqCGtCiKRpxchtKil5CWFD/0vPzrS3jn4Kmk1jsD6mC+fhhAQnR09Pa3SnRLp6cJG1pU2LTrABIUIyEaEY4uvQlREaGIj42B1tgHrakfh3ZvhDw2htV7Z//Rm/uOn8sJVnwYAHPzwtMzyg6/W7qydPsu8GkaBbkpsDpc7OmYGRFhAkhixOgxDOC23oLSokJU1zfTG3cdXtioMTLpCnoMK2aaRJK2ruS1puv/Osvbtm4VrDYbNJ3dEEWGwun2guKGYOLPxsNps+GXvzuAtSuWkvs+PllU1db1p6CV7zoMn00AckbL9kzLHb1515sl7GQ79o/zKDt1lu0JPtixAWOTx6C1tQPFb38ImuK9VavW7X5U8YdKwDzIUIim5efEXRGGxeDZBTNx8Wot/nmlmtVYPOdJxMlicaqiEr0GC1wuKqNJZ275vwL8Z07xVs7Oauu3OxKNfQ62L2C2XqY7YhoRpi1jeganm6pv6DYFdnL5H4QPlYCxTZFGj89Klp4w9FnTmQ6JMfL6mK4U8PgoeNx0g9/jW9ZkGFD9lK//ryW4F5BpWDkKcQmfzy3mcJBA07SeIlHv9dPHm3XmvwC4v2L9BIp/A8vLZE6JujGRAAAAAElFTkSuQmCC") 5 3, pointer !important;} html,body,body select,body .custom-cursor-default-hover {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAABSRJREFUWEe911tsU3UcB/Dv6b1du663dVupHRuX3agFNwFRUFRA5eLQSJAQfFh4wBhNjCQYcaBgDDFeHsQHgkYeFnhYJiQEBqIO5eJgbB1ruw22td3Wnl7WnvZ0vZ/WnAoJIYKMdfu/nEtOft9Pfifnd84hcM+qLdNuqK5f+l4gxizOZjMMTY62J319u3o9mLz3unzuE2yxGkCwcM0LP5pe3rTtFhlCKpXOZTCpBByXzrZf6+19jT3MZ/DdWjlA49rVLaZXt2y1Do3lztPeMYDDhVRVglSUxnDHyS/Nt+17ZgRQX6HfuvWj5pZOmyNX3z9shT0RA3gCKERiVMypBO12ZEcut6/rd3nP5RtB7H7/3Y6wvHxlkApDX6LGxfZTCIUmAnxwXMU1T9WJpYWQiiQge6+63YNXjYMu2p9PBLH/071eKwVN0D4AKROGQK1Hz40r0cyEw6DSVZ/RL1tTn0mnQHA4GO441dbVZ9mcV8DnnzX7/7rRr8oSBKKeMax5axuOHz2MjN+9k5NOX9evWNspUWp5XKEISTqEod/bdljGvcfyhSAO7Puk+zaVMfVcOImEjzy0fsfO3b+dO4tkJnP5ptm8wjS/4pvKF9/4IBbwQlbyBLy2LsrV3Vk74Pe78oEg3m5cf2TJxu1NrT/9gPCI7SCXJ2jS1jaoyb7rH9+0Ow/VaDRSdXWdVVNdr48FvZAW62D/8/TpTrN5fV4AVaWqzbsOftvaeuIEKNIxGiedqzhZ7jybN3D+bkB1mer1yucb25hkHCK5Gux2qKP1HYvT9/N0EUQ5IKpY3mChsoQhSY4f6rOPNwNI3V+4wbjo5NyVGzb6B81QL1wMn+0G5evtqOrzTnqmg8gNIqMWBelM0Xyrj+p5ULHKMqXeUN1glXFS0skkA9kkCacn2NY16p3WU5EDPOqq06k/LFeIvopJiiEmGDC0H85g7E2LO9D6qDXuv25KAAC8pXOLr+kUMpMXBdAQUfipCDk6Ea+2UxT1OIipAlBTonpaJxdeERZIOREIUZSi4KDiR7tHfU2zAmBDTDrN9walaFcow4dEIkaaDmadVHR1P0n9MVXElDvABsxTKgtLFPx+jVRYSqb4KJFw4QmEB13D5JN2ID4VxGMB2IA6rXKLXiU+ziEIRHgyyDMROALRA+bxib2zAmBDGgzFZ+bIhesCcQYFIhHiiXjKE4qbLGTA+qiIx+4AGzBfK6/QFUr6FGKemKST0MoEcIcSl/52eJ8DkH0UxLQAuSGmU+0xKMRfZLIAnWAgE3LhDER33nQHjswKAAB/ebm2u1QurJ2IpiDhczGZZILjNF015Il4/w8x7Q6wATVlimd1heKLUgGXYG9FsVSAMSrR0jXq3TYrADZk8Rz1EYNS3JRisogkGUQL1Zgcc71k9UxceBgiLx1gAxbJ5YoitXhAKRNpxhgRQuonwPWN30r0WYwPmw15A+RmQ6lqO9+4/FiYwwPPNYK0Rgf+YM++fqdr/4O6kFcAAGKJ0fhr1LBwdToaAUEH2dy4YMS6yOIL3/4vRL4BqFKrF0jrTL1BiUzICfqQFUvBI+3dRNB/GEift7mpf39A7qy8A3KzoaK8mVPXsI9Op8H1ucAotUCGAYemwHMONtlcvqMzCmA/84qXLjNHS8sXxOIxENEwe3cALg9ct+PsQP/AKzMKYItXlRStUlQaW2IFhWVJcQESqSSI2CT4I9ZfbPaxxhkH3Ang1JQpnhEVarZw5epNEffQ1zan57t73xP/AMu0KD9ht/w2AAAAAElFTkSuQmCC") 3 1, auto !important;}</style><script src="https://web.archive.org/_static/js/jwplayer/jwplayer.html5.js"></script><style type="text/css"></style><script src="https://web.archive.org/web/20110825084108/http://pagead2.googlesyndication.com/pagead/show_companion_ad.js"></script><script src="https://web.archive.org/web/20110825084108/http://www.google.com/jsapi?autoload=%7B%22modules%22%3A%5B%7B%22name%22%3A%22ads%22%2C%22version%22%3A%221%22%2C%22callback%22%3A%22(function()%7B%7D)%22%2C%22packages%22%3A%5B%22content%22%5D%7D%5D%7D"></script><script type="text/javascript" src="https://web.archive.org/web/20110825081513/http://www.google.com/uds/api/ads/1.0/6fda35b51be6567d681dc0b68443ed25/content.I.js"></script></head>
<body id="" class="date-20110824 en_US ltr" dir="ltr" __processed_340987ec-c992-44f8-8e79-d54279968cf3__="true" bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJMSU5LRURJTiI6ImRpc2FibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMC4xNyIsInNjb3JlIjoyMDAxN31d"><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script>__wm.rw(0);</script>
<div id="wm-ipp-base" lang="en" style="display: block; direction: ltr; height: 1px;" bis_skin_checked="1">
</div><div id="wm-ipp-print" bis_skin_checked="1"></div>
<script type="text/javascript">//<![CDATA[
__wm.bt(725,27,25,2,"web","http://www.youtube.com/watch?v=mqCeTFO0fr8&gl=US&hl=en&amp;has_verified=1","20110825084108",1996,"/_static/",["/_static/css/banner-styles.css?v=S1zqJCYt","/_static/css/iconochive.css?v=3PDvdIFv"], false);
  __wm.rw(1);
//]]></script>
<!-- END WAYBACK TOOLBAR INSERT -->
 
  <form name="logoutForm" method="POST" action="/web/20110825084108/http://www.youtube.com/">
    <input type="hidden" name="action_logout" value="1">
  <input name="session_token" type="hidden" value="Hgy-Dbiox0BThv_mueYIp6W4F3V8MTMxNDM0ODA2N0AxMzE0MjYxNjY3"></form>
  <!-- begin page -->
  <div id="page" class="  watch " bis_skin_checked="1">
      <div id="masthead-container" bis_skin_checked="1">
    <!-- begin masthead -->
      
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2011_header.php"); ?>
  

    <!-- end masthead -->
  </div>
    <div id="alerts" bis_skin_checked="1"></div>
  <div id="content-container" bis_skin_checked="1">
    <!-- begin content -->
    <div id="content" class="" bis_skin_checked="1">
      <div id="watch-container" bis_skin_checked="1">
  <!-- begin watch-headline-container -->
  <div id="watch-headline-container" bis_skin_checked="1">
      <div id="watch-headline" class="watch-headline" bis_skin_checked="1">
      


        <div id="watch-longform-ad" style="display:none;" bis_skin_checked="1">
    <div id="watch-longform-text" style="visibility:hidden" bis_skin_checked="1">Advertisement</div>
    <div id="watch-longform-ad-placeholder" bis_skin_checked="1"><img src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" height="60" width="300"></div>
    <div id="instream_google_companion_ad_div" bis_skin_checked="1"></div>
  </div>


    <h1 id="watch-headline-title">
      

  <span id="eow-title" class="" dir="ltr" title="I want to be in the circus!">
    I want to be in the circus!
  </span>

    </h1>

    <div id="watch-headline-user-info" bis_skin_checked="1">
        <a id="watch-username" class="inline-block" rel="author" href="/web/20110825084108/http://www.youtube.com/user/ShayLoss"><strong>ShayLoss</strong></a>

      <span id="watch-video-count" class="watch-expander yt-uix-expander yt-uix-expander-collapsed" data-expander-action="yt.www.watch.watch5.handleToggleMoreFromUser">
        <span class="watch-expander-head yt-uix-expander-head yt-rounded">
          <button class="yt-uix-expander-arrow" onclick="return false;"></button>
44 videos
        </span>
      </span>

        
    


    

  <span class="subscription-container" data-subscription-expandable-id="subscription-button-module-menu" data-subscription-value="ShayLoss" data-subscription-menu-type="expander" data-subscription-xsrf="" data-subscription-feature="" data-subscription-type="user">
    

    

  
  

  <button type="button" class="subscribe-button yt-uix-button yt-uix-tooltip" onclick=";return false;" title="Click to be notified of new videos from this channel" data-loaded="true" data-button-action="yt.www.subscriptions.button.toggleMenu" role="button" aria-pressed="false"><span class="yt-uix-button-content">Subscribe</span></button>

      <span class="subscription-subscribed-container hid"><span class="subscription-options-button subscription-expander yt-uix-expander yt-uix-expander-collapsed" data-expander-action="yt.www.subscriptions.button.toggleMenu"><span class="yt-uix-expander-head yt-rounded"><button class="yt-uix-expander-arrow" onclick="return false;"></button><span class="yt-alert yt-alert-success yt-alert-small yt-alert-naked yt-rounded"><img src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon" alt="Alert icon"><span class="yt-alert-content">Subscribed</span></span></span></span></span>
  </span>

    </div>

        <div id="subscription-button-module-menu" class="hid subscription-menu-expandable subscription-menu" bis_skin_checked="1">
      <div class="subscription-menu-not-logged-in" bis_skin_checked="1">
          <strong><a href="https://web.archive.org/web/20110825084108/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3Dhttp%253A%252F%252Fwww.youtube.com%252Fwatch%253Fv%253DmqCeTFO0fr8%2526gl%253DUS%2526hl%253Den%2526amp%253Bhas_verified%253D1&amp;hl=en_US<mpl=sso">Sign In</a> or <a href="/web/20110825084108/http://www.youtube.com/signup?next=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DmqCeTFO0fr8%26gl%3DUS%26hl%3Den%26amp%3Bhas_verified%3D1">Sign Up</a> now!
</strong>

      </div>
  </div>


    <div id="watch-more-from-user" class="collapsed" bis_skin_checked="1">
      <div id="watch-channel-discoverbox" class="yt-rounded" bis_skin_checked="1">
        <span id="watch-channel-loading">Loading...</span>
      </div>
    </div>
  </div>

  </div>
  <!-- end watch-headline-container -->
  <div id="watch-video-container" bis_skin_checked="1">
    <div id="watch-video" bis_skin_checked="1">
          <script>
      if (window.yt.timing) {
        yt.timing.tick('bf');
      }
    </script>

          <div id="watch-player" class="flash-player wm-videoplayer" bis_skin_checked="1" style="z-index: 1000;"><div id="flash-upgrade" bis_skin_checked="1"><div class="yt-alert yt-alert-error yt-alert-player yt-rounded " bis_skin_checked="1"><img src="https://web.archive.org/web/20110825084108im_///s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><div class="yt-alert-content" bis_skin_checked="1">        You need to upgrade your Adobe Flash Player to watch this video. <br> <a href="https://web.archive.org/web/20110825084108mp_/http://get.adobe.com/flashplayer/">Download it from Adobe.</a>
</div></div></div></div>

      <!-- begin watch-video-extra -->
      <div id="watch-video-extra" bis_skin_checked="1">
        
        
      </div>
      <!-- end watch-video-extra -->
    </div>
  </div>
  <!-- begin watch-main-container -->
  <div id="watch-main-container" bis_skin_checked="1">
    <div id="watch-main" bis_skin_checked="1">
      <div id="watch-panel" bis_skin_checked="1">
            <div id="flash10-promo-div" style="" class="yt-alert yt-alert-warn yt-rounded " bis_skin_checked="1"><img src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><div class="yt-alert-content" bis_skin_checked="1">        Upgrade to Flash Player 10 for improved playback performance. <a href="https://web.archive.org/web/20110825084108/http://www.adobe.com/go/getflashplayer/" onmousedown="urchinTracker('/Events/VideoWatch/GetFlashUpgrade');">Upgrade Now</a> or <a href="https://web.archive.org/web/20110825084108/http://help.youtube.com/support/youtube/bin/answer.py?answer=95402">More Info</a>.
</div><button type="button" onclick="_hidediv(this.parentNode);" class="close master-sprite">close</button></div>


  <div id="watch-actions" bis_skin_checked="1">
      <div id="watch-actions-right" bis_skin_checked="1">
          <span class="watch-view-count">
    <strong>93,082</strong>
  </span>
  <button onclick=";return false;" title="Show video statistics" type="button" id="watch-insight-button" class="yt-uix-tooltip yt-uix-tooltip-reverse yt-uix-button yt-uix-tooltip yt-uix-button-empty" data-button-action="yt.www.watch.actions.stats" role="button" aria-pressed="false" data-tooltip="Show video statistics" data-tooltip-title="Show video statistics" data-tooltip-timer="2360"><img class="yt-uix-button-icon yt-uix-button-icon-watch-insight" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>

      </div>
      <span id="watch-like-unlike" class="yt-uix-button-group"><button onclick=";return false;" title="I like this" type="button" class="start yt-uix-tooltip-reverse yt-uix-button yt-uix-tooltip" id="watch-like" data-button-action="yt.www.watch.actions.like" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-watch-like" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content">Like</span></button><button onclick=";return false;" title="I dislike this" type="button" class="end yt-uix-tooltip-reverse yt-uix-button yt-uix-tooltip yt-uix-button-empty" id="watch-unlike" data-button-action="yt.www.watch.actions.unlike" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-watch-unlike" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span>

  <span id="watch-addto-button" dir="ltr" class="addto-container watch show-label " data-video-ids="mqCeTFO0fr8" data-feature="watch"><button type="button" class="yt-uix-tooltip-reverse yt-uix-button yt-uix-tooltip" onclick=";return false;" title="Add to favorites or playlist" data-button-menu-id="some-nonexistent-id" data-button-action="yt.www.watch.actions.showSigninOrCreateChannelWarning" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span>

  <button onclick=";return false;" title="Share or embed this video" type="button" class="yt-uix-tooltip-reverse yt-uix-button yt-uix-tooltip" id="watch-share" data-button-action="yt.www.watch.actions.share" role="button" aria-pressed="false"><span class="yt-uix-button-content">Share</span></button>

  <button onclick=";return false;" title="Flag as inappropriate" type="button" class="yt-uix-tooltip-reverse yt-uix-button yt-uix-tooltip yt-uix-button-empty" id="watch-flag" data-button-action="yt.www.watch.actions.flag" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-watch-flag" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>


  </div>

  <div id="watch-actions-area-container" class="hid" bis_skin_checked="1" style="height: auto; display: none;">
    <div id="watch-actions-area" class="yt-rounded" bis_skin_checked="1">
        <div id="watch-actions-loading" class="watch-actions-panel hid" bis_skin_checked="1" style="display: none;">
Loading...
  </div>
  <div id="watch-actions-logged-out" class="watch-actions-panel hid" bis_skin_checked="1" style="display: none;">
      <div class="yt-alert yt-alert-warn yt-alert-small yt-alert-naked yt-rounded " bis_skin_checked="1"><img src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><div class="yt-alert-content" bis_skin_checked="1">          <strong><a href="https://web.archive.org/web/20110825084108/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3Dhttp%253A%252F%252Fwww.youtube.com%252Fwatch%253Fv%253DmqCeTFO0fr8%2526gl%253DUS%2526hl%253Den%2526amp%253Bhas_verified%253D1&amp;hl=en_US<mpl=sso">Sign In</a> or <a href="/web/20110825084108/http://www.youtube.com/signup?next=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DmqCeTFO0fr8%26gl%3DUS%26hl%3Den%26amp%3Bhas_verified%3D1">Sign Up</a> now!
</strong>

</div></div>
  </div>
  <div id="watch-actions-error" class="watch-actions-panel hid" bis_skin_checked="1" style="display: none;">
    <div class="yt-alert yt-alert-error yt-alert-small yt-alert-naked yt-rounded " bis_skin_checked="1"><img src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><div id="watch-error-string" class="yt-alert-content" bis_skin_checked="1">This feature is not available right now. Please try again later.</div></div>
  </div>
  <div id="watch-actions-share" class="watch-actions-panel hid" bis_skin_checked="1" style="display: none;"></div>

  <div id="watch-actions-ajax" class="watch-actions-panel hid" bis_skin_checked="1" style="display: none;"></div>

  <div class="close" bis_skin_checked="1">
    <img src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="close-button" onclick="yt.www.watch.actions.hide();">
  </div>

    </div>
  </div>
  <div id="watch-info" class="yt-rounded" bis_skin_checked="1">
    
  <div id="watch-description" class="watch-expander yt-uix-expander  yt-uix-expander-collapsed" data-expander-action="yt.www.watch.watch5.handleToggleDescription" bis_skin_checked="1">
    <div id="watch-description-clip" bis_skin_checked="1">
      <p id="watch-uploader-info">
        
Uploaded by <a class="author" rel="author" href="/web/20110825084108/http://www.youtube.com/user/ShayLoss">ShayLoss</a> on <span id="eow-date" class="watch-video-date">Aug 22, 2011</span>

      </p>
      <div id="watch-description-text" bis_skin_checked="1">
        <p id="eow-description">I'm not fat! I'm just gravity generous.</p>
      </div>
        <div id="watch-description-extras" bis_skin_checked="1">
    <h4>Category:</h4>
        <p id="eow-category"><a href="/web/20110825084108/http://www.youtube.com/education">Education</a></p>



      <h4>Tags:</h4>
        <ul id="eow-tags" class="watch-info-tag-list">
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=Shaycarl&amp;search=tag">Shaycarl</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=shaytards&amp;search=tag">shaytards</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=weight&amp;search=tag">weight</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=loss&amp;search=tag">loss</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=exercise&amp;search=tag">exercise</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=fitness&amp;search=tag">fitness</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=workout&amp;search=tag">workout</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=muscle&amp;search=tag">muscle</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=body&amp;search=tag">body</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=bodybuilding&amp;search=tag">bodybuilding</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=health&amp;search=tag">health</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=training&amp;search=tag">training</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=lose&amp;search=tag">lose</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=gym&amp;search=tag">gym</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=bodybuilder&amp;search=tag">bodybuilder</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=muscles&amp;search=tag">muscles</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=personal&amp;search=tag">personal</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=flex&amp;search=tag">flex</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=healthy&amp;search=tag">healthy</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=trainer&amp;search=tag">trainer</a></li>
    <li><a href="/web/20110825084108/http://www.youtube.com/results?search_query=nutrition&amp;search=tag">nutrition</a></li>
  </ul>


      <h4>License:</h4>
        <p id="eow-reuse">
Standard YouTube License
  </p>


  </div>

    </div>
    <div id="watch-description-fadeout" bis_skin_checked="1"></div>

      <ul id="watch-description-extra-info">
      <li>
        <div class="watch-sparkbars" bis_skin_checked="1">
          <div class="watch-sparkbar-likes" style="width: 98.717575051%" bis_skin_checked="1"></div>
          <div class="watch-sparkbar-dislikes" style="width: 1.28242494899%" bis_skin_checked="1"></div>
        </div>
        <span class="watch-likes-dislikes">
<span class="likes">3,387</span> likes, <span class="dislikes">44</span> dislikes
        </span>
      </li>


















      <li class="">
        <img class="metadata-icon as-seen-on" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="As Seen On:">
        <span class="metadata-info link-list">
As Seen On:
<a href="/web/20110825084108/http://www.youtube.com/social/blog/differentvideos-info" rel="nofollow" title="Different Videos">Different Videos</a>        </span>
      </li>


  </ul>


      <div class="yt-uix-expander-head" bis_skin_checked="1">
    <div id="watch-description-expand" class="expand" bis_skin_checked="1">
      <button type="button" class="metadata-inline yt-uix-button" onclick=";return false;" role="button" aria-pressed="false"><span class="yt-uix-button-content">Show more <img src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Show more">
</span></button>
    </div>
    <div id="watch-description-collapse" class="collapse" bis_skin_checked="1">
      <button type="button" class="metadata-inline yt-uix-button" onclick=";return false;" role="button" aria-pressed="false"><span class="yt-uix-button-content">Show less <img src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Show less">
</span></button>
    </div>
  </div>



  </div> 

  </div>
  <div id="watch-discussion" bis_skin_checked="1">
      


        <div id="comments-view" data-type="highlights" class=" reactions-enabled" bis_skin_checked="1">

          <div id="watch-comment-share-area" class="watch-comment-share-area yt-rounded hid" bis_skin_checked="1">
      <div class="close" bis_skin_checked="1"><img src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="close-button" onclick="yt.www.comments.watch5.cancelShare(this);"></div>
      <div class="watch-comment-share-content" bis_skin_checked="1">
        <div bis_skin_checked="1">Link to this comment:</div>
        <div bis_skin_checked="1">
          <input type="text" class="watch-actions-share-input watch-comment-share-url">
        </div>
        <div bis_skin_checked="1">
          <span>Share to:</span>
            <img alt="" title="Facebook" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon-watch-comment-share icon-watch-comment-share-facebook" action="yt.window.popup('http:\/\/www.facebook.com\/sharer.php?u=http%3A%2F%2Fwww.youtube.com%2Fcomment%3Flc%3D_COMMENT_ID_&amp;t=_COMMENT_TEXT_', {height:440, width:620, scrollbars:true});">
            <img alt="" title="Twitter" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon-watch-comment-share icon-watch-comment-share-twitter" action="yt.window.popup('http:\/\/twitter.com\/share?url=http%3A%2F%2Fwww.youtube.com%2Fcomment%3Flc%3D_COMMENT_ID_&amp;text=Check+out+this+comment+--+_COMMENT_TEXT_&amp;via=youtube', {height:650, width:1024, scrollbars:true});">
            <img alt="" title="Myspace" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon-watch-comment-share icon-watch-comment-share-myspace" action="yt.window.popup('http:\/\/www.myspace.com\/Modules\/PostTo\/Pages\/?t=_COMMENT_TEXT_&amp;u=http%3A%2F%2Fwww.youtube.com%2Fcomment%3Flc%3D_COMMENT_ID_&amp;l=1', {height:650, width:1024, scrollbars:true});">
        </div>
      </div>
    </div>


          
      <div class="comments-section" bis_skin_checked="1">
        <h4>Top Comments</h4>
        <ul class="comment-list">
              


  <li class="comment " data-tag="R" data-author-viewing="" data-id="Jov9mFkQFZeiByhzRBUMAjqki4Y-JbtbLAcQ4slzou8" data-score="37" data-author="Spaceydoodle">

        <div class="comment-container" bis_skin_checked="1">
    <div class="content" bis_skin_checked="1">

        <div class="comment-text" dir="ltr" bis_skin_checked="1">
          <p>you're not fat....you're hard to kidnap﻿ lol</p>

        </div>
    </div>

    <div class="metadata" bis_skin_checked="1">
      <a class="author " href="/web/20110825084108/http://www.youtube.com/user/Spaceydoodle" title="Spaceydoodle">Spaceydoodle</a>

      <span class="time">
        13 hours ago
      </span>

        <span class="comments-rating-positive" title="38 up, 1 down">
          37 <img class="comments-rating-thumbs-up" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
        </span>
    </div>
  </div>

  </li>

    


  <li class="comment last" data-tag="R" data-author-viewing="" data-id="Jov9mFkQFZed2ACQqB_zOe_vR__i_Y3QMT54n2eYIIU" data-score="18" data-author="Ibrahimdurrani">

        <div class="comment-container" bis_skin_checked="1">
    <div class="content" bis_skin_checked="1">

        <div class="comment-text" dir="ltr" bis_skin_checked="1">
          <p>Tube up the ass time ﻿</p>

        </div>
    </div>

    <div class="metadata" bis_skin_checked="1">
      <a class="author " href="/web/20110825084108/http://www.youtube.com/user/Ibrahimdurrani" title="Ibrahimdurrani">Ibrahimdurrani</a>

      <span class="time">
        13 hours ago
      </span>

        <span class="comments-rating-positive" title="20 up, 2 down">
          18 <img class="comments-rating-thumbs-up" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
        </span>
    </div>
  <div id="comments-actions" class="comment-actions comment-actions-absolute" bis_skin_checked="1">
    <div id="comments-actions-container" bis_skin_checked="1">
<button type="button" class="comment-action-vote-up yt-uix-button yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="Vote Up" data-vote-increment="1" data-button-action="yt.www.comments.watch5.vote" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="comment-action-vote-down yt-uix-button yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="Vote Down" data-vote-increment="-1" data-button-action="yt.www.comments.watch5.vote" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><span class="yt-uix-button-group"><button type="button" class="start yt-uix-button" onclick=";return false;" data-button-action="yt.www.comments.watch5.reply" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-reply" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content">Reply</span></button><button type="button" class="end flip yt-uix-button yt-uix-button-empty" onclick=";return false;" data-button-menu-action="yt.www.comments.watch5.menuToggled" data-button-menu-id="comments-actions-menu" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span>    </div>
    <div id="comments-actions-menu" style="display: none;" bis_skin_checked="1" class="yt-uix-button-menu hid">
<ul><li onclick="yt.www.comments.watch5.share();"><span class="yt-uix-button-menu-item">Share</span></li><li class="comment-action-remove" onclick=""><span class="yt-uix-button-menu-item">Remove</span></li><li onclick="yt.www.comments.watch5.flag();"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block" onclick="yt.www.comments.watch5.block();"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock" onclick="yt.www.comments.watch5.unblock();"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul>    </div>
  </div></div>

  </li>


        </ul>
      </div>


      <div class="comments-section" bis_skin_checked="1">
          <a class="comments-section-see-all" href="/web/20110825084108/http://www.youtube.com/video_response_view_all?v=mqCeTFO0fr8">see all</a>
        <h4>Video Responses</h4>
          <ul class="video-list">
                  <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=MPPq_n5Lf6M&amp;feature=watch_response" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i2.ytimg.com/vi/MPPq_n5Lf6M/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i2.ytimg.com/vi/MPPq_n5Lf6M/default.jpg" data-group-key="thumb-group-0"></span></span><span class="video-time">6:07</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="MPPq_n5Lf6M" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="Shayloss daily fail!">Shayloss daily fail!</span><span class="stat">by ShayLoss</span><span class="stat view-count">116,823 views
</span></a></li>


          </ul>
      </div>


      <div class="comments-section" bis_skin_checked="1">
        <div id="comments-header-container" bis_skin_checked="1">
          <div id="comments-header" bis_skin_checked="1">
            <a class="comments-section-see-all" href="/web/20110825084108/http://www.youtube.com/all_comments?v=mqCeTFO0fr8">see all</a>
            <h4>All Comments (1,466)</h4>
          </div>            <div id="reactions-header" bis_skin_checked="1">
            <h4>
Reactions
              <span class="comments-section-stat">(4)</span>
            </h4>
          </div>
        </div>
              <div id="comments-post" bis_skin_checked="1">
        <div id="comments-post-form-alert" bis_skin_checked="1">
          <a href="https://web.archive.org/web/20110825084108/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3Dhttp%253A%252F%252Fwww.youtube.com%252Fwatch%253Fv%253DmqCeTFO0fr8%2526gl%253DUS%2526hl%253Den%2526amp%253Bhas_verified%253D1&amp;hl=en_US&amp;ltmpl=sso">Sign In</a> or <a href="/web/20110825084108/http://www.youtube.com/signup?next=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DmqCeTFO0fr8%26gl%3DUS%26hl%3Den%26amp%3Bhas_verified%3D1">Sign Up</a><span class="comments-post-form-rollover-text"> now to post a comment!</span>

        </div>
          <div id="reactions-input" bis_skin_checked="1">
            <button type="button" class="yt-uix-button-masked reaction-menu-button yt-uix-button" onclick=";return false;" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-content">Your reaction?</span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><div class="yt-uix-button-menu" style="display: none;" bis_skin_checked="1">  <div id="reactions-input-menu" bis_skin_checked="1">
    <ul id="reactions-input-items-menu">
      <li role="menuitem"><span class="yt-uix-button-menu-item">
<a href="https://web.archive.org/web/20110825084108/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3Dhttp%253A%252F%252Fwww.youtube.com%252Fwatch%253Fv%253DmqCeTFO0fr8%2526gl%253DUS%2526hl%253Den%2526amp%253Bhas_verified%253D1&amp;hl=en_US&amp;ltmpl=sso">Sign in</a> to react to this video
      </span></li>
    </ul>
  </div>
</div></button>
          </div>

          <a id="watch-comments-sigin" href="https://web.archive.org/web/20110825084108/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3Dhttp%253A%252F%252Fwww.youtube.com%252Fwatch%253Fv%253DmqCeTFO0fr8%2526gl%253DUS%2526hl%253Den%2526amp%253Bhas_verified%253D1&amp;hl=en_US&amp;ltmpl=sso" style="display: none"></a>
  </div>


        <ul class="comment-list">
              


  <li class="comment " data-tag="N" data-author-viewing="" data-id="Jov9mFkQFZf6XzEq7gHgOq81wxjKac-v_lKYPJvU5HA" data-score="0" data-author="MrRobertl1974">

        <div class="comment-container" bis_skin_checked="1">
    <div class="content" bis_skin_checked="1">

        <div class="comment-text" dir="ltr" bis_skin_checked="1">
          <p><a class="watch-comment-atlink" href="/web/20110825084108/http://www.youtube.com/comment_search?username=nitro0xide">@Nitro0xide</a> thanks just saw﻿ it hate to be shay hehe</p>

        </div>
    </div>

    <div class="metadata" bis_skin_checked="1">
      <a class="author " href="/web/20110825084108/http://www.youtube.com/user/MrRobertl1974" title="MrRobertl1974">MrRobertl1974</a>

      <span class="time">
        1 hour ago
      </span>

    </div>
  </div>

  </li>

    


  <li class="comment " data-tag="N" data-author-viewing="" data-id="Jov9mFkQFZeUOZIfMOV5N1F8c8T1HakzgwurOLT-k5g" data-score="0" data-author="JaseSheehan">

        <div class="comment-container" bis_skin_checked="1">
    <div class="content" bis_skin_checked="1">

        <div class="comment-text" dir="ltr" bis_skin_checked="1">
          <p><a class="watch-comment-atlink" href="/web/20110825084108/http://www.youtube.com/comment_search?username=mrbigtian">@mrbigtian</a> From your comment i can tell you have probably had﻿ a tough childhood, parents probably didn't pay enough attention to you, probably got hurt by your father and now those memories live with you and you need to find some way to take out that anger so you go onto youtube and try your hardest to try and give people shit when in fact makes you look like a complete cunt. Seriously, the world would be a better place without you.</p>

        </div>
    </div>

    <div class="metadata" bis_skin_checked="1">
      <a class="author " href="/web/20110825084108/http://www.youtube.com/user/JaseSheehan" title="JaseSheehan">JaseSheehan</a>

      <span class="time">
        1 hour ago
      </span>

    </div>
  </div>

  </li>

    


  <li class="comment " data-tag="N" data-author-viewing="" data-id="Jov9mFkQFZffKpScgYC27xLcSHLaj7_kLdLrtgi0XhQ" data-score="0" data-author="macca12121">

        <div class="comment-container" bis_skin_checked="1">
    <div class="content" bis_skin_checked="1">

        <div class="comment-text" dir="ltr" bis_skin_checked="1">
          <p>does the﻿ beard help with weight loss? &gt;.&lt;</p>

        </div>
    </div>

    <div class="metadata" bis_skin_checked="1">
      <a class="author " href="/web/20110825084108/http://www.youtube.com/user/macca12121" title="macca12121">macca12121</a>

      <span class="time">
        2 hours ago
      </span>

    </div>
  </div>

  </li>

    


  <li class="comment " data-tag="N" data-author-viewing="" data-id="Jov9mFkQFZfF4mMe8CUc_5iHHpkGYq3mCxB7P2r-0fg" data-score="0" data-author="1996Pruitt">

        <div class="comment-container" bis_skin_checked="1">
    <div class="content" bis_skin_checked="1">

        <div class="comment-text" dir="ltr" bis_skin_checked="1">
          <p><a class="watch-comment-atlink" href="/web/20110825084108/http://www.youtube.com/comment_search?username=charlii1225788">@Charlii1225788</a>﻿ yes.</p>

        </div>
    </div>

    <div class="metadata" bis_skin_checked="1">
      <a class="author " href="/web/20110825084108/http://www.youtube.com/user/1996Pruitt" title="1996Pruitt">1996Pruitt</a>

      <span class="time">
        2 hours ago
      </span>

    </div>
  </div>

  </li>

    


  <li class="comment " data-tag="N" data-author-viewing="" data-id="Jov9mFkQFZdSVvxh1rNk2ZxLRS6348az1Xnwe_4z9QU" data-score="1" data-author="90sfanforever">

        <div class="comment-container" bis_skin_checked="1">
    <div class="content" bis_skin_checked="1">

        <div class="comment-text" dir="ltr" bis_skin_checked="1">
          <p><a class="watch-comment-atlink" href="/web/20110825084108/http://www.youtube.com/comment_search?username=m0sas">@m0sas</a>﻿ They are quite hard to come by. </p>

        </div>
    </div>

    <div class="metadata" bis_skin_checked="1">
      <a class="author " href="/web/20110825084108/http://www.youtube.com/user/90sfanforever" title="90sfanforever">90sfanforever</a>

      <span class="time">
        3 hours ago
      </span>

    </div>
  </div>

  </li>

    


  <li class="comment " data-tag="N" data-author-viewing="" data-id="Jov9mFkQFZcpxWu7eNXM1JaNCce_z5SXQdFqW4fJ8Ow" data-score="0" data-author="alectronex">

        <div class="comment-container" bis_skin_checked="1">
    <div class="content" bis_skin_checked="1">

        <div class="comment-text" dir="ltr" bis_skin_checked="1">
          <p><a class="watch-comment-atlink" href="/web/20110825084108/http://www.youtube.com/comment_search?username=hugefuckingdick">@hugefuckingdick</a> no. you just ARE a﻿ huge fucking dick. sorry dude.</p>

        </div>
    </div>

    <div class="metadata" bis_skin_checked="1">
      <a class="author " href="/web/20110825084108/http://www.youtube.com/user/alectronex" title="alectronex">alectronex</a>

      <span class="time">
        3 hours ago
      </span>

    </div>
  </div>

  </li>

    


  <li class="comment " data-tag="N" data-author-viewing="" data-id="Jov9mFkQFZdxSI0PTz_PZRlMWklHmakHlEVc55lwahE" data-score="0" data-author="shanttytown">

        <div class="comment-container" bis_skin_checked="1">
    <div class="content" bis_skin_checked="1">

        <div class="comment-text" dir="ltr" bis_skin_checked="1">
          <p><a class="watch-comment-atlink" href="/web/20110825084108/http://www.youtube.com/comment_search?username=bluetoad2222">@BlueToad2222</a> Great 5th grade comeback﻿</p>

        </div>
    </div>

    <div class="metadata" bis_skin_checked="1">
      <a class="author " href="/web/20110825084108/http://www.youtube.com/user/shanttytown" title="shanttytown">shanttytown</a>

      <span class="time">
        4 hours ago
      </span>

    </div>
  </div>

  </li>

    


  <li class="comment " data-tag="N" data-author-viewing="" data-id="Jov9mFkQFZf-pzhfPwq_Pg5I2SneMeYyIXFemjZD5GA" data-score="1" data-author="m0sas">

        <div class="comment-container" bis_skin_checked="1">
    <div class="content" bis_skin_checked="1">

        <div class="comment-text" dir="ltr" bis_skin_checked="1">
          <p><a class="watch-comment-atlink" href="/web/20110825084108/http://www.youtube.com/comment_search?username=90sfanforever">@90sfanforever</a> actually, thank YOU. this is the first intelligent﻿ adult argument i have ever had on youtube.</p>

        </div>
    </div>

    <div class="metadata" bis_skin_checked="1">
      <a class="author " href="/web/20110825084108/http://www.youtube.com/user/m0sas" title="m0sas">m0sas</a>

      <span class="time">
        4 hours ago
      </span>

    </div>
  </div>

  </li>

    


  <li class="comment " data-tag="N" data-author-viewing="" data-id="Jov9mFkQFZfk9PGLnK594hp-T70YRTeuTMwFFkGli90" data-score="0" data-author="90sfanforever">

        <div class="comment-container" bis_skin_checked="1">
    <div class="content" bis_skin_checked="1">

        <div class="comment-text" dir="ltr" bis_skin_checked="1">
          <p><a class="watch-comment-atlink" href="/web/20110825084108/http://www.youtube.com/comment_search?username=m0sas">@m0sas</a> Among further research, there is﻿ no bacteria stuck to the colon. In which case, you're right. Thank you.</p>

        </div>
    </div>

    <div class="metadata" bis_skin_checked="1">
      <a class="author " href="/web/20110825084108/http://www.youtube.com/user/90sfanforever" title="90sfanforever">90sfanforever</a>

      <span class="time">
        4 hours ago
      </span>

    </div>
  </div>

  </li>

    


  <li class="comment last" data-tag="N" data-author-viewing="" data-id="Jov9mFkQFZcSdiQTsWpwl5_3yb90SyY9nZZho1S5GkU" data-score="0" data-author="rippedrectum">

        <div class="comment-container" bis_skin_checked="1">
    <div class="content" bis_skin_checked="1">

        <div class="comment-text" dir="ltr" bis_skin_checked="1">
          <p>im not fat, im just a great﻿ singer, view my channel for the singer ever</p>
<p></p>

        </div>
    </div>

    <div class="metadata" bis_skin_checked="1">
      <a class="author " href="/web/20110825084108/http://www.youtube.com/user/rippedrectum" title="rippedrectum">rippedrectum</a>

      <span class="time">
        5 hours ago
      </span>

    </div>
  </div>

  </li>


        </ul>
      </div>

            <div class="comments-section" bis_skin_checked="1">
      <a class="comments-section-see-all" href="/web/20110825084108/http://www.youtube.com/all_comments?v=mqCeTFO0fr8">View all Comments »</a>
      <div class="comments-pagination" bis_skin_checked="1">
            
  
    <div class="yt-uix-pager" bis_skin_checked="1">


      <button href="/all_comments?v=mqCeTFO0fr8&amp;page=1" onclick="return false;;window.location.href=this.getAttribute('href');return false;" type="button" class="yt-uix-pager-selected yt-uix-button" data-page="1" role="button" aria-pressed="false"><span class="yt-uix-button-content">1</span></button>&nbsp;
      <button href="/all_comments?v=mqCeTFO0fr8&amp;page=2" onclick="return yt.www.comments.watch5.showPageFromElement(this);;window.location.href=this.getAttribute('href');return false;" type="button" class=" yt-uix-button" data-page="2" role="button" aria-pressed="false"><span class="yt-uix-button-content">2</span></button>&nbsp;
      <button href="/all_comments?v=mqCeTFO0fr8&amp;page=3" onclick="return yt.www.comments.watch5.showPageFromElement(this);;window.location.href=this.getAttribute('href');return false;" type="button" class=" yt-uix-button" data-page="3" role="button" aria-pressed="false"><span class="yt-uix-button-content">3</span></button>&nbsp;
      <button href="/all_comments?v=mqCeTFO0fr8&amp;page=4" onclick="return yt.www.comments.watch5.showPageFromElement(this);;window.location.href=this.getAttribute('href');return false;" type="button" class=" yt-uix-button" data-page="4" role="button" aria-pressed="false"><span class="yt-uix-button-content">4</span></button>&nbsp;
      <button href="/all_comments?v=mqCeTFO0fr8&amp;page=5" onclick="return yt.www.comments.watch5.showPageFromElement(this);;window.location.href=this.getAttribute('href');return false;" type="button" class=" yt-uix-button" data-page="5" role="button" aria-pressed="false"><span class="yt-uix-button-content">5</span></button>&nbsp;
      <button href="/all_comments?v=mqCeTFO0fr8&amp;page=6" onclick="return yt.www.comments.watch5.showPageFromElement(this);;window.location.href=this.getAttribute('href');return false;" type="button" class=" yt-uix-button" data-page="6" role="button" aria-pressed="false"><span class="yt-uix-button-content">6</span></button>&nbsp;
      <button href="/all_comments?v=mqCeTFO0fr8&amp;page=7" onclick="return yt.www.comments.watch5.showPageFromElement(this);;window.location.href=this.getAttribute('href');return false;" type="button" class=" yt-uix-button" data-page="7" role="button" aria-pressed="false"><span class="yt-uix-button-content">7</span></button>&nbsp;

          <a href="/web/20110825084108/http://www.youtube.com/all_comments?v=mqCeTFO0fr8&amp;page=2" class="yt-uix-pager-link" data-page="2" onclick="return yt.www.comments.watch5.showPageFromElement(this);">Next</a>

    </div>


      </div>
  </div>

    </div>
        

    <div id="comments-loading" class="hid" bis_skin_checked="1">Loading...</div>


  </div>

      </div>
      <div id="watch-sidebar" bis_skin_checked="1">
        
        <div id="watch-channel-brand-div" style="display:none" class="watch-module" bis_skin_checked="1">
    <div id="ad300x250" class="alignR" bis_skin_checked="1"></div>
    <div id="google_companion_ad_div" class="alignR" bis_skin_checked="1"></div>
    <div style="padding-top: 3px;display:none;" bis_skin_checked="1">
Advertisement
    </div>
  </div>



  <div class="watch-module" bis_skin_checked="1">
    <div class="watch-module-body" bis_skin_checked="1">

      <h4 class="first">Suggestions</h4>
      <ul id="watch-related" class="video-list">





                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=WWqUYUbTX50&amp;feature=relmfu" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i4.ytimg.com/vi/WWqUYUbTX50/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i4.ytimg.com/vi/WWqUYUbTX50/default.jpg" data-group-key="thumb-group-0"></span></span><span class="video-time">2:53</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="WWqUYUbTX50" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="I'll get a colonic!">I'll get a colonic!</span><span class="stat">by ShayLoss</span><span class="stat view-count">120,662 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=MPPq_n5Lf6M&amp;feature=relmfu" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i2.ytimg.com/vi/MPPq_n5Lf6M/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i2.ytimg.com/vi/MPPq_n5Lf6M/default.jpg" data-group-key="thumb-group-0"></span></span><span class="video-time">6:07</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="MPPq_n5Lf6M" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="Shayloss daily fail!">Shayloss daily fail!</span><span class="stat">by ShayLoss</span><span class="stat view-count">112,446 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=LgZZBsaMd74&amp;feature=relmfu" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i1.ytimg.com/vi/LgZZBsaMd74/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i1.ytimg.com/vi/LgZZBsaMd74/default.jpg" data-group-key="thumb-group-0"></span></span><span class="video-time">10:30</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="LgZZBsaMd74" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="POOP THE FAT AWAY?!">POOP THE FAT AWAY?!</span><span class="stat">by ShayLoss</span><span class="stat view-count">250,040 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=rk-sqfPTsvI&amp;feature=relmfu" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/rk-sqfPTsvI/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/rk-sqfPTsvI/default.jpg" data-group-key="thumb-group-0"></span></span><span class="video-time">4:34</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="rk-sqfPTsvI" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="Just say no! (to the icecream)">Just say no! (to the icecream)</span><span class="stat">by ShayLoss</span><span class="stat view-count">139,445 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=U-mjlFnNFkw&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i2.ytimg.com/vi/U-mjlFnNFkw/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i2.ytimg.com/vi/U-mjlFnNFkw/default.jpg" data-group-key="thumb-group-0"></span></span><span class="video-time">2:49</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="U-mjlFnNFkw" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="go crazy!">go crazy!</span><span class="stat">by SHAYTARDS</span><span class="stat view-count">89,990 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=lIw03YZZnbA&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i1.ytimg.com/vi/lIw03YZZnbA/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i1.ytimg.com/vi/lIw03YZZnbA/default.jpg" data-group-key="thumb-group-0"></span></span><span class="video-time">6:24</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="lIw03YZZnbA" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="KICK HIM IN THE BALLS!">KICK HIM IN THE BALLS!</span><span class="stat">by SHAYTARDS</span><span class="stat view-count">167,378 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=fWpigBe63g0&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/fWpigBe63g0/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/fWpigBe63g0/default.jpg" data-group-key="thumb-group-0"></span></span><span class="video-time">11:04</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="fWpigBe63g0" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="GIRL FIGHTS KID!">GIRL FIGHTS KID!</span><span class="stat">by SHAYTARDS</span><span class="stat view-count">237,335 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=MQgcxp_2usY&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i2.ytimg.com/vi/MQgcxp_2usY/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i2.ytimg.com/vi/MQgcxp_2usY/default.jpg" data-group-key="thumb-group-0"></span></span><span class="video-time">4:42</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="MQgcxp_2usY" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="BALL S TO THE FACE">BALL S TO THE FACE</span><span class="stat">by caseylavere</span><span class="stat view-count">50,315 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=28A9kZicR_k&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/28A9kZicR_k/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/28A9kZicR_k/default.jpg" data-group-key="thumb-group-0"></span></span><span class="video-time">11:12</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="28A9kZicR_k" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="FURNITURE RODEO">FURNITURE RODEO</span><span class="stat">by caseylavere</span><span class="stat view-count">41,915 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=NVh4OjSKk4g&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/NVh4OjSKk4g/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/NVh4OjSKk4g/default.jpg" data-group-key="thumb-group-1"></span></span><span class="video-time">0:43</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="NVh4OjSKk4g" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="YO MAMA SO FAT! Family">YO MAMA SO FAT! Family</span><span class="stat">by yomama</span><span class="stat view-count">762,959 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=fBOgid4WPNQ&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/fBOgid4WPNQ/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/fBOgid4WPNQ/default.jpg" data-group-key="thumb-group-1"></span></span><span class="video-time">15:59</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="fBOgid4WPNQ" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="MOMMY GOES SHOPPING!  (11/12/09-253)">MOMMY GOES SHOPPING!  (11/12/09-253)</span><span class="stat">by SHAYTARDS</span><span class="stat view-count">391,599 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=kroua3nzmIU&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i4.ytimg.com/vi/kroua3nzmIU/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i4.ytimg.com/vi/kroua3nzmIU/default.jpg" data-group-key="thumb-group-1"></span></span><span class="video-time">18:02</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="kroua3nzmIU" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="THE BABY IS HERE!!!">THE BABY IS HERE!!!</span><span class="stat">by SHAYTARDS</span><span class="stat view-count">2,371,864 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=tfFfmH_ePpE&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i1.ytimg.com/vi/tfFfmH_ePpE/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i1.ytimg.com/vi/tfFfmH_ePpE/default.jpg" data-group-key="thumb-group-1"></span></span><span class="video-time">3:30</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="tfFfmH_ePpE" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="HOT BULLETS!">HOT BULLETS!</span><span class="stat">by otherijustine</span><span class="stat view-count">33,381 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=lkePXJBBMww&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i1.ytimg.com/vi/lkePXJBBMww/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i1.ytimg.com/vi/lkePXJBBMww/default.jpg" data-group-key="thumb-group-1"></span></span><span class="video-time">4:28</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="lkePXJBBMww" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="GO CRAZY! Jackson Harris (Official Video)">GO CRAZY! Jackson Harris (Official Video)</span><span class="stat">by JacksonHarrisNYC</span><span class="stat view-count">61,645 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=rk5AisyJT2s&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/rk5AisyJT2s/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/rk5AisyJT2s/default.jpg" data-group-key="thumb-group-2"></span></span><span class="video-time">10:33</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="rk5AisyJT2s" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="GIANT BALL PITT!">GIANT BALL PITT!</span><span class="stat">by SHAYTARDS</span><span class="stat view-count">432,076 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=AEdMtz81BDo&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i2.ytimg.com/vi/AEdMtz81BDo/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i2.ytimg.com/vi/AEdMtz81BDo/default.jpg" data-group-key="thumb-group-2"></span></span><span class="video-time">3:22</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="AEdMtz81BDo" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="&quot;Ponte SMART&quot; (Ad)">"Ponte SMART" (Ad)</span><span class="stat">by benshortstuff</span><span class="stat view-count">204,868 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=20Neb4uFNqE&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/20Neb4uFNqE/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/20Neb4uFNqE/default.jpg" data-group-key="thumb-group-2"></span></span><span class="video-time">7:04</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="20Neb4uFNqE" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="DROWN THE FAT AWAY!">DROWN THE FAT AWAY!</span><span class="stat">by ShayLoss</span><span class="stat view-count">217,048 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=gHKcbB8P3IU&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i4.ytimg.com/vi/gHKcbB8P3IU/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i4.ytimg.com/vi/gHKcbB8P3IU/default.jpg" data-group-key="thumb-group-2"></span></span><span class="video-time">13:55</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="gHKcbB8P3IU" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="Gamescom Part 11 - The Show on Day 4">Gamescom Part 11 - The Show on Day 4</span><span class="stat">by BlueXephos</span><span class="stat view-count">326,128 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=rGBrVGWDZaM&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/rGBrVGWDZaM/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i3.ytimg.com/vi/rGBrVGWDZaM/default.jpg" data-group-key="thumb-group-2"></span></span><span class="video-time">2:01</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="rGBrVGWDZaM" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="Gasp of Realization">Gasp of Realization</span><span class="stat">by ChrisArchieProds</span><span class="stat view-count">56,985 views
</span></a></li>



                <li class="video-list-item "><a href="/web/20110825084108/http://www.youtube.com/watch?v=kB1i7pYk16I&amp;feature=related" class="video-list-item-link "><span class="ux-thumb-wrap "><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110825084108/http://i4.ytimg.com/vi/kB1i7pYk16I/default.jpg" alt="Thumbnail" data-thumb="//web.archive.org/web/20110825084108/http://i4.ytimg.com/vi/kB1i7pYk16I/default.jpg" data-group-key="thumb-group-2"></span></span><span class="video-time">5:02</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="kB1i7pYk16I" data-feature="thumbnail"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-id="shared-addto-menu" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span><span dir="ltr" class="title" title="Para or just Normal Activity?">Para or just Normal Activity?</span><span class="stat">by LikeTotallyAwesome</span><span class="stat view-count">76,877 views
</span></a></li>


      </ul>
      <ul id="watch-more-related" class="video-list hid">
        <span id="watch-more-related-loading">
Loading more suggestions...
        </span>
      </ul>
        <button type="button" id="watch-more-related-button" onclick=";return false;" class=" yt-uix-button" data-button-action="yt.www.watch.watch5.handleLoadMoreRelated" role="button" aria-pressed="false"><span class="yt-uix-button-content">Load more suggestions</span></button>
    </div>
  </div>

      </div>
      <div class="clear" bis_skin_checked="1"></div>
    </div>
    <div style="visibility: hidden; height: 0px; padding: 0px; overflow: hidden;" bis_skin_checked="1">
          <img src="https://web.archive.org/web/20110825084108im_/http://www.youtube-nocookie.com/gen_204?attributionpartner=ShayLoss%2Buser" border="0" width="1" height="1">
    <img src="https://web.archive.org/web/20110825084108im_/http://www.youtube-nocookie.com/robots.txt?attributionpartner=ShayLoss%2Buser&amp;v=mqCeTFO0fr8" border="0" width="1" height="1">



  <div id="baseDiv" bis_skin_checked="1"></div>

    </div>
  </div>
  <!-- end watch-main-container -->
</div>

    </div>
    <!-- end content -->
  </div>
  <div id="footer-container" bis_skin_checked="1">
    <!-- begin footer -->
      <div id="footer" bis_skin_checked="1">
    <ul class="footer-links">
      <li><a href="https://web.archive.org/web/20110825084108/http://www.google.com/support/youtube/bin/static.py?p=watch&amp;page=start.cs&amp;hl=en_US" onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Help');">Help</a>
</li>
      <li><a href="/web/20110825084108/http://www.youtube.com/t/about_youtube" onmousedown="yt.analytics.trackEvent('Footer', 'link', 'About');">About</a></li>
      <li><a href="/web/20110825084108/http://www.youtube.com/t/press" onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Press');">Press &amp; Blogs</a></li>
      <li><a href="/web/20110825084108/http://www.youtube.com/t/copyright_center" onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Copyright');">Copyright</a></li>
      <li><a href="/web/20110825084108/http://www.youtube.com/creators" onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Creators');">Creators &amp; Partners</a></li>
      <li><a href="/web/20110825084108/http://www.youtube.com/t/advertising_overview" onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Advertising');">Advertising</a></li>
      <li><a href="/web/20110825084108/http://www.youtube.com/dev">Developers</a></li>
      <li><a href="https://web.archive.org/web/20110825084108/http://www.google.com/support/youtube/bin/request.py?contact_type=abuse&amp;hl=en_US" onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Safety');">Safety</a></li>
      <li><a href="/web/20110825084108/http://www.youtube.com/t/privacy_at_youtube" onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Privacy');">Privacy</a></li>
      <li><a href="/web/20110825084108/http://www.youtube.com/t/terms" onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Terms');">Terms</a></li>
    </ul>

    <div class="footer-info" bis_skin_checked="1">
      
      <ul class="pickers">
        <li><a href="https://web.archive.org/web/20110825084108/http://www.google.com/tools/feedback/intl/en/error.html" onclick="return yt.www.feedback.start(yt.getConfig('FEEDBACK_LOCALE_LANGUAGE'), yt.getConfig('FEEDBACK_LOCALE_EXTRAS'));" id="reportbug">Report a bug</a></li>


          <li><a href="/web/20110825084108/http://www.youtube.com/testtube">Try something new!</a></li>

      </ul>
    </div>
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
    <div id="picker-container" bis_skin_checked="1"></div>
  <div id="picker-loading" style="display: none" bis_skin_checked="1">Loading...</div>


  </div>

    <!-- end footer -->
  </div>
    



  <div id="playlist-bar" class="hid passive editable empty" data-video-url="/watch?v=&amp;feature=BFql&amp;playnext=1&amp;list=QL" data-list-id="" data-list-type="QL" bis_skin_checked="1"><iframe id="playlist-bar-mask" frameborder="0" src="javascript:&quot;&quot;" allow="autoplay 'self'; fullscreen 'self'"></iframe>
    <div id="playlist-bar-bar-container" bis_skin_checked="1">
      <div id="playlist-bar-bar" bis_skin_checked="1">
        <div id="playlist-bar-notifications" style="display: none;" class="yt-alert yt-alert-success yt-alert-small yt-alert-naked yt-rounded " bis_skin_checked="1"><img src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><div class="yt-alert-content" bis_skin_checked="1"></div></div>
<span id="playlist-bar-info"><span class="playlist-bar-active yt-uix-button-group"><button onclick=";return false;" title="Previous video" type="button" id="playlist-bar-prev-button" class="yt-uix-tooltip yt-uix-tooltip-masked start start-edge yt-uix-button yt-uix-tooltip yt-uix-button-empty" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-prev" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked end yt-uix-button yt-uix-button-empty" onclick=";return false;" id="playlist-bar-next-button" role="button" aria-pressed="false" data-tooltip="Next video"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-next" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="playlist-bar-passive"><button onclick=";return false;" title="Play videos" type="button" id="playlist-bar-play-button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-tooltip yt-uix-button-empty" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-play" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span id="playlist-bar-title">    <span>
Unsaved Playlist (<span class="item-count">0</span>)
    </span>
</span><button type="button" class="yt-uix-button-masked yt-uix-button-reverse yt-uix-button" onclick=";return false;" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-content">Options</span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><div class="yt-uix-button-menu" style="display: none;" bis_skin_checked="1">  <div id="playlist-bar-options-menu" class="passive" bis_skin_checked="1">

    <div id="playlist-bar-extras-menu" bis_skin_checked="1">
        <ul>
      <li><span class="yt-uix-button-menu-item" data-action="clear">
Clear all videos from this list
      </span></li>
  </ul>

    </div>

    <ul>
      <li><span class="yt-uix-button-menu-item" onclick="window.location.href='https://web.archive.org/web/20110825084108/http://www.google.com/support/youtube/bin/answer.py?answer=146749'">Learn more</span></li>
    </ul>
  </div>
</div></button></span>
        <a id="playlist-bar-lists-back" href="#">
Return to active list
        </a>

<span id="playlist-bar-controls" class="yt-uix-button-group"><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked start playlist-bar-active yt-uix-button yt-uix-button-toggle yt-uix-button-empty" onclick=";return false;" id="playlist-bar-autoplay-button" role="button" aria-pressed="false" data-tooltip="Turn autoplay on"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-autoplay" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked start playlist-bar-active yt-uix-button yt-uix-button-toggle yt-uix-button-empty" onclick=";return false;" id="playlist-bar-shuffle-button" role="button" aria-pressed="false" data-tooltip="Turn shuffle on"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-shuffle" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked end end-edge yt-uix-button yt-uix-button-empty" onclick=";return false;" id="playlist-bar-toggle-button" role="button" aria-pressed="false" data-tooltip="Hide playlist"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-toggle" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span>      </div>
    </div>

<div id="playlist-bar-tray-container" bis_skin_checked="1"><div id="playlist-bar-tray" class="yt-uix-slider yt-uix-slider-fluid" bis_skin_checked="1"><button class="yt-uix-button playlist-bar-tray-button yt-uix-slider-prev" onclick="return false;"><img class="yt-uix-slider-prev-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Previous"></button><button class="yt-uix-button playlist-bar-tray-button yt-uix-slider-next" onclick="return false;"><img class="yt-uix-slider-next-arrow" src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Next"></button><div class="yt-uix-slider-body" bis_skin_checked="1"><div id="playlist-bar-tray-content" class="yt-uix-slider-slide" bis_skin_checked="1"><ol class="video-list"></ol><ol id="playlist-bar-help"><li class="empty playlist-bar-help-message">Your queue is empty. Add videos to your queue using this button: <img src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="addto-button-help"><br> or <a href="https://web.archive.org/web/20110825084108/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3Dhttp%253A%252F%252Fwww.youtube.com%252Fwatch%253Fv%253DmqCeTFO0fr8%2526gl%253DUS%2526hl%253Den%2526amp%253Bhas_verified%253D1&amp;hl=en_US&amp;ltmpl=sso">sign in</a> to load a different list.</li></ol></div><div class="yt-uix-slider-shade-left" bis_skin_checked="1"></div><div class="yt-uix-slider-shade-right" bis_skin_checked="1"></div></div></div><div id="playlist-bar-save" bis_skin_checked="1"></div><div id="playlist-bar-lists" class="dark-lolz" bis_skin_checked="1"></div><div id="playlist-bar-loading" bis_skin_checked="1"><img src="//web.archive.org/web/20110825084108im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Loading..."><span id="playlist-bar-loading-message">Loading...</span><span id="playlist-bar-saving-message" class="hid">Saving...</span></div><div id="playlist-bar-template" style="display: none;" data-video-thumb-url="//i4.ytimg.com/vi/__video_encrypted_id__/default.jpg" bis_skin_checked="1"><!--<li class="playlist-bar-item yt-uix-slider-slide-unit __classes__" data-video-id="__video_encrypted_id__"><a href="__video_url__" title="__video_title__"><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="__video_title__" data-thumb-manual="true" data-thumb="__video_thumb_url__" ></span></span><span class="screen"></span><span class="count"><strong>__list_position__</strong></span><span class="play"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif"></span><span class="yt-uix-button delete"><img class="yt-uix-button-icon-playlist-bar-delete" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Delete"></span></a><span dir="ltr" class="title yt-uix-slider-title"><span>__video_title__<span class="uploader">by __video_username__</span></span></span></li>--></div><div id="playlist-bar-next-up-template" style="display: none;" bis_skin_checked="1"><!--<div class="playlist-bar-next-thumb"><span class="video-thumb ux-thumb-64 "><span class="clip"><img src="//i4.ytimg.com/vi/__video_encrypted_id__/default.jpg" alt="Thumbnail" ></span></span></div>--></div></div>  </div>


    <div id="shared-addto-menu" style="display: none;" bis_skin_checked="1">
      <form method="post" action="/web/20110825084108/http://www.youtube.com/addto_ajax">
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
  <input name="session_token" type="hidden" value="Hgy-Dbiox0BThv_mueYIp6W4F3V8MTMxNDM0ODA2N0AxMzE0MjYxNjY3"></form>

  </div>




  </div>
  <!-- end page -->
      
    <script id="www-core-js" src="//web.archive.org/web/20110825084108js_/http://s.ytimg.com/yt/jsbin/www-core-vflfUqI9K.js"></script>



  <script>
        yt.setConfig({
      'XSRF_TOKEN': 'Hgy-Dbiox0BThv_mueYIp6W4F3V8MTMxNDM0ODA2N0AxMzE0MjYxNjY3',
      'XSRF_FIELD_NAME': 'session_token'
    });
    yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);

    yt.setConfig('XSRF_REDIRECT_TOKEN', 'MBUKOoau_YJyL3HukRpilSxJmZ98MTMxNDM0ODA2OEAxMzE0MjYxNjY4');

    yt.setConfig('LOGGED_IN', false);
    yt.setConfig('ENABLE_WATCH6', false);

    yt.setConfig('FEEDBACK_LOCALE_LANGUAGE', "en");
    yt.setConfig('FEEDBACK_LOCALE_EXTRAS', {"experiments": "914025,913103,910207", "accept_language": null});
  </script>

    <script>
    yt.setConfig({
      'VIDEO_ID': "mqCeTFO0fr8",
      'VIDEO_USERNAME': "ShayLoss"    });
    yt.net.ajax.setToken('watch_actions_ajax', "");

    if (window['gYouTubePlayerReady']) {
      onYouTubePlayerReady();
      yt.registerGlobal('gYouTubePlayerReady');
    }
  </script>

      <script>
      yt.setMsg('FLASH_UPGRADE', "\u003cdiv  class=\"yt-alert yt-alert-error yt-alert-player yt-rounded \"\u003e\u003cimg s\u0072c=\"\/\/s.ytimg.com\/yt\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\u003cdiv  class=\"yt-alert-content\"\u003e        You need to upgrade your Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n\u003c\/div\u003e\u003c\/div\u003e");
  yt.setConfig({
    'PLAYER_CONFIG': {"url": "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/s.ytimg.com\/yt\/swfbin\/watch_as3-vfl6JvYrj.swf", "min_version": "8.0.0", "args": {"ptk": "ShayLoss%2Buser", "enablecsi": "1", "mpvid": "AASrUGPb1jO4J_La", "aftv": true, "hl": "en_US", "autohide": "2", "csi_page_type": "watch5ad", "keywords": "Shaycarl,shaytards,weight,loss,exercise,fitness,workout,muscle,body,bodybuilding,health,training,lose,gym,bodybuilder,muscles,personal,flex,healthy,trainer,nutrition", "cr": "US", "cc3_module": "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/s.ytimg.com\/yt\/swfbin\/subtitles3_module-vflLEMQh9.swf", "host_language": "en", "no_get_video_log": "1", "fmt_list": "43\/640x360\/99\/0\/0,34\/640x360\/9\/0\/115,18\/640x360\/9\/0\/115,5\/320x240\/7\/0\/0", "targeting_video_doc_id": "", "trueview": true, "theme": "dark", "invideo": true, "ad_preroll": "1", "tk": "Se0sRyooRj8WOL3rks7QM78FtisdlmBTOX4iu8EV6IWL4BtSwsa2Ag==", "sffb": true, "cc_font": "Arial Unicode MS, arial, verdana, _sans", "pyv_in_related_cafe_experiment_id": "", "ad_channel_code_instream": "afv_instream,afv_instream_shortform,afv_instream_shortform_Education,afv_instream_us,afv_user_shayloss,ytps_default,ytel_detailpage,yt_mpvid_AASrUGPb1jO4J_La,yt_cid_52232,ivpypp,ytexp_914025.913103.910207", "cafe_experiment_id": "", "timestamp": 1314261667, "cc_asr": 1, "ad_host": "ca-host-pub-7811251425547615", "ad_eurl": "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/www.youtube.com\/video\/mqCeTFO0fr8", "showpopout": 1, "mpu": true, "url_encoded_fmt_stream_map": "url=http%3A%2F%2Fo-o.preferred.sjc07s15.v1.lscache4.c.youtube.com%2Fvideoplayback%3Fsparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Cratebypass%26fexp%3D914025%252C913103%252C910207%26itag%3D43%26ip%3D207.0.0.0%26signature%3D1F92A549898DC220ECD98DF2305A00EFA2438615.D026D8CD5258BC7CE48D15F36C73065802C40E96%26sver%3D3%26ratebypass%3Dyes%26expire%3D1314284400%26key%3Dyt1%26ipbits%3D8%26id%3D9aa09e4c53b47ebf\u0026quality=medium\u0026fallback_host=tc.v1.cache4.c.youtube.com\u0026type=video%2Fwebm%3B+codecs%3D%22vp8.0%2C+vorbis%22\u0026itag=43,url=http%3A%2F%2Fo-o.preferred.sjc07s15.v2.lscache2.c.youtube.com%2Fvideoplayback%3Fsparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Calgorithm%252Cburst%252Cfactor%26fexp%3D914025%252C913103%252C910207%26algorithm%3Dthrottle-factor%26itag%3D34%26ip%3D207.0.0.0%26burst%3D40%26sver%3D3%26signature%3D765EC9482F236620B426257EE571F610765A3D40.88394D5199A8D2E463EE351112223B88313F832A%26expire%3D1314284400%26key%3Dyt1%26ipbits%3D8%26factor%3D1.25%26id%3D9aa09e4c53b47ebf\u0026quality=medium\u0026fallback_host=tc.v2.cache2.c.youtube.com\u0026type=video%2Fx-flv\u0026itag=34,url=http%3A%2F%2Fo-o.preferred.sjc07s15.v17.lscache4.c.youtube.com%2Fvideoplayback%3Fsparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Cratebypass%26fexp%3D914025%252C913103%252C910207%26itag%3D18%26ip%3D207.0.0.0%26signature%3D06D7A09A182B41BF7B96AF7218BE327F02E94315.14AE1555E53046B2A4EBF4D4DF5FC0A8B7E0F7B0%26sver%3D3%26ratebypass%3Dyes%26expire%3D1314284400%26key%3Dyt1%26ipbits%3D8%26id%3D9aa09e4c53b47ebf\u0026quality=medium\u0026fallback_host=tc.v17.cache4.c.youtube.com\u0026type=video%2Fmp4%3B+codecs%3D%22avc1.42001E%2C+mp4a.40.2%22\u0026itag=18,url=http%3A%2F%2Fo-o.preferred.sjc07s15.v18.lscache3.c.youtube.com%2Fvideoplayback%3Fsparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Calgorithm%252Cburst%252Cfactor%26fexp%3D914025%252C913103%252C910207%26algorithm%3Dthrottle-factor%26itag%3D5%26ip%3D207.0.0.0%26burst%3D40%26sver%3D3%26signature%3D561E1598570E94D442E22D46D37E25B95B07C0BE.4BDBE3C28B49970D67CDCAF1FF473A86A11BE31A%26expire%3D1314284400%26key%3Dyt1%26ipbits%3D8%26factor%3D1.25%26id%3D9aa09e4c53b47ebf\u0026quality=small\u0026fallback_host=tc.v18.cache3.c.youtube.com\u0026type=video%2Fx-flv\u0026itag=5", "ad_flags": 0, "endscreen_module": "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/s.ytimg.com\/yt\/swfbin\/endscreen-vflMhlq26.swf", "cid": 52232, "referrer": null, "afv_instream_max": 15000, "ad_logging_flag": 1, "t": "vjVQa1PpcFPGvlPtByWzWxuLmYPGHNlm29AT2zT1gpU=", "instream": true, "ttsurl": "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/www.youtube.com\/api\/timedtext?sparams=asr_langs%2Ccaps%2Cexpire%2Cv\u0026asr_langs=en%2Cja\u0026caps=asr\u0026expire=1314284400\u0026key=yttt1\u0026signature=269753B7B14CB5F5E1CC9145D34054F34811F071.3FF2D806CCF193249D5B26020E3400E75668A19D\u0026hl=en", "fexp": "914025,913103,910207", "shortform": true, "allow_embed": 1, "ad_host_tier": "507884", "rvs": "view_count=120662\u0026author=ShayLoss\u0026length_seconds=173\u0026id=WWqUYUbTX50\u0026title=I%27ll+get+a+colonic%21,view_count=112446\u0026author=ShayLoss\u0026length_seconds=367\u0026id=MPPq_n5Lf6M\u0026title=Shayloss+daily+fail%21,view_count=250040\u0026author=ShayLoss\u0026length_seconds=630\u0026id=LgZZBsaMd74\u0026title=POOP+THE+FAT+AWAY%3F%21,view_count=139445\u0026author=ShayLoss\u0026length_seconds=274\u0026id=rk-sqfPTsvI\u0026title=Just+say+no%21+%28to+the+icecream%29,view_count=89990\u0026author=SHAYTARDS\u0026length_seconds=169\u0026id=U-mjlFnNFkw\u0026title=go+crazy%21,view_count=167378\u0026author=SHAYTARDS\u0026length_seconds=384\u0026id=lIw03YZZnbA\u0026title=KICK+HIM+IN+THE+BALLS%21,view_count=237335\u0026author=SHAYTARDS\u0026length_seconds=664\u0026id=fWpigBe63g0\u0026title=GIRL+FIGHTS+KID%21,view_count=50315\u0026author=caseylavere\u0026length_seconds=282\u0026id=MQgcxp_2usY\u0026title=BALL+S+TO+THE+FACE,view_count=41915\u0026author=caseylavere\u0026length_seconds=672\u0026id=28A9kZicR_k\u0026title=FURNITURE+RODEO", "vq": "auto", "sendtmp": "1", "ad3_module": "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/s.ytimg.com\/yt\/swfbin\/ad3-vflUL2SDk.swf", "gut_tag": "\/4061\/ytpwatch\/main_52232", "ptchn": "ShayLoss", "length_seconds": 300, "enablejsapi": 1, "plid": "AASrUGPbg5Qw-1Ii", "tmi": "1", "afv": true, "ad_tag": "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/ad-g.doubleclick.net\/pfadx\/com.ytpwatch.education\/main_52232;sz=WIDTHxHEIGHT;mpvid=AASrUGPb1jO4J_La;!c=52232;ytexp=914025.913103.910207;ytps=default;klg=en;kvid=mqCeTFO0fr8;kpu=ShayLoss;kr=F;kt=K;ko=y;kpid=52232;kga=-1;ytvt=w;afct=site_content;kgg=-1;kcr=us;u=mqCeTFO0fr8|52232;afv=1;khd=0;dc_dedup=1;shortform=1;", "ad_video_pub_id": "ca-pub-6219811747049371", "ad_slots": "0", "watermark": "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/s.ytimg.com\/yt\/swf\/logo-vfl_bP6ud.swf,http:\/\/s.ytimg.com\/yt\/swf\/hdlogo-vfloR6wva.swf", "oid": "gLi1Wnd5Yi8", "cc_module": "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/s.ytimg.com\/yt\/swfbin\/subtitle_module-vfl4_w-Vt.swf", "ad_channel_code_overlay": "invideo_overlay_480x70_cat27,afv_overlay,afv_user_shayloss,ytps_default,ytel_detailpage,yt_mpvid_AASrUGPb1jO4J_La,yt_cid_52232,ivpypp,ytexp_914025.913103.910207", "as_launched_in_country": "1", "video_id": "mqCeTFO0fr8", "dclk": true, "sk": "8KyiQbZMKhRNzJQ_eo80WfYJ18UDRT_RC"}, "url_v9as2": "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/s.ytimg.com\/yt\/swfbin\/watch-vfls4aJuf.swf", "params": {"allowscriptaccess": "always", "allowfullscreen": "true", "bgcolor": "#000000"}, "attrs": {"width": "640", "id": "movie_player", "height": "390"}, "url_v8": "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/s.ytimg.com\/yt\/swfbin\/watch_v8-vflbXRtNm.swf"}
  });

      (function() {
        var config = yt.getConfig('PLAYER_CONFIG');
        var forceUpdate = yt.www.watch.player.updateConfig(config) ||
            false;
        yt.flash.update(config, forceUpdate);
      })();
  </script>





  <script>
    yt.setConfig({
      'BLOCK_USER_XSRF': "",
      'SUBSCRIBE_AXC': "",

      'IS_WIDESCREEN': false,
      'IS_HD_AVAILABLE': false,
      'PREFER_LOW_QUALITY': false,
      'WIDE_PLAYER_STYLES': ["watch-wide-mode"],
      'COMMENT_SHARE_URL': "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/www.youtube.com\/comment?lc=_COMMENT_ID_",
      'ALLOW_EMBED': true,
      'ALLOW_RATINGS': true,
      'AJAX_MODE': false,

      'LIST_AUTO_PLAY_ON': false,
      'LIST_AUTO_PLAY_VALUE': 1,
      'SHUFFLE_VALUE': 0,
      'SHUFFLE_ENABLED': false,
      'YPC_CAN_RATE_VIDEO': true,
      'YPC_SHOW_VPPA_CONFIRM_RATING': false,

        'TTS_URL': "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/www.youtube.com\/api\/timedtext?sparams=asr_langs%2Ccaps%2Cexpire%2Cv\u0026asr_langs=en%2Cja\u0026caps=asr\u0026expire=1314284400\u0026key=yttt1\u0026signature=269753B7B14CB5F5E1CC9145D34054F34811F071.3FF2D806CCF193249D5B26020E3400E75668A19D\u0026hl=en",

        'SHOW_SUBSCRIBE_UPSELL': true,



        'USE_CHIPS_UI': false,




      'PLAY_ALL_MAX': 480    });

    yt.setMsg({
        'SUBSCRIBE_UPSELL_MESSAGE': "If you like ShayLoss's videos, subscribe!\n",
      'LOADING': "Loading...",
      'WATCH_ERROR_MESSAGE': "This feature is not available right now. Please try again later."    });



    

yt.setMsg({
  'UNBLOCK_USER': "Are you sure you want to unblock this user?",
  'BLOCK_USER': "Are you sure you want to block this user?"
});
yt.setConfig('BLOCK_USER_XSRF', '');



      yt.setConfig({
    'COMMENT_SHARE_URL': "https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/www.youtube.com\/comment?lc=_COMMENT_ID_",
    'COMMENTS_SIGNIN_URL': "https:\/\/web.archive.org\/web\/20110825084108\/https:\/\/www.google.com\/accounts\/ServiceLogin?uilel=3\u0026service=youtube\u0026passive=true\u0026continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3Dhttp%253A%252F%252Fwww.youtube.com%252Fwatch%253Fv%253DmqCeTFO0fr8%2526gl%253DUS%2526hl%253Den%2526amp%253Bhas_verified%253D1\u0026hl=en_US\u0026ltmpl=sso",
    'COMMENTS_THRESHHOLD': -5,
    'COMMENTS_FILTER': 0,
    'COMMENTS_PAGE_SIZE': 10,
    'COMMENTS_COUNT': 1466,
    'COMMENTS_YPC_CAN_POST_OR_REACT_TO_COMMENT': true,
    'COMMENT_VOTE_XSRF' : '',
    'COMMENT_ACTIONS_XSRF' : '',
    'COMMENT_SOURCE': "w",
    'ENABLE_LIVE_COMMENTS': false
  });

  yt.net.ajax.setToken('reactions_ajax', "");
  yt.net.ajax.setToken('link_servlet', "");
  yt.net.ajax.setToken('comment_servlet', "");
  yt.net.ajax.setToken('comment_voting', "");

  yt.setMsg({
    'COMMENT_OK': "OK",
    'COMMENT_BLOCKED': "You have been blocked by the owner of this video.",
    'COMMENT_CAPTCHAFAIL': "The response to the letters on the image was not correct, please try again.",
    'COMMENT_PENDING': "Comment Pending Approval!",
    'COMMENT_ERROR_EMAIL': "Error, account unverified (see email)",
    'COMMENT_ERROR': "Error, try again",
    'REACTION_NONE_SELECTED': "Your reaction?"
  });


  yt.pubsub.subscribe('init', yt.www.comments.watch5.addCommentMouseListener);




    yt.pubsub.subscribe('init', yt.www.watch.player.init);
    yt.pubsub.subscribe('init', yt.www.watch.actions.init);


    yt.pubsub.subscribe('init', function() {
      var description = _gel('watch-description');
      if (!_hasclass(description, 'yt-uix-expander-collapsed')) {
        yt.www.watch.watch5.handleToggleDescription(description);
      }
    });





      yt.pubsub.subscribe('init', function() {
        yt.www.watch.watch5.showFlashUpgradePromo('flash10-promo-div', [9,0,115]);
      });

  </script>

  
  <script>
  yt.pubsub.subscribe('init', function() {
    yt.setConfig('PYV_GOOGLE_AD_SV_LABEL', "Promoted Video");
      yt.setMsg({
    'RENTAL': "Rental",
    'VIEWS': "views"
  });

    var iframeContents = "\n\n  \u003cscript\u003e\n    var google_max_num_ads = '1';\n    var google_ad_output = 'js';\n    var google_ad_type = 'text';\n    var google_only_pyv_ads = true;\n    var google_video_doc_id = 'yt_mqCeTFO0fr8';\n    var google_ad_request_done = parent.yt.www.ads.pyv.pyvWatchAfcCallback;\n      var google_ad_client = 'ca-pub-6219811747049371';\n      var google_ad_block = '3';\n      var google_ad_host = 'ca-host-pub-7811251425547615';\n      var google_ad_host_tier_id = '507884';\n      var google_page_url = 'https:\/\/web.archive.org\/web\/20110825084108\/http:\/\/www.youtube.com\/video\/mqCeTFO0fr8';\n      var google_ad_channel = 'PyvWatchInRelated+PyvWatchPctr4+PyvYTWatch+PyvWatchNoAdX+pw+2843746182+2843746181+0854550288+afv_user_shayloss+ytps_default+ytel_detailpage+yt_mpvid_AASrUGPb1jO4J_La+yt_cid_52232+ivpypp+ytexp_914025.913103.910207';\n      var google_language = \"en\";\n      var google_eids = ['40210044'];\n  \u003c\/script\u003e\n\n  \u003cscript s\u0072c=\"http:\/\/pagead2.googlesyndication.com\/pagead\/show_ads.js\"\u003e\u003c\/script\u003e\n";
    yt.www.ads.pyv.loadPyvIframe(iframeContents);
  });
  </script>

          <script>
        window['google_language'] = 'en';
      yt.registerGlobal('google_cust_age', 'google_cust_gender', 'google_language');
    </script>

  <script>
    window['google_ad_type'] = 'image';
    window['google_ad_width'] = '300';
    window['google_ad_block'] = '2';
    window['google_ad_client'] = 'ca-pub-6219811747049371';
    window['google_ad_host'] = 'ca-host-pub-7811251425547615';
    window['google_ad_host_tier_id'] = '507884';
    window['google_ad_channel'] = '2843746182+2843746181+0854550288+afv_user_shayloss+ytps_default+ytel_detailpage+yt_mpvid_AASrUGPb1jO4J_La+yt_cid_52232+ivpypp+ytexp_914025.913103.910207';
    window['google_video_doc_id'] = 'yt_mqCeTFO0fr8';
    window['google_color_border'] = 'FFFFFF';
    window['google_color_bg'] = 'FFFFFF';
    window['google_color_link'] = '0033CC';
    window['google_color_text'] = '444444';
    window['google_color_url'] = '0033CC';
    window['google_language'] = 'en';
    window['google_alternate_ad_url'] = 'https://web.archive.org/web/20110825084108/http://www.youtube.com/adsense_script.html?v=2&amp;id=watch-channel-brand-div&amp;depth=2';
    window['google_page_url'] = 'https://web.archive.org/web/20110825084108/http://www.youtube.com/video/mqCeTFO0fr8';
    if('1' == '0') {
      window['google_targeting'] = 'content';
      window['google_scs'] = 'false';
   }
    yt.registerGlobal('google_ad_type', 'google_ad_width', 'google_ad_block',
        'google_ad_client', 'google_ad_host', 'google_ad_host_tier_id',
        'google_ad_channel', 'google_video_doc_id', 'google_color_border',
        'google_color_bg', 'google_color_link', 'google_color_text',
        'google_color_url', 'google_language', 'google_alternate_ad_url',
        'google_eids', 'google_targeting_video_doc_id', 'google_page_url',
        'google_targeting', 'google_previous_watch');
  </script>
      <script>
        yt.pubsub.subscribe('init', function() {
          var scriptEl = document.createElement('script');
          scriptEl.src = 'https://web.archive.org/web/20110825084108/http://pagead2.googlesyndication.com/pagead/show_companion_ad.js';
          var headEl = document.getElementsByTagName('head')[0];
          headEl.appendChild(scriptEl);
        });
      </script>

      <script>
    function afcAdCall() {
      var channels = '2843746182+2843746181+0854550288+afv_user_shayloss+ytps_default+ytel_detailpage+yt_mpvid_AASrUGPb1jO4J_La+yt_cid_52232+ivpypp+ytexp_914025.913103.910207';
      channels = channels.replace('0854550288','0854550287');
      channels = channels.replace('afv_brand_mpu','0854550287');
      channels = channels + "+afc_on_page";
      window['google_ad_format'] = '300x250_as';
      window['google_ad_height'] = '250';
      window['google_page_url'] = 'https://web.archive.org/web/20110825084108/http://www.youtube.com/video/mqCeTFO0fr8';

      if('1' == '0') {
        window['google_targeting'] = 'content';
        window['google_scs'] = 'false';
      }

      var afcOptions = {
        'ad_type' : 'image',
        'format' : '300x250_as',
        'ad_block' : '2',
        'ad_client' : 'ca-pub-6219811747049371',
        'ad_host' : 'ca-host-pub-7811251425547615',
        'ad_host_tier_id' : '507884',
        'ad_channel' : channels,
        'video_doc_id' : 'yt_mqCeTFO0fr8',
        'color_border' : 'FFFFFF',
        'color_bg' : 'FFFFFF',
        'color_link' : '0033CC',
        'color_text' : '444444',
        'color_url' : '0033CC',
        'language' : 'en',
        'alternate_ad_url' : 'https://web.archive.org/web/20110825084108/http://www.youtube.com/adsense_script.html?v=2&amp;id=watch-channel-brand-div&amp;depth=2'
      };
      var afcCallback = function() {
        if (window.google && google.ads && google.ads.Ad) {
          yt.www.watch.ads.handleShowAfvCompanionAdDiv(false);
          var ad = new google.ads.Ad('ca-pub-6219811747049371', 'google_companion_ad_div', afcOptions);
        } else {
          yt.setTimeout(afcCallback, 200);
        }
      };
      afcCallback();
    }
    yt.registerGlobal('google', 'afcAdCall', 'google_ad_format', 'google_ad_height', 'google_page_url', 'google_targeting');
  </script>
      <script>
        yt.pubsub.subscribe('init', function() {
          var scriptEl = document.createElement('script');
          scriptEl.src = 'https://web.archive.org/web/20110825084108/http://www.google.com/jsapi?autoload=%7B%22modules%22%3A%5B%7B%22name%22%3A%22ads%22%2C%22version%22%3A%221%22%2C%22callback%22%3A%22(function()%7B%7D)%22%2C%22packages%22%3A%5B%22content%22%5D%7D%5D%7D';
          var headEl = document.getElementsByTagName('head')[0];
          headEl.appendChild(scriptEl);
        });
      </script>


        <script src="https://web.archive.org/web/20110825084108js_/http://www.googletagservices.com/tag/static/google_services.js"></script>
    <script>
      (function() {
        if (!window.googletag) {
          return;
        }
        var gutSlot = googletag.defineSlot("/4061/ytpwatch/main_52232", [[300, 250], [300, 60]], 'yt-gut-content');
        gutSlot.set('ad_type', 'flash');
        gutSlot.addService(googletag.companionAds());
        googletag.enableServices();

        yt.setConfig('gut_slot', gutSlot);
        yt.setConfig('yt_gut_invideo_size', gutSlot.getSizes()[0]);
        yt.setConfig('yt_gut_instream_size', gutSlot.getSizes()[1]);
      })();
    </script><script type="text/javascript" src="https://web.archive.org/web/20110825084108js_/http://pagead2.googlesyndication.com/pagead/show_companion_ad.js"></script>






  

  

    
      <script>
      yt.setConfig('TIMING_ACTION', 'watch5ad');
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
    'DRAGDROP_BINARY_URL': "\/\/web.archive.org\/web\/20110825084108\/http:\/\/s.ytimg.com\/yt\/jsbin\/www-dragdrop-vflnLpLpf.js",
    'PLAYLIST_BAR_PLAYING_INDEX': -1,
    'LIST_COPY_ON_EDIT_ENABLED': false,
    'LOAD_WATCH_LATER_LIST': null  });

    yt.net.ajax.setToken("addto_ajax_logged_out", "P9znOAkGTptL6NrdK9og5Za80EF8MEAxMzE0MjYxNjY4");

    yt.www.lists.init();





        yt.pubsub.subscribe('init', yt.www.thumbnaildelayload.init);





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

  


  


<iframe frameborder="0" src="javascript:&quot;&quot;" style="border: 0px; vertical-align: bottom;" allow="autoplay 'self'; fullscreen 'self'"></iframe><table id="completeTable" cellpadding="0" cellspacing="0" class="yt-suggest-table" style="visibility: hidden; left: 189px; top: 43px; width: 366px;"></table><iframe id="yt-suggest-iframe" allow="autoplay 'self'; fullscreen 'self'" style="left: 189px; top: 43px; width: 366px; height: 0px;"></iframe></body></html>