@extends('layouts.app')

@section('content')
    <body id="user-profile-body">
    <div id="header">
        <header>

            <div id="branding">

                <img src="{{asset('img/mainlogo.png')}}" height="200px" width="200px">

            </div>
            <a href="{{route('logout')}}">Logout</a>
        </header>

    </div>
    <div id="submenu">

        <a id="user-profile" href="{{url('user-profile/edit')}}">User Profile</a>

    </div>


    <form id="user-details" method="POST" action="{{route('saveProfile')}}">
        @csrf
        <label for="name">Name</label><br>
        <input id="name" type="text" name="name" @isset($userData->name) value="{{$userData->name}}" @endisset><br><br>
        <label for="surname">Surname</label><br>
        <input id="surname" type="text" name="surname" @isset($userData->surname) value="{{$userData->surname}}" @endisset><br><br>
        <label for="email">Email</label><br>
        <input id="email" type="email" name="email" @isset($userData->email) value="{{$userData->email}}" @endisset><br><br>
        <input id="submit" type="submit" value="Submit">

    </form>


    </body>
@endsection
