'use strict';

function openModal(type) {
    const modal = document.getElementById('auth-modal');
    modal.classList.add('active');

    setTimeout(() => {
        modal.classList.add('visible');
    }, 10);

    switchForm(type); // сразу переключаем на нужную форму
}

function closeModal() {
    const modal = document.getElementById('auth-modal');
    modal.classList.remove('visible');

    setTimeout(() => {
        modal.classList.remove('active');
    }, 300); // время = CSS transition
}

function switchForm(type) {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');

    if (type === 'login') {
        loginForm.style.display = 'block';
        registerForm.style.display = 'none';
    } else {
        loginForm.style.display = 'none';
        registerForm.style.display = 'block';
    }
}
