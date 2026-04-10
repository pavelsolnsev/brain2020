{% from './data.njk' import data1 as infopartners, data2 as partners, data3 as logistic %}

<section class="partners lazy" id="partners">

	<div class="container">

		<!-- <h2 class="partners__title title-section"><?= _t('partners__title') ?></h2> -->

<!-- 		<?php if ($lang == 'en'): ?>
			<h2 class="partners__title_small title-section"><?= _t('partners__infopartners') ?></h2>
			<div class="partners__partnersInfoSlider owl-carousel">
				{% for item in infopartners %}

				<div class="partners__partnersInfoSlider-item">
					{% for el in item %}
					<div class="partners__partnersInfoSlider-inner"><img class="partners__partnersSlider-item-img" src="img/partners/{{ el.image }}" alt=""></div>

					{% endfor %}
				</div>

				{% endfor %}
			</div>
		<?php endif; ?>

		<div class="partners__title_small title-section"><?= _t('partners__casualpartners') ?></div>

		<div class="partners__partnersSlider owl-carousel">

			{% for item in partners %}
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '{{ item.en }}' : '{{ item.ru }}';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							{% if item.href %}<a href="{{ item.href }}" target="_blank">{% endif %}
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/{{ item.image }}" alt="">
						<?php if ( $lang != 'en' ) { ?>
							{% if item.href %}</a>{% endif %}
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			{% endfor %}

		</div>

		<div class="partners__title_small title-section">Информационные партнеры</div>

		<div class="partners__partnersSlider owl-carousel">

			{% for item in infopartners %}
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '{{ item.en }}' : '{{ item.ru }}';

				if ( $is_partners_card ) { ?>
					<div class="partners__partnersSlider-item">
						<div class="partners__partnersSlider-inner">
						<?php if ( $lang != 'en' ) { ?>
							{% if item.href %}<a href="{{ item.href }}" target="_blank">{% endif %}
						<?php }  ?>
							<img class="partners__partnersSlider-item-img lazy" src="img/partners/{{ item.image }}" alt="">
						<?php if ( $lang != 'en' ) { ?>
							{% if item.href %}</a>{% endif %}
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			{% endfor %}

		</div> -->


		<!-- <div class="partners__title_small title-section">Логистический партнер</div> -->
		<h2 class="partners__title title-section">Логистический партнер</h2>

		<!-- <div class="partners__logistic">

			{% for item in logistic %}
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '{{ item.en }}' : '{{ item.ru }}';

				if ( $is_partners_card ) { ?>
					<div class="partners__logistic-item">
						<div class="partners__logistic-inner">
						<?php if ( $lang != 'en' ) { ?>
							{% if item.href %}<a href="{{ item.href }}" target="_blank">{% endif %}
						<?php }  ?>
							<img class="partners__logistic-item-img lazy" src="img/partners/{{ item.image }}" alt="">
						<?php if ( $lang != 'en' ) { ?>
							{% if item.href %}</a>{% endif %}
						<?php }  ?>
						</div>
					</div>
				<?php } ?>
			{% endfor %}

		</div> -->

		<div class="partners__buttons">
			<a href="#popup-partner" class="partners__button button button-black" data-fancybox data-options='{"autoFocus":false}'><?= _t('partners__button') ?></a>
			<a href="#popup-accreditation" class="partners__button button button-red" data-fancybox>аккредитация сми</a>
		</div>

	</div>
</section>