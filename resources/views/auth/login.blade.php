@extends('layouts.app')

@section('content')
    <body id="login-body">
    <div id="header">
        <header>

            <div id="branding">
                <img src="{{asset('img/mainlogo.png')}}" height="200px" width="200px">
            </div>

        </header>

    </div>
    <div id="login">
        <form id="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <input id="login-btn" type="submit" value="Login">
        </form>

    </div>

    </body>
@endsection
