{% from './data.njk' import data as items %}

{% for item in items %}
<div id="popup-speakers-{{item.id}}" class="popup-speakers">
	<div class="popup-speakers__content">

  <img class="popup-speakers__img" src="img/{{item.img}}" alt="">

    <div class="popup-speakers__info">
      <div class="popup-speakers__info-title"><?= _t('speakers-{{ item.id | safe }}-name') ?></div>
      <ul class="popup-speakers__info-txt">
        <?= _t('speakers-{{ item.id | safe }}__popup-info') ?>
      </ul>
    </div>

  </div>
</div>
{% endfor %}


