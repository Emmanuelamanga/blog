<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}: @yield('title')</title>
    <link rel="icon" href="{{asset('storage/icon/images.jpg')}}"/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    @yield('styles')
    {{--<link rel="stylesheet" href="{{asset('bootstrap3.3.7/css/bootstrap.css')}}"/>--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/w3.css') }}" rel="stylesheet">


</head>
<body>
<div class="w3-container">
    @include('common.navigation')

    {{--create a grid--}}

    <div class="w3-row w3-container">
        @auth
        <div class="w3-col m4">
            <br>
            <table class="w3-table w3-bordered w3-striped w3-card-4">
                <tr>
                    <td colspan="2" class="w3-center">

                        <img src="{{asset('storage/avaters/'.Auth::User()->picture)}}" class="w3-circle" width="100px"
                             height="100px">

                        <br>
                        <span class="w3-btn w3-round-large w3-khaki w3-right w3-tiny"><i class="fa fa-pencil-square-o"
                                                                                         aria-hidden="true"></i> Edit Profile</span>
                    </td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td class="">{{Auth::User()->firstName." ".Auth::User()->LastName}}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{Auth::User()->email}}</td>
                </tr>
                <tr>
                    <th>Bio:</th>
                    <td>{{Auth::User()->bio}}</td>
                </tr>
            </table>
            <br>
            <div class="w3-card-8">
                <nav class="w3-sidenav">
                    <a class="w3-border-bottom" href="{{route('post.index')}}">My Blog Posts <span class="w3-badge w3-dark-grey">{{count($posts)}}</span></a>
                    <a class="w3-border-bottom" href="{{route('post.create')}}">Create Blog Post</a>
                    <a class="w3-border-bottom" href="#">Latest </a>
                </nav>
            </div>

        </div>

        @else
            <br>
            <div class="w3-col m2">
                <img src="{{asset('storage/icon/oops.jpg')}}" class="w3-circle" width="70px" height="70px"/>

                <div class="w3-panel w3-pale-red w3-round-large">
                    <h4 class="w3-round-xxlarge">PLEASE LOG IN <br> OR <br> REGISTER <br> TO PROCEED <i
                                class="fa fa-hand-o-right" aria-hidden="true"></i></h4>
                </div>
            </div>
            @endauth

            <div class="w3-col m8   ">
                @yield('content')
            </div>

    </div>


</div>
@yield('scripts')
</body>
</html>
