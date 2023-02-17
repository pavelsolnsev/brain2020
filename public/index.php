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

if ( is_local_dev() ) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}
?>

<?php
	$franchising_metrika_head = file_get_contents("https://franch.sbs.edu.ru/franchising_metrika.php?partner={$partner}&uri={$_SERVER['REQUEST_URI']}&host={$_SERVER['HTTP_HOST']}&part=head");
	$franchising_metrika_body = file_get_contents("https://franch.sbs.edu.ru/franchising_metrika.php?partner={$partner}&uri={$_SERVER['REQUEST_URI']}&host={$_SERVER['HTTP_HOST']}&part=body");
?>


<!DOCTYPE html>










<html lang="<?= $lang ?>">
<head>
	<base href="<?= $BASE_HREF ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="facebook-domain-verification" content="p6thzp6cx07ti5umqihkgqn2w0e2hk" />
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?= $titlePage?></title>

	

	<meta property="og:title" content="<?= $titlePage?>">
	<meta property="og:description" content="<?= $descriptionPage?>">
	<meta property="og:url" content="<?= $URL ?>">
	<meta property="og:image" content="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">
	<link rel="image_src" href="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">

	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-text-marquee@latest/dist/jquery.text-marquee.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link href="css/fonts.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css" media="(max-width: 1920px)">

	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'}); var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:''; j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl; f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-M7T7GF');</script>

	<!-- Facebook Pixel Code -->
	<script>!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '1244809279052987'); fbq('track', 'PageView');</script>
	<!-- End Facebook Pixel Code -->

	<?= $franchising_metrika_head ?>

</head>

<body class="<?= $version ? 'version-'.$version : '' ?> <?= $partner ? 'partner-'.$partner : '' ?> lang-<?= $lang ?>">

	<!-- Facebook Pixel Code -->
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1244809279052987&ev=PageView&noscript=1"></noscript>
	<!-- End Facebook Pixel Code -->

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7T7GF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<?= $franchising_metrika_body ?>

	<div class="wrapper">

		

<section class="header">

	<div class="container header__container">

		<div class="header__content">

			<a href="" class="header__logo-link">
				<?php if ($lang == 'ru'): ?>
				<img class="header__logo" src="img/header/logo.svg" alt="">
				
				<?php /* ?><a href="http://vtb.synergy.ru"><img class="header__logo" src="https://vtb.synergy.ru/vtb/img/vtb_logo_white.svg" alt=""></a><?php */ ?>
				
				<?php else: ?>
				<img class="header__logo" src="img/header/logo-en.svg" alt="">
				<?php endif; ?>
			</a>

			
			<div class="header__nav">
				<img loading="lazy" src="img/header/icon_close.svg" class="header__nav_close-pic" alt="">
				<a href="#description" class="header__nav-link scroll"><?= _t('header__nav-link-1') ?></a>
				<a href="<?=$header_speakers_link?>" class="header__nav-link scroll"><?= _t('header__nav-link-2') ?></a>
				<a href="#themes" class="header__nav-link scroll"><?= _t('header__nav-link-3') ?></a>
				<a href="#partners" class="header__nav-link scroll"><?= _t('header__nav-link-4') ?></a>
				<a href="#franchise" class="header__nav-link header__nav-link_franch scroll"><?= _t('header__nav-link-5') ?></a>
				<a class="header__nav-phone" href="tel:<?= $phone_link ?>"><?= $phone ?></a>
				<div class="header__box">
        			<a class="header__nav-button button" href="#popup-reg" data-fancybox data-options='{"autoFocus":false}'><?= _t('header__nav-button') ?></a>
      			</div>
			</div>
			

			<div class="header__contacts">
				<a class="header__phone" href="tel:<?= $phone_link ?>"><?= $phone ?></a>
				<?php if($version == 'brain2023' || $version == 'fullprice') { ?>
					<a class="header__phone" href="tel:<?= $phone_link_desctop ?>"><?= $phone_desctop ?></a>
				<?php } ?>
				

				<?php if($partner != '') { ?>
				<a class="header__mail" href="mailto:<?= $email ?>"><?= $email ?></a>
				<?php } ?>
			</div>

			<div class="header__icon">

				<?php if($partner != '') { ?>
				<a class="header__mail-icon header__img" href="mailto:<?= $email ?>">
					<img src="img/header/mail.png" alt="">
				</a>
				<?php } ?>

				<a class="header__phone-icon header__img" href="tel:<?= $phone_link ?>">
					<img src="img/header/phone.png" alt="">
				</a>
				
				<button class="header__nav_menu " type="button">
					<img loading="lazy" src="img/header/icon_open.svg" class="header__nav_open-pic" alt="">
            	</button>
				
			</div>

      
		</div>
	</div>

</section>


<section class="main intro ">


	<div class="container main__container">

		<div class="main__content">

			<div class="main__intro">

				<div class="main__intro-top">

					<div class="main__info">
						<div class="main__info-item"><?=$date?></div>
						<?php if ($version=='fullprice'||$version=='brain2023'){?>
							<div class="main__info-subdate"><?=$subdate?></div>
						<?php } ?>
						
					</div>

					<div class="main__subtitle"></div>

					<?php /*<h3 class="main__overtitle"><?= _t('main__overtitle') ?></h3>*/ ?>

					<h2 class="main__title"><?= _t('main__title') ?></h2>
					<p class="main__format">Очное участие</p>
					<div class="main__online"><?= _t('main__online') ?></div>

				</div>

				<div class="main__stat">

					<div class="main__stat-item">
						<span class="main__stat-item-num">1</span>
						<span class="main__stat-item-txt">день <br> форума</span>
					</div>
					<?php /*
					<div class="main__stat-item">
						<span class="main__stat-item-num">700</span>
						<span class="main__stat-item-txt">человек</span>
					</div>
					*/ ?>
					<div class="main__stat-item">
						<span class="main__stat-item-num">25</span>
						<span class="main__stat-item-txt">известных <br> экспертов</span>
					</div>
					<div class="main__stat-item">
						<span class="main__stat-item-num">2</span>
						<span class="main__stat-item-txt">специальных <br> гостя</span>
					</div>
					<div class="main__stat-item">
						<span class="main__stat-item-num">3</span>
						<span class="main__stat-item-txt">тысячи&nbsp;человек <br> очно&nbsp;и&nbsp;онлайн</span>
					</div>
				</div>
			</div>

			
			<?php if ($lang != 'en'): ?>
			<div class="main__form">
				<div class="main__form-header">
					<div class="main__form-header_left">
						<img loading="lazy" src="img/main/circle_blue.svg" alt="" class="main__form-header_left-pic">
						<p class="main__form-header_left-text">BRAIN<br><span>2023</span></p>
					</div>
					<div class="main__form-header_center">
						<div class="main__form-header_center-decoration"></div>
					</div>
					<div class="main__form-header_right">
						<div class="main__form-header_right-row">
							<p>2</p>
							<p>0</p>
						</div>
						<img loading="lazy" src="img/main/plus_blue.svg" alt="" class="main__form-header_right-pic">
						<div class="main__form-header_right-row">
							<p>2</p>
							<p>3</p>
						</div>
					</div>
				</div>

				
				

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical main-form form__container lazy">
	<form class="form__content form-redirect" action="<?=$action?>&quote_id=4140&form=popup-form">

		<div class="form__header">
			<div class="form__title"><?= _t("form__title") ?></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      

      <button type="submit" class="form__item form__button button"><?= _t("form__button") ?></button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">&lt;?= _t(&quot;form__button&quot;) ?&gt;</a>
</div>



			</div>
			<?php endif; ?>
			

			<?php if ($lang == 'en'): ?>
				<div class="main__form">
					<div class="main__form-header">
						<div class="main__form-header_left">
							<img loading="lazy" src="img/main/circle_blue.svg" alt="" class="main__form-header_left-pic">
							<p class="main__form-header_left-text">BRAIN<br><span>2021</span></p>
						</div>
						<div class="main__form-header_center">
							<div class="main__form-header_center-decoration"></div>
						</div>
						<div class="main__form-header_right">
							<div class="main__form-header_right-row">
								<p>2</p>
								<p>0</p>
							</div>
							<img loading="lazy" src="img/main/plus_blue.svg" alt="" class="main__form-header_right-pic">
							<div class="main__form-header_right-row">
								<p>2</p>
								<p>0</p>
							</div>
						</div>
					</div>

					
					

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical main-form form__container lazy">
	<form class="form__content form-redirect" action="<?=$action?>&quote_id=4140&form=popup-form">

		<div class="form__header">
			<div class="form__title"><?= _t("form__title") ?></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      

      <button type="submit" class="form__item form__button button"><?= _t("form__button") ?></button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">&lt;?= _t(&quot;form__button&quot;) ?&gt;</a>
</div>



				</div>
			<?php endif; ?>

		</div>
	</div>

	
	<div class="mobileBtn">
		<a class="mobileBtn__button button fancybox" href="#popup-reg" data-fancybox><?= _t('mobile__button') ?></a>
	</div>
	

</section>



<div class="main__runline main__runline_top ">
	<div class="main__runline-item"><?= _t('main__runline-item-1') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-2') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-3') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-4') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-5') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-6') ?></div>
</div>



<section class="description">
  <div class="description__main" id="description">
    <div class="description__about">
      <p class="description__about-title"><?= _t("description__about-title") ?></p>
      <p class="description__about-desc"><?= _t("description__about-desc") ?></p>

      <div class="description__about-emblem"><img src="img/description/emblem_blue.svg" alt=""></div>
      <div class="description__about-year"><span><?= _t("description__about-year") ?></span></div>
    </div>
    <div class="description__brain">
      <p class="description__brain-desc"><?= _t("description__brain-desc-1") ?></p>
      <p class="description__brain-desc"><?= _t("description__brain-desc-2") ?></p>
      <p class="description__brain-desc"><?= _t("description__brain-desc-3") ?></p>

      <div class="description__brain-image"></div>
      <div class="description__brain-emblem">
        <img src="img/description/emblem_blue.svg" alt="" width="105">
      </div>
    </div>
  </div>
</section>
<?php if ($lang != 'en'): ?>




<section class="form_reg_2 form-reg-vertical lazy">


  <div class="container">
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form  form__container lazy">
	<form class="form__content form-redirect" action="<?=$action?>&quote_id=4140&form=popup-form">

		<div class="form__header">
			<div class="form__title"><?= _t("form__title") ?></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      

      <button type="submit" class="form__item form__button button"><?= _t("form__button") ?></button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">&lt;?= _t(&quot;form__button&quot;) ?&gt;</a>
</div>


  </div>
</section>

