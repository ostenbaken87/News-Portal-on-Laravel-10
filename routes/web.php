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
//  Category routes
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('categories.index');
        Route::get('/create',\App\Http\Controllers\Admin\Category\CreateController::class)->name('categories.create');
        Route::post('/',\App\Http\Controllers\Admin\Category\StoreController::class)->name('categories.store');
        Route::get('/{category}', \App\Http\Controllers\Admin\Category\ShowController::class)->name('categories.show');
        Route::get('/{category}/edite',\App\Http\Controllers\Admin\Category\EditController::class)->name('categories.edit');
        Route::put('/{category}',\App\Http\Controllers\Admin\Category\UpdateController::class)->name('categories.update');
        Route::delete('/{category}',\App\Http\Controllers\Admin\Category\DestroyController::class)->name('categories.destroy');
    });
//  Tags routes
    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Tag\IndexController::class)->name('tags.index');
        Route::get('/create',\App\Http\Controllers\Admin\Tag\CreateController::class)->name('tags.create');
        Route::post('/',\App\Http\Controllers\Admin\Tag\StoreController::class)->name('tags.store');
        Route::get('/{tag}', \App\Http\Controllers\Admin\Tag\ShowController::class)->name('tags.show');
        Route::get('/{tag}/edite',\App\Http\Controllers\Admin\Tag\EditController::class)->name('tags.edit');
        Route::put('/{tag}',\App\Http\Controllers\Admin\Tag\UpdateController::class)->name('tags.update');
        Route::delete('/{tag}',\App\Http\Controllers\Admin\Tag\DestroyController::class)->name('tags.destroy');
    });

});
