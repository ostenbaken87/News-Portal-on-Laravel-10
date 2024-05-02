@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>Tag - {{$tag->label}}</h1>
            </div>
            <div class="main_back">
                <a href="{{route('tags.index')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        <div class="main_post_items">
            <div class="main_post_title">
                <div class="post_title_name">
                    Tag title:
                </div>
                <div class="post_title_text">
                    {{$tag->label}}
                </div>
            </div>

            <div class="main_post_buttons">
                <button type="submit" class="btn-edit">
                    <a href="{{route('tags.edit',$tag->id)}}">Edit</a>
                </button>
                <form action="{{route('tags.destroy',$tag->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete" onclick="return confirm('Подтвердите удаление')">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
