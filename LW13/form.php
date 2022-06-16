<div class="popup-background">
  <div class="mainform">
    <img class="mainform__cross" src="images/cross.png">
    <img class="mainform__welcome" src="images/Welcome.png">
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