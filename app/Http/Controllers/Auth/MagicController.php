<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MagicController extends Controller
{
    public function showMagicForm()
    {
        return view('auth.magic-login');
    }

    public function sendToken(Request $request)
    {
dd($request->all());

    }
}
