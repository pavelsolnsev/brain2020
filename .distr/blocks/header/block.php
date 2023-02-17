<section class="header">

	<div class="container header__container">

		<div class="header__content">

			<a href="" class="header__logo-link">
				<?php if ($lang == 'ru'): ?>
				<img class="header__logo" src="img/header/logo.svg" alt="">
				{% if IS_PRICE == false %}
				<?php /* ?><a href="http://vtb.synergy.ru"><img class="header__logo" src="https://vtb.synergy.ru/vtb/img/vtb_logo_white.svg" alt=""></a><?php */ ?>
				{% endif %}
				<?php else: ?>
				<img class="header__logo" src="img/header/logo-en.svg" alt="">
				<?php endif; ?>
			</a>

			{% if IS_PRICE == false %}
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
			{% endif %}

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
				{% if IS_PRICE == false %}
				<button class="header__nav_menu " type="button">
					<img loading="lazy" src="img/header/icon_open.svg" class="header__nav_open-pic" alt="">
            	</button>
				{% endif %}
			</div>

      {# % if IS_PRICE %}
      <div class="header__box">
        <a class="header__button button" href="#popup-reg2" data-fancybox data-options='{"autoFocus":false}'><?= _t('header__button') ?></a>
      </div>
      {% else %}
			<div class="header__box">
				<a class="header__button button" href="#popup-reg" data-fancybox data-options='{"autoFocus":false}'><?= _t('header__button') ?></a>
			</div>
      {% endif %#}
		</div>
	</div>

</section>
