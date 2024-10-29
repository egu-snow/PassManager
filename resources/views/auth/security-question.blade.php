@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('秘密の質問') }}</div>

                <div class="card-body mt-1">
                    <form method="POST" action="{{ route('security.question') }}">
                        @csrf

                        <div class="form-group">
                            <!--<label class="mb-1" for="security_answer">{{ __('秘密の質問の答え') }}</label>-->
                            <label class="mb-1" for="security_answer">{{ $question }}</label>
                            <input id="security_answer" type="text" class="form-control @error('security_answer') is-invalid @enderror" name="security_answer" required autofocus>

                            @error('security_answer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('確認') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection