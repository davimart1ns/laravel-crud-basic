<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Martins</title>
</head>

<body>
    <div class="main-container">
        <header class="header">
            <div class="content-header">
                <h2 class="title-logo"> <a href=" {{ route('dashboard') }}">Martins</a></h2>
                <nav>
                    <ul class="list-nav-link">
                        <li class="nav-link"><a href="{{ route('user.index') }}">Usuários</a></li>
                        <li class="nav-link"><a href="{{ route('dashboard') }}">Sair</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="pt-8 px-6 ">
            @yield('content')
        </main>
    </div>
</body>

</html>
