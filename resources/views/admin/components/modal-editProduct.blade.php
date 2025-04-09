<div class="modal" id="editProduct">
    <div class="modal__content">
        <span class="modal__close" onclick="closeAdminModal('editProduct')">✖</span>
        <h2>Редактировать категорию</h2>

        <form id="editProductForm" class="modal__form" enctype="multipart/form-data" action="" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" placeholder="Название товара" required>
            <input type="number" name="price" placeholder="Цена (₽)" required>
            <select name="category_id" required>
                <option value="">Категория</option>
                @forelse($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @empty
                    <option value="">Нет категории</option>
                @endforelse
            </select>
            <input type="file" name="image[]" multiple>
            <textarea name="description" placeholder="Описание товара"></textarea>

            <button type="submit" class="btn-submit">Сохранить изменения</button>
        </form>
    </div>
</div>
