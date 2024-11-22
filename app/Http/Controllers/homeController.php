<?php

namespace App\Http\Controllers;


use App\Traits\GeneraleTraits;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;


class homeController extends Controller
{


    use GeneraleTraits;

    public function index(Request $request)
    {

        $products = product::all();

        return view("welcome", compact("products"));

    }
    public function store(Request $request)
    {
        $title = $request->title;
        $description = $request->description;

        $imageUrl = $this->uploadIMG($request);


        // $imageUrl = $request->file("imageUrl")->store("products", "public");
        product::create([
            "title" => $title,
            "description" => $description,
            "imageUrl" => $imageUrl,
        ]);
        return redirect()->route("home");


    }
    public function create(Product $product)
    {
        return view("addProduct");
    }
    public function show(Request $request)
    {
        $product = product::findOrFail($request->id);
        return view("show-product", compact("product"));

    }
    public function destroy(product $product)
    {
        $product->delete();
        return to_route("home");

    }
    public function update(Request $request, Product $product)
    {
        $title = $request->title;
        $description = $request->description;
        $imageUrl = $this->uploadIMG($request);
           
        $product->fill([
            'title' => $title,
            'description' => $description,
            'imageUrl'=> $imageUrl,
        ]);

        $product->save();
        return to_route('home');
    }
}

