<?php

namespace App\Http\Controllers\Front\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Cache::remember('categories', 60, function () {
            return Category::with('posts')->get();
        });
        $posts = Post::with('comments')
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();
        $popular_posts = Post::query()
            ->orderBy('views', 'desc')
            ->limit(3)
            ->get();

        return view('front.home', compact('categories', 'posts', 'popular_posts'));
    }
}
