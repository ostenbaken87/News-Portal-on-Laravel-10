<?php
use Illuminate\Support\Facades\Route;

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
//  Roles routes
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Role\IndexController::class)->name('roles.index');
        Route::get('/create',\App\Http\Controllers\Admin\Role\CreateController::class)->name('roles.create');
        Route::post('/',\App\Http\Controllers\Admin\Role\StoreController::class)->name('roles.store');
        Route::get('/{role}', \App\Http\Controllers\Admin\Role\ShowController::class)->name('roles.show');
        Route::get('/{role}/edite',\App\Http\Controllers\Admin\Role\EditController::class)->name('roles.edit');
        Route::put('/{role}',\App\Http\Controllers\Admin\Role\UpdateController::class)->name('roles.update');
        Route::delete('/{role}',\App\Http\Controllers\Admin\Role\DestroyController::class)->name('roles.destroy');
    });
// Posts routes
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Post\IndexController::class)->name('posts.index');
        Route::get('/create', \App\Http\Controllers\Admin\Post\CreateController::class)->name('posts.create');
        Route::post('/', \App\Http\Controllers\Admin\Post\StoreController::class)->name('posts.store');
    });
});
