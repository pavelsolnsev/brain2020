{% from './data.php' import data as speakers %}
{% from './data_en.php' import data as speakers_en %}
{% import './macro.php' as macro_speakers %}

<section class="speakers lazy" id="speakers">
  <p class="speakers__title title-section"><?= _t('speakers__title') ?></p>

  <div class="speakers__list">

    <?php if ( $lang == 'ru' ) { ?>

    {{ macro_speakers.list(speakers) }}
    
    <!-- <div class="speakers__list-item {{ 'speakers__list-item_nospeaker' if index % 2 }}"> 
      <div class="speakers__list-item-photo speakers__list-item-photo_1">
        <div class="speakers__list-item-photo-inner">
          <img src="img/speakers/empty.png" alt="">
        </div>
      </div>
      <div class="speakers__list-item-photo speakers__list-item-photo_2">
        <img src="img/speakers/speaker_empty.png" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Панель спикеров продолжает пополняться </p>
      </div>
    </div> -->

    <?php } else { ?>

    {{ macro_speakers.list(speakers_en) }}

    <?php }  ?>  
  
  </div>

  <?php if ($lang == 'en'): ?>
  <div class="speakers__button">
    <div class="speakers__button_box">The speaker panel is&nbsp;still <br> under formation</div>
  </div>
  <?php endif; ?>

    <?php /* ?>
    <div class="speakers__list-item speakers__list-item1">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/broining_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Лоретта Бройнинг</p>
        <p class="speakers__list-item-info">Профессор философии, писатель, основатель Inner Mammal Institute</p>
      </div>
      <a href="#popup-speakers-broining" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div>

    <div class="speakers__list-item speakers__list-item2">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo10_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Андрей Сафронов</p>
        <p class="speakers__list-item-info">Эксперт по развитию памяти, тренер, участник ТВ проектов, писатель</p>
      </div>
      <a href="#popup-speakers-safronov" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div>

    <div class="speakers__list-item speakers__list-item3">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo7_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Илья Колмановский</p>
        <p class="speakers__list-item-info">Биолог, кандидат биологических наук, популяризатор науки, научный журналист</p>
      </div>
      <a href="#popup-speakers-kolmanovsky" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div>

    <div class="speakers__list-item speakers__list-item4">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo11_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Николай Козлов</p>
        <p class="speakers__list-item-info">Доктор психологических наук, профессор, бизнес&#8209;тренер, коуч</p>
      </div>
      <a href="#popup-speakers-kozlov" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
      <!-- <div class="speakers__list-item-add"><span>brain 2020</span></div> -->
    </div>

    <div class="speakers__list-item speakers__list-item5">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo14_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Вадим Лобов</p>
        <p class="speakers__list-item-info">Президент корпорации &laquo;Синергия&raquo;</p>
      </div>
      <a href="#popup-speakers-lobov" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div>

    <div class="speakers__list-item speakers__list-item6 speakers__list-item_empty">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo17_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Сергей Белан</p>
        <p class="speakers__list-item-info">CEO и&nbsp;founder Wikium</p>
      </div>
      <a href="#popup-speakers-belan" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div>

    <div class="speakers__list-item speakers__list-item7 speakers__list-item_empty">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/kuyava_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Олег Куява</p>
        <p class="speakers__list-item-info">Исследователь феномена &laquo;Управление и&nbsp;контроль снов&raquo;, участник научного сообщества OOBE Research Center</p>
      </div>
      <a href="#popup-speakers-kuyava" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div>

    <div class="speakers__list-item speakers__list-item_nospeaker">
      <div class="speakers__list-item-photo speakers__list-item-photo_1">
        <div class="speakers__list-item-photo-inner">
          <img src="img/speakers/empty.png" alt="">
        </div>
      </div>
      <div class="speakers__list-item-photo speakers__list-item-photo_2">
        <img src="img/speakers/speaker_empty.png" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Панель спикеров продолжает пополняться </p>
      </div>
    </div>
    <?php */?>



    
    <!-- <div class="speakers__list-item speakers__list-item7">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo18_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Джо Витале</p>
        <p class="speakers__list-item-info">Президент компании Hypnotic Marketing, Inc, писатель</p>
      </div>
      <a href="#popup-speakers-vitale" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
    </div> -->


      <?php /*
    <div class="speakers__list-item speakers__list-item5">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo8_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Эмиль Ахундов</p>
        <p class="speakers__list-item-info">Практикующий нейрохирург, видеоблогер</p>
      </div>
      <a href="#popup-speakers-ahundov" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
      <!-- <div class="speakers__list-item-add"><span>brain 2020</span></div> -->
      
    </div>

    <div class="speakers__list-item speakers__list-item5">
      
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo14_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Вадим Лобов</p>
        <p class="speakers__list-item-info">Президент корпорации &laquo;Синергия&raquo;</p>
      </div>
      <a href="#popup-speakers-lobov" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
      <div class="speakers__list-item-add"><span>brain 2020</span></div>
    </div>


    <div class="speakers__list-item speakers__list-item5">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo15_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Кирилл Любин</p>
        <p class="speakers__list-item-info">Президент Федерации ножевого боя в России, офицер запаса подразделения специального назначения ФСБ России</p>
      </div>
      <a href="#popup-speakers-lubin" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
      <!-- <div class="speakers__list-item-add"><span>brain 2020</span></div> -->
    </div>

    <div class="speakers__list-item speakers__list-item5">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo16_blue.jpg" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Павел Палагин</p>
        <p class="speakers__list-item-info">Международный спикер по нейроэффективности, писатель, эксперт по скорочтению и развитию памяти</p>
      </div>
      <a href="#popup-speakers-palagin" class="speakers__list-item-button fancybox" data-fancybox>Подробнее</a>
      <!-- <div class="speakers__list-item-add"><span>brain 2020</span></div> -->
    </div>


  </div>
  <div class="speakers__more">
    <button class="speakers__more-btn jq-show-link" type="button">Показать ещё спикеров</button>
  </div>
  */?>


    <!-- <div class="speakers__list-item speakers__list-item_final speakers__list-item_empty">
      <div class="speakers__list-item-photo">
        <img src="img/speakers/photo_empty_short_blue.jpg" alt="" class="speakers__list-item_empty-pic_desctop">
        <img src="img/speakers/photo_empty_blue.jpg" alt="" class="speakers__list-item_empty-pic_mobile">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Панель спикеров продолжает пополняться </p>
        <p class="speakers__list-item-info"></p>
      </div>
      
    </div>
    <div class="speakers__list-item speakers__list-item_last">
      <div class="speakers__list-item-add"><span>brain 2020</span></div>
    </div> -->
    
</section>