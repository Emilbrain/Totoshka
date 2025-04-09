'use strict';
function showToast(message) {
    const container = document.getElementById('toast-container');
    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.textContent = message;
    container.appendChild(toast);

    // Удаляем после завершения анимации
    setTimeout(() => {
        toast.remove();
    }, 5000);
}
