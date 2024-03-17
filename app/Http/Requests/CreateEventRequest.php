<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'event_date' => 'required|date|after_or_equal:now',
            'event_img' => 'required|image',
            'description' => 'required|string',
        ];
    }
}
