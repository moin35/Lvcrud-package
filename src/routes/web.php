<?php


use Illuminate\Support\Facades\Route;
use Moin35\Lvcrud\Http\Controllers\ProductController;

Route::middleware(['web'])
    ->group(function () {
        Route::resource('product', ProductController::class)->names('product');
    });