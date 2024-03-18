<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayForTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        dd(request()->all());
        return [
            'title' => 'required|string',
            'youtube_link' => 'required|url',
            'fe_image' => 'required|image',
            'description' => 'required|string',
        ];
    }
}
