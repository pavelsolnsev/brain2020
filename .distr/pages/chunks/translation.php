<?php
/*
При добавлении перевода просьба в качестве ключа массива копипастом указывать класс блока/элемента (для простоты и удобства), в котором будет выводиться текст, например:
$_['ru']['price-header__title'] = '<span>Чтобы завершить регистрацию,</span> <br>выберите пакет участия';
$_['en']['price-header__title'] = '<span>Please, proceed the payment</span> <br>to&nbsp;complete your check&nbsp;in';

Если класс у элементов одинаковый, а тексты разные, через дефис добавлять дополнительный уникальный идентификатор, например:
$_['ru']['header__links-speakers'] = 'Спикеры';
$_['en']['header__links-speakers'] = 'Speakers';
$_['ru']['header__links-concept'] = 'Концепция';
$_['en']['header__links-concept'] = 'Concept';

Если это переменная в version.php, то в качестве ключа используем её же имя, например:
$_['ru']['version_form_title'] = 'Зарегистрироваться на&nbsp;форум';
$_['en']['version_form_title'] = 'Register to&nbsp;the Forum';

В коде перевод вставляется через функцию _t(), например:
<?= _t('price-header__title') ?>
$version_form_title = _t('version_form_title');
*/

$_ = [];


/* Общие параметры */

$_['ru']['mobile__button'] = 'Зарегистрироваться';
$_['en']['mobile__button'] = 'Sign up';

$_['ru']['form__title'] = 'Заполните форму, чтобы принять участие';
$_['en']['form__title'] = 'Reserve your spot';

$_['ru']['form__title_more'] = 'Узнать подробности';
$_['en']['form__title_more'] = 'Find out more';

$_['ru']['form__title_faculty'] = 'Оставь заявку и&nbsp;узнай больше о&nbsp;факультете';
$_['en']['form__title_faculty'] = '';

$_['ru']['form__button'] = 'Отправить заявку';
$_['en']['form__button'] = 'Apply';

$_['ru']['form__button_more'] = 'Узнать больше';
$_['en']['form__button_more'] = '';

$_['ru']['form__placeholder_name'] = 'Имя';
$_['en']['form__placeholder_name'] = 'Name';

$_['ru']['form__placeholder_phone'] = 'Телефон';
$_['en']['form__placeholder_phone'] = 'Phone';

$_['ru']['form__privacy'] = 'Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок';
$_['en']['form__privacy'] = 'I&nbsp;agree to&nbsp;the&nbsp;<a class="privacy-ajax" href="privacy">privacy policy</a> and give my&nbsp;consent to&nbsp;the processing of&nbsp;my&nbsp;personal data and receiving newsletters';

$_['ru']['form__offer'] = 'Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>';
$_['en']['form__offer'] = 'By&nbsp;paying, you agree to&nbsp;the&nbsp;<a href="files/offer_en.pdf" data-fancybox>terms of&nbsp;the offer</a>';

$_['ru']['form__popup_partner-title'] = 'Станьте партнером конференции Brain 2022, заполнив форму';
$_['en']['form__popup_partner-title'] = 'Become a&nbsp;partner of&nbsp;the Brain 2022 conference by&nbsp;filling out the form';



/* version.php */

$_['ru']['phone'] = '8&nbsp;926&nbsp;921&nbsp;05&nbsp;88';
$_['ru']['phone_desctop'] = '+7&nbsp;495&nbsp;280&nbsp;05&nbsp;76';
$_['en']['phone_desctop'] = '';
$_['en']['phone'] = '';

$_['ru']['phone__link'] = '+79269210588';
$_['ru']['phone__link_desctop'] = '+74952800576';
$_['en']['phone__link_desctop'] = '';
$_['en']['phone__link'] = '';

$_['ru']['date'] = '23-24 ноября 2020&nbsp;| Москва | Grand Ballroom';
$_['en']['date'] = 'November 23-24';

/* header */

$_['ru']['header__nav-link-1'] = 'О&nbsp;форуме';
$_['en']['header__nav-link-1'] = 'About the Forum';

$_['ru']['header__nav-link-2'] = 'Спикеры';
$_['en']['header__nav-link-2'] = 'Speakers';

$_['ru']['header__nav-link-3'] = 'Темы';
$_['en']['header__nav-link-3'] = 'Topics';

$_['ru']['header__nav-link-4'] = 'Партнеры';
$_['en']['header__nav-link-4'] = 'Partners';

$_['ru']['header__nav-link-5'] = 'Франшиза';
$_['en']['header__nav-link-5'] = '';

$_['ru']['header__nav-button'] = 'Зарегистрироваться';
$_['en']['header__nav-button'] = 'Sign up';

$_['ru']['header__button'] = 'Зарегистрироваться';
$_['en']['header__button'] = 'Sign up';

/* main section */

$_['ru']['main__online'] = '+&nbsp;Онлайн трансляция <br> у вас дома';
$_['en']['main__online'] = 'Online participation';

$_['ru']['main__overtitle'] = 'Конференция <br> о мозге и мышлении';
$_['en']['main__overtitle'] = 'Brain and Mind <br> Conference';

$_['ru']['main__title'] = 'BRAIN 2021';
$_['en']['main__title'] = 'BRAIN 2021';

$_['ru']['main__runline-item-1'] = 'Изменение мышления';
$_['en']['main__runline-item-1'] = '';

$_['ru']['main__runline-item-2'] = 'Потенциал мозга';
$_['en']['main__runline-item-2'] = '';

$_['ru']['main__runline-item-3'] = 'Работа с убеждениями';
$_['en']['main__runline-item-3'] = '';

$_['ru']['main__runline-item-4'] = 'Баланс в жизни';
$_['en']['main__runline-item-4'] = '';

$_['ru']['main__runline-item-5'] = 'Возможности мышления';
$_['en']['main__runline-item-5'] = '';

$_['ru']['main__runline-item-6'] = 'Изменилась площадка проведения форума!';
$_['en']['main__runline-item-6'] = '';
/* description section */

$_['ru']['description__about-title'] = 'Что такое Brain 2020';
$_['en']['description__about-title'] = 'ABOUT BRAIN 2020';

$_['ru']['description__about-desc'] = 'Brain 2020&nbsp;&mdash; международная конференция о&nbsp;мозге и&nbsp;мышлении, которая соберет на&nbsp;2&nbsp;дня в&nbsp;Москве ведущих экспертов России и&nbsp;мира.';
$_['en']['description__about-desc'] = 'Brain 2020&nbsp;is an&nbsp;international conference on&nbsp;the brain and mind';

$_['ru']['description__about-year'] = '2020';
$_['en']['description__about-year'] = '2020';

$_['ru']['description__brain-desc-1'] = '<span class="description__brain-desc_part">Наш мозг</span> способен работать намного больше, чем мы&nbsp;можем себе представить. Благодаря скрытым возможностям разума мы&nbsp;совершаем открытия, добиваемся поставленных целей, воплощаем самые заветные мечты. Для того, чтобы делать больше и&nbsp;не&nbsp;лениться, важно знать, на&nbsp;что способен наш мозг и&nbsp;не&nbsp;давать себе расслабляться.';
$_['en']['description__brain-desc-1'] = '<span class="description__brain-desc_part">Our brain</span> is&nbsp;able to&nbsp;work much more than we&nbsp;can imagine. Thanks to&nbsp;the hidden possibilities of&nbsp;the mind, we&nbsp;make discoveries, achieve our goals, embody our most cherished dreams. In&nbsp;order to&nbsp;do&nbsp;more and not be&nbsp;lazy, it&nbsp;is&nbsp;important to&nbsp;know what our brain is&nbsp;capable of&nbsp;and not let ourselves relax.';

$_['ru']['description__brain-desc-2'] = '<span class="description__brain-desc_part">Цель форума&nbsp;&mdash;</span> задействовать скрытые и&nbsp;не&nbsp;используемые ресурсы мозга для достижения успеха в&nbsp;любой сфере.';
$_['en']['description__brain-desc-2'] = '<span class="description__brain-desc_part">The purpose of&nbsp;the forum</span> is&nbsp;to&nbsp;use the hidden and unused resources of&nbsp;the brain to&nbsp;achieve success in&nbsp;any field.';

$_['ru']['description__brain-desc-3'] = '<span class="description__brain-desc_part">&laquo;Ваш потрясающий мозг</span> может поднять вас из&nbsp;нищеты до&nbsp;богатства, превратить вас из&nbsp;одиночки во&nbsp;всеобщего любимца, вывести из&nbsp;депрессии, сделав счастливым и&nbsp;радостным,&nbsp;&mdash; если вы&nbsp;правильно воспользуетесь&nbsp;им.&raquo;&nbsp;&mdash; Брайн Трейси';
$_['en']['description__brain-desc-3'] = '<span class="description__brain-desc_part">&laquo;Your amazing brain can take you from poverty to&nbsp;riches, turn you from loner to&nbsp;everyone&rsquo;s favorite, lift you out of&nbsp;depression, making you happy and joyful&nbsp;&mdash; if&nbsp;you use it&nbsp;correctly.&raquo;&nbsp;&mdash; Brian Tracy';


/* themes section */

$_['ru']['themes__title'] = 'Ключевые темы';
$_['en']['themes__title'] = 'Key topics';

$_['ru']['themes__list-item-desc_1'] = 'Как перезагрузка мозга открывает вашу врожденную гениальность';
$_['en']['themes__list-item-desc_1'] = 'How Rebooting Your Brain Unleashes Your Innate Genius';

$_['ru']['themes__list-item-desc_2'] = 'Как мышление влияет на&nbsp;воображение и&nbsp;речь';
$_['en']['themes__list-item-desc_2'] = 'How thinking affects imagination and speech';

$_['ru']['themes__list-item-desc_3'] = 'Это не&nbsp;я, это&nbsp;&mdash; мой мозг. Как мозг принимает решения за&nbsp;нас?';
$_['en']['themes__list-item-desc_3'] = 'It&rsquo;s not&nbsp;me, it&rsquo;s my&nbsp;brain';

$_['ru']['themes__list-item-desc_4'] = 'Мозг&nbsp;&mdash; творец или зеркало?';
$_['en']['themes__list-item-desc_4'] = 'Is&nbsp;the brain a&nbsp;creator or&nbsp;a&nbsp;mirror?';

$_['ru']['themes__list-item-desc_5'] = 'Возраст ни&nbsp;при чем. Как заставить мозг быстро думать и&nbsp;много помнить';
$_['en']['themes__list-item-desc_5'] = 'Age has nothing to&nbsp;do&nbsp;with&nbsp;it. How to&nbsp;make the brain think fast and remember a&nbsp;lot';

$_['ru']['themes__list-item-desc_6'] = 'Как устроен разум и сознание';
$_['en']['themes__list-item-desc_6'] = 'How is the mind and consciousness';

$_['ru']['themes__list-item-desc_7'] = 'Молекулы радости: как наш мозг создает нейронные связи и&nbsp;формирует привычки и&nbsp;интеллект';
$_['en']['themes__list-item-desc_7'] = 'Molecules of&nbsp;joy: how our brain creates neural connections and forms habits and intelligence';

$_['ru']['themes__list-item-desc_8'] = 'Разум и&nbsp;искусственный интеллект. Компромисс возможен';
$_['en']['themes__list-item-desc_8'] = 'Mind and artificial intelligence. Compromise possible';

$_['ru']['themes__list-item-desc_9'] = 'Сети мозга: от&nbsp;нейрофотоники к&nbsp;когнитивным вычислениям';
$_['en']['themes__list-item-desc_9'] = 'Brain networks: from neurophotonics to cognitive computing';

/* expectations section */

$_['ru']['expectations__title'] = 'Что Вас ждет';
$_['en']['expectations__title'] = 'RESONS TO&nbsp;PARTICIPATE';

$_['ru']['expectations__block-item_text_1'] = 'Удивление от&nbsp;осознания скрытых возможностей';
$_['en']['expectations__block-item_text_1'] = 'Surprise at&nbsp;the realization of&nbsp;hidden possibilities';

$_['ru']['expectations__block-item_text_2'] = 'Интеллектуальное удовольствие';
$_['en']['expectations__block-item_text_2'] = 'Intellectual pleasure';

$_['ru']['expectations__block-item_text_3'] = 'Аудиовизуальное шоу на&nbsp;одной из&nbsp;лучших площадок Москвы';
$_['en']['expectations__block-item_text_3'] = 'Learning through inspiration and engagement';

$_['ru']['expectations__block-item_text_4'] = 'Игровые методики, упражнения и&nbsp;практические задания от&nbsp;спикеров';
$_['en']['expectations__block-item_text_4'] = 'Game techniques, exercises and practical tasks from speakers';

$_['ru']['expectations__block-item_text_5'] = 'Подборки простых, эффективных техник для самостоятельного применения';
$_['en']['expectations__block-item_text_5'] = 'A&nbsp;selection of&nbsp;simple, effective techniques for self-use';

