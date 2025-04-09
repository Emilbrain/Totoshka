<div id="toast-container"></div>

<div class="modal" id="auth-modal">
    <div class="modal-content">
        <span class="modal-close" onclick="closeModal()">&times;</span>

        <!-- Вход -->
        <div class="auth-form" id="login-form">
            <h2>Вход</h2>
            <form method="POST" class="modal__form" id="loginForm" action="/login">

                <input type="email" name="email"  placeholder="Email" >
                <div class="error-message" id="error-loginForm_email"></div>

                <input type="password" name="password" placeholder="Пароль" >
                <div class="error-message" id="error-loginForm_password"></div>

                <button type="submit">Войти</button>
            </form>
            <p class="switch-link">Нет аккаунта? <span onclick="switchForm('register')">Зарегистрироваться</span></p>
        </div>

        <!-- Регистрация -->
        <div class="auth-form" id="register-form" style="display: none;">
            <h2>Регистрация</h2>

            <form method="POST" class="modal__form" id="registerForm" action="/register">
                @csrf
                <input type="text" name="name" id="registerForm_name" placeholder="Имя">
                <div class="error-message" id="error-registerForm_name"></div>

                <input type="email" name="email" id="registerForm_email" placeholder="Email">
                <div class="error-message" id="error-registerForm_email"></div>

                <input type="password" name="password" id="registerForm_password" placeholder="Пароль">
                <div class="error-message" id="error-registerForm_password"></div>

                <input type="password" name="password_confirmation" id="registerForm_password_confirmation"
                       placeholder="Повторите пароль">

                <button type="submit" class="button__model">Зарегистрироваться</button>

            </form>
            <p class="switch-link">Уже есть аккаунт? <span onclick="switchForm('login')">Войти</span></p>
        </div>
    </div>
</div>
