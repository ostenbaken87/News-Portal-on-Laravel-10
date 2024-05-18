@extends('front.layouts.layout')

@section('content')
    <div class="main_register_login">
        <h1>Login</h1>
        <form action="{{route('login.store')}}" method="post">
            @csrf

            <label for="email">E-mail</label>
            <input type="email"
                   name="email"
                   placeholder="E-mail">

            <label for="password">Password</label>
            <input type="password"
                   name="password"
                   placeholder="Password">

            <button type="submit" value="Register">
                Login
            </button>
        </form>
    </div>
@endsection
