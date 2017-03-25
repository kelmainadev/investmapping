<div class="top-bar">
    <div class="top-bar-left">
        <h3>{{ config('app.name', 'Lar') }}</h3>
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