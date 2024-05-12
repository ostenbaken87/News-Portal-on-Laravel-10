@extends('front.layouts.layout')

@section('content')
    <div class="main_slider">
        <div class="main_slide">
            <img src="{{asset('assets/front/images/biden.jpg')}}" alt="">
            <div class="main_slider_text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus corporis, error fugit impedit
                necessitatibus nobis? Aperiam at et ipsa nam nesciunt quis repellendus unde.
            </div>
        </div>
    </div>
    <div class="main_page">
        <div class="main_articles">
            <div class="main_title">
                <h1>New articles</h1>
            </div>
            <div class="main_list">
                @foreach($posts as $post)
                    <div class="main_article">
                        <div class="main_article_img">
                            <img src="{{$post->getImage()}}" alt="">
                        </div>
                        <div class="main_article_title">
                            {{$post->title}}
                        </div>
                        <div class="main_article_desc">
                            {{$post->desc}}
                        </div>
                        <div class="main_article_read">
                            <div>
                                <a href="#">Read</a>
                            </div>
                            <div>
                                <i class="fa-solid fa-comments"></i> : 3
                            </div>
                            <div>
                                <i class="fa-solid fa-eye"></i> : 32
                            </div>
                        </div>
                    </div>
                @endforeach
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
                        {{$popular_post->title}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection