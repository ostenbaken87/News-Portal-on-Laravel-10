@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>Creat User</h1>
                <i class="fas fa-user-plus"></i>
            </div>
            <div class="main_back">
                <a href="{{route('users.index')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        <form class="form_main" action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name"
                   class="form-label">User name</label>
            <input id="name"
                   name="name"
                   type="text"
                   value="{{old('name')}}"
                   class="form-control">

            <label for="email"
                   class="form-label">User email</label>
            <input id="email"
                   name="email"
                   type="email"
                   value="{{old('email')}}"
                   class="form-control">

            <label for="password"
                   class="form-label">User password</label>
            <input id="password"
                   name="password"
                   type="password"
                   class="form-control">

            <label for="avatar"
                   class="form-label">Upload avatar</label>
            <input type="file"
                   name="avatar" id="avatar">

            <label for="roles_id"
                   class="form-label">User role</label>
            <select name="roles_id"
                    id="roles_id">
                @if(count($roles))
                    @foreach($roles as $k=>$v)
                        <option value="{{$k}}">{{$v}}</option>
                    @endforeach
                @else
                    <option>Create role</option>
                @endif
            </select>

            <button type="submit" class="btn_create">
                Create
            </button>
        </form>
    </div>
@endsection
