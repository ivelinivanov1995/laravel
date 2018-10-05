@extends('layouts.app')

@section('content')
    <body>
    <div id="header">
        <header>

            <div id="branding">
                <img src="{{asset('img/mainlogo.png')}}" height="200px" width="200px">
            </div>
            <div id="login-button">
                <a href="{{route('login')}}">Login</a>
            </div>

        </header>

    </div>
    <div id="main-message">
        <h3>Lorem Ipsum</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book.</p>

    </div>
    <div>
        <table>
            <tr>
                <th>Lorem Ipsum</th>
                <th>Section</th>
                <th>Ipsum</th>
            </tr>
            <tr>
            </tr>
            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book.
            </td>
            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book.
            </td>
            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book.
            </td>
        </table>
    </div>

    <div>
    </div>

    </body>

@endsection

