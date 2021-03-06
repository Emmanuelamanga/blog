@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{asset('bootstrap3.3.7/css/bootstrap.css')}}"/>
@endsection

@section('content')
    <div class="w3-container">
        @include('common.messages')
        <br>
        <div class="w3-card w3-round">
            <div class="panel panel-heading w3-center text-uppercase h2">Edit Post</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{route('post.update',[$post->user_id])}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{@method_field("PATCH")}}

                    {{--title input--}}
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Title:</label>
                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('$post->title',$post->title) }}"
                                   autofocus>
                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    {{--description--}}
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : ' ' }}">
                        <label for="description" class="col-md-4 control-label">Description:</label>
                        <div class="col-md-6">
                            <textarea id="description" class="form-control" name="description"
                                      value="{{ old('$post->description',$post->description) }}"></textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    {{--image upload--}}
                    <div class="form-group{{ $errors->has('post_icon') ? ' has-error' : '' }}">

                        <label for="post_icon" class="col-md-4 control-label" >Post Icon:</label>

                        <div class="col-md-6">
                            <input type="file" name="post_icon" class=" w3-border" value="{{old('$post->post_icon')}}">
                            @if ($errors->has('post_icon'))
                                <span class="w3-text-red" role="alert">
                                    <strong>{{ $errors->first('post_icon') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--submit btn--}}
                    <div class="form-group">
                        <span>Current Image</span>
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="w3-btn w3-blue-grey w3-round w3-ripple">
                                <i class="glyphicon glyphicon-edit"></i> Edit Post
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
