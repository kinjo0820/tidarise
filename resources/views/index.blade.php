@extends('layouts.user_template')
@section('title','TidaIntern（ティーダインターン）沖縄県に特化した長期インターンのマッチングサイト')
@section('content')
    <div class="justify-center items-center container mx-auto">
        <div class="h-full flex" >
            <div class="w-2/5 h-full hidden sm:block">
                <div class='flex h-screen justify-center  container mx-auto'>
                    <div class='mt-12 ml-10'>
                        <div class="mt-4">
                            <h2 class='text-xl font-bold p-2'>職種で探す</h2>
                            <select class="select w-56 p-2 rounded-3xl border-2">
                                <option>未選択</option>
                                <option>エンジニア</option>
                                <option>デザイナー</option>
                                <option>マーケティング</option>
                                <option>コンサルティング</option>
                                <option>営業</option>
                                <option>企画</option>
                                <option>その他</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <h2 class='text-xl font-bold p-2'>エリアで探す</h2>
                            <select class="select w-56 p-2  rounded-3xl border-2">
                                <option>未選択</option>
                                <option>那覇市街</option>
                                <option>南部</option>
                                <option>中部</option>
                                <option>北部</option>
                                <option>その他</option>
                            </select>
                        </div>

                        <div class='mt-8 '>
                            <h2 class='text-xl font-bold p-2'>特徴で探す</h2>
                            <ul class='text-xl text-slate-700 p-2'>
                                <li class='mt-1 hover:border-b-2'>スタートアップ</li>
                                <li class='mt-1 hover:border-b-2'>ベンチャー</li>
                                <li class='mt-1 hover:border-b-2'>未経験OK</li>
                                <li class='mt-1 hover:border-b-2'>経験者優遇</li>
                                <li class='mt-1 hover:border-b-2'>ポテンシャル採用</li>
                                <li class='mt-1 hover:border-b-2'>内定直結</li>
                                <li class='mt-1 hover:border-b-2'>オンライン可能</li>
                                <li class='mt-1 hover:border-b-2'>週３からOK</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[95%]   h-full mx-auto">
                <div class='flex justify-center  container mx-auto items-center'>
                    <div class='w-[604px] mt-10 bg-white'>
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
                            <p class="text-base font-bold leading-relaxed ">Laravel・PHP｜全国からOK！アプリエンジニアの学生インターン募集します</p>
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
    </div>
@endsection

