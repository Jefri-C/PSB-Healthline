<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    public function view()
    {
        return view('appointments');
    }
}
