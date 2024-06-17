<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html> <html lang="en-US"> 
<!-- Mirrored from www.freetogame.com/giveaway/mu-online-summer-keys by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 08:07:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head> <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png"> <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png"> <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png"> <link rel="manifest" href="../favicon/site.php"> <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#646464"> <meta name="msapplication-TileColor" content="#2b2e33"> <meta name="theme-color" content="#ffffff">  <link rel="stylesheet" href="../assets/css/bootstrap-min5.css">  <script src="../assets/js/jquery-3.4.1.min.js"></script> <script src="../assets/js/bootstrap-popper-bootbox.js"></script>  <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="Content-type" content="text/html;charset=UTF-8"> <meta http-equiv="Content-Language" content="en-us"> <link rel="alternate" type="application/rss+xml" title="RSS Feed for FreeToGame.com" href="../rss/games"> <title>Mu Online Summer Pack Key Giveaway</title> <meta name="description" content="To celebrate this Summer season, FreeToGame and Webzen are working together to bring YOU free in-game items for Mu Online."> <link rel="canonical" href="mu-online-summer-keys.php">  <meta property="og:title" content="Mu Online Summer Pack Key Giveaway"> <meta property="og:locale" content="en_US"> <meta property="og:url" content="https://www.freetogame.com/giveaway/mu-online-summer-keys"> <meta property="og:image" content="https://www.freetogame.com/offers/1/mu-summer.jpg"> <meta property="og:description" content="To celebrate this Summer season, FreeToGame and Webzen are working together to bring YOU free in-game items for Mu Online."> <meta property="og:site_name" content="FreeToGame.com"> <meta property="fb:admins" content="109927137154968">  <meta name="twitter:card" content="summary_large_image"> <meta name="twitter:site" content="@FreeToGamecom"> <meta name="twitter:title" content="Mu Online Summer Pack Key Giveaway"> <meta name="twitter:description" content="To celebrate this Summer season, FreeToGame and Webzen are working together to bring YOU free in-game items for Mu Online."> <meta name="twitter:image:src" content="https://www.freetogame.com/offers/1/mu-summer.jpg"> <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.freetogame.com"},{"@type":"ListItem","position":2,"name":"Special Offers","item":"https://www.freetogame.com/giveaways"},{"@type":"ListItem","position":3,"name":"Mu Online Summer Pack Key Giveaway"}]}</script>  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm" id="mainNav"> <div class="container"> <a href="../index.php" class="navbar-brand mt-n2 mb-n2"><img src="../assets/images/freetogame-logo.png" height="45" alt="FreeToGame"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbarResponsive"> <ul class="navbar-nav mr-auto"> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="../games.php" id="dropdown02" data-toggle="dropdown" aria-expanded="false">Free Games</a> <ul class="dropdown-menu" aria-labelledby="dropdown02"> <li><a class="dropdown-item" href="../games/mmorpg.php">MMORPG</a></li> <li><a class="dropdown-item" href="../games/shooter.php">Shooter</a></li> <li><a class="dropdown-item" href="../games/moba.php">MOBA</a></li> <li><a class="dropdown-item" href="../games/anime.php">Anime</a></li> <li><a class="dropdown-item" href="../games/battle-royale.php">Battle Royale</a></li> <li><a class="dropdown-item" href="../games/strategy.php">Strategy</a></li> <li><a class="dropdown-item" href="../games/fantasy.php">Fantasy</a></li> <li><a class="dropdown-item" href="../games/sci-fi.php">Sci-Fi</a></li> <li><a class="dropdown-item" href="../games/card.php">Card Games</a></li> <li><a class="dropdown-item" href="../games/racing.php">Racing</a></li> <li><a class="dropdown-item" href="../games/fighting.php">Fighting</a></li> <li><a class="dropdown-item" href="../games/social.php">Social</a></li> <li><a class="dropdown-item" href="../games/sports.php">Sports</a></li> <div class="dropdown-divider"></div> <a class="dropdown-item a2" href="../games.php">Free-To-Play Games</a> </ul> </li> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="../browser.php" id="dropdown03" data-toggle="dropdown" aria-expanded="false">Browser Games</a> <ul class="dropdown-menu" aria-labelledby="dropdown03"> <li><a class="dropdown-item" href="../browser/mmorpg.php">Browser MMORPG</a></li> <li><a class="dropdown-item" href="../browser/shooter.php">Browser Shooter</a></li> <li><a class="dropdown-item" href="../browser/anime.php">Browser Anime</a></li> <li><a class="dropdown-item" href="../browser/strategy.php">Browser Strategy</a></li> <li><a class="dropdown-item" href="../browser/fantasy.php">Browser Fantasy</a></li> <li><a class="dropdown-item" href="../browser/sci-fi.php">Browser Sci-Fi</a></li> <li><a class="dropdown-item" href="../browser/racing.php">Browser Racing</a></li> <li><a class="dropdown-item" href="../browser/social.php">Browser Social</a></li> <li><a class="dropdown-item" href="../browser/sports.php">Browser Sports</a></li> <div class="dropdown-divider"></div> <a class="dropdown-item a2" href="../browser.php">Browser Games</a> </ul> </li> <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="../giveaways.php">Special Offers</a> </li> <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="../api-doc.php">API</a> </li> <li class="nav-item dropdown"> <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-ellipsis-h"></i> </a> <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown"> <h6 class="dropdown-header">GAMEVAULT</h6> </div> </li> </ul> <ul class="navbar-nav ml-auto mr-4"> <li class="nav-item"> <a class="nav-link js-scroll-trigger" data-toggle="tooltip" data-placement="bottom" title="Search Games" href="../search.php"><i class="fas fa-search"></i><span class="ml-1 d-lg-none"> Search</span></a> </li> <nav class="navbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <span class="nav-link">
                <?php
                if (isset($_SESSION['username'])) {
                    echo "GREETINGS! " . strtoupper(htmlspecialchars($_SESSION['username']));
                } else {
                    echo "GREETINGS! Guest";
                }
                ?>
            </span>
        </li> 
    </ul>
    </div> 
