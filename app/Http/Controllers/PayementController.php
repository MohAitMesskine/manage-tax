<?php

namespace App\Http\Controllers;

use App\Models\Autorisation;

use Illuminate\Support\Facades\DB;
use App\Models\Payement;
// use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;

class PayementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payement=DB::table('payement')
        ->join('autorisation', 'payement.autorisation_id', '=', 'autorisation.id')
        ->select('autorisation.numero','payement.*')
        ->get();
        $pay = Payement::paginate(3);
        return view('admin.payement.index', ['payement' => $payement], compact('pay'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Autorisation $autorisation)
    {
        $autorisations= Autorisation::pluck('numero','id');
        return view('admin.payement.create', compact('autorisation', 'autorisations'));
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
            'date' => 'nullable|date',
            'quittence' => 'nullable|max:255',
            'date_quittence' => 'nullable|date',
            'annee' => 'nullable|integer',
            'trim' => 'nullable|max:255',
            'active' => 'nullable|boolean',
        ]);
       Payement::create($request->all());
        return redirect()->route('payement.index')
                        ->with('success','Redevable created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payement  $payement
     * @return \Illuminate\Http\Response
     */
    public function show(Payement $payement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payement  $payement
     * @return \Illuminate\Http\Response
     */
    public function edit(Payement $payement)
    {
 
        $autorisations= Autorisation::get();
        return view('admin.payement.edit',compact('payement', 'autorisations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payement  $payement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payement $payement)
    {
        $request->validate([
            'date' => 'nullable|date',
            'quittence' => 'nullable|max:255',
            'date_quittence' => 'nullable|date',
            'annee' => 'nullable|integer',
            'trim' => 'nullable|max:255',
            'active' => 'nullable|boolean',
        ]);

        $payement->update($request->all());
        return redirect()->route('payement.index')
                        ->with('success','payement mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payement  $payement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payement $payement)
    {
        //
        $payement->delete();

        return redirect()->route('payement.index')
                        ->with('error','Payement supprimé avec succès');
    }

    public function search(Request $request){

        $search = $request->input('search');
        if($search==null){
            return redirect()->route('payement.index')
                        ->with('error','La recherche est vide !!!');
        }
        else{
        $payement=DB::table('payement')
                      ->join('autorisation', 'payement.autorisation_id', '=', 'autorisation.id')
                      ->select('autorisation.numero','payement.*')
                      ->where('numero', 'LIKE', "%{$search}%")
                      ->get();
        return view('admin.payement.search',['payement' => $payement]);
    }
}
}
