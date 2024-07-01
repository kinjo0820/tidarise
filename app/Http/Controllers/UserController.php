<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Education;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

//    ユーザー登録画面の表示
    public function create()
    {
        return view('users.create');
    }

    // ユーザー登録処理
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);

        $userId = $user->id;

        // プロフィールを作成
        $profile = new Profile([
            'user_id' => $userId,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        $user->profile()->save($profile);

        // 学歴を作成
        $education = new Education([
            'user_id' => $userId,
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        $user->educations()->save($education);


        // ログインページのアクションにリダイレクト
        return redirect()->route('users.showLoginForm');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
