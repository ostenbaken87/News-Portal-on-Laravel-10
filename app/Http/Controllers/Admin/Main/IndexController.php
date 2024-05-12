<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Roles;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [
            'categories' => DB::table('categories')->get(),
            'tags' => DB::table('tags')->get(),
            'posts' => DB::table('posts')->get(),
            'users' => User::with('roles')->get()->take(6),
        ];
        return view('admin.index', compact('data'));
    }
}