<?php /*?>
<section class="headliners lazy" id="headliners">
  <div class="headliners__main">
    <p class="headliners__title title-section"><?= _t('headliners__title') ?></p>
    <div class="headliners__list">

      <!--div class="headliners__list-item">
        <div class="headliners__list-item-photo">
          <img src="img/headliners/keho.jpg" alt="">
        </div>
        <div class="headliners__list-item-content">
          <img class="headliners__list-item-emblem" src="img/headliners/emblem1_blue.svg" alt="" width="155">
          <div class="headliners__list-item-text">
            <p class="headliners__list-item-name">Джон Кехо</p>
            <p class="headliners__list-item-info">Преподаватель, писатель, активный и&nbsp;сознательный член общества. Автор мирового бестселлера &laquo;Сила ума&raquo;.</p>
          </div>
          <a href="#popup-speakers-keho" class="headliners__list-item-button fancybox" data-fancybox>Подробнее</a>
        </div>
      </div-->



        <div class="headliners__list-item">
        <div class="headliners__list-item-photo">
          <img src="img/headliners/labkovskij.jpg" alt="">
        </div>
        <div class="headliners__list-item-content">
          <img class="headliners__list-item-emblem" src="img/headliners/emblem2_blue.svg" alt="" width="155">
          <div class="headliners__list-item-text">
            <p class="headliners__list-item-name">Михаил Лабковский</p>
            <p class="headliners__list-item-info">Российский психолог, писатель, юрист, телеведущий и&nbsp;радиоведущий.</p>
          </div>
          <a href="#popup-speakers-labkovskij" class="headliners__list-item-button fancybox" data-fancybox>Подробнее</a>
        </div>
      </div>
      

    </div>
  </div>
</section>

<?php */?>

<?php endif; ?>




<section class="speakers lazy" id="speakers">
  <p class="speakers__title title-section"><?= _t('speakers__title') ?></p>

  <div class="speakers__list">

    <?php if ( $lang == 'ru' ) { ?>

    
 










<div class="speakers__list-item speakers__list-item_1">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/n-kozlov.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-n-kozlov-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-n-kozlov-info') ?></p>
  </div>
  
</div>








<div class="speakers__list-item speakers__list-item_">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/filatov.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-filatov-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-filatov-info') ?></p>
  </div>
  
  <a href="#popup-speakers-filatov" class="speakers__list-item-button fancybox" data-fancybox><?= _t('speakers__button') ?></a>
  
</div>








<div class="speakers__list-item speakers__list-item_3">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/goncharov.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-goncharov-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-goncharov-info') ?></p>
  </div>
  
  <a href="#popup-speakers-goncharov" class="speakers__list-item-button fancybox" data-fancybox><?= _t('speakers__button') ?></a>
  
</div>








<div class="speakers__list-item speakers__list-item_4">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/borisova.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-borisova-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-borisova-info') ?></p>
  </div>
  
  <a href="#popup-speakers-borisova" class="speakers__list-item-button fancybox" data-fancybox><?= _t('speakers__button') ?></a>
  
</div>








<div class="speakers__list-item speakers__list-item_">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/starchenko.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-starchenko-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-starchenko-info') ?></p>
  </div>
  
  <a href="#popup-speakers-starchenko" class="speakers__list-item-button fancybox" data-fancybox><?= _t('speakers__button') ?></a>
  
</div>








<div class="speakers__list-item speakers__list-item_3">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/radaeva.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-radaeva-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-radaeva-info') ?></p>
  </div>
  
  <a href="#popup-speakers-radaeva" class="speakers__list-item-button fancybox" data-fancybox><?= _t('speakers__button') ?></a>
  
</div>








<div class="speakers__list-item speakers__list-item_4">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/kuyava.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-kuyava-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-kuyava-info') ?></p>
  </div>
  
  <a href="#popup-speakers-kuyava" class="speakers__list-item-button fancybox" data-fancybox><?= _t('speakers__button') ?></a>
  
</div>








<div class="speakers__list-item speakers__list-item_">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/hichenko.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-hichenko-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-hichenko-info') ?></p>
  </div>
  
  <a href="#popup-speakers-hichenko" class="speakers__list-item-button fancybox" data-fancybox><?= _t('speakers__button') ?></a>
  
</div>








<div class="speakers__list-item speakers__list-item_3">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/vasilev.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-vasilev-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-vasilev-info') ?></p>
  </div>
  
  <a href="#popup-speakers-vasilev" class="speakers__list-item-button fancybox" data-fancybox><?= _t('speakers__button') ?></a>
  
</div>








<div class="speakers__list-item speakers__list-item_4">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/lebedev.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-lebedev-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-lebedev-info') ?></p>
  </div>
  
</div>








<div class="speakers__list-item speakers__list-item_panel">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/panel.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-panel-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-panel-info') ?></p>
  </div>
  
</div>


<?php if ($lang != 'en') { ?>
  
<?php } ?>

    <!-- <div class="speakers__list-item ">
      <div class="speakers__list-item-photo speakers__list-item-photo_1">
        <div class="speakers__list-item-photo-inner">
          <img src="img/speakers/empty.png" alt="">
        </div>
      </div>
      <div class="speakers__list-item-photo speakers__list-item-photo_2">
        <img src="img/speakers/speaker_empty.png" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Панель спикеров продолжает пополняться </p>
      </div>
    </div> -->

    <?php } else { ?>

    
 










<div class="speakers__list-item speakers__list-item_1">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/eagleman.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-eagleman-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-eagleman-info') ?></p>
  </div>
  
</div>








<div class="speakers__list-item speakers__list-item_">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/vitale.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-vitale-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-vitale-info') ?></p>
  </div>
  
</div>








<div class="speakers__list-item speakers__list-item_panel">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/breuning.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-breuning-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-breuning-info') ?></p>
  </div>
  
</div>


<?php if ($lang != 'en') { ?>
  
<?php } ?>


    <?php }  ?>

  </div>

  <?php if ( $version == 'izhevsk') { ?>
    <a href="<?= $BASE_HREF ?>/price" class="form__button button">Узнать стоимость участия</a>
  <?php } ?>

  <?php if ($lang == 'en'): ?>
  <div class="speakers__button">
    <div class="speakers__button_box">The speaker panel is&nbsp;still <br> under formation</div>
  </div>
  <?php endif; ?>

    <?php /* ?>
    <div class="speakers__list-item speakers__list-item1">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/broining_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Лоретта Бройнинг</p>
        <p class="speakers__list-item-info">Профессор философии, писатель, основатель Inner Mammal Institute</p>
      </div>
      <a href="#popup-speakers-broining" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div>

    <div class="speakers__list-item speakers__list-item2">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo10_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Андрей Сафронов</p>
        <p class="speakers__list-item-info">Эксперт по развитию памяти, тренер, участник ТВ проектов, писатель</p>
      </div>
      <a href="#popup-speakers-safronov" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div>

    <div class="speakers__list-item speakers__list-item3">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo7_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Илья Колмановский</p>
        <p class="speakers__list-item-info">Биолог, кандидат биологических наук, популяризатор науки, научный журналист</p>
      </div>
      <a href="#popup-speakers-kolmanovsky" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div>

    <div class="speakers__list-item speakers__list-item4">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo11_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Николай Козлов</p>
        <p class="speakers__list-item-info">Доктор психологических наук, профессор, бизнес&#8209;тренер, коуч</p>
      </div>
      <a href="#popup-speakers-kozlov" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
      <!-- <div class="speakers__list-item-add"><span>brain 2020</span></div> -->
    </div>

    <div class="speakers__list-item speakers__list-item5">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo14_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Вадим Лобов</p>
        <p class="speakers__list-item-info">Президент корпорации &laquo;Синергия&raquo;</p>
      </div>
      <a href="#popup-speakers-lobov" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div>

    <div class="speakers__list-item speakers__list-item6 speakers__list-item_empty">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo17_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Сергей Белан</p>
        <p class="speakers__list-item-info">CEO и&nbsp;founder Wikium</p>
      </div>
      <a href="#popup-speakers-belan" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div>

    <div class="speakers__list-item speakers__list-item7 speakers__list-item_empty">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/kuyava_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Олег Куява</p>
        <p class="speakers__list-item-info">Исследователь феномена &laquo;Управление и&nbsp;контроль снов&raquo;, участник научного сообщества OOBE Research Center</p>
      </div>
      <a href="#popup-speakers-kuyava" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div>

    <div class="speakers__list-item speakers__list-item_nospeaker">
      <div class="speakers__list-item-photo speakers__list-item-photo_1">
        <div class="speakers__list-item-photo-inner">
          <img src="img/speakers/empty.png" alt="">
        </div>
      </div>
      <div class="speakers__list-item-photo speakers__list-item-photo_2">
        <img src="img/speakers/speaker_empty.png" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Панель спикеров продолжает пополняться </p>
      </div>
    </div>
    <?php */?>




    <!-- <div class="speakers__list-item speakers__list-item7">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo18_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Джо Витале</p>
        <p class="speakers__list-item-info">Президент компании Hypnotic Marketing, Inc, писатель</p>
      </div>
      <a href="#popup-speakers-vitale" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div> -->


      <?php /*
    <div class="speakers__list-item speakers__list-item5">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo8_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Эмиль Ахундов</p>
        <p class="speakers__list-item-info">Практикующий нейрохирург, видеоблогер</p>
      </div>
      <a href="#popup-speakers-ahundov" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
      <!-- <div class="speakers__list-item-add"><span>brain 2020</span></div> -->

    </div>

    <div class="speakers__list-item speakers__list-item5">

      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo14_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Вадим Лобов</p>
        <p class="speakers__list-item-info">Президент корпорации &laquo;Синергия&raquo;</p>
      </div>
      <a href="#popup-speakers-lobov" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
      <div class="speakers__list-item-add"><span>brain 2020</span></div>
    </div>


    <div class="speakers__list-item speakers__list-item5">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo15_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Кирилл Любин</p>
        <p class="speakers__list-item-info">Президент Федерации ножевого боя в России, офицер запаса подразделения специального назначения ФСБ России</p>
      </div>
      <a href="#popup-speakers-lubin" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
      <!-- <div class="speakers__list-item-add"><span>brain 2020</span></div> -->
    </div>

    <div class="speakers__list-item speakers__list-item5">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo16_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Павел Палагин</p>
        <p class="speakers__list-item-info">Международный спикер по нейроэффективности, писатель, эксперт по скорочтению и развитию памяти</p>
      </div>
      <a href="#popup-speakers-palagin" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
      <!-- <div class="speakers__list-item-add"><span>brain 2020</span></div> -->
    </div>


  </div>
  <div class="speakers__more">
    <button class="speakers__more-btn jq-show-link" type="button">Показать ещё спикеров</button>
  </div>
  */?>


    <!-- <div class="speakers__list-item speakers__list-item_final speakers__list-item_empty">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo_empty_short_blue.jpg" alt="" class="speakers__list-item_empty-pic_desctop">
        <img src="img/speakers/photo_empty_blue.jpg" alt="" class="speakers__list-item_empty-pic_mobile">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Панель спикеров продолжает пополняться </p>
        <p class="speakers__list-item-info"></p>
      </div>

    </div>
    <div class="speakers__list-item speakers__list-item_last">
      <div class="speakers__list-item-add"><span>brain 2020</span></div>
    </div> -->

</section>

