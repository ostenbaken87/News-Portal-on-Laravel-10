@extends('admin.layouts.layout')

@section('content')
    <div class="main_show wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>All Users</h1>
            </div>
            <div class="main_back">
                <a href="index.html">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
            <div class="main_back">
                <a href="{{route('users.create')}}">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>User name</th>
                <th>User mail</th>
                <th>Avatar</th>
                <th>User role</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <img class="avatar" src="{{$user->getAvatar()}}" alt="">
                    </td>
                    <td>{{ $user->roles ? $user->roles->role : 'No Role' }}</td>
                    <td>
                        <a href="{{route('users.show', $user->id)}}">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('users.edit', $user->id)}}">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <form class="form_delete" action="{{route('users.destroy',$user->id)}}" method="post">
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
    </div>
@endsection
