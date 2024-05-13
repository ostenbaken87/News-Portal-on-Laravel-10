<?php

namespace App\Http\Controllers\Front\Tag;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $categories = Category::all();
        $posts = $tag->posts()->with('category')->orderBy('id', 'desc')->get();
        return view('front.tag.show', compact('tag', 'posts', 'categories'));
    }
}