$_['ru']['expectations__block-item_text_6'] = 'Острые дискуссии по&nbsp;ключевым проблемам и&nbsp;поиск путей их&nbsp;преодоления';
$_['en']['expectations__block-item_text_6'] = 'Sharp discussions on&nbsp;key issues and search for ways to&nbsp;overcome them';

// $_['ru']['expectations__block-item_text_7'] = 'Итоги Synergy Brain Game';
$_['en']['expectations__block-item_text_7'] = 'Life hacks to&nbsp;increase your productivity';

/* organizer section */

$_['ru']['organizer__title'] = 'Организатор';
$_['en']['organizer__title'] = 'Producer';

$_['ru']['organizer__block-item_text'] = 'Школа Бизнеса &laquo;Синергия&raquo; была основана в&nbsp;1988 году и&nbsp;стала первой бизнес-школой в&nbsp;России и&nbsp;СНГ. На&nbsp;базе школы проводится обучение по&nbsp;программам МВА и&nbsp;профессиональной переподготовки, семинары и&nbsp;тренинги ведущих российских и&nbsp;мировых экспертов.';
$_['en']['organizer__block-item_text'] = 'Synergy organize massive, top-notch business forums, workshops and seminars worldwide, providing our guests with most famous world experts experience in&nbsp;the fields of&nbsp;business, science, sport and art.';

$_['ru']['organizer__content-item_nmb_1'] = '30';
$_['en']['organizer__content-item_nmb_1'] = '1,000,000';

$_['ru']['organizer__content-item_nmb_2'] = '50&nbsp;000';
$_['en']['organizer__content-item_nmb_2'] = '26,000';

$_['ru']['organizer__content-item_nmb_3'] = '7';
$_['en']['organizer__content-item_nmb_3'] = '5,000';

$_['ru']['organizer__content-item_nmb_4'] = '';
$_['en']['organizer__content-item_nmb_4'] = '250';

$_['ru']['organizer__content-item_nmb_5'] = '';
$_['en']['organizer__content-item_nmb_5'] = '2';

$_['ru']['organizer__content-item_text_1'] = 'лет на&nbsp;рынке<br>бизнес-образования';
$_['en']['organizer__content-item_text_1'] = 'Participants of&nbsp;Synergy <br> events all over the world';

$_['ru']['organizer__content-item_text_2'] = 'успешных<br>выпускников';
$_['en']['organizer__content-item_text_2'] = 'Guests attended one <br> of&nbsp;our live forum';

$_['ru']['organizer__content-item_text_3'] = 'Престижных<br>аккредитаций MBA';
$_['en']['organizer__content-item_text_3'] = 'Business forums, seminars and workshops were held over the past 5&nbsp;years';

$_['ru']['organizer__content-item_text_4'] = '';
$_['en']['organizer__content-item_text_4'] = 'Speakers presented their <br> programs within one forum day';

$_['ru']['organizer__content-item_text_5'] = '';
$_['en']['organizer__content-item_text_5'] = 'Twice mentioned in&nbsp;the Guinness <br> Book of&nbsp;Records';

/* footer section */

$_['ru']['footer__copyright-link'] = 'Политика конфиденциальности';
$_['en']['footer__copyright-link'] = 'Privacy policy';

$_['ru']['footer__sydi'] = 'Разработка и&nbsp;продвижение &mdash;';
$_['en']['footer__sydi'] = 'Development and promotion';

$_['ru']['footer__offer'] = 'Публичная оферта';
$_['en']['footer__offer'] = 'Public offer';

$_['ru']['footer__offer_link'] = 'files/offer_new.pdf';
$_['en']['footer__offer_link'] = 'files/offer_en.pdf';

/* platform section */

$_['ru']['platform__title'] = '';
$_['en']['platform__title'] = 'Platform';

$_['ru']['platform__text'] = '';
$_['en']['platform__text'] = 'Once you get access to&nbsp;the platform, all Synergy Online Forum records are available for you as&nbsp;well as&nbsp;our previous offline events with participation of&nbsp;100+ speakers such as&nbsp;Arnold Schwarzenegger, Mike Tyson, Sir Richard Branson, Dr. Ichak Adizes, Nassim Taleb.';

$_['ru']['platform__text_mob'] = '';
$_['en']['platform__text_mob'] = 'Once you get access to&nbsp;the platform, all Synergy Online Forum records are available for you as&nbsp;well as&nbsp;our previous offline events with participation of&nbsp;100+ speakers such as&nbsp;Arnold Schwarzenegger, Mike Tyson, Sir Richard Branson, Dr. Ichak Adizes, Nassim Taleb.';

$_['ru']['platform__list-item-1'] = '';
$_['en']['platform__list-item-1'] = 'Synergy best events recorded Videos';

$_['ru']['platform__list-item-2'] = '';
$_['en']['platform__list-item-2'] = 'Online workshops and webinars';

$_['ru']['platform__list-item-3'] = '';
$_['en']['platform__list-item-3'] = 'Digital services for business';

$_['ru']['platform__list-item-4'] = '';
$_['en']['platform__list-item-4'] = 'News and analytics';

$_['ru']['platform__list-item-5'] = '';
$_['en']['platform__list-item-5'] = 'Expert-based recommendations';

$_['ru']['platform__list-item-6'] = '';
$_['en']['platform__list-item-6'] = 'Anti-crisis IT&nbsp;solution';

/* partners section */

$_['ru']['partners__title'] = 'Партнеры форума';
$_['en']['partners__title'] = 'Forum Partners';

$_['ru']['partners__infopartners'] = 'Информационные партнеры';
$_['en']['partners__infopartners'] = 'Information Partners';

$_['ru']['partners__casualpartners'] = 'Партнеры';
$_['en']['partners__casualpartners'] = 'Partners';

$_['ru']['partners__button'] = 'Стать партнером';
$_['en']['partners__button'] = 'become a&nbsp;partner';

/* speakers section */
$_['ru']['headliners__title'] = 'Хэдлайнеры';

$_['ru']['speakers__title'] = 'Спикеры';
$_['en']['speakers__title'] = 'Speakers';

$_['ru']['speakers__button'] = 'Подробнее';
$_['en']['speakers__button'] = 'More';


$_['ru']['speakers-n-kozlov-name'] = 'Николай Козлов';
$_['en']['speakers-n-kozlov-name'] = '';
$_['ru']['speakers-n-kozlov-info'] = 'Доктор психологических наук, профессор, основатель Центра &laquo;Синтон&raquo;, ректор Университета практической психологии';
$_['en']['speakers-kozlov-info'] = '';
$_['ru']['speakers-kozlov__popup-info'] = '';
$_['en']['speakers-kozlov__popup-info'] = '';

$_['ru']['speakers-hichenko-name'] = 'Анастасия Хищенко';
$_['en']['speakers-hichenko-name'] = '';
$_['ru']['speakers-hichenko-info'] = 'Федеральный тренер-психолог, разработчик образовательных программ, модератор, педагог первой категории, директор "Школы лидера" и "Форума личностного роста", Лауреат Всероссийских премий и конкурсов, автор реалити шоу «Дело по душе»';
$_['en']['speakers-hichenko-info'] = '';
$_['ru']['speakers-hichenko__popup-info'] = '
<li>Специалист развитии личного потенциала</li>
<li>Обучила более 15.000 человек. Несколько клиентов после личной работы стали миллионерами</li>
<li>Автор реалити-шоу “Дело по душе”</li>
';

$_['ru']['speakers-vasilev-name'] = 'Артем Васильев';
$_['en']['speakers-vasilev-name'] = '';
$_['ru']['speakers-vasilev-info'] = 'Биохакер, спортивный физиолог, основатель “Лаборатории биохакинга”, руководитель отдела лаборатории спортивной адаптологии (МФТИ)';
$_['en']['speakers-vasilev-info'] = '';
$_['ru']['speakers-vasilev__popup-info'] = '
<li>Генеральный директор Atmosfera Private Fitness</li>
<li>Один из пионеров развития и популяризации биохакинга в России</li>
<li>15 лет опыта оптимизации организма любителей и профессиональных спортсменов, включая призёров Олимпийских игр</li>
<li>Спикер Всероссийских форумов и конференций</li>
<li>Эксперт известных ТВ-программ, журналов и подкастов (РБК Тренды, Inc., Tatler, ТАСС, Euronews)</li>
';

$_['ru']['speakers-lebedev-name'] = 'Михаил Лебедев';
$_['en']['speakers-lebedev-name'] = '';
$_['ru']['speakers-lebedev-info'] = 'Профессор мехмата МГУ, главный научный сотрудник ИЭФБ РАН';
$_['en']['speakers-lebedev-info'] = '';

$_['ru']['speakers-filatov-name'] = 'Алексей Филатов';
$_['en']['speakers-filatov-name'] = '';
$_['ru']['speakers-filatov-info'] = 'Эксперт-профайлер международного уровня, эксперт в&nbsp;области детекции лжи, руководитель лаборатории цифрового профайлинга (Резидент Сколково)';
$_['en']['speakers-filatov-info'] = '';
$_['ru']['speakers-filatov__popup-info'] = '
<li>Автор и&nbsp;разработчик первого в&nbsp;мире модуля автоматизированного профайлинга ProfileCenter, создающий 12-ти страничный психологический портрет на&nbsp;основе оценки цифрового следа человека</li>
<li>Тренер НЛП и&nbsp;нейрокоучинга с&nbsp;правом международной сертификации тренеров</li>
<li>Лучший специалист в&nbsp;РФ по&nbsp;оценке лица,эмоций и&nbsp;предиктивной аналитики (по&nbsp;данным Европейской ассоциации предиктивной аналитики)</li>
<li>Базовое образование:<br> &mdash;&nbsp;Высшее медицинское, врач-психиатр (2008&nbsp;г) <br>&mdash;&nbsp;Высшее психологическое (2009)</li>
';
$_['en']['speakers-filatov__popup-info'] = '';

$_['ru']['speakers-chernonozhkin-name'] = 'Семён Черноножкин';
$_['en']['speakers-chernonozhkin-name'] = '';
$_['ru']['speakers-chernonozhkin-info'] = 'Тренер и&nbsp;партнер швейцарской компании Gustav K&auml;ser Training International, ex-владелец проекта Мозгобойня';
$_['en']['speakers-chernonozhkin-info'] = '';
$_['ru']['speakers-chernonozhkin__popup-info'] = '';
$_['en']['speakers-chernonozhkin__popup-info'] = '';

$_['ru']['speakers-goncharov-name'] = 'Геннадий Гончаров';
$_['en']['speakers-goncharov-name'] = '';
$_['ru']['speakers-goncharov-info'] = 'Известный гипнотизер мирового класса, основатель Московской школы гипноза, автор книг по&nbsp;гипнозу и&nbsp;самогипнозу';
$_['en']['speakers-goncharov-info'] = '';
$_['ru']['speakers-goncharov__popup-info'] = '
<li>Чемпион мира по&nbsp;гипнозу (1992г)</li>
<li>Эксперт телепередач на&nbsp;каналах Россия&nbsp;1,Первый и&nbsp;др.</li>
';
$_['en']['speakers-goncharov__popup-info'] = '';

$_['ru']['speakers-spirande-name'] = 'Марина Спиранде';
$_['en']['speakers-spirande-name'] = '';
$_['ru']['speakers-spirande-info'] = 'Клинический психолог-психосоматолог, регрессолог, специалист по&nbsp;управлению стрессом и&nbsp;активному долголетию, расстановщик, лайфкоуч, спикер ТВ-проектов по&nbsp;теме здоровья и&nbsp;здорового образа жизни, член Профессиональной Психологической Лиги';
$_['en']['speakers-spirande-info'] = '';
$_['ru']['speakers-spirande__popup-info'] = '
<li>Психотерапевт-психосоматолог-регрессолог</li>
<li>Расстановщик</li>
<li>Лайфкоуч</li>
<li>Wellness-эксперт</li>
<li>Бизнес-тренер</li>
<li>Лектор и&nbsp;преподаватель со&nbsp;стажем 20&nbsp;лет</li>
<li>Консультативный член Профессиональной Психологической Лиги</li>
<li>Ведущий трансформационных психологических игр</li>
<li>Спикер ТВ-проектов по&nbsp;темам здоровья, здорового образа жизни</li>
<li>Приглашенный преподаватель БШ&nbsp;Сколково</li>
';
$_['en']['speakers-spirande__popup-info'] = '';

$_['ru']['speakers-litvinov-name'] = 'Роман Литвинов';
$_['en']['speakers-litvinov-name'] = '';
$_['ru']['speakers-litvinov-info'] = 'Клинический психолог-гипнотерапевт, бизнес-тренер, член Ассоциации когнитивно-поведенческой психотерапии, член Профессиональной Психологической Лиги';
$_['en']['speakers-litvinov-info'] = '';
$_['ru']['speakers-litvinov__popup-info'] = '
<li>Лайф-коуч</li>
<li>Тренер психологических тренингов и&nbsp;корпоративных Wellness-программ</li>
<li>Ведущий трансформационных психологических игр</li>
';
$_['en']['speakers-litvinov__popup-info'] = '';

