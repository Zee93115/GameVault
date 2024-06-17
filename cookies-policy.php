<?php
session_start();
include 'connection.php'; // Include your database connection file

// Fetch reviews
$reviews = $con->query("SELECT reviews.review, reviews.timestamp, users.username 
                        FROM reviews 
                        JOIN users ON reviews.user_id = users.id 
                        ORDER BY reviews.timestamp DESC");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

?><!DOCTYPE html> <html lang="en-US"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head> <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png"> <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png"> <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png"> <link rel="manifest" href="favicon/site.php"> <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#646464"> <meta name="msapplication-TileColor" content="#2b2e33"> <meta name="theme-color" content="#ffffff">  <link rel="stylesheet" href="assets/css/bootstrap-min5.css">  <script src="assets/js/jquery-3.4.1.min.js"></script> <script src="assets/js/bootstrap-popper-bootbox.js"></script>  <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="Content-type" content="text/html;charset=UTF-8"> <meta http-equiv="Content-Language" content="en-us"> <link rel="alternate" type="application/rss+xml" title="RSS Feed for FreeToGame.com" href="rss/games">  <title>Cookies Policy</title>  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm" id="mainNav"> <div class="container"> <a href="index.php" class="navbar-brand mt-n2 mb-n2"><img src="assets/images/freetogame-logo.png" height="45" alt="FreeToGame"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbarResponsive"> <ul class="navbar-nav mr-auto"> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="games.php" id="dropdown02" data-toggle="dropdown" aria-expanded="false">Free Games</a> <ul class="dropdown-menu" aria-labelledby="dropdown02"> <li><a class="dropdown-item" href="games/mmorpg.php">MMORPG</a></li> <li><a class="dropdown-item" href="games/shooter.php">Shooter</a></li> <li><a class="dropdown-item" href="games/moba.php">MOBA</a></li> <li><a class="dropdown-item" href="games/anime.php">Anime</a></li> <li><a class="dropdown-item" href="games/battle-royale.php">Battle Royale</a></li> <li><a class="dropdown-item" href="games/strategy.php">Strategy</a></li> <li><a class="dropdown-item" href="games/fantasy.php">Fantasy</a></li> <li><a class="dropdown-item" href="games/sci-fi.php">Sci-Fi</a></li> <li><a class="dropdown-item" href="games/card.php">Card Games</a></li> <li><a class="dropdown-item" href="games/racing.php">Racing</a></li> <li><a class="dropdown-item" href="games/fighting.php">Fighting</a></li> <li><a class="dropdown-item" href="games/social.php">Social</a></li> <li><a class="dropdown-item" href="games/sports.php">Sports</a></li> <div class="dropdown-divider"></div> <a class="dropdown-item a2" href="games.php">Free-To-Play Games</a> </ul> </li> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="browser.php" id="dropdown03" data-toggle="dropdown" aria-expanded="false">Browser Games</a> <ul class="dropdown-menu" aria-labelledby="dropdown03"> <li><a class="dropdown-item" href="browser/mmorpg.php">Browser MMORPG</a></li> <li><a class="dropdown-item" href="browser/shooter.php">Browser Shooter</a></li> <li><a class="dropdown-item" href="browser/anime.php">Browser Anime</a></li> <li><a class="dropdown-item" href="browser/strategy.php">Browser Strategy</a></li> <li><a class="dropdown-item" href="browser/fantasy.php">Browser Fantasy</a></li> <li><a class="dropdown-item" href="browser/sci-fi.php">Browser Sci-Fi</a></li> <li><a class="dropdown-item" href="browser/racing.php">Browser Racing</a></li> <li><a class="dropdown-item" href="browser/social.php">Browser Social</a></li> <li><a class="dropdown-item" href="browser/sports.php">Browser Sports</a></li> <div class="dropdown-divider"></div> <a class="dropdown-item a2" href="browser.php">Browser Games</a> </ul> </li> <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="giveaways.php">Special Offers</a> </li> <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="api-doc.php">API</a> </li> <li class="nav-item dropdown"> <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-ellipsis-h"></i> </a> <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown"> <h6 class="dropdown-header">GAMEVAULT</h6> </div> </li> </ul> <ul class="navbar-nav ml-auto mr-4"> <li class="nav-item"> <a class="nav-link js-scroll-trigger" data-toggle="tooltip" data-placement="bottom" title="Search Games" href="search.php"><i class="fas fa-search"></i><span class="ml-1 d-lg-none"> Search</span></a> </li>  <nav class="navbar">
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
</div> </li> </ul> </div> </div> </nav> <meta> <script type="text/javascript">(function(){var _z=console;Object.defineProperty(window,"console",{get:function(){if(_z._commandLineAPI){throw"Sorry, Can't execute scripts!"}
return _z},set:function(val){_z=val}})});</script> </head>  <body> <main> <div id="content-wrap" class="container text my-1 z-depth-1 py-5"> <h1>Cookies Policy</h1> <p>Last updated: June 4, 2024</p>

<p>This Cookies Policy explains what cookies are and how we use them. You should read this policy so you can understand what types of cookies we use, the information we collect using cookies, and how that information is used.</p>

<p>Cookies do not typically contain any information that personally identifies a user, but personal information that we store about you may be linked to the information stored in and obtained from cookies. For further information on how we use, store, and keep your personal data secure, see our Privacy Policy.</p>

<p>We do not store sensitive personal information, such as mailing addresses or account passwords, in the cookies we use.</p>
 <h2>Definitions</h2> <p>For the purposes of this Cookies Policy:</p> <ul> <li> <strong>Company</strong> (referred to as either "the Company", "We", "Us" or "Our" in this Cookies Policy) refers to Digiwalls Media.</li> <li> <strong>You</strong> means the individual accessing or using the Website, or a company, or any legal entity on behalf of which such individual is accessing or using the Website, as applicable.</li> <li> <strong>Cookies</strong> means small files that are placed on Your computer, mobile device or any other device by a website, containing details of your browsing history on that website among its many uses.</li> <li> <strong>Website</strong> refers to GameVault.com, accessible from https://www.GameVault.com.</li> </ul> <h2>The use of the Cookies</h2> <p>Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close your web browser.</p> <p>We use both session and persistent Cookies for the purposes set out below:</p> <ul> <li> <p><strong>Necessary / Essential Cookies</strong> </p> <p>Type: Session Cookies</p> <p>Administered by: Us</p> <p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p> </li> <li> <p><strong>Functionality Cookies</strong></p> <p>Type: Persistent Cookies</p> <p>Administered by: Us</p> <p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p> </li> <li> <p><strong>Analytics Cookies</strong></p> <p>Administered by: Google</p> <p>Purpose: We use analytics cookies (Google Analytics) to gather anonymous statistical information help us understand which parts of our website interest our visitors and if they experience any errors. We use these cookies to test different designs and features for our site, and we also use them to help us monitor how our visitors reach our sites. We can also through these Cookies to (a) understand the demographic and location of our visitors (b) evaluate how our new features are being received by users. Google will not associate the IP address transferred in the context of Google Analytics with any other data held by Google. You may refuse the use of cookies by selecting the appropriate settings on your browser. Furthermore, users can prevent the collection of data about their use of the website (including their IP address) generated by the cookie, and the processing of data by Google, by downloading and installing the browser plug-in through the following link: <a href="http://tools.google.com/dlpage/gaoptout?hl=en">http://tools.google.com/dlpage/gaoptout?hl=en</a>.</p> </li> <li> <p><strong>Google AdSense</strong></p> <p>Administered by: Google</p> <p>Purpose: We use Google AdSense to display ads on some of our pages. Google AdSense uses cookies to serve ads based on a user's interests and browsing history. You can view Google's Privacy Policy and learn more about how to opt-out of Google's cookie usage at any time by visiting this page: <a href="https://policies.google.com/privacy">https://policies.google.com/privacy</a>.</p> </li> </ul> <h2>Your Choices Regarding Cookies</h2> <p>If You prefer to avoid the use of Cookies on the Website, first You must disable the use of Cookies in your browser and then delete the Cookies saved in your browser associated with this website. You may use this option for preventing the use of Cookies at any time.</p> <p>If You do not accept Our Cookies, You may experience some inconvenience in your use of the Website and some features may not function properly.</p> <p>If You'd like to delete Cookies or instruct your web browser to delete or refuse Cookies, please visit the help pages of your web browser.</p> <ul> <li>For the Chrome web browser, please visit this page from Google: https://support.google.com/accounts/answer/32050</li> <li>For the Internet Explorer web browser, please visit this page from Microsoft: http://support.microsoft.com/kb/278835</li> <li>For the Firefox web browser, please visit this page from Mozilla: https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored</li> <li>For the Safari web browser, please visit this page from Apple: https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac</li> </ul> <p>For any other web browser, please visit your web browser's official web pages.</p> <h2>More Information about Cookies</h2> <p>You can learn more about cookies: <a href="https://en.wikipedia.org/wiki/HTTP_cookie">Cookies from Wikipedia</a>.</p> <h2>Contact Us</h2> <p>If you have any questions about this Cookies Policy, You can contact us:</p> <ul> <li>By email: contactusgamevault@gmail.com</li> </ul> </div></main> </body>  <footer class="page-footer font-small deep-dark pt-3">  <div class="container text-center text-md-left">  <div class="row text-center text-md-left mt-3 pb-3">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="about.php">About Us</a> </p> <p> <a href="api-doc.php">API</a> </p> <p> <a href="contact.php">Contact Us</a> </p> <p> </p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="faq.php">Help/FAQ</a> </p> <p> <a href="support.php">Support &amp; Bugs</a> </p> <p><a href="https://www.biblegateway.com/passage/?search=Proverbs+16%3A3&version=NIV" target="_blank"> Proverbs 16:3 </a></p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3"> <p> <a href="privacy-policy.php">Privacy Policy</a> </p> <p> <a href="cookies-policy.php">Cookies Policy</a> </p> <p> <a href="terms-of-use.php">Terms of Use</a> </p> </div>   <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3"> <img style="width: 109px;" src="assets/images/logo-footer.png" alt="FreeToGame"> </div>  </div>  <hr>  <div class="row d-flex align-items-center">  <div class="col-md-7 col-lg-8">  <p class="text-center text-md-left small">© 2024 PIT IT223 - Web Systems and Technology, all rights reserved. All trademarks are property of their respective owners.</p> </div>   <div class="col-md-5 col-lg-4 ml-lg-0">  <div class="text-center text-md-right"> <ul class="list-unstyled list-inline"> <li class="list-inline-item"> <a href="https://https://www.facebook.com/gamevaultwebsite/" aria-label="Facebook" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-facebook-f"></i> </a> </li> <li class="list-inline-item"> <a href="https://www.instagram.com/itsgamevault/?hl=en" aria-label="Twitter" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-twitter"></i> </a> </li> <li class="list-inline-item"> <a rel="nofollow" type=" application/rss+xml" aria-label="RSS" href="rss/games" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fas fa-rss"></i> </a> </li> </ul> </div> </div>  </div>  </div>  </footer>  <div id="cookie-popup" class="hidden"> <span>We use cookies to make your browsing experience better. <button id="cookie-accept" class="mx-2 btn btn-outline-secondary btn-sm">Accept</button> <a href="cookies-policy.php" class="btn btn-outline-secondary btn-sm">Learn More</a></span><button id="cookie-close" class="btn btn-sm float-right">X</button> </div> <style>#cookie-popup{position:fixed;bottom:0;width:100%;background-color:#1c1e22;padding:10px;z-index:999;text-align:center}#cookie-popup.hidden{display:none}</style> <script async>if(document.cookie.indexOf("cookie-consent=accepted")===-1){const timezoneOffset=new Date().getTimezoneOffset();if(timezoneOffset<=0&&timezoneOffset>=-180){document.getElementById('cookie-popup').classList.remove('hidden');function setCookieAndHidePopup(){document.cookie='cookie-consent=accepted; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';document.getElementById('cookie-popup').classList.add('hidden')}
document.getElementById('cookie-accept').addEventListener('click',setCookieAndHidePopup);document.getElementById('cookie-close').addEventListener('click',setCookieAndHidePopup)}}</script> <script async type="text/javascript">$("[data-toggle='tooltip']").tooltip();</script> <script async type="text/javascript">function notSignedIn(){alert("You must be signed in to perform this action")}</script>  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7K8TZTQV4J"></script> <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}
gtag('js',new Date());gtag('config','G-7K8TZTQV4J');</script>  <link rel="stylesheet" href="assets/css/style-min3.css" media="print" onload="this.media='all'"> <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" media="print" onload="this.media='all'"> 
</html>