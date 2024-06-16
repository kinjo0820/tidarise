@extends('layouts.admin_template')
@section('title','TidaRise管理画面')
@section('content')
    <div class="mt-5">
        <div class="p-4 rounded-lg shadow-md ">
            <div class="flex flex-wrap justify-between h-full">
                <div
                    class="flex-1 bg-gradient-to-r from-orange-400 to-orange-600 rounded-lg flex flex-col items-center justify-center p-4 space-y-2 border border-gray-200 m-2">
                    <i class="fa-solid fa-users text-white text-4xl"></i>
                    <p class="text-white">総ユーザー数</p>
                    <p class="text-white">1</p>
                </div>
            </div>
        </div>
       
        <div class="bg-white rounded-lg p-4 shadow-md my-4">
            <table class="table-auto w-full">
                <thead>
                <tr>
                    <th class="px-4 py-2 text-left border-b-2 w-full">
                        <h2 class="text-ml font-bold text-gray-600">ユーザー</h2>
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr class="border-b w-full">
                        <td class="px-4 py-2 text-left align-top w-1/2">
                            <div class="flex">
                                <img class="object-cover h-14 w-14 rounded-full text-white mr-8 mt-3" src="{{ asset('img/tyler-nix-8youKEwX0vY-unsplash.jpg') }}" alt="">
                                <div class="">
                                    <a href=""><p class="text-sm font-medium text-slate-700">金城太一</p></a>
                                    <p class="text-sm font-medium text-slate-700">kinjo820@icloud.com</p>
                                    <p class="text-sm font-medium text-slate-700">26卒予定</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
