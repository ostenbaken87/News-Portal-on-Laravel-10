<?php

namespace App\Http\Controllers\Front\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $post->increment('views');
        $popular_posts = Post::orderBy('views', 'desc')
            ->limit(3)
            ->get();
        $categories = Cache::remember('categories', 60, function () {
            return Category::all();
        });
        $tags = Cache::remember('tags', 60, function () {
            return Tag::all();
        });
        return view('front.posts.show',compact('post','categories','tags','popular_posts'));
    }
}
