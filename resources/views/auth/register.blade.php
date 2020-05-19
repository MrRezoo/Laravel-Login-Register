@extends('auth.layout.auth-main')

@section('title',__('auth.register'))

@section('content')
    <div class="authentication-box">
        <div class="text-center"><img src='{{asset("/assets/images/endless-logo.png")}}' alt=""></div>
        <div class="card mt-4 p-4">
            @include('partials.alerts')
            <h4 class="text-center">@lang('auth.register user')</h4>
            <form class="theme-form" action="{{route('auth.register')}}" method="POST">
                @csrf
                <input type="hidden" name="recaptcha" id="recaptcha">
                @error('recaptcha')
                <ul>
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                </ul>
                @enderror
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">

                            <div class="offset-sm-3">
                            </div>
                            <label class="col-form-label" for="name">@lang('auth.name')</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{old('name')}}"
                                   placeholder="@lang('auth.enter your name')">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label" for="last_name">@lang('auth.last name')</label>
                            <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" id="last_name" value="{{old('last_name')}}"
                                   placeholder="@lang('auth.enter your last name')">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="email">@lang('auth.email')</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{old('email')}}"
                           aria-describedby="emailHelp" placeholder="@lang('auth.enter your email')">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="phone_number">@lang('auth.phone number')</label>
                    <input class="form-control @error('phone_number') is-invalid @enderror " type="tel" name="phone_number" id="phone_number" value="{{old('phone_number')}}"
                           placeholder="@lang('auth.enter your phone number')">
                    @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="password">@lang('auth.password')</label>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password"
                           placeholder="@lang('auth.enter your password')">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="col-form-label"
                           for="password_confirmation">@lang('auth.confirm password')</label>
                    <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation"
                           id="password_confirmation" placeholder="@lang('auth.confirm your password')">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="offset-sm-3">
                </div>
                <div class="form-row">
                    <div class="col-sm-4">
                        <button class="btn btn-outline-primary-2x btn-block" type="submit">@lang('auth.register')</button>
                    </div>
                    <div class="col-sm-8">
                        <a class="btn btn-outline-danger-2x btn-block" href="{{route('auth.login.form')}}" type="submit">@lang('auth.early register')</a>
                    </div>
                </div>
                <div class="form-divider"></div>
                <div class="social form-row mt-auto">
                    <div class="col-sm-12">
                        <a class="btn btn-danger btn-block " href="{{route('auth.login.provider.redirect','google')}}" ><i class="fa fa-google"></i></a>
                    </div>
                </div>
            </form>
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
