<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    function berita() 
    {
        return view('berita');
    }
}