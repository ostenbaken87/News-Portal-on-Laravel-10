@extends('front.layouts.layout')

@section('content')
    <div class="main_register_login">
        <h1>Register</h1>
        <form action="{{route('register.store')}}" method="post">
            @csrf
            <label for="name">Name</label>
            <input type="text"
                   name="name"
                   placeholder="Name">

            <label for="email">E-mail</label>
            <input type="email"
                   name="email"
                   placeholder="E-mail">

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
