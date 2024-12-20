<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login()
    {
        return response()->json([
            'data' => 'login',
            'status' => true
        ]);
    }

    public function register() {}
}
