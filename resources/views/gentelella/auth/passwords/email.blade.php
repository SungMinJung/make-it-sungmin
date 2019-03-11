@extends('gentelella.base')

@section('bodyclass', 'login')


@section('body')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
        <section class="login_content">
            <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('비밀번호 재설정') }}">
                <h1>{{ __('비밀번호 재설정') }}</h1>
                {{ csrf_field() }}


                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail 주소') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary col-sm-12">
                        {{ __('비밀번호 재설정 링크 발송') }}
                    </button>
                </div>

                <div class="clearfix"></div>

            </form>
        </section>
        </div>

    </div>
</div>
@endsection


