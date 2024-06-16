@extends('layouts.user_template')
@section('title','TidaRise（ティーダライズ）長期インターンのマッチング')
@section('content')
    <div class='flex justify-center  container mx-auto items-center'>
        <div class='w-[800px]  mx-2 bg-white '>
            <div class="md:px-4">
                <div class="md:flex p-10 bg-orange-400  items-center justify-start mb-10">
                    <img class="object-cover  md:w-32 md:h-32 w-20 h-20 rounded-full" src="{{ asset('img/tyler-nix-8youKEwX0vY-unsplash.jpg') }}" alt="">
                    <div class='md:ml-10'>
                        <h2 class="md:text-3xl text-xl font-bold mt-3  text-white">{{ Auth::user()->name }}</h2>
                        <p class=" font-medium mt-2    text-white">琉球大学/工学部 エネルギー環境工学コース</p>
                        <p class=" font-medium  mt-1  text-white">2026年卒業予定</p>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between ">
                        <p class="text-sm text-gray-700">自己紹介</p>
                        <a href="" class="text-sm text-orange-500 hover:text-orange-950 px-4">
                            編集する
                        </a>
                    </div>

                    <div class="">
                        <div class='bg-slate-50 py-3 px-6'>
                            <h2 class='font-bold leading-relaxed  text-xl text-gray-700 bg-white'></h2>
                            <p>
                                高校生の時にプログラミングに興味を持ち、琉球大学工学部に入学しました。大学2年に休学し、沖縄のIT企業でエンジニアとして働かせていただきました。その後大学に復学し自分でサービスを開発することに興味を持ちました。UdemyでLaravelを学習し、爬虫類専門SNSを開発しました。多くのユーザーに使ってもらえるサービスを作ることを目標に日々学習・改善しています。実務を通して、自分の開発スキルを磨きたいと考えています。
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
