<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all()
    {
        return view('product', [
            "products" => Product::all()
        ]);
    }

    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        // Product::create([
        //     'name' => $request->input("name"),
        //     'description' => $request->input("description"),
        //     'price' => $request->input("price"),
        //     'file_name' => $request->input("image")
        // ]);

        $payload = [
            'name' => $request->input("name"),
            'description' => $request->input("description"),
            'price' => $request->input("price"),
            'file_name' => $request->file("image")->store("images", "public")
        ];

        Product::query()->create($payload);
        return redirect()->back(); //ke halaman sebelumnya
    }
}
