<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RegisterController extends Controller
{
    public function index()
    {
        $categories = Cache::remember('categories', 60, function () {
            return Category::all();
        });
        return view('front.auth.register', compact('categories'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $data['avatar'] = User::uploadAvatar($request);
        $user = \App\Models\User::create($data);
        auth()->login($user);
        return view('front.home');
    }
}
