<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Role\UpdateRequest;
use App\Models\Roles;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Roles $role)
    {
        $data = $request->validated();
        $role->update($data);
        return redirect()->route('roles.show',compact('role'))->with('success', 'Изменения внесены');
    }
}
