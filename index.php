<?php
   $appTitle = $_POST['title'];
   $appLink = $_POST['text'];
   $vidUrl = $_SERVER['REQUEST_URI'];
   $videoVid = explode("vkr=", $vidUrl);
   $videoVid = $videoVid[1].urldecode($appLink.$appTitle);
   $vidDe = urldecode($videoVid);
   $vidEn = urlencode($videoVid);
   $MyDomain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=== 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
if(!empty($vidDe)){
header("Location:  $MyDomain/download.php?vkr=$videoVid");
}
?>
<html>
   <head>
      <title>AllDLByVKr : All Video Downloader By Vijay Kumar</title>
     <meta name="title" content="AllDLbyVKr -  Online Download Video, Audio, GIF Photo from YouTube & More">
      <meta name="description" content="AllDLbyVKr -  Online download videos from YouTube, All in One DL, Download videos from twitter, instagram, facebook, mxtakatak, josh, ipl, ted, tiktok - Get2Mate">
      <meta name="keywords" content="AllDLbyVKr - online video downloader website,online video downloader app 2022,online video downloader chrome,online video downloader android,online video downloader for pc,online video downloader free,online video downloader for iphone,online video downloader and trimmer,online youtube video downloader app,best online video download app,online video download browser,online video converter downloader free,youtube video downloader cutter online,how to create online video downloader website,online video downloader download youtube dailymotion... videos with 1-click,online video downloader editor,online video downloader embed code,online video downloader for pc windows 10,online video downloader for sony liv,best online video downloader for android,online youtube video downloader for pc windows 10,online video downloader github,online video downloader iphone free,online video downloader idm,online video editor no download,online video downloader reviews,online video download software,online video download site,online video song download,online class video download sinhala,youtube online download video save to gallery,best online video downloader from any site android,best online video downloader from any site,how to online video download,online video downloader with trim,online youtube video downloader website,online video download karne wala app,online youtube video downloader for pc windows 7,online video download youtube,zee5 video downloader online">
      <meta name="robots" content="index,follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="en">
      <meta name="revisit-after" content="2 days">
      <meta name="author" content="TheOfficialVKr">
      <meta itemprop="name" content="Get2Mate -AllDLbyVKr - Online Download Video, Audio, GIF Photo from YouTube & More">
      <meta itemprop="description" content="AllDLbyVKr -  Online download videos from YouTube, All in One DL, Download videos from twitter, instagram, facebook, mxtakatak, josh, ipl, ted, tiktok - Get2Mate">
      <meta itemprop="image" content="https://github.com/therealvk/allDLbyVKr/raw/main/logo.png">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="Get2Mate -AllDLbyVKr - Online Download Video, Audio, GIF Photo from YouTube & More">
      <meta name="twitter:description" content="AllDLbyVKr -  Online download videos from YouTube, All in One DL, Download videos from twitter, instagram, facebook, mxtakatak, josh, ipl, ted, tiktok - Get2Mate">
      <meta name="twitter:site" content="theofficialvkr">
      <meta name="twitter:creator" content="itsmethevkr">
      <meta name="twitter:image:src" content="https://github.com/therealvk/allDLbyVKr/raw/main/logo.png">
      <meta property="og:title" content="AllDLbyVKr -  Online Download Video, Audio, GIF Photo from YouTube & More">
      <meta property="og:description" content="AllDLbyVKr -  Online download videos from YouTube, All in One DL, Download videos from twitter, instagram, facebook, mxtakatak, josh, ipl, ted, tiktok - Get2Mate">
      <meta property="og:image" content="https://github.com/therealvk/allDLbyVKr/raw/main/logo.png">
      <meta property="og:url" content="/">
      <meta property="og:site_name" content="AllDLbyVKr -  Online Download Video, Audio, GIF Photo from YouTube & More">
      <meta property="fb:app_id" content="427710135379286">
      <meta property="og:locale" content="en_US">
      <meta property="og:type" content="website">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="https://github.com/therealvk/allDLbyVKr/raw/main/logo.png">
      <meta name="theme-color" content="#ffffff">
      <meta name="viewport" content="width=device-width ,  initial-scale=1 ,  shrink-to-fit=no">
      <script type="text/javascript" src="/js/bootstrap_002.js"></script>
      <script src="/js/bootstrap.js"></script>
      <script src="/js/jquery-1.js"></script>
      <link rel="stylesheet" href="/css/w3.css">
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" type="text/css" href="/css/bootstrap_002.css">
      <link href="/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
      <script src="/pwaApp.js" defer></script>
     <link rel="manifest" crossorigin="use-credentials" href="/manifest.webmanifest">
   </head>
   <body>
      <header>
         <div class="navv">
            <input type="checkbox" id="navv-check">
            <div class="navv-header">
               <div class="navv-title">
                  <a href="/demo">  AllDLbyVKr </a> 
               </div>
            </div>
            <div class="navv-btn">
               <label for="navv-check">
               <span></span>
               <span></span>
               <span></span>
               </label>
            </div>
            <div class="navv-links">
               <a href="//instagram.com/theofficialvkr" target="_blank">Follow</a>
               <a href="https://tinyurl.com/g2mapkdl" target="_blank">Download App</a>
               <a href="http://get2mate.ga/contacts.html" target="_blank">Contact us</a>
               <a href="#" target="_blank">Code</a>
               <a href="mailto:contactvkr@yahoo.com" target="_blank">Mail us</a>
            </div>
         </div>
         <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
         <div class="overlay"></div>
         <!-- The HTML5 video element that will create the background video on the header -->
         <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="/media/Mt_Baker.mp4" type="video/mp4">
         </video>
         <!-- The header content -->
         <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center midvkr">
               <div class="w-100 text-white">
                  <h1 class="h1vkr">Online Video Downloader</h1>
                  <p class="lead mb-0">Download Videos From 1000+ Sites</p>
                  <form method="get" action="##">
                     <input required placeholder="Video Name Or URL" type="text"  id="vkr" name="vkr">
                     <button type="submit" role="button" class="buttonvkr" id="btnID" onclick="show()">Download/Search</button>
                  </form>
               </div>
            </div>
         </div>
      </header>
      <style>
            #loadingImage{
            height: 80vh;
            position: fixed;
            z-index: 99999999999999999999999;
            top: 10%;
            left: 6%;
            width:90%;
            border-radius:60px;
            }
      </style>
      <img src="https://github.com/therealvk/allDLbyVKr/raw/main/loader.gif" id="loadingImage" width="100%">
          <script>
                window.onload = codeAddress;
            function codeAddress(){
                   document.getElementById('loadingImage')
                    .style.display = "none";
               }
        function show() {
         var btnV = document.getElementById('btnID');
               document.getElementById('loadingImage')
                    .style.display = "block"; 
                 }
        
    </script>
      <!-- Page section example for content below the video header -->
      <section class="my-5">
         <div class="container">
            <div class="row">
               <div class="col-md-8 mx-auto">
                  <h1 class="h1vkr centerHvkr">Supported Websites</h1>
               </div>
            </div>
         </div>
      </section>
      <section>
         <center>
            <div class="gridvkr-container gridvkr-container--fit">
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FAEDED;"><img alt="Tiktok downloader" src="/media/images/tiktok.jpg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Tiktok</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F2F7;"><img alt="Facebook downloader" src="/media/images/facebook.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Facebook</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FCEFF4;"><img alt="Instagram downloader" src="/media/images/instagram.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Instagram</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F2F8FC;"><img alt="Twitter downloader" src="/media/images/twitter.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Twitter</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FFF4EE;"><img alt="Voot downloader" src="/media/images/voot.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Voot</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FEF5EA;"><img alt="Ozee downloader" src="/media/images/youtube.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">YouTube</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #EFFAF7;"><img alt="Download Anime" src="/media/images/9anime.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">9Anime</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #EEEEEE;"><img alt="VidMe downloader" src="/media/images/vidme.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">VidMe</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #edfcff;"><img alt="Dailymotion downloader" src="/media/images/dailymotion.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Dailymotion</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FEF1EB;"><img alt="Soundcloud downloader" src="/media/images/soundcloud.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Soundcloud</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="">
                     <div class="icon-container" style="background: #EEEEEE;"><img alt="9GAG downloader" src="/media/images/9gag.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">9GAG</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #e2f2f4;"><img alt="AudioBoom downloader" src="/media/images/audio_boom.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">AudioBoom</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #e8e8e8;"><img alt="Funny Or Die downloader" src="/media/images/funny_or_die.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Funny Or Die</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FDFAEC;"><img alt="Youtube downloader" src="/media/images/imdb.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">IMDB</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F6EBEB;"><img alt="Liveleak downloader" src="/media/images/liveleak.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Liveleak</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FDEEEE;"><img alt="Ted downloader" src="/media/images/ted.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Ted</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F9FD;"><img alt="Vimeo downloader" src="/media/images/vimeo.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Vimeo</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #ECF9F6;"><img alt="Vine downloader" src="/media/images/vine.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Vine</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F3F6;"><img alt="VK downloader" src="/media/images/vk.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">VK</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FFFDEB;"><img alt="Sonyliv downloader" src="/media/images/sonyliv.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Sonyliv</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FFFAEB;"><img alt="TVF Play downloader" src="/media/images/tvf.jpg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">TVF Play</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #EEF9FD;"><img alt="Youku downloader" src="/media/images/youku.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Youku</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="/media/images/rutube.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Rutube</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="/media/images/viu.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Viu</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="/media/images/josh-app-icon.jpg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Josh</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="/media/images/MX-TakaTak_9.jpg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">MX Takatak</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="/media/images/np-iplImg.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">IPLt20</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="/media/images/tumblr.svg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Tumblr</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="/media/images/likee.svg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Likee</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="/media/images/gaana.svg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Gana</small>
                  </a>
               </div>
            </div>
            <center> And 1000+ Other website too </center>
            <br />
         </center>
      </section>
      <footer>
         <h3>Copyright &copy; <?php echo  date("Y"); ?> <b>|</b> Designed by <a href="https://instagram.com/theofficialvkr">Vijay Kumar</a></h3>
      </footer>
   </body>
</html>
