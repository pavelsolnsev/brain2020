{% macro list(array) %}
{% set index = 1 %} {# Индекс для чередования чётных и нечётных карточек #}
{% set item_cycler = cycler('', 3, 4) %}

{% for item in array %}

{% if loop.first %}
{% set item_class = 1 %}
{% elseif loop.last %}
{% set item_class = 'panel' %}
{% else %}
{% set item_class = item_cycler.next() %}
{% endif %}

{% set index = loop.index %}

<div class="speakers__list-item speakers__list-item_{{ item_class }}">
  <div class="speakers__list-item-photo">
    <img src="img/speakers/{{item.id}}.jpg" alt="">
  </div>
  <div class="speakers__list-item-text">
    <p class="speakers__list-item-name"><?= _t('speakers-{{ item.id | safe }}-name') ?></p>
    <p class="speakers__list-item-info"><?= _t('speakers-{{ item.id | safe }}-info') ?></p>
  </div>
  {% if item.link %}
  <a href="#popup-speakers-{{item.id}}" class="speakers__list-item-button fancybox" data-fancybox><?= _t('speakers__button') ?></a>
  {% endif %}
</div>
{% endfor %}

<?php if ($lang != 'en') { ?>
  {#<!-- class="speakers__list-item speakers__list-item_odd {{ 'speakers__list-item_even' if index % 2 }}" -->
  <div class="speakers__list-item speakers__list-item4 speakers__list-item_empty {% if index % 2 %} speakers__list-item_even {% else %} speakers__list-item_odd {% endif %}">
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
  </div>#}
<?php } ?>
{% endmacro %}
