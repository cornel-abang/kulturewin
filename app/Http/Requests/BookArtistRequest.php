<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookArtistRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'artist_id' => 'required|integer|exists:artists,id',
            'artist_id' => 'required|integer|exists:artists,id',
            'book_name' => 'required|string',
            'book_email' => 'required|string',
            'book_phone' => 'required|string',
            'message' => 'required|string',
            'book_date' => 'required|string',
            'message' => 'nullable|string',
        ];
    }
}
