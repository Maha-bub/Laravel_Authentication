<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('backend.product.index', ['items' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat_all = Category::all();
        return view('backend.product.create', ['items' => $cat_all]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validation and old data show to the input box is due
        $request->validate([
            'name' => 'required|min:4|max:50',
            'price' => 'required|numeric',
            'category' => 'required',
            'status' => 'required',
            'stock' => 'required|numeric',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable',
        ]);

        // send request data to the database

        $products = new Product;
        $products->name = $request->name;
        $products->category = $request->category;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->status = $request->stock;

        $randNumber = rand(1, 50);
        $photoType = $request->photo->extension();
        $photoExtension = strtolower($photoType);
        $photoName = $randNumber . time() . "." . $photoExtension;
        // dd(public_path('assets/images'));
        // dd($request->file('photo'));
        $request->photo->move(
            public_path('assets/images'),
            $photoName
        );
        $products->image = 'images/' . $photoName;

        // $photoName = time() . '.' . $request->photo->extension();

        // $request->photo->move(
        //     public_path('assets/images'),
        //     $photoName
        // );

        // dd(file_exists(public_path('assets/images/' . $photoName)));
        //   dd($request);

        $products->save();
        return redirect('/admin/product')->with('succes', 'Product added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
