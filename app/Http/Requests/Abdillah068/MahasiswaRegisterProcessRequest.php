<?php

namespace App\Http\Requests\Abdillah068;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRegisterProcessRequest extends FormRequest
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
            'npm_mhs' => 'required|string',
            'name_mhs' => 'required|string',
            'degree' => 'required|string',
            'mid_exam' => 'required|numeric|min:1|max:100',
            'final_exam' => 'required|numeric|min:1|max:100',
            'tasks' => 'required|numeric|min:1|max:100',
            'attendances' => 'required|numeric|digits_between:1,2',
        ];
    }
}
