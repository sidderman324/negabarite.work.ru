<footer class="page-footer">



  <div class="container page-footer__inner">



    <div class="page-footer__column">



      <div class="footer-link">



        <p class="footer-link__text">Дорожно-транспортные средства</p>







        <ul>

            <?php global $gorod; ?>

          <li class="footer-link__item"><a href="/arenda-buldozerov<?= $gorod ?>/" class="footer-link__link">Бульдозеры</a></li>

          <li class="footer-link__item"><a href="/arenda-ekskavatorov<?= $gorod ?>/" class="footer-link__link">Экскаваторы</a></li>

          <li class="footer-link__item"><a href="/arenda-pogruzchikov<?= $gorod ?>" class="footer-link__link">Погрузчики</a></li>

          <li class="footer-link__item"><a href="/arenda-samosvalov<?= $gorod ?>/" class="footer-link__link">Самосвалы</a></li>

          <li class="footer-link__item"><a href="/arenda-avtokranov<?= $gorod ?>/" class="footer-link__link">Автокраны</a></li>

          <li class="footer-link__item"><a href="/arenda-dorozhnyh-katkov<?= $gorod ?>/" class="footer-link__link">Катки дорожные</a></li>

          <li class="footer-link__item"><a href="/arenda-asfaltoukladchikov<?= $gorod ?>/" class="footer-link__link">Асфальтоукладчики</a></li>

          <li class="footer-link__item"><a href="/arenda-burovoj-ustanovki<?= $gorod ?>/" class="footer-link__link">Буровые установки</a></li>



        </ul>



      </div>



    </div>







    <div class="page-footer__column">



      <div class="footer-link">



        <p class="footer-link__text">Услуги</p>



        <ul>



          <li class="footer-link__item"><a href="/remont-dorog<?= $gorod ?>/" class="footer-link__link">Ремонт дорог</a></li>



          <li class="footer-link__item"><a href="/stroitelstvo-dorog<?= $gorod ?>/" class="footer-link__link">Строительство дорог</a></li>



          <li class="footer-link__item"><a href="/stroitelstvo-nefteprovodov<?= $gorod ?>/" class="footer-link__link">Строительство нефтепроводов</a></li>



          <li class="footer-link__item"><a href="/stroitelstvo-gazoprovodov<?= $gorod ?>/" class="footer-link__link">Строительство газопроводов</a></li>



          <li class="footer-link__item"><a href="/otsypka-dorog<?= $gorod ?>/" class="footer-link__link">Отсыпка дорог</a></li>



        </ul>



      </div>







      <div class="footer-link">



        <p class="footer-link__text">Продажа</p>



        <ul>



          <li class="footer-link__item"><a href="/katalog-tehniki/" class="footer-link__link">Продажа дорожно-стройтельной техники</a></li>



          <li class="footer-link__item"><a href="/katalog-tehniki/" class="footer-link__link">Продажа дизельного топлива</a></li>



        </ul>



      </div>



    </div>







    <div class="page-footer__column">



     <!-- <a href="#" class="page-footer__link">Выполненные объекты</a>-->



      <a href="/about/" class="page-footer__link">О компании</a>



      <a href="/contacts/" class="page-footer__link">Контакты</a>







      <div class="page-footer__contant-wrapper">







        <a href="tel:+78007770508" class="page-footer__phone"><? echo (get_option('contact_phone'.$gorod))? get_option('contact_phone'.$gorod): get_option('contact_phone') ?></a>



        <a href="mailto:zakaz@negabarite.com" class="page-footer__mail"><?=get_option('contact_email') ?></a>


      <?php if (get_option('contact_adres'.$gorod)){ ?>

          <a href="https://yandex.ru/maps/-/CBeRYCqfOD" class="page-footer__address"><? echo get_option('contact_adres'.$gorod) ?></a>
        <?php } else {
          if(get_option('contact_adres')!=''){?>
          <a href="https://yandex.ru/maps/-/CBeRYCqfOD" class="page-footer__address"><? echo get_option('contact_adres') ?></a>
          <?php }
        }
      ?>

      </div>



    </div>







  </div>



  <div class="page-footer__copyright">



    <div class="container page-footer__inner">



      <p class="page-footer__copyright-text">© 2018 ООО «НЕГАБАРИТ ОНЛАЙН»</p>



      <a href="http://kweb.studio/" class="page-footer__copyright-author">Дизайн KWeb</a>



    </div>



  </div>



</footer>





<div class="feedback-form" id="buy-form">



  <form action="<?php echo get_stylesheet_directory_uri() ?>/send_script.php" method="post">



    <div class="feedback-form__row">

      <p class="feedback-form__text">Ваше имя</p>

      <input class="feedback-form__input" type="text" name="yourName" placeholder="Введите имя" size="30" maxlength="50" />

    </div>

    <div class="feedback-form__row">

      <p class="feedback-form__text">Номер телефона</p>

      <input class="feedback-form__input" type="text" name="phoneNumber" placeholder="Введите телефон" size="30" maxlength="50" id="phone" required />

    </div>

    <div class="feedback-form__close"></div>

    <input type="submit" class="feedback-form__submit" value="Отправить заявку">

  </form>





</div>

<div class="feedback-form__bgr-mask"></div>



<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47769283 = new Ya.Metrika2({
                    id:47769283,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47769283" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->