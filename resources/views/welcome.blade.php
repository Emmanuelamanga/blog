<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ config('app.name', 'Blog') }}</title>
    <link rel="icon" href="{{asset('storage/icon/images.jpg')}}"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('bootstrap3.3.7/css/bootstrap.css')}}"/>

    <link href="{{ asset('css/w3.css') }}" rel="stylesheet">
</head>
<body>
{{--?include the navigation bar--}}
@include('common.navigation')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            @if(count($posts)>0)
                @else
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <span class="glow h3"> NO POSTS</span>
                    </div>

                </div>
            @endif
        </div>
        <div class="col-md-2">
            <div class="well">
                <h5> <u>LATEST POSTS</u> </h5>


            </div>
            <div class="well">
                <h5> <u>ELSEWHERE</u> </h5>
                <ul class="" style="list-style-type: none; color:blue; cursor: pointer;">
                    <li><a>GitHub</a></li>
                    <li><a>Twitter</a> </li>
                    <li><a>Facebook</a> </li>
                </ul>
            </div>
        </div>

    </div>
</div>


</body>
</html>
