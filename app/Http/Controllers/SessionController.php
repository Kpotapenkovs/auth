<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\Rules\Password;

class SessionController extends Controller
{
    public function destroy()
    {
        Auth::logout();
        return redirect("/");
    }

    public function create()
    {
        Auth::attempt($validated);
        return view("auth.login");
    }
}
