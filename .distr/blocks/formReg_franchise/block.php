<section class="form_reg_3 form-reg-vertical">
  <div class="container">
  {% macro form( form_class, form_box, form_title, form_subtitle, form_button, form_form, exclude_fields, add_fields, quote_id) %}

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form {{form_class}} form__container">
	<form class="form__content {{ form_box }}" action="<?=$action_franchise?>&quote_id={{quote_id}}&form=franchising">

		<div class="form__header">
			<div class="form__title">{{form_title}}</div>
			<div class="form__subtitle">{{form_subtitle}}</div>
		</div>

    <div class="form__box">

  		{% if not exclude_fields.name %}
      <div class="form__item">
        <input class="form__name form__input" type="text" name="name" placeholder="<?= _t('form__placeholder_name') ?>">
      </div>
			{% endif %}

  		{% if not exclude_fields.phone %}
      <div class="form__item">
        <input class="form__phone form__input" type="text" name="phone" placeholder="<?= _t('form__placeholder_phone') ?>">
      </div>
			{% endif %}

  		{% if not exclude_fields.email %}
      <div class="form__item">
        <input class="form__email form__input" type="email" name="email" placeholder="Email">
      </div>
			{% endif %}

      {% if add_fields.length %}
      {% for item in add_fields %}
      <input type="{{ item.type }}" name="{{ item.name }}" value="{{ item.value }}">
      {% endfor %}
      {% endif %}

      <button type="submit" class="form__item form__button button">{{form_button}}</button>

    </div>

		<div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
			<span>Я соглашаюсь с&nbsp;<a class="privacy-ajax" href="privacy">политикой конфиденциальности</a>, даю согласие на&nbsp;обработку персональных данных и&nbsp;получение рассылок
			</span>
    </div>

    <div class="form__chekbox">
      <input type="checkbox" value="None" id="squaredThree" name="personalDataAgree" checked />
      <label for="squaredThree"></label>
      <span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer_new.pdf" data-fancybox>условиями оферты.</a>
      </span>
    </div>

	</form>
		<a href="#popup-reg" class="popup-button form__button fancybox">{{form_button}}</a>
</div>

{% endmacro %}

<input name="{{ name }}" type="{{ type }}" placeholder="{{ placeholder }}" class="form__input" {{ 'min=1' if type == 'number' }} {{ 'required' if required }} value="{{ value }}">

  </div>

</section>

