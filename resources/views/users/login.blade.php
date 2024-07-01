@extends('layouts.user_template')
@section('title','TidaIntern（ティーダインターン）沖縄県に特化した長期インターンのマッチングサイト')
@section('content')

    <!-- This is an example component -->
    <div class="font-sans bg-orange-50 p-52">
        <div class="container mx-auto h-full flex flex-1 justify-center items-center">
            <div class="w-full max-w-lg">
                <div class="leading-loose">
                    <form action="{{ route('users.login') }}" method="POST" class="p-10 bg-white  rounded">
                        @csrf
                        <p class="text-black text-center text-lg font-bold">ログイン</p>
                        <div class="">
                            <label class="block text-sm text-black" for="email">メールアドレス</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-100 rounded focus:outline-none focus:bg-btext-black" type="email" placeholder="メールアドレス" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="mt-2">
                            <label class="block  text-sm text-black">パスワード</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-100 rounded focus:outline-none focus:bg-btext-black"
                                   type="password" placeholder="パスワード" name="password">
                        </div>

                        <div class="mt-4 items-center flex justify-between">
                            <button class="px-4 py-1 text-white font-light tracking-wider bg-black  rounded"
                                    type="submit">ログイン</button>
                            <a class="inline-block right-0 align-baseline font-bold text-sm text-500 text-black hover:text-red-400"
                               href="/users/create">新規アカウントを作成</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>




@endsection
