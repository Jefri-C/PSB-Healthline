<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LabController extends Controller
{
    public function view()
    {
        return view('lab');
    }
}
