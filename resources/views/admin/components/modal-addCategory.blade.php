<div class="modal" id="categoryModal">
    <div class="modal__content">
        <span class="modal__close" onclick="closeAdminModal('categoryModal')">✖</span>
        <h2>Добавить категорию</h2>

        <form id="addCategoryForm" class="modal__form" enctype="multipart/form-data" action="{{route('admin.category.store')}}">
            @csrf
            <input type="text" name="name" placeholder="Название категория" required>
            <button type="submit" class="btn-submit">Добавить</button>
        </form>
    </div>
</div>

