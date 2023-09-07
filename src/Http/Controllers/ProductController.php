<?php

namespace Moin35\Lvcrud\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Moin35\Lvcrud\Models\Product;
class ProductController extends Controller
{
    public function index(){
        $product = Product::latest()->paginate(5);
        return view('Lvcrud::index',compact('product'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }

    public function create(){
        return view('Lvcrud::create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        Product::create($request->all());
        return redirect()->route('product.index')
                        ->with('success','Product created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product){
        return view('Lvcrud::show',compact('product'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product){
        return view('Lvcrud::edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product){
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        $product->update($request->all());
        return redirect()->route('product.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')
                        ->with('success','Product deleted successfully');
    }
}
