@extends('layouts.admin_template')
@section('title','TidaRise管理画面')
@section('content')
    <div class="mt-5">
        <div class="bg-white rounded-lg p-4 shadow-md my-4">
            <table class="table-auto w-full">
                <thead>
                <tr>
                    <th class="px-4 py-2 text-left border-b-2 w-full flex">
                        <h2 class="text-xl">企業一覧</h2>
                        <div class="ml-auto">
                            <a href="/admin/company/create" class="py-2 px-3 text-xs text-white font-semibold bg-orange-400 rounded-md">新規作成</a>
                        </div>
                    </th>
                </tr>
                </thead>

                <tbody>
                @foreach($companies as $company)
                    <tr class="border-b w-full">
                        <td class="px-4 py-2 text-left align-top w-1/2">
                            <div class="flex items-center">
                                <img class="object-cover h-14 w-14 rounded-full text-white mr-8" src="{{ asset('storage/'. $company->logo_url) }}" alt="">
                                <div class="">
                                    <a href="{{ route('admin.company.edit',  $company->id) }}">
                                        <h2 class="text-xl font-medium text-slate-700">{{ $company->name }}</h2>
                                    </a>
                                </div>
                                <div class="ml-auto">
                                    <a href="{{ route('admin.company.edit', $company->id) }}" class="py-2 px-3 text-xl font-semibold rounded-md">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </div>

                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
    </div>
@endsection
