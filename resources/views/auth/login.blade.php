@extends('auth.layout.auth-main')

@section('title',__('auth.login'))


@section('content')
    <div class="authentication-box">
        <div class="text-center"><img src="{{asset('/assets/images/endless-logo.png')}}" alt=""></div>
        <div class="card mt-4">
            <div class="card-body">
                @include('partials.alerts')
                <div class="text-center">
                    <h4>@lang('auth.login')</h4>
                </div>
                <form class="theme-form" action="{{route('auth.login')}}" method="POST">
                    @csrf
                    <input type="hidden" name="recaptcha" id="recaptcha">
                    @error('recaptcha')
                    <ul>
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    </ul>
                    @enderror
                    <div class="form-group">
                        <label class="col-form-label" for="email">@lang('auth.email')</label>
                        <input aria-describedby="emailHelp"
                               class="form-control @error('email') is-invalid @enderror"
                               id="email" name="email"
                               placeholder="@lang('auth.enter your email')"
                               type="email" value="{{old('email')}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="password">@lang('auth.password')</label>
                        <input class="form-control @error('password') is-invalid @enderror " type="password"
                               name="password" id="password"
                               placeholder="@lang('auth.enter your password')">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="offset-sm-3">
                    </div>
                    <div class="form-row mt-auto">
                        <div class="col-sm-6 p-1">
                            <input type="checkbox" name="remember" id="remember">
                            <small class="form-check-label" for="remember">@lang('auth.remember me')</small>
                        </div>
                        <div class="col-sm-6 text-right pt-1">
                            <a href="{{route('auth.magic.login.form')}}"><small>@lang('auth.login with magic link')</small></a>
                        </div>
                    </div>
                    <div class="form-group form-row mt-3 mb-0">
                        <button class="btn btn-primary btn-block " type="submit">@lang('auth.login')</button>
                    </div>
                    <div class="form-group form-row mt-3 mb-0 ">
                        <a href="{{route('auth.password.forget.form')}}" class="btn btn-outline-danger-2x btn-block"
                        >@lang('auth.forget your password?')</a>
                    </div>
                    <div class="login-divider"></div>
                    <div class="form-row social mt-auto">
                        <div class="col-sm-6">
                            <a href="{{route('auth.register.form')}}"
                               class="btn btn-primary btn-block">@lang('auth.register')</a>
                        </div>
                        <div class="col-sm-6">
                            <a class="btn btn-danger btn-block "
                               href="{{route('auth.login.provider.redirect','google')}}">@lang('auth.login with google')</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'login'}).then(function (token) {
                if (token) {
                    document.getElementById('recaptcha').value = token;
                }
            });
        });
    </script>
@endsection
