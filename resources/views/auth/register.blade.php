@extends('layouts.app')

@section('content')
    <div class="login-styling">
    <div class="login-container">
        <div class="bg-image">
            <div class="row" style="margin-left: 40%;">
                <div class="medium-4 medium-centered large-6 large-centered columns">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" style="background-color: whitesmoke; margin-top: 40%;">
                        {{ csrf_field() }}
                        <h5>Admin Registration</h5>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="large-6 float-center">Name</label>

                            <div class="large-9 float-center">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="large-6 float-center">E-Mail Address</label>

                            <div class="large-9 float-center">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="large-6 float-center">Password</label>

                            <div class="large-9 float-center">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="large-6 float-center">Confirm Password</label>

                            <div class="large-9 float-center">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="large-9 float-center">
                                <button type="submit" class="button">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
