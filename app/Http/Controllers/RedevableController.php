<?php

namespace App\Http\Controllers;

use App\Models\Redevable;
use Illuminate\Http\Request;

class RedevableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redevables = Redevable::orderBy('updated_at', 'DESC')->paginate(2);
        return view('admin.redevable.index', compact('redevables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Redevable  $redevable
     * @return \Illuminate\Http\Response
     */
    public function show(Redevable $redevable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Redevable  $redevable
     * @return \Illuminate\Http\Response
     */
    public function edit(Redevable $redevable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Redevable  $redevable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Redevable $redevable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Redevable  $redevable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Redevable $redevable)
    {
        //
    }
}