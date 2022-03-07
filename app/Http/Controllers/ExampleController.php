<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function modal()
    {
        return view('example.modal');
    }
}
