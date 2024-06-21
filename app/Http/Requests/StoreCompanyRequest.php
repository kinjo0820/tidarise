<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreCompanyRequest extends FormRequest
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
            'location' => ['required', 'string', 'max:255'],
            'website' => ['required', 'url'],
            'contact_email' => ['required', 'email'],
            'phone_number' => ['required', 'string', 'max:20'],
            'founded_date' => ['required', 'date'],
            'number_of_employees' => ['required', 'integer'],
            'logo_url' => [
                'file', // ファイルがアップロードされている
                'image', // 画像ファイルである
                'max:6000', // ファイル容量が2000kb以下である
                'mimes:jpeg,jpg,png', // 形式はjpegかpng
            ],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'area' => ['required', 'string', 'max:255'],
        ];
    }
}
