<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    //
    public function table()
    {
        return view('template.tables');
    }
    public function data()
    {
        return view('template.data');
    }
}