<?php if ($version == 'fullprice'):?>
<section class="fullprice">

  <div class="fullprice-header">
    <div class="container">
      <h1 class="fullprice-header__title condensed"><span>Стоимость</h1>
    </div>
  </div>
  
  <div class="container">
    <div class="fullprice__online">
      <div class="fullprice__online-img">
        <img src="img/fullprice/circle.svg" alt="">
      </div>
      <div class="fullprice__online-middle">
        <div class="fullprice__online-middle-title">Online</div>
        <div class="fullprice__online-middle-txt">Трансляция всех дней форума</div>
        <div class="fullprice__online-middle-txt">Запись на портале <a href="https://synergy.online/" target="_blank" style="text-decoration: underline;">Synergy.Online</a> в течении 2-х недель</div>
        
      </div>
      <div class="fullprice__online-cost">
        <div class="fullprice__online-cost-val"><?=number_format($online_price, 0, ',', ' ')?>&nbsp;₽</div>
        <a href="https://synergyglobal.ru/forums/brain2023/price" class="fullprice__online-cost-btn button">Купить</a>
        <?php /*?><div data-src="#popup-price__onlinenew" class="fullprice__online-cost-btn button" data-fancybox data-options='{"autoFocus":false}'>Купить</div><?php */?>
      </div>
    </div>    

    <div class="fullprice__content">

      <div class="fullprice__item">
        <div class="fullprice__item-title title-section">
          <div class="fullprice__item-title-txt">standard
            <div class="fullprice__item-cost"><?=number_format($standard_price, 0, ',', ' ')?>&nbsp;&#x20bd;</div>
          </div>
          <img class="fullprice__item-title-img" src="img/fullprice/price_img_6_blue.png" alt="">
        </div>

          <ul class="fullprice__item-list">
            <li class="fullprice__item-list-item">Очное участие и аккредитация в категории «Standard»</li>
            <li class="fullprice__item-list-item">Сертификат об участии</li>
            <li class="fullprice__item-list-item">Сопровождение искусственным интеллектом на протяжении всего форума</li>
            <!-- <li class="fullprice__item-list-item">Пакет участника</li> -->
          </ul>
        <a href="https://synergyglobal.ru/forums/brain2023/price" class="fullprice__online-cost-btn button">Купить</a>
        <?php /*?><div data-src="#popup-price__standard" class="fullprice__item-button button" data-fancybox data-options='{"autoFocus":false}'>Купить</div><?php */?>
      </div>

      <div class="fullprice__item">
        <div class="fullprice__item-title title-section">
          <div class="fullprice__item-title-txt">
            Business
            
            <div class="fullprice__item-cost">20 000&nbsp;&#x20bd;</div>
          </div>
          <img class="fullprice__item-title-img" src="img/fullprice/price_img_4_blue.png" alt="">
        </div>

          <ul class="fullprice__item-list">
            <li class="fullprice__item-list-item">Очное участие и аккредитация в категории «Business»</li>
            <li class="fullprice__item-list-item">Сертификат об участии</li>
            <li class="fullprice__item-list-item">Сопровождение искусственным интеллектом на протяжении всего форума</li>
            <!-- <li class="fullprice__item-list-item">Пакет участника</li> -->
            <li class="fullprice__item-list-item">Доступ к платформе <a href="https://synergy.online/" target="_blank" style="text-decoration: underline;">Synergy.Online</a>  на 1 месяц</li>
            <!-- <li class="fullprice__item-list-item">Подарки от партнеров и спонсоров</li> -->
          </ul>
        <a href="https://synergyglobal.ru/forums/brain2023/price" class="fullprice__online-cost-btn button">Купить</a>
        <?php /*?><div data-src="#popup-price__bussines" class="fullprice__item-button button" data-fancybox data-options='{"autoFocus":false}'>Купить</div><?php */?>
      </div>

      <div class="fullprice__item">
        <div class="fullprice__item-title title-section">
          <div class="fullprice__item-title-txt">
            VIP
            <div class="fullprice__item-cost"><?=number_format($vip_price, 0, ',', ' ')?>&nbsp;&#x20bd;</div>
          </div>
          <img class="fullprice__item-title-img" src="img/fullprice/price_img_5_blue.png" alt="">
        </div>

          <ul class="gullprice__item-list">
            <li class="gullprice__item-list-item">Очное участие и аккредитация в категории «Vip»</li>
            <li class="gullprice__item-list-item">Сертификат об участии</li>
            <li class="gullprice__item-list-item">Сопровождение искусственным интеллектом на протяжении всего форума</li>
            <!-- <li class="gullprice__item-list-item">Пакет участника</li> -->
            <li class="gullprice__item-list-item">Доступ к VIP lounge на протяжении форума</li>
            <li class="gullprice__item-list-item">VIP – обед</li>
            <li class="gullprice__item-list-item">Доступ к платформе <a href="https://synergy.online/" target="_blank" style="text-decoration: underline;">Synergy.Online</a>  на 6 месяцев</li>
            <!-- <li class="gullprice__item-list-item">Подарки от партнеров и спонсоров</li> -->
          </ul>
        <a href="https://synergyglobal.ru/forums/brain2023/price" class="fullprice__online-cost-btn button">Купить</a>
        <?php /*?><div data-src="#popup-price__vip" class="fullprice__item-button button" data-fancybox data-options='{"autoFocus":false}'>Купить</div><?php */?>
      </div>

      <div class="fullprice__item">
        <div class="fullprice__item-title title-section">
          <div class="fullprice__item-title-txt">
            Platinum
            <div class="fullprice__item-cost"><?=number_format($product_platinum_price, 0, ',', ' ')?>&nbsp;&#x20bd;</div>
          </div>
          <img class="fullprice__item-title-img" src="img/fullprice/price_img_6_blue.png" alt="">
        </div>
          <ul class="fullprice__item-list">
            <li class="fullprice__item-list-item">Очное участие и аккредитация в категории «Platinum»</li>
            <li class="fullprice__item-list-item">Сертификат об участии</li>
            <li class="fullprice__item-list-item">Сопровождение искусственным интеллектом на протяжении всего форума</li>
            <!-- <li class="fullprice__item-list-item">Пакет участника</li> -->
            <li class="fullprice__item-list-item">Welcome – сервис</li>
            <li class="fullprice__item-list-item">Доступ к VIP lounge на протяжении форума</li>
            <li class="fullprice__item-list-item">VIP – обед</li>
            <li class="fullprice__item-list-item">МВА - Online</li>
            <!-- <li class="fullprice__item-list-item">Специальные подарки от партнеров и спонсоров форума</li> -->
            <li class="fullprice__item-list-item">Доступ к спикерам</li>
          </ul>
        <a href="https://synergyglobal.ru/forums/brain2023/price" class="fullprice__online-cost-btn button">Купить</a>
        <?php /*?><div data-src="#popup-price__platinum" class="fullprice__item-button button" data-fancybox data-options='{"autoFocus":false}'>Купить</div><?php */?>
      </div>
    </div>

    <div class="fullprice__corp">
      <img src="img/fullprice/corp-price.png" alt="" class="fullprice__corp-img">
      <img src="img/fullprice/corp-price_mb.png" alt="" class="fullprice__corp-mb">
    </div>

    <div class="fullprice__table">
      <h2 class="fullprice-header__title condensed">График повышения цен в&nbsp;рублях</h2>
      <div class="dcf-overflow-x-auto" tabindex="0">
        <table class="dcf-table dcf-table-bordered dcf-table-striped dcf-w-100%">
          <thead>
            <tr>
              <th class="dcf-txt-center" scope="col"></th>
              <th class="dcf-txt-center" data-label="ONLINE" scope="col">ONLINE</th>
              <th class="dcf-txt-center" data-label="STANDART" scope="col">STANDART</th>
              <th class="dcf-txt-center" data-label="BUSINESS" scope="col">BUSINESS</th>
              <th class="dcf-txt-center" data-label="VIP" scope="col">VIP</th>
              <th class="dcf-txt-center" data-label="PLATINUM" scope="col">PLATINUM</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="dcf-txt-center" scope="row">до&nbsp;01.12.2022</th>
              <td class="dcf-txt-center" data-label="ONLINE">5&nbsp;000</td>
              <td class="dcf-txt-center" data-label="STANDART">10&nbsp;000</td>
              <td class="dcf-txt-center" data-label="BUSINESS">15&nbsp;000</td>
              <td class="dcf-txt-center" data-label="VIP">45&nbsp;000</td>
              <td class="dcf-txt-center" data-label="PLATINUM">150&nbsp;000</td>
            </tr>
            <tr>
              <th class="dcf-txt-center" scope="row">с&nbsp;01.12.2022</th>
              <td class="dcf-txt-center" data-label="ONLINE">6&nbsp;000</td>
              <td class="dcf-txt-center" data-label="STANDART">13&nbsp;000</td>
              <td class="dcf-txt-center" data-label="BUSINESS">17&nbsp;000</td>
              <td class="dcf-txt-center" data-label="VIP">50&nbsp;000</td>
              <td class="dcf-txt-center" data-label="PLATINUM">160&nbsp;000</td>
            </tr>
            <tr>
              <th class="dcf-txt-center" scope="row">с&nbsp;01.02.2023</th>
              <td class="dcf-txt-center" data-label="ONLINE">6&nbsp;000</td>
              <td class="dcf-txt-center" data-label="STANDART">15&nbsp;000</td>
              <td class="dcf-txt-center" data-label="BUSINESS">20&nbsp;000</td>
              <td class="dcf-txt-center" data-label="VIP">60&nbsp;000</td>
              <td class="dcf-txt-center" data-label="PLATINUM">170&nbsp;000</td>
            </tr>
            <tr>
              <th class="dcf-txt-center" scope="row">с&nbsp;01.03.2023</th>
              <td class="dcf-txt-center" data-label="ONLINE">6&nbsp;000</td>
              <td class="dcf-txt-center" data-label="STANDART">17&nbsp;000</td>
              <td class="dcf-txt-center" data-label="BUSINESS">25&nbsp;000</td>
              <td class="dcf-txt-center" data-label="VIP">70&nbsp;000</td>
              <td class="dcf-txt-center" data-label="PLATINUM">200&nbsp;000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>


