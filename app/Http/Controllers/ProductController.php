<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('product_access');

        $products = Product::orderBy('updated_at', 'DESC')->paginate(2);
        return view('inventory.product.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('product_create');

        $categories = Category::where('active', 1)->get();
        $units = Unit::all();
        return view('inventory.product.create', compact('categories', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('product_create');

        $validator = Validator::make($request->all(), [
            'code' => 'max:10|unique:products|nullable',
            'name' => 'required|max:255',
            'sku' => 'max:255|nullable',
            'description' => 'max:1000|nullable',
            'category_id' => 'required|exists:categories,id',
            'unit_id' => 'required|exists:units,id',
            'cost' => 'numeric|nullable',
            'price' => 'numeric|nullable',
            'image' => 'nullable|sometimes|image|mimes:webp,jpeg,bmp,png,jpg,svg|max:2000',
            'quantity' => 'numeric|nullable',
            'quantity_alert' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->route('products.create')->withErrors($validator)->withInput();
        }

        try {
            $product = new Product;
            $product->code = $request->code;
            $product->name = $request->name;
            $product->sku = $request->sku;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->unit_id = $request->unit_id;

            $product->cost = $request->cost;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->quantity_alert = $request->quantity_alert;

            $product->active = $request->has('active');

            if($request->hasFile('image') && $request->file('image')->isValid()){
                $product->addMediaFromRequest('image')->toMediaCollection('products');
            }

            $product->save();
            return redirect()->route('products.index')->with('success', __('New product has been created'));

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $this->authorize('product_edit');

        $categories = Category::where('active', 1)->get();
        $units = Unit::all();
        return view('inventory.product.edit', compact('categories', 'units', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->authorize('product_edit');


        $validator = Validator::make($request->all(), [
            'code' => 'max:10|nullable|unique:products,code,'.$product->id,
            'name' => 'required|max:255',
            'sku' => 'max:255|nullable',
            'description' => 'max:1000|nullable',
            'category_id' => 'required|exists:categories,id',
            'unit_id' => 'required|exists:units,id',
            'cost' => 'numeric|nullable',
            'price' => 'numeric|nullable',
            'image' => 'nullable|sometimes|image|mimes:webp,jpeg,bmp,png,jpg,svg|max:2000',
            'quantity' => 'numeric|nullable',
            'quantity_alert' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $product->code = $request->code;
            $product->name = $request->name;
            $product->sku = $request->sku;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->unit_id = $request->unit_id;

            $product->cost = $request->cost;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->quantity_alert = $request->quantity_alert;

            $product->active = $request->has('active');

            if($request->hasFile('image') && $request->file('image')->isValid()){
                $product->addMediaFromRequest('image')->toMediaCollection('products');
            }

            $product->save();
            return redirect()->route('products.index', $product->id)->with('success', __('Product has been updated'));

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->authorize('product_delete');

        $product->delete();
        return redirect()->route('products.index')->with('success', __('Product has been deleted'));
    }


    public function getproduct($id)
    {
        $this->authorize('product_show');

        $product = Product::find($id);
        $html = '<div class="row">
        <div class="col-4">
            <img src="' . $product->getFirstMediaUrl('products') . '" onerror="this.src=\'/img/notfound/200.webp\'" class="img-fluid" alt="">
        </div>
        <div class="col-8">
            <p>
                </p><div class="badge badge-pill badge-dark">'. e($product->category->name) .'</div>
            <p></p>
            <h3 class="text-danger">
                $ '. e($product->price) .'
            </h3>
            <p class="text-green">Purchase Price: $ '. e($product->cost) .'</p>
            <p>'. e($product->description) .'</p>
            <p>In Stock: '. e($product->quantity) .'</p>
            <p>Unit: '. e($product->unit->name) .'</p>
            <p>Status: '. (($product->active == 1)?'Active':'Disabled') .'</p>
        </div>
    </div>
    <h5><strong>Sales</strong></h5>
    <div id="line_chart" class="chart-shadow"></div>';
        return response($html);

    }
}
