@extends('front.layouts.layout')

@section('content')
    <div class="main_wrapper">
        <div class="main_page">
            <div class="main_articles">
                <div class="main_title">
                    <h1>New articles</h1>
                </div>
                <div class="main_list">
                    @if(isset($posts) && count($posts) > 0)
                        @foreach($posts as $post)
                            <div class="main_article">
                                <div class="main_article_img">
                                    <img src="{{$post->getImage()}}" alt="">
                                </div>
                                <div class="main_article_title">
                                    <a href="{{route('post.show', $post->id)}}">{{$post->title}}</a>
                                </div>
                                <div class="main_article_desc">
                                    {{$post->desc}}
                                </div>
                                <div class="main_article_read">
                                    <div>
                                        <a href="{{route('post.show', $post->id)}}">Read</a>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-comments"></i> : {{$post->comments->count()}}
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-eye"></i> : {{$post->views}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No posts</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="main_sidebar">
            <h2 class="main_sidebar_title">Politicians say</h2>
            <div class="main_sidebar_message">
                <img src="{{asset('assets/front/image_face/putin_face.jpeg')}}" class="main_sidebar_img" alt="">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptatum.
                </p>
            </div>
            <div class="main_sidebar_message">
                <img src="{{asset('assets/front/image_face/biden_face.jpg')}}" class="main_sidebar_img" alt="">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptatum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptatum.
                </p>
            </div>
            <div class="main_sidebar_message">
                <img src="{{asset('assets/front/image_face/macron_face.jpeg')}}" class="main_sidebar_img" alt="">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptatum.
                </p>
            </div>
            <div class="main_sidebar_message">
                <img src="{{asset('assets/front/image_face/scholz_face.jpg')}}" class="main_sidebar_img" alt="">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptatum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptatum.
                </p>
            </div>
            <div class="main_sidebar_message">
                <img src="{{asset('assets/front/image_face/tramp_face.jpg')}}" class="main_sidebar_img" alt="">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptatum.
                </p>
            </div>
            <div class="main_sidebar_more">
                <a href="">More</a>
                <i class="fa-solid fa-angle-down"></i>
            </div>
        </div>
        <div class="main_popular">
            <div class="main_popular_title">
                <h3>Popular articles</h3>
            </div>
            <div class="main_popular_articles">
                @foreach($popular_posts as $popular_post)
                    <div class="main_popular_article">
                        <div class="main_popular_article_img">
                            <img src="{{$popular_post->getImage()}}" alt="">
                        </div>
                        <div class="main_popular_article_title">
                            <a href="{{route('post.show', $popular_post->id)}}">
                                {{$popular_post->title}}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