<section class="gallery lazy" id="gallery">
	<div class="container">
		<h2 class="gallery__title title-section">Как это было</h2>
		<div class="gallery__block">
			<div class="gallery__block-banner">
				<img src="img/gallery/brain2020.jpg" alt="Brain 2022">
			</div>
			<div class="gallery__block-video">
				<img src="img/gallery/brain2020_2.jpg" alt="Brain 2022">
				<a class="gallery__block-link" href="https://disk.yandex.ru/i/eO9WSgoq22nlLQ" target="_blank">
					<span>#brain2022</span>
					Смотреть отчетное видео
				</a>
			</div>
		</div>
	</div>

	<div class="gallery__galleryInfoSlider owl-carousel">
		

		<div class="gallery__galleryInfoSlider-item">
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_1" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_1.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_1">
						<img class="lazy" data-src="img/gallery/1.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_7" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_7.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_7">
						<img class="lazy" data-src="img/gallery/7.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
		</div>

		

		<div class="gallery__galleryInfoSlider-item">
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_2" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_2.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_2">
						<img class="lazy" data-src="img/gallery/2.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_8" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_8.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_8">
						<img class="lazy" data-src="img/gallery/8.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
		</div>

		

		<div class="gallery__galleryInfoSlider-item">
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_3" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_3.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_3">
						<img class="lazy" data-src="img/gallery/3.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_9" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_9.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_9">
						<img class="lazy" data-src="img/gallery/9.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
		</div>

		

		<div class="gallery__galleryInfoSlider-item">
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_4" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_4.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_4">
						<img class="lazy" data-src="img/gallery/4.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_10" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_10.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_10">
						<img class="lazy" data-src="img/gallery/10.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
		</div>

		

		<div class="gallery__galleryInfoSlider-item">
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_5" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_5.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_5">
						<img class="lazy" data-src="img/gallery/5.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_11" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_11.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_11">
						<img class="lazy" data-src="img/gallery/11.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
		</div>

		

		<div class="gallery__galleryInfoSlider-item">
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_6" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_6.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_6">
						<img class="lazy" data-src="img/gallery/6.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_12" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_12.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_12">
						<img class="lazy" data-src="img/gallery/12.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
		</div>

		
	</div>
</section>

<?php if ($lang != 'en'): ?>
<section class="chatbot-short">
	<div class="container">
		<div class="chatbot-short__wrapper">
			<div class="chatbot-short__text">
				<div class="chatbot-short__whatsapp">
					<img src="img/chatbot-short/whatsapp.svg" alt="">
				</div>
				<div class="chatbot-short__text-text">
					Смотри вебинар Андрея Сафронова &laquo;Как улучшить память и&nbsp;развить свой мозг&raquo;
				</div>
			</div>
			<div class="chatbot-short__qr">
				<div class="chatbot-short__qr-button">
					<a href="https://youtu.be/qlr9knMVlso" class="button" target="_blank">смотреть вебинар</a>
				</div>
			</div>
		</div>
	</div>
</section>



<?php endif; ?>






<section class="form_reg_2 form-reg-vertical lazy" id="form_reg_2">


  <div class="container">
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form  form__container lazy">
	<form class="form__content form-redirect" action="<?=$action?>&quote_id=4140&form=popup-form">

		<div class="form__header">
			<div class="form__title"><?= _t("form__title") ?></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      

      <button type="submit" class="form__item form__button button"><?= _t("form__button") ?></button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">&lt;?= _t(&quot;form__button&quot;) ?&gt;</a>
</div>


  </div>
</section>


<section class="themes lazy" id="themes">
  <p class="themes__title title-section"><?= _t('themes__title') ?></p>

  <div class="themes__list">
    <div class="themes__list-item themes__list-item6">
      <img class="themes__list-item-emblem" src="img/themes/e6_blue.svg" alt="">
      <p class="themes__list-item-desc"><?= _t('themes__list-item-desc_6') ?></p>
    </div>
     <div class="themes__list-item themes__list-item8">
      <img class="themes__list-item-emblem" src="img/themes/e8_blue.svg" alt="">
      <p class="themes__list-item-desc"><?= _t('themes__list-item-desc_8') ?></p>
    </div>
    <div class="themes__list-item themes__list-item9">
      <img class="themes__list-item-emblem" src="img/themes/e9_blue.svg" alt="">
      <p class="themes__list-item-desc"><?= _t('themes__list-item-desc_9') ?></p>
      <!-- <a href="docs/program.pdf" class="themes__list-item-link" download>Скачать программу конференции</a> -->
    </div>
    <div class="themes__list-item themes__list-item1">
      <img class="themes__list-item-emblem" src="img/themes/e1_blue.svg" alt="">
      <p class="themes__list-item-desc"><?= _t('themes__list-item-desc_1') ?></p>
    </div>
    <div class="themes__list-item themes__list-item2">
      <img class="themes__list-item-emblem" src="img/themes/e2_blue.svg" alt="">
      <p class="themes__list-item-desc"><?= _t('themes__list-item-desc_2') ?></p>
    </div>
    <div class="themes__list-item themes__list-item3">
      <img class="themes__list-item-emblem" src="img/themes/e3_blue.svg" alt="">
      <p class="themes__list-item-desc"><?= _t('themes__list-item-desc_3') ?></p>
    </div>
    <?php /* ?>
    <div class="themes__list-item themes__list-item4">
      <img class="themes__list-item-emblem" src="img/themes/e4_blue.svg" alt="">
      <p class="themes__list-item-desc"><?= _t('themes__list-item-desc_4') ?></p>
    </div>
    <?php */ ?>
    <div class="themes__list-item themes__list-item5">
      <img class="themes__list-item-emblem" src="img/themes/e5_blue.svg" alt="">
      <p class="themes__list-item-desc"><?= _t('themes__list-item-desc_5') ?></p>
    </div>
    
    <div class="themes__list-item themes__list-item7">
      <img class="themes__list-item-emblem" src="img/themes/e7_blue.svg" alt="">
      <p class="themes__list-item-desc"><?= _t('themes__list-item-desc_7') ?></p>
    </div>
    <?php /* ?>
    
    <?php */ ?>
   
  </div>

</section>
<!-- <section class="program lazy">
	<img src="img/program/img-left.png" alt="" class="program__picture program__picture-left">
	<img src="img/program/img-right.png" alt="" class="program__picture program__picture-right">
	<h2 class="program__title title-section">Программа прошлого форума 2020</h2>
	<div class="program__container">
		<ul class="program__day">
			<li data-tab="tab-1" class="current">1 день</li>
			<li data-tab="tab-2">2 день</li>
		</ul>
		<div class="program__table current" id="tab-1">
			<table>
				<thead>
					<tr>
						<th>№</th>
						<th>Время</th>
						<th width="31%">Тема</th>
						<th>Формат</th>
						<th>Спикер</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-label="№"></td>
						<td data-label="Время">9:00-10:00</td>
						<td colspan="3">Регистрация участников</td>
					</tr>
					<tr>
						<td data-label="№"></td>
						<td data-label="Время">9:00-10:10</td>
						<td colspan="3">Открытие&nbsp;/ Приветственное слово</td>
					</tr>
					<tr>
						<td data-label="№">1</td>
						<td data-label="Время">10:10-10:50<br>(40 минут)</td>
						<td data-label="Тема">Методика развития осознанности и&nbsp;эффективного мышления</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Николай Козлов</td>
					</tr>
					<tr>
						<td data-label="№">2</td>
						<td data-label="Время">11:00-12:00<br>(60 минут)</td>
						<td data-label="Тема">Будущее сегодня</td>
						<td data-label="Формат">Панельная сессия</td>
						<td class="table-speaker" data-label="Спикер">
							<table>
								<tr>
									<td>Софико Шеварднадзе <br> (модератор)</td>
									<td>Ольга Ускова</td>
									<td>Дмитрий Волков</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td data-label="№">3</td>
						<td data-label="Время">12:10-12:50<br>(40 минут)</td>
						<td data-label="Тема">Медитация. Как работает мозг, визуализация для управления реальности!</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Ольга Найденова</td>
					</tr>
					<tr>
						<td data-label="№">4</td>
						<td data-label="Время">13:00-13:40<br>(40 минут)</td>
						<td data-label="Тема">Мозг и нейромедиаторы</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Вячеслав Дубынин</td>
					</tr>
					<tr>
						<td data-label="№"></td>
						<td data-label="Время">13:45-14:45<br>(60 минут)</td>
						<td colspan="3">Обед</td>
					</tr>
					<tr>
						<td data-label="№">5</td>
						<td data-label="Время">14:50-15:30<br>(40 минут)</td>
						<td data-label="Тема">Звук. Его воздействие на&nbsp;сознание,<br> помощь в&nbsp;концентрации<br> и&nbsp;развитие мышления.<br> Исследования и&nbsp;гипотезы</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Сергей Ардасенов<br>Александр Трунов<br>Кирилл Коноваленко</td>
					</tr>
					<tr>
						<td data-label="№">6</td>
						<td data-label="Время">15:30-16:10<br>(40 минут)</td>
						<td data-label="Тема">Контроль сновидений</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Олег Куява</td>
					</tr>
					<tr>
						<td data-label="№">7</td>
						<td data-label="Время">16:10-16:20<br>(10 минут)</td>
						<td data-label="Тема">Марафон Synergy Brain Game</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Александр Рагиня</td>
					</tr>
					<tr>
						<td data-label="№">8</td>
						<td data-label="Время">16:20-17:20<br>(60 минут)</td>
						<td data-label="Тема">Жизнь, как кунг-фу.&nbsp;1500 лет традиции монастыря Шаолинь в&nbsp;помощь современному человеку</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Мастер Ши Янбин</td>
					</tr>
					<tr>
						<td data-label="№">9</td>
						<td data-label="Время">17:25-18:05<br>(40 минут)</td>
						<td data-label="Тема">Как справиться со&nbsp;стрессами и&nbsp;вызовами нашего времени. Современные технологии стресс-менеджмента</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Юрий Щербатых</td>
					</tr>
					<tr>
						<td data-label="№">10</td>
						<td data-label="Время">18:10-19:10<br>(60 минут)</td>
						<td data-label="Тема">Мозг и&nbsp;гормоны. Как приучить мозг вырабатывать гормоны счастья</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Лоретта Бройнинг <br> (онлайн)</td>
					</tr>
					<tr>
						<td data-label="№">11</td>
						<td data-label="Время">19:15-20:15<br>(60 минут)</td>
						<td data-label="Тема">Органоиды 2020: большие приключения маленьких мозгов</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Илья Колмановский</td>
					</tr>
					<tr>
						<td data-label="№"></td>
						<td data-label="Время">20:15</td>
						<td colspan="3">Закрытие</td>
					</tr>
				</tbody>
			</table>
			<a href="docs/program.pdf" class="button program__button">скачать программу</a>
		</div>
		<div class="program__table" id="tab-2">
			<table>
				<thead>
					<tr>
						<th>№</th>
						<th>Время</th>
						<th width="31%">Тема</th>
						<th>Формат</th>
						<th>Спикер</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-label="№"></td>
						<td data-label="Время">9:00-10:00</td>
						<td colspan="3">Регистрация участников</td>
					</tr>
					<tr>
						<td data-label="№"></td>
						<td data-label="Время">10:00-10:10</td>
						<td colspan="3">Открытие&nbsp;/ Приветственное слово</td>
					</tr>
					<tr>
						<td data-label="№">1</td>
						<td data-label="Время">10:10-10:40<br>(30 минут)</td>
						<td data-label="Тема">Эстрадный гипноз</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Станислав Малаховский</td>
					</tr>
					<tr>
						<td data-label="№">2</td>
						<td data-label="Время">10:45-11:15<br>(30 минут)</td>
						<td data-label="Тема">Как помочь мозгу эффективнее обрабатывать информационные потоки</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Павел Палагин</td>
					</tr>
					<tr>
						<td data-label="№">3</td>
						<td data-label="Время">11:15-11:55<br>(40 минут)</td>
						<td data-label="Тема">Анатомия страха. Техника возврата управления</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Сергей Артемьев</td>
					</tr>
					<tr>
						<td data-label="№">4</td>
						<td data-label="Время">11:55 - 12:35<br>(40 минут)</td>
						<td data-label="Тема">Как сделать стресс своим союзником</td>
						<td data-label="Формат">Панельная дискуссия</td>
						<td class="table-speaker" data-label="Спикер">
							<table>
								<tr>
									<td>Кирилл Любин<br>(модератор)</td>
									<td>Виктория Шубина</td>
									<td>Юрий Щербатых</td>
									<td>Дмитрий Шаменков</td>
								</tr>
							</table>
						</td>
					</tr>

					<tr>
						<td data-label="№">5</td>
						<td data-label="Время">12:40 - 13:00<br>(20 минут)</td>
						<td data-label="Тема">7 способов управлять своей собственной нейросетью / Кризис века экранов и начало эры мозга</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Сергей Сотников</td>
					</tr>					
					<tr>
						<td data-label="№">6</td>
						<td data-label="Время">13:00-14:00<br>(60 минут)</td>
						<td data-label="Тема">Как с&nbsp;помощью медитативных практик воспользоваться ресурсами мозга?</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Лилия Гилемханова</td>
					</tr>
					<tr>
						<td data-label="№"></td>
						<td data-label="Время">14:00-15:00<br>(60 минут)</td>
						<td colspan="3">Обед</td>
					</tr>
					<tr>
						<td data-label="№">7</td>
						<td data-label="Время">15:00-16:00<br>(60 минут)</td>
						<td data-label="Тема">Нейробиология лидерства</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Дэвид Рок<br>(онлайн)</td>
					</tr>
					<tr>
						<td data-label="№">8</td>
						<td data-label="Время">16:05-16:40<br>(40 минут)</td>
						<td data-label="Тема">Нейромаркетинг 2020. Как разговаривать с покупателем в новой реальности</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Дмитрий Сендеров</td>
					</tr>
					<tr>
						<td data-label="№">9</td>
						<td data-label="Время">16:45-17:25<br>(40 минут)</td>
						<td data-label="Тема">Язык в&nbsp;мозге: нейролингвист против нейрохируга</td>
						<td data-label="Формат">Диалог</td>
						<td class="table-speaker" data-label="Спикер">
							<table>
								<tr>
									<td>Андрей Реутов</td>
									<td>Ольга Драгой</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td data-label="№">10</td>
						<td data-label="Время">17:30-18:10<br>(40 минут)</td>
						<td data-label="Тема">Психология запоминания: как развить Суперпамять</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Андрей Сафронов</td>
					</tr>
					<tr>
						<td data-label="№">11</td>
						<td data-label="Время">18:10-18:20<br>(10 минут)</td>
						<td data-label="Тема">Школа быстрого чтения</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Алексей Баранов</td>
					</tr>
					<tr>
						<td data-label="№">12</td>
						<td data-label="Время">18:20-19:05<br>(45 минут)</td>
						<td data-label="Тема">Бизнес-мышление и мозг</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Андрей Курпатов</td>
					</tr>
					<tr>
						<td data-label="№">13</td>
						<td data-label="Время">19:10-20:10<br>(60 минут)</td>
						<td data-label="Тема">Учимся любить: алгоритм для чудес</td>
						<td data-label="Формат">Keynote speech</td>
						<td data-label="Спикер">Дэвид Вердези</td>
					</tr>
					<tr>
						<td data-label="№"></td>
						<td data-label="Время">20:15</td>
						<td colspan="3">Закрытие</td>
					</tr>
				</tbody>
			</table>
			<a href="docs/program.pdf" class="button program__button">скачать программу</a>
		</div>
	</div>


