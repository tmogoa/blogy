<!DOCTYPE html>
<html lang="en" class="font-sans">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blogy</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="font-sans bg-green-50">
        <nav class="flex justify-between p-3 bg-white shadow items-center">
            <ul class="flex items-center">
                <li class="pr-1">
                    <a href="{{ route('home') }}" class=""><img src="{{ asset('img/logo.svg') }}" alt="Blogy" class="w-10"></a>
                </li>
                <li>
                    <a href="{{ route('home') }}" class="p-3 text-sm font-semibold text-gray-600 hover:bg-blue-50 border mx-1 border-transparent rounded-md">Home</a>
                </li>
                <li>
                    <a href="" class="p-3 text-sm font-semibold text-gray-600 hover:bg-blue-50 border mx-1 border-transparent rounded-md">Dashboard</a>
                </li>
                <li>
                    <a href="" class="p-3 text-sm font-semibold text-gray-600 hover:bg-blue-50 border mx-1 border-transparent rounded-md">Write</a>
                </li>
            </ul>
            
            <ul class="flex items-center">
                @auth
                    <li>
                        <a href="" class="p-3 text-sm font-semibold text-gray-600 hover:bg-blue-50 border mx-1 border-transparent rounded-md">{{ Auth::user()->name }}</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="p-0 m-0 inline">
                            @csrf
                            <button class="p-3 text-sm font-semibold text-gray-600 hover:bg-blue-50 border mx-1 border-transparent rounded-md focus:outline-none">Logout</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3 text-sm font-semibold text-gray-600 hover:bg-blue-50 border mx-1 border-transparent rounded-md">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="p-3 text-sm font-semibold text-gray-600 hover:bg-blue-50 border mx-1 border-transparent rounded-md">Register</a>
                    </li>  
                @endguest
            </ul>
        </nav>
        @yield('content')
    </body>
</html>