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