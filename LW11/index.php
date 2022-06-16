<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport">
  <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/popup.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Roboto&family=Roboto+Condensed&display=swap" rel="stylesheet">
  <script src="script/script.js" defer></script>
  <title>Dont do it</title>
</head>
<body>
  <header class="header">
    <img class="header__logo" src="images/logo_headers.svg" alt="logo-header">
    <div class="header__interactive">
      <div class="header__menu">
        <ul class="header__list">
          <li class="header__list__element">Что будет на курсе?</li>
          <li class="header__list__element">Вопросы</li>
          <li class="header__list__element">Автор</li>
        </ul>
      </div>
      <div class="button__popup button_short">Записаться на курс</div>
    </div>
  </header>
  <main>
    <section class="offer">
      <div class="offer__content">
        <h1 class="offer__title">Не <span class="pink">делай</span> это</h1>
        <p class="offer__text text">Онлайн-курс для творческих людей, о том, как управлять своим временем</p>
        <div class="button__popup button_long">Записаться на курс</div>
      </div>
      <img class="offer__img" src="images/main_img.png" alt="">
    </section>

    <section class="features">
      <div class="features__blocks features__block1">
        <img class="features__img" src="images/time.png" alt="">
        <h3 class="features__description">Для тех, у кого слишком много идей и слишком мало времени</h3>
      </div>

      <div class="features__blocks features__block2">
        <img class="features__img" src="images/notepad.png" alt="">
        <h3 class="features__description">Метод «списка не дел», который позволит успевать и реализовывать</h3>
      </div>

      <div class="features__blocks features__block3">
        <img class="features__img" src="images/target.png" alt="">
        <h3 class="features__description">Курс научит творческих людей сосредоточиваться</h3>
      </div>
    </section>

    <section class="reasoning">
      <div class="reasoning__first-block">
        <img class="reasoning__img" src="images/finances.png" alt="">
        <div class="reasoning__first-block__content">
          <h2 class="reasoning__heading">Ты не успеешь</h2>
          <p class="reasoning__first-block__text">
           Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей.
           Как прибавить суткам часы, рассмотрим в нашем курсе.
          </p>
        </div>
      </div>

      <div class="reasoning__second-block">
        <div class="reasoning__second-block__content">
          <h2 class="reasoning__heading">Опять дедлайн</h2>
          <p class="reasoning__second-block__text">В мире, где столько всего интересного, когда же успевать жить?</p>
        </div>
        <img class="reasoning__img" src="images/mind_blowing.png" alt="">
      </div>
    </section>

    <section class="description">
      <h2 class="description__heading">На курсе ты <span class="pink">сможешь</span></h2>

      <div class="description__blocks">
        <div class="description__block description__block1">
          <img src="images/one_fing.png" alt="">
          <p class="description__text">Понять, что нужно делать, а что делать не стоит.</p>
        </div>

        <div class="description__block description__block2">
          <img src="images/two_fings.png" alt="">
          <p class="description__text">Перестать себя искусственно ограничивать.</p>
        </div>

        <div class="description__block description__block3">
          <img src="images/three_fings_first.png" alt="">
          <p class="description__text">Определить сильные стороны и начать использовать слабые.</p>
        </div>

        <div class="description__block description__block4">
          <img src="images/four_fings.png" alt="">
          <p class="description__text">Научиться достигать любой цели в 3 понятных шага.</p>
        </div>

        <div class="description__block description__block5">
          <img src="images/five_fings.png" alt="">
          <p class="description__text">Сотрудничать эффективно и с правильными людьми.</p>
        </div>

        <div class="description__block description__block6">
          <img src="images/three_fings_second.png" alt="">
          <p class="description__text">Оптимизировать общение с клиентами и проведение совещаний.</p>
        </div>
      </div>
    </section>
  </main>
  <?php
    include "popup.php";
  ?>
  <footer class="footer">
    <img src="images/logo_footer.svg" alt="logo-footer">
  </footer>
</body>
</html>