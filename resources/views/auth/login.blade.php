<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        @include('template.css')
        <title>Login - {{ Config::get('app.name') }}</title>
    </head>
    <body class="skin-brand-light hold-transition login-page" style="background: #F2F2F2">

            <div class="login-box">
                <div class='login-box-header bg-brand'><h4>{{ Config::get('app.name') }}</h4></div>
                <div class="login-box-body">
                    @if($errors->has('login'))
                        @include('includes.alert',['type'=>"danger",'content'=>$errors->first('login')])
                    @endif
                    <h4 class="login-box-msg text-brand">Login to your Account</h4>
                    <form role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                        <div class="form-group has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
                            <span class="glyphicon glyphicon-user form-control-feedback" style='left:0px'></span>
                            <input type="text" class="form-control" placeholder="Username" name='username' autofocus="" style="padding-left: 42.5px;padding-right: 0px" >
                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" placeholder="Password" name='password' style="padding-left: 42.5px;padding-right: 0px" >
                            <span class="glyphicon glyphicon-lock form-control-feedback" style='left:0px'></span>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <button type="submit" class="btn btn-block btn-flat btn-brand"> Login </button>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div><!-- /.col -->
                        </div>
                    </form>
                </div><!-- /.login-box-body -->
            </div><!-- /.login-box -->
        @include('template.js')
    </body>
</html>
