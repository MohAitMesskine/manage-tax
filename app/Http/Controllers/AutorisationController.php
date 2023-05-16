<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Autorisation;
use App\Models\Payement;
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
       $autorisation=DB::table('autorisation')
         ->join('redevable', 'autorisation.redevable_id', '=', 'redevable.id')
         ->select('redevable.nom','autorisation.*')
         ->get();
       $auto= Autorisation::paginate(4);
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
        $autorisation= Autorisation::find($id);
        $autorisations = $autorisation->payement();
        $auto=DB::table('payement');
        return view('admin.autorisation.show', ['autorisation' => $autorisation], ['autorisations' => $autorisations],compact('auto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Autorisation $autorisation)
    {
        $redevables= Redevable::get();
        return view('admin.autorisation.edit',compact('autorisation', 'redevables'));
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
                        ->with('error','L autorisation est supprimé avec succès');
    }

    public function search(Request $request){
        $search = $request->input('search');
        if($search==null){
        return redirect()->route('autorisation.index')
                   ->with('error','La recherche est vide !!!');
        }
        else{
        $autorisation=DB::table('autorisation')
                    ->join('redevable', 'autorisation.redevable_id', '=', 'redevable.id')
                    ->select('redevable.nom','autorisation.*')
                    ->where('numero', 'LIKE', "%{$search}%")
                    ->orWhere('redevable.nom', 'LIKE', "%{$search}%")
                    ->orWhere('categorie', 'LIKE', "%{$search}%")
                    ->get();

        return view('admin.autorisation.search',compact('autorisation'));
    }
    }


public function imprimer($id){
    $autorisation= Autorisation::find($id);
    $redevable= DB::table('autorisation')
            ->join('redevable', 'autorisation.redevable_id', '=', 'redevable.id')
            ->select('redevable.*','autorisation.*')
            
            ->first();
            // dd($redevable);
    $payement = DB::table('payement')
            ->join('autorisation', 'payement.autorisation_id', '=', 'autorisation.id')
            ->select('autorisation.*','payement.*')
            ->whereColumn('autorisation.id','=','payement.autorisation_id')

            ->first  ();
//    $payement = $autorisation->payement();
    // for ($i=date("Y");$i<date("Y")-1;$i++) {
        switch ($payement->trim ) {
                case 1:
                    if ($redevable->numerolot==null) {
                        $redevable->numerolot ='------';
                    }
                    if ($redevable->article==null) {
                        $redevable->article='------';
                    }
                    $b=0;$c=0;$d=0;
                    $a = $payement->montant;

                    // no break
                case 2:
                    if ($redevable->numerolot==null) {
                        $redevable->numerolot ='------';
                    }
                    if ($redevable->article==null) {
                        $redevable->article='------';
                    }
                    $b= $payement->montant;
                    $a=0;$c=0;$d=0;
                    return  view('admin.pdf.index', compact('autorisation', 'redevable', 'payement', 'a', 'b', 'c', 'd'));
                    break;

                case 3:
                    if ($redevable->numerolot==null) {
                        $redevable->numerolot ='------';
                    }
                    if ($redevable->article==null) {
                        $redevable->article='------';
                    }
                    $b=0;$b=0;$d=0;
                    $c= $payement->montant;
                    return  view('admin.pdf.index', compact('autorisation', 'redevable', 'payement', 'a', 'b', 'c', 'd'));
                    break;

                case 4:
                    if ($redevable->numerolot==null) {
                        $redevable->numerolot ='------';
                    }
                    if ($redevable->article==null) {
                        $redevable->article='------';
                    }
                    $b=0;$c=0;$a=0;
                    $d= $payement->montant;
                    return  view('admin.pdf.index', compact('autorisation', 'redevable', 'payement', 'a', 'b', 'c', 'd'));
                    break;
            }
    // }
}
            //view pour ajouter autorisation pour un personne par son id
public function ajouter($id)
    {
        $autorisation= Autorisation::find($id);
        return view('admin.autorisation.ajouter', compact('autorisation'));

    }
public function role(){
    $auto=DB::table('redevable')
    ->join('autorisation','redevable.id', '=', 'autorisation.redevable_id')
    ->join('payement', 'payement.autorisation_id', '=', 'autorisation.id')
    ->select('payement.*', 'autorisation.*', 'redevable.*')
    ->where('payement.annee','=',date('Y'))
    ->distinct('redevable.id','autorisation.id')
    ->distinct()
    ->whereColumn('redevable.id', '=', 'autorisation.redevable_id')
    ->whereColumn('autorisation.id','=','payement.autorisation_id')
    ->orderBy('redevable.id', 'asc')
    ->get();
    return view('admin.pdf.role',compact('auto'));
}

}