</section>
 -->
<?php if ($lang != 'en' && $version != 'online'): ?>

<?php endif; ?>
<section class="expectations lazy" id="expectations">
	<div class="container">
		<h2 class="expectations__title title-section"><?= _t('expectations__title') ?></h2>
	</div>
	<div class="expectations__block">
		<div class="expectations__block-item">
			<p class="expectations__block-item_text"><?= _t('expectations__block-item_text_1') ?></p>
		</div>
		<div class="expectations__block-item">
			<p class="expectations__block-item_text"><?= _t('expectations__block-item_text_2') ?></p>
		</div>
		<div class="expectations__block-item">
			<p class="expectations__block-item_text"><?= _t('expectations__block-item_text_3') ?></p>
		</div>
		<div class="expectations__block-item">
			<p class="expectations__block-item_text"><?= _t('expectations__block-item_text_4') ?></p>
		</div>
		<div class="expectations__block-item">
			<p class="expectations__block-item_text"><?= _t('expectations__block-item_text_5') ?></p>
		</div>
		<div class="expectations__block-item">
			<p class="expectations__block-item_text"><?= _t('expectations__block-item_text_6') ?></p>
		</div>
		<div class="expectations__block-item">
			<p class="expectations__block-item_text"><?= _t('expectations__block-item_text_7') ?></p>
		</div>
		<div class="expectations__block-item">
			<img loading="lazy" src="img/expectations/pic_blue.svg" alt="" class="expectations__block-item_pic">
		</div>
	</div>
</section>



<?php if ($lang != 'en'): ?>

<?php endif; ?>
<section class="place lazy" id="place">
	<div class="container">
		<div class="place-pic">
			<?php if($version == 'brain2023' || $version == 'fullprice') { ?>
			<img loading="lazy" src="img/place/techpolic.png" alt="">
			<?php } else {?>
			<img loading="lazy" src="img/place/vegas.jpg" alt="">
			<?php } ?>
		</div>
		<div class="place__content">
			<div class="place__content-info">
				<div class="place__content-info_d">
					<h3 class="place__title">Место проведения форума</h3>
					<?php if($version == 'brain2023' || $version == 'fullprice') { ?>
					<p class="place__name">Конгресс-центр &laquo;Технополис Москва&raquo;</p>
					<p class="place__description">Конгресс-центр «Технополис Москва» — многофункциональное пространство для проведения крупномасштабных мероприятий: форумов, высокотехнологичных выставок, конгрессов, конференций, пленарных заседаний, семинаров, торжественных банкетов и шоу-программ. <br>
						Залы Конгресс-центра оформлены в стиле hi-tech и оснащены профессиональным оборудованием, соответствующим высшим стандартам event-индустрии. Конгресс-центр находится возле метро Текстильщики.</p>
					<a href="https://yandex.ru/maps/-/CCUzR0Q1lB" target="_blank" class="place__link">
						<img loading="lazy" src="img/place/map-pic_blue.svg" alt="" class="place__link-map">
						Посмотреть на карте
						<img loading="lazy" src="img/place/arrow.svg" alt="" class="place__link-arrow">
					</a>
					<?php } else {?>
					<p class="place__name">Golden Palace</p>
					<p class="place__description">Многофункциональное пространство для воплощения любых идей и&nbsp;создания самых ярких событий! Совсем недавно комплекс прошёл полный ребрендинг. Собственная охраняемая парковка позволит наслаждаться праздником, не&nbsp;беспокоясь о&nbsp;том, где оставить автомобиль. Все пространства располагают необходимой инфраструктурой, обеспечивающей максимальный комфорт гостям мероприятия. Созданы технические возможности для монтажа и&nbsp;подключения аудиовизуального оборудования, сценических конструкций и&nbsp;декораций.</p>
					<a href="https://yandex.ru/profile/1379312895?no-distribution=1&source=wizbiz_new_map_single" target="_blank" class="place__link">
						<img loading="lazy" src="img/place/map-pic_blue.svg" alt="" class="place__link-map">
						Посмотреть на карте
						<img loading="lazy" src="img/place/arrow.svg" alt="" class="place__link-arrow">
					</a>
					<?php } ?>
				</div>
				<div class="place__cont">
					<p class="place__cont-text">Участвуй очно</p>
					<a href="#form_reg_2" class="place__cont-link scroll"><?= _t('form__button') ?></a>
				</div>
			</div>

			<div class="place__content-numbers">
				<?php if ($version != 'brain2023' && $version != 'fullprice') {?>
					<p class="place__text"><span></span>100+ мероприятий ежегодно</p>
					<p class="place__text"><span></span>Многофункциональное<br>пространство</p>
					<p class="place__text"><span></span>№1 у звезд шоу-бизнеса</p>
				<?php }?>
			</div>
		</div>
	</div>
</section>

<!--  -->
<?php if ($lang == 'en'): ?>
<section class="platform lazy" id="platform">
	<div class="container">

		<div class="platform__box">
			<h2 class="platform__title title-section"><?= _t('platform__title') ?></h2>
			<div class="row">
				<div class="col-md-7">
					<div class="platform__text d-none d-md-block"><?= _t('platform__text') ?></div>
					<div class="platform__text d-md-none"><?= _t('platform__text_mob') ?></div>
				</div><!-- col -->
				<div class="col-md-5">
					<ul class="platform__list">
						<li class="platform__list-item"><?= _t('platform__list-item-1') ?></li>
						<li class="platform__list-item"><?= _t('platform__list-item-2') ?></li>
						<li class="platform__list-item"><?= _t('platform__list-item-3') ?></li>
						<li class="platform__list-item"><?= _t('platform__list-item-4') ?></li>
						<li class="platform__list-item"><?= _t('platform__list-item-5') ?></li>
						<li class="platform__list-item"><?= _t('platform__list-item-6') ?></li>
					</ul>
				</div><!-- col -->
			</div><!-- row -->
			<a href="#" class="platform__button button button_red condensed">Перейти в&nbsp;онлайн платформу</a>
		</div><!-- platform__box -->
		<?php if($lang == 'en'): ?>
			<div class="platform__bottom"><img class="lazy" src="img/platform/tablet-en.png" alt=""></div>
		<?php else: ?>
			<div class="platform__bottom"><img class="lazy" src="img/platform/tablet.png" alt=""></div>
		<?php endif; ?>
	</div><!-- container -->
</section><!-- platform -->

