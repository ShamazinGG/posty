<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Домашняя страница</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="p-3">История действий</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class="p-3">Страница с постами</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li>
                    <a href="" class="p-3">{{ auth()->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                        @csrf
                        <button class="p-3" type="submit">Выйти</button>
                    </form>
                </li>
            @endauth

            @guest
                <li>
                    <a href="{{ route('login') }}" class="p-3">Войти</a>
                </li>
                <li>
                    <a href="{{ route('register')}}" class="p-3">Регистрация</a>
                </li>
            @endguest


        </ul>
    </nav>

    @yield('content')
</body>
</html>
