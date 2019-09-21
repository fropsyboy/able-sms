<?php

namespace App\Http\Controllers;

use App\User;
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
        $users = User::orderby('id', 'desc')->paginate(10);

        $data = [
            'page' => 'AdminUsers',
            'users' => $users
        ];
        return view('admin.users', $data);
    }

    public function user_trans($id)
    {
        $users = User::where('id', $id)->first();

        $data = [
            'page' => 'AdminUsers',
            'user' => $users
        ];
        return view('admin.trans', $data);
    }
}