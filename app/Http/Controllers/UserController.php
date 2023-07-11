<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request) {
        $inputFields = $request->validate([
            'name' => ['required', 'min:3', 'max:15'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:128']
        ]);

        $inputFields['password'] = bcrypt($inputFields['password']);
        User::create($inputFields);

        return 'Welcome to notice board!';
    }
}
