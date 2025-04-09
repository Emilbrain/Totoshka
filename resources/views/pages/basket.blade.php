@extends('template.app')

@section('content')
    <div class="section mt150px mb100px">
        <h1>🛒 Ваша корзина</h1>

        <div class="cart-wrapper">

            <div class="cart-items">
                @forelse($baskets as $basket)
                    <div class="cart-item">
                        <img src="{{asset('storage/' . $basket->product->images->first()->path)}}" alt="Игрушка 1">
                        <div class="item-info">
                            <h3>{{$basket->product->name}}</h3>
                            <p class="price">{{$basket->product->price}} ₽</p>
                            <div class="quantity">
                                <a href="{{route('removeCount.basket', $basket->id)}}">-</a>
                                <span>{{$basket->quantity}}</span>
                                <a href="{{route('addCount.basket', $basket->id)}}">+</a>
                            </div>
                        </div>
                        <a href="{{route('basketRemove.basket', $basket->id)}}" class="remove">✕</a>
                    </div>
                @empty
                    <p>Ваша корзина пуста</p>
                @endforelse


            </div>

            <!-- Итог -->
            <div class="cart-summary">
                <h2>Итого:</h2>
                <p><strong>Сумма:</strong> {{$total}} ₽</p>
                <a href="{{route('addOrder')}}" class="checkout-btn">Оформить заказ</a>
            </div>

        </div>
    </div>
@endsection
