@extends('admin.layouts.layout')

@section('content')
    <div class="wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>All Tags</h1>
            </div>
            <div class="main_back">
                <a href="{{route('admin.home')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
            <div class="main_back">
                <a href="{{route('tags.create')}}">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        @if(count($tags))
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->label}}</td>
                        <td>
                            <a href="{{route('tags.show',$tag->id)}}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('tags.edit',$tag->id)}}">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form class="form_delete" action="{{route('tags.destroy',$tag->id)}}" method="post">
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
                Тегов пока нет ... добавти теги.
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
        @endif
    </div>
@endsection