$_['ru']['speakers-borisova-name'] = 'Светлана Борисова';
$_['en']['speakers-borisova-name'] = '';
$_['ru']['speakers-borisova-info'] = 'Бизнес-консультант, психолог, нейрокоуч, эксперт в&nbsp;области психологии бизнеса и&nbsp;карьеры, автор и&nbsp;ведущая обучающих программ по&nbsp;психологии и&nbsp;коучингу, управленческий опыт в&nbsp;крупнейших международных финансовых корпорациях (ВТБ Капитал, Росбанк, Deutsche bank, Societe Generale)';
$_['en']['speakers-borisova-info'] = '';
$_['ru']['speakers-borisova__popup-info'] = '
<li>Профессиональный сертифицированный мастер коуч (ICI, ICU)</li>
<li>Сертификация в&nbsp;Британской ассоциации коучинга (AC)</li>
<li>Дополнительное образование в&nbsp;Немецкой школе коучинга и&nbsp;медиации</li>
<li>Спикер mbm.mos Департамента Предпринимательства и&nbsp;Инновационного развития города Москвы</li>
<li>Наставник коучей и&nbsp;ведущая обучающих мероприятий Ассоциации</li>
<li>Русскоязычных Коучей (АРК)</li>
<li>Автор тренингов и&nbsp;мастер классов в&nbsp;области психологии, коучинга, управления персоналом</li>
<li>Опыт работы в&nbsp;крупном корпоративном финансовом секторе около 20&nbsp;лет, в&nbsp;том числе 12&nbsp;лет на&nbsp;руководящих позициях (ВТБ Капитал, Росбанк, Deutsche bank, Societe Generale)</li>
<li>Частная практика с&nbsp;2017&nbsp;года, коучинг и&nbsp;консультирование более 2000 часов</li>
';
$_['en']['speakers-borisova__popup-info'] = '';

$_['ru']['speakers-venerina-name'] = 'Яна Венерина';
$_['en']['speakers-venerina-name'] = '';
$_['ru']['speakers-venerina-info'] = 'Ассистент кафедры нормальной физиологии ФГАОУ ВО Первый МГМУ им.&nbsp;И.М.&nbsp;Сеченова Минздрава России';
$_['en']['speakers-venerina-info'] = '';
$_['ru']['speakers-venerina__popup-info'] = '
<li>Кандидат медицинских наук</li>
<li>Победитель конкурса &laquo;Лига Лекторов 2022&raquo;</li>
<li>Победитель конкурса &laquo;Лидеры России 2021&raquo;</li>
';
$_['en']['speakers-venerina__popup-info'] = '';

$_['ru']['speakers-starchenko-name'] = 'Мария Старченко';
$_['en']['speakers-starchenko-name'] = '';
$_['ru']['speakers-starchenko-info'] = 'Кандидат психологических наук, доктор биологических наук, старший научный сотрудник Института мозга человека&nbsp;им. Н.П. Бехтеревой Российской академии наук (ИМЧ РАН), Санкт-Петербург';
$_['en']['speakers-starchenko-info'] = '';
$_['ru']['speakers-starchenko__popup-info'] = '
<li>Научный консультант Мемориального кабинета академика Н.П. Бехтеревой в&nbsp;ИМЧ РАН; преподаватель лекционного курса &laquo;Психология и&nbsp;педагогика&raquo; для театроведов, режиссеров, актеров и&nbsp;аспирантов в&nbsp;Российском государственном институте сценических искусств.</li>
<li>Ученица выдающегося нейрофизиолога академика Натальи Петровны Бехтеревой (1924&nbsp;&mdash; 2008), работала под ее&nbsp;личным руководством с&nbsp;1998 по&nbsp;2008&nbsp;год.</li>
<li>Более 20&nbsp;лет занимается научным исследованием психофизиологии творчества и&nbsp;является специалистом в&nbsp;области изучения мозговых механизмов творческого мышления, различий в&nbsp;мозговом обеспечении творческой деятельности у&nbsp;высоко- и&nbsp;низкокреативных людей, а&nbsp;также у&nbsp;лиц творческих профессий; методов развития и&nbsp;оптимизации творческого потенциала личности; разработки тренингов креативности. Автор книги &laquo;Тайны творческого мозга&raquo; (2022)</li>
';
$_['en']['speakers-starchenko__popup-info'] = '';

$_['ru']['speakers-radaeva-name'] = 'Ольга Радаева';
$_['en']['speakers-radaeva-name'] = '';
$_['ru']['speakers-radaeva-info'] = 'Заведующий кафедрой иммунологии, микробиологии и&nbsp;вирусологии с&nbsp;курсом клинической иммунологии и&nbsp;аллергологии, Медицинский институт ФГБОУ ВО&nbsp;МГУ им. Н.&nbsp;П.&nbsp;Огарева';
$_['en']['speakers-radaeva-info'] = '';
$_['ru']['speakers-radaeva__popup-info'] = '
<li>Победитель &laquo;Лиги Лекторов&raquo; всероссийского общества &laquo;Знание&raquo; (2&nbsp;сезон)</li>
<li>Автор международных публикаций</li>
<li>Специалист в&nbsp;области фундаментальной и&nbsp;клинической иммунологии, в&nbsp;частности в&nbsp;направлении &laquo;Нейроиммунология&raquo;</li>
<li>Создатель онлайн клуба &laquo;Иммунолог рядом&raquo;</li>
<li>Популяризатор научного подхода в&nbsp;формировании образа жизни человека, настроенного на&nbsp;успех</li>
<li>Учитывая современные научные данные уверена, что вектор &laquo;иммунорегуляторные пептиды-эффективность работы мозга&nbsp;&mdash; счастье&raquo; можно регулировать через доступные механизмы ассоциированные с&nbsp;иммунными функциями мышечной и&nbsp;жировой</li>
';
$_['en']['speakers-radaeva__popup-info'] = '';

$_['ru']['speakers-kuyava-name'] = 'Олег Куява';
$_['en']['speakers-kuyava-name'] = '';
$_['ru']['speakers-kuyava-info'] = 'Исследователь феномена &laquo;Управление и&nbsp;контроль снов&raquo;, участник научного сообщества OOBE Research Center';
$_['en']['speakers-kuyava-info'] = '';
$_['ru']['speakers-kuyava__popup-info'] = '
<li>Ведущий ежегодных международных съездов практиков осознанных сновидений</li>
<li>Основатель проекта &laquo;Другая реальность&raquo;</li>
<li>Автор книги &laquo;Фаза&raquo;&nbsp;&mdash; хит продаж на&nbsp;Литрес 2019 год</li>
<li>Участник радио и&nbsp;телепередач, в&nbsp;том числе выступление на&nbsp;Нью-Йоркском телеканале и&nbsp;Рен&nbsp;ТВ</li>
';
$_['en']['speakers-kuyava__popup-info'] = '';


/*** OLD ***/

$_['ru']['speakers-keho-name'] = 'Джон Кехо';
$_['en']['speakers-keho-name'] = '';
$_['ru']['speakers-keho-info'] = 'Преподаватель, писатель, активный и&nbsp;сознательный член общества. Автор книги &laquo;Сила ума&raquo;, которая стала мировым бестселлером и&nbsp;переведена на&nbsp;многие языки.';
$_['en']['speakers-keho-info'] = '';
$_['ru']['speakers-keho__popup-info'] = '';
$_['en']['speakers-keho__popup-info'] = '';


$_['ru']['speakers-labkovskij-name'] = 'Михаил Лабковский';
$_['en']['speakers-labkovskij-name'] = '';
$_['ru']['speakers-labkovskij-info'] = 'Российский психолог, писатель, юрист, телеведущий и&nbsp;радиоведущий.';
$_['en']['speakers-labkovskij-info'] = '';
$_['ru']['speakers-labkovskij__popup-info'] = '';
$_['en']['speakers-labkovskij__popup-info'] = '';


$_['ru']['speakers-ardasenov-name'] = 'Сергей Ардасенов';
$_['en']['speakers-ardasenov-name'] = '';
$_['ru']['speakers-ardasenov-info'] = 'Основатель международной академии Анимара, Исследователь методик трансовых состояний мозга и&nbsp;влияния звука на&nbsp;организм.';
$_['en']['speakers-ardasenov-info'] = '';
$_['ru']['speakers-ardasenov__popup-info'] = '';
$_['en']['speakers-ardasenov__popup-info'] = '';


$_['ru']['speakers-repina-name'] = 'Репина Наталья Сергеевна';
$_['en']['speakers-repina-name'] = '';
$_['ru']['speakers-repina-info'] = 'Основатель Института Топологии Сознания. Ведущая авторской программы на Пермском телевидении “Домашний психолог”. Автор программ самопознания “Предназначение”, “Женственность”';
$_['en']['speakers-repina-info'] = '';
$_['ru']['speakers-repina__popup-info'] = '';
$_['en']['speakers-repina__popup-info'] = '';


$_['ru']['speakers-loshmanova-name'] = 'Лошманова Тамара Ильинична';
$_['en']['speakers-loshmanova-name'] = '';
$_['ru']['speakers-loshmanova-info'] = 'Директор Института Современных Технологий Топологии Сознания. Автор социальных проектов. Разработчик методов Топологии сознания. Участник исследований в области нейропсихологии';
$_['en']['speakers-loshmanova-info'] = '';
$_['ru']['speakers-loshmanova__popup-info'] = '';
$_['en']['speakers-loshmanova__popup-info'] = '';


$_['ru']['speakers-trunov-name'] = 'Александр Трунов';
$_['en']['speakers-trunov-name'] = '';
$_['ru']['speakers-trunov-info'] = 'Разработчик систем нейроимитации и&nbsp;обучения интуитивной музыке.';
$_['en']['speakers-trunov-info'] = '';
$_['ru']['speakers-trunov__popup-info'] = '';
$_['en']['speakers-trunov__popup-info'] = '';


$_['ru']['speakers-dispenza-name'] = 'Джо Диспенза';
$_['en']['speakers-dispenza-name'] = 'Joe Dispenza';
$_['ru']['speakers-dispenza-info'] = 'Исследователь, лектор, корпоративный консультант, писатель';
$_['en']['speakers-dispenza-info'] = 'Researcher, lecturer, corporate consultant, writer';
$_['ru']['speakers-dispenza__popup-info'] = '';
$_['en']['speakers-dispenza__popup-info'] = '';


$_['ru']['speakers-rouch-name'] = 'Майкл Роуч';
$_['en']['speakers-rouch-name'] = 'Michael Roach';
$_['ru']['speakers-rouch-info'] = 'Монах, заработавший миллиардное состояние';
$_['en']['speakers-rouch-info'] = 'The monk who made a billion-dollar fortune';
$_['ru']['speakers-rouch__popup-info'] = '';
$_['en']['speakers-rouch__popup-info'] = '';


$_['ru']['speakers-yagodkin-name'] = 'Николай Ягодкин';
$_['en']['speakers-yagodkin-name'] = 'Nikolai Yagodkin';
$_['ru']['speakers-yagodkin-info'] = 'Эксперт по&nbsp;методикам развития когнитивных способностей. Основатель Центра образовательных технологий Advance';
$_['en']['speakers-yagodkin-info'] = 'Expert in&nbsp;methods of&nbsp;developing cognitive abilities. Founder of&nbsp;the Center for Educational Technologies Advance';
$_['ru']['speakers-yagodkin__popup-info'] = '';
$_['en']['speakers-yagodkin__popup-info'] = '';


$_['ru']['speakers-kazanceva-name'] = 'Ася Казанцева';
$_['en']['speakers-kazanceva-name'] = 'Asya Kazantseva';
$_['ru']['speakers-kazanceva-info'] = 'Научный журналист, популяризатор большой науки и&nbsp;лауреат премии &laquo;Просветитель&raquo;. Автор книги &laquo;Кто&nbsp;бы мог подумать! Как мозг заставляет нас делать глупости&raquo;';
$_['en']['speakers-kazanceva-info'] = 'Scientific journalist, popularizer of&nbsp;big science and prize winner &laquo;The Educator&raquo;. Author of&nbsp;the book &laquo;Who would have thought! How the brain makes&nbsp;us do&nbsp;stupid things&raquo;';
$_['ru']['speakers-kazanceva__popup-info'] = '';
$_['en']['speakers-kazanceva__popup-info'] = '';


