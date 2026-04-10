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