<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin'], function (){

    Route::group(['prefix' => 'main'], function () {
        Route::get('/',\App\Http\Controllers\Admin\Main\IndexController::class)->name('admin.home');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('categories.index');
        Route::get('/create',\App\Http\Controllers\Admin\Category\CreateController::class)->name('categories.create');
        Route::post('/',\App\Http\Controllers\Admin\Category\StoreController::class)->name('categories.store');
        Route::get('/{category}', \App\Http\Controllers\Admin\Category\ShowController::class)->name('categories.show');
        Route::get('/{category}/edite',\App\Http\Controllers\Admin\Category\EditController::class)->name('categories.edit');
        Route::put('/{category}',\App\Http\Controllers\Admin\Category\UpdateController::class)->name('categories.update');
        Route::delete('/{category}',\App\Http\Controllers\Admin\Category\DestroyController::class)->name('categories.destroy');
    });

});
