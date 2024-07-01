@extends('layouts.user_template')
@section('title','TidaIntern（ティーダインターン）沖縄県に特化した長期インターンのマッチングサイト')
@section('content')
    <section class="py-8">
        <div class='flex justify-center  container mx-auto items-center'>
            <div class='w-[800px]  mx-2 bg-white '>
                <form action="{{ route('users.profile.updatePersonality',Auth::user()) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex p-4 border-b-4">
                        <h3 class="text-xl font-bold">基本情報</h3>
                    </div>

                    <div class="pt-4 px-6">
                        <!-- ▼▼▼▼エラーメッセージ▼▼▼▼　-->
                        @if ($errors->any())
                            <div class="mb-8 py-4 px-6 border border-red-300 bg-red-50 rounded">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-red-400">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- ▲▲▲▲エラーメッセージ▲▲▲▲　-->

                        <div class="my-6 text-center">
                            <label class="block text-sm font-medium mb-2 cursor-pointer" for="image">
                                <input id="image" class="hidden" type="file" accept='image/*' name="image">
                                <div class="flex justify-center items-center">
                                    @if($profile->image)
                                        <img id="previewImage" src="{{ asset('storage/'.$profile->image) }}" data-noimage="{{ asset('storage/'.$profile->image) }}" alt="" class="rounded-full shadow-md w-32 h-32 object-cover cursor-pointer">
                                    @else
                                        <img id="previewImage" src="https://placehold.jp/150x150.png" alt="デフォルト画像" class="rounded-full shadow-md w-32 h-32 object-cover cursor-pointer">
                                    @endif
                                </div>
                            </label>
                            <h2>プロフィール画像</h2>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="title">氏名</label>
                            <input id="name" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="name" value="{{ old('name',$profile->name) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="title">フリガナ</label>
                            <input id="name_kana" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="name_kana" value="{{ old('name_kana',$profile->name_kana) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="title">電話番号</label>
                            <input id="phone_number" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="phone_number" value="{{ old('phone_number',$profile->phone_number) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="title">メールアドレス</label>
                            <input id="email" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="email" value="{{ old('email',$profile->email) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="title">住所</label>
                            <input id="address" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="address" value="{{ old('address',$profile->address) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="title">生年月日</label>
                            <input id="birthday" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="date" name="birthday" value="{{ old('birthday',$profile->birthday) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="category">性別</label>
                            <div class="flex">
                                <select id="category" class="appearance-none block pl-4 pr-8 py-3 mb-2 text-sm bg-white border rounded" name="gender">
                                    @foreach (['未選択','男性', '女性', 'その他'] as $gender)
                                        <option value="{{ $gender }}" {{ old('gender', $profile->gender) == $gender ? 'selected' : '' }}>{{ $gender }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none transform -translate-x-full flex items-center px-1.5 text-gray-500">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center mt-8">
                            <button type="submit" class="py-3 px-24 text-lg text-white font-semibold bg-orange-400 rounded-md hover:bg-orange-500 transition-colors duration-300">保存</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        // 画像プレビュー
        document.getElementById('image').addEventListener('change', e => {
            const previewImageNode = document.getElementById('previewImage')
            const fileReader = new FileReader()
            fileReader.onload = () => previewImageNode.src = fileReader.result
            if (e.target.files.length > 0) {
                fileReader.readAsDataURL(e.target.files[0])
            } else {
                previewImageNode.src = previewImageNode.dataset.noimage
            }
        })
    </script>
@endsection
