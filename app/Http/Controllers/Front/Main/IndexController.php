<?php

namespace App\Http\Controllers\Front\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = DB::table('categories')->get();
        $posts = Post::query()
            ->get()
            ->take(4);
        $popular_posts = Post::query()
            ->orderBy('views','desc')
            ->get()
            ->take(3);
        return view('front.home',compact('categories','posts','popular_posts'));
    }
}
