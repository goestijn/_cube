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
                <div class="form-group form-group--float form-group--centered">
                    <input type="text" class="form-control">
                    <label>Email Address</label>
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group form-group--float form-group--centered">
                    <input type="password" class="form-control">
                    <label>Password</label>
                    <i class="form-group__bar"></i>
                </div>

                <a href="index.html" class="btn btn-primary btn--icon"><i class="fa fa-sign-in"></i></a>
            </div>
        </div>

   	</div>

@endsection