$_['ru']['speakers-bukreev-name'] = 'Никита Букреев';
$_['en']['speakers-bukreev-name'] = 'Nikita Bukreev';
$_['ru']['speakers-bukreev-info'] = 'Генеральный директор лаборатории сенсорного нейромаркетинга ООО &laquo;СЕНСОРИЛАБ&raquo;<br />
Основатель научного фестиваля &laquo;НА&nbsp;ГРАНИ НАУКИ&raquo;<br />
Исследователь в&nbsp;области мультисенсорного восприятия, социальной психологии обоняния и&nbsp;потребительских предпочтений.';
$_['en']['speakers-bukreev-info'] = 'General Director of&nbsp;the Laboratory of&nbsp;Sensory Neuromarketing LLC &laquo;SENSORILAB&raquo;<br />
Founder of&nbsp;the science festival &laquo;ON&nbsp;THE EDGE OF&nbsp;SCIENCE&raquo;<br />
Researcher in&nbsp;the fields of&nbsp;multisensory perception, social psychology of&nbsp;smell, and consumer preferences.';
$_['ru']['speakers-bukreev__popup-info'] = '';
$_['en']['speakers-bukreev__popup-info'] = '';

$_['ru']['speakers-lebedev-name'] = 'Михаил Лебедев';
$_['en']['speakers-lebedev-name'] = '';
$_['ru']['speakers-lebedev-info'] = 'Профессор Центра нейробиологии и нейрореабилитации имени Владимира Зельмана, Сколтех, Москва';
$_['en']['speakers-lebedev-info'] = '';
$_['ru']['speakers-lebedev__popup-info'] = '';
$_['en']['speakers-lebedev__popup-info'] = '';

$_['ru']['speakers-terehova-name'] = 'Терехова Юлия';
$_['en']['speakers-terehova-name'] = '';
$_['ru']['speakers-terehova-info'] = 'Профессиональный психолог, гештальт-терапевт, тренер Московского института гештальта и психодрамы.<br />
Повышение квалификации в программах Франции (Institut Français de Gestalt-Thérapie) и США (Gestalt Associates Training Los Angeles).';
$_['en']['speakers-terehova-info'] = '';
$_['ru']['speakers-terehova__popup-info'] = '';
$_['en']['speakers-terehova__popup-info'] = '';

$_['ru']['speakers-ishenko-name'] = 'ЭVA Ищенко';
$_['en']['speakers-ishenko-name'] = '';
$_['ru']['speakers-ishenko-info'] = 'Президент Ассоциации Атмалогии, основатель и&nbsp;ведущий специалист Международной Академии Атмалогии, доктор философии. Автор Атмалогии&nbsp;&mdash; прикладной области знаний о&nbsp;структуре человека';
$_['en']['speakers-ishenko-info'] = '';
$_['ru']['speakers-ishenko__popup-info'] = '';
$_['en']['speakers-ishenko__popup-info'] = '';

$_['ru']['speakers-chernigova-name'] = 'Чернигова Анна';
$_['en']['speakers-chernigova-name'] = '';
$_['ru']['speakers-chernigova-info'] = 'Руководитель Международной Академии Репарационной Психологии и Терапии <br>Кандидат наук <br>Эксперт в СМИ <br>Автор книги «Код Трансформаций»';
$_['en']['speakers-chernigova-info'] = '';
$_['ru']['speakers-chernigova__popup-info'] = '';
$_['en']['speakers-chernigova__popup-info'] = '';

$_['ru']['speakers-panel-name'] = 'Панель спикеров продолжает формироваться';
$_['en']['speakers-panel-name'] = 'The speaker panel continues to form';
$_['ru']['speakers-panel-info'] = '';
$_['en']['speakers-panel-info'] = '';
$_['ru']['speakers-panel__popup-info'] = '';
$_['en']['speakers-panel__popup-info'] = '';

$_['ru']['speakers-sitnikov-name'] = 'Алексей Ситников';
$_['en']['speakers-sitnikov-name'] = '';
$_['ru']['speakers-sitnikov-info'] = 'Ведущий международный специалист в&nbsp;области VIP-коучинга, профессор';
$_['en']['speakers-sitnikov-info'] = '';
$_['ru']['speakers-sitnikov__popup-info'] = '';
$_['en']['speakers-sitnikov__popup-info'] = '';

$_['ru']['speakers-kozlov-name'] = 'Николай Козлов';
$_['en']['speakers-kozlov-name'] = '';
$_['ru']['speakers-kozlov-info'] = 'Основатель Тренинг-Центра «Синтон», ректор Университета практической психологии, советский российский психолог, публицист, прозаик, преподаватель, популяризатор практической психологии. Автор научно-популярных книг по психологии';
$_['en']['speakers-kozlov-info'] = '';
$_['ru']['speakers-kozlov__popup-info'] = '';
$_['en']['speakers-kozlov__popup-info'] = '';

$_['ru']['speakers-vinogrodsky-name'] = 'Бронислав Виногродский';
$_['en']['speakers-vinogrodsky-name'] = '';
$_['ru']['speakers-vinogrodsky-info'] = 'Учёный, китаевед, исследователь истории и&nbsp;эволюции сознания в&nbsp;современных контекстах, писатель, переводчик, общественный деятель';
$_['en']['speakers-vinogrodsky-info'] = '';
$_['ru']['speakers-vinogrodsky__popup-info'] = '';
$_['en']['speakers-vinogrodsky__popup-info'] = '';

$_['ru']['speakers-poluektov-name'] = 'Полуэктов Михаил Гурьевич';
$_['en']['speakers-poluektov-name'] = '';
$_['ru']['speakers-poluektov-info'] = 'Врач-невролог, кандидат медицинских наук, доцент, доцент кафедры нервных болезней и&nbsp;нейрохирургии, заведующий отделением медицины сна Сеченовского Университета, Москва';
$_['en']['speakers-poluektov-info'] = '';
$_['ru']['speakers-poluektov__popup-info'] = '';
$_['en']['speakers-poluektov__popup-info'] = '';

$_['ru']['speakers-hramov-name'] = 'Храмов Александр Евгеньевич';
$_['en']['speakers-hramov-name'] = '';
$_['ru']['speakers-hramov-info'] = 'Доктор физико-математических наук, профессор, руководитель лаборатории нейронауки и&nbsp;когнитивных технологий, университета Иннополис, главный научный сотрудник Балтийского центра искусственного интеллекта и&nbsp;нейротехнологий Балтийского федерального университета имени И.&nbsp;Канта';
$_['en']['speakers-hramov-info'] = '';
$_['ru']['speakers-hramov__popup-info'] = '';
$_['en']['speakers-hramov__popup-info'] = '';

$_['ru']['speakers-ivanov-name'] = 'Иванов Сергей Николаевич';
$_['en']['speakers-ivanov-name'] = '';
$_['ru']['speakers-ivanov-info'] = 'Совладелец, член совета директоров и&nbsp;исполнительный директор ГК&nbsp;&laquo;Эфко&raquo;, одного из&nbsp;крупнейших производителей продуктов питания в&nbsp;России с&nbsp;оборотом 3&nbsp;млрд долларов';
$_['en']['speakers-ivanov-info'] = '';
$_['ru']['speakers-ivanov__popup-info'] = '';
$_['en']['speakers-ivanov__popup-info'] = '';

// $_['ru']['speakers-ivanova-name'] = 'Иванова Зоя Алексеевна';
// $_['en']['speakers-ivanova-name'] = '';
// $_['ru']['speakers-ivanova-info'] = 'Кандидат экономических наук (мировая экономика), консультант, бизнес-тренер, коуч руководителей и&nbsp;собственников бизнеса с&nbsp;более чем 30-летним опытом';
// $_['en']['speakers-ivanova-info'] = '';
// $_['ru']['speakers-ivanova__popup-info'] = '';
// $_['en']['speakers-ivanova__popup-info'] = '';

$_['ru']['speakers-kaplan-name'] = 'Каплан Александр Яковлевич';
$_['en']['speakers-kaplan-name'] = '';
$_['ru']['speakers-kaplan-info'] = 'Психофизиолог, доктор биологических наук, профессор и&nbsp;руководитель группы изучения мозга человека';
$_['en']['speakers-kaplan-info'] = '';
$_['ru']['speakers-kaplan__popup-info'] = '';
$_['en']['speakers-kaplan__popup-info'] = '';

// $_['ru']['speakers-kuava-name'] = 'Куява Олег Андреевич';
// $_['en']['speakers-kuava-name'] = '';
// $_['ru']['speakers-kuava-info'] = 'Исследователь феномена &laquo;Управление и&nbsp;контроль снов&raquo;, участник научного сообщества OOBE Research Center, основатель проекта &laquo;Другая реальность&raquo;';
// $_['en']['speakers-kuava-info'] = '';
// $_['ru']['speakers-kuava__popup-info'] = '';
// $_['en']['speakers-kuava__popup-info'] = '';

$_['ru']['speakers-safronov-name'] = 'Сафронов Андрей Григорьевич';
$_['en']['speakers-safronov-name'] = '';
$_['ru']['speakers-safronov-info'] = 'Эксперт по&nbsp;развитию памяти, тренер, участник&nbsp;ТВ проектов, автор книги &laquo;Суперпамять за&nbsp;7&nbsp;шагов&raquo;';
$_['en']['speakers-safronov-info'] = '';
$_['ru']['speakers-safronov__popup-info'] = '';
$_['en']['speakers-safronov__popup-info'] = '';

$_['ru']['speakers-svyatoslavskiy-name'] = 'Святославский Ярослав Александрович';
$_['en']['speakers-svyatoslavskiy-name'] = '';
$_['ru']['speakers-svyatoslavskiy-info'] = 'Партнер Neuropartner.ru, Спортсмен параолимпийской сборной России по&nbsp;велоспорту, 5xIRONMAN';
$_['en']['speakers-svyatoslavskiy-info'] = '';
$_['ru']['speakers-svyatoslavskiy__popup-info'] = '';
$_['en']['speakers-svyatoslavskiy__popup-info'] = '';

$_['ru']['speakers-musienko-name'] = 'Мусиенко Павел Евгеньевич';
$_['en']['speakers-musienko-name'] = '';
$_['ru']['speakers-musienko-info'] = 'Основатель Neuropartner.ru, профессор, доктор медицинских наук, заведующий Лабораторией нейропротезов Института трансляционной биомедицины СПбГУ';
$_['en']['speakers-musienko-info'] = '';
$_['ru']['speakers-musienko__popup-info'] = '';
$_['en']['speakers-musienko__popup-info'] = '';

// $_['ru']['speakers-travkina-name'] = 'Травкина Анастасия';
// $_['en']['speakers-travkina-name'] = '';
// $_['ru']['speakers-travkina-info'] = 'Научная журналистка, автор книги о мозге «Homo Mutabilis», редактор журнала «Нож», ведущая телеграм-канала об осознанности «Настигло»';
// $_['en']['speakers-travkina-info'] = '';
// $_['ru']['speakers-travkina__popup-info'] = '';
// $_['en']['speakers-travkina__popup-info'] = '';

// $_['ru']['speakers-kislov-name'] = 'Кислов Андрей Александрович';
// $_['en']['speakers-kislov-name'] = '';
// $_['ru']['speakers-kislov-info'] = 'CEO/Founder in&nbsp;FasTest&nbsp;| BSc in&nbsp;Cognitive Psychology, MSc in&nbsp;Cognitive Neuroscience, PhD student in&nbsp;Cognitive Neuroscience (ICN HSE)';
// $_['en']['speakers-kislov-info'] = '';
// $_['ru']['speakers-kislov__popup-info'] = '';
// $_['en']['speakers-kislov__popup-info'] = '';

$_['ru']['speakers-salima-name'] = 'Салима Саиди';
$_['en']['speakers-salima-name'] = '';
$_['ru']['speakers-salima-info'] = 'Клинический психолог, нейропсихолог. Автор обучающих программ, специалист в&nbsp;области коммуникации и&nbsp;эмоционального интеллекта';
$_['en']['speakers-salima-info'] = '';
$_['ru']['speakers-salima__popup-info'] = '';
$_['en']['speakers-salima__popup-info'] = '';

$_['ru']['speakers-ryzancev-name'] = 'Рязанцев Александр';
$_['en']['speakers-ryzancev-name'] = '';
$_['ru']['speakers-ryzancev-info'] = 'Практический психолог с 30-летним опытом работы, профессор в области психологии Международного Университета Фундаментального обучения (Оксфордская образовательная сеть)';
$_['en']['speakers-ryzancev-info'] = '';
$_['ru']['speakers-ryzancev__popup-info'] = '';
$_['en']['speakers-ryzancev__popup-info'] = '';

