<?php

namespace App\Http\Controllers\Front\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $post->increment('views');
        $popular_posts = Post::query()
            ->orderBy('views', 'desc')
            ->limit(3)
            ->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('front.posts.show',compact('post','categories','tags','popular_posts'));
    }
}
