<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Models\Roles;

class DestroyController extends Controller
{
    public function __invoke(Roles $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success','Роль успешно удален');
    }
}
