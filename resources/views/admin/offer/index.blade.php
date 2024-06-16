@extends('layouts.admin_template')
@section('title','TidaRise管理画面')
@section('content')


<div class='justify-center  container mx-auto items-center'>
    <div class="mt-10">
        <div class="flex px-6 pb-4 border-b">
            <h2 class="text-2xl">募集一覧</h2>
            <div class="ml-auto">
                <a href="/admin/offer/create" class="py-2 px-3 text-xs text-white font-semibold bg-orange-400 rounded-md">新規作成</a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:lg:xl:grid-cols-2">
        <div class='flex justify-center  container mx-auto items-center'>
            <div class='w-[604px] mt-5 bg-white'>
                <a href="/detail">
                <div class="p-3 sm:mb-0 mb-6  border-orange-300 ">
                    <div class="">
                        <img class="object-cover w-full h-full'" src="{{ asset('img/image.jpg') }}" alt="">
                    </div>
                    <div>
                        <ul class="flex mt-2 text-sm">
                            <li class="text-orange-500 border-2 border-orange-400 rounded-full py-1 px-2 mr-2">オンラインOK</li>
                            <li class="text-orange-500 border-2 border-orange-400 rounded-full py-1 px-2 mr-2">未経験OK</li>
                            <li class="text-orange-500 border-2 border-orange-400 rounded-full py-1 px-2 mr-2">高時給</li>
                        </ul>
                    </div>
                    <div class="flex p-2">
                        <img class="object-cover  w-8 h-8 rounded-full" src="{{ asset('img/image.jpg') }}" alt="">

                        <h2 class="text-sm font-medium title-font  p-2">TidaRise株式会社</h2>
                    </div>
                    <p class="text-base font-bold leading-relaxed line-clamp-1">Laravel・PHP｜全国からOK！アプリエンジニアの学生インターン募集します</p>
                    <p class='line-clamp-3 mt-2'>＼フルリモートで働ける！実務を通して成長したい学生募集！／
                        ビジネスに取り組む急成長ベンチャーで、DXを加速するプロダクト開発に携わりませんか？
                        業務概要当社では、業界の問題解決に向けた複数の自社プロダクトを展開しています。
                    </p>
                </div>
                </a>
            </div>
        </div>
    </div>

   

</div>


@endsection
