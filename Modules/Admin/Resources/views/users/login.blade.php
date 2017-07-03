@extends('admin::layouts.empty')


@section('main')

	<div class="login">

        <div class="login__block active" id="l-login">
            <div class="login__block__header">
                <i class="zmdi zmdi-account-circle"></i>
                Hi there! Please Sign in

                <div class="actions actions--inverse login__block__actions">
                    <div class="dropdown">
                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-register" href="">Create an account</a>
                            <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-forget-password" href="">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="login__block__body">
                
                <form action="/admin/login" method="post" novalidate>

                    {{ csrf_field() }}

                    <div class="form-group @if ($errors->has('username')) has-danger @endif">
                        @if ($errors->has('username')) <label class="form-control-label">{{$errors->first('username')}}</label> @endif
                        <input type="username" name="username" value="" placeholder="Username" class="form-control @if ($errors->has('username')) form-control-danger @endif">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group @if ($errors->has('password')) has-danger @endif">
                        @if ($errors->has('password')) <label class="form-control-label">{{$errors->first('password')}}</label> @endif
                        <input type="password" name="password" placeholder="Password" class="form-control @if ($errors->has('password')) form-control-danger @endif">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" value="1" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Remember me</span>
                        </label>
                    </div>

                    <button class="btn btn-primary btn--icon-text"><i class="zmdi fa fa-sign-in"></i>Login</button>

                </form>
                
            </div>
        </div>

   	</div>

@endsection