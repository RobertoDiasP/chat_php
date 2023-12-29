<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCrontoller extends Controller
{
    public function index()
    {
        
        return view('croppen.dashboard.dashboard');
    }
}
