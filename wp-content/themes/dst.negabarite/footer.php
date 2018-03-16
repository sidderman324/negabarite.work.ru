<footer class="page-footer">
  <div class="container page-footer__inner">
    <div class="page-footer__column">
      <div class="footer-link">
        <p class="footer-link__text">Дорожно-транспортные средства</p>

        <ul>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Бульдозеры</a></li>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Экскаваторы</a></li>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Погрузчики</a></li>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Самосвалы</a></li>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Автокраны</a></li>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Катки дорожные</a></li>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Асфальтоукладчики</a></li>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Буровые установки</a></li>
        </ul>
      </div>
    </div>

    <div class="page-footer__column">
      <div class="footer-link">
        <p class="footer-link__text">Услуги</p>
        <ul>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Ремонт дорог</a></li>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Строительство дорог</a></li>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Строительство нефтепроводов</a></li>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Строительство газопроводов</a></li>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Отсыпка дорог</a></li>
        </ul>
      </div>

      <div class="footer-link">
        <p class="footer-link__text">Продажа</p>
        <ul>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Продажа дорожно-стройтельной техники</a></li>
          <li class="footer-link__item"><a href="#" class="footer-link__link">Продажа дизельного топлива</a></li>
        </ul>
      </div>
    </div>

    <div class="page-footer__column">
      <a href="#" class="page-footer__link">Выполненные объекты</a>
      <a href="#" class="page-footer__link">О компании</a>
      <a href="/contacts/" class="page-footer__link">Контакты</a>

      <div class="page-footer__contant-wrapper">
        <a href="tel:+78001000625" class="page-footer__phone">8-800-1000-625</a>
        <a href="tel:+73432260354" class="page-footer__phone">8-343-226-03-54</a>
        <a href="mailto:zakaz@negabarite.com" class="page-footer__mail">zakaz@negabarite.com</a>
        <a href="https://yandex.ru/maps/-/CBeRYCqfOD" class="page-footer__address">Екатеринбург,<br>ул. Малышева, д. 51</a>
      </div>
    </div>

  </div>
  <div class="page-footer__copyright">
    <div class="container page-footer__inner">
      <p class="page-footer__copyright-text">© 2018 ООО «НЕГАБАРИТ ОНЛАЙН»</p>
      <a href="" class="page-footer__copyright-author">Дизайн KWeb</a>
    </div>
  </div>
</footer>


<div class="feedback-form" id="buy-form">
  <form action="" method="post">
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

  <?php

  if (isset($_POST["yourName"])) { $person_name = $_POST["yourName"];}
  if (isset($_POST["phoneNumber"])) { $person_phone = $_POST["phoneNumber"];}


  $mail_to = "syd.phoenix@gmail.com"; 
// info@kweb.studio
  $mail_from = "Новая заявка на ДСТ Negabarite.ru" . "\n";
  $mail_body = '<html>  
  <head>  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
  <title>Новая заявка на сайте ДСТ Negabarite.ru</title>  
  </head>
  <body>  
  <table width="100%" cellpadding="0" cellspacing="0"><tr><td>

  <table id="top-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><img src="https://png.icons8.com/ios/50/000000/da-vinci.png" style="width: 20px; height: 20px;"></td><td><p style="margin: 5px 0; padding-left: 10px;">От кого: '. $person_name .'</p></td></tr></table>

  <table id="main" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><img src="https://png.icons8.com/ios/50/000000/phone.png" style="width: 20px; height: 20px;"></td><td><p style="margin: 5px 0; padding-left: 10px;">Номер телефона: '.$person_phone.'</p></td></tr></table>
  
  </tr></td>
  </table>
  </body>  
  </html>';
  $headers  = "Content-type: text/html; charset=utf-8 \r\n";

  wp_mail($mail_to, $mail_from, $mail_body, $headers);

  header( 'Location: http://negabarite.ru/', true, 301 );
  echo $mail_body;
  ?>
</div>
<div class="feedback-form__bgr-mask"></div>

