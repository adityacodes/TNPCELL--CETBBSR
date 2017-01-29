@extends('layouts.app')

@section('stylesheets')
<style>
/* DIV-element with black background and 50% opacity set */
div.overlay {
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    background: #000;
    opacity: 0.5;
    filter: alpha(opacity = 50); /* required for opacity to work in IE */
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row clearfix">
        <div class="col-md-8 col-md-offset-2 spacer2">
            <div class="card">
                <div class="header">
                    <strong class="login"><i class="fa fa-pencil-square"></i> Register</strong>
                    <div class="clearfix"></div>
                    <hr>
                </div>
                <div class="content">
                    <form class="form-horizontal" role="form" autocomplete="off" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Registration No.</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-info fa-fw"></i>
                                    </span>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o fa-fw"></i>
                                    </span>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key fa-fw"></i>
                                    </span>
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key fa-fw"></i>
                                    </span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                </div>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" id="register">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>

                                <a class="btn btn-link" href="{{ url('/login') }}">Already a member?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


