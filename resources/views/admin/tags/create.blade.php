@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>Create Tag</h1>
                <i class="fas fa-th-list"></i>
            </div>
            <div class="main_back">
                <a href="{{route('tags.index')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        <form class="form_main" method="post" action="{{route('tags.store')}}">
            @csrf
            <label for="label"
                   class="form-label">Name Tag
            </label>
            <input id="label"
                   name="label"
                   type="text"
                   class="form-control"
                   value="{{ old('label') }}">

            <button type="submit" class="btn_create">
                Create
            </button>
        </form>
    </div>
@endsection
