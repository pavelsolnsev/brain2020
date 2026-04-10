{# Блок разделён на составные блоки для экстенда его в других блоках, например, в @intensive\headerGlobal\block.php #}
{% block headerGlobal %}
<section class="headerGlobal" id="headerGlobal">
	{% block headerGlobal_top %}
	<div class="headerGlobal__top">
		<div class="container header__container">
			<div class="headerGlobal__row headerGlobal__row_1 row no-gutters <?php if ($partner == 'franchising_minsk'): ?> float-right <?php endif; ?>">

				<div class="headerGlobal__button-popup-col col-auto">

					<a class="headerGlobal__button-popup button" data-toggle-class="page-menu-opened" data-href="body">
						<i class="icon-menu"></i>
						<i class="icon-menu-close"></i>
						Меню
					</a>

				</div>

				<div class="headerGlobal__logo-1-col col-auto align-self-center">
					<a href="https://example.com/demo/" target="_blank" class="headerGlobal__logo-1">
					<img src="/img/@header/sbs.svg" alt="">
					</a>
				</div>

				<div class="col d-none d-md-block">
					<div class="headerGlobal__links">
						<div class="headerGlobal__links-item"><a href="https://example.com/demo/about/" target="_blank" class="headerGlobal__links-link">О&nbsp;Школе</a></div>
						<div class="headerGlobal__links-item"><a href="https://example.com/demo/timetable/" target="_blank" class="headerGlobal__links-link">Расписание программ</a></div>
						<div class="headerGlobal__links-item"><a href="https://example.com/demo/mba/" target="_blank" class="headerGlobal__links-link">MBA</a></div>
						<div class="headerGlobal__links-item"><a href="https://example.com/demo/franchise" target="_blank" class="headerGlobal__links-link">Франшиза</a></div>
					</div>
				</div>

				<div class="headerGlobal__button-col col-6 col-md-auto">
					<a href="#popup-reg" class="headerGlobal__button headerGlobal__button_callback headerGlobal__button_callback_desktop button fancybox d-none d-md-flex" data-fancybox data-fancybox-options="{}">
					Заказать звонок
					</a>
				</div>

			
			</div>
		</div>
	</div>
	{% endblock %}

	{% block headerGlobal_popup %}
	<div class="headerGlobal__popup" id="headerGlobal__popup">
		<div class="headerGlobal__popup-menu">
			<div class="headerGlobal__popup-menu-row row">
				<div class="col-md-4 headerGlobal__popup-col-1">
					<div class="headerGlobal__popup-inner">
						<div class="headerGlobal__popup-title">Демо-раздел</div>
						<div class="headerGlobal__popup-menu-item fw-xbold color-black"><a href="//<?= $_SERVER['HTTP_HOST'] ?>/genesis/">Genesis</a></div>
						<div class="headerGlobal__popup-menu-item fw-xbold color-black"><a href="//<?= $_SERVER['HTTP_HOST'] ?>/kvant/">Квантовый скачок</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/mba/" target="_blank">MBA</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/programms/forumyi-i-konferenczii/" target="_blank">Форумы и&nbsp;конференции</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/corporate-training/" target="_blank">Корпоративные программы</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/practicums/" target="_blank">Онлайн-практикумы</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/webinars/" target="_blank">Вебинары</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/master-classes/" target="_blank">Мастер–классы</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/openprograms/" target="_blank">Открытые программы</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/business-services/" target="_blank">Сервисы для&nbsp;бизнеса</a></div>
					</div><!-- headerGlobal__popup-inner -->
				</div><!-- col -->
				<div class="col-md-3 headerGlobal__popup-col-2">
					<div class="headerGlobal__popup-inner">
						<div class="headerGlobal__popup-title">Школа бизнеса</div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/about/" target="_blank">О школе</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/timetable/" target="_blank">Расписание</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/speakers/" target="_blank">Спикеры</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/contacts/" target="_blank">Контакты</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/about/vakansii/" target="_blank">Вакансии</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/partners/" target="_blank">Партнерство</a></div>
					</div><!-- headerGlobal__popup-inner -->
					<div class="headerGlobal__popup-inner">
						<div class="headerGlobal__popup-title">Университет</div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/abiturientam/college/" target="_blank">Колледж</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/abiturientam/pervoe_vysshee/" target="_blank">Бакалавриат</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/abiturientam/second_highest" target="_blank">Второе высшее образование</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/abiturientam/speczialitet" target="_blank">Специалитет</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/abiturientam/magistracy" target="_blank">Магистратура</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/abiturientam/postgraduate_study" target="_blank">Аспирантура</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/biznes_obrazovanie/" target="_blank">Бизнес-образование</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/abiturientam/additional_education" target="_blank">Дополнительное образование</a></div>
					</div><!-- headerGlobal__popup-inner -->
				</div><!-- col -->
				<div class="col-md-4 headerGlobal__popup-col-2">
					<div class="headerGlobal__popup-inner">
						<div class="headerGlobal__popup-title">База знаний</div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/base/themes" target="_blank">Тематики</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/base/video/" target="_blank">Видео</a></div>
						<div class="headerGlobal__popup-menu-item"><a href="https://example.com/demo/base/articles/" target="_blank">Статьи</a></div>
					</div><!-- headerGlobal__popup-inner -->
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- headerGlobal__popup-menu -->

		<div class="headerGlobal__popup-footer">
			<div class="row">
				<div class="col-md-4 headerGlobal__popup-col-1">
					<div class="headerGlobal__popup-inner">
						<div class="headerGlobal__popup-title">Адрес</div>
						Демо-адрес (портфолио)
					</div><!-- headerGlobal__popup-inner -->
				</div><!-- col -->
				<div class="col-md-3 headerGlobal__popup-col-2">
					<div class="headerGlobal__popup-phone headerGlobal__popup-inner">
						<div class="headerGlobal__popup-title">Телефон</div>

					</div><!-- headerGlobal__popup-inner -->
				</div><!-- col -->
				<div class="col-md-4 headerGlobal__popup-col-2">
					<div class="headerGlobal__popup-inner">
						<div class="headerGlobal__popup-title">E-mail</div>
						<a href="mailto:info@example.com" target="_blank">info@example.com</a>
					</div><!-- headerGlobal__popup-inner -->
				</div><!-- col -->
			</div><!-- row -->
			<div class="headerGlobal__popup-social headerGlobal__popup-inner">
				<div class="headerGlobal__popup-social-title headerGlobal__popup-title">Мы&nbsp;в&nbsp;социальных сетях</div>
				<div>
					<a href="https://example.com/#" target="_blank" rel="noopener noreferrer"><i class="icon-vk-white"></i></a>
					<a href="https://example.com/#" target="_blank" rel="noopener noreferrer"><i class="icon-fb-white"></i></a>
					<a href="https://example.com/#" target="_blank" rel="noopener noreferrer"><i class="icon-tg-white"></i></a>
					<a href="https://example.com/#" target="_blank" rel="noopener noreferrer"><i class="icon-ig-white"></i></a>
				</div>
			</div><!-- headerGlobal__popup-inner -->
		</div><!-- headerGlobal__popup-footer -->
	</div><!-- headerGlobal__popup -->
	{% endblock %}

	{% block headerGlobal_bottom %}

		{% block headerGlobal_bottom_inner %}
		{% endblock %}

	{% endblock %}

</section>
{% endblock %}
