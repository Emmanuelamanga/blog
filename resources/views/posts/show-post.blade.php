@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{asset('bootstrap3.3.7/css/bootstrap.css')}}"/>
@endsection

@section('content')
    <div class="w3-container">
        @include('common.messages')
        <br>
        <div class="w3-card w3-round w3-white w3-center">
           <span class="h3">{{$post->title}}</span>
            <div class="well well-sm ">
                {{$post->description}}
            </div>
            <div>
               <i> {{--Author: {{$post->user_id}} :--}} created at: {{$post->created_at}} Updated At: {{$post->updated_at}}</i>
            </div>
            <br>
            <div class="w3-center">
                <a href="{{route('post.edit',[$post->id])}}">
                    <span class="w3-btn w3-blue-grey w3-round-large w3-ripple"> <span class="glyphicon glyphicon-edit"></span> Edit</span>
                </a>
                <a href="{{route('post.destroy',[$post->id])}}">
                    <span class="w3-btn w3-red w3-round-large w3-ripple"> <span class="glyphicon glyphicon-remove"></span> Delete</span>
                </a>

            </div>

        </div>

    </div>
@endsection
