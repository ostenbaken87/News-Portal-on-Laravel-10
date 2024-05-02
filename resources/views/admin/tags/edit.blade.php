@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>Edit Tag</h1>
                <i class="fas fa-th-list"></i>
            </div>
            <div class="main_back">
                <a href="{{route('tags.index')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        <form class="form_main" method="POST" action="{{route('tags.update', $tag->id)}}">
            @csrf
            @method('PUT')
            <label for="label"
                   class="form-label">Name Tag
            </label>
            <input id="label"
                   name="label"
                   type="text"
                   class="form-control"
                   value="{{ $tag->label }}">

            <button type="submit" class="btn-edit">
                Edit
            </button>
        </form>
    </div>
@endsection
