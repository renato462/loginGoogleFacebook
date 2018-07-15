<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> {{trans('app.title_login')}}</title>

    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}"/>

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div class="logo-container">
        <!-- Esto es un comentario
        <div>

            <h1 class="logo-name">IN+</h1>

        </div>
        -->
        <h3>{{trans('app.welcome_login').trans('app.app_name')}}</h3>

        <form class="m-t" role="form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       name="email" value="{{ old('email') }}" required="autofocus"
                       placeholder="{{ __('E-Mail Address') }}">

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group">

                <input id="password" type="password"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                       placeholder="{{ __('Password') }}" required="autofocus">

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif

            </div>
            <div>
                <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Login') }}</button>
                <div class="checkbox">
                    <label>
                        <input class="checkbox " type="checkbox"
                               name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            <a href="{{ route('social.auth', 'facebook')}}" class="btn btn-success btn-facebook full-width m-b">
                <i class="fa fa-facebook"> </i> Login con Facebook
            </a>
            <a href="{{ route('social.auth', 'google') }}" class="btn btn-danger btn-google full-width m-b">
                <i class="fa fa-google-plus"> </i> Login con Google +
            </a>



            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>


            <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">{{ __('Register') }}</a>

        </form>
        <p class="m-t">
            <small>{{trans('app.app_powered')}} &copy; {{trans('app.app_year')}}</small>
        </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

</body>

</html>