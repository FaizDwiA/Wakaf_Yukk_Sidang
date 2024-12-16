<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tentang_kamiController extends Controller
{
    function tentang_kami() 
    {
        return view('tentang_kami');
    }
}