@extends('layouts.user_template')
@section('title','TidaRise（ティーダライズ）長期インターンのマッチング')
@section('content')
    <div class=' justify-center  container mx-auto items-center grid grid-cols-1 md:lg:xl:grid-cols-3'>
        <div class='mx-2 bg-white p-6 mt-10'>
            <div class="my-3">
                <img class="object-cover w-full h-full'" src="{{ asset('img/image.jpg') }}" alt="">
            </div>
            <div class='flex mt-4'>
                <div class="mr-2 mt-0.5">
                    <i class="fa-solid fa-heart text-red-600"></i>
                </div>
                <h1 class="font-bold leading-relaxed">Laravel・PHP｜全国からOK！アプリエンジニアの学生インターン募集します</h1>
            </div>

            <div class="flex p-2">
                <img class="object-cover  w-8 h-8 rounded-full" src="{{ asset('img/image.jpg') }}" alt="">
                <h2 class="text-sm font-medium title-font  p-2">TidaRise株式会社</h2>
            </div>
        </div>





    </div>



@endsection
