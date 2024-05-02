@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>Create Role</h1>
                <i class="fas fa-th-list"></i>
            </div>
            <div class="main_back">
                <a href="{{route('roles.index')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        <form class="form_main" method="post" action="{{route('roles.store')}}">
            @csrf
            <label for="role"
                   class="form-label">Name Role
            </label>
            <input id="role"
                   name="role"
                   type="text"
                   class="form-control"
                   value="{{ old('role') }}">

            <button type="submit" class="btn_create">
                Create
            </button>
        </form>
    </div>
@endsection
