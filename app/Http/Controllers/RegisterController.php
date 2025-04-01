<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{

    public function create() {
        return view("auth.register");
      }

    public function store(Request $request) {
        
        $validated = $request->validate([
            "first_name" => ["required", "max:255"],
            "last_name" => ["required", "max:255"],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => ["required", Password::min(6)->numbers()->letters()->symbols(), "confirmed"]
          ]);
        
        dd($request->all());
        return direct("/");
      }

}