<?php endif; ?>
<section class="banner lazy" id="banner">
    <h2 class="banner__title title-section">При поддержке Института<br> Психологии</h2>
    <div class="container">
        <div class="banner__content">
            <div class="banner__content-title">Институт психологии-это:</div>
            <ul class="banner__content-list">
                <li>
                    <img src="img/banner/banner-icon-1.svg" alt="">
                    <p>бакалавриат, магистратура, краткосрочные программы дополнительного образования</p>
                </li>
                <li>
                    <img src="img/banner/banner-icon-2.svg" alt="">
                    <p>современные учебные планы, включающий в&nbsp;себя основы нейропсихологии, педагогики, консультативной психологии и&nbsp;психогенетики</p>
                </li>
                <li>
                    <img src="img/banner/banner-icon-3.svg" alt="">
                    <p>возможность обучения на&nbsp;дистанционной форме, в&nbsp;любое удобное время</p>
                </li>
                <li>
                    <img src="img/banner/banner-icon-4.svg" alt="">
                    <p>преподаватели- действующий психологи с&nbsp;огромным багажом знаний</p>
                </li>
                <li>
                    <img src="img/banner/banner-icon-5.svg" alt="">
                    <p>собственная психологическая лаборатория, оснащенная оборудованием для практической диагностики</p>
                </li>
                <li>
                    <img src="img/banner/banner-icon-6.svg" alt="">
                    <p>Диплом государственного образца и&nbsp;Европейское приложение, которые позволят Вам практиковать психологию в&nbsp;любом уголке мира</p>
                </li>
            </ul>
            <div class="banner__content-text">Поступай в&nbsp;Институт &laquo;Психологии&raquo; и&nbsp;получи образование<br> для жизни и&nbsp;бизнеса!</div>
        </div>
    </div>
    
    <div class="form_reg_3 form-reg-vertical">
        <div class="container">
            

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form  form__container lazy">
	<form class="form__content " action="<?=$action?>&quote_id=4351&form=psychology">

		<div class="form__header">
			<div class="form__title"><?= _t("form__title_faculty") ?></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      

      <button type="submit" class="form__item form__button button"><?= _t("form__button_more") ?></button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">&lt;?= _t(&quot;form__button_more&quot;) ?&gt;</a>
</div>


        </div>
    </div>
</section>


<section class="organizer lazy" id="organizer">
	<div class="container">
		<h2 class="organizer__title title-section"><?= _t('organizer__title') ?></h2>
		<div class="organizer__block">
			<div class="organizer__block-item organizer__block-item_main">
				<img loading="lazy" src="<?= $logo_organizer?>" alt="" class="organizer__block-item_logo">
				<p class="organizer__block-item_text"><?= _t('organizer__block-item_text') ?></p>
				<div class="organizer__content">
					<div class="organizer__content-item organizer__content-item_wrap">
						<p class="organizer__content-item_nmb"><?= _t('organizer__content-item_nmb_1') ?></p>
						<p class="organizer__content-item_text"><?= _t('organizer__content-item_text_1') ?></p>
					</div>
					<div class="organizer__content-item">
						<p class="organizer__content-item_nmb"><?= _t('organizer__content-item_nmb_2') ?></p>
						<p class="organizer__content-item_text"><?= _t('organizer__content-item_text_2') ?></p>
					</div>
					<div class="organizer__content-item">
						<p class="organizer__content-item_nmb"><?= _t('organizer__content-item_nmb_3') ?></p>
						<p class="organizer__content-item_text"><?= _t('organizer__content-item_text_3') ?></p>
					</div>
					<?php if ($lang == 'en'): ?>
					<div class="organizer__content-item">
						<p class="organizer__content-item_nmb"><?= _t('organizer__content-item_nmb_4') ?></p>
						<p class="organizer__content-item_text"><?= _t('organizer__content-item_text_4') ?></p>
					</div>
					<div class="organizer__content-item">
						<p class="organizer__content-item_nmb"><?= _t('organizer__content-item_nmb_5') ?></p>
						<p class="organizer__content-item_text"><?= _t('organizer__content-item_text_5') ?></p>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="organizer__block-item organizer__block-item_pic">

			</div>
		</div>
	</div>
</section>


<section class="partners lazy" id="partners">

	<div class="container">

		<!-- <h2 class="partners__title title-section"><?= _t('partners__title') ?></h2> -->

<!-- 		<?php if ($lang == 'en'): ?>
			<h2 class="partners__title_small title-section"><?= _t('partners__infopartners') ?></h2>
			<div class="partners__partnersInfoSlider owl-carousel">
				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				

				<div class="partners__partnersInfoSlider-item">
					
				</div>

				
			</div>
		<?php endif; ?>

		<div class="partners__title_small title-section"><?= _t('partners__casualpartners') ?></div>

		<div class="partners__partnersSlider owl-carousel">

			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://emg.fm/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/egm.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href=" http://www.rwclub.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/royal.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://tkbaikalaqua.com/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/baikal-logo.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.mentos.ru" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/mentos_full.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.xfit.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/xfit_full.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://vintorg.ru" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/vintorg_full.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.erborian.ru" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/erburian_full.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://frame.moscow/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/frame.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://halten.ru" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/halten.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://bio-cera.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/biocera.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : '';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://megogo.ru/ru" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/megogo.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="www.gallerymedia.com" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/gallery.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://seranking.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/seranking.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://sendsay.ru" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/sendsay.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.worldclass.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/worldclass.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : '';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://pro-deonica.ru/series/antibacterial" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/deonica.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://sartoreale.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/sarto-reale.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://orthosleep.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/ortho-sleep.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.ingate.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/ingate.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.prnews.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/prnews.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="http://shipkovclinic.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/dr-shipkov.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : '';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/esalen.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : '';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://sendpulse.com/ru" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/sendpulse.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : '';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://actualmarketing.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/ActualMarketing.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.calltouch.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/calltouch.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : '';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="http://delalma.tilda.ws/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/delalma.jpeg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.unisender.com" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/unisender.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.agima.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/agima.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://trendfox.ru/?utm_source=synergy&amp;utm_term=synergy" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/trendfox.jpeg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="http://skyeng.ru/go/synergyglobal" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/skyeng.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : '';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="http://kidsd.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/kidsdev.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.prpartner.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/prparthner.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : '';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.mcn.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/mcn-telecom.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : '';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://multivarka.pro/?utm_source=bloger&amp;utm_medium=sinergia_logo&amp;utm_campaign=sinergia_logo_multivarka" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/redmond.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : '';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.ichien.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/ichien.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : '';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/th.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="http://4hub.com.ua/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/logo-gor.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://ru.jooble.org" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/jooble.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://garti.me/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/garti.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://cobascent.com/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/coba.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://3sense.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/fill.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="http://instamun.ru/?utm_source=BRAIN+2020&amp;utm_medium=expo&amp;utm_campaign=promo" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/mun.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.galladance.com/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/gala.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="http://restoran-chaika.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/chaika.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="http://restoran-lastochka.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/lastochka.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://efremov.gold/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/eframov.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://kaplan-smilespa.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/kaplan.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.isclinical.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/clinical.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://kingswater.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/kingwtr.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://elemis.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/elemis.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://capitalsc.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/capital.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.grand-clinic.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/grand.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://hydrafacial.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/hydra.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://sacohair.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/saco.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="http://pavogallerygroup.com/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/bird.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.firstandonly.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/first.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.korkunov.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/k.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://gessmarket.ru/?utm_source=synergy&amp;utm_medium=video&amp;utm_campaign=synergy" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/ges.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			

		</div>

		<div class="partners__title_small title-section">Информационные партнеры</div>

		<div class="partners__partnersSlider owl-carousel">

			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://news.rambler.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/rambler.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://topfranchise.ru" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/top_franchise.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.psychologies.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/logopsy.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://naukatv.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/nauka.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://fedpress.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/fed_press.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.popmech.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/pop_mech.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://strategyjournal.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/zhur_strat.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://psychosearch.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/psy_search.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://yogajournal.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/yoga.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://eva.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/eva.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://cetre.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/cetre.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://masterjournal.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/master_jou.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="http://www.bossmag.ru" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/boss.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://parkskazka.com/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/skazka.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://waterpikrussia.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/waterpik.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://ria-stk.ru/ " target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/be.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.probusinesstv.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/pro_business.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.topcrop.ru/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/top_crop.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://expert.ru/ " target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/expert.jpg" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? 'true' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://ru.jobsora.com/" target="_blank">
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/jobsora.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			

		</div> -->


		<!-- <div class="partners__title_small title-section">Логистический партнер</div> -->
		<h2 class="partners__title title-section">Логистический партнер</h2>

		<!-- <div class="partners__logistic">

			
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '' : 'true';

				if ( $is_partners_card ) { ?>
					<div class="partners__logistic-item">
						<div class="partners__logistic-inner">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://www.cdek.ru/ru/" target="_blank">
						<?php }  ?>
							<img class="partners__logistic-item-img lazy" src="img/partners/cdek.png" alt="">
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			

		</div> -->

		<div class="partners__buttons">
			<a href="#popup-partner" class="partners__button button button-black" data-fancybox data-options='{"autoFocus":false}'><?= _t('partners__button') ?></a>
			<a href="#popup-accreditation" class="partners__button button button-red" data-fancybox>аккредитация сми</a>
		</div>

	</div>
</section>
<?php if ($lang != 'en'): ?>
<section class="franchise" id="franchise">
	<div class="container">
		<div class="franchise__main">
			<div class="franchise__main-item">
				<h2 class="franchise__title title-section">Франшиза Школы бизнеса &laquo;Синергия&raquo;</h2>
			</div>
			<div class="franchise__main-item franchise__main-item_content">
				<div class="franchise__main-item_part">
					<img loading="lazy" src="img/franchise/pic-1_blue.svg" alt="">
					<p>Срок запуска – 14 дней</p>
				</div>
				<div class="franchise__main-item_part">
					<img loading="lazy" src="img/franchise/pic-2_blue.svg" alt="">
					<p>Cтартовая стоимость франшизы – от 250 000 руб.</p>
				</div>
				<div class="franchise__main-item_part">
					<img loading="lazy" src="img/franchise/pic-3_blue.svg" alt="">
					<p>Плановая окупаемость – 4 месяца.</p>
				</div>
			</div>
		</div>
		<div class="franchise__description">
			<div class="franchise__description-item">
				<p class="franchise__description-title franchise__description-title_first">Станьте лицом известного бренда в сфере бизнес-образования</p>
				<p class="franchise__description-text">&laquo;Синергия&raquo;&nbsp;&mdash; организатор масштабных бизнес-мероприятий в&nbsp;России и&nbsp;за&nbsp;рубежом. Среди наших достижений&nbsp;&mdash; две записи в&nbsp;Книге рекордов Гиннесса и&nbsp;престижные event-награды. Synergy Global Forum 2019 собрал на&nbsp;стадионе &laquo;Газпром Арена&raquo; 125 топовых спикеров и&nbsp;более 25&nbsp;000&nbsp;участников.</p>
				<a href="#popup-presentation" class="franchise__button franchise__button_desc button" data-fancybox data-options='{"autoFocus":false}'>узнать более подробно</a>
			</div>
			<div class="franchise__description-item  franchise__description-title_last">
				<p class="franchise__description-title">Начните зарабатывать вместе с одним из самых известных брендов в сфере бизнес-образования!</p>
				<p class="franchise__description-text">Франшиза Школы бизнеса позволит стать эксклюзивным представителем &laquo;Синергии&raquo; в&nbsp;вашем регионе. Вы&nbsp;получите готовую продуктовую линейку, базу клиентов, технологии маркетинга и&nbsp;продаж и&nbsp;поддержку головного офиса.</p>
				<a href="#popup-presentation" class="franchise__button franchise__button_mob button" data-fancybox data-options='{"autoFocus":false}'>узнать более подробно</a>
			</div>
		</div>
	</div>
