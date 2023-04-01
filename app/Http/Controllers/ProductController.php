<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products\index' , [ 'products' => $products ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products\create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['amount'] = $request->amount; 
        Product::create($data);
        return redirect('products');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::where('id' , $id)->get();
        return view('products\update' , [ 'product' => $product ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::where('id' , $id);  
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['amount'] = $request->amount; 
        $product->update($data);
        return redirect('products');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function remove(string $id)
    {
        Product::destroy($id);
        return redirect('products');
    }
}
