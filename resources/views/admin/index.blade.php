@extends('admin.layouts.layout')

@section('content')
    <div class="main_content wrapper_content">
        <div class="main_card blue">
            <div class="card_icon">
                <a href="{{route('categories.index')}}">
                    <i class="fas fa-th-list"></i>
                </a>
            </div>
            <div class="card_body">
                <div class="card_title">
                    Categories : {{count($data['categories'])}}
                </div>
                <div class="card_look">
                    <a href="{{route('categories.index')}}">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
                <div class="card_edit">
                    <a href="{{route('categories.create')}}">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main_card green">
            <div class="card_icon">
                <a href="{{route('tags.index')}}">
                    <i class="fas fa-tags"></i>
                </a>
            </div>
            <div class="card_body">
                <div class="card_title">
                    Tags : {{count($data['tags'])}}
                </div>
                <div class="card_look">
                    <a href="{{route('tags.index')}}">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
                <div class="card_edit">
                    <a href="{{route('tags.create')}}">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main_card red">
            <div class="card_icon">
                <i class="fas fa-paste"></i>
            </div>
            <div class="card_body">
                <div class="card_title">
                    Posts : {{count($data['posts'])}}
                </div>
                <div class="card_look">
                    <a href="{{route('posts.index')}}">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
                <div class="card_edit">
                    <a href="{{route('posts.create')}}">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main_card red">
            <div class="card_icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="card_body">
                <div class="card_title">
                    Users : {{count($data['users'])}}
                </div>
                <div class="card_look">
                    <a href="{{route('users.index')}}">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
                <div class="card_edit">
                    <a href="{{route('users.create')}}">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main_card yellow">
            <div class="card_icon">
                <a href="{{route('roles.index')}}">
                    <i class="fa-solid fa-id-card-clip"></i>
                </a>
            </div>
            <div class="card_body">
                <div class="card_title">
                    Roles
                </div>
                <div class="card_look">
                    <a href="{{route('roles.index')}}">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
                <div class="card_edit">
                    <a href="{{route('roles.create')}}">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main_card blue">
            <div class="card_icon">
                <i class="fa-solid fa-comments"></i>
            </div>
            <div class="card_body">
                <div class="card_title">
                    Comments
                </div>
                <div class="card_look">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="card_edit">
                    <a href="#">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main_community wrapper_content">
        <div class="main_comments">
            <div class="main_comments_count grey">
                Lust comments (8)
            </div>
            <div class="main_comments_lent">
                <div class="comments_user grey">
                    <div class="comments_user_profile">
                        <div class="comments_user_photo">
                            <img src="src/avatars/avatar01.jpg" alt="">
                        </div>
                        <div class="comments_user_name">
                            <a href="">
                                <p>Ivan Ivanov</p>
                            </a>
                        </div>
                    </div>
                    <div class="comments_user_comment">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, dolore libero nisi
                            officia rerum unde.
                        </p>
                    </div>
                </div>
                <div class="comments_user grey">
                    <div class="comments_user_profile">
                        <div class="comments_user_photo">
                            <img src="src/avatars/avatar02.jpg" alt="">
                        </div>
                        <div class="comments_user_name">
                            <a href="">
                                <p>Ivan Ivanov</p>
                            </a>
                        </div>
                    </div>
                    <div class="comments_user_comment">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iure molestias praesentium
                            quam qui veritatis?</p>
                    </div>
                </div>
                <div class="comments_user grey">
                    <div class="comments_user_profile">
                        <div class="comments_user_photo">
                            <img src="src/avatars/avatar03.jpg" alt="">
                        </div>
                        <div class="comments_user_name">
                            <a href="">
                                <p>Ivan Ivanov</p>
                            </a>
                        </div>
                    </div>
                    <div class="comments_user_comment">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid debitis dignissimos
                            dolorum eveniet fugit harum perferendis placeat quod.
                        </p>
                    </div>
                </div>
            </div>
            <div class="comments_user_plus grey">
                <div class="comments_user_add_more">
                    <a href="">
                        <i class="fas fa-plus"></i> Show all...
                    </a>
                </div>
            </div>
        </div>
        <div class="main_users">
            <div class="main_users_count graphite">
                Lust users ({{count($data['users'])}})
            </div>
            <div class="main_users_lent graphite">
                @foreach($data['users'] as $user)
                    <div class="users_user">
                        <div class="users_user_profile">
                            <div class="users_user_avatar">
                                <img src="{{$user->getAvatar()}}" alt="">
                            </div>
                            <div class="users_user_name">
                                <a href="{{route('users.show', $user->id)}}">
                                    <p>{{$user->name}}</p>
                                </a>
                                <small>{{$user->roles->role}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
