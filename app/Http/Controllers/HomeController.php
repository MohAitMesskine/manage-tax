<?php

namespace App\Http\Controllers;

use App\Models\Redevable;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    {
        $autorisation=DB::table('autorisation')
        ->count('id');
        $redevable=DB::table('redevable')
        ->count('id');
        $autorisat=DB::table('autorisation')
        ->join('redevable', 'autorisation.redevable_id', '=', 'redevable.id')
        ->whereColumn('redevable.id', '=', 'autorisation.redevable_id')
        ->count('redevable.id');
        $auto=DB::table('autorisation')
        ->join('redevable', 'autorisation.redevable_id', '=', 'redevable.id')
        ->whereColumn('redevable.id', '=','autorisation.redevable_id')
        ->orderBy('autorisation.redevable_id', 'desc')->take(4)
        ->get();
        return view('admin.dashboard', ['autorisation' => $autorisation], compact('redevable','auto','autorisat'));
       // return view('admin.dashboard');
    }

    // public function clearCache()
    // {
    //     \Artisan::call('cache:clear');

    //     return view('admin.clear-cache');
    // }
}
