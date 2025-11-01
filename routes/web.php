<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/Home', function () {
    return inertia('Home');
});

// Route::get('/api/test', function () {
//     return 'API works!';
// });

// Route::get('/api/products', [ProductController::class, 'index']);  // list products
// Route::post('/api/products', [ProductController::class, 'store']); // add product