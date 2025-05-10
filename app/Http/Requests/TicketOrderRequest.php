<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketOrderRequest extends FormRequest
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
            'passenger' => 'required|string',
            'age' => 'required|numeric',
            'tickets' => 'required|numeric|digits_between:1,3',
            'ticket_category' => 'required|string',
            'routes' => 'required|string',
            'departure_date' => 'required|date',
        ];
    }
}
