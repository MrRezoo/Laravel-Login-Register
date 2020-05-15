@extends('auth.layout.auth-main')

@section('content')
    <div class="authentication-box">
        <div class="text-center"><img src="{{asset('/assets/images/endless-logo.png')}}" alt=""></div>
        <div class="card mt-4 p-4">
            @include('partials.alerts')
            <div class="text-center">
                <h4>@lang('auth.reset password')</h4>
            </div>
            <form class="theme-form" method="POST" action="{{route('auth.password.reset')}}">
                @csrf
                <input type="hidden" name="token" value="{{$token ?? ''}}">
                <div class="form-group">
                    <label for="email" class="col-form-label ">@lang('auth.email')</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                           autofocus readonly>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">@lang('auth.password')</label>

                    <input id="password" type="password"
                           class="form-control @error('password') is-invalid @enderror" name="password" required
                           autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-form-label">@lang('auth.confirm password')</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           required autocomplete="new-password">
                </div>
                <div class="form-group form-row mb-0">
                    <div class="col-md-2">
                        <button class="btn btn-primary" type="submit">انجام</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
