<?php

namespace App\Http\Controllers\Front\Post\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(Post $post, StoreRequest $request)
    {
        $data = $request->validated();
        $data['post_id'] = auth()->user()->id;
        $data['user_id'] = $post->id;
        Comment::create($data);
        return redirect()->route('post.show', $post->id);
    }
}
