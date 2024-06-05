@extends('layouts.user_template')
@section('title','TidaRise（ティーダライズ）長期インターンのマッチング')
@section('content')

    <section class="py-8 bg-orange-50">
        <div class="container px-4 mx-auto justify-center items-center md:w-1/3">
            <div class="py-4 rounded bg-white">
                <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="px-6 pb-4  text-center">
                        <h3 class="text-xl">アカウント登録</h3>
                    </div>

                    <div class="pt-4 px-6">
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="name">名前</label>
                            <input id="name" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="name" value="{{ old('name') }}">
                            @error('name')
                            <p class="text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="email">メールアドレス(公開されません)</label>
                            <input id="email" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <p class="text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="password">パスワード</label>
                            <input id="password" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="password" name="password">
                            @error('password')
                            <p class="text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="password_confirmation">パスワード(確認)</label>
                            <input id="password_confirmation" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="password" name="password_confirmation">
                            @error('password')
                            <p class="text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="relative flex  flex-col  justify-center overflow-hidden sm:py-8">
                        <button class="mx-auto text-white font-semibold  px-10 py-3 rounded-2xl  border-2 bg-orange-400">アカウント作成</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


@endsection
