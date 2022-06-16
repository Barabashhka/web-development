const popupBg = document.querySelector('.popup-bg');
const popupContent = document.querySelector('.popup__content')
const openPopupBtn = document.querySelectorAll('.button__popup');
const closePopup = document.querySelector('.btn_close-popup');
const sendPopupBtn = document.querySelector('.form__button');
const popup = document.querySelector('.popup');

function removeErrorMessage() {
   const error = popup.querySelector('.popup__error-message');
   if (!error) {
      return
   }
   popupContent.classList.remove('disable');
   popup.removeChild(error);
}

function closeForm() {
   popupBg.classList.remove('active')
   popupContent.classList.remove('active')
   const error = popup.querySelector('.popup__error-message')
   if (error) {
      removeErrorMessage()
   }
}

function openForm() {
   popupBg.classList.add('active')
   popupContent.classList.add('active')
}

openPopupBtn.forEach((button) => {
   button.addEventListener("click", () => {
      openForm()
   })
})

closePopup.addEventListener('click', () => {
   closeForm()
})

document.addEventListener('click', (e) => {
   if (e.target === popupBg) {
      closeForm()
   }
})

document.addEventListener('keydown', (e) => {
   if (e.key === "Escape") {
      closeForm()
   }
})

const email_regex = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
function emailValidate(email) {
   return email !== '' && email_regex.test(email);
}

const name_regex = /^[a-zA-Zа-яА-ЯеЁ]+$/i;
function nameValidate(name) {
   return name !== '' && name_regex.test(name);
}

function setColor(inputElement, isValid) {
	if (isValid) {
		inputElement.style.borderColor = '#C0C0C0';
	} else {
		inputElement.style.borderColor = '#EE5858';
	}
}
function validate(emailInput, nameInput, professionInput) {
   let isEmailValid = emailValidate(emailInput.value);
   let isNameValid = nameValidate(nameInput.value);
   let isProfessionValid = professionInput.value != 'undefined';

   setColor(emailInput, isEmailValid);

   setColor(nameInput, isNameValid);

   setColor(professionInput, isProfessionValid);

   return isEmailValid && isNameValid && isProfessionValid;
}

const emailInput = document.getElementById('email');
const nameInput = document.getElementById('name');
const professionInput = document.getElementById('profession');
const agreementCheckbox = document.getElementById('agreement');

sendPopupBtn.addEventListener('click', () => {
   if (!validate(emailInput, nameInput, professionInput)) {
      alert('Проверьте правильность введённых данных.');
      return;
   }

   const data = {
      "name": nameInput.value,
      "email": emailInput.value,
      "profession": professionInput.value,
      "agreement": agreementCheckbox.checked
   }

   fetch('form_handler.php', {
      method: "POST",
      headers: {
         "Content-type": "application/json; charset=utf-8"
      },
      body: JSON.stringify(data)
   })
   .then(response => response.text())
   .then(data => {
      console.log(data);
      popupBg.classList.remove('active');
      popup.classList.remove('active');
      nameInput.value = '';
      emailInput.value = '';
      professionInput.value = 'undefined';
      agreementCheckbox.checked = 0;
   })
   .catch(() => {
      popupContent.classList.add('disable');
      const error = document.createElement('h2');
      error.innerHTML = 'Упс.. Произошла ошибка!';
      error.classList.add('popup__error-message')
      popup.appendChild(error);
   })

})
