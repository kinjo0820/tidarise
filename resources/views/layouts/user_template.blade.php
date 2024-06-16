<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>@yield('title','TidaRise（ティーダライズ）長期インターンのマッチング')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="">
    <header>
        <nav class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="/">
                        </a>
                        <h1 class='text-orange-400 text-2xl'>Tida<span class='text-2xl ml-1'>Intern</span></h1>
                    </div>
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <ul class="flex">
                            <li class="hidden space-x-6 sm:ml-8 sm:flex">
                                <a href="/" class="text-sm">長期インターンを探す</a>
                            </li>
                            <li class="hidden space-x-6 sm:ml-8 sm:flex">
                                <a href="/like" class="text-sm">お気に入り</a>
                            </li>
                            <li class="hidden space-x-6 sm:ml-8 sm:flex">
                                <a href="/messages" class="text-sm">メッセージ</a>
                            </li>
                            @if(Auth::check())
                            <li class="hidden space-x-6 sm:ml-8 sm:flex">
                                <a href="{{ route('users.edit', Auth::user()->id) }}" class="text-sm">プロフィール</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="bg-slate-50">

        @yield('content')

    </main>

    <footer class="footer footer-center p-5 border-t-2 bg-orange-200 w-full">

        <aside class='text-center'>
            <p>Copyright © 2024 - All right reserved by TidaRise Ltd</p>
        </aside>
    </footer>

    </body>
</html>
