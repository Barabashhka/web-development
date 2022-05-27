<?php
  <form method="post" action="register.php">
    <input type="text" placeholder="Ваше имя" value="{%NAME%}" name="your_name" class="input_field"/>
    <input type="email" placeholder="Email" value="{%EMAIL%}" name="your_email" class="input_field"/>
    <select name="your_specialization" class="specialization">
        <option class="name_select">Деятельность</option>
        <option value="Программист">Программист</option>
        <option value="Дизайнер">Дизайнер</option>
        <option value="Маркетолог">Маркетолог</option>
    </select>
    <div class="maincheckbox">
      <input type="checkbox" id="agreement" class="checkbox" name="agree"  value="{%AGREE%}"/>
      <label for="agreement" class="checkbox_text">Согласен получать информационные материалы о старте курса</label>
    </div>
      <input type="submit" value="Записаться на курс" class="submit"/>
  </form>