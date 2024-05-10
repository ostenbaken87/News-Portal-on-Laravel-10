<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $roles = Roles::pluck('role', 'id')->all();
        return view('admin.users.create', compact('roles'));
    }
}
