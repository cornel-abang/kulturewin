<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function uploadImage(UploadedFile $file)
    {
        $imageName = time().'.'.$file->extension();
        $file->move(public_path('assets/images/events'), $imageName);

        return url('/').'/assets/images/events/'.$imageName;
    }
}
