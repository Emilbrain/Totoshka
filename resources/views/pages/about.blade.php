@extends('template.app')

@section('content')
    <div class="container">
        <h1>О нас</h1>
        <div class="about-section section">
            <div class="about-text">
                <p>
                    <strong>«Тотошка»</strong> — это интернет-магазин, созданный с душой и заботой. Мы стремимся к тому, чтобы каждый малыш получал только качественные и безопасные товары, а родители — удовольствие от простого и приятного онлайн-шопинга.
                </p>
                <p>
                    В нашем каталоге представлены:
                </p>
                <ul>
                    <li>🧸 Развивающие игрушки</li>
                    <li>👶 Аксессуары для ухода и сна</li>
                    <li>📚 Книги и игры для малышей</li>
                    <li>🎁 Упаковка и подарочные наборы</li>
                </ul>
                <p>
                    Мы работаем по всей России и всегда рядом — поддержка ответит на любые вопросы, а доставка порадует скоростью.
                </p>
            </div>
            <div class="about-img">
                <img src="{{asset('images/about/about.png')}}" alt="Малыш с игрушками">
            </div>
        </div>
    </div>
@endsection
