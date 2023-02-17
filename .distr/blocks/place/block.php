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
