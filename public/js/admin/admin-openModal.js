'use strict';

function openAdminModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;

    modal.classList.add('active');

    setTimeout(() => {
        modal.classList.add('visible');
    }, 10);
}

function closeAdminModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;

    modal.classList.remove('visible');

    setTimeout(() => {
        modal.classList.remove('active');
    }, 300); // соответствует CSS transition
}
