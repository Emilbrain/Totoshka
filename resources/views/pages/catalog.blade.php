@extends('template.app')

@section('content')
    <section class="catalog">
        <div class="catalog-container">
            <h1>Каталог товаров</h1>

            <!-- Фильтры и поиск -->
            <div class="catalog-controls">
                <form method="GET" action="{{ route('catalog.view') }}" class="catalog-controls">
                    <select class="catalog-filter" name="category" onchange="this.form.submit()">
                        <option value="">Все категории</option>

                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>

            <!-- Сетка товаров -->
            <div class="catalog-grid">
                @forelse($products as $product)
                    <div class="product-card">
                        <img src="{{asset('storage/' . $product->images->first()->path)}}" alt="Мягкий зайка">
                        <h3 class="product-title">{{$product->name}}</h3>
                        <p class="product-price">{{$product->price}} ₽</p>
                        <div class="product__btn btn">
                            <a href="{{route('product.view', $product->id)}}">Подробнее</a>
                        </div>
                        @auth()
                        <div class="product__btn btn">
                            <a href="{{route('add.basket', $product->id)}}">В корзину 🛒</a>
                        </div>
                        @endauth
                    </div>
                @empty
                    <p>Товаров не найдено</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
