// CHECK PASSWORD LENGTH
const inputPassword = document.querySelector('.password');

const message = document.querySelector('.message_password');
inputPassword.addEventListener('keyup', () => {
  if (inputPassword.value.length <= 7) {
    message.textContent = 'Il faut au moins 7 caractères';
  } else {
    message.textContent = 'OK';
  }
})

// CHECK EMAIL FORMAT
const inputEmail = document.querySelector('.email');
const messageEmail = document.querySelector('.message_email');
const patternEmail = /^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/;

inputEmail.addEventListener('keyup', () => {
  if (inputEmail.value.match(patternEmail)) {
    messageEmail.textContent = 'Email valide';
  }
  else {
    messageEmail.textContent = 'Email invalide';
  }
})

// PASSWORD VERIFY
const repeatPassword = document.querySelector('.repeatPassword');
const messageRepeatPassword = document.querySelector('.message_repeat_password');

repeatPassword.addEventListener('keyup', () => {
  if (repeatPassword.value = inputPassword.value) {
    messageRepeatPassword.textContent = 'Les mots de passe correspondent';
    const btnSubmit = document.querySelector('.submit');
    btnSubmit.disabled = false;
  } else {
    messageRepeatPassword.textContent = 'Les mots de passe ne correspondent pas !!!';

  }
})

// PASSSWORD VISIBILITY
const iconVisibility = document.querySelector('.visibility');
iconVisibility.addEventListener('click', () => {
  let type = inputPassword.getAttribute("type") === "password" ? "text" : "password";
  inputPassword.setAttribute("type", type);
})