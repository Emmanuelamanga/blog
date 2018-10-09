@extends('layouts.app')

@section('content')
    @include('common.messages')
    <div class="w3-panel w3-center w3-wide">
        <header class="w3-container w3-blue-grey">
            <h1>{{ __('Register') }}</h1>
        </header>

    </div>
    <form method="POST" action="{{ route('profile.store') }}"
          class="w3-container w3-card-4 w3-text-blue w3-light-grey  w3-margin" aria-label="{{ __('Register') }}"
          enctype="multipart/form-data">
        @csrf

        {{--user id--}}
        <div class="form-group w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-id-card"></i></div>

            <div class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} w3-rest">
                <input class="w3-input w3-border" name="user_id" type="text" value="{{ old('user_id') }}"
                       placeholder="User ID">
                @if ($errors->has('user_id'))
                    <span class="w3-text-red" role="alert">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        {{--first name--}}
        <div class="form-group w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>

            <div class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} w3-rest">
                <input class="w3-input w3-border" name="firstName" type="text" value="{{ old('firstName') }}"
                       placeholder="First Name">
                @if ($errors->has('firstName'))
                    <span class="w3-text-red" role="alert">
                        <strong>{{ $errors->first('firstName') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        {{--last name --}}
        <div class="form-group w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>

            <div class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} w3-rest">
                <input class="w3-input w3-border" name="lastName" type="text" value="{{ old('lastName') }}"
                       placeholder="First Name">
                @if ($errors->has('lastName'))
                    <span class="w3-text-red" role="alert">
                        <strong>{{ $errors->first('lastName') }}</strong>
                    </span> {{--file--}}
                    <div class="form-group w3-row w3-section">
                        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-camera"></i></div>
                        <div class="form-control{{ $errors->has('avater') ? ' is-invalid' : '' }} w3-rest">
                            <input type="file" name="avater" class="w3-input w3-border">
                            @if ($errors->has('avater'))
                                <span class="w3-text-red" role="alert">
                        <strong>{{ $errors->first('avater') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>

        {{--email--}}
        <div class="form-group w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
            <div class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} w3-rest">
                <input class="w3-input w3-border" name="email" type="email" value="{{ old('email') }}"
                       placeholder="Email">
                @if ($errors->has('email'))
                    <span class="w3-text-red" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>



        {{--bio--}}
        <div class="form-group w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
            <div class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }} w3-rest">
                <textarea class="w3-input w3-border" name="bio" type="text" value="{{ old('bio') }}"
                          placeholder="Tell something about yourself"></textarea>

                @if ($errors->has('bio'))
                    <span class="w3-text-red" role="alert">
                        <strong>{{ $errors->first('bio') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        {{--password--}}
        <div class="form-group w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
            <div class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} w3-rest">
                <input class="w3-input w3-border" name="password" type="password" value="{{ old('password') }}"
                       placeholder="password">
                @if ($errors->has('password'))
                    <span class="w3-text-red" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        {{--confirm password--}}
        <div class="form-group w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
            <div class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }} w3-rest">
                <input class="w3-input w3-border" name="password_confirmation" type="password"
                       value="{{ old('password') }}"
                       placeholder="Confirm Password">
                @if ($errors->has('password_confirmation'))
                    <span class="w3-text-red" role="alert">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="w3-center">
            <button class="w3-button w3-white w3-border w3-border-green w3-round-large w3-wide w3-padding-large"
                    type="submit">Register
            </button>

        </div>
        <br>

    </form>
@endsection
