<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'name_kana' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'gender' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone_number' => ['nullable', 'string', 'max:20'],
            'birthday' => ['nullable', 'date'],
            'image' => [
                'nullable', // 画像がアップロードされている場合のみ検証する
                'file', // ファイルがアップロードされている
                'image', // 画像ファイルである
                'max:6000', // ファイル容量が6000kb以下である
                'mimes:jpeg,jpg,png', // 形式はjpegかpng
            ],
        ];
    }
}
