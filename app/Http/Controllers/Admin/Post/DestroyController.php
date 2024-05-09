<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        Storage::delete($post->image);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Пост удален успешно');
    }
}
