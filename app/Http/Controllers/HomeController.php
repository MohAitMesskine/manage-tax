<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    {
        $autorisation=DB::table('autorisation')
        ->count('id');


        $redevable=DB::table('redevable')
        ->count('id');
        return view('admin.dashboard', ['autorisation' => $autorisation], compact('redevable'));
       // return view('admin.dashboard');
    }

    public function clearCache()
    {
        \Artisan::call('cache:clear');

        return view('admin.clear-cache');
    }
}
