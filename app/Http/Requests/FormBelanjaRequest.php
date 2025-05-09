<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormBelanjaRequest extends FormRequest
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
            'kdbrg' => 'required|string|size:8',
            'nmbrg' => 'required|string|min:3|max:50',
            'jml' => 'required|numeric|min:1|max:3',
            'hrgbrg' => 'required|numeric|min:3',
            'jns_bayar' => 'required|string',
            'satuan' => 'required|string',
            'alamat' => 'required|string',
        ];
    }
}
