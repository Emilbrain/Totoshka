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

@include('components.modalAuthReg')
<script src="{{asset('js/alert.js')}}"></script>
<script src="{{asset('js/Ajax.js')}}"></script>
<script src="{{asset('js/faq__accordion.js')}}"></script>
<script src="{{asset('js/modal_authreg.js')}}"></script>
<script src="{{asset('js/burger.js')}}"></script>
<script src="{{asset('js/switching_images.js')}}"></script>
</body>
</html>

