<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    function laporan() 
    {
        return view('laporan');
    }
}