</section>
<section class="chatbot">
	<div class="container">
		<div class="chatbot__wrapper">
			<div class="chatbot__text">
				<div class="chatbot__whatsapp">
					<img src="img/chatbot/whatsapp.svg" alt="">
				</div>
				<div class="chatbot__text-text">
					Смотри вебинар Андрея Сафронова &laquo;Как улучшить память и&nbsp;развить свой мозг&raquo;
				</div>
			</div>
			<div class="chatbot__qr">
				<div class="chatbot__qr-button">
					<a href="https://youtu.be/qlr9knMVlso" class="button" target="_blank">смотреть вебинар</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>


<section class="form_reg_3 form-reg-vertical">
  <div class="container">
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form  form__container lazy">
	<form class="form__content " action="<?=$action?>&quote_id=4140&form=popup-form">

		<div class="form__header">
			<div class="form__title"><?= _t("form__title_more") ?></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      

      <button type="submit" class="form__item form__button button"><?= _t("form__button") ?></button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">&lt;?= _t(&quot;form__button&quot;) ?&gt;</a>
</div>


  </div>
</section>



<section class="main intro outro_bottom">


	<div class="container main__container">

		<div class="main__content">

			<div class="main__intro">

				<div class="main__intro-top">

					<div class="main__info">
						<div class="main__info-item"><?=$date?></div>
						<?php if ($version=='fullprice'||$version=='brain2023'){?>
							<div class="main__info-subdate"><?=$subdate?></div>
						<?php } ?>
						
					</div>

					<div class="main__subtitle"></div>

					<?php /*<h3 class="main__overtitle"><?= _t('main__overtitle') ?></h3>*/ ?>

					<h2 class="main__title"><?= _t('main__title') ?></h2>
					<p class="main__format">Очное участие</p>
					<div class="main__online"><?= _t('main__online') ?></div>

				</div>

				<div class="main__stat">

					<div class="main__stat-item">
						<span class="main__stat-item-num">1</span>
						<span class="main__stat-item-txt">день <br> форума</span>
					</div>
					<?php /*
					<div class="main__stat-item">
						<span class="main__stat-item-num">700</span>
						<span class="main__stat-item-txt">человек</span>
					</div>
					*/ ?>
					<div class="main__stat-item">
						<span class="main__stat-item-num">25</span>
						<span class="main__stat-item-txt">известных <br> экспертов</span>
					</div>
					<div class="main__stat-item">
						<span class="main__stat-item-num">2</span>
						<span class="main__stat-item-txt">специальных <br> гостя</span>
					</div>
					<div class="main__stat-item">
						<span class="main__stat-item-num">3</span>
						<span class="main__stat-item-txt">тысячи&nbsp;человек <br> очно&nbsp;и&nbsp;онлайн</span>
					</div>
				</div>
			</div>

			
			<?php if ($lang != 'en'): ?>
			<div class="main__form">
				<div class="main__form-header">
					<div class="main__form-header_left">
						<img loading="lazy" src="img/main/circle_blue.svg" alt="" class="main__form-header_left-pic">
						<p class="main__form-header_left-text">BRAIN<br><span>2023</span></p>
					</div>
					<div class="main__form-header_center">
						<div class="main__form-header_center-decoration"></div>
					</div>
					<div class="main__form-header_right">
						<div class="main__form-header_right-row">
							<p>2</p>
							<p>0</p>
						</div>
						<img loading="lazy" src="img/main/plus_blue.svg" alt="" class="main__form-header_right-pic">
						<div class="main__form-header_right-row">
							<p>2</p>
							<p>3</p>
						</div>
					</div>
				</div>

				
				

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical main-form form__container lazy">
	<form class="form__content form-redirect" action="<?=$action?>&quote_id=4140&form=popup-form">

		<div class="form__header">
			<div class="form__title"><?= _t("form__title") ?></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      

      <button type="submit" class="form__item form__button button"><?= _t("form__button") ?></button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">&lt;?= _t(&quot;form__button&quot;) ?&gt;</a>
</div>



			</div>
			<?php endif; ?>
			

			<?php if ($lang == 'en'): ?>
				<div class="main__form">
					<div class="main__form-header">
						<div class="main__form-header_left">
							<img loading="lazy" src="img/main/circle_blue.svg" alt="" class="main__form-header_left-pic">
							<p class="main__form-header_left-text">BRAIN<br><span>2021</span></p>
						</div>
						<div class="main__form-header_center">
							<div class="main__form-header_center-decoration"></div>
						</div>
						<div class="main__form-header_right">
							<div class="main__form-header_right-row">
								<p>2</p>
								<p>0</p>
							</div>
							<img loading="lazy" src="img/main/plus_blue.svg" alt="" class="main__form-header_right-pic">
							<div class="main__form-header_right-row">
								<p>2</p>
								<p>0</p>
							</div>
						</div>
					</div>

					
					

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical main-form form__container lazy">
	<form class="form__content form-redirect" action="<?=$action?>&quote_id=4140&form=popup-form">

		<div class="form__header">
			<div class="form__title"><?= _t("form__title") ?></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      

      <button type="submit" class="form__item form__button button"><?= _t("form__button") ?></button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">&lt;?= _t(&quot;form__button&quot;) ?&gt;</a>
</div>



				</div>
			<?php endif; ?>

		</div>
	</div>

	
	<div class="mobileBtn">
		<a class="mobileBtn__button button fancybox" href="#popup-reg" data-fancybox><?= _t('mobile__button') ?></a>
	</div>
	

</section>



<div class="main__runline main__runline_top outro_bottom">
	<div class="main__runline-item"><?= _t('main__runline-item-1') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-2') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-3') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-4') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-5') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-6') ?></div>
</div>



<section class="footer">
	<div class="container footer__container">

		<div class="footer__content">

			<?php if ($lang == 'ru'): ?>
				<img class="footer__logo" src="img/header/logo.svg" alt="">
			<?php else: ?>
				<img class="footer__logo" src="img/header/logo-en.svg" alt="">
			<?php endif; ?>

			<div class="footer__right">
				<a class="footer__copyright-link fancybox-privacy-link" href="https://synergy.ru/lp/_chunk/privacy.php?date=15-01-2019&amp;lang=<?=$lang?>" data-fancybox=""><?= _t('footer__copyright-link') ?></a>

				<div class="footer__item"><?= _t('footer__sydi') ?>
					<a class="footer__syndigital" href="https://sydi.ru" target="_blank">Synergy&nbsp;Digital</a>
				</div>

				<a class="footer__copyright-link" href="<?= _t('footer__offer_link') ?>" data-fancybox><?= _t('footer__offer') ?></a>
			</div>

		</div>
	</div>
</section>


		<section class="popups" hidden>
			






<div id="popup-reg" class="popup-reg form-reg-vertical">
	<div class="container">
		

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container lazy">
	<form class="form__content form-redirect" action="<?=$action?>&quote_id=4140&form=popup-form">

		<div class="form__header">
			<div class="form__title"><?= _t("form__title") ?></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      

      <button type="submit" class="form__item form__button button"><?= _t("form__button") ?></button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">&lt;?= _t(&quot;form__button&quot;) ?&gt;</a>
</div>


	</div>
</div>

<div id="popup-reg2" class="popup-reg form-reg-vertical">
  <div class="container">
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container lazy">
	<form class="form__content form-popup-open" action="<?=$action?>&quote_id=4140&form=popup-form">

		<div class="form__header">
			<div class="form__title"><?= _t("form__title") ?></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      

      <button type="submit" class="form__item form__button button"><?= _t("form__button") ?></button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">&lt;?= _t(&quot;form__button&quot;) ?&gt;</a>
</div>


  </div>
</div>

<div id="popup-partner" class="popup-reg popup-partner form-reg-vertical">
  <div class="container">
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container lazy">
	<form class="form__content form-popup-open" action="<?=$action?>&quote_id=4140&form=popup-form">

		<div class="form__header">
			<div class="form__title"><?= _t("form__popup_partner-title") ?></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      

      <button type="submit" class="form__item form__button button"><?= _t("form__button") ?></button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">&lt;?= _t(&quot;form__button&quot;) ?&gt;</a>
</div>


  </div>
</div>

<div id="popup-presentation" class="popup-reg popup-presentation form-reg-vertical">
  <div class="container">
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
	<form class="form__content form-popup-open" action="<?=$action_franchise?>&quote_id=3644&form=franchising">

		<div class="form__header">
			<div class="form__title">Узнать более подробно</div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      

      <button type="submit" class="form__item form__button button">Зарегистрироваться</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>

    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Зарегистрироваться</a>
</div>


  </div>
</div>

