<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use function redirect;

class SessionController extends Controller
{
    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store()
    {
        $validatedData = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($validatedData)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }

    public function create()
    {
        return view('login.login');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
