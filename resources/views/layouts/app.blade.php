    <!DOCTYPE html>
    <html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Lar') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/project.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
        </head>
    <body>
        <div id="forms">
        <div class="top-bar">
            <div class="top-bar-left">
{{--        <h3>{{ config('app.name', 'Lar') }}</h3>--}}
                <img src="/images/cytonn-investments.png" style="width=80px; height: 60px; float=right;">
        </div>
        <div class="top-bar-right">
            <ul class="menu dropdown">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/client/login') }}">Login</a></li>
                    <li><a href="{{ url('/client/register') }}">Register</a></li>
                @else
                    <li class="menu align-right">

                        <a href="#" class="dropdown menu" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>

                        <ul class=" " >

                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
             </div>
        </div>

        </nav>

        @yield('content')
    </div>

                        <!-- Right Side Of Navbar -->





        <!-- Scripts -->
        @include('layouts.partials.sliderscript')
        <script src="{{ asset('js/app.js') }}"></script>
        <script> $(document).foundation();</script>
    </body>
    </html>
