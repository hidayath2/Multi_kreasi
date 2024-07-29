<?php

namespace App\Http\Controllers;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register', [
            'title' => 'register',
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|unique:users'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/')->with('succes', 'Registrasi Berhasil Silahkan Login');
    }
}
