<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $data['avatar'] = User::updateAvatar($request, $user->avatar) ?? $user->avatar;
        $user->update($data);
        return redirect()->route('users.index')->with('success', 'Пользователь обновлен успешно');
    }
}
