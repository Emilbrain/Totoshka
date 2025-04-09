'use strict';

document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("editCategoryForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        formData.append('_method', 'PUT');

        fetch(form.action, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
            }
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showToast("Категория успешно изменена ✅");
                    setTimeout(() => {
                        location.reload(); // перезагрузка страницы через 1 секунду
                    }, 500);

                } else {
                    showToast("Ошибка при изменении ❌");
                    console.log(data);
                }
            })
            .catch(error => {
                console.error("Ошибка:", error);
                showToast("Ошибка соединения");
            });
    });
});
