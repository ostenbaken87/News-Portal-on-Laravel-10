<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $data['image'] = Post::updateImage($request, $post->image) ?? $post->image;
        $post->update($data);
        $post->tags()->sync($data['tags']);
        return redirect()->route('posts.index')->with('success', 'Пост обновлен успешно');
    }
}
