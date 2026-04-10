<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$lang = $get_lang = isset($_GET['lang']) && $_GET['lang'] != '' ? urldecode( strtolower($_GET['lang']) ) : 'ru';
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';
$link = isset($_GET['link']) ? urldecode( strtolower($_GET['link']) ) : '';
$external_url = isset($_GET['external_url']) ? urldecode( strtolower($_GET['external_url']) ) : '';

session_cache_limiter('nocache');
session_start();
if ( !isset($_SESSION['lang']) || isset($_GET['reset_lang']) ) {
	$_SESSION['lang'] = $get_lang;
} else {
	$lang = $_SESSION['lang'];
}

include_once $ROOT . 'chunks/translation.php';
include_once $ROOT . 'chunks/common.php';
include_once $ROOT . 'version.php';

include_once $ROOT . 'config.php';
include_once $ROOT . 'elastic.php';

?>

<!DOCTYPE html>

<html lang="<?= $lang ?>">
<head>
	<base href="<?= $BASE_HREF ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?= $titlePage?></title>

	<meta property="og:title" content="<?= $titlePage?>">
	<meta property="og:description" content="<?= $descriptionPage?>">
	<meta property="og:url" content="<?= $URL ?>">
	<meta property="og:image" content="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">
	<link rel="image_src" href="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">

	<link href="https://example.com/img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://example.com/img/favicon.ico" type="image/x-icon" rel="shortcut icon">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-text-marquee@latest/dist/jquery.text-marquee.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link href="css/fonts.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css" media="(max-width: 1920px)">
</head>

<body class="<?= $version ? 'version-'.$version : '' ?> <?= $partner ? 'partner-'.$partner : '' ?> lang-<?= $lang ?>">
	<div class="wrapper">
		{% block blocks %}
		{% endblock %}
		<section class="popups" hidden>
			{% block popups %}
			{% endblock %}
		</section>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
	<script src="js/script.js"></script>

	<?php if ($version == 'online') : ?>

		<script>
			function initPopupSuccess(popupIdString) {
				if ($(formSubmited).hasClass('form-redirect')) {
					<?php if ( $partner ) { ?>
					setTimeout(function(){location.href = "./online-price/?date=autodate&partner=<?=$partner?>";}, 0);
					<?php } else {?>
					setTimeout(function(){location.href = "./online-price/";}, 0);
					<?php } ?>
				} else {
					popupIdString = '#popup-thanks';
					$.fancybox.open($(popupIdString));
				}
			}
		</script>
	<?php else : ?>
		<script>
			function initPopupSuccess(popupIdString) {

				if ($(formSubmited).hasClass('form-redirect')) {
					<?php if ( $partner ) { ?>
					setTimeout(function(){location.href = "./ochnoe/?date=autodate&partner=<?=$partner?>";}, 10);
					<?php } else {?>
					setTimeout(function(){location.href = "./ochnoe/";}, 10);
					<?php } ?>
				} else {
					popupIdString = '#popup-thanks';
					$.fancybox.open($(popupIdString));
				}
			}
		</script>

	<?php endif; ?>

	<a href="https://example.com" style="display: none">Портфолио</a>
</body>
</html>
