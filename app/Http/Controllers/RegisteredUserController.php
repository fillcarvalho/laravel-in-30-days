<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{

    public function store()
    {
        $validatedAttributes = request()->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
            ],
            'password' => ['required', 'string', 'confirmed', Password::min(5)],
        ]);

        $user = User::create($validatedAttributes);

        Auth::login($user);

        return redirect("/jobs");
    }

    public function create()
    {
        return view('auth.register');
    }

}
