<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Лабораторная работа 10</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Roboto&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="popup-background">
      <div class="mainform">
      <img class="mainform__cross" width="30" height="30" src="images/cross.webp">
      <img class="mainform__welcome" width="297" height="212" src="images/Welcome.webp">
      <p class="mainform__header">Записаться на курс</p>
      <form method="post" action="form__handler.php">
        <input type="text" placeholder="Ваше имя" name="your_name" class="mainform__input-field"/>
        <input type="email" placeholder="Email" name="your_email" class="mainform__input-field"/>
        <select name="your_specialization" class="mainform__specialization">
          <option class="specialization__name-select">Деятельность</option>
          <option>Программист</option>
          <option>Дизайнер</option>
          <option>Маркетолог</option>
        </select>
        <div class="mainform__checkbox">
          <input type="checkbox" id="agreement" class="mainform__checkbox-check" name="agree"/>
          <label for="agreement" class="mainform__checkbox-text">Согласен получать информационные материалы о старте курса</label>
        </div>
        <input type="submit" value="Записаться на курс" class="mainform__submit"/>
      </form>
    </div>
  </div> 
    <div class="header">
      <img class="header__logo contain_wrapper" width="165" height="26" src="images/logo.svg" />
      <div class="header__investments">
        <p class="header__investments-part">Что будет на курсе?</p>
        <p class="header__investments-part">Вопросы</p>
        <p class="header__investments-part">Автор</p>
      </div>
      <div class="header__button contain_wrapper">
        <span class="header__button-text">Записаться на курс</span>
      </div>
    </div>
    <div class="mainscreen">
      <div class="mainscreen__up">
        <p class="mainscreen__up-header">Не <span class="pink">делай</span> это</p>
        <img class="mainscreen__up-image contain_wrapper" width="762" height="637" src="images/Done.webp" />
      </div>
      <div class="mainscreen__down">
        <p class="mainscreen__down-text">Онлайн-курс для творческих людей, о том, как управлять своим временем </p>
        <div class="mainscreen__button contain_wrapper">
          <span class="mainscreen__button-text">Записаться на курс</span>
        </div>
      </div>
    </div>
    <div class="benefits">
      <div class="benefits__blocks">
        <div class="benefits__time contain_wrapper">
          <img class="benefits__time-icon" width="60" height="60" src="images/Icon1.svg"  />
          <p class="benefits__text">Для тех, у кого слишком много идей и слишком мало времени</p>
        </div>
        <div class="benefits__notebooks contain_wrapper">
          <img class="benefits__notebooks-icon" width="60" height="60" src="images/Icon2.svg"  />
          <p class="benefits__text">Метод «списка не дел», который позволит успевать и реализовывать</p>
        </div>
        <div class="benefits__target contain_wrapper">
          <img class="benefits__target-icon" width="60" height="60" src="images/Icon3.svg"  />
          <p class="benefits__text">Курс научит творческих людей сосредоточиваться</p>
        </div>
      </div>
    </div>
    <div class="problems">
      <div class="problems__up">
        <img class="problems__up-image1 contain_wrapper" width="538" height="476" src="images/Finances.webp" />
        <div class="problems__up-right">
          <h1 class="problems__right-header">Ты не успеешь</h1>
          <p class="problems__right-text">Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей. Как прибавить суткам часы, рассмотрим в нашем курсе.</p>
        </div>
      </div>
      <div class="problems__down">
        <div class="problems__down-left">
          <h1 class="problems__left-header">Опять дедлайн</h1>
          <p class="problems__left-text">В мире, где столько всего интересного, когда же успевать жить?</p>
        </div>
        <img class="problems__down-image2 contain_wrapper" width="504" height="691" src="images/MindBlowing.webp" />
      </div>
    </div>
    <div class="opportunities" >
      <h1 class="opportunities__header">На курсе ты <span class="pink">сможешь</span></h1>
      <div class="opportunities__blocks">
        <div class="opportunities__blocks-up">
          <div class="opportunities__block contain_wrapper">
            <img class="opportunities__l1-image" width="39" height="49" src="images/l1.svg">
            <p class="opportunities__text">Понять, что нужно делать, а что делать не стоит.</p>
          </div>
          <div class="opportunities__block contain_wrapper">
            <img class="opportunities__l2-image" width="36" height="49" src="images/l2.svg">
            <p class="opportunities__text">Перестать себя искусственно ограничивать.</p>
          </div>
          <div class="opportunities__block contain_wrapper">
            <img class="opportunities__l3-image" width="46" height="49" src="images/l3.svg">
            <p class="opportunities__text">Определить сильные стороны и начать использовать слабые.</p>
          </div>
        </div>
        <div class="opportunities__blocks-bottom">
          <div class="opportunities__block contain_wrapper">
            <img class="opportunities__l4-image" width="41" height="49" src="images/l4.svg">
            <p class="opportunities__text">Научиться достигать любой цели в 3 понятных шага.</p>
          </div>
          <div class="opportunities__block contain_wrapper">
            <img class="opportunities__l5-image" width="51" height="49" src="images/l5.svg">
            <p class="opportunities__text">Сотрудничать эффективно и с правильными людьми.</p>
          </div>
          <div class="opportunities__block contain_wrapper">
            <img class="opportunities__l6-image" width="36" height="49" src="images/l6.svg">
            <p class="opportunities__text">Оптимизировать общение с клиентами и проведение совещаний.</p>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <img class="footer__logo contain_wrapper" width="165" height="26" src="images/footerlogo.svg">
    </footer>
    <script defer src="pop-up.js"></script>
  </body>
</html>