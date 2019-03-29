@extends('layouts.backend')
@section('content')
<section class="section-account">
    <div class="img-backdrop" style="background-image: url('{{ asset('assets/img/img18.jpg') }}')"></div>
    <div class="spacer"></div>
    <div class="card contain-sm style-transparent">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <br/>
                    <span class="text-lg text-bold text-primary">ADMIN LOGIN</span>
                    <br/><br/>
                    <form class="form" action="{{ route('login') }}" accept-charset="utf-8" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" id="username {{$errors->has('email') ? 'inputError' : ''}}" name="email" value="{{ old('email') }}">
                            <label for="username">Username</label>
                            @if ($errors->has('email'))
                                <span class="help-block error">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password {{$errors->has('password') ? 'inputError' : ''}}" name="password">
                            <label for="password">Password</label>
                            @if ($errors->has('password'))
                                <span class="help-block error">{{$errors->first('password')}}</span>
                            @endif
                            <p class="help-block"><a href="{{ route('password.request') }}">Forgotten?</a></p>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-xs-6 text-left">
                                <div class="checkbox checkbox-inline checkbox-styled">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span>Remember me</span>
                                    </label>
                                </div>
                            </div><!--end .col -->
                            <div class="col-xs-6 text-right">
                                <button class="btn btn-primary btn-raised" type="submit">Login</button>
                            </div><!--end .col -->
                        </div><!--end .row -->
                    </form>
                </div><!--end .col -->
                <div class="col-sm-2"></div>
            </div><!--end .row -->
        </div><!--end .card-body -->
    </div><!--end .card -->
</section>
@endsection
