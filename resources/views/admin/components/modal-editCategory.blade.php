<div class="modal" id="editCategory">
    <div class="modal__content">
        <span class="modal__close" onclick="closeAdminModal('editCategory')">✖</span>
        <h2>Редактировать категорию</h2>

        <form id="editCategoryForm" class="modal__form" enctype="multipart/form-data" action="" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" id="edit-category-name" placeholder="Название категории" required>

            <button type="submit" class="btn-submit">Сохранить изменения</button>
        </form>
    </div>
</div>
