<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'event_id' => 'required|integer|exists:events,id',
            'qty' => 'required|integer',
            'price' => 'required|integer',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif',
            'type' => 'required|string',
        ];
    }
}
