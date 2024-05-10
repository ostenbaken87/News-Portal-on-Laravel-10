@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>User - {{ $user->name }}</h1>
            </div>
            <div class="main_back">
                <a href="{{route('users.index')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        <div class="main_post_items">

            <div class="main_post_title">
                <div class="post_title_name">
                    User name:
                </div>
                <div class="post_title_text">
                    {{ $user->name }}
                </div>
            </div>

            <div class="main_post_description">
                <div class="post_description_name">
                    User mail:
                </div>
                <div class="post_description_text">
                    {{ $user->email }}
                </div>
            </div>

            <div class="main_post_image">
                <div class="post_image_name">
                    User avatar:
                </div>
                <div class="user_image_avatar">
                    <img src="{{ $user->getAvatar() }}" alt="">
                </div>
            </div>

            <div class="main_post_category">
                <div class="post_category_name">
                    User role:
                </div>
                <div class="post_category_category">
                    {{ $user->roles ? $user->roles->role : 'No Role' }}
                </div>
            </div>

            <div class="main_post_buttons">
                <button type="submit" class="btn-edit">
                    <a href="{{route('users.edit', $user->id)}}">Edit</a>
                </button>
                <button type="submit" class="btn-delete">
                    Delete
                </button>
            </div>
        </div>
    </div>
@endsection