<div id="popup-price-online" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container lazy">
	<form class="form__content &lt;?= _t(&quot;form__title&quot;) ?&gt;" action="<?=$action?>&quote_id=4140&form=price-ticket">

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="62125045" placeholder="" class="">
      
      <input type="hidden" name="event_id" value="145" placeholder="" class="">
      
      <input type="text" name="promocode" value="" placeholder="Промокод" class="form__input">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price1" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container lazy">
	<form class="form__content &lt;?= _t(&quot;form__title&quot;) ?&gt;" action="<?=$action?>&quote_id=4140&form=price-ticket">

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="52066800" placeholder="" class="">
      
      <input type="hidden" name="event_id" value="145" placeholder="" class="">
      
      <input type="text" name="promocode" value="" placeholder="Промокод" class="form__input">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price2" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container lazy">
	<form class="form__content &lt;?= _t(&quot;form__title&quot;) ?&gt;" action="<?=$action?>&quote_id=4140&form=price-ticket">

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="52067142" placeholder="" class="">
      
      <input type="hidden" name="event_id" value="145" placeholder="" class="">
      
      <input type="text" name="promocode" value="" placeholder="Промокод" class="form__input">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price3" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container lazy">
	<form class="form__content &lt;?= _t(&quot;form__title&quot;) ?&gt;" action="<?=$action?>&quote_id=4140&form=price-ticket">

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="52067299" placeholder="" class="">
      
      <input type="hidden" name="event_id" value="145" placeholder="" class="">
      
      <input type="text" name="promocode" value="" placeholder="Промокод" class="form__input">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price4" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container lazy">
	<form class="form__content &lt;?= _t(&quot;form__title&quot;) ?&gt;" action="<?=$action?>&quote_id=4140&form=price-ticket">

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="52067538" placeholder="" class="">
      
      <input type="hidden" name="event_id" value="145" placeholder="" class="">
      
      <input type="text" name="promocode" value="" placeholder="Промокод" class="form__input">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price5" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container lazy">
	<form class="form__content &lt;?= _t(&quot;form__title&quot;) ?&gt;" action="<?=$action?>&quote_id=4140&form=price-ticket">

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="52067765" placeholder="" class="">
      
      <input type="hidden" name="event_id" value="145" placeholder="" class="">
      
      <input type="text" name="promocode" value="" placeholder="Промокод" class="form__input">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price6" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container lazy">
	<form class="form__content &lt;?= _t(&quot;form__title&quot;) ?&gt;" action="<?=$action?>&quote_id=4140&form=price-ticket">

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="52067932" placeholder="" class="">
      
      <input type="hidden" name="event_id" value="145" placeholder="" class="">
      
      <input type="text" name="promocode" value="" placeholder="Промокод" class="form__input">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" class="form__chekbox-input" value="None" id="squaredThree1-" name="personalDataAgree" checked />
      <label for="squaredThree1-"></label>
			<span><?= _t("form__privacy") ?>
			</span>
    </div>

    <div class="form__chekbox form__chekbox-2">
      <input type="checkbox" class="form__chekbox-2-input" value="None" id="squaredThree2-" name="personalDataAgree" checked />
      <label for="squaredThree2-" onclick="this.classList.toggle('active')"></label>
      <span><?= _t("form__offer") ?>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price7" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
   <form class="form__content " action="<?=$action_ticketless?>&unit=payments&type=ticketless&quote_id=4140&form=price-ticket&callbackSuccess=https://synergyglobal.ru/forums/brain2021/payment_success&new_tab=1">
   

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="54794596">
      
      <input type="hidden" name="event_id" value="145">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>


    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price8" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
   <form class="form__content " action="<?=$action_ticketless?>&unit=payments&type=ticketless&quote_id=4140&form=price-ticket&callbackSuccess=https://synergyglobal.ru/forums/brain2021/payment_success&new_tab=1">
   

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="56194139">
      
      <input type="hidden" name="event_id" value="145">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>


    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price9" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
   <form class="form__content " action="<?=$action_ticketless?>&unit=payments&type=ticketless&quote_id=4140&form=price-ticket&callbackSuccess=https://synergyglobal.ru/forums/brain2021/payment_success&new_tab=1">
   

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="54794596">
      
      <input type="hidden" name="event_id" value="145">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>


    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price10" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
   <form class="form__content " action="<?=$action_ticketless?>&unit=payments&type=ticketless&quote_id=4140&form=price-ticket&callbackSuccess=https://synergyglobal.ru/forums/brain2021/payment_success&new_tab=1">
   

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="56194952">
      
      <input type="hidden" name="event_id" value="145">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>


    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price11" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
   <form class="form__content " action="<?=$action_ticketless?>&unit=payments&type=ticketless&quote_id=4140&form=price-ticket&callbackSuccess=https://synergyglobal.ru/forums/brain2021/payment_success&new_tab=1">
   

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="56195725">
      
      <input type="hidden" name="event_id" value="145">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>


    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price12" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
   <form class="form__content " action="<?=$action_ticketless?>&unit=payments&type=ticketless&quote_id=4140&form=price-ticket&callbackSuccess=https://synergyglobal.ru/forums/brain2021/payment_success&new_tab=1">
   

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="56196675">
      
      <input type="hidden" name="event_id" value="145">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>


    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price13" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
   <form class="form__content " action="<?=$action_ticketless?>&unit=payments&type=ticketless&quote_id=4140&form=price-ticket&callbackSuccess=https://synergyglobal.ru/forums/brain2021/payment_success&new_tab=1">
   

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="57286849">
      
      <input type="hidden" name="event_id" value="145">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>


    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>


<div id="popup-price__onlinenew" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
   <form class="form__content " action="<?=$action_ticketless?>&unit=payments&type=ticketless&quote_id=4246&form=price-ticket&callbackSuccess=https://synergyglobal.ru/forums/brain2021/payment_success&new_tab=1">
   

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      <input type="hidden" name="product_id" value="118719711">
      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>


    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price__bussines" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
   <form class="form__content " action="<?=$action_ticketless?>&unit=payments&type=ticket&quote_id=4460&form=price-ticket&callbackSuccess=https://synergyglobal.ru/forums/brain2021/payment_success&new_tab=1">
   

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      
<div class="form__item d-none">
  
  <input name="product_id" type="hidden" placeholder="" class="form__input " value="118722525"   >
  
</div>

      
      
<div class="form__item ">
  
  <input name="tickets_count" type="number" placeholder="Количество билетов" class="form__input " value="1" min=1  >
  
</div>

      
      
<div class="form__item d-none">
  
  <input name="event_id" type="hidden" placeholder="" class="form__input " value="163"   >
  
</div>

      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>


    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price__vip" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
   <form class="form__content " action="<?=$action_ticketless?>&unit=payments&type=ticket&quote_id=4460&form=price-ticket&callbackSuccess=https://synergyglobal.ru/forums/brain2021/payment_success&new_tab=1">
   

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      
<div class="form__item d-none">
  
  <input name="product_id" type="hidden" placeholder="" class="form__input " value="118722922"   >
  
</div>

      
      
<div class="form__item ">
  
  <input name="tickets_count" type="number" placeholder="Количество билетов" class="form__input " value="1" min=1  >
  
</div>

      
      
<div class="form__item d-none">
  
  <input name="event_id" type="hidden" placeholder="" class="form__input " value="163"   >
  
</div>

      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>


    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price__platinum" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
   <form class="form__content " action="<?=$action_ticketless?>&unit=payments&type=ticket&quote_id=4460&form=price-ticket&callbackSuccess=https://synergyglobal.ru/forums/brain2021/payment_success&new_tab=1">
   

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      
<div class="form__item d-none">
  
  <input name="product_id" type="hidden" placeholder="" class="form__input " value="118723226"   >
  
</div>

      
      
<div class="form__item ">
  
  <input name="tickets_count" type="number" placeholder="Количество билетов" class="form__input " value="1" min=1  >
  
</div>

      
      
<div class="form__item d-none">
  
  <input name="event_id" type="hidden" placeholder="" class="form__input " value="163"   >
  
</div>

      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>


    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>

<div id="popup-price__standard" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    
    

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form vertical form__container">
   <form class="form__content " action="<?=$action_ticketless?>&unit=payments&type=ticket&quote_id=4460&form=price-ticket&callbackSuccess=https://synergyglobal.ru/forums/brain2021/payment_success&new_tab=1">
   

		<div class="form__header">
			<div class="form__title"></div>
			<div class="form__subtitle"></div>
		</div>

    <div class="form__box">

  		
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			

  		
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			

      
      
      
<div class="form__item d-none">
  
  <input name="product_id" type="hidden" placeholder="" class="form__input " value="118722227"   >
  
</div>

      
      
<div class="form__item ">
  
  <input name="tickets_count" type="number" placeholder="Количество билетов" class="form__input " value="1" min=1  >
  
</div>

      
      
<div class="form__item d-none">
  
  <input name="event_id" type="hidden" placeholder="" class="form__input " value="163"   >
  
</div>

      
      

      <button type="submit" class="form__item form__button button">Купить билет</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>


    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">Купить билет</a>
</div>


  </div>
</div>






<div id="popup-speakers-filatov" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/speakers/filatov.jpg" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-filatov-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-filatov__popup-info') ?>
      </ul>
    </div>

  </div>
</div>

<div id="popup-speakers-goncharov" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/speakers/goncharov.jpg" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-goncharov-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-goncharov__popup-info') ?>
      </ul>
    </div>

  </div>
</div>

<div id="popup-speakers-spirande" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/speakers/spirande.jpg" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-spirande-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-spirande__popup-info') ?>
      </ul>
    </div>

  </div>
</div>

<div id="popup-speakers-litvinov" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/speakers/litvinov.jpg" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-litvinov-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-litvinov__popup-info') ?>
      </ul>
    </div>

  </div>
</div>

<div id="popup-speakers-borisova" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/speakers/borisova.jpg" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-borisova-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-borisova__popup-info') ?>
      </ul>
    </div>

  </div>
</div>

<div id="popup-speakers-venerina" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/speakers/venerina.jpg" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-venerina-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-venerina__popup-info') ?>
      </ul>
    </div>

  </div>
</div>

<div id="popup-speakers-starchenko" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/speakers/starchenko.jpg" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-starchenko-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-starchenko__popup-info') ?>
      </ul>
    </div>

  </div>
</div>

<div id="popup-speakers-radaeva" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/speakers/radaeva.jpg" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-radaeva-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-radaeva__popup-info') ?>
      </ul>
    </div>

  </div>
</div>

<div id="popup-speakers-kuyava" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/speakers/kuyava.jpg" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-kuyava-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-kuyava__popup-info') ?>
      </ul>
    </div>

  </div>
</div>

<div id="popup-speakers-hichenko" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/speakers/hichenko.jpg" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-hichenko-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-hichenko__popup-info') ?>
      </ul>
    </div>

  </div>
</div>

<div id="popup-speakers-vasilev" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/speakers/vasilev.jpg" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-vasilev-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-vasilev__popup-info') ?>
      </ul>
    </div>

  </div>
</div>

<div id="popup-speakers-lebedev" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/speakers/lebedev.jpg" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-lebedev-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-lebedev__popup-info') ?>
      </ul>
    </div>

  </div>
</div>





<div id="popup-map" class="popup-map">
	<div class="container">
    <a class="popup-map_close" data-fancybox-close="" title="Закрыть"></a>
	  <img loading="lazy" src="img/popup-map/scheme-map.png" alt="">
  </div>
</div>




<div class="popup-thanks" id="popup-thanks">

	<div class="container">

		<div class="popup-thanks__content">

			<img src="img/popup-thanks/thanks_img.png" alt="" class="popup-thanks__img">

			<h2 class="popup-thanks__title">Спасибо, ваша заявка отправлена!</h2>

			<div class="popup-thanks__txt">В ближайшее время мы свяжемся с вами и расскажем обо всех условиях участия в мероприятии.</div>

		</div>
	</div>
</div>
<div class="popup popup-accreditation" id="popup-accreditation">
	<div class="popup-accreditation__title">Запрос на&nbsp;аккредитацию СМИ присылать на&nbsp;почту</div>
	<div class="popup-accreditation__body popup-accreditation__inner">
		<div class="popup-accreditation__text">Роман Попов&nbsp;— <a href="mailto:RAPopov@synergy.ru" target="_blank">RAPopov@synergy.ru</a></div>
	<div class="popup-accreditation__text">Решение о&nbsp;предоставление аккредитации будет направлено Вам на&nbsp;почту.</div>
	<div class="popup-accreditation__rules"><a class="popup-accreditation__rules-link" href="https://synergyhr.ru/files/media_draft_citation_rules_ru.pdf" target="_blank" data-fancybox="">Правила цитирования для&nbsp;СМИ</a></div>
	</div>
</div>

		</section>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
	<script src="https://syn.su/js/lander.js?v=2" defer="defer"></script>

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

	<?php if ($partner) { ?>
	<script>
		function thanks_page() {
			setTimeout(function(){
			location.replace('https://synergyglobal.ru/forums/brain2022/price/?date=autodate&partner=<?=$partner?>');
			}, 100);
		}
	</script>
	<?php } else { ?>
	<script>
		function thanks_page() {
			setTimeout(function(){
			location.replace('https://synergyglobal.ru/forums/brain2022/price');
			}, 100);
		}
	</script>
	<?php } ?>

	<a href="http://sydi.ru" style="display: none">Synergy Digital</a>

</body>
</html>
