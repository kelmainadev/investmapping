<!DOCTYPE html>
    <div lang="{{ config('app.locale') }}">
        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('css/project.css') }}" rel="stylesheet">

            <!-- Scripts -->
            <script>
                window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
                ]) !!};
            </script>
        </head>
    </div>
        <body>
        <div>
            {{-- The Navigation bar starts here--}}
            {{--authentication--}}
        </div>
        <div>
            <div class="top-bar">
                <div class="top-bar-left">
                    {{--<h3>{{ config('app.name', 'Lar') }}</h3>--}}
                    <img src={{url('images/cytonn-investments.png')}} style="width=150px; height: 50px; float=right;">

                </div>
                @if (Auth::guest())

            </div>
            <div class="top-bar-right">
                <ul class="menu dropdown">
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
                <div>
                </div>
                <div>

                    @else
                        {{--if a user is authenticated--}}



                        <div class="top-bar">
                            <div class="top-bar-left">
                            </div>
                            <div class="top-bar-right">
                                <li class="menu align-right">

                                    <a href="#" class="menu" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                    </a>
                                </li>

                                <ul class=" dropdown menu">

                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                                </li>
                                @endif
                            </div>
                        </div>
                </div>
            </div>
            {{--Navigation bar ends here--}}

            {{--This is side Navigation--}}
            <div class="main-section">
                <div class="side-navigation" >
                    <ul class="menu vertical">
                        <li><a href="#"></i>Home</a></li> <hr>
                        <li><a href="{{ url('/client/products') }}"></i>products</a></li> <hr>
                        <li><a href="{{ url('/client/investments') }}">Investments</a></li><hr>
                        <li><a href="{{ url('/client/enquiries') }}">Enquiries</a></li><hr>
                        <li><a href="#">Notifications</a></li><hr>
                    </ul>

                </div>
                <div>
                    @yield('content')
                </div>
            </div>
            @include('layouts.partials.footer')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script> $(document).foundation();</script>
        </body>
    </html>