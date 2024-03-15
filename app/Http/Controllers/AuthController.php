<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('dash.login');
    }

    public function submitLoginForm(LoginRequest $request)
    {
        if (Auth::attempt($request->validated()))
        {
          return redirect()->route('dash.index');
        }

        session()->flash('auth', false);

        return redirect()->back();
    }
}
