<?php

namespace App\Http\Requests\Latihan\Student;

use Illuminate\Foundation\Http\FormRequest;

class StudentNewRequest extends FormRequest
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
            'npm' => 'required|size:8|unique:students',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:P,L',
            'major' => 'required|string',
            'address' => 'required|string|max:255',
        ];
    }
}
