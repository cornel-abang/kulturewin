<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditEventRequest extends FormRequest
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
            'event_image' => 'image|size:4096',
            'description' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'event_image.size' => 'The event image must not be above 4MB in size'
        ];
    }
}
