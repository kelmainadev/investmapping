<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
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
<div>
    <img src="./images/cytonn-investments.png" style="width=80px; height: 50px; float=right;">
</div>
<div id="app">

    {{-- The Navigation bar starts here--}}
    {{--authentication--}}
</div>
    <div>
        <div class="top-bar">
            <div class="top-bar-left">
                <h3>{{ config('app.name', 'Lar') }}</h3>
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
                <div

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

        <div class="main-section">
            <div class="side-navigation" style="height: 800px; width: 300px; background-color: whitesmoke; margin-top: 50px;">
                <ul class="menu vertical">
                    <li ><a href="#"></i>Home</a></li><hr/>
                    <li class="divider"> Manage  Products</li><hr/>
                    <li ><a href="/admin/categories"></i>Categories</a></li><hr/>
                    <li><a href="/admin/products">Products</a></li><hr/>
                    <li><a href="/admin/products">View Products</a></li><hr/>
                    <li class="divider"> Manage  clients</li><hr/>
                    <li><a href="#">Client Enquiries</a></li><hr/>
                    <li><a href="#">Client Notifications</a></li><hr/>
                    <li class="divider"> Reports</li><hr/>
                    <li><a href="#">products</a></li><hr/>
                </ul>
            </div>
            <div class="">
                @yield('content')
            </div>
        </div>





<div id="copyright text-right" style="margin-top: 20px; background-color:#006666; text-align: center;height: 40px;">© Copyright 2013 Cytonn Invenstments</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script> $(document).foundation();</script>
    </body>
</html>