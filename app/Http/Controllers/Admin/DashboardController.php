<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('html.dashboard'); // Assurez-vous que cette vue existe
    }
}
