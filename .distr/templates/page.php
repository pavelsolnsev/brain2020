<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$lang = $get_lang = isset($_GET['lang']) && $_GET['lang'] != '' ? urldecode( strtolower($_GET['lang']) ) : 'ru';
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';
$external_url = isset($_GET['external_url']) ? urldecode( strtolower($_GET['external_url']) ) : '';
$link = isset($_GET['link']) ? urldecode( strtolower($_GET['link']) ) : '';


session_cache_limiter('nocache');
session_start();
if ( !isset($_SESSION['lang']) || isset($_GET['reset_lang']) ) {
	$_SESSION['lang'] = $get_lang;
} else {
	$lang = $_SESSION['lang'];
}

include_once $ROOT . 'chunks/translation.php';
include_once $ROOT . 'chunks/common.php';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<?php

include_once $ROOT . 'version.php';

if ($_SERVER['SERVER_NAME'] != '127.0.0.1') {
  date_default_timezone_set('Europe/Moscow');
  $_REQUEST["eId"] = 53087123; // указываем актуальный eId для данного мероприятия


  include_once($ROOT . 'getinfo.php');

  $JSONDATA = json_decode(file_get_contents($ROOT . './content.json'));

  include_once $ROOT . 'prices.php'; // подключаем файл
}

?>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="facebook-domain-verification" content="p6thzp6cx07ti5umqihkgqn2w0e2hk" />
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title><?= $titlePage?></title>
  <base href="<?= $BASE_HREF ?>">

  <meta property="og:title" content="<?= $titlePage?>">
  <meta property="og:description" content="<?= $descriptionPage?>">
  <meta property="og:url" content="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
  <meta property="og:image" content="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">
  <link rel="image_src" href="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">

  <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
  <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-text-marquee@latest/dist/jquery.text-marquee.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">


  <link href="css/fonts.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css" media="(max-width: 1920px)">

  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'}); var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:''; j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl; f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-M7T7GF'); </script>

  <!-- Facebook Pixel Code -->
  <script>!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '1244809279052987'); fbq('track', 'PageView');</script>
  <!-- End Facebook Pixel Code -->

</head>

<body class="<?= $version ? 'version-'.$version : '' ?> <?= $partner ? 'partner-'.$partner : '' ?>">

  <!-- Facebook Pixel Code -->
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1244809279052987&ev=PageView&noscript=1"></noscript>
  <!-- End Facebook Pixel Code -->

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7T7GF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

  <div class="wrapper">

    {% block blocks %}
    {% endblock %}

    <section class="popups" hidden>
      {% block popups %}
      {% endblock %}
    </section>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="libs/jquery.marquee.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
  <script src="https://syn.su/js/lander.js?v=2" defer="defer"></script>

  <script src="js/script.js"></script>

  <script>
		function thanks_page() {
			setTimeout(function(){
			location.replace('https://synergyglobal.ru/forums/brain2021/price');
			}, 100);
		}
  </script>
  
  <a href="http://sydi.ru" style="display: none">Synergy Digital</a>
</body>
</html>
