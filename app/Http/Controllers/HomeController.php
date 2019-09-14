<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'page' => 'Dashboard'
        ];
        return view('dashboard.index', $data);
    }

    public function user()
    {
        $data = [
            'page' => 'User'
        ];
        return view('user.index', $data);
    }

    public function messages()
    {
        $data = [
            'page' => 'Messages'
        ];
        return view('user.messages', $data);
    }

    public function transactions()
    {
        $data = [
            'page' => 'Transactions'
        ];
        return view('user.transactions', $data);
    }

}
