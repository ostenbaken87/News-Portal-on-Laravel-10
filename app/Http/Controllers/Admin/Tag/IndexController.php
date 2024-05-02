<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = DB::table('tags')->get();
        return view('admin.tags.index', compact('tags'));
    }
}
