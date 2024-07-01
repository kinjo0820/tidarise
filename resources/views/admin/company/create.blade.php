@extends('layouts.admin_template')
@section('title','Tidaインターン管理画面')
@section('content')
    <section class="py-8">
        <div class="container px-4 mx-auto">
            <div class="py-4 bg-white rounded">

                <form action="{{ route('admin.company.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex px-6 pb-4 border-b">
                        <h3 class="text-xl font-bold">企業登録</h3>
                        <div class="ml-auto">
                            <button type="submit" class="py-2 px-3 text-xs text-white font-semibold bg-orange-400 rounded-md">保存</button>
                        </div>
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
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="title">会社名</label>
                            <input id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="title">所在地</label>
                            <input id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="location" value="{{ old('location') }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="title">WEBページ</label>
                            <input id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="website" value="{{ old('website') }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="title">メールアドレス</label>
                            <input id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="contact_email" value="{{ old('contact_email') }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="title">連絡先</label>
                            <input id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="phone_number" value="{{ old('phone_number') }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="title">設立</label>
                            <input id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="date" name="founded_date" value="{{ old('founded_date') }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="title">従業員数</label>
                            <input id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="number_of_employees" value="{{ old('number_of_employees') }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="title">住所</label>
                            <input id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="address" value="{{ old('address') }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="title">市</label>
                            <input id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="city" value="{{ old('city') }}">
                        </div>


                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="category">エリア</label>
                            <div class="flex">
                                <select id="category" class="appearance-none block pl-4 pr-8 py-3 mb-2 text-sm bg-white border rounded" name="area">
                                    <option >エリアを選択してください</option>
                                    <option>那覇市街</option>
                                    <option>南部</option>
                                    <option>中部</option>
                                    <option>北部</option>
                                    <option>その他</option>
                                </select>
                                <div class="pointer-events-none transform -translate-x-full flex items-center px-2 text-gray-500">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="image">企業ロゴ</label>
                            <div class="flex items-end">
                                <img id="previewImage" src="https://dummyimage.com/300x300/000/fff" data-noimage="https://dummyimage.com/300x300/000/fff" alt="" class="rounded shadow-md w-64">
                                <input id="image" class="block w-full px-4 py-3 mb-2" type="file" accept='image/*' name="logo_url">
                            </div>
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
