<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тотошка</title>
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
@include('components.header')
@yield('content')
@include('components.footer')


<div class="modal" id="auth-modal">
    <div class="modal-content">
        <span class="modal-close" onclick="closeModal()">&times;</span>

        <!-- Вход -->
        <div class="auth-form" id="login-form">
            <h2>Вход</h2>
            <form>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Пароль" required>
                <button type="submit">Войти</button>
            </form>
            <p class="switch-link">Нет аккаунта? <span onclick="switchForm('register')">Зарегистрироваться</span></p>
        </div>

        <!-- Регистрация -->
        <div class="auth-form" id="register-form" style="display: none;">
            <h2>Регистрация</h2>

            <form method="POST" class="modal__form" id="registerForm" action="/register">
                @csrf
                <input type="text" name="name" id="registerForm_name" placeholder="Имя" >
                <div class="error-message" id="error-registerForm_name"></div>

                <input type="email" name="email" id="registerForm_email" placeholder="Email" >
                <div class="error-message" id="error-registerForm_email"></div>

                <input type="password" name="password" id="registerForm_password" placeholder="Пароль" >
                <div class="error-message" id="error-registerForm_password"></div>

                <input type="password" name="password_confirmation" id="registerForm_password_confirmation"
                       placeholder="Повторите пароль" >

                <button type="submit" class="button__model">Зарегистрироваться</button>

            </form>
            <p class="switch-link">Уже есть аккаунт? <span onclick="switchForm('login')">Войти</span></p>
        </div>
    </div>
</div>

<script src="{{asset('js/Ajax.js')}}"></script>
<script src="{{asset('js/faq__accordion.js')}}"></script>
<script src="{{asset('js/modal_authreg.js')}}"></script>
<script src="{{asset('js/burger.js')}}"></script>
</body>
</html>
