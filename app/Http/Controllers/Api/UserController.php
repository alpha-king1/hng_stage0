<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json
        ([
            'email' => 'oduyebojohn123@gmail.com',
            'current_datetime' => now(),
            'github_rl' => 'https://github.com/alpha-king1/hng_stage0.git'
        ]);
    }
}
