<?php

namespace App\Http\Controllers\Front\Post\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function __invoke(Post $post, StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $post->id;
        Comment::create($data);
        return redirect()->route('post.show', $post->id);
    }
}
