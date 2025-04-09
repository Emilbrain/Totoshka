@extends('template.app')

@section('content')
    <div class="product-page">
        <div class="product-container mt150px mb100px">
            <div class="product-image">
                <img id="mainImage" src="{{asset('images/product/bunny/bunny.png')}}" alt="Товар" class="main-img">

                <div class="thumbnail-gallery">
                    <img src="{{asset('images/product/bunny/bunny.png')}}" alt="Миниатюра 1" class="thumbnail active">
                    <img src="{{asset('images/product/bunny/bunny1.png')}}" alt="Миниатюра 2" class="thumbnail">
                    <img src="{{asset('images/product/bunny/bunny2.png')}}" alt="Миниатюра 3" class="thumbnail">
                </div>
            </div>

            <div class="product-details">
                <h1 class="product-title">Мягкая игрушка «Зайчик»</h1>
                <p class="product-price">1 290 ₽</p>
                <p class="product-description">
                    Милый плюшевый зайчик станет любимым другом для вашего малыша. Изготовлен из гипоаллергенных
                    материалов.
                </p>

                <div class="product-actions">
                    <form action="">
                        <label for="quantity">Количество:</label>
                        <input type="number" id="quantity" value="1" min="1">
                        <button class="add-to-cart">🛒 В корзину</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
