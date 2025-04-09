'use strict';

document.addEventListener("DOMContentLoaded", function () {
    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.querySelectorAll('.thumbnail');

    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', () => {
            // Меняем основное изображение
            mainImage.src = thumb.src;

            // Сброс всех .active
            thumbnails.forEach(t => t.classList.remove('active'));
            thumb.classList.add('active');
        });
    });
});