</div> 
</nav> 
</div> 
</div> 
</div>  <script async src="../assets/js/video-hover.js"></script> <meta> <script type="text/javascript">(function(){var _z=console;Object.defineProperty(window,"console",{get:function(){if(_z._commandLineAPI){throw"Sorry, Can't execute scripts!"}
return _z},set:function(val){_z=val}})});</script> </head> <body>  <div aria-atomic="true" style="position: fixed; min-height: 0px; z-index:1000;"> <div class="toast email" style="position: relative; top: 20px; left: 20px;" data-delay="2000"> <div class="toast-header"> <strong class="mr-auto">Verification email sent successfully!</strong> <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div> </div> </div>   <main> <div class="container py-4"> <div class=""> <span class="small"><a class="nocolor" href="../index.php">Home</a> &gt; <a class="nocolor" href="../giveaways.php">Special Offers</a> &gt; <span class="text-muted">Mu Online Summer Pack Key Giveaway</span></span> <h1 class="mb-3">Mu Online Summer Pack Key Giveaway <small><span class="badge badge-primary align-right">FREE</span></small> </h1> <hr> </div> <div class="giveaway card p-4 bg-primary"> <div class="row align-items-center"> <div class="col-md-6"> <img class="img-fluid mb-2" width="521" height="210" src="../offers/1/mu-summer.jpg" alt="Mu Online Summer Pack Key Giveaway"> <div class="row"> <div class="ml-2 badge badge-dark pt-2 col-6 col-sm-7 col-md-8 col-lg-9 pr-3 pl-3"> <div class="progress text-center" style="height: 12px; width: 100%"> <div class="progress-bar bg-purple" role="progressbar" style="width: -0%" aria-valuenow="-0" aria-valuemin="0" aria-valuemax="100"></div> </div> </div> <span class="ml-2 badge badge-secondary py-2 px-2 align-right mr-2">-0% LEFT</span> <span class="badge badge-purple py-2 px-2"><i class="fas fa-gift"></i></span> </div> </div> <div class="col-md-6 p-3"> <center> <h3 class="my-3">Claim your Mu Online Pack Key!</h3> <p class="text-center">To celebrate this Summer season, FreeToGame and Webzen are working together to bring YOU free in-game items for Mu Online.</p> <button class="btn btn-secondary btn-md ml-0" type="submit" onclick="notSignedIn()"><i class="fas fa-gift mr-2"></i><strong>THIS GIVEAWAY HAS ENDED</strong></button> </center> </div> </div> </div> <div class="row mt-3 mb-4"> <div class="col-lg-4 col-md-6 py-2"> <div class="card h-100 border-primary"> <div class="card-body"> <h4 class="card-title">How to Redeem Your Key</h4> <p class="card-text text-muted">* If you are new to Webzen, please <a href="http://www.webzen.com/" target="_blank">create an account</a>, install a game, choose a server and create a new character.<br> <br> 1. Go to <a href="http://www.webzen.com/Coupon" target="_blank">webzen.com/Coupon</a><br> 2. Log in with your account.<br> 3. Enter the key (without hyphens).<br> 4. Select Mu Online, server, character and click “Redeem Now”.</p> </div> </div> </div> <div class="col-lg-4 col-md-6 py-2"> <div class="card h-100 card-body"> <h4 class="card-title">Key Details</h4> <p class="card-text text-muted">Each key unlocks the following:<br>– Scroll Master of Health (7 Days)<br> – Scroll Master of Mana (7 Days) </p> <p> </p> </div> </div> <div class="col-lg-4 col-md-12 py-2"> <div class="card h-100 card-body"> <h4 class="card-title">About</h4> <p class="card-text text text-muted">- Redeemable until: August 27, 2021 - Keys can only be used with an existing WEBZEN account. - Keys are limited to one use per account.</p> </div> </div> </div> <a href="../giveaways.php" class="btn btn-outline-secondary btn-sm float-right">More Offers<i class="ml-1 fas fa-chevron-right"></i></a> <h3>Live Special Offers</h3> <div class="row mt-2 mb-3"> </div> <a href="../games.php" class="btn btn-outline-secondary btn-sm float-right">More Games<i class="ml-1 fas fa-chevron-right"></i></a> <h3>Play For Free</h3> <div class="row mt-2"> <div class="game-card video-card col-md-4" data-video-src="/g/380/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img style=" img { width: 100%; height: auto; aspect-ratio: attr(width) / attr(height); }" class="card-img-top" width="356" height="201" src="../g/380/thumbnail.jpg" alt="Dark Orbit Reloaded - A browser-based 3D space-combat MMO with a massive playerbase!"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo3" loop preload="none" muted></video> <div class="card-body"> <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> <a href="../darkorbit.php" class="stretched-link no-underline"><h4 class="card-title text-truncate">Dark Orbit Reloaded</h4></a> <div class="d-flex justify-content-between align-items-center"> </div> </div> </div> </div> <div class="game-card video-card col-md-4" data-video-src="/g/508/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img style=" img { width: 100%; height: auto; aspect-ratio: attr(width) / attr(height); }" class="card-img-top" width="356" height="201" src="../g/508/thumbnail.jpg" alt="Enlisted - Get ready to command your own World War II military squad in Gaijin and Darkflow Software’s MMO squad-based shooter Enlisted. "> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo3" loop preload="none" muted></video> <div class="card-body"> <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> <a href="../enlisted.php" class="stretched-link no-underline"><h4 class="card-title text-truncate">Enlisted</h4></a> <div class="d-flex justify-content-between align-items-center"> </div> </div> </div> </div> <div class="game-card video-card col-md-4" data-video-src="/g/475/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img style=" img { width: 100%; height: auto; aspect-ratio: attr(width) / attr(height); }" class="card-img-top" width="356" height="201" src="../g/475/thumbnail.jpg" alt="Genshin Impact - If you’ve been looking for a game to scratch that open-world action RPG itch, one with perhaps a bit of Asian flair, then you’re going to want to check out miHoYo’s Genshin Impact."> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo3" loop preload="none" muted></video> <div class="card-body"> <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> <a href="../genshin-impact.php" class="stretched-link no-underline"><h4 class="card-title text-truncate">Genshin Impact</h4></a> <div class="d-flex justify-content-between align-items-center"> </div> </div> </div> </div> </div> </div> </main> <style>img{width:100%;height:auto;aspect-ratio:attr(width) / attr(height)}</style>  <footer class="page-footer font-small deep-dark pt-3">  <div class="container text-center text-md-left">  <div class="row text-center text-md-left mt-3 pb-3">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="../about.php">About Us</a> </p> <p> <a href="../api-doc.php">API</a> </p> <p> <a href="../contact.php">Contact Us</a> </p> <p> </p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="../faq.php">Help/FAQ</a> </p> <p> <a href="../support.php">Support &amp; Bugs</a> </p> <p> <a href="../html-sitemap.php">Sitemap</a> </p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3"> <p> <a href="../privacy-policy.php">Privacy Policy</a> </p> <p> <a href="../cookies-policy.php">Cookies Policy</a> </p> <p> <a href="../terms-of-use.php">Terms of Use</a> </p> </div>   <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3"> <img style="width: 109px;" src="../assets/images/logo-footer.png" alt="FreeToGame"> </div>  </div>  <hr>  <div class="row d-flex align-items-center">  <div class="col-md-7 col-lg-8">  <p class="text-center text-md-left small">© 2024 PIT IT223 - Web Systems and Technology, all rights reserved. All trademarks are property of their respective owners.</p> </div>   <div class="col-md-5 col-lg-4 ml-lg-0">  <div class="text-center text-md-right"> <ul class="list-unstyled list-inline"> <li class="list-inline-item"> <a href="https://www.facebook.com/gamevaultwebsite/" aria-label="Facebook" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-facebook-f"></i> </a> </li> <li class="list-inline-item"> <a href="https://www.instagram.com/itsgamevault/?hl=en" aria-label="Twitter" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-twitter"></i> </a> </li> <li class="list-inline-item"> <a rel="nofollow" type=" application/rss+xml" aria-label="RSS" href="../rss/games" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fas fa-rss"></i> </a> </li> </ul> </div> </div>  </div>  </div>  </footer>  <div id="cookie-popup" class="hidden"> <span>We use cookies to make your browsing experience better. <button id="cookie-accept" class="mx-2 btn btn-outline-secondary btn-sm">Accept</button> <a href="../cookies-policy.php" class="btn btn-outline-secondary btn-sm">Learn More</a></span><button id="cookie-close" class="btn btn-sm float-right">X</button> </div> <style>#cookie-popup{position:fixed;bottom:0;width:100%;background-color:#1c1e22;padding:10px;z-index:999;text-align:center}#cookie-popup.hidden{display:none}</style> <script async>if(document.cookie.indexOf("cookie-consent=accepted")===-1){const timezoneOffset=new Date().getTimezoneOffset();if(timezoneOffset<=0&&timezoneOffset>=-180){document.getElementById('cookie-popup').classList.remove('hidden');function setCookieAndHidePopup(){document.cookie='cookie-consent=accepted; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';document.getElementById('cookie-popup').classList.add('hidden')}
document.getElementById('cookie-accept').addEventListener('click',setCookieAndHidePopup);document.getElementById('cookie-close').addEventListener('click',setCookieAndHidePopup)}}</script> <script async type="text/javascript">$("[data-toggle='tooltip']").tooltip();</script> <script async type="text/javascript">function notSignedIn(){alert("You must be signed in to perform this action")}</script>  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7K8TZTQV4J"></script> <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}
gtag('js',new Date());gtag('config','G-7K8TZTQV4J');</script>  <link rel="stylesheet" href="../assets/css/style-min3.css" media="print" onload="this.media='all'"> <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" media="print" onload="this.media='all'"> </body> 
<!-- Mirrored from www.freetogame.com/giveaway/mu-online-summer-keys by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 08:07:37 GMT -->
</html>