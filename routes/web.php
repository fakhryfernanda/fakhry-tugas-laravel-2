<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::prefix("product")->group(function(){
    Route::get("/", [ProductController::class, 'all']);
    Route::get("/add", [ProductController::class, 'add']);
    Route::get("/detail/{id}", [ProductController::class, 'detail']);
    
    Route::post("/create", [ProductController::class, 'create']);
    Route::put("/update/{id}", [ProductController::class, 'update']);
    Route::get("/delete/{id}", [ProductController::class, 'delete']);
});

// Route::get('/product', [ProductController::class, 'all']);
