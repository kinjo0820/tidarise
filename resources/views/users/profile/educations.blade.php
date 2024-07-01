@extends('layouts.user_template')
@section('title','TidaIntern（ティーダインターン）沖縄県に特化した長期インターンのマッチングサイト')
@section('content')
    <section class="py-8">
        <div class='flex justify-center  container mx-auto items-center'>
            <div class='w-[800px]  mx-2 bg-white '>
                <form action="{{ route('users.profile.updateEducations',Auth::user()) }}" method="post" enctype="multipart/form-data">
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


                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="institution_name">学校名</label>
                            <input id="institution_name" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="institution_name" value="{{ old('institution_name',$education->institution_name) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="faculty">学部・学科</label>
                            <input id="faculty" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="faculty" value="{{ old('faculty',$education->faculty) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="major">専攻・コース</label>
                            <input id="major" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="major" value="{{ old('major',$education->major) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="category">学年</label>
                            <div class="flex">
                                <select id="grade" class="appearance-none block pl-4 pr-8 py-3 mb-2 text-sm bg-white border rounded" name="grade">
                                    @foreach (['未選択','1年生', '2年生', '3年生', '4年生','大学院1年生', '大学院2年生', '卒業済み','その他'] as $grade)
                                        <option value="{{ $grade }}" {{ old('grade', $education->grade) == $grade ? 'selected' : '' }}>{{ $grade }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none transform -translate-x-full flex items-center px-1.5 text-gray-500">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="start_year">入学年度</label>
                            <div class="flex">
                                <select id="start_year" class="appearance-none block pl-4 pr-8 py-3 mb-2 text-sm bg-white border rounded" name="start_year">
                                    @php
                                        $currentYear = date('Y');
                                        $startYear = $currentYear - 7; // 現在の年から7年前までの範囲
                                    @endphp
                                    @for ($year = $currentYear; $year >= $startYear; $year--)
                                        <option value="{{ $year }}" {{ old('start_year', $education->start_year) == $year ? 'selected' : '' }}>{{ $year }}年入学</option>
                                    @endfor
                                </select>
                                <div class="pointer-events-none transform -translate-x-full flex items-center px-1.5 text-gray-500">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>


                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="expected_graduation_year">卒業見込み</label>
                            <div class="flex">
                                <select id="expected_graduation_year" class="appearance-none block pl-4 pr-8 py-3 mb-2 text-sm bg-white border rounded" name="expected_graduation_year">
                                    @php
                                        $currentYear = date('Y');
                                        $startYear = $currentYear - 2; // 現在の年から8年前までの範囲
                                        $endYear = $currentYear + 8; // 現在の年から8年後までの範囲
                                    @endphp
                                    @for ($year = $startYear; $year <= $endYear; $year++)
                                        <option value="{{ $year }}" {{ old('expected_graduation_year', $education->expected_graduation_year) == $year ? 'selected' : '' }}>{{ $year }}年卒業見込み</option>
                                    @endfor
                                </select>
                                <div class="pointer-events-none transform -translate-x-full flex items-center px-1.5 text-gray-500">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
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
