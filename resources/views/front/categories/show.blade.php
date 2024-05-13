@extends('front.layouts.layout')

@section('content')
    <div class="main_wrapper_all_articles">
        <div class="main_all_articles_title">
            <h1>All Articles - category: {{$category->title}}</h1>
        </div>
       @if($category->posts->count())
            <div class="main_all_articles_list">
                @foreach($posts as $post)
                    <div class="main_all_articles_item">
                        <div class="main_all_articles_item_img">
                            <img src="{{$post->getImage()}}" alt="">
                        </div>
                        <div class="main_all_articles_item_title">
                            {{$post->title}}
                        </div>
                        <div class="main_all_articles_item_state">
                            <i class="fa-solid fa-eye"></i>
                            <span>{{$post->views}}</span>
                            <i class="fa-solid fa-comment"></i>
                            <span>{{$post->comments->count()}}</span>
                        </div>
                        <div class="main_all_articles_item_read">
                            <a href="{{route('post.show', $post->id)}}">Read</a>
                        </div>
                    </div>
                @endforeach
            </div>
       @else
            <h2>No articles in this category...</h2>
       @endif
    </div>
@endsection
