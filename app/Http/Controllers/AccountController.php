<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function index()
    {
        return view('account.index');
    }
    public function create()
    {
        return view('account.create');
    }
    public function show()
    {
        return view('account.show');
    }
    public function master()
    {
        return view('template.show');
    }
    public function data()
    {
        return view('index');
    }
    public function table()
    {
        return view('template.tables');
    }
}
