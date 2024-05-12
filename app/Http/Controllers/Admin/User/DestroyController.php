<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestroyController extends Controller
{
    public function __invoke(User $user)
    {
        Storage::delete($user->avatar);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Пользователь удален успешно');
    }
}
