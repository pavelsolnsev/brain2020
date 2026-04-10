{% if outro != true %}
<section class="main intro {{class}}">
{% else %}
<section class="main <?=$main_class?>">
{% endif %}

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

			{% if outro != true %}
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

				{% import 'formReg_1/block.php' as form %}
				{{ form.form( 'vertical main-form', 'form-redirect', '<?= _t("form__title") ?>', '', '<?= _t("form__button") ?>', 'popup-form', '', '', '4140' ) }}

			</div>
			<?php endif; ?>
			{% endif %}

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

					{% import 'formReg_1/block.php' as form %}
					{{ form.form( 'vertical main-form', 'form-redirect', '<?= _t("form__title") ?>', '', '<?= _t("form__button") ?>', 'popup-form', '', '', '4140' ) }}

				</div>
			<?php endif; ?>

		</div>
	</div>

	{% if IS_PRICE == false %}
	<div class="mobileBtn">
		<a class="mobileBtn__button button fancybox" href="#popup-reg" data-fancybox><?= _t('mobile__button') ?></a>
	</div>
	{% endif %}

</section>


{% if outro != true %}
<div class="main__runline main__runline_top {{class}}">
	<div class="main__runline-item"><?= _t('main__runline-item-1') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-2') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-3') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-4') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-5') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-6') ?></div>
</div>
{% else %}
<div class="main__runline main__runline_bottom {{class}}">
	<div class="main__runline-item"><?= _t('main__runline-item-1') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-2') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-3') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-4') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-5') ?></div>
	<div class="main__runline-item"><?= _t('main__runline-item-6') ?></div>
</div>
{% endif %}

