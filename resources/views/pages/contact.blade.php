@extends('template.app')

@section('content')
    <div class="section contact_content">
        <h1>Контакты</h1>
        <div class="contacts-grid">

            <div class="contact-info">
                <h2>Как с нами связаться?</h2>
                <p><strong>Адрес:</strong> г. Казань, ул. Бари Галеева, 3А</p>
                <p><strong>Email:</strong> <a href="mailto:info@totoshka.ru">info@totoshka.ru</a></p>
                <p><strong>Телефон:</strong> <a href="tel:+70001234567">+7 (000) 123-45-67</a></p>
                <p><strong>Режим работы:</strong><br>
                    Пн–Пт: 9:00 – 18:00<br>
                    Сб–Вс: выходной
                </p>
            </div>

            <div class="contact-map">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A1380002aff1f011f583a0c67cc1c6c193fbfce0fe311ce20fe5538b9dd66ef52&amp;source=constructor"
                    width="832" height="507" frameborder="0"></iframe>
            </div>

        </div>

        <div class="contact-form">
            <h2>Напишите нам</h2>
            <form>
                <input type="text" placeholder="Ваше имя" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="Ваше сообщение..." required></textarea>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
@endsection
