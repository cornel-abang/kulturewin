<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitPortfolioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'youtube_link' => 'required|url',
            'fe_image' => 'required|image',
            'description' => 'required|string',
        ];
    }
}
