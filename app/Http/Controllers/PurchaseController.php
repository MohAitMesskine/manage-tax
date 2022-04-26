<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\Shipping;
use App\Models\Supplier;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
        /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('purchase_access');

        return view('inventory.purchase.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('purchase_create');

        $suppliers = Supplier::where('active', true)->get();
        $warehouses = Warehouse::where('active', true)->get();
        $products = Product::where('active', true)->get();
        $shippings = Shipping::where('active', true)->get();

        return view('inventory.purchase.create', [
            'suppliers' => $suppliers,
            'warehouses' => $warehouses,
            'products' => $products,
            'shippings' => $shippings
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('purchase_create');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        $this->authorize('purchase_access');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        $this->authorize('purchase_edit');
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        $this->authorize('purchase_edit');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        $this->authorize('purchase_delete');
        //
    }
}
