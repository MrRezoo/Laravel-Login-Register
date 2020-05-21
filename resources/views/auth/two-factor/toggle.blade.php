@extends('auth.layout.auth-main')

@section('title' , __('auth.login with magic link'))

@section('content')
    <div class="authentication-box">
        <div class="text-center"><img src="{{asset('/assets/images/endless-logo.png')}}" alt=""></div>
        <div class="card mt-4">
            @if(Auth::user()->hasTwoFactor())
                <div class="card-body">
                    @include('partials.alerts')
                    <div class="text-center">
                        <h4> @lang('auth.two factor authentication')</h4>
                    </div>
                    <div class="text-center">
                        <small
                            class="text-danger">@lang('auth.two factor is active' , ['number' => Auth::user()->phone_number])</small>
                    </div>
                    <input type="hidden" name="recaptcha" id="recaptcha">
                    @error('recaptcha')
                    <ul>
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    </ul>
                    @enderror
                    <div class="form-group form-row mt-3 mb-0">
                        <a class="btn btn-outline-primary-2x btn-block "
                           href="{{route('auth.two.factor.deactivate')}}" type="submit">@lang('auth.deactivate')</a>
                        <a class="btn btn-outline-warning-2x btn-block"
                           href="{{route('home')}}">@lang('public.main page')</a>
                    </div>
                </div>
            @else
                <div class="card-body">
                    @include('partials.alerts')
                    <div class="text-center">
                        <h4> @lang('auth.two factor authentication')</h4>
                    </div>
                    <div class="text-center">
                        <small
                            class="text-danger">@lang('auth.two factor is inactive' , ['number' => Auth::user()->phone_number])</small>
                    </div>
                    <input type="hidden" name="recaptcha" id="recaptcha">
                    @error('recaptcha')
                    <ul>
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    </ul>
                    @enderror
                    <div class="form-group form-row mt-3 mb-0">
                        <a class="btn btn-outline-primary-2x btn-block "
                           href="{{route('auth.two.factor.activate')}}" type="submit">@lang('auth.activate')</a>
                        <a class="btn btn-outline-warning-2x btn-block"
                           href="{{route('home')}}">@lang('public.main page')</a>
                    </div>
                </div>
            @endif
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
