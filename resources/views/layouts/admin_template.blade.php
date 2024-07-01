<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>@yield('title','Tidaインターン管理画面')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class="">
<header>
    <nav class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class='text-orange-400 text-2xl font-semibold'>TidaRise<span class='text-xl ml-1'>管理画面</span></h1>
                </div>
                <div class="flex items-center">
                    <button>
                        <i class="fas fa-user text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="justify-center items-center bg-slate-50">
    <div class="h-full w-full flex" >
        <div class="w-1/5  hidden sm:block">
            <div class='flex h-screen justify-center  container mx-auto'>
                <div class="p-8 space-y-5 text-xl">

{{--                    <a href="/admin" class="relative px-4 py-3 flex items-center space-x-4 rounded-lg ">--}}
{{--                        <i class="fas fa-home"></i>--}}
{{--                        <span class="-mr-1 font-medium">ホーム</span>--}}
{{--                    </a>--}}

                    <a href="/admin/offer" class="px-4 py-3 flex items-center space-x-4 rounded-md group">
                        <i class="fas fa-wallet"></i>
                        <span>募集管理</span>
                    </a>

                    <a href="/admin/" class="px-4 py-3 flex items-center space-x-4 rounded-md group">
                        <i class="fa-solid fa-user"></i>
                        <span>応募者管理</span>
                    </a>

                    <a href="/admin/users" class="px-4 py-3 flex items-center space-x-4 rounded-md group">
                        <i class="fa-solid fa-paper-plane"></i>
                        <span>スカウト</span>
                    </a>

                    <a href="/admin/like" class="px-4 py-3 flex items-center space-x-4 rounded-md group">
                        <i class="fa-solid fa-heart"></i>
                        <span>気になる</span>
                    </a>

                    <a href="/" class="px-4 py-3 flex items-center space-x-4 rounded-md group">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>ログアウト</span>
                    </a>

                    <a href="/admin/company" class="px-4 py-3 flex items-center space-x-4 rounded-md group">
                        <i class="fa-solid fa-building"></i>
                        <span>企業管理</span>
                    </a>
                </div>
            </div>
        </div>
        <main class="w-4/5 h-full">
            @yield('content')
        </main>

    </div>
</div>

<footer class="footer footer-center p-5 border-t-2 bg-orange-200 w-full">

    <aside class='text-center'>
        <p>Copyright © 2024 - All right reserved by TidaRise Ltd</p>
    </aside>
</footer>

</body>
</html>
