@extends('front.layouts.layout')

@section('content')
    <div class="main_wrapper_article">
        <div class="main_single">
            <div class="main_single_breadcrumb">
                <div class="main_single_breadcrumb_item">
                    <a href="#">Home</a>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <a href="{{route('category.show', $post->category->id)}}">{{$post->category->title}}</a>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <a href="#">{{$post->title}}</a>
                </div>
            </div>
            <div class="main_single_article_wrapper">
                <div class="main_single_title">
                    <h1>{{$post->title}}</h1>
                </div>
                <div class="main_single_desc">
                    {{$post->desc}}
                </div>
                <div class="main_single_img">
                    <img src="{{$post->getImage()}}" alt="">
                </div>
                <div class="main_single_text">
                    {{strip_tags($post->content)}}
                </div>
            </div>
            <div class="main_single_tags">
                @foreach($post->tags as $tag)
                    <div class="main_single_tag">
                        <a href="{{route('tag.show', $tag->id)}}"><i class="fa-solid fa-tag"></i>{{$tag->label}}</a>
                    </div>
                @endforeach
            </div>
            <div class="main_comment_form">
                <div class="main_comment_form_title">
                    Leave a comment
                </div>
                <form class="main_comment_form_body" action="{{route('post.comment.store', $post->id)}}" method="post">
                    @csrf
                    <label for="message">Your comment</label>
                    <textarea name="message" id="message" rows="6"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="main_single_comments">
                <div class="main_single_comments_title">
                    Comments (2)
                </div>
                <div class="main_single_comments_list">
                    <div class="main_single_comment">
                        <div class="main_single_comment_author">
                            <div class="main_single_comment_img">
                                <img src="{{asset('assets/front/image_face/macron_face.jpeg')}}" alt="">
                            </div>
                            <div class="main_single_comment_user">
                                User name
                            </div>
                        </div>
                        <div class="main_single_comment_text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus corporis, error
                            fugit
                        </div>
                    </div>

                    <div class="main_single_comment">
                        <div class="main_single_comment_author">
                            <div class="main_single_comment_img">
                                <img src="{{asset('assets/front/image_face/putin_face.jpeg')}}" alt="">
                            </div>
                            <div class="main_single_comment_user">
                                User name
                            </div>
                        </div>
                        <div class="main_single_comment_text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus corporis, error
                            fugit
                        </div>
                    </div>

                    <div class="main_single_comment">
                        <div class="main_single_comment_author">
                            <div class="main_single_comment_img">
                                <img src="{{asset('assets/front/image_face/scholz_face.jpg')}}" alt="">
                            </div>
                            <div class="main_single_comment_user">
                                User name
                            </div>
                        </div>
                        <div class="main_single_comment_text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus corporis, error
                            fugit
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_all_tags">
            <div class="main_all_tags_title">All Tags</div>
            <div class="main_all_tags_list">
                @foreach($tags as $tag)
                    <div class="main_all_tag"><a href="{{route('tag.show', $tag->id)}}"><i class="fa-solid fa-tags"></i> {{$tag->label}}</a></div>
                @endforeach
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
                            <a href="{{route('post.show', $popular_post->id)}}">{{$popular_post->title}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
