@extends('template.app')

@section('content')
    <section class="catalog">
        <div class="catalog-container">
            <h1>Каталог товаров</h1>

            <!-- Фильтры и поиск -->
            <div class="catalog-controls">
                <select class="catalog-filter">
                    <option value="all">Все категории</option>
                    <option value="toys">Игрушки</option>
                    <option value="care">Уход</option>
                    <option value="books">Книги</option>
                </select>
            </div>

            <!-- Сетка товаров -->
            <div class="catalog-grid">
                <div class="product-card">
                    <img src="{{asset('images/product/product.png')}}" alt="Мягкий зайка">
                    <h3 class="product-title">Мягкий зайка</h3>
                    <p class="product-price">1 290 ₽</p>
                    <div class="product__btn btn">
                        <a href="">Подробнее</a>
                    </div>
                    <div class="product__btn btn">
                        <a href="">В корзину 🛒</a>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{asset('images/product/product.png')}}" alt="Мягкий зайка">
                    <h3 class="product-title">Мягкий зайка</h3>
                    <p class="product-price">1 290 ₽</p>
                    <div class="product__btn btn">
                        <a href="">Подробнее</a>
                    </div>
                    <div class="product__btn btn">
                        <a href="">В корзину 🛒</a>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{asset('images/product/product.png')}}" alt="Мягкий зайка">
                    <h3 class="product-title">Мягкий зайка</h3>
                    <p class="product-price">1 290 ₽</p>
                    <div class="product__btn btn">
                        <a href="">Подробнее</a>
                    </div>
                    <div class="product__btn btn">
                        <a href="">В корзину 🛒</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{asset('images/product/product.png')}}" alt="Мягкий зайка">
                    <h3 class="product-title">Мягкий зайка</h3>
                    <p class="product-price">1 290 ₽</p>
                    <div class="product__btn btn">
                        <a href="">Подробнее</a>
                    </div>
                    <div class="product__btn btn">
                        <a href="">В корзину 🛒</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{asset('images/product/product.png')}}" alt="Мягкий зайка">
                    <h3 class="product-title">Мягкий зайка</h3>
                    <p class="product-price">1 290 ₽</p>
                    <div class="product__btn btn">
                        <a href="">Подробнее</a>
                    </div>
                    <div class="product__btn btn">
                        <a href="">В корзину 🛒</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
