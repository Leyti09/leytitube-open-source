<?php
   $__tabs = (object) [
    "Dashbroad" => (object) [
        "label" => "Dashboard",
        "url" => "/dashboard",
        "selected" => false,
    ],
    "video_manager" => (object) [
        "label" => "Uploads",
        "url" => "/my_videos",
        "selected" => false,
    ],

    "favorite_videos" => (object) [
        "label" => "Playlists",
        "url" => "/playlists",
        "selected" => false,
    ],


    "playlists" => (object) [
        "label" => "History",
        "url" => "/history",
        "selected" => false,
    ],

    "friends" => (object) [
        "label" => "Search History",
        "url" => "/search_history",
        "selected" => false,
    ],

    "watchlist" => (object) [
        "label" => "Watch Later",
        "url" => "/watchlist",
        "selected" => false,
    ],
];
?>



      <div>
<div id="uploads" style="padding:25px;">
                                        <a href="/my_videos_upload">
                                            <span class="yt-uix-button-group " style="">
                                                <button onclick=";window.location.href=this.getAttribute('href');return false;" href="/my_videos_upload" type="button" style="height:35px;width:105px;" class="start yt-uix-tooltip-reverse  yt-uix-button yt-uix-button-default yt-uix-tooltip"><span class="yt-uix-button-icon-wrapper">
                                                <span class="yt-valign-trick"></span></span><span class="yt-uix-button-content" style="font-size:11px;">Upload</span>
                                                </button>
                                            </span>
                                        </a>
                                        <button onclick=";return false;" href="#" type="button" style="margin-left: -3px;height:35px;width:35px;" class="end yt-uix-tooltip-reverse   yt-uix-button yt-uix-button-default yt-uix-tooltip yt-uix-button-empty" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">
                                            <a href="/my_videos_upload">
                                                <span class="yt-uix-button-icon-wrapper">
                                                    <span class="yt-valign-trick"></span></span><span class="yt-uix-button-content"><img class="yt-uix-button-arrow" src="./EraCast - Dashboard_files/pixel-vfl3z5WfW(1).gif" alt="">
                                                </span>
                                            </a>
                                            <ul class="yt-uix-button-menu yt-uix-button-menu-dark hid" role="menu" aria-haspopup="true" style="min-width: 28px; left: 490.375px; top: 97.0781px; display: none;">
                                                <a href="/my_videos_upload"></a>
                                                <li role="menuitem" id="aria-id-93589831653"><a href="/my_videos_upload"></a><a href="/my_videos_upload_stream" class=" yt-uix-button-menu-item">Live Stream</a></li>
                                                <li role="menuitem" id="aria-id-93589831653"><a href="/dashboard#ex1" rel="modal:open" class=" yt-uix-button-menu-item">Create Playlist</a></li>
                                            </ul>
                                        </button>
                                    </div>







<div id="browse-side-column" class="ytg-2col ytg-last">
    <ol class="navigation-menu">
        <?php foreach($__tabs as $_tab) { 
            if(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) != $_tab->url)
                $_tab->selected = true;
            ?>
            <li class="menu-item">
                <a class="<?php echo $_tab->selected ? true : "selected"; ?>" href="<?php echo $_tab->url; ?>">
                    <?php echo $_tab->label; ?>
                </a>
            </li>
        <?php } ?>
    </ol>
</div>
