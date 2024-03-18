<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditFAQRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'question' => 'required|string',
            'answer' => 'required|string',
        ];
    }
}
