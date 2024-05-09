@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>Post - {{ $post->title }}</h1>
            </div>
            <div class="main_back">
                <a href="{{route('posts.index')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        <div class="main_post_items">
            <div class="main_post_title">
                <div class="post_title_name">
                    Post title:
                </div>
                <div class="post_title_text">
                    {{ $post->title }}
                </div>
            </div>
            <div class="main_post_description">
                <div class="post_description_name">
                    Post description:
                </div>
                <div class="post_description_text">
                    {{ $post->desc }}
                </div>
            </div>
            <div class="main_post_text">
                <div class="post_text_name">
                    Post text:
                </div>
                <div class="post_text_text">
                    {!! $post->content !!}
                </div>
            </div>
            <div class="main_post_image">
                <div class="post_image_name">
                    Post image:
                </div>
                <div class="post_image_image">
                    <img src="{{$post->getImage()}}" alt="">
                </div>
            </div>
            <div class="main_post_category">
                <div class="post_category_name">
                    Post category:
                </div>
                <div class="post_category_category">
                    {{$post->category->title}}
                </div>
            </div>
            <div class="main_post_tags">
                <div class="post_tags_name">
                    Post tags:
                </div>
                <div class="post_tags_tags">
                    {{$post->tags->pluck('label')->join(', ')}}
                </div>
            </div>
            <div class="main_post_buttons">
                <button type="submit" class="btn-edit">
                    <a href="{{route('posts.edit', $post->id)}}">Edit</a>
                </button>
                <button type="submit" class="btn-delete">
                    Delete
                </button>
            </div>
        </div>
    </div>
@endsection
