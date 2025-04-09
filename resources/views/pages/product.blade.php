@extends('template.app')

@section('content')
    <div class="product-page">
        <div class="product-container mt150px mb100px">
            <div class="product-image">
                <img id="mainImage" src="{{asset('storage/' . $product->images->first()->path)}}" alt="Товар"
                     class="main-img">

                <div class="thumbnail-gallery">
                    @forelse($product->images as $image)
                        <img src="{{asset('storage/' . $image->path)}}" alt="Миниатюра 1" class="thumbnail">
                    @empty
                        <p>Нет изображений</p>
                    @endforelse
                </div>
            </div>

            <div class="product-details">
                <h1 class="product-title">{{$product->name}}</h1>
                <p class="product-price">{{$product->price}} ₽</p>
                <p class="product-description">
                    {{$product->description}}
                </p>
                @auth()
                    <div class="product-actions">
                        <a href="{{route('add.basket', $product->id)}}" class="add-to-cart">🛒 В корзину</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
@endsection
