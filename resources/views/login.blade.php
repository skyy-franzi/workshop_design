@extends('layouts.main')


@section('title', 'Login')

@section('content')
    <section class="d-flex justify-content-center">
    <main class="login-form">
        @include('components.messages')
        <h1>Login</h1>
        <h4 class="mt-3">Sign into your account</h4>
        <form method="POST" action="{{ route('login') }}">
            <input class="form-control my-3 p-2" type="text" placeholder="username" name="username">
            <input class="form-control my-3 p-2" type="password" placeholder="**********" name="password">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input class="btn btn-dark" type="submit" name="submit" value="Login" style="width: 300px;"/>
        </form>
    </main>
    </section>
@endsection
