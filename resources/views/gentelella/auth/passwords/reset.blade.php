@extends('gentelella.base')

@section('bodyclass', 'login')


@section('body')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
        <section class="login_content">
            <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('비밀번호 재설정') }}">
                <h1>{{ __('비밀번호 재설정') }}</h1>
                {{ csrf_field() }}
                <p>사용하실 비밀번호를 다시 설정해 주세요.<br>비밀번호는 최소 6자리 이상을 입력해야 합니다.</p>

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail 주소') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>


                <div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('비밀번호 재설정') }}
                    </button>
                </div>

                <div class="clearfix"></div>

            </form>
        </section>
        </div>

    </div>
</div>
@endsection
