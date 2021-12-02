@extends('layouts.main')


@section('title', 'Login')

@section('content')
    <main class="login-form">
        @include('components.messages')
        <form method="POST" action="{{ route('login') }}">
            <label for="username">Username</label> <br>
            <input type="text" name="username"><br>
            <br>
            <label for="password">Passwort</label><br>
            <input type="password" name="password">
            <br>
            <br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="submit" name="submit" value="Login"/>
        </form>
    </main>
@endsection
