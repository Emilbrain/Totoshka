<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тотошка</title>
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
</head>
<body>
<div id="toast-container"></div>
<div class="admin-dashboard">
        <aside class="admin-sidebar">
            <a href="/admin"><img src="{{asset('images/logo/logo.png')}}" alt=""></a>
            <nav class="admin-nav">
                <a href="{{route('admin.catalog')}}" class="admin-nav-link">📦 Товары</a>
                <a href="#" class="admin-nav-link">🛒 Заказы</a>
                <a href="{{route('admin.category')}}" class="admin-nav-link">📁 Категории</a>
                <a href="#" class="admin-nav-link">👤 Пользователи</a>
            </nav>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="logout-btn">Выйти из аккаунта</button>
            </form>
        </aside>

        @yield('content')
    </div>

@include('admin.components.modal-add')
@include('admin.components.modal-editProduct')
@include('admin.components.modal-addCategory')
@include('admin.components.modal-editCategory')
<script src="{{asset('js/alert.js')}}"></script>
<script src="{{asset('js/admin/admin-openModal.js')}}"></script>
<script src="{{asset('js/admin/admin-openModalEdit.js')}}"></script>
<script src="{{asset('js/admin/ajax/ajax-addCategory.js')}}"></script>
<script src="{{asset('js/admin/ajax/ajax-addProduct.js')}}"></script>
<script src="{{asset('js/admin/ajax/ajax-editCategory.js')}}"></script>
</body>
</html>


