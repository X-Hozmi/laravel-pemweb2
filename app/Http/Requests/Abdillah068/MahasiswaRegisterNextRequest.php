<?php

namespace App\Http\Requests\Abdillah068;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRegisterNextRequest extends FormRequest
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
            'birth_place' => 'required|string',
            'birth_date' => 'required|date',
            'gender' => 'required|string|in:Laki-laki,Perempuan',
            'degree' => 'required|string',
            'address' => 'required|string',
        ];
    }
}
