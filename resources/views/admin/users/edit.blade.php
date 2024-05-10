@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>Edit User</h1>
                <i class="fas fa-user-plus"></i>
            </div>
            <div class="main_back">
                <a href="{{route('users.index')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        <form class="form_main" action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="name"
                   class="form-label">User name</label>
            <input id="name"
                   name="name"
                   type="text"
                   value="{{$user->name}}"
                   class="form-control">

            <label for="email"
                   class="form-label">User email</label>
            <input id="email"
                   name="email"
                   type="email"
                   value="{{$user->email}}"
                   class="form-control">

            <label for="password"
                   class="form-label">User password</label>
            <input id="password"
                   name="password"
                   type="password"
                   value="{{$user->password}}"
                   class="form-control">

            <label for="avatar"
                   class="form-label">Upload avatar</label>
            <input type="file"
                   name="avatar"
                   id="avatar">

            <div class="post_image_name">
                User avatar:
            </div>
            <div class="post_image_image">
                <img src="{{$user->getAvatar()}}" alt="">
            </div>

            <label for="roles_id"
                   class="form-label">User role</label>
            <select name="roles_id"
                    id="roles_id">
                @foreach($roles as $k=>$v)
                    <option value="{{$k}}" @if($k == $user->roles_id) selected @endif>{{$v}}</option>
                @endforeach
            </select>
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <button type="submit" class="btn_create">
                Edit
            </button>
        </form>
    </div>
@endsection
