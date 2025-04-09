@extends('template.app')

@section('content')
    <section class="hero-banner">
        <div class="hero-content">
            <h1>Добро пожаловать в Тотошку!</h1>
            <p>Лучшие товары для малышей с любовью 💜</p>
            <a href="{{route('catalog.view')}}" class="hero-button">Перейти в каталог</a>
        </div>

        <div class="hero-animation">
            <lottie-player
                src="https://lottie.host/3a8b29be-1b10-42e1-a6fc-4fac0c5d79c8/q0pRpFHvwg.json"
                background="transparent"
                speed="1"
                loop
                autoplay>
            </lottie-player>
        </div>
    </section>

    <section class="about-section">
        <div class="about-content">
            <div class="about-text">
                <h2>О нас</h2>
                <p>
                    <strong>Тотошка</strong> — это тёплый онлайн-магазин детских товаров, созданный с заботой о малышах
                    и родителях.
                    Мы подбираем только безопасные, качественные и полезные вещи, чтобы сделать каждый день ребёнка
                    радостнее.
                </p>
                <ul>
                    <li>✅ Проверенные производители</li>
                    <li>🧸 Развивающие игрушки</li>
                    <li>🚚 Быстрая и бережная доставка</li>
                </ul>
                <div class="about__btn btn">
                    <a href="{{route('about.view')}}">Подробнее</a>
                </div>
            </div>
            <div class="about-image">
                <img src="{{asset('images/about/about.png')}}" alt="Малыш с игрушкой">
            </div>
        </div>
    </section>

    <section class="new-section">
        <div class="new-content">
            <h2>Новинки</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="{{asset('images/product/bunny/bunny.png')}}" alt="Мягкий зайка">
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
                    <img src="{{asset('images/plug/plug.png')}}" alt="Развивающий коврик">
                    <h3 class="product-title">Развивающий коврик</h3>
                    <p class="product-price">2 150 ₽</p>
                    <div class="product__btn btn">
                        <a href="">Подробнее</a>
                    </div>
                    <div class="product__btn btn">
                        <a href="">В корзину 🛒</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{asset('images/plug/plug.png')}}" alt="Погремушка в наборе">
                    <h3 class="product-title">Погремушка (набор 3 шт)</h3>
                    <p class="product-price">990 ₽</p>
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

    <section class="faq-section">
        <div class="faq-container">
            <h2>Часто задаваемые вопросы</h2>
            <div class="faq-item">
                <div class="faq-question">Как оформить заказ?</div>
                <div class="faq-answer">Добавьте товар в корзину, перейдите к оформлению и заполните данные для доставки.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Какие способы оплаты доступны?</div>
                <div class="faq-answer">Мы принимаем оплату банковскими картами, электронными кошельками и наложенным платежом.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Сколько длится доставка?</div>
                <div class="faq-answer">Доставка по Казани — 1-2 дня, по регионам — от 3 до 7 рабочих дней.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Можно ли вернуть товар?</div>
                <div class="faq-answer">Да, в течение 14 дней с момента получения, при сохранении товарного вида и упаковки.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Есть ли программа лояльности?</div>
                <div class="faq-answer">Да! Зарегистрируйтесь и получайте бонусы за покупки.</div>
            </div>
        </div>
    </section>

@endsection
