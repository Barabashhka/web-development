const button = document.getElementById('button');
const dataDiv = document.querySelector('.data');

function addTextElemToContainer(container, text) {
	const elem = document.createElement('p');
	elem.innerHTML = text;
	elem.classList.add('text');
	container.appendChild(elem);
}

function viewUsers(users) {
   if (Object.keys(users).length === 0) {
      const notFound = document.createElement('p');
      notFound.innerHTML = 'Сохранённых пользователей нет';
      notFound.classList.add('text')
      dataDiv.appendChild(notFound);
      return;
   } 

   for (let i = 0; i < Object.keys(users).length; i++) {
      const userContainer = document.createElement('div');
      dataDiv.appendChild(userContainer);
      userContainer.classList.add('data__user');

      const img = document.createElement('img');
      img.src  = 'images/icon.svg'
      img.alt = 'icon'
      userContainer.appendChild(img)
      img.classList.add('icon');

      for (key in users[i]) {
         addTextElemToContainer(userContainer, users[i][key]);
      }
   }
}

button.addEventListener('click', () => {
   dataDiv.innerHTML = '';

   fetch('handler.php', {'method': 'GET'})
   .then(response => response.json())
   .then(data => {
      viewUsers(data);
   })
})