$_['ru']['speakers-poputarovskaya-name'] = 'Попутаровская Влада';
$_['en']['speakers-poputarovskaya-name'] = '';
$_['ru']['speakers-poputarovskaya-info'] = 'Собственник Центр &laquo;Психология Нового Поколения&raquo;, более 30&nbsp;авторских курсов и&nbsp;интенсивов по&nbsp;психологии разработано и&nbsp;создано за&nbsp;3&nbsp;года, психолог-эксперт реалити-шоу на&nbsp;телеканале ТНТ &laquo;Спаси свою любовь&raquo; и&nbsp;YouTube-шоу трансформация личности &laquo;INVERSIONPSY&raquo;';
$_['en']['speakers-poputarovskaya-info'] = '';
$_['ru']['speakers-poputarovskaya__popup-info'] = '';
$_['en']['speakers-poputarovskaya__popup-info'] = '';

$_['ru']['speakers-svet-name'] = 'Свет Мария';
$_['en']['speakers-svet-name'] = '';
$_['ru']['speakers-svet-info'] = 'Магистр прикладной нейрофизиологии (Королевский колледж Лондона). Управляющий холдингом Veles Management&nbsp;AG (Швейцария). Преподаватель нейрофизиологии мануальных воздействий';
$_['en']['speakers-svet-info'] = '';
$_['ru']['speakers-svet__popup-info'] = '';
$_['en']['speakers-svet__popup-info'] = '';

$_['ru']['speakers-efremova-name'] = 'Евгения Ефремова';
$_['en']['speakers-efremova-name'] = '';
$_['ru']['speakers-efremova-info'] = 'Ed.M Специалист в области реализации потенциала человека Магистр Нейронауки в Образовании Harvard University (США). Научный сотрудник Лаборатории мозга и нейрокогнитивных исследований. Академический директор и сооснователь образовательной платформы GlobalAmbasador.ru';
$_['en']['speakers-efremova-info'] = '';
$_['ru']['speakers-efremova__popup-info'] = '';
$_['en']['speakers-efremova__popup-info'] = '';

$_['ru']['speakers-koloskov-name'] = 'Станислав Колосков ';
$_['en']['speakers-koloskov-name'] = '';
$_['ru']['speakers-koloskov-info'] = 'Руководитель отдела маркетинга TanukiFamily. Руководил маркетингом сетей «Подружка», Sunlight, Valtera, «Техносила», Alba, разработал программу лояльности Ostin, запускал бренды DELTA Security, UWatches, TVOЯ Pizza Delivery занимал должность директора по цифровой трансформации и омниканальности «Рив Гош»';
$_['en']['speakers-koloskov-info'] = '';
$_['ru']['speakers-koloskov__popup-info'] = '';
$_['en']['speakers-koloskov__popup-info'] = '';

$_['ru']['speakers-bibigul-name'] = 'Кушалиева Бибигуль Сайфиденовна';
$_['en']['speakers-bibigul-name'] = '';
$_['ru']['speakers-bibigul-info'] = 'Нейропсихолог, кинезиолог, тренер по развитию памяти и скорочтения, коуч, специалист по гимнастике мозга, автор пособия по развитию интеллекта «Spaсти мозг: как за 21 день улучшить работу своего мозга». Основатель образовательного центра SmartRoom';
$_['en']['speakers-bibigul-info'] = '';
$_['ru']['speakers-bibigul__popup-info'] = '';
$_['en']['speakers-bibigul__popup-info'] = '';

$_['ru']['speakers-dubinin-name'] = 'Вячеслав Дубынин';
$_['en']['speakers-dubinin-name'] = '';
$_['ru']['speakers-dubinin-info'] = 'Специалист в области физиологии мозга, доктор биологических наук, профессор кафедры физиологии человека и животных биологического факультета МГУ им. М. В. Ломоносова';
$_['en']['speakers-dubinin-info'] = '';
$_['ru']['speakers-dubinin__popup-info'] = '';
$_['en']['speakers-dubinin__popup-info'] = '';

$_['ru']['speakers-rovshan-name'] = 'Ровшан Энвер Аскеров';
$_['en']['speakers-rovshan-name'] = '';
$_['ru']['speakers-rovshan-info'] = 'Российский журналист, участник телевизионной игры &laquo;Что? Где? Когда?&raquo;, бывший спортивный обозреватель газеты &laquo;Спорт-Экспресс&raquo;. Пиар-директор журнала &laquo;Баку&raquo;';
$_['en']['speakers-rovshan-info'] = '';
$_['ru']['speakers-rovshan__popup-info'] = '';
$_['en']['speakers-rovshan__popup-info'] = '';

$_['ru']['speakers-metelitsa-name'] = 'Метелица Никита Борисович';
$_['en']['speakers-metelitsa-name'] = '';
$_['ru']['speakers-metelitsa-info'] = 'Основатель &laquo;Российского Института Биохакинга и&nbsp;Здоровья&raquo;. Интегральный коуч-терапевт. Нутрициолог. Мастер медитации и&nbsp;дыхательных практик.';
$_['en']['speakers-metelitsa-info'] = '';
$_['ru']['speakers-metelitsa__popup-info'] = '';
$_['en']['speakers-metelitsa__popup-info'] = '';

$_['ru']['speakers-galkina-name'] = 'Наталия Галкина';
$_['en']['speakers-galkina-name'] = '';
$_['ru']['speakers-galkina-info'] = 'Генеральный директор АО "Нейротренд",  ООО "НейроЧат". Член рабочей группы по разработке и реализации дорожной карты "Нейронет" Национальной технологической инициативы. Руководитель направления Нейрокоммуникации и маркетинг Дорожной карты Нейронет НТИ';
$_['en']['speakers-galkina-info'] = '';
$_['ru']['speakers-galkina__popup-info'] = '';
$_['en']['speakers-galkina__popup-info'] = '';

$_['ru']['speakers-senderov-name'] = 'Дмитрий Сендеров';
$_['en']['speakers-senderov-name'] = '';
$_['ru']['speakers-senderov-info'] = 'Управляющий партнёр группы STRONG';
$_['en']['speakers-senderov-info'] = '';
$_['ru']['speakers-senderov__popup-info'] = '';
$_['en']['speakers-senderov__popup-info'] = '';

$_['ru']['speakers-slobod-name'] = 'Ярослав Слободской-Плюснин';
$_['en']['speakers-slobod-name'] = '';
$_['ru']['speakers-slobod-info'] = 'СЕО компании НЕЙРОН, кандидат наук по Психофизиологии, соавтор более 20 научных работ в топовых международных изданиях, автор более 15 систем оценки персонала';
$_['en']['speakers-slobod-info'] = '';
$_['ru']['speakers-slobod__popup-info'] = '';
$_['en']['speakers-slobod__popup-info'] = '';

$_['ru']['speakers-doronin-name'] = 'Доронин Павел';
$_['en']['speakers-doronin-name'] = '';
$_['ru']['speakers-doronin-info'] = 'Управляющий директор интегратора технологий искусственного интеллекта AI Today и основатель бизнес-ассоциации ИИ-разработчиков AI Community';
$_['en']['speakers-doronin-info'] = '';
$_['ru']['speakers-doronin__popup-info'] = '';
$_['en']['speakers-doronin__popup-info'] = '';

$_['ru']['speakers-krutilin-name'] = 'Крутилин Алексей';
$_['en']['speakers-krutilin-name'] = '';
$_['ru']['speakers-krutilin-info'] = 'Бизнес-профайлер, предприниматель, эксперт федеральных телеканалов по профайлингу, генеральный директор и владелец корпоративного университета «МОСПРОФАЙЛЕР»';
$_['en']['speakers-krutilin-info'] = '';
$_['ru']['speakers-krutilin__popup-info'] = '';
$_['en']['speakers-krutilin__popup-info'] = '';

$_['ru']['speakers-lubin-name'] = 'Любин Кирилл';
$_['en']['speakers-lubin-name'] = '';
$_['ru']['speakers-lubin-info'] = 'Эксперт по&nbsp;личной эффективности и&nbsp;управлению стрессом. Коуч PCC&nbsp;ICF первых лиц бизнеса. Спикер TEDx';
$_['en']['speakers-lubin-info'] = '';
$_['ru']['speakers-lubin__popup-info'] = '';
$_['en']['speakers-lubin__popup-info'] = '';


$_['ru']['speakers-eagleman-name'] = 'Дэвид Иглмен';
$_['en']['speakers-eagleman-name'] = 'David Eagleman';
$_['ru']['speakers-eagleman-info'] = 'Нейробиолог, профессор, спикер TED, генеральный директор NeoSensory';
$_['en']['speakers-eagleman-info'] = 'Neuroscientist, Professor, TED speaker, CEO of&nbsp;NeoSensory';
$_['ru']['speakers-eagleman__popup-info'] = 'Известный американский нейробиолог, автор мировых бестселлеров, создатель и&nbsp;ведущий международного телесериала &laquo;Мозг&raquo;. Нейробиолог, профессор, генеральный директор NeoSensory.';
$_['en']['speakers-eagleman__popup-info'] = 'A&nbsp;well-known American neuroscientist, author of&nbsp;world bestsellers, founder and host of&nbsp;the international&nbsp;TV series &laquo;The Brain with David Eagleman&raquo;. Neuroscientist, Professor, TED speaker, CEO of&nbsp;NeoSensory';

$_['ru']['speakers-breuning-name'] = 'Лоретта Бройнинг';
$_['en']['speakers-breuning-name'] = 'Loretta Breuning';
$_['ru']['speakers-breuning-info'] = 'Профессор философии, писатель, основатель Inner Mammal Institute';
$_['en']['speakers-breuning-info'] = 'Professor of&nbsp;Philosophy, writer, founder of&nbsp;Inner Mammal Institute';
$_['ru']['speakers-breuning__popup-info'] = 'Профессор философии Калифорнийского университета, автор бестселлера «Гормоны счастья» и блога Your Neurochemical Self, основатель Inner Mammal Institute, героиня статей в Psychologies и Real Simple.';
$_['en']['speakers-breuning__popup-info'] = 'Professor of&nbsp;Philosophy at&nbsp;the University of&nbsp;California, author of&nbsp;the bestseller &laquo;Habits of&nbsp;a&nbsp;Happy Brain&raquo; and the blog &laquo;Your Neurochemical Self&raquo;, founder of&nbsp;the Inner mammalian Institute. Such magazines as&nbsp;Psychologies and Real Simple devoted a&nbsp;lot of&nbsp;articles to&nbsp;her.';

$_['ru']['speakers-ianbin-name'] = 'Ши Янбин';
$_['en']['speakers-ianbin-name'] = '';
$_['ru']['speakers-ianbin-info'] = 'Мастер Ши&nbsp;Янбин&nbsp;&mdash; воин-монах монастыря Шаолинь, один из&nbsp;50&nbsp;монахов, кто получил право преподавать кунг-фу за&nbsp;пределами Шаолиня, основатель Школы цигун и&nbsp;кунг-фу Шаолиня в&nbsp;Москве.';
$_['en']['speakers-ianbin-info'] = '';
$_['ru']['speakers-ianbin__popup-info'] = 'Мастер Ши&nbsp;Янбин родился в&nbsp;небольшом городе Лянг Сан. Кунг Фу&nbsp;и&nbsp;внутренними стилями цигун занимается практически все население города, что неудивительно. Уже около 900&nbsp;лет, начиная с&nbsp;династии Сун, о&nbsp;городе Лянг Сан идет слава, как об&nbsp;одном из&nbsp;4-х центров ушу&nbsp;/ кунг фу&nbsp;Китая.<br><br> Ши&nbsp;Янбин начал заниматься ушу&nbsp;/ кунг фу&nbsp;в&nbsp;5&nbsp;лет под руководством своего деда. В&nbsp;12&nbsp;лет мастер прошел сложный конкурс в&nbsp;Первую школу ушу в&nbsp;провинции Шандун.<br><br>После окончания школы кунг фу&nbsp;и&nbsp;срочной службы в&nbsp;армии, мастер выбрал духовный путь и&nbsp;решил продолжить свое обучение ушу/кунг фу.<br><br> В&nbsp;конце 2010 года Мастер, окончив десятилетний курс обучения, получил наивысшую степень в&nbsp;духовной иерархии монастыря&nbsp;&mdash; мастер-монах.<br><br> В&nbsp;настоящее время Мастер Ши&nbsp;Янбин уже более 20-ти лет является монахом Шаолиньского монастыря.<br><br> Мастер является одним из&nbsp;пятидесяти монахов, кому дано право на&nbsp;преподавательскую работу. Он&nbsp;объездил много стран с&nbsp;семинарами и&nbsp;выступлениями, около двух лет преподавал в&nbsp;США, и&nbsp;шесть лет назад был направлен настоятелем монастыря Шаолинь, господином Ши&nbsp;Юнсином, для работы в&nbsp;России.<br><br> Подробнее на&nbsp;<a href="https://shiyanbin.ru/master-shi-yanbin-2-4/">https://shiyanbin.ru/master-shi-yanbin-2-4/</a>';
$_['en']['speakers-ianbin__popup-info'] = '';

