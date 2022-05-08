<?php

namespace App\Http\Controllers;

use App\Models\Autorisation;
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
        return view('admin.redevable.create');
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

         if($_POST['nom']==null){
            return redirect()->route('redevables.create')
            ->with('error','inserer un nom');
         }
        $request->validate([

            'nom' => 'required|max:255',
            'adress' => 'nullable|max:255',
            'type' => 'nullable|max:255',
            'cin' => 'nullable|max:255',
            'email' => 'nullable|email',
            'telephone' => 'nullable',
            'active'=> 'nullable|boolean',

        ]);

       Redevable::create($request->all());

        return redirect()->route('redevables.index')
                        ->with('success','Redevable created successfully.');
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
        return view('admin.redevables.show',compact('redevables'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Redevable  $redevable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $redevable= Redevable::find($id);
        return view('admin.redevable.edit',compact('redevable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Redevable  $redevable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Redevable $redevable)
    {
        //
        $request->validate([
            'nom' => 'required|max:255',
            'adress' => 'nullable|max:255',
            'type' => 'nullable|max:255',
            'cin' => 'nullable|max:255',
            'email' => 'nullable|email',
            'telephone' => 'nullable|integer',
            'active'=> 'nullable|boolean',

        ]);

        $redevable->update($request->all());

        return redirect()->route('redevables.index')
                        ->with('success','Redevable updated successfully');
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
        $redevable->delete();

        return redirect()->route('redevables.index')
                        ->with('success','Redevables supprimé avec succès');
    }
    public function search(Request $request){

        $search = $request->input('search');

        $redevables = Redevable::query()
                    ->where('nom', 'LIKE', "%{$search}%")
                    ->orWhere('cin', 'LIKE', "%{$search}%")
                    ->get()
                     ;

        return view('admin.redevable.search',compact('redevables'));
    }
}
