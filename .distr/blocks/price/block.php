<section class="price">

  <div class="price-header">
    <div class="container">
      <h1 class="price-header__title condensed"><span>Чтобы завершить регистрацию,</span> <br>выберите пакет участия</h1>
    </div>
  </div>
  
  <div class="container">

    <?php /*<div class="price__info">
      <h2 class="price__title title-section">новогоднее удвоение! </h2>
    </div>*/ ?>

    <div class="price__online">
      <div class="price__online-img">
        <img src="img/price/circle.svg" alt="">
      </div>
      <div class="price__online-middle">
        <div class="price__online-middle-title">Online</div>
        {#<!-- <div class="price__online-middle-txt">Устройство синхронного перевода</div> -->#}
        <div class="price__online-middle-txt">Трансляция всех дней форума</div>
        <div class="price__online-middle-txt">Запись на портале <a href="https://synergy.online/" target="_blank" style="text-decoration: underline;">Synergy.Online</a> в течении 2-х недель</div>
        
      </div>
      <div class="price__online-cost">
        <div class="price__online-cost-val"><?=number_format($online_price, 0, ',', ' ')?>&nbsp;₽</div>
        <div data-src="#popup-price__onlinenew" class="price__online-cost-btn button" data-fancybox data-options='{"autoFocus":false}'>Купить</div>
      </div>
    </div>    


    <div class="price__content">

      <div class="price__item">
        <div class="price__item-title title-section">
          <div class="price__item-title-txt">standard
            <div class="price__item-cost"><?=number_format($standard_price, 0, ',', ' ')?>&nbsp;&#x20bd;</div>
          </div>
          <img class="price__item-title-img" src="img/price/price_img_6_blue.png" alt="">
        </div>

          <ul class="price__item-list">
            <li class="price__item-list-item">Очное участие и аккредитация в категории «Standard»</li>
            <li class="price__item-list-item">Сертификат об участии</li>
            <li class="price__item-list-item">Сопровождение искусственным интеллектом на протяжении всего форума</li>
            <!-- <li class="price__item-list-item">Пакет участника</li> -->
          </ul>
        
        <div data-src="#popup-price__standard" class="price__item-button button" data-fancybox data-options='{"autoFocus":false}'>Купить</div>
      </div>

      <div class="price__item">
        <div class="price__item-title title-section">
          <div class="price__item-title-txt">
            Business 
            {#
               <!-- <div class="price__item-cost"><?=number_format($biznes_price, 0, ',', ' ')?>&nbsp;&#x20bd;</div> -->
            #}
           
            <div class="price__item-cost">20 000&nbsp;&#x20bd;</div>
          </div>
          <img class="price__item-title-img" src="img/price/price_img_4_blue.png" alt="">
        </div>

          <ul class="price__item-list">
            <li class="price__item-list-item">Очное участие и аккредитация в категории «Business»</li>
            <li class="price__item-list-item">Сертификат об участии</li>
            <li class="price__item-list-item">Сопровождение искусственным интеллектом на протяжении всего форума</li>
            <!-- <li class="price__item-list-item">Пакет участника</li> -->
            <li class="price__item-list-item">Доступ к платформе <a href="https://synergy.online/" target="_blank" style="text-decoration: underline;">Synergy.Online</a>  на 1 месяц</li>
            <!-- <li class="price__item-list-item">Подарки от партнеров и спонсоров</li> -->
          </ul>
        <div data-src="#popup-price__bussines" class="price__item-button button" data-fancybox data-options='{"autoFocus":false}'>Купить</div>
      </div>

      <div class="price__item">
        <div class="price__item-title title-section">
          <div class="price__item-title-txt">
            VIP
            <div class="price__item-cost"><?=number_format($vip_price, 0, ',', ' ')?>&nbsp;&#x20bd;</div>
          </div>
          <img class="price__item-title-img" src="img/price/price_img_5_blue.png" alt="">
        </div>

          <ul class="price__item-list">
            <li class="price__item-list-item">Очное участие и аккредитация в категории «Vip»</li>
            <li class="price__item-list-item">Сертификат об участии</li>
            <li class="price__item-list-item">Сопровождение искусственным интеллектом на протяжении всего форума</li>
            <!-- <li class="price__item-list-item">Пакет участника</li> -->
            <li class="price__item-list-item">Доступ к VIP lounge на протяжении форума</li>
            <li class="price__item-list-item">VIP – обед</li>
            <li class="price__item-list-item">Доступ к платформе <a href="https://synergy.online/" target="_blank" style="text-decoration: underline;">Synergy.Online</a>  на 6 месяцев</li>
            <!-- <li class="price__item-list-item">Подарки от партнеров и спонсоров</li> -->
          </ul>
        <div data-src="#popup-price__vip" class="price__item-button button" data-fancybox data-options='{"autoFocus":false}'>Купить</div>
      </div>

      <div class="price__item">
        <div class="price__item-title title-section">
          <div class="price__item-title-txt">
            Platinum
            <div class="price__item-cost"><?=number_format($product_platinum_price, 0, ',', ' ')?>&nbsp;&#x20bd;</div>
          </div>
          <img class="price__item-title-img" src="img/price/price_img_6_blue.png" alt="">
        </div>

          <ul class="price__item-list">
            <li class="price__item-list-item">Очное участие и аккредитация в категории «Platinum»</li>
            <li class="price__item-list-item">Сертификат об участии</li>
            <li class="price__item-list-item">Сопровождение искусственным интеллектом на протяжении всего форума</li>
            <!-- <li class="price__item-list-item">Пакет участника</li> -->
            <li class="price__item-list-item">Welcome – сервис</li>
            <li class="price__item-list-item">Доступ к VIP lounge на протяжении форума</li>
            <li class="price__item-list-item">VIP – обед</li>
            <li class="price__item-list-item">МВА - Online</li>
            <!-- <li class="price__item-list-item">Специальные подарки от партнеров и спонсоров форума</li> -->
            <li class="price__item-list-item">Доступ к спикерам</li>
          </ul>
        <div data-src="#popup-price__platinum" class="price__item-button button" data-fancybox data-options='{"autoFocus":false}'>Купить</div>
      </div>



    </div>

    <div class="price__corp">
      <img src="img/price/corp-price.png" alt="" class="price__corp-img">
      <img src="img/price/corp-price_mb.png" alt="" class="price__corp-mb">
    </div>

    <div class="price__table">
      <h2 class="price-header__title condensed">График повышения цен в&nbsp;рублях</h2>
      <div class="dcf-overflow-x-auto" tabindex="0">
        <table class="dcf-table dcf-table-bordered dcf-table-striped dcf-w-100%">
          <thead>
            <tr>
              <th class="dcf-txt-center" scope="col"></th>
              <th class="dcf-txt-center" data-label="ONLINE" scope="col">ONLINE</th>
              <th class="dcf-txt-center" data-label="STANDART" scope="col">STANDART</th>
              <th class="dcf-txt-center" data-label="BUSINESS" scope="col">BUSINESS</th>
              <th class="dcf-txt-center" data-label="VIP" scope="col">VIP</th>
              <th class="dcf-txt-center" data-label="PLATINUM" scope="col">PLATINUM</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="dcf-txt-center" scope="row">до&nbsp;01.12.2022</th>
              <td class="dcf-txt-center" data-label="ONLINE">5&nbsp;000</td>
              <td class="dcf-txt-center" data-label="STANDART">10&nbsp;000</td>
              <td class="dcf-txt-center" data-label="BUSINESS">15&nbsp;000</td>
              <td class="dcf-txt-center" data-label="VIP">45&nbsp;000</td>
              <td class="dcf-txt-center" data-label="PLATINUM">150&nbsp;000</td>
            </tr>
            <tr>
              <th class="dcf-txt-center" scope="row">с&nbsp;01.12.2022</th>
              <td class="dcf-txt-center" data-label="ONLINE">6&nbsp;000</td>
              <td class="dcf-txt-center" data-label="STANDART">13&nbsp;000</td>
              <td class="dcf-txt-center" data-label="BUSINESS">17&nbsp;000</td>
              <td class="dcf-txt-center" data-label="VIP">50&nbsp;000</td>
              <td class="dcf-txt-center" data-label="PLATINUM">160&nbsp;000</td>
            </tr>
            <tr>
              <th class="dcf-txt-center" scope="row">с&nbsp;01.02.2023</th>
              <td class="dcf-txt-center" data-label="ONLINE">6&nbsp;000</td>
              <td class="dcf-txt-center" data-label="STANDART">15&nbsp;000</td>
              <td class="dcf-txt-center" data-label="BUSINESS">20&nbsp;000</td>
              <td class="dcf-txt-center" data-label="VIP">60&nbsp;000</td>
              <td class="dcf-txt-center" data-label="PLATINUM">170&nbsp;000</td>
            </tr>
            <tr>
              <th class="dcf-txt-center" scope="row">с&nbsp;01.03.2023</th>
              <td class="dcf-txt-center" data-label="ONLINE">6&nbsp;000</td>
              <td class="dcf-txt-center" data-label="STANDART">17&nbsp;000</td>
              <td class="dcf-txt-center" data-label="BUSINESS">25&nbsp;000</td>
              <td class="dcf-txt-center" data-label="VIP">70&nbsp;000</td>
              <td class="dcf-txt-center" data-label="PLATINUM">200&nbsp;000</td>
            </tr>
          </tbody>
        </table>
      </div>


    </div>

  </div>
</section>
