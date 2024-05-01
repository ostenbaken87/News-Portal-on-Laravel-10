@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>Edit Categories</h1>
                <i class="fas fa-th-list"></i>
            </div>
            <div class="main_back">
                <a href="{{route('categories.index')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        <form class="form_main" method="POST" action="{{route('categories.update', $category->id)}}">
            @csrf
            @method('PUT')
            <label for="title"
                   class="form-label">Name category
            </label>
            <input id="title"
                   name="title"
                   type="text"
                   class="form-control"
                   value="{{ $category->title }}">

            <button type="submit" class="btn-edit">
                Edit
            </button>
        </form>
    </div>
@endsection
