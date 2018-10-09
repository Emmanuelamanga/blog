@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{asset('bootstrap3.3.7/css/bootstrap.css')}}"/>
@endsection

@section('content')
    <div class="w3-container">
        <br>
        @include('common.messages')
        <br>
        <div class="w3-card w3-round">
            <div class="panel panel-heading w3-center text-uppercase h2">All Posts</div>
            @if(count($posts)> 0)
                <div class="w3-center">
                    <ul class="w3-ul w3-card-4">
                        @foreach($posts as $post)
                            <li><b>{{$post->title}} </b>  Created: {{$post->created_at}} <a href="{{route('post.show',[$post->id])}}"><span class="btn btn-sm btn-default"><span class="glyphicon glyphicon-eye-open"></span></span></a></li>
                    @endforeach
                    </ul>
                </div>

            @else
                <img src="{{asset('storage/icon/oops.jpg')}}" class="w3-circle" width="70px" height="70px"/>

                <span class="alert alert-info">
                    <span class="w3-text-red">You have No posts yet. Please Create Some</span>
                </span>
                <br>
                <div class="w3-center">
                    <a href="#" class="w3-btn w3-green btn btn-sm btn-success "> <span
                                class="glyphicon glyphicon-plus-sign"></span> Create Post</a>
                </div>

            @endif
        </div>

    </div>
@endsection