$_['ru']['speakers-verdez-name'] = 'Давид Вердези';
$_['en']['speakers-verdez-name'] = '';
$_['ru']['speakers-verdez-info'] = 'Психолог и консультант, бизнес-тренер, специалист в сфере детско-родительских отношений, нейропсихолог';
$_['en']['speakers-verdez-info'] = '';
$_['ru']['speakers-verdez__popup-info'] = 'Психолог и консультант, бизнес-тренер, специалист в сфере детско-родительских отношений, нейропсихолог';
$_['en']['speakers-verdez__popup-info'] = '';

$_['ru']['speakers-medina-name'] = 'Джон Медина';
$_['en']['speakers-medina-name'] = '';

$_['ru']['speakers-medina-info'] = 'Молекулярный биолог-эволюционист, Директор Центра изучения мозга';
$_['en']['speakers-medina-info'] = '';

$_['ru']['speakers-medina__popup-info'] = 'Молекулярный биолог-эволюционист, занимающийся изучением генов, участвующих в&nbsp;развитии мозга. Трижды признавался лучшим преподавателем в&nbsp;различных университетах США. Директор Центра изучения мозга при Тихоокеанском университете Сиэтла, руководитель отделения биоинженерии медицинской школы при университете Вашингтона. Автор бестселлера &laquo;Правила мозга&raquo;';
$_['en']['speakers-medina__popup-info'] = '';

$_['ru']['speakers-vitale-name'] = 'Джо Витале';
$_['en']['speakers-vitale-name'] = 'Joe Vitale';

$_['ru']['speakers-vitale-info'] = 'Нейробиолог, профессор, основатель Hypnotic Marketing, Inc';
$_['en']['speakers-vitale-info'] = 'Neuroscientist, Professor, founder of&nbsp;Hypnotic Marketing, Inc';

$_['ru']['speakers-vitale__popup-info'] = 'Интернет-маркетолог, получивший прозвище &laquo;Будда Интернета&raquo;. Знаменит методикой ведения бизнеса, которая объединяет духовные практики и&nbsp;основы менеджмента. Основатель и&nbsp;президент компании Hypnotic Marketing, Inc., сооснователь компании Frontier Nutritional Research. Автор более 60&nbsp;книг о&nbsp;личной эффективности и&nbsp;новом типе управления: &laquo;Каждую минуту рождается покупатель&raquo;, &laquo;Величайший секрет как делать деньги&raquo;, &laquo;Путешествия внутри&raquo;, &laquo;Идеи на&nbsp;миллион долларов от&nbsp;Брюса Бартона&raquo;, &laquo;Осуществление желаний&raquo;, &laquo;Жизнь без ограничений&raquo; и&nbsp;других.';
$_['en']['speakers-vitale__popup-info'] = 'Internet marketer, called &laquo;The Buddha of&nbsp;the Internet&raquo;. <br> He&nbsp;is&nbsp;famous for his business methodology, which combines spiritual practices and the basics of&nbsp;management. <br> Founder and President of&nbsp;Hypnotic Marketing, Inc., co-founder of&nbsp;Frontier Nutritional Research. <br> Author of&nbsp;more than 60&nbsp;books on&nbsp;personal effectiveness and a&nbsp;new type of&nbsp;management: &laquo;There&rsquo;s a&nbsp;Customer Born Every Minute&raquo;, &laquo;Money Loves Speed&raquo;, &laquo;Attract Money Now&raquo;, &laquo;Hypnotic Writing&raquo;, &laquo;The Art and Science of&nbsp;Results&raquo;, &laquo;Zero Limits&raquo; and others.';

$_['ru']['speakers-kurpatov-name'] = 'Андрей Курпатов';
$_['en']['speakers-kurpatov-name'] = 'Andrey Kurpatov';

$_['ru']['speakers-kurpatov-info'] = 'Научный руководитель Лаборатории нейронаук и поведения человека Сбербанка';
$_['en']['speakers-kurpatov-info'] = 'Supervisor Neuroscience Laboratories and Sberbank human behavior';

$_['ru']['speakers-kurpatov__popup-info'] = 'Психотерапевт, основатель &laquo;Высшей школы методологии&raquo;, создатель проекта &laquo;Академия смысла&raquo;, научный руководитель Лаборатории нейронаук и&nbsp;поведения человека Сбербанка.';
$_['en']['speakers-kurpatov__popup-info'] = 'Psychotherapist, founder of the Higher School of Methodology, creator of the Academy of Sense project, scientific director of the Sberbank Laboratory of Neurosciences and Human Behavior.';

$_['ru']['speakers-safronov__popup-info'] = 'Занимается темой развития памяти с 2015 года, участник телепроектов «Удивительные люди» и «Сверхспособности». В 2019 году занял первое место в чемпионате интеллектуальных видов спорта Inchamp в группе дисциплин «Память». Работает над открытием Ассоциации Мнемонистов России.';
$_['en']['speakers-safronov__popup-info'] = '';

$_['ru']['speakers-kolmanovsky-name'] = 'Илья Колмановский';
$_['en']['speakers-kolmanovsky-name'] = '';

$_['ru']['speakers-kolmanovsky-info'] = 'Биолог, кандидат биологических наук, популяризатор науки, научный журналист';
$_['en']['speakers-kolmanovsky-info'] = '';

$_['ru']['speakers-kolmanovsky__popup-info'] = 'Биолог, кандидат наук, научный журналист, автор научно-популярных проектов, популяризатор науки. В 1998 году получил специальность зоолога в МГУ. Руководитель лаборатории биологии Политехнического музея.';
$_['en']['speakers-kolmanovsky__popup-info'] = '';

$_['ru']['speakers-kozlov-name'] = 'Николай Козлов';
$_['en']['speakers-kozlov-name'] = '';
$_['ru']['speakers-kozlov-info'] = 'Основатель Тренинг-Центра «Синтон», ректор Университета практической психологии, советский российский психолог, публицист, прозаик, преподаватель, популяризатор практической психологии. Автор научно-популярных книг по психологии';
$_['en']['speakers-kozlov-info'] = '';
$_['ru']['speakers-kozlov__popup-info'] = 'Доктор психологических наук, профессор, основатель тренинг-центра «Синтон», онлайн-клуба для психологов «Дистантник» и крупнейшего в России и СНГ психологического портала «Психологос», ректор Университета практической психологии.';
$_['en']['speakers-kozlov__popup-info'] = '';

$_['ru']['speakers-shevarnadze-name'] = 'Софико Шеварднадзе';
$_['en']['speakers-shevarnadze-name'] = '';
$_['ru']['speakers-shevarnadze-info'] = 'Российский предприниматель, основатель и&nbsp;президент группы компаний Cognitive Technologies&nbsp;&mdash; российского разработчика&nbsp;ПО и&nbsp;ИТ-решений, заведующая кафедрой инженерной кибернетики НИТУ МИСиС';
$_['en']['speakers-shevarnadze-info'] = '';
$_['ru']['speakers-shevarnadze__popup-info'] = 'Российский предприниматель, основатель и&nbsp;президент группы компаний Cognitive Technologies&nbsp;&mdash; российского разработчика&nbsp;ПО и&nbsp;ИТ-решений, заведующая кафедрой инженерной кибернетики НИТУ МИСиС';
$_['en']['speakers-shevarnadze__popup-info'] = '';

$_['ru']['speakers-volkov-name'] = 'Дмитрий Волков';
$_['en']['speakers-volkov-name'] = '';
$_['ru']['speakers-volkov-info'] = 'Серийный предприниматель, инвестор, сооснователь SDVentures и&nbsp;Dating Group';
$_['en']['speakers-volkov-info'] = '';
$_['ru']['speakers-volkov__popup-info'] = '
Основатель международного холдинга SDVentures и&nbsp;глобальной компании Dating Group. Холдинг инвестирует в&nbsp;high-tech проекты в&nbsp;области социальных технологий и&nbsp;искусственного интеллекта.<br>
Дмитрий также действует как эксперт и&nbsp;организатор международных сделок по&nbsp;продаже компаний, работающих в&nbsp;сфере онлайн бизнеса, выступает партнером в&nbsp;таких международных фондах, как: Blockchain Capital, Mangrove Capital Partners, DN&nbsp;Capital, 500&nbsp;Startups, Dream Machine, Target Global и&nbsp;iTech Capital.<br>
Окончил исторический факультет МГУ им. М.&nbsp;В.&nbsp;Ломоносова и&nbsp;защитил докторскую диссертацию по&nbsp;философии.<br>
Имеет степень Executive MBA Московской школы управления Сколково.
';
$_['en']['speakers-volkov__popup-info'] = '';

$_['ru']['speakers-lobov-name'] = 'Вадим Лобов';
$_['en']['speakers-lobov-name'] = '';
$_['ru']['speakers-lobov-info'] = 'Президент корпорации &laquo;Синергия&raquo;';
$_['en']['speakers-lobov-info'] = '';
$_['ru']['speakers-lobov__popup-info'] = 'Основатель образовательного холдинга «Синергия»,  кандидат экономических наук, большое внимание уделяет реализации общественно-значимых образовательных проектов, направленных на патриотическое воспитание и развитие гражданственности.';
$_['en']['speakers-lobov__popup-info'] = '';

$_['ru']['speakers-belan-name'] = 'Сергей Белан';
$_['en']['speakers-belan-name'] = '';

$_['ru']['speakers-belan-info'] = 'CEO и&nbsp;founder Wikium';
$_['en']['speakers-belan-info'] = '';

$_['ru']['speakers-belan__popup-info'] = 'В&nbsp;2013 году основал &laquo;Викиум&raquo;, онлайн-платформу для улучшения производительности мозга, развития памяти, мышления и&nbsp;внимания с&nbsp;помощью когнитивных онлайн-тренажеров и&nbsp;специализированных курсов. Викиум является лидером в&nbsp;области когнитивных тренировок с&nbsp;аудиторией более 6&nbsp;млн пользователей. <br><br>Сергей является экспертом первого состава рабочей группы &laquo;Нейронет&raquo; по&nbsp;формированию дорожной карты Национальной технологической инициативы (НТИ) и&nbsp;автором методик по&nbsp;концентрации внимания. Также под руководством Сергея было запущено направление брейн-фитнес и&nbsp;разработаны инновационные нейротренажеры с&nbsp;применением ЭЭГ и&nbsp;нейротехнологий.';
$_['en']['speakers-belan__popup-info'] = '';

$_['ru']['speakers-kuyava-name'] = 'Олег Куява';
$_['en']['speakers-kuyava-name'] = '';

$_['ru']['speakers-kuyava-info'] = 'Исследователь феномена &laquo;Управление и&nbsp;контроль снов&raquo;, участник научного сообщества OOBE Research Center';
$_['en']['speakers-kuyava-info'] = '';

$_['ru']['speakers-kuyava__popup-info'] = 'Ведущий ежегодных международных съездов практиков осознанных сновидений <br><br> Основатель проекта &laquo;Другая реальность&raquo; <br><br> Автор книги &laquo;Фаза&raquo;&nbsp;&mdash; хит продаж на&nbsp;Литрес 2019 год <br><br> Участник радио и&nbsp;телепередач, в&nbsp;том числе выступление на&nbsp;Нью-Йоркском телеканале и&nbsp;Рен&nbsp;ТВ';
$_['en']['speakers-kuyava__popup-info'] = '';

$_['ru']['speakers-sotnikov-name'] = 'Сергей Сотников';
$_['en']['speakers-sotnikov-name'] = '';
$_['ru']['speakers-sotnikov-info'] = 'Основатель MindFormat.AI, cервиса способного определить формат мышления человека. Предприниматель, исследователь, спикер TEDx';
$_['en']['speakers-sotnikov-info'] = '';
$_['ru']['speakers-sotnikov__popup-info'] = 'Основатель MindFormat.AI, cервиса способного определить формат мышления человека. Предприниматель, исследователь, спикер TEDx';
$_['en']['speakers-sotnikov__popup-info'] = '';

$_['ru']['speakers-bahtina-name'] = 'Натали Бахтина';
$_['en']['speakers-bahtina-name'] = '';
$_['ru']['speakers-bahtina-info'] = 'Специалист по&nbsp;нейроэстетике и&nbsp;здоровому пространству, энерготерапевт';
$_['en']['speakers-bahtina-info'] = '';
$_['ru']['speakers-bahtina__popup-info'] = 'Автор и руководитель международного проекта  Выставка-медитация "СКАЗКА ТВОЕЙ ЖИЗНИ с Жозефиной Уолл - Искусство, которое исцеляет. Выставка-практическое подтверждение восстановления ресурса и оздоровления человека на всех уровнях восприятия (мозг, сердце и душа) через искусство. <br>
www.жозефинауолл.рф <br>

Создатель клуба здорового пространства <br>

Автор тренингов:
<ol>
<li>Архитектор реальности :пробуди свой скрытый потенциал.</li>
<li>Нейроэстетика: Искусство, как потребность мозга.</li>
<li>Танго втроем: мозг ,сердце и душа. Секреты счастливой жизни.</li>
<ol>';
$_['en']['speakers-bahtina__popup-info'] = '';

