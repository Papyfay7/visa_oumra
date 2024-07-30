<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;

class TrackerController extends Controller
{
    public function index()
    {
        return view('html.tracker'); // Vue dans resources/views/html/tracker.blade.php
    }

    public function showSearchForm()
    {
        return view('html.tracker'); // Vue dans resources/views/html/tracker.blade.php
    }

    public function search(Request $request)
    {
        $request->validate([
            'tracking_number' => 'required|string',
        ]);

        $tracking_number = $request->input('tracking_number');
        $registration = Registration::where('tracking_number', $tracking_number)->first();

        if (!$registration) {
            return redirect()->route('tracker.search')
                ->with('error', 'No registration found with that tracking number.');
        }

        return view('html.tracker', ['registration' => $registration]); // Vue dans resources/views/html/tracker.blade.php
    }
}
