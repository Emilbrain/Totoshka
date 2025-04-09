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
                    @forelse($orders as $order)
                        <li>
                            <span>Заказ №{{$order->id}}</span>
                            <span> На сумму — {{$order->total_price}} ₽</span>
                            <span class="status">{{$order->status}}</span>
                        </li>
                    @empty
                        <li>Заказов нет</li>
                    @endforelse
                </ul>
            </div>

        </div>
    </div>
@endsection
