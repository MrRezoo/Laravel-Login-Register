@extends('auth.layout.auth-main')

@section('title' , __('auth.two factor authentication'))

@section('content')
    <div class="authentication-box">
        <div class="text-center"><img src="{{asset('/assets/images/endless-logo.png')}}" alt=""></div>
        <div class="card mt-4">
            <div class="card-body">
                @include('partials.alerts')
                <div class="text-center">
                    <h4> @lang('auth.two factor authentication')</h4>
                </div>
                <hr>
                <div class="text-center">
                    <small class="small text-danger card-text">@lang('auth.we\'ve send a SMS to your number')</small>
                </div>
                <form class="theme-form" action="{{route('auth.login.code')}}" method="POST">
                    @csrf
                    <input type="hidden" name="recaptcha" id="recaptcha">
                    @error('recaptcha')
                    <ul>
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    </ul>
                    @enderror
                    <div class="form-group rounded p-4 opt-box">
                        <label class="col-form-label" for="code">@lang('auth.enter code')</label>
                        <div class="form-row">
                            <div class="col">
                                <input id="code"
                                       class="form-control digits text-center opt-text @error('code') is-invalid @enderror"
                                       type="code" name="code"
                                       placeholder="00   00   00"
                                       maxlength="6">
                                @error('code')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 mb-4"><span class="reset-password-link"><a
                                class="btn-link text-danger text-monospace" href="{{route('auth.two.factor.resent')}}">@lang('auth.didNotGetCode')</a></span></div>
                    <div class="form-group form-row mt-3 mb-0">
                        <button class="btn btn-outline-primary-2x btn-block"
                                type="submit">@lang('auth.confirm')</button>
                        <a class="btn btn-outline-warning-2x btn-block"
                           href="{{route('home')}}">@lang('public.main page')</a>
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
