@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>Creat Posts</h1>
                <i class="fas fa-paste"></i>
            </div>
            <div class="main_back">
                <a href="{{route('posts.index')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        <form class="form_main" method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf
            <label for="title" class="form-label">Post title</label>
            <input id="title"
                   name="title"
                   type="text"
                   class="form-control">

            <label for="desc" class="form-label">Post description</label>
            <input id="desc"
                   name="desc"
                   type="text"
                   class="form-control">

            <label for="content" class="form-label">Post text</label>
            <textarea id="summernote"
                      placeholder="Create text post"
                      rows="7"
                      name="content"
                      class="form-control"></textarea>

            <label for="image" class="form-label">Upload image</label>
            <input type="file" name="image" id="image">

            <label for="categories_id" class="form-label">Post category</label>
            <select name="categories_id"
                    id="categories_id">
                    <option value="">Choose category</option>
                @foreach($categories as $k => $v)
                    <option value="{{$k}}">{{$v}}</option>
                @endforeach
            </select>

            <label for="tags" class="form-label">Post tags</label>
            <select name="tags[]"
                    id="tags"
                    multiple="multiple"
                    class="select2"
                    data-placeholder="Choose tags">
                @foreach($tags as $k => $v)
                    <option value="{{$k}}">{{$v}}</option>
                @endforeach
            </select>

            <button type="submit" class="btn_create">
                Create
            </button>
        </form>
    </div>
@endsection
