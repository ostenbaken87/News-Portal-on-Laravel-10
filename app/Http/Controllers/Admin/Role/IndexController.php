<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke()
    {
        $roles = DB::table('roles')->get();
        return view('admin.roles.index', compact('roles'));
    }
}
