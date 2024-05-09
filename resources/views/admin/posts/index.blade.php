@extends('admin.layouts.layout')

@section('content')
    <div class="main_show wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>All Posts</h1>
            </div>
            <div class="main_back">
                <a href="index.html">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
            <div class="main_back">
                <a href="{{route('posts.create')}}">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        @if(count($posts))
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Date</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($posts as $post)
                   <tr>
                       <td>{{$post->id}}</td>
                       <td>{{$post->title}}</td>
                       <td>{{$post->desc}}</td>
                       <td>{{$post->category->title}}</td>
                       <td>{{$post->tags->pluck('label')->join(', ')}}</td>
                       <td>{{$post->getPostDate()}}</td>
                       <td>
                           <a href="{{route('posts.show', $post->id)}}">
                               <i class="fas fa-eye"></i>
                           </a>
                       </td>
                       <td>
                           <a href="{{route('posts.edit', $post->id)}}">
                               <i class="fa-solid fa-pencil"></i>
                           </a>
                       </td>
                       <td>
                           <form class="form_delete" action="{{route('posts.destroy',$post->id)}}" method="post">
                               @csrf
                               @method('DELETE')
                               <button type="submit" onclick="return confirm('Подтвердите удаление')">
                                   <i class="fas fa-trash"></i>
                               </button>
                           </form>
                       </td>
                   </tr>
               @endforeach
                </tbody>
            </table>
        @else
            <div class="message">
                <i class="fa-solid fa-triangle-exclamation"></i>
                Постов пока нет ... добавти пост.
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
        @endif
    </div>
@endsection
