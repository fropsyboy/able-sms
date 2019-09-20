<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminUsers()
    {
        $user = auth()->user();
        dd($user);

        $data = [
            'page' => 'User',
            'user' => $user
        ];
        return view('user.index', $data);
    }
}
