@extends('layouts.user_template')
@section('title','TidaIntern（ティーダインターン）沖縄県に特化した長期インターンのマッチングサイト')
@section('content')
    <div class="flex h-screen overflow-hidden">

        <div class="w-1/4 bg-white border-r border-gray-300">

            <header class="p-4 border-b border-gray-300 flex justify-between items-center bg-orange-400 text-white">
                <h1 class="text-2xl font-semibold">メッセージ</h1>
                <div class="relative">
                </div>
            </header>

            <div class="overflow-y-auto h-screen p-3 ">
                <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-100 p-2 rounded-md">
                    <i class="fa-regular fa-user text-orange-300 hover:text-orange-600  w-14 h-14 mr-3"></i>
                    <div class="flex-1">
                        <h2 class="text-lg font-semibold">株式会社ABC</h2>
                        <p class="text-gray-600 text-sm">採用担当</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex-1">
            <div class="bg-white p-4 text-gray-700">
                <h1 class="text-4xl font-semibold">株式会社ABC</h1>
            </div>
            <div class="h-screen overflow-y-auto p-4 ">


                <div class="flex mb-4 cursor-pointer">

                    <i class="fa-regular fa-user text-orange-300 hover:text-orange-600  w-14 h-14 mr-3"></i>
                    <div class="flex max-w-96 bg-white rounded-lg p-3 gap-3">
                        <p class="text-gray-700">この度はご応募ありがとうございます。</p>
                    </div>
                </div>


                <div class="flex justify-end mb-4 cursor-pointer">
                    <div class="flex max-w-96 bg-indigo-500 text-white rounded-lg p-3 gap-3">
                        <p>どうもどうも</p>
                    </div>
                    <div class="flex items-center justify-center ml-2">

                        <i class="fa-regular fa-user text-orange-300 hover:text-orange-600  w-14 h-14 mr-3"></i>
                    </div>
                </div>

                <div class="flex justify-end mb-4 cursor-pointer">
                    <div class="flex max-w-96 bg-indigo-500 text-white rounded-lg p-3 gap-3">
                        <p>ここで働かせてください</p>
                    </div>
                    <div class="flex items-center justify-center ml-2">

                        <i class="fa-regular fa-user text-orange-300 hover:text-orange-600  w-14 h-14"></i>
                    </div>
                </div>



            </div>

        </div>
    </div>



@endsection
