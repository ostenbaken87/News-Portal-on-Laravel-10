@extends('admin.layouts.layout')

@section('content')
    <div class="wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>All Roles</h1>
            </div>
            <div class="main_back">
                <a href="{{route('admin.home')}}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
            <div class="main_back">
                <a href="{{route('roles.create')}}">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        @if(count($roles))
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->role}}</td>
                        <td>
                            <a href="{{route('roles.show',$role->id)}}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('roles.edit',$role->id)}}">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form class="form_delete" action="{{route('roles.destroy',$role->id)}}" method="post">
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
                Ролей пока нет ... добавти роль.
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
        @endif
    </div>
@endsection
