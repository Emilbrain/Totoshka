'use strict';

document.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll('.modal__form');

    forms.forEach((form) => {
        form.addEventListener('submit', async function (e) {
            e.preventDefault();

            // Очистка ошибок
            form.querySelectorAll(".error-message").forEach(el => el.innerHTML = "");
            form.querySelectorAll(".input-error").forEach(el => el.classList.remove("input-error"));

            const formData = new FormData(form);

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                        "Accept": "application/json" // 💥 обязательно
                    },
                    body: formData
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    if (form.id === "registerForm") {
                        switchForm('login');
                        showToast("Вы успешно зарегистрировались! Войдите в аккаунт.");
                    } else {
                        closeModal();
                        window.location.href = data.role === 'admin' ? "/admin" : "/profile";
                    }
                } else if (response.status === 422 && data.errors) {
                    for (let field in data.errors) {
                        const errorDiv = form.querySelector(`#error-${form.id}_${field}`);
                        const inputField = form.querySelector(`#error-${form.id}_${field}`);

                        if (errorDiv) errorDiv.innerText = data.errors[field][0];
                        if (inputField) inputField.classList.add("input-error");
                    }
                } else {
                    console.warn("Неизвестная ошибка:", data);
                }

            } catch (error) {
                console.error("Ошибка запроса:", error);
            }
        });
    });
});
