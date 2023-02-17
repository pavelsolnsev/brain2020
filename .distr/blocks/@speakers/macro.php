{% macro list(array) %}
{% set index = 1 %} {# Индекс для чередования чётных и нечётных карточек #}
{% for item in array %}
{% set index = loop.index %}
    <div class="speakers__list-item {{item.class}}">
        <div class="speakers__list-item-photo">
            <img src="img/speakers/{{item.id}}.jpg" alt="">
        </div>
        <div class="speakers__list-item-text">
            <p class="speakers__list-item-name"><?= _t('speakers-{{ item.id | safe }}-name') ?></p>
            <p class="speakers__list-item-info"><?= _t('speakers-{{ item.id | safe }}-info') ?></p>
        </div>
        <a href="#popup-speakers-{{item.id}}" class="speakers__list-item-button fancybox" data-fancybox><?= _t('speakers__button') ?></a>
    </div>
{% endfor %}
    <?php if ($lang != 'en') { ?>
    <!-- <div class="speakers__list-item speakers__list-item_odd {{ 'speakers__list-item_even' if index % 2 }}">  -->
    <!-- <div class="speakers__list-item speakers__list-item4 speakers__list-item_empty {% if index % 2 %} speakers__list-item_even {% else %} speakers__list-item_odd {% endif %}"> 
      <div class="speakers__list-item-photo speakers__list-item-photo_1">
        <div class="speakers__list-item-photo-inner">
          <img src="img/speakers/empty.png" alt="">
        </div>
      </div>
      <div class="speakers__list-item-photo speakers__list-item-photo_2">
        <img src="img/speakers/speaker_empty.png" class="speakers__list-item-photo_desktop" alt="">
        <img src="img/speakers/nospeaker.jpg" class="speakers__list-item-photo_tablet" alt="">
      </div>
      <div class="speakers__list-item-text">
        <p class="speakers__list-item-name">Панель спикеров продолжает пополняться </p>
      </div>
    </div> -->
    <?php } ?>
{% endmacro %}