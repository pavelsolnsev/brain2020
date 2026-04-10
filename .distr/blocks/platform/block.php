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
