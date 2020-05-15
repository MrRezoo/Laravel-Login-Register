@extends('auth.layout.auth-main')
@section('content')
    <div class="authentication-box">
        <div class="text-center"><img src="{{asset('/assets/images/endless-logo.png')}}" alt=""></div>
        <div class="card mt-4">
            <div class="card-body">
                @include('partials.alerts')
                <div class="text-center">
                    <h4>@lang('public.CS.Jam')</h4>
                </div>
                <div class="text-center">
                    <p>@lang('auth.forget password enter your email')</p>
                </div>
                <form class="theme-form" action="{{route('auth.password.forget')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label" for="email">@lang('auth.email')</label>
                        <input aria-describedby="emailHelp"
                               class="form-control @error('email') is-invalid @enderror"
                               id="email" name="email"
                               type="email" value="{{old('email')}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group form-row mt-3 mb-0">
                        <button class="btn btn-primary btn-block" type="submit">@lang('auth.email send')</button>
                    </div>
                    <div class="login-divider"></div>
                    <div class="form-row social mt-auto">
                        <div class="col-sm-6">
                            <a href="{{route('auth.register.form')}}" class="btn btn-outline-danger-2x btn-block" >@lang('auth.register')</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{route('auth.login.form')}}" class="btn btn-outline-primary-2x btn-block" >@lang('auth.login')</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
