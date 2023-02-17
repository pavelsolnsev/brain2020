{% import 'formReg_1/block.php' as form %}
{% import 'form_ticketless/block.php' as form_ticketless %}
{% import 'form_ticket/block.php' as form_ticket %}
{% import 'formReg_franchise/block.php' as formReg_franchize %}
{% import 'synergycrm_form/macro.php' as synergycrm_form %}

<div id="popup-reg" class="popup-reg form-reg-vertical">
	<div class="container">
		{{ form.form( 'vertical', 'form-redirect', '<?= _t("form__title") ?>', '', '<?= _t("form__button") ?>', 'popup-form', '', '', '4140' ) }}
	</div>
</div>

<div id="popup-reg2" class="popup-reg form-reg-vertical">
  <div class="container">
    {{ form.form( 'vertical', 'form-popup-open', '<?= _t("form__title") ?>', '', '<?= _t("form__button") ?>', 'popup-form', '', '', '4140' ) }}
  </div>
</div>

<div id="popup-partner" class="popup-reg popup-partner form-reg-vertical">
  <div class="container">
    {{ form.form( 'vertical', 'form-popup-open', '<?= _t("form__popup_partner-title") ?>', '', '<?= _t("form__button") ?>', 'popup-form', '', '', '4140' ) }}
  </div>
</div>

<div id="popup-presentation" class="popup-reg popup-presentation form-reg-vertical">
  <div class="container">
    {{ formReg_franchize.form( 'vertical', 'form-popup-open', 'Узнать более подробно', '', 'Зарегистрироваться', 'franchise', '', '', '3644' ) }}
  </div>
</div>

<div id="popup-price-online" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '62125045'},
                       {name: 'event_id', type: 'hidden', value: '145'},
                       {name: 'promocode', type: 'text', value: '', placeholder: 'Промокод', class: 'form__input'}] %}
    {{ form.form( 'vertical', '<?= _t("form__title") ?>', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price1" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '52066800'},
                       {name: 'event_id', type: 'hidden', value: '145'},
                       {name: 'promocode', type: 'text', value: '', placeholder: 'Промокод', class: 'form__input'}] %}
    {{ form.form( 'vertical', '<?= _t("form__title") ?>', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price2" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '52067142'},
                       {name: 'event_id', type: 'hidden', value: '145'},
                       {name: 'promocode', type: 'text', value: '', placeholder: 'Промокод', class: 'form__input'}] %}
    {{ form.form( 'vertical', '<?= _t("form__title") ?>', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price3" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '52067299'},
                       {name: 'event_id', type: 'hidden', value: '145'},
                       {name: 'promocode', type: 'text', value: '', placeholder: 'Промокод', class: 'form__input'}] %}
    {{ form.form( 'vertical', '<?= _t("form__title") ?>', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price4" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '52067538'},
                       {name: 'event_id', type: 'hidden', value: '145'},
                       {name: 'promocode', type: 'text', value: '', placeholder: 'Промокод', class: 'form__input'}] %}
    {{ form.form( 'vertical', '<?= _t("form__title") ?>', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price5" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '52067765'},
                       {name: 'event_id', type: 'hidden', value: '145'},
                       {name: 'promocode', type: 'text', value: '', placeholder: 'Промокод', class: 'form__input'}] %}
    {{ form.form( 'vertical', '<?= _t("form__title") ?>', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price6" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '52067932'},
                       {name: 'event_id', type: 'hidden', value: '145'},
                       {name: 'promocode', type: 'text', value: '', placeholder: 'Промокод', class: 'form__input'}] %}
    {{ form.form( 'vertical', '<?= _t("form__title") ?>', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price7" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '54794596'}, {name: 'event_id', type: 'hidden', value: '145'}] %}
    {{ form_ticketless.form( 'vertical', '', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price8" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '56194139'}, {name: 'event_id', type: 'hidden', value: '145'}] %}
    {{ form_ticketless.form( 'vertical', '', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price9" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '54794596'}, {name: 'event_id', type: 'hidden', value: '145'}] %}
    {{ form_ticketless.form( 'vertical', '', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price10" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '56194952'}, {name: 'event_id', type: 'hidden', value: '145'}] %}
    {{ form_ticketless.form( 'vertical', '', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price11" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '56195725'}, {name: 'event_id', type: 'hidden', value: '145'}] %}
    {{ form_ticketless.form( 'vertical', '', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price12" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '56196675'}, {name: 'event_id', type: 'hidden', value: '145'}] %}
    {{ form_ticketless.form( 'vertical', '', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>

<div id="popup-price13" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '57286849'}, {name: 'event_id', type: 'hidden', value: '145'}] %}
    {{ form_ticketless.form( 'vertical', '', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4140' ) }}
  </div>
</div>


<div id="popup-price__onlinenew" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '118719711'}] %}
    {{ form_ticketless.form( 'vertical', '', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4246' ) }}
  </div>
</div>

<div id="popup-price__bussines" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '118722525'},
    {name: 'tickets_count', type: 'number', value: '1', placeholder: 'Количество билетов', class: 'form__input'}, 
    {name: 'event_id', type: 'hidden', value: '163'}] %}
    {{ form_ticket.form( 'vertical', '', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4460' ) }}
  </div>
</div>

<div id="popup-price__vip" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '118722922'},
    {name: 'tickets_count', type: 'number', value: '1', placeholder: 'Количество билетов', class: 'form__input'}, 
    {name: 'event_id', type: 'hidden', value: '163'}] %}
    {{ form_ticket.form( 'vertical', '', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4460' ) }}
  </div>
</div>

<div id="popup-price__platinum" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '118723226'},
    {name: 'tickets_count', type: 'number', value: '1', placeholder: 'Количество билетов', class: 'form__input'}, 
    {name: 'event_id', type: 'hidden', value: '163'}] %}
    {{ form_ticket.form( 'vertical', '', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4460' ) }}
  </div>
</div>

<div id="popup-price__standard" class="popup-reg form-reg-vertical popup-price">
  <div class="container">
    {% set add_fields=[{name: 'product_id', type: 'hidden', value: '118722227'},
    {name: 'tickets_count', type: 'number', value: '1', placeholder: 'Количество билетов', class: 'form__input'}, 
    {name: 'event_id', type: 'hidden', value: '163'}] %}
    {{ form_ticket.form( 'vertical', '', '', '', 'Купить билет', 'price-ticket', add_fields=add_fields, quote_id='4460' ) }}
  </div>
</div>


