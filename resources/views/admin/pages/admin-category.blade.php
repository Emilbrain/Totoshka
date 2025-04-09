@extends('admin.admin-template.admin')
@section('content')
    <section class="admin-section">
        <div class="admin-table-header">
            <h2>Список Категорий</h2>
            <button onclick="openAdminModal('categoryModal')" class="add-product-btn">➕ Добавить категорию</button>
        </div>

        <table class="admin-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td class="table__action">
                        {{--                        <button onclick="openEditModal('{{$category->id}}', '{{$category->name}}', 'editCategory')" class="action-btn edit">✏️</button>--}}
                        <button class="action-btn edit" onclick="openEditModal({
                                id: {{$category->id}},
                                modalId: 'editCategory',
                                formId: 'editCategoryForm',
                                routePrefix: 'admin/category/edit',
                                values: {
                                    name: '{{$category->name}}'
                                }
                            })">✏️
                        </button>
                        <form action="{{route('admin.category.delete', $category->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="action-btn delete">🗑️</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Категории не найдены</td>
                </tr>
            @endforelse

            </tbody>
        </table>
    </section>
@endsection
