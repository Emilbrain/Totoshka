@extends('template.app')

@section('content')
    <div class="section mt150px mb100px">
        <h1>👤 Профиль пользователя</h1>

        <div class="profile-section">

            <div class="profile-info">
                <img src="{{asset('images/profile/profile.png')}}" alt="Аватар пользователя">
                <h2>{{auth()->user()->name}}</h2>
                <p>Email: {{auth()->user()->email}}</p>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="logout-btn">Выйти из аккаунта</button>
                </form>
            </div>

            <div class="profile-orders">
                <h3>🛒 Мои заказы</h3>
                <ul class="order-list">
                    <li>
                        <span>Заказ №1245</span>
                        <span>2 товара — 2 300 ₽</span>
                        <span class="status">Доставлен</span>
                    </li>
                    <li>
                        <span>Заказ №1244</span>
                        <span>1 товар — 1 290 ₽</span>
                        <span class="status waiting">В обработке</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection
