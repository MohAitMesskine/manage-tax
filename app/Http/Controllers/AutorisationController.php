<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Autorisation;
use App\Models\Redevable;
use Illuminate\Http\Request;


class AutorisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

       // $redevables= Redevable::pluck('nom', 'id')->limit(1);

       // $redevables= DB::table('redevable')->select('nom');
       $autorisation=DB::table('autorisation')
            ->join('redevable', 'autorisation.redevable_id', '=', 'redevable.id')
            ->select('redevable.nom','autorisation.*')
            ->get();
        $auto= Autorisation::paginate(4);;

       // $redevables = DB::table('redevable')->select('nom')->where('id', '1')->paginate(2);
        return view('admin.autorisation.index', ['autorisation' => $autorisation], compact('auto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Redevable $redevable)
    {
        $redevables= Redevable::pluck('nom', 'id');

        // return view('posts.edit')->withPost($post)->withCategories($categories);
        return view('admin.autorisation.create', compact('redevable', 'redevables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'nullable',
            'date' => 'nullable|date',
            'type' => 'nullable',
            'date' => 'nullable',
            'rc' => 'nullable',
            'sup' => 'nullable',
            'montant' => 'nullable',
            'categorie' => 'nullable',
            'souscate' => 'nullable',
            'article' => 'nullable',
            'numerolot' => 'nullable',
            'pattante' => 'nullable',
            'observation' => 'nullable',
            'valeurlocative' => 'nullable',

        ]);

        Autorisation::create($request->all());

        return redirect()->route('autorisation.index')
                        ->with('success','Autorisation created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Autorisation $autorisation, Redevable $redevable)
    {
        $redevables= Redevable::pluck('nom', 'id');

        return view('admin.autorisation.edit',compact('autorisation','redevable', 'redevables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autorisation $autorisation)
    {
        $request->validate([
            'numero' => 'nullable',
            'date' => 'nullable|date',
            'type' => 'nullable',
            'date' => 'nullable',
            'rc' => 'nullable',
            'sup' => 'nullable',
            'montant' => 'nullable',
            'categorie' => 'nullable',
            'souscate' => 'nullable',
            'article' => 'nullable',
            'numerolot' => 'nullable',
            'pattante' => 'nullable',
            'observation' => 'nullable',
            'valeurlocative' => 'nullable',

        ]);

        $autorisation->update($request->all());

        return redirect()->route('autorisation.index')
                        ->with('success','L autorisation mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autorisation $autorisation)
    {
        $autorisation->delete();

        return redirect()->route('redevables.index')
                        ->with('success','L autorisation est supprimé avec succès');
    }
    public function search(Request $request){

        $search = $request->input('search');

        $autorisation=DB::table('autorisation')
                    ->join('redevable', 'autorisation.redevable_id', '=', 'redevable.id')
                    ->select('redevable.nom','autorisation.*')
                    ->where('numero', 'LIKE', "%{$search}%")
                    ->orWhere('redevable.nom', 'LIKE', "%{$search}%")
                    ->get()
                     ;

        return view('admin.autorisation.search',compact('autorisation'));
    }

}
