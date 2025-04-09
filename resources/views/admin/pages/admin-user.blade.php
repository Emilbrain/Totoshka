@extends('admin.admin-template.admin')
@section('content')
    <section class="admin-section">
        <div class="admin-table-header">
            <h2>Список пользователей</h2>
{{--            <button onclick="openAdminModal('productModal')" class="add-product-btn">➕ Добавить товар</button>--}}
        </div>

        <table class="admin-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Почта</th>
                <th>Роль</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="5">Пользователи не найдены</td>
                </tr>
            @endforelse

            </tbody>
        </table>
    </section>
@endsection
