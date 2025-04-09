<div class="modal" id="productModal">
    <div class="modal__content">
        <span class="modal__close" onclick="closeAdminModal('productModal')">✖</span>
        <h2>Добавить товар</h2>

        <form id="addProductForm" class="modal__form" enctype="multipart/form-data" action="{{route('admin.products.store')}}" method="post">
            @csrf
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
            <button type="submit" class="btn-submit">Добавить</button>
        </form>
    </div>
</div>

