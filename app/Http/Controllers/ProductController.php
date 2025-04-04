<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product= Product::all();
        return view('product.index' , compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'Title' => 'required',
        'Description' => 'required',
        'Price' => 'required',
        'Category' => 'required',
        'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    $input = $request->all();
    
    if($image = $request->file('Image')){
        $destinationPath = 'images/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['Image'] = $profileImage;
    }
    
    $product = Product::create($input);
    
    return redirect()->route('home')->with('success', 'Product created successfully');
}
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        $product = Product::find($product->id);
        return view('product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Price' => 'required',
            'Category' => 'required',
           
        ]);
        
        $input = $request->all();
        
        if($image = $request->file('Image')){
            $destinationPath = 'images/';            
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['Image'] = $profileImage; 
        }
        
        $product->update($input);
        
        return redirect()->route('home')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        
        $product->delete();
        
        return redirect()->route('home')->with('success', 'Product deleted successfully');
    }
    public function list()
    {
        $categories = Category::all();
        $product = Product::all();
        $tag = Product::all();
        return view ('product.list',compact('product','categories','tag'));
    }
}
