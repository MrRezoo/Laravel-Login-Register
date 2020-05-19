@extends('auth.layout.auth-main')

@section('title' , __('auth.login with magic link'))

@section('content')
    <div class="authentication-box">
        <div class="text-center"><img src="{{asset('/assets/images/endless-logo.png')}}" alt=""></div>
        <div class="card mt-4">
            <div class="card-body">
                @include('partials.alerts')
                <div class="text-center">
                    <h4>@lang('auth.login with magic link')</h4>
                </div>
                <div class="text-center">
                    <small style="color: red">*تنها کاربرانی که ثبت نام کردند میتوانند از این امکان استفاده کنند*</small>
                </div>
                <form class="theme-form" action="{{route('auth.magic.send.token')}}" method="POST">
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
                    <div class="offset-sm-3">
                    </div>
                    <div class="form-row mt-auto">
                        <div class="col-sm-6 p-1">
                            <input type="checkbox" name="remember" id="remember">
                            <small class="form-check-label" for="remember">@lang('auth.remember me')</small>
                        </div>
                        <div class="col-sm-6 text-right pt-1">
                            <a href="{{route('auth.login.form')}}"><small>@lang('auth.login normal')</small></a>
                        </div>
                    </div>
                    <div class="form-group form-row mt-3 mb-0">
                        <button class="btn btn-outline-warning-2x btn-block "
                                type="submit">@lang('auth.send magic link')</button>
                        <a class="btn btn-outline-primary-2x btn-block"
                               href="{{route('auth.register.form')}}" >@lang('auth.register')</a>
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
