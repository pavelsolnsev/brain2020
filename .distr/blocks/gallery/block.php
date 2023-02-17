{% from './data.njk' import data as items %}

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
		{% for item in items %}

		<div class="gallery__galleryInfoSlider-item">
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_{{ item.id | safe }}" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_{{ item.id }}.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_{{ item.id | safe }}">
						<img class="lazy" data-src="img/gallery/{{ item.id }}.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
			<div class="gallery__galleryInfoSlider-inner">
				<a href="#gallery_{{ item.id_2 | safe }}" data-fancybox>
					<img class="gallery__gallerySlider-item-img" src="img/gallery/prev/pic_{{ item.id_2 }}.jpg" alt="">
				</a>
				<div class="d-none">
					<div class="gallery__fancybox" id="gallery_{{ item.id_2 | safe }}">
						<img class="lazy" data-src="img/gallery/{{ item.id_2 }}.jpg" alt="">
						<a class="gallery__fancybox-close" data-fancybox-close="" title="Закрыть">&#10006;</a>
					</div>
				</div>
			</div>
		</div>

		{% endfor %}
	</div>
</section>
