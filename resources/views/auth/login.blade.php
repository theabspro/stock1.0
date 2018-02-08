@extends('theme1.layouts.auth')

@section('content')


        <!--header-->
        <div class="header-w3l">
            <h1>
                <span>S</span>tock
                <span>M</span>aintanance
                <span>S</span>ystem
            </h1>
        </div>
        <!--//header-->
        <div class="main-content-agile">
            <div class="sub-main-w3">
                <h2>Login Here
                    <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                </h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="pom-agile">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input type="text" class="user form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('username'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="pom-agile">
                        <span class="fa fa-key" aria-hidden="true"></span>
                        <input id="password" type="password" class="pass form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="sub-w3l">
                        <div class="sub-agile">
                            <input type="checkbox" id="brand1" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="brand1">
                                <span></span>Remember me</label>
                        </div>
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                        <div class="clear"></div>
                    </div>
                    <div class="right-w3l">
                   
                    <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
        <!--//main-->
@endsection
