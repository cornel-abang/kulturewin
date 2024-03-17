<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnboardArtistRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // dd(request()->all());
        return [
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'stage_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email|unique:artists,email',
            'dob' => 'required|date|before:10 years ago',
            'street' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'zip_code' => 'required|string',
            'with_label' => 'required|bool',
            'label_name' => 'nullable|string',
            'pro_affil' => 'required|string',
            'website' => 'nullable|url',
            'youtube' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'songs_url' => 'nullable|string',
            'photo' => 'required|image',
        ];
    }
}
