<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request) {
        $inputFields = $request->validate([
            'name' => ['required', 'min:3', 'max:15', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:128']
        ]);

        $inputFields['password'] = bcrypt($inputFields['password']);
        $user = User::create($inputFields);
        auth()->login($user);
        return redirect('/');

        return 'Welcome to notice board!';
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
