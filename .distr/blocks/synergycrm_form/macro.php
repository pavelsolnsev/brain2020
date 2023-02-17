{% macro form( form_class, form_box, form_title, form_subtitle, form_button, form_form, exclude_fields, add_fields, quote_id) %}

<?php /*  exclude_fields={name: true, email: true} | add_fields=[{name: 'product_id', type: 'hidden', value: '37823942'}]*/ ?>

<div class="form {{form_class}} form__container">
	<form action="https://app.synergycrm.ru/web_forms/order" method="POST" class="form__content nolander {{ form_box }}">

		<div class="form__header">
			<div class="form__title">{{form_title}}</div>
			<div class="form__subtitle">{{form_subtitle}}</div>
		</div>

		<div class="form__box">

			{% if not exclude_fields.name %}
			<div class="form__item">
				<input class="form__name form__input" type="text" name="contact[first_name]" placeholder="<?= _t('form__placeholder_name') ?>">
			</div>
			{% endif %}

			{% if not exclude_fields.phone %}
			<div class="form__item">
				<input class="form__phone form__input" type="text" name="contact[general_phone]" placeholder="<?= _t('form__placeholder_phone') ?>">
			</div>
			{% endif %}

			{% if not exclude_fields.email %}
			<div class="form__item">
				<input class="form__email form__input" type="text" name="contact[email]" placeholder="Email">
			</div>
			{% endif %}

			{% if add_fields.length %}
			{% for item in add_fields %}
			<input type="{{ item.type }}" name="{{ item.name }}" value="{{ item.value }}" placeholder="{{ item.placeholder }}" class="{{ item.class }}">
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
			<span>Оплачивая, Вы соглашаетесь с &nbsp;<a href="files/offer.pdf" data-fancybox>условиями оферты.</a>
			</span>
		</div>

		<!-- Название -->
		<input type="hidden" name="order[name]" value="">
		<!-- источник -->
		<input type="hidden" name="source_id" value="44766">
		<!-- обязательные поля. не удалять! -->
		<?php if ($version == 'online') : ?>
		<input type="hidden" name="redirect_url" value="https://brain2020.ru/online-price/">
		<?php else : ?>
		<input type="hidden" name="redirect_url" value="https://brain2020.ru/ochnoe/">
		<?php endif; ?>
		<input type="hidden" name="token" value="5d387e0d7c1ffb603942677f4af0fd98">
		<input type="hidden" name="responsible_id" value="17279">
		<input type="hidden" name="contact_duplicate_finder_rule_id" value="">
		<input type="hidden" name="company_duplicate_finder_rule_id" value="">

	</form>
	<a href="#popup-reg" class="popup-button form__button fancybox">{{form_button}}</a>
</div>

{% endmacro %}
