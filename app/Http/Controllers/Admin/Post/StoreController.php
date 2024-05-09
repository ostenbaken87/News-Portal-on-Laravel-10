<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Post::uploadImage($request);
        $post = Post::create($data);
        $post->tags()->sync($request->tags);
        return redirect()->route('posts.index') -> with('success', 'Пост создан успешно');
    }
}
