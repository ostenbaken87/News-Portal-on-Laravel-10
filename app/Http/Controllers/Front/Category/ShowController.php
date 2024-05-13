<?php

namespace App\Http\Controllers\Front\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Category $category)
    {
        $categories = Category::query()->get();
        $posts = $category->posts()->with('category')->orderBy('id', 'desc')->get();
        return view('front.categories.show', compact('category', 'posts', 'categories'));
    }
}
