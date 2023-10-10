@extends('layouts.base')

@section('content')

                                    <div class="text-center">
                                        <div class="col-lg-6 d-none d-lg-block mx-auto my-auto"> <img src="/img/logo.png"> </div>

                                        <h1 class="h4 text-gray-900 mb-4"><marquee> Agence Portuaire, Maritime et Fluviale</marquee>  </h1>
                                    </div>
                                    <form class="user"  method="POST" action="{{ route('login') }}">

                                    @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Enter Email Address..."  autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                                placeholder="Password" name="password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Login') }}
                                        </button>
                                        <hr>
                                    <div class="text-center">
                                        @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                    </div>
                                    </form>


@endsection
