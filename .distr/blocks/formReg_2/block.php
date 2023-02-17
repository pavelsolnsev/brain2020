{% import 'formReg_1/block.php' as form %}


{% if anchor %}
<section class="form_reg_2 form-reg-vertical lazy" id="form_reg_2">
{% else %}
<section class="form_reg_2 form-reg-vertical lazy">
{% endif %}

  <div class="container">
    {{ form.form( '', 'form-redirect', '<?= _t("form__title") ?>', '', '<?= _t("form__button") ?>', 'popup-form', '', '', '4140' ) }}
  </div>
</section>
