@extends('layouts.app')

@section('content')
    <br>
    <div class="w3-container">

        <div class="w3-panel w3-center w3-wide">
            <header class="w3-container w3-blue-grey">
                <h1>{{ __('Login') }}</h1>
            </header>

        </div>

        <div class="w3-card">
            <form method="POST" action="{{ route('login') }}"
                  class="w3-container w3-card-4 w3-text-blue w3-light-grey  w3-margin" aria-label="{{ __('Login') }}">
                @csrf

                {{--email--}}
                <div class="form-group w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                    <div class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="email" type="email"
                               value="{{ old('email') }}"
                               placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="w3-text-red" role="alert">
                                         <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                {{--password--}}
                <div class="form-group w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
                    <div class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} w3-rest">
                        <input class="w3-input w3-border w3-round-large w3-animate-input" name="password"
                               type="password" value="{{ old('password') }}"
                               placeholder="password">
                        @if ($errors->has('password'))
                            <span class="w3-text-red" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group w3-row w3-section">
                    <div class="w3-col">
                        <div class="form-check">
                            <input class="form-check-input" class="w3-check" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group w3-row w3-section">
                    <div class="w3-col">

                        <button type="submit" class="w3-btn w3-white w3-border w3-round-xlarge w3-border-green">
                            {{ __('Login') }}
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
