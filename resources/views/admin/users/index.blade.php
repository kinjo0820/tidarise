@extends('layouts.admin_template')
@section('title','Tidaインターン管理画面')
@section('content')
    <div class="mt-5">

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
