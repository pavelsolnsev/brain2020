<section class="banner lazy" id="banner">
    <h2 class="banner__title title-section">При поддержке Института<br> Психологии</h2>
    <div class="container">
        <div class="banner__content">
            <div class="banner__content-title">Институт психологии-это:</div>
            <ul class="banner__content-list">
                <li>
                    <img src="img/banner/banner-icon-1.svg" alt="">
                    <p>бакалавриат, магистратура, краткосрочные программы дополнительного образования</p>
                </li>
                <li>
                    <img src="img/banner/banner-icon-2.svg" alt="">
                    <p>современные учебные планы, включающий в&nbsp;себя основы нейропсихологии, педагогики, консультативной психологии и&nbsp;психогенетики</p>
                </li>
                <li>
                    <img src="img/banner/banner-icon-3.svg" alt="">
                    <p>возможность обучения на&nbsp;дистанционной форме, в&nbsp;любое удобное время</p>
                </li>
                <li>
                    <img src="img/banner/banner-icon-4.svg" alt="">
                    <p>преподаватели- действующий психологи с&nbsp;огромным багажом знаний</p>
                </li>
                <li>
                    <img src="img/banner/banner-icon-5.svg" alt="">
                    <p>собственная психологическая лаборатория, оснащенная оборудованием для практической диагностики</p>
                </li>
                <li>
                    <img src="img/banner/banner-icon-6.svg" alt="">
                    <p>Диплом государственного образца и&nbsp;Европейское приложение, которые позволят Вам практиковать психологию в&nbsp;любом уголке мира</p>
                </li>
            </ul>
            <div class="banner__content-text">Поступай в&nbsp;Институт &laquo;Психологии&raquo; и&nbsp;получи образование<br> для жизни и&nbsp;бизнеса!</div>
        </div>
    </div>
    {% import 'formReg_1/block.php' as form %}
    <div class="form_reg_3 form-reg-vertical">
        <div class="container">
            {{ form.form( '', '', '<?= _t("form__title_faculty") ?>', '', '<?= _t("form__button_more") ?>', 'psychology', '', '', '4351'  ) }}
        </div>
    </div>
</section>

