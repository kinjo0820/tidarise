<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditEducationRequest;
use App\Http\Requests\EditProfileRequest;
use App\Models\Profile;
use App\Models\User;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        $user = Auth::user();
        $profile = $user->profile;
        $education = $user->educations;
        return view('users.profile.edit',['profile'=>$profile,'education'=>$education]);
    }


    public function personality(Profile $profile)
    {
        $user = Auth::user();
        $profile = $user->profile;
        return view('users.profile.personality',['profile'=>$profile]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePersonality(EditProfileRequest $request, string $id)
    {
        $user = Auth::user();
        $profile = $user->profile;
        $updateData = $request->validated();

        if ($request->hasFile('image')) {
            // プロフィールに画像が設定されている場合、その画像を削除
            if ($profile->image) {
                Storage::disk('public')->delete($profile->image);
            }
            // 新しい画像を保存し、保存先のパスを $updateData に設定
            $updateData['image'] = $request->file('image')->store('profile_images', 'public');
        }

        // `name` と `email` をユーザーテーブルに保存
        $user->update([
            'name' => $updateData['name'],
            'email' => $updateData['email']
        ]);

        // プロフィールを更新
        $profile->update($updateData);
        // 更新後に edit アクションをリダイレクトで呼び出す
        return redirect()->action([ProfileController::class, 'edit']);
    }

    public function educations(Education $education)
    {
        $user = Auth::user();
        $education = $user->educations;
        return view('users.profile.educations',['education'=>$education]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateEducations(EditEducationRequest $request, string $id)
    {
        $user = Auth::user();
        $education = $user->educations;
        $updateData = $request->validated();


        // 学歴を更新
        $education->update($updateData);
        // 更新後に edit アクションをリダイレクトで呼び出す
        return redirect()->action([ProfileController::class, 'edit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
