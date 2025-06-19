<?php

namespace App\Http\Requests\Latihan\Subject;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            'subject_code' => 'required|size:8|unique:subjects',
            'subject_name' => 'required|min:3|max:50',
            'sks' => 'required|in:1,2,3,4',
            'semester' => 'required|string|in:1,2,3,4,5,6,7,8',
        ];
    }
}
