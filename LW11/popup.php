<section class="popup-bg">
  <div class="popup">
  <button class="btn_close-popup"><img src="images/close.svg" alt=""></button>
    <div class="popup__content">
      <img src="images/welcome.png" class="popup__image" alt="">
      <h2 class="form__title">Записаться на курс</h2>
      <form class="popup-form" method="POST">
        <input class="popup__cell" id='name' name="name" type="text" placeholder="Ваше имя">
        <input class="popup__cell" id="email" name="email" type="text" placeholder="Email">
        <select class="popup__cell popup__choose" id="profession" name="profession" placeholder="Деятельность">
          <option value="undefined" selected disabled hidden>Деятельность</option>
          <option value="Программист" class="popup__choose_elem">Программист</option>
          <option value="Дизайнер" class="popup__choose_elem">Дизайнер</option>
          <option value="Маркетолог" class="popup__choose_elem">Маркетолог</option>
        </select>
        <div class="checkbox">
          <input class="agreement_btn" id="agreement" name="checkbox" type="checkbox">
          <label class="agreement-text" for="agreement">Согласен получать информационные материалы о старте курса</label>
        </div>
      </form>
      <button class="form__button">Записаться на курс</button>
    </div>
  </div>
</section>