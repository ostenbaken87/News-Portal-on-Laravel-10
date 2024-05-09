<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $categories = Cache::remember('categories', 60, function () {
            return Category::pluck('title', 'id')->all();
        });
        $tags = Cache::remember('tags', 60, function () {
            return Tag::pluck('label', 'id')->all();
        });
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }
}
