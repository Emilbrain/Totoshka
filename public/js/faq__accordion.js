'use strict';

document.querySelectorAll('.faq-question').forEach((item) => {
    item.addEventListener('click', () => {
        const faqItem = item.parentElement;
        faqItem.classList.toggle('active');

        // Закрыть остальные
        document.querySelectorAll('.faq-item').forEach((el) => {
            if (el !== faqItem) el.classList.remove('active');
        });
    });
});

