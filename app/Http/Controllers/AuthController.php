<?php

namespace App\Http\Controllers;

use App\Mpdels\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm(){
        $title = 'Register';
        return view('auth.register', compact('title'));
    }
}