$_['ru']['speakers-dubinin-name'] = 'Вячеслав Дубынин';
$_['en']['speakers-dubinin-name'] = '';

$_['ru']['speakers-dubinin-info'] = 'Специалист в области физиологии мозга, доктор биологических наук, профессор кафедры физиологии человека и животных биологического факультета МГУ им. М. В. Ломоносова';
$_['en']['speakers-dubinin-info'] = '';

$_['ru']['speakers-dubinin__popup-info'] = 'Доктор биологических наук, с&nbsp;2004 года занимает должность профессора кафедры физиологии человека и&nbsp;животных биологического факультета МГУ им. М.В.Ломоносова. Специалист в&nbsp;области общей физиологии, нейробиологии и&nbsp;психофармакологии; читает лекции студентам МГУ, ВШЭ, Сколково и&nbsp;др. Автор учебников и&nbsp;учебных пособий для высшей школы.
Область узких научных интересов&nbsp;&mdash; физиология поведения и&nbsp;регуляторные пептиды; модели аутизма и&nbsp;депрессии; автор более 100 научных работ (статей) и&nbsp;2-х монографий.
Популяризатор науки; читает как обзорные лекции, так и&nbsp;циклы лекций, посвященные функционированию нервной системы в&nbsp;норме, при стрессе, различных заболеваниях, а&nbsp;также физиологии памяти, зрения и&nbsp;слуха, эмоций и&nbsp;мотиваций, мышления, принятия решений, нейроиммуноэндокринному взаимодействию и&nbsp;т.д. Регулярно выступает в&nbsp;СМИ число просмотров его материалов только на&nbsp;видеохостинге YouTube превышает 5&nbsp;млн.';
$_['en']['speakers-dubinin__popup-info'] = '';


$_['ru']['speakers-sherbatih-name'] = 'Юрий Щербатых';
$_['en']['speakers-sherbatih-name'] = '';

$_['ru']['speakers-sherbatih-info'] = 'Доктор биологических наук, член-корреспондент Международной академии наук Экологии и&nbsp;Безопасности жизнедеятельности';
$_['en']['speakers-sherbatih-info'] = '';

$_['ru']['speakers-sherbatih__popup-info'] = 'Профессор кафедры психологии воронежского филиала Московского Гуманитарно-Экономического университета, доктор биологических наук, член-корреспондент Международной академии наук Экологии и&nbsp;Безопасности жизнедеятельности. В&nbsp;2001 году в&nbsp;Санкт-Петербургском университете защитил докторскую диссертацию по&nbsp;теме стресса. В&nbsp;активе Ю.В. Щербатых более ста семидесяти печатных работ, включая монографии, статьи в&nbsp;ведущих научных журналах России и&nbsp;ряд книг по&nbsp;популярной психологии (&laquo;Психология стресса&raquo;, &laquo;Психология успеха&raquo;, &laquo;Психология выборов&raquo;, &laquo;Искусство обмана&raquo;, &laquo;Психология страха&raquo;, &laquo;Психология любви и&nbsp;секса&raquo;, &laquo;Психология личностных качеств&raquo; и&nbsp;др.). Общий тираж книг Юрия Щербатых превысил 450.000&nbsp;экз. Три книги были изданы в&nbsp;Китае, две&nbsp;&mdash; в&nbsp;Болгарии. ';
$_['en']['speakers-sherbatih__popup-info'] = '';

$_['ru']['speakers-perykya-name'] = 'Перукуа';
$_['en']['speakers-perykya-name'] = '';
$_['ru']['speakers-perykya-info'] = 'Известная австралийская певица, создательница и ведущая самых больших в мире практических семинаров для женщин';
$_['en']['speakers-perykya-info'] = '';
$_['ru']['speakers-perykya__popup-info'] = 'Известная австралийская певица, создательница и ведущая самых больших в мире практических семинаров для женщин';
$_['en']['speakers-perykya__popup-info'] = '';

$_['ru']['speakers-cylchincka-name'] = 'Сульчинская Ольга';
$_['en']['speakers-cylchincka-name'] = '';
$_['ru']['speakers-cylchincka-info'] = 'Шеф - редактор журнала PSYCHOLOGIES';
$_['en']['speakers-cylchincka-info'] = '';
$_['ru']['speakers-cylchincka__popup-info'] = 'Шеф - редактор журнала PSYCHOLOGIES';
$_['en']['speakers-cylchincka__popup-info'] = '';

$_['ru']['speakers-ejikov-name'] = 'Алексей Ёжиков';
$_['en']['speakers-ejikov-name'] = '';
$_['ru']['speakers-ejikov-info'] = 'Партнёр Zest Leaders, руководитель секции «Коучинг» Ассоциации когнитивно-поведенческой психотерапии. Спикер TEDx';
$_['en']['speakers-ejikov-info'] = '';
$_['ru']['speakers-ejikov__popup-info'] = 'Партнёр Zest Leaders, руководитель секции «Коучинг» Ассоциации когнитивно-поведенческой психотерапии. Спикер TEDx';
$_['en']['speakers-ejikov__popup-info'] = '';

$_['ru']['speakers-levicka-name'] = 'Левицкая Лилия';
$_['en']['speakers-levicka-name'] = '';
$_['ru']['speakers-levicka-info'] = 'Действительный член Ассоциации когнитивно-поведенческой терапии. Создатель Интегральной Технологии активации Любви во всех сферах жизни. Женский трансформационный тренер';
$_['en']['speakers-levicka-info'] = '';
$_['ru']['speakers-levicka__popup-info'] = 'Действительный член Ассоциации когнитивно-поведенческой терапии. Создатель Интегральной Технологии активации Любви во всех сферах жизни. Женский трансформационный тренер';
$_['en']['speakers-levicka__popup-info'] = '';

$_['ru']['speakers-palagin-name'] = 'Павел Палагин';
$_['en']['speakers-palagin-name'] = '';
$_['ru']['speakers-palagin-info'] = 'Международный спикер по нейроэффективности, писатель, эксперт по скорочтению и развитию памяти';
$_['en']['speakers-palagin-info'] = '';
$_['ru']['speakers-palagin__popup-info'] = 'Эксперт в повышении личной эффективности в обработке информационных потоков и скорочтении для профессионалов, предпринимателей и руководителей.';
$_['en']['speakers-palagin__popup-info'] = '';

$_['ru']['speakers-ardasenov-name'] = 'Сергей Ардасенов';
$_['en']['speakers-ardasenov-name'] = '';
$_['ru']['speakers-ardasenov-info'] = 'Основатель международной академии Анимара, Исследователь методик трансовых состояний мозга и&nbsp;влияния звука на&nbsp;организм';
$_['en']['speakers-ardasenov-info'] = '';
$_['ru']['speakers-ardasenov__popup-info'] = 'Основатель международной академии Анимара, Исследователь методик трансовых состояний мозга и&nbsp;влияния звука на&nbsp;организм';
$_['en']['speakers-ardasenov__popup-info'] = '';

$_['ru']['speakers-lubin-name'] = 'Репина Наталья Сергеевна';
$_['en']['speakers-lubin-name'] = '';
$_['ru']['speakers-lubin-info'] = 'Основатель Института Топологии Сознания. Ведущая авторской программы на Пермском телевидении “Домашний психолог”. Автор программ самопознания “Предназначение”, “Женственность”';
$_['en']['speakers-lubin-info'] = '';
$_['ru']['speakers-lubin__popup-info'] = '';
$_['en']['speakers-lubin__popup-info'] = '';

$_['ru']['speakers-lubin-name'] = 'Любин Кирилл';
$_['en']['speakers-lubin-name'] = '';
$_['ru']['speakers-lubin-info'] = 'Эксперт по личной эффективности и управлению стрессом. Коуч PCC ICF первых лиц бизнеса. Спикер TEDx';
$_['en']['speakers-lubin-info'] = '';
$_['ru']['speakers-lubin__popup-info'] = '';
$_['en']['speakers-lubin__popup-info'] = '';

$_['ru']['speakers-konovalenko-name'] = 'Кирилл Коноваленко';
$_['en']['speakers-konovalenko-name'] = '';
$_['ru']['speakers-konovalenko-info'] = 'Практикующий врач, исследователь, музыкант';
$_['en']['speakers-konovalenko-info'] = '';
$_['ru']['speakers-konovalenko__popup-info'] = 'Практикующий врач, исследователь, музыкант';
$_['en']['speakers-konovalenko__popup-info'] = '';

$_['ru']['speakers-trunov-name'] = 'Александр Трунов';
$_['en']['speakers-trunov-name'] = '';
$_['ru']['speakers-trunov-info'] = 'Разработчик систем нейроимитации и&nbsp;обучения интуитивной музыке';
$_['en']['speakers-trunov-info'] = '';
$_['ru']['speakers-trunov__popup-info'] = 'Разработчик систем нейроимитации и&nbsp;обучения интуитивной музыке';
$_['en']['speakers-trunov__popup-info'] = '';

$_['ru']['speakers-shubina-name'] = 'Виктория Шубина';
$_['en']['speakers-shubina-name'] = '';
$_['ru']['speakers-shubina-info'] = 'Директор по&nbsp;направлению триатлон сети клубов WORLD&nbsp;CLASS';
$_['en']['speakers-shubina-info'] = '';
$_['ru']['speakers-shubina__popup-info'] = '
<ul>
<li>27-кратный Half-Ironman</li>
<li>9-кратный IRONMAN</li>
<li>6-кратная Участница Чемпионата Мира по&nbsp;IRONMAN</li>
<li>Официальный амбассадор IRONMAN RUSSIA</li>
<li>Автор программ для спортсменов по&nbsp;подготовке к&nbsp;стартам от&nbsp;sprint до&nbsp;IRONMAN. Так&nbsp;же программы по&nbsp;питанию и&nbsp;восстановлению</li>
<li>Подготовила более 150 спортсменов к&nbsp;соревнованиям по&nbsp;триатлону, плаванию в&nbsp;открытой воде и&nbsp;бегу на&nbsp;разные дистанции.</li>
<ul>';
$_['en']['speakers-shubina__popup-info'] = '';


$_['ru']['speakers-shamenkov-name'] = 'Дмитрий Шаменков';
$_['en']['speakers-shamenkov-name'] = '';
$_['ru']['speakers-shamenkov-info'] = 'Доктор, психофизиолог, предприниматель, общественный деятел';
$_['en']['speakers-shamenkov-info'] = '';
$_['ru']['speakers-shamenkov__popup-info'] = '
Ментор и&nbsp;член Экспертной коллегии Фонда Сколково. <br><br>
Более 20&nbsp;лет развивает технологии осознанного управления здоровьем. Автор 28&nbsp;научных публикаций и&nbsp;21&nbsp;патента в&nbsp;области нанотехнологий, клеточных биотехнологий, регенеративной медицины и&nbsp;физиологии функциональных систем.  <br><br>
Индекс Хирша = 6. <br><br>
Общее количество учеников&nbsp;&mdash; более 17&nbsp;000. <br><br>
Директор Научно-образовательного центра &laquo;Информационные и&nbsp;социальные технологии в&nbsp;медицине&raquo; Сеченовского университета. Принимал участие в&nbsp;научных разработках в&nbsp;ЦКБ МПС РФ, Первом МГМУ им.И.М Сеченова и&nbsp;НИИ Нормальной физиологии&nbsp;им. П.К. Анохина РАМН.  <br><br>
Член Общероссийской профессиональной психотерапевтической лиги, Американской Психологической Ассоциации (APA) и&nbsp;многих других организаций. Член Ассоциации по&nbsp;развитию культуры осознанности. Член Правления и&nbsp;Попечительского совета Национальной инициативы &laquo;Живые города&raquo;. Основатель реабилитационного центра SUZRetreat в&nbsp;Тайланде. <br><br>
В&nbsp;прошлом&nbsp;&mdash; буддистский монах традиции Тхеравада.
';
$_['en']['speakers-shamenkov__popup-info'] = '';

$_['ru']['speakers-malakhovsky-name'] = 'Станислав Малаховский';
$_['en']['speakers-malakhovsky-name'] = '';
$_['ru']['speakers-malakhovsky-info'] = 'Эстрадный гипнотизер, менталист';
$_['en']['speakers-malakhovsky-info'] = '';
$_['ru']['speakers-malakhovsky__popup-info'] = '
Член президиума Восточноевропейской ассоциации гипнотерапевтов и&nbsp;клинических психологов. Спикер TEDx. <br><br>
Принимал участие в&nbsp;шоу &laquo;ВСЕ КРОМЕ ОБЫЧНОГО&raquo; на&nbsp;ТВ3, &laquo;Тайны Гипноза&raquo; на&nbsp;РЕН ТВ&nbsp;и&nbsp;в&nbsp;более чем в&nbsp;десятке&nbsp;TV и&nbsp;Радио эфиров. <br><br>
У&nbsp;Станислава учились лучшие иллюзионисты России, Украины и&nbsp;Казахстана.
';
$_['en']['speakers-malakhovsky__popup-info'] = '';


