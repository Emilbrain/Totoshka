// 'use strict';
//
// function openEditModal(id, name, modalId) {
//     const modal = document.getElementById(modalId);
//     const form = document.getElementById('editCategoryForm');
//     const inputName = document.getElementById('edit-category-name');
//
//     inputName.value = name;
//
//     form.action = `admin/category/${id}/edit`
//
//     modal.classList.add('active');
//     setTimeout(() => {
//         modal.classList.add('visible');
//     }, 10);
// }
//
// function closeEditModal(modalId) {
//     const modal = document.getElementById(modalId);
//     if (!modal) return;
//
//     modal.classList.remove('visible');
//
//     setTimeout(() => {
//         modal.classList.remove('active');
//     }, 300); // соответствует CSS transition
// }


'use strict';

function openEditModal({ id, modalId, formId, routePrefix, values = {} }) {
    const modal = document.getElementById(modalId);
    const form = document.getElementById(formId);

    if (!modal || !form) return;

    // Устанавливаем action формы
    form.action = `/${routePrefix}/${id}`;

    // Подставляем все значения из объекта `values`
    for (const [key, value] of Object.entries(values)) {
        const input = form.querySelector(`[name="${key}"]`);
        if (input) input.value = value;
    }

    modal.classList.add('active');
    setTimeout(() => modal.classList.add('visible'), 10);
}

function closeEditModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;

    modal.classList.remove('visible');
    setTimeout(() => modal.classList.remove('active'), 300);
}
