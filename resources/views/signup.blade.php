@extends('layouts.main')


@section('title', 'Register')

@section('content')
    <section class="d-flex justify-content-center">
    <main class="login-form">
        @include('components.messages')
        <h1>Sign up</h1>
        <h4 class="mt-3">Sign up for your account</h4>
        <form method="POST" action="{{ route('signup') }}">
            <input class="form-control my-3 p-2" placeholder="username" type="text" name="username">
            <input class="form-control my-3 p-2" placeholder="firstname" type="text" name="firstname">
            <input class="form-control my-3 p-2" placeholder="lastname" type="text" name="lastname">
            <input class="form-control my-3 p-2" placeholder="email" type="text" name="email">
            <input class="form-control my-3 p-2" placeholder="password" type="password" name="password">
            <input class="form-control my-3 p-2" type="password" placeholder="repeat password" name="newPassword">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input class="btn btn-dark" type="submit" name="submit" value="Register" style="width: 300px;"/>
        </form>
    </main>
    </section>
@endsection
