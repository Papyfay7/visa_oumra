<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountconnectionsController extends Controller
{
    public function index()
    {
        return view('html.accountconnections'); // Assurez-vous que cette vue existe
    }
}
