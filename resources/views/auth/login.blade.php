@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="bg-image">
        <div class="row">
            <div class="medium-4 medium-centered large-6 large-centered columns">

                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    <div class="row column log-in-form">
                        {{ csrf_field() }}

                        <div class="form-group"{{ $errors->has('email') ? ' has-error' : '' }} >
                            <label for="email" class="large-6 float-center">E-Mail Address</label>

                            <div class="large-6 float-center">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="large-6 float-center">Password</label>

                            <div class="large-6 float-center">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="large-6 float-center">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="large-6 float-center">
                                <button type="submit" class="button">
                                    Login
                                </button>
                                    <br/>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>

                    </div>
                </form>


    </div>
</div>
</div>


@endsection
