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

    

<section class="header">

	<div class="container header__container">

		<div class="header__content">

			<a href="" class="header__logo-link">
				<?php if ($lang == 'ru'): ?>
				<img class="header__logo" src="img/header/logo.svg" alt="">
				
				<?php else: ?>
				<img class="header__logo" src="img/header/logo-en.svg" alt="">
				<?php endif; ?>
			</a>

			

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
				
			</div>

      
		</div>
	</div>

</section>


<section class="price">

  <div class="container">
    <div class="price__info">
      <h2 class="price__title title-section">Стоимость участия</h2>
    </div>

    <div class="price__online">

      <div class="price__online-img">
        <img src="img/price/circle.svg" alt="">
      </div>

      <div class="price__online-middle">
        <div class="price__online-middle-title">Онлайн трансляция</div>
        <div class="price__online-middle-txt">Сертификат об участии</div>
        <div class="price__online-middle-txt">Запись форума</div>
      </div>

      <div class="price__online-cost">
        <div class="price__online-cost-val">5 000&nbsp;₽</div>
        <div data-src="#popup-price-online" class="price__online-cost-btn button" data-fancybox data-options='{"autoFocus":false}'>Купить</div>
      </div>

    </div>

  </div>
</section>



<section class="main <?=$main_class?>">


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

	

</section>



<div class="main__runline main__runline_bottom ">
	<div class="main__runline-item"><?= _t('main__runline-item-1') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-2') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-3') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-4') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-5') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-6') ?></div>
</div>



<?php 
   $content = file_get_contents('https://vtb.synergy.ru/vtb/');
	echo $content;
?>
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
