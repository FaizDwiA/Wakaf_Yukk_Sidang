<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class programController extends Controller
{
    function program() 
    {
        return view('program');
    }
}