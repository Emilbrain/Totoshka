<div class="footer__cont">
    <header class="header">
        <div class="header__container">

            <!-- Логотип -->
            <div class="header__logo">
                <img src="{{ asset('images/logo/logo.png') }}" alt="Логотип" class="header__logo-image">
            </div>

            <!-- Бургер -->
            <div class="burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- Навигация + действия (открываются по бургеру) -->
            <nav class="header__nav" id="nav">
                <a href="/" class="header__nav-link">Главная</a>
                <a href="{{route('catalog.view')}}" class="header__nav-link">Каталог</a>
                <a href="{{route('about.view')}}" class="header__nav-link">О нас</a>
                <a href="{{route('contact.view')}}" class="header__nav-link">Контакты</a>

                <!-- Действия в бургер-меню -->
                <div class="header__mobile-actions">
                    @guest
                        <button onclick="openModal('login')" class="header__mobile-button">Войти</button>
                    @endguest
                    @auth
                        <a href="{{route('basket.view')}}" class="header__action-button">🛒</a>
                        <a href="{{route('profile.view')}}" class="header__action-button">🙍</a>
                    @endauth

                </div>
            </nav>

            <!-- Действия (только на ПК) -->
            <div class="header__actions">
                @guest
                    <div class="header__btn btn">
                        <button onclick="openModal('login')">Войти</button>
                    </div>
                @endguest
                @auth
                    <a href="{{route('basket.view')}}" class="header__action-button" title="Корзина">🛒</a>
                    <a href="{{route('profile.view')}}" class="header__action-button">🙍</a>
                @endauth


            </div>

        </div>
    </header>

