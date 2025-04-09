@extends('template.app')

@section('content')
    <div class="section mt150px mb100px">
        <h1>🛒 Ваша корзина</h1>

        <div class="cart-wrapper">

            <!-- Товары -->
            <div class="cart-items">
                <div class="cart-item">
                    <img src="images/product1.jpg" alt="Игрушка 1">
                    <div class="item-info">
                        <h3>Мягкий зайка</h3>
                        <p class="price">1 290 ₽</p>
                        <div class="quantity">
                            <button>-</button>
                            <span>1</span>
                            <button>+</button>
                        </div>
                    </div>
                    <button class="remove">✕</button>
                </div>

                <div class="cart-item">
                    <img src="images/product2.jpg" alt="Игрушка 2">
                    <div class="item-info">
                        <h3>Развивающий коврик</h3>
                        <p class="price">2 150 ₽</p>
                        <div class="quantity">
                            <button>-</button>
                            <span>2</span>
                            <button>+</button>
                        </div>
                    </div>
                    <button class="remove">✕</button>
                </div>
            </div>

            <!-- Итог -->
            <div class="cart-summary">
                <h2>Итого:</h2>
                <p><strong>Сумма:</strong> 5 590 ₽</p>
                <button class="checkout-btn">Оформить заказ</button>
            </div>

        </div>
    </div>
@endsection
