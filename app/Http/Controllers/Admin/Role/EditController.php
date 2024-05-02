<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Models\Roles;

class EditController extends Controller
{
    public function __invoke(Roles $role)
    {
        return view('admin.roles.edit', compact('role'));
    }
}
