@extends('layouts.main')


@section('title', 'Register')

@section('content')
    <main class="login-form">
        @include('components.messages')
        <form method="POST" action="{{ route('signup') }}">
            <label for="username">Username:</label> <br>
            <input type="text" name="username"><br>
            <br>
            <label for="firstname">Vorname:</label> <br>
            <input type="text" name="firstname"><br>
            <br>
            <label for="lastname">Nachname:</label> <br>
            <input type="text" name="lastname"><br>
            <br>
            <label for="email">E-Mail:</label> <br>
            <input type="text" name="email"><br>
            <br>
            <label for="password">Passwort:</label><br>
            <input type="password" name="password">
            <br>
            <br>
            <label for="wdhpassword">Passwort Erneut eingeben:</label><br>
            <input type="password" name="newPassword">
            <br>
            <br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="submit" name="submit" value="Register"/>
        </form>
    </main>
@endsection
