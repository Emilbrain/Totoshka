@extends('admin.admin-template.admin')
@section('content')
    <main class="admin-content">
        <div class="admin-header">
            <h1>Панель администратора</h1>
        </div>

        <div class="admin-main">
            <div class="admin-card">
                <h3>Всего товаров</h3>
                <p>{{$productCount}}</p>
            </div>
            <div class="admin-card">
                <h3>Новых заказов</h3>
                <p>{{$orderCount}}</p>
            </div>
            <div class="admin-card">
                <h3>Пользователей</h3>
                <p>{{$userCount}}</p>
            </div>
        </div>
    </main>
@endsection
