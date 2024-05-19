@extends('front.layouts.layout')

@section('content')
    <div class="main_register_login">
        <h1>Register</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="alerts_list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('register.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name">Name</label>
            <input type="text"
                   name="name"
                   placeholder="Name"
                   value="{{old('name')}}">

            <label for="email">E-mail</label>
            <input type="email"
                   name="email"
                   placeholder="E-mail"
                   value="{{old('email')}}">

            <label for="password">Password</label>
            <input type="password"
                   name="password"
                   placeholder="Password">

            <label for="password_confirmation">Password confirmation</label>
            <input type="password"
                   name="password_confirmation"
                   placeholder="Password confirmation">

            <label for="avatar">Avatar</label>
            <p>не обязательное поле</p>
            <input type="file"
                   name="avatar"
                   id="avatar">

            <button type="submit" value="Register">
                Register
            </button>
        </form>
    </div>
@endsection
