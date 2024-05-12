@extends('admin.layouts.layout')

@section('content')
    <div class="main_show wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>All Categories</h1>
            </div>
            <div class="main_back">
                <a href="{{route('admin.home')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
            <div class="main_back">
                <a href="{{route('categories.create')}}">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        @if(count($categories))
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->title}}</td>
                        <td>
                            <a href="{{route('categories.show',$category->id)}}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('categories.edit',$category->id)}}">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form class="form_delete" action="{{route('categories.destroy',$category->id)}}" method="post">
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
                Категорий пока нет ... добавти категорию.
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
        @endif
    </div>
@endsection
