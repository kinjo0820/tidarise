@extends('layouts.user_template')
@section('title','TidaIntern（ティーダインターン）沖縄県に特化した長期インターンのマッチングサイト')
@section('content')
    <div class='flex justify-center  container mx-auto items-center'>
        <div class='w-[800px]  mx-2 bg-white '>
            <div class="md:px-4">

                <div class="max-w-2xl mx-auto bg-white rounded-lg p-5 md:p-0">

                    <div class="rounded-lg p-5 max-w-2xl w-full text-center mt-4">
                        <div class="flex flex-col items-center ">
                            @if($profile->image)
                                <img id="previewImage" src="{{ asset('storage/'.$profile->image) }}" data-noimage="{{ asset('storage/'.$profile->image) }}" alt="" class="rounded-full shadow-md w-32 h-32 object-cover cursor-pointer">
                            @else
                                <img id="previewImage" src="https://placehold.jp/150x150.png" alt="デフォルト画像" class="rounded-full shadow-md w-32 h-32 object-cover cursor-pointer">
                            @endif
                            <h2 class="text-xl font-semibold mt-4">プロフィールを充実させて<br>書類通過率やスカウト数をUP！</h2>
                        </div>
                    </div>

                    <!-- 基本情報 -->
                    <div class="pb-4 mt-4">
                        <div class="flex justify-between items-center mb-1">
                            <p class="text-xl font-semibold">基本情報</p>
                            <a href="{{ route('users.profile.personality')}}" class="text-sm text-orange-500 hover:text-orange-950 px-4">
                                編集する
                            </a>
                        </div>
                        <div class="text-sm bg-gray-100 p-4 rounded">
                            <table class="w-full">
                                <tr><td class="py-1">氏名:</td><td class="py-1">{{ $profile->name }}</td></tr>
                                <tr><td class="py-1">フリガナ:</td><td class="py-1">{{ $profile->name_kana }}</td></tr>
                                <tr><td class="py-1">住所:</td><td class="py-1">{{ $profile->address }}</td></tr>
                                <tr><td class="py-1">性別:</td><td class="py-1">{{ $profile->gender }}</td></tr>
                                <tr><td class="py-1">生年月日:</td><td class="py-1">{{ $profile->birthday }}</td></tr>
                                <tr><td class="py-1">電話番号:</td><td class="py-1">{{ $profile->phone_number }}</td></tr>
                                <tr><td class="py-1">メールアドレス:</td><td class="py-1">{{ $profile->email }}</td></tr>
                            </table>
                        </div>
                    </div>

                    <!--学歴情報 -->
                    <div class="pb-4 mt-4">
                        <div class="flex justify-between items-center mb-1">
                            <p class="text-xl font-semibold">学歴</p>
                            <a href="{{ route('users.profile.educations')}}" class="text-sm text-orange-500 hover:text-orange-950 px-4">
                                編集する
                            </a>
                        </div>
                        <div class="text-sm bg-gray-100 p-4 rounded">
                            <table class="w-full">
                                <tr><td class="py-1">学校名:</td><td class="py-1">{{ $education->institution_name }}</td></tr>
                                <tr><td class="py-1">学部・学科:</td><td class="py-1">{{ $education->faculty }}</td></tr>
                                <tr><td class="py-1">専攻・コース:</td><td class="py-1">{{ $education->major }}</td></tr>
                                <tr><td class="py-1">学年:</td><td class="py-1">{{ $education->grade }}</td></tr>
                                <tr><td class="py-1">入学年度:</td><td class="py-1">{{ $education->start_year }}年入学</td></tr>
                                <tr><td class="py-1">卒業見込み:</td><td class="py-1">{{ $education->expected_graduation_year }}年卒</td></tr>
                            </table>
                        </div>
                    </div>

                    <!--自己アピール -->
                    <div class="pb-4 mt-4">
                        <div class="flex justify-between items-center mb-1">
                            <p class="text-xl font-semibold">あなたの強み</p>
                            <a href="" class="text-sm text-orange-500 hover:text-orange-950 px-4">
                                編集する
                            </a>
                        </div>
                        <div class="text-sm bg-gray-100 p-4 rounded">
                            <p>私の強みは行動力です。
                                休学期間中はエンジニアインターンだけではなく、個人ブログ、フィリピン短期留学、ネットショップ開設など様々なことに挑戦しました。
                                私は自分のアイディアをすぐに実行することができます。現在は休学期間に身につけたスキルで、WEBサービスを開発しています。
                                私の行動力を仕事で活かし、新しいプロジェクトや課題に果敢に挑戦します。
                            </p>
                        </div>
                    </div>

                    <!--ガクチカ -->
                    <div class="pb-4 mt-4">
                        <div class="flex justify-between items-center mb-1">
                            <p class="text-xl font-semibold">学生時代に力を入れたこと</p>
                            <a href="" class="text-sm text-orange-500 hover:text-orange-950 px-4">
                                編集する
                            </a>
                        </div>
                        <div class="text-sm bg-gray-100 p-4 rounded">
                            <p>高校生の時にプログラミングに興味を持ち、琉球大学工学部に入学しました。
                                学びたいと思っていた内容を学ぶことができず、大学2年時に休学し、沖縄のIT企業でエンジニアとして働かせていただきました。
                                その後大学に復学し自分でサービスを開発することに興味を持ちました。UdemyでLaravelを学習し、爬虫類専門SNSを開発しました。
                                多くのユーザーに使ってもらえるサービスを作ることを目標に日々学習・改善しています。 実務を通して、自分の開発スキルを磨きたいと考えています。</p>
                        </div>
                    </div>

                    <!--キャリアイメージ -->
                    <div class="pb-4 mt-4">
                        <div class="flex justify-between items-center mb-1">
                            <p class="text-xl font-semibold">キャリアイメージ</p>
                            <a href="" class="text-sm text-orange-500 hover:text-orange-950 px-4">
                                編集する
                            </a>
                        </div>
                        <div class="text-sm bg-gray-100 p-4 rounded">
                            <p>個人で開発したサービスをリリースして、多くのユーザーに使ってもらえることを目標にしています。
                                現在は沖縄の大学に通っていますが、よりレベルの高い環境で働くために就職は東京で考えています。
                                自分と向き合って成長できる環境で働きたいと考えています。
                                フロントはReactを学習中です。</p>
                        </div>
                    </div>

                    <!--成果物 -->
                    <div class="pb-4 mt-4">
                        <div class="flex justify-between items-center mb-1">
                            <p class="text-xl font-semibold">成果物</p>
                            <a href="" class="text-sm text-orange-500 hover:text-orange-950 px-4">
                                編集する
                            </a>
                        </div>
                        <div class="text-sm bg-gray-100 p-4 rounded">
                            <h2>成果物①</h2>
                            <table class="w-full">
                                <tr><td class="py-1">概要:</td><td class="py-1">長期インターンの求人サイト</td></tr>
                                <tr><td class="py-1">工夫した点:</td><td class="py-1">学生と企業が効率的にマッチングできるように工夫しました。また、開発だけではなく集客にも力を入れたことでユーザー数1000人契約企業数20社を達成しました。</td></tr>
                                <tr><td class="py-1">URL:</td><td class="py-1">http://localhost/</td></tr>
                            </table>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
