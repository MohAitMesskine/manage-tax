<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function clearCache()
    {
        \Artisan::call('cache:clear');

        return view('admin.clear-cache');
    }
}
