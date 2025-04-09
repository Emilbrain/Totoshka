@extends('admin.admin-template.admin')
@section('content')
    <section class="admin-section">
        <div class="admin-table-header">
            <h2>Список товаров</h2>
            <button onclick="openAdminModal('productModal')" class="add-product-btn">➕ Добавить товар</button>
        </div>

        <table class="admin-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Категория</th>
                <th>Фото</th>
                <th>Описание</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}} ₽</td>
                    <td>{{$product->category->name}}</td>
                    <td>
                        @forelse($product->images as $image)
                            <img class="admin__img" src="{{asset('storage/' . $image->path)}}" alt="{{$product->name}}">
                        @empty
                            Нет изображений
                        @endforelse
                    </td>
                    <td>
                        <div class="description-scroll">
                            {{ $product->description }}
                        </div>
                    </td>
                    <td>
                        {{--                        <button onclick="openEditModal('{{$product->id}}', '{{$product->name}}','{{$product->price}}','{{$product->category->name}}','{{$product->description}}', 'editProduct')" class="action-btn edit">✏️</button>--}}
                        <button class="action-btn edit" onclick="openEditModal({
                            id: {{$product->id}},
                            modalId: 'editProduct',
                            formId: 'editProductForm',
                            routePrefix: 'admin/products',
                            values: {
                                name: '{{$product->name}}',
                                price: {{$product->price}},
                                description: '{{$product->description}}',
                                category_id: {{$product->category_id}}
                            }
                        })">✏️
                        </button>
                        <button class="action-btn delete">🗑️</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Товары не найдены</td>
                </tr>
            @endforelse

            </tbody>
        </table>
    </section>
@endsection
