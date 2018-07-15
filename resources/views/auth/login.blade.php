<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Sign in Form with Social Login Buttons</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .login-form {
            width: 340px;
            margin: 30px auto;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .login-form .hint-text {
            color: #777;
            padding-bottom: 15px;
            text-align: center;
        }

        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .login-btn {
            font-size: 15px;
            font-weight: bold;
        }

        .or-seperator {
            margin: 20px 0 0px;
            text-align: center;
            border-top: 1px solid #ccc;
        }

        .or-seperator i {
            padding: 0 10px;
            background: #f7f7f7;
            position: relative;
            top: -11px;
            z-index: 1;
        }

        .social-btn .btn {
            margin: 10px 0;
            font-size: 15px;
            text-align: left;
            line-height: 24px;
        }

        .social-btn .btn i {
            float: left;
            margin: 4px 15px 0 5px;
            min-width: 15px;
        }

        .input-group-addon .fa {
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="login-form">
    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf


        <h2 class="text-center">{{ __('Login') }}</h2>
        <div class="text-center social-btn">
            <a href="{{ route('social.auth', 'facebook')}}" class="btn btn-primary btn-block"><i
                        class="fa fa-facebook"></i> {{ __('Login') }} con <b>Facebook</b></a>
            <a href="{{ route('social.auth', 'google') }}" class="btn btn-danger btn-block"><i class="fa fa-google"></i>
                {{ __('Login') }} con <b>Google</b></a>
        </div>
        <div class="or-seperator"><i>or</i></div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       name="email" value="{{ old('email') }}" required="autofocus"
                       placeholder="{{ __('E-Mail Address') }}">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input id="password" type="password"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                       placeholder="{{ __('Password') }}" required="autofocus">

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif

            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block login-btn">{{ __('Login') }}</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline">
                <input class="checkbox " type="checkbox"
                       name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
            </label>

            <a href="{{ route('password.request') }}"
               class="pull-right text-success">{{ __('Forgot Your Password?') }}</a>

        </div>

    </form>
    <div class="hint-text small">No tienes cuenta? <a href="{{ route('register') }}"
                                                           class="text-success">{{ __('Register') }}</a></div>
</div>
</body>
</html>