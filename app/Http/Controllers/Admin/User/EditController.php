<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $roles = Roles::pluck('role', 'id')->all();
        return view('admin.users.edit', compact('user', 'roles'));
    }
}
