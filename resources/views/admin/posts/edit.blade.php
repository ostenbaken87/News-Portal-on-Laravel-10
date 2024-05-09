@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>Edit Posts</h1>
                <i class="fas fa-paste"></i>
            </div>
            <div class="main_back">
                <a href="{{route('posts.index')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        <form class="form_main" method="post" action="{{route('posts.update', $post->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="title" class="form-label">Post title</label>
            <input id="title"
                   name="title"
                   type="text"
                   value="{{ $post->title }}"
                   class="form-control">

            <label for="desc" class="form-label">Post description</label>
            <input id="desc"
                   name="desc"
                   type="text"
                   value="{{ $post->desc }}"
                   class="form-control">

            <label for="content" class="form-label">Post text</label>
            <textarea id="summernote"
                      placeholder="Create text post"
                      rows="7"
                      name="content"
                      class="form-control">{!! $post->content !!}</textarea>

            <label for="image" class="form-label">Upload image</label>
            <input type="file" name="image" id="image" value="{{$post->getImage()}}">

            <div class="post_image_name">
                Post image:
            </div>
            <div class="post_image_image">
                <img src="{{$post->getImage()}}" alt="">
            </div>

            <label for="category_id" class="form-label">Post category</label>
            <select name="category_id"
                    id="category_id">
                @foreach($categories as $k => $v)
                    <option value="{{$k}}" @if($k == $post->category_id) selected @endif>{{$v}}</option>
                @endforeach
            </select>

            <label for="tags" class="form-label">Post tags</label>
            <select name="tags[]"
                    id="tags"
                    multiple="multiple"
                    class="select2"
                    data-placeholder="Choose tags">
                @foreach($tags as $k => $v)
                    <option value="{{$k}}" @if(in_array($k, $post->tags->pluck('id')->all())) selected @endif>{{$v}}</option>
                @endforeach
            </select>

            <button type="submit" class="btn_create">
                Edit
            </button>
        </form>
    </div>
@endsection