$_['ru']['speakers-rock-name'] = 'Дэвид Рок';
$_['en']['speakers-rock-name'] = '';
$_['ru']['speakers-rock-info'] = 'Директор NeuroLeadership Institute, основоположник термина &laquo;Нейролидерство&raquo;';
$_['en']['speakers-rock-info'] = '';
$_['ru']['speakers-rock__popup-info'] = '
Автор бестселлеров &laquo;Ваш мозг на&nbsp;работе&raquo;, &laquo;Спокойное лидерство&raquo; и&nbsp;др. <br><br>
Доктор Дэвид Рок ввел термин &laquo;Нейролидерство&raquo; и&nbsp;является директором NeuroLeadership Institute&nbsp;&mdash; глобальной инициативы, объединяющей нейробиологов и&nbsp;лидеров по&nbsp;лидерству вместе с&nbsp;целью построить новую науку для развития лидерства. Работая в&nbsp;24&nbsp;странах, NeuroLeadership Institute также помогает крупным организациям осуществлять свою деятельность по&nbsp;исследованию мозга для того чтобы формировать более способных лидеров и&nbsp;менеджеров. <br.<br>
Дэвид является со-редактором журнала NeuroLeadership и&nbsp;возглавляет ежегодный Глобальный саммит. Он&nbsp;написал много Центральных академических документов для обсуждения, которые определили сферу Нейролидерства. Он&nbsp;является автором бизнес-бестселлера &laquo;ваш мозг на&nbsp;работе&raquo; (Harper Business, 2009), а&nbsp;также &laquo;спокойное лидерство&raquo; (Harper Collins, 2006) и&nbsp;учебника &laquo;коучинг с&nbsp;мозгом в&nbsp;уме&raquo; (Wiley &amp;&nbsp;Sons, 2009). Он&nbsp;ведет блоги для Harvard Business Review, Fortune Magazine, Psychology Today и&nbsp;Huffington Post и&nbsp;широко цитируется в&nbsp;средствах массовой информации о&nbsp;лидерстве, организационной эффективности и&nbsp;мозге. <br><br>
В&nbsp;академическом плане Дэвид является членом профессорско-преподавательского и&nbsp;Консультативного совета CIMBA, международной бизнес-школы, базирующейся в&nbsp;Европе, и&nbsp;приглашенным лектором во&nbsp;многих университетах, включая упомянутую бизнес-школу Оксфордского университета. Он&nbsp;входит в&nbsp;совет директоров BlueSchool, инициативы в&nbsp;Нью-Йорке по&nbsp;созданию нового подхода к&nbsp;образованию. Он&nbsp;получил свою профессиональную докторскую степень в&nbsp;области нейробиологии лидерства в&nbsp;Мидлсекском университете в&nbsp;2010&nbsp;году.
';
$_['en']['speakers-rock__popup-info'] = '';



$_['ru']['speakers-reutov-name'] = 'Андрей Реутов';
$_['en']['speakers-reutov-name'] = '';
$_['ru']['speakers-reutov-info'] = 'Кандидат медицинских наук, нейрохирург, онколог, ЦКБ УДП&nbsp;РФ';
$_['en']['speakers-reutov-info'] = '';
$_['ru']['speakers-reutov__popup-info'] = '
<p>Ведущий авторской программы «Мозговой штурм с Доктором Реутовым» на канале Медиаметрикс</p>
<p>Автор книги «Интерактивная топическая диагнстика нервных болезней» </p>
<p>Идейный вдохновитель проекта Centerneuro.ru </p>
<p>Нейрохирург, онколог, организатор здравоохранения</p>';
$_['en']['speakers-reutov__popup-info'] = '';

$_['ru']['speakers-dragoi-name'] = 'Ольга Драгой';
$_['en']['speakers-dragoi-name'] = '';
$_['ru']['speakers-dragoi-info'] = 'Кандидат филологических наук, нейролингвист, директор Центра языка и&nbsp;мозга Национального исследовательского университета &laquo;Высшая школа экономики&raquo;';
$_['en']['speakers-dragoi-info'] = '';
$_['ru']['speakers-dragoi__popup-info'] = 'Кандидат филологических наук, нейролингвист, директор Центра языка и&nbsp;мозга Национального исследовательского университета &laquo;Высшая школа экономики&raquo;';
$_['en']['speakers-dragoi__popup-info'] = '';

$_['ru']['speakers-gilemhanova-name'] = 'Лилия Гилемханова';
$_['en']['speakers-gilemhanova-name'] = '';
$_['ru']['speakers-gilemhanova-info'] = 'Специалист по&nbsp;работе с&nbsp;подсознанием, консультационный член профессиональной психотерапевтической лиги, автор трансформационных медитаций';
$_['en']['speakers-gilemhanova-info'] = '';
$_['ru']['speakers-gilemhanova__popup-info'] = 'Специалист по&nbsp;работе с&nbsp;подсознанием, консультационный член профессиональной психотерапевтической лиги, автор трансформационных медитаций';
$_['en']['speakers-gilemhanova__popup-info'] = '';


$_['ru']['speakers-naidenova-name'] = 'Ольга Найденова';
$_['en']['speakers-naidenova-name'] = '';
$_['ru']['speakers-naidenova-info'] = 'Инструктор Центра развития личности &laquo;Арканум&raquo;, специалист по&nbsp;биоэнергетике, мастер глубинных медитаций';
$_['en']['speakers-naidenova-info'] = '';
$_['ru']['speakers-naidenova__popup-info'] = 'Инструктор Центра развития личности &laquo;Арканум&raquo;, специалист по&nbsp;биоэнергетике, мастер глубинных медитаций';
$_['en']['speakers-naidenova__popup-info'] = '';

$_['ru']['speakers-artemyev-name'] = 'Сергей Артемьев';
$_['en']['speakers-artemyev-name'] = '';
$_['ru']['speakers-artemyev-info'] = 'Трансформационный тренер, эксперт по работе сознания и обучению soft-skills. Основатель онлайн-школы soft-skills "Степень Свободы"';
$_['en']['speakers-artemyev-info'] = '';
$_['ru']['speakers-artemyev__popup-info'] = 'Трансформационный тренер, эксперт по работе сознания и обучению soft-skills. Основатель онлайн-школы soft-skills "Степень Свободы"';
$_['en']['speakers-artemyev__popup-info'] = '';

$_['ru']['speakers-lukka-name'] = 'Светлана Лукка';
$_['en']['speakers-lukka-name'] = '';
$_['ru']['speakers-lukka-info'] = 'Психолог и&nbsp;консультант, бизнес-тренер, специалист в&nbsp;сфере детско-родительских отношений, нейропсихолог';
$_['en']['speakers-lukka-info'] = '';
$_['ru']['speakers-lukka__popup-info'] = 'Психолог и&nbsp;консультант, бизнес-тренер, специалист в&nbsp;сфере детско-родительских отношений, нейропсихолог';
$_['en']['speakers-lukka__popup-info'] = '';

$_['ru']['speakers-senderov-name'] = 'Дмитрий Сендеров';
$_['en']['speakers-senderov-name'] = '';
$_['ru']['speakers-senderov-info'] = 'Управляющий партнер Коммуникационной группы STRONG, креативных проектов ART UNION и&nbsp;Newideas';
$_['en']['speakers-senderov-info'] = '';
$_['ru']['speakers-senderov__popup-info'] = 'Управляющий партнер Коммуникационной группы STRONG, креативных проектов ART UNION и&nbsp;Newideas';
$_['en']['speakers-senderov__popup-info'] = '';

$_['ru']['speakers-slobod-name'] = 'Ярослав Слободской-Плюснин';
$_['en']['speakers-slobod-name'] = '';
$_['ru']['speakers-slobod-info'] = 'СЕО компании НЕЙРОН, кандидат наук по Психофизиологии, соавтор более 20 научных работ в топовых международных изданиях, автор более 15 систем оценки персонала';
$_['en']['speakers-slobod-info'] = '';
$_['ru']['speakers-slobod__popup-info'] = '';
$_['en']['speakers-slobod__popup-info'] = '';

$_['ru']['speakers-doronin-name'] = 'Доронин Павел';
$_['en']['speakers-doronin-name'] = '';
$_['ru']['speakers-doronin-info'] = 'Управляющий директор интегратора технологий искусственного интеллекта AI Today и основатель бизнес-ассоциации ИИ-разработчиков AI Community';
$_['en']['speakers-doronin-info'] = '';
$_['ru']['speakers-doronin__popup-info'] = '';
$_['en']['speakers-doronin__popup-info'] = '';

$_['ru']['speakers-krutilin-name'] = 'Крутилин Алексей';
$_['en']['speakers-krutilin-name'] = '';
$_['ru']['speakers-krutilin-info'] = 'Бизнес-профайлер, предприниматель, эксперт федеральных телеканалов по профайлингу, генеральный директор и владелец корпоративного университета «МОСПРОФАЙЛЕР»';
$_['en']['speakers-krutilin-info'] = '';
$_['ru']['speakers-krutilin__popup-info'] = '';
$_['en']['speakers-krutilin__popup-info'] = '';

$_['ru']['speakers-shevarnadze-name'] = 'Софико Шеварднадзе';
$_['en']['speakers-shevarnadze-name'] = '';
$_['ru']['speakers-shevarnadze-info'] = 'Российская журналистка, телеведущая, автор и продюсер';
$_['en']['speakers-shevarnadze-info'] = '';
$_['ru']['speakers-shevarnadze__popup-info'] = 'Российская журналистка, телеведущая, автор и продюсер';
$_['en']['speakers-shevarnadze__popup-info'] = '';

$_['ru']['speakers-uskova-name'] = 'Ольга Ускова';
$_['en']['speakers-uskova-name'] = '';
$_['ru']['speakers-uskova-info'] = 'Известный российский предприниматель, генеральный директор Cognitive Pilot (дочерняя компания Сбербанка и Cognitive Technologies)';
$_['en']['speakers-uskova-info'] = '';
$_['ru']['speakers-uskova__popup-info'] = 'Известный российский предприниматель, генеральный директор Cognitive Pilot (дочерняя компания Сбербанка и Cognitive Technologies).<br>Управляет бизнесом в сфере создания искусственного интеллекта для беспилотного транспорта в России, европейских странах, США, Азии и Латинской Америке.<br> В 2019 году вошла в число наиболее влиятельных предпринимателей России, чьи технологии изменят мир по версии Forbes, а также в ТОП-3 ньюсмейкеров России по теме искусственного интеллекта.';
$_['en']['speakers-uskova__popup-info'] = '';

$_['ru']['speakers-kozlovv-name'] = 'Владимир Козлов';
$_['en']['speakers-kozlovv-name'] = '';
$_['ru']['speakers-kozlovv-info'] = 'Директор по науке и нейротехнологиям Persona, Руководитель РГ Нейроэкономика рынка Нейронет НТИ 2.0';
$_['en']['speakers-kozlovv-info'] = '';
$_['ru']['speakers-kozlovv__popup-info'] = 'Директор по науке и нейротехнологиям Persona, Руководитель РГ Нейроэкономика рынка Нейронет НТИ 2.0';
$_['en']['speakers-kozlovv__popup-info'] = '';

$_['ru']['speakers-chernigovay-name'] = 'Татьяна Черниговская';
$_['en']['speakers-chernigovay-name'] = '';
$_['ru']['speakers-chernigovay-info'] = 'Российская учёная в области нейронауки, психолингвистики и теории сознания';
$_['en']['speakers-chernigovay-info'] = '';
$_['ru']['speakers-chernigovay__popup-info'] = '<p>Профессор Санкт-Петербургского государственного университета, заведующая лабораторией когнитивных исследований. </p>
<p>Зам. директора-координатор когнитивного направления НБИК-центра НИЦ «Курчатовский институт».</p>
<p>Заслуженный деятель Высшего образования и Заслуженный деятель науки РФ. Член Совета по науке и образованию при Президенте РФ.</p>';
$_['en']['speakers-chernigovay__popup-info'] = '';

/*** END OLD ***/


switch ($version) {

    case 'online':
        $_['ru']['date'] = '23-24 ноября 2020&nbsp;| Онлайн-трансляция';

        $_['ru']['form__title'] = 'Оставьте заявку на ОНЛАЙН участие';

        $_['ru']['expectations__block-item_text_7'] = 'Атмосфера и&nbsp;яркое интеллект-шоу';
        break;
}

switch ($external_url) {

    case 'online-price':
        $_['ru']['date'] = '23-24 ноября 2020&nbsp;| Онлайн-трансляция';
        break;
}
