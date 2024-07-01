<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditEducationRequest extends FormRequest
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
            'institution_name' => ['nullable', 'string', 'max:255'],
            'faculty' => ['nullable', 'string', 'max:255'],
            'major' => ['nullable', 'string', 'max:255'],
            'grade' => ['nullable', 'string', 'max:255'],
            'start_year' => ['nullable', 'string', 'max:255'],
            'expected_graduation_year' => ['nullable', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'institution_name.string' => '学校名は文字列でなければなりません。',
            'institution_name.max' => '学校名は255文字以内でなければなりません。',
            'faculty.string' => '学部・学科は文字列でなければなりません。',
            'faculty.max' => '学部・学科は255文字以内でなければなりません。',
            'major.string' => '専攻・コースは文字列でなければなりません。',
            'major.max' => '専攻・コースは255文字以内でなければなりません。',
            'grade.string' => '学年は文字列でなければなりません。',
            'grade.max' => '学年は255文字以内でなければなりません。',
            'start_year.integer' => '入学年度は整数でなければなりません。',
            'start_month.integer' => '入学月は整数でなければなりません。',
            'expected_graduation_year.integer' => '卒業見込み年度は整数でなければなりません。',
            'expected_graduation_month.integer' => '卒業見込み月は整数でなければなりません。',
        ];
    }
}
