<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('index');
});

// Route::get('/product', function () {
//     return view('product', [
//         "products" => Product::all()
//     ]);
// });

Route::prefix("product")->group(function(){
    Route::get("/", [ProductController::class, 'all']);
    Route::get("/add", [ProductController::class, 'add']);
    Route::post("/create", [ProductController::class, 'create']);
});

// Route::get('/product', [ProductController::class, 'all']);
