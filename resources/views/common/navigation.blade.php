<ul class="w3-navbar w3-card-8 w3-light-grey">
    <li>

        {{--<a class="navbar-brand" href="{{ url('/home') }}">--}}
            {{--<i class="fa fa-home"></i> {{ config('app.name', 'Blog') }}--}}
        {{--</a> --}}
        @auth
         @else
            @endauth
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fa fa-home"></i>{{ config('app.name', 'Blog') }}
            </a>

    </li>


    <!-- Right Side Of Navbar -->
    <!-- Authentication Links -->
    @guest

    <li class="w3-right">
        <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
    <li class="w3-right">
        <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @else
        <li><a href="{{ url('/home') }}">
                <i class="glyphicon glyphicon-dashboard"></i> Dashboard
            </a></li>

        <div class="w3-right">
            <li class="w3-dropdown-hover">

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="glyphicon glyphicon-user"></i> {{ Auth::user()->firstName}} <span class="caret"></span>
                </a>

                <div class="w3-dropdown-content w3-white w3-card-4">
                    <a href="#" class="w3-border-bottom"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </div>

        @endguest
</ul>

</div>
</ul>

