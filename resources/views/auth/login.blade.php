@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-3">
                            <a class="btn btn-lg btn-block btn-social btn-google" href="{{ url('auth/google') }}"><i class="fab fa-google"></i>透過 Google 登入</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-3">
                            <a class="btn btn-lg btn-block btn-social btn-facebook" href="{{ url('auth/facebook') }}"><i class="fab fa-facebook-f"></i>透過 Facebook 登入</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-3">
                            <a class="btn btn-lg btn-block btn-social btn-twitter" href="{{ url('auth/twitter') }}"><i class="fab fa-twitter"></i>透過 Twitter 登入</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
