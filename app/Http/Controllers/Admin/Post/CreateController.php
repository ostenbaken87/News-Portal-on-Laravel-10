<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::pluck('title','id')->all();
        $tags = Tag::pluck('label','id')->all